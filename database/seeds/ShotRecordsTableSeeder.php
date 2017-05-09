<?php

use Illuminate\Database\Seeder;

class ShotRecordsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $shotRecord = new \App\ShotRecord();
        $shotRecord->comments = "This dog is wild"; 
        $shotRecord->shot_id = 1;
        $shotRecord->pet_id = 1;
        $shotRecord->save();
    }
}
