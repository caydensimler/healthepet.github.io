<?php

use Illuminate\Database\Seeder;

class PetsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
	    $pet = new \App\Pet();
        $pet->petName = "Wally";
        $pet->species = "Dog";
        $pet->breed = "Chihuaha";
        $pet->sex = "Male";
        $pet->weight = 20;
        $pet->color = 'Blonde';
        $pet->age = 2;
        $pet->owner_id = 2;
        $pet->vet_id = 1;
        $pet->img = 'sampleDogPicture.jpg';
        $pet->save();

        $pet = new \App\Pet();
        $pet->petName = "Riley";
        $pet->species = "Dog";
        $pet->breed = "Mutt";
        $pet->sex = "Male";
        $pet->weight = 20;
        $pet->color = 'Black';
        $pet->age = 5;
        $pet->owner_id = 2;
        $pet->vet_id = 1;
        $pet->img = 'sampleDogPicture2.jpg';
        $pet->save();

        $pet = new \App\Pet();
        $pet->petName = "Izzy";
        $pet->species = "Dog";
        $pet->breed = "Poodle";
        $pet->sex = "Female";
        $pet->weight = 15;
        $pet->color = 'White';
        $pet->age = 8;
        $pet->owner_id = 2;
        $pet->vet_id = 1;
        $pet->img = 'sampleDogPicture3.jpg';
        $pet->save();

        $pet = new \App\Pet();
        $pet->petName = "Rambo";
        $pet->species = "Cat";
        $pet->breed = "Black Cat";
        $pet->sex = "Male";
        $pet->weight = 10;
        $pet->color = 'Black';
        $pet->age = 2;
        $pet->owner_id = 3;
        $pet->vet_id = 1;
        $pet->img = 'sampleDogPicture.jpg';
        $pet->save();
    }
}
