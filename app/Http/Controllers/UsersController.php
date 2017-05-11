<?php

namespace App\Http\Controllers;

use Hash;
use Session;
use Illuminate\Http\Request;
use App\User;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Redirect;

class UsersController extends Controller
{

    public function index()
    {
        //
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {

        // $email = $request->email;

        // $user = User::where('email', $email);

        // if (!is_null($user)) {
        //     $user->password = $request->password;
        // } else {
        //     // create a new user
        //     $user = new User;
        //     $user->name = $request->name;
        //     $user->email = $request->email;
        //     $user->address = $request->address;
        //     $user->phoneNumber = $request->phoneNumber;
        //     $user->password = Hash::make($request->password);
        //     $user->user_type = $request->user_type;
        //     $user->save();
        // }
    }

    public function show(Request $request, $id)
    {
        if (\Auth::id() != $id) {
            return redirect('/users/' . \Auth::id());
        }

        $user = User::findOrFail($id);

        return view('users.userAccount', ['user' => $user]);
    }    

    public function edit(Request $request, $id)
    {
        if (\Auth::id() != $id) {
            return redirect('/users/' . \Auth::id() . '/edit');
        }

        $user = User::find($id);

        if(!$user) {
            Log::info('Cannot Edit Account');
            $request->session()->flash('errorMessage', 'Account Cannot Be Found');
        }

        return view('users.editAccount', ['user' => $user]);
    }

    public function update(Request $request, $id)
    {
        $user = User::find($id);
        if(!$user) {
            Log::info('Cannot Edit Account');
            $request->session()->flash('errorMessage', 'Account Cannot Be Found');
        }

        $user->name = $request->name;
        $user->email = $request->email;
        $user->phoneNumber = $request->phoneNumber;
        $user->address = $request->address;
        $user->password = $request->password;
        $user->save();
        $request->session()->flash('successMessage', 'Account Updated Successfully');
        return redirect()->action('UsersController@show', [$user->id]);
    }

    public function destroy($id)
    {
        //
    }
}
