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

        // $passwordsMatch = $request->password == $request->password_confirmation;

        $user = User::where('email', $request->email)->first();
        $emailExists = !is_null($user) && $user->email == $request->email;
        $passwordsMatch = $request->password === $request->password_confirmation;

        // Validation passes and user doesn't already exist.
        // Works but doesn't redirect.
        if ($validator->passes() && !$user && $passwordsMatch) {
            $this->create($request->all());
            return redirect('/pets');
        }
        
        // Validation passes and user account exists w/o password.
        // Works but doesn't redirect.
        if ($validator->passes() && $user && !$user->password && $passwordsMatch) {
            $this->create($request->all());
            return redirect('/pets');
        }

        // Validation fails because user already exists with a password.
        // Works.
        if ($emailExists && $user && $user->password) {
            Session::flash('registerErrorMessage', 'Email address already exists');
            return redirect('/');
        }

        // Passwords do not match.
        // Works
        if (!$passwordsMatch) {
            Session::flash('passwordErrorMessage', 'Passwords do not match.');
            Session::flash('name', $request->name);
            Session::flash('email', $request->email);
            Session::flash('phoneNumber', $request->phoneNumber);
            Session::flash('address', $request->address);
            return redirect('/');
        }

        throw new Exception("This should never happen!");

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
