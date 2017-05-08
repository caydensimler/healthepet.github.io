<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();
        DB::table('users')->delete();
        DB::table('vets')->delete();
        DB::table('dogs')->delete();
        DB::table('cats')->delete();

<<<<<<< HEAD
        DB::table('users')->delete();
        DB::table('pets')->delete();
        DB::table('vets')->delete();
=======
        $this->call(UserTableSeeder::class);
        $this->call(VetTableSeeder::class);
        $this->call(DogFormTableSeeder::class);
        $this->call(CatFormTableSeeder::class);
>>>>>>> a0a69dab54e90f3e6ce48bec088fc9a66283f562

        $this->call(UserTableSeeder::class);
        $this->call(PetTableSeeder::class);
        $this->call(VetTableSeeder::class);
        Model::reguard();
    }
}
