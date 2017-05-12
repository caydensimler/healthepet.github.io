<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Pet;
use App\Shot;
use App\ShotRecord;
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
        $pets->petName = $request->petName;
        $pets->species = $request->species;
        $pets->breed = $request->breed;
        $pets->sex = $request->sex;
        $pets->weight = $request->weight;
        $pets->color = $request->color;
        $pets->age = date('Y') - $request->age;
        
        $ownerEmail = $request->email;
        $ownerName = $request->name;
        $ownerPhone = $request->phoneNumber;
        $owner = User::where('email', $ownerEmail)
            ->where('name', $ownerName)
            ->where('phoneNumber', $ownerPhone)
            ->first();

      

        $vet = \Auth::id();
        if(!is_null($owner)) {
            $pets->owner_id = $owner->id;
            $pets->vet_id = $vet;
            
        } else {
            $owner = new User;
            $owner->user_type = 'owner';
            $owner->email = $ownerEmail;
            $owner->name = $ownerName;
            $owner->phoneNumber = $ownerPhone;
            $owner->save();
            $pets->owner_id = $owner->id;
            $pets->vet_id = $vet;
        }

        $pets->save();

        $request->session()->flash('successMessage', 'Pet Saved Successfully');
        return redirect()->action('PetsController@show', [$pets->id]);
    }

    public function shotStore(Request $request, $id)
    {
        $record = new ShotRecord;

        $record->pet_id = $id;
        $record->shot_id = $request->shot_id;
        $record->date_administered = $request->date_administered;
        $record->date_renewal = $request->date_renewal;
        // dd($record);
        $record->save();

        return redirect()->action('PetsController@show', $id);

    }

    public function show(Request $request, $id)
    {
        $pet = Pet::findOrFail($id);

        $shots = Shot::where('shots.species', $pet->species)
        ->orWhere('shots.species', 'Both')
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
        $pets->petName = $request->petName;
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

    public function image(Request $request)
    {
        $target_dir = "../public/img/";
        $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
        $file_name = basename($_FILES["fileToUpload"]["name"]);
        $uploadOk = 1;
        $imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
        // Check if image file is a actual image or fake image
        if(isset($_POST["submit"])) {
            $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
            if($check !== false) {
                $uploadOk = 1;
            } else {
            $request->session()->flash('alert-danger', 'File is not an image.');
                $uploadOk = 0;
            return redirect()->action('PetsController@index');
            }
        }
        // Check if file already exists
        if (file_exists($target_file)) {
            $request->session()->flash('alert-danger', 'Sorry, file already exists.');
            $uploadOk = 0;
            return redirect()->action('PetsController@index');
        }
        // Check file size
        if ($_FILES["fileToUpload"]["size"] > 500000) {
            $request->session()->flash('alert-danger', 'Sorry, your file is too large.');
            $uploadOk = 0;
            return redirect()->action('PetsController@index');
        }
        // Allow certain file formats
        if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg") {
            $request->session()->flash('alert-danger', 'Sorry, only JPG, JPEG, & PNG files are allowed.');
            $uploadOk = 0;
            return redirect()->action('PetsController@index');
        }
        // Check if $uploadOk is set to 0 by an error
        if ($uploadOk == 0) {
            $request->session()->flash('alert-danger', 'Sorry, your file was not uploaded.');
            return redirect()->action('PetsController@index');
        // if everything is ok, try to upload file
        } else {
            if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
                $pet = Pet::find($request->pet_id); 
                $pet->img = $file_name;
                $pet->save();   
                $request->session()->flash('alert-success', 'Image was successfuly added!');
                return redirect()->action('PetsController@index');
            } else {
                $request->session()->flash('alert-danger', 'Sorry, there was an error uploading your file.');
            }
        }
    }
}
