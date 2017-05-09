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

        $user->name = "Thomas Hayes";
        $user->email = "thayes@gmail.com";
        $user->password = ('password');
        $user->address = "123 Street San Antonio, TX 78201";
        $user->phoneNumber = 5806954454;
        $user->user_type = "owner";
        $user->save();

       	$user1 = new \App\User();
        $user1->name = "Anthony Hayes";
        $user1->email = "ahayes@gmail.com";
        $user1->password = ('password');
        $user1->address = "580 Street San Antonio, TX 78201";
        $user1->phoneNumber = 5806954454;
        $user1->user_type  = "owner";
        $user1->save();
	}

}
