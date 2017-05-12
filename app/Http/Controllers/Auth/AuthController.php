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
        $user = User::where('email', $data['email'])->where('name', '')->where('address', '')->where('phoneNumber', '')->where('password', '')->get()->first();

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
            'email' => 'required|email|max:255|unique:users',
            'password' => 'required|confirmed|min:6',
        ]);

        // dd($request->password != $request->password_confirmation, $validator->fails());

        if ($validator->fails() && $request->password == $request->password_confirmation) {
            Session::flash('registerErrorMessage', 'Email address already exists');
            return redirect('/');
        } else if ($validator->fails() && $request->password != $request->password_confirmation) {
            Session::flash('passwordErrorMessage', 'Passwords do not match.');
            return redirect('/');
        }
    }



    protected function create(array $data)
    {
        $user = User::where('email', $data['email'])->get()->first();
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
