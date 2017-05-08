<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class UserTableSeeder extends Seeder {
	public function run() {
		// $faker = Faker\Factory::create();

		// for($i = 0; $i <= 10; $i++) { 
		// 	$user = new \App\User();
		// 	$user->email = $faker->email;
		// 	$user->password = 'password';
		// 	$user->firstName = $faker->firstName($gender = null|'male'|'female');
		// 	$user->lastName = $faker->lastName;
		// 	$user->address = $faker->address;
		// 	$user->phoneNumber = $faker->phoneNumber;
		// 	$user->save();
		// }
	    $user = new \App\User();
        $user->firstName = "Thomas";
        $user->lastName = "Hayes";
        $user->email = "thayes@gmail.com";
        $user->password = ('password');
        $user->address = "123 Street San Antonio, TX 78201";
        $user->phoneNumber = 5806954454;
        $user->save();
	}

}
