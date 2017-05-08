<?php

use Illuminate\Database\Seeder;

class CatFormTableSeeder extends Seeder
{

    public function run()
    {
        $cat = new \App\CatForm();
        $cat->name = "Churchill";
		$cat->breed = "British Shorthair";
		$cat->sex = "Male";
		$cat->age = 2;
		$cat->phoneNumber = 5806954454;
		$cat->panleukopenia = true;
		$cat->rhinotracheitis = true;
		$cat->calicivirus = true;
		$cat->rabies = true;
		$cat->feline_leukemia = true;
		$cat->chlamydophila = true;
		$cat->feline_infectious_peritonitis = true;
		$cat->bordetella = true;
		$cat->giardia = true;
		$cat->feline_immunodeficiency_virus = true;
		$cat->save();
    }
}
