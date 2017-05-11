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
        $shotRecord->shot_id = 1;
        $shotRecord->pet_id = 1;
        $shotRecord->date_administered = '5/11/17';
        $shotRecord->date_renewal = '5/11/20';
        $shotRecord->save();
    }
}
