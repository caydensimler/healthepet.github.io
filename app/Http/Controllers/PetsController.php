<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Pet;
Use App\User;
use Log;

class PetsController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {

        if(\Auth::user()->user_type == 'owner') {
            $pets = Pet::with('user')->where('owner_id', '=', \Auth::id())->paginate(4);
            $data = [];
            $data['pets'] = $pets;
            return view('pets.index')->with($data);  
        } elseif (\Auth::user()->user_type == 'vet') {
            $pets = Pet::with('user')->where('vet_id', '=', \Auth::id())->paginate(4);
            $data = [];
            $data['pets'] = $pets;
            return view('pets.vet')->with($data);
            
        }

    }

    public function create(Request $request)
    {
        return view('pets.create');
    }


    public function store(Request $request)
    {

        $pets = new Pet;
        $pets->name = $request->name;
        $pets->species = $request->species;
        $pets->breed = $request->breed;
        $pets->sex = $request->sex;
        $pets->weight = $request->weight;
        $pets->color = $request->color;
        $pets->age = $request->age;
        
        $ownerEmail = $request->email;
        $owner = User::where('email', $ownerEmail)->first();

        $vet = \Auth::id();
        if(!is_null($owner)) {
            $pets->owner_id = $owner->id;
            $pets->vet_id = $vet;
            
        } else {
            $owner = new User;
            $owner->user_type = 'owner';
            $owner->email = $ownerEmail;
            $owner->save();
            $pets->owner_id = $owner->id;
        }

        $pets->save();

        $request->session()->flash('successMessage', 'Pet Saved Successfully');
        return redirect()->action('PetsController@show', [$pets->id]);
    }


    public function show(Request $request, $id)
    {
        $pet = Pet::findOrFail($id);

        $shots = Pet::join('shotRecords', 'pets.id', '=', 'shotRecords.pet_id')
        ->join('shots', 'shotRecords.shot_id', '=', 'shots.id')
        ->where('pet_id', $id)
        ->get();

        if (Auth::user()->id != $pet->owner_id && Auth::user()->user_type != 'vet') {
            // dd(Auth::user()->user_type);
            return redirect('/pets');

        } else if (Auth::user()->id === $pet->vet_id || Auth::user()->id === $pet->owner_id) {
            return view('pets.show', ['pet' => $pet, 'shots' => $shots]);   
        }
    }


    public function edit(Request $request, $id)
    {
        $pet = Pet::find($id);

        if(!$pet) {
            Log::info('Cannot Edit Pet Information');
            $request->session()->flash('errorMessage', 'Pet cannot be found');
            abort(404);
        }

        if(\Auth::id() != $pet->vet_id) {
            abort(403);
        }
    }

    public function update(Request $request, $id)
    {
        $pet = Pet::find($id);
        if(!$pet) {
            Log::info('Cannot Add Pet Information');
            $request->session()->flash('errorMessage', 'Pet cannot be found');
            abort(404);
        }

        $pets = new Pet;
        $pets->name = $request->name;
        $pets->species = $request->species;
        $pets->breed = $request->breed;
        $pets->sex = $request->sex;
        $pets->weight = $request->weight;
        $pets->color = $request->color;
        $pets->age = $request->age;
        $pets->ownerName = $request->ownerName;
        $pets->phoneNumber = $request->phoneNumber;
        $pets->ownerEmail = $request->ownerEmail;
        $pets->save();
        $request->session()->flash('successMessage', 'Pet Information Saved Succesfully');
        return redirect()->action('PetsController@show', [$pet->id]);

    }


    public function destroy(Request $request, $id)
    {
        $pet = Pet::find($id);

        if(!$pet) {
            Log::info("Cannot Delete Pet $id");
            $request->session()->flash('errorMessage', 'Pet cannot be found');
            abort(404);
        }
        if(\Auth::id() != $pet->vet_id) {
            abort(403);
        }

        $pet->delete();

        return redirect()->action('PetsController@index');
    }
}
