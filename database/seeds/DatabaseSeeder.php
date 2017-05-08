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

        $this->call(UserTableSeeder::class);
        $this->call(VetTableSeeder::class);
        $this->call(DogFormTableSeeder::class);
        $this->call(CatFormTableSeeder::class);

        Model::reguard();
    }
}
