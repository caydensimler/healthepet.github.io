<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Pet;
use Session;
use Log;

class PetsController extends Controller
{

    public function index()
    {
        // TODO: uncomment when auth is implemented
        // $pets = Pet::with('user')->where('owner_id', '=', \Auth::id())->paginate(4);
        // TODO: remove this, hardcoded id for now
        $pets = Pet::with('user')->where('owner_id', '=', 2)->paginate(4);

        

        $data = [];
        $data['pets'] = $pets;
        return view('pets.index')->with($data);
        
    }


    public function create()
    {
        //
    }


    public function store(Request $request)
    {
        //
    }


    public function show($id)
    {
        $pet = Pet::findOrFail($id);

        return view('pets.show')->with('pet', $pet);
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
