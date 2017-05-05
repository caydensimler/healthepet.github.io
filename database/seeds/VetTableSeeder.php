<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class VetTableSeeder extends Seeder {
	public function run() {
		$faker = Faker\Factory::create();

		for($i = 0; $i <= 10; $i++) { 
			$vet = new \App\Pet();
			$vet->clinicId = rand(10000, 99999);
			$vet->name = $faker->company;
			$vet->email = $faker->companyEmail;
			$vet->address = $faker->address;
			$vet->age = rand(2000, 2017);
			$vet->phoneNumber = $faker->phoneNumber;
			$vet->save();
		}
	}
}