<?php

namespace App\Http\Controllers;

use Hash;
use Illuminate\Http\Request;
use App\User;
use App\Http\Requests;
use App\Http\Controllers\Controller;

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
        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->address = $request->address;
        $user->phoneNumber = $request->phoneNumber;
        $user->password = Hash::make($request->password);
        $user->save();

        $request->session()->flash('successMessage', 'User registration successful');

        return redirect('pets');
    }

    public function show()
    {
        // if (\Auth::check()) {
        //     return view('pets');
        // } else {
        //     return redirect('/');
        // }
    }    

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}
