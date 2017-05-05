<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class PetTableSeeder extends Seeder {
	public function run() {
		$faker = Faker\Factory::create();

		for($i = 0; $i <= 10; $i++) { 
			$pet = new \App\Pet();
			$pet->name = $faker->firstName($gender = null|'male'|'female');
			$pet->species = 'dog';
			$pet->sex = 'male';
			$pet->breed = 'Bulldog';
			$pet->age = rand(2000, 2017);
			$pet->color = 'brown';
			$pet->weight = rand(5, 200);
			$pet->microchip = rand(10000, 99999);
			$pet->userId = \App\User::all()->random()->id;
			$pet->save();
		}
	}
}