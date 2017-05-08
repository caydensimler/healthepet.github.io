<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class VetTableSeeder extends Seeder {
	public function run() {
		// $faker = Faker\Factory::create();

		// for($i = 0; $i <= 10; $i++) { 
		// 	$vet = new \App\Vet();
		// 	$vet->name = $faker->company;
		// 	$vet->email = $faker->companyEmail;
		// 	$vet->address = $faker->address;
		// 	$vet->phoneNumber = $faker->phoneNumber;
		// 	$vet->save();
		// }
		
		$vet = new \App\Vet();
		$vet->name = "Clinic";
		$vet->email = "clinic@gmail.com";
		$vet->address = "123 clinic ave San Antonio, TX 78201";
		$vet->phoneNumber = 2102102100;
		$vet->save();

	}
}