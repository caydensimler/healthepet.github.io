<?php

namespace App\Http\Controllers\Auth;

use App\User;
use Illuminate\Http\Request;
use Session;
use Validator;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\ThrottlesLogins;
use Illuminate\Foundation\Auth\AuthenticatesAndRegistersUsers;
use Auth;
use \Exception;

class AuthController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Registration & Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users, as well as the
    | authentication of existing users. By default, this controller uses
    | a simple trait to add these behaviors. Why don't you explore it?
    |
    */

    use AuthenticatesAndRegistersUsers, ThrottlesLogins;

    protected $redirectPath;

    public function __construct()
    {
        $this->middleware('guest', ['except' => 'getLogout']);
        $this->redirectPath = action("PetsController@index");
    }

    protected function validator(array $data)
    {
        $user = User::where('email', $data['email'])->first();

        if(is_null($user)){
            return Validator::make($data, [
                'name' => 'required|max:255',
                'email' => 'required|email|max:255|unique:users',
                'password' => 'required|confirmed|min:6',
            ]);
        } else {
            return Validator::make($data, [
                'name' => 'required|max:255',
                'email' => 'required|email|max:255',
                'password' => 'required|confirmed|min:6',
            ]);
        }
      
    }

    public function postLogin(Request $request) {
        if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            return redirect('/pets');
        } else {
            Session::flash('loginErrorMessage', 'Invalid email or password.');

            return redirect('/');
        }
    }

    public function postRegister(Request $request) {
        $validator = Validator::make($request->all(), [
            'name' => 'required|max:255',
            'email' => 'required|email|max:255',
            'password' => 'required|confirmed|min:6',
        ]);

        $user = User::where('email', $request->email)->first();
        $emailExists = !is_null($user) && $user->email == $request->email;
        $passwordsMatch = $request->password === $request->password_confirmation;
        $passwordLength = strlen($request->password) >= 6;

        // Validation passes and user doesn't already exist.
        if ($validator->passes() && !$user && $passwordsMatch && $passwordLength) {
            $this->create($request->all());
            Session::flash('accountCreated', 'Account successfully created.');
            Session::flash('email', $request->email);
            return redirect('/');
        }
        
        // Validation passes and user account exists w/o password.
        if ($validator->passes() && $user && !$user->password && $passwordsMatch && $passwordLength) {
            $this->create($request->all());
            Session::flash('accountCreated', 'Account successfully created.');
            Session::flash('email', $request->email);
            return redirect('/');
        }

        // Validation fails because password was too short.
        if (!$passwordLength && !$emailExists) {
            Session::flash('passwordTooShortErrorMessage', 'Password must be at least six characters.');
            Session::flash('name', $request->name);
            Session::flash('email', $request->email);
            Session::flash('phoneNumber', $request->phoneNumber);
            Session::flash('address', $request->address);
            return redirect('/');
        }

        // Validation fails because user already exists with a password.
        if ($emailExists && $user && $user->password) {
            Session::flash('registerErrorMessage', 'Email address already exists');
            Session::flash('name', $request->name);
            Session::flash('phoneNumber', $request->phoneNumber);
            Session::flash('address', $request->address);
            return redirect('/');
        }

        // Passwords do not match.
        if (!$passwordsMatch) {
            Session::flash('passwordErrorMessage', 'Passwords do not match.');
            Session::flash('name', $request->name);
            Session::flash('email', $request->email);
            Session::flash('phoneNumber', $request->phoneNumber);
            Session::flash('address', $request->address);
            return redirect('/');
        }

        abort(404);

    }



    protected function create(array $data)
    {
        $user = User::where('email', $data['email'])
            ->first();

        if (is_null($user)) {
            return User::create([
                'name' => $data['name'],
                'email' => $data['email'],
                'address' => $data['address'],
                'phoneNumber' => $data['phoneNumber'],
                'password' => bcrypt($data['password']),
                'user_type' => $data['user_type'],
            ]); 
        } else {
            $user->name = $data['name'];
            $user->address = $data['address'];
            $user->phoneNumber = $data['phoneNumber'];
            $user->password = \Hash::make($data['password']);
            $user->user_type = $data['user_type'];
            $user->save();
            return $user;
        }

        
    }
}
