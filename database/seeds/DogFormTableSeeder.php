<?php

use Illuminate\Database\Seeder;

class DogFormTableSeeder extends Seeder
{

    public function run()
    {
        $dog = new \App\DogForm();
        $dog->name = "Wally";
		$dog->breed = "Chihuahua";
		$dog->sex = "Male";
		$dog->age = 2;
		$dog->canine_distemper = true;
		$dog->measles = true;
		$dog->parvovirus = true;
		$dog->hepatitis = true;
		$dog->rabies = true;
		$dog->CAV2 = true;
		$dog->parainfluenza = true;
		$dog->bordetella = true;
		$dog->leptospirosis = true;
		$dog->coronavirus = true;
		$dog->lyme = true;
		$dog->user_id = \App\User::all()->random()->id;
		$dog->vet_id = \App\Vet::all()->random()->id;
		$dog->save();
    }
}
