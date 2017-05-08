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
        DB::table('pets')->delete();
        DB::table('vets')->delete();

        $this->call(UserTableSeeder::class);
        $this->call(PetTableSeeder::class);
        $this->call(VetTableSeeder::class);
        Model::reguard();
    }
}
