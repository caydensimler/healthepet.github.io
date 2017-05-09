<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\User;
use Log;

class VetsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth', ['except' =>  ['show']]);
    }

    public function index()
    {

    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        $vet = new Vet();
        $vet->name = $request->name;
        $vet->email = $request->email;
        $vet->address = $request->address;
        $vet->phoneNumber = $request->phoneNumber;
        $vet->password = $request->password;
        $vet->save();
        
        $request->session()->flash('successMessage', 'Veterinarian registration successful');
        return view('/ownerHome');
    }

    public function show(Request $request, $id)
    {
         return view('layouts.ownerHome');
    }

    public function edit(Request $request, $id)
    {
        //
    }

    public function update(Request $request, $id)
    {

    }

    public function destroy(Request $request, $id)
    {

    }
}
