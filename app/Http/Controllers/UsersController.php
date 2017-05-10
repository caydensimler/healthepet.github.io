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
        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->address = $request->address;
        $user->phoneNumber = $request->phoneNumber;
        $user->password = Hash::make($request->password);
        $user->user_type = $request->accountType;
        $user->save();
        \Auth::login($user);
        return redirect('pets');
    }

    public function show()
    {

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
