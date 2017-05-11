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
        $user->name = "Clinic 1";
        $user->email = "thayes@gmail.com";
        $user->password = Hash::make("password");;
        $user->address = "123 Street San Antonio, TX 78201";
        $user->phoneNumber = 5806954454;
        $user->user_type = "vet";
        $user->save();

       	$user1 = new \App\User();
        $user1->name = "Anthony Hayes";
        $user1->email = "ahayes@gmail.com";
        $user1->password = Hash::make("password");;
        $user1->address = "580 Street San Antonio, TX 78201";
        $user1->phoneNumber = 5806954454;
        $user1->user_type  = "owner";
        $user1->save();

        $user2 = new \App\User();
        $user2->name = "Katie Bain";
        $user2->email = "kbain@gmail.com";
        $user2->password = Hash::make("password");;
        $user2->address = "580 Street San Antonio, TX 78201";
        $user2->phoneNumber = 5806954454;
        $user2->user_type  = "owner";
        $user2->save();

        $user3 = new \App\User();
        $user3->name = "Clinic 2";
        $user3->email = "clinic2@gmail.com";
        $user3->password = Hash::make("password");;
        $user3->address = "123 Street San Antonio, TX 78201";
        $user3->phoneNumber = 5806954454;
        $user3->user_type = "vet";
        $user3->save();
	}

}
