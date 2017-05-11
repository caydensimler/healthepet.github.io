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
        DB::table('shotRecords')->delete();
        DB::table('shots')->delete();
        DB::table('pets')->delete();
        DB::table('users')->delete();

        $this->call(UserTableSeeder::class);
        $this->call(PetsTableSeeder::class);
        $this->call(ShotsTableSeeder::class);
        $this->call(ShotRecordsTableSeeder::class);

        Model::reguard();
    }
}
