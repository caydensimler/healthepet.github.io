<?php

use Illuminate\Database\Seeder;

class ShotsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Both
        $rabies = new \App\Shot();
        $rabies->shotName = 'rabies';
        $rabies->species = 'Both';
        $rabies->save();

        $bordetella = new \App\Shot();
        $bordetella->shotName = "bordetella";
        $bordetella->species = 'Both';
        $bordetella->save();

        //Cat
        $panleukopenia = new \App\Shot();
        $panleukopenia->shotName = "panleukopenia";
        $panleukopenia->species = 'Cat';
        $panleukopenia->save();

        $rhinotracheitis = new \App\Shot();
        $rhinotracheitis->shotName = "rhinotracheitis";
        $rhinotracheitis->species = 'Cat';
        $rhinotracheitis->save();

        $calicivirus = new \App\Shot();
        $calicivirus->shotName = "calicivirus";
        $calicivirus->species = 'Cat';
        $calicivirus->save();

        $feline_leukemia = new \App\Shot();
        $feline_leukemia->shotName = "feline_leukemia";
        $feline_leukemia->species = 'Cat';
        $feline_leukemia->save();

        $chlamydophila = new \App\Shot();
        $chlamydophila->shotName = "chlamydophila";
        $chlamydophila->species = 'Cat';
        $chlamydophila->save();

        $feline_infectious_peritonitis = new \App\Shot();
        $feline_infectious_peritonitis->shotName = "feline_infectious_peritonitis";
        $feline_infectious_peritonitis->species = 'Cat';
        $feline_infectious_peritonitis->save();

        $giardia = new \App\Shot();
        $giardia->shotName = "giardia";
        $giardia->species = 'Cat';
        $giardia->save();

        $feline_immunodeficiency_virus = new \App\Shot();
        $feline_immunodeficiency_virus->shotName = "feline_immunodeficiency_virus";
        $feline_immunodeficiency_virus->species = 'Cat';
        $feline_immunodeficiency_virus->save();

        // Dog
        $canine_distemper = new \App\Shot();
        $canine_distemper->shotName = "canine_distemper";
        $canine_distemper->species = 'Dog';
        $canine_distemper->save();

        $measles = new \App\Shot();
        $measles->shotName = "measles";
        $measles->species = 'Dog';
        $measles->save();

        $parvovirus = new \App\Shot();
        $parvovirus->shotName = "parvovirus";
        $parvovirus->species = 'Dog';
        $parvovirus->save();

        $hepatitis = new \App\Shot();
        $hepatitis->shotName = "hepatitis";
        $hepatitis->species = 'Dog';
        $hepatitis->save();

        $CAV2 = new \App\Shot();
        $CAV2->shotName = "CAV2";
        $CAV2->species = 'Dog';
        $CAV2->save();

        $parainfluenza = new \App\Shot();
        $parainfluenza->shotName = "parainfluenza";
        $parainfluenza->species = 'Dog';
        $parainfluenza->save();

        $leptospirosis = new \App\Shot();
        $leptospirosis->shotName = "leptospirosis";
        $leptospirosis->species = 'Dog';
        $leptospirosis->save();

        $coronavirus = new \App\Shot();
        $coronavirus->shotName = "coronavirus";
        $coronavirus->species = 'Dog';
        $coronavirus->save();
        
        $lyme = new \App\Shot();
        $lyme->shotName = "lyme";
        $lyme->species = 'Dog';
        $lyme->save();        

    }
}
