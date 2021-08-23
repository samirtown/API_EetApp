<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class IngredientSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('ingredient_gerecht')->insert([
            'beschrijving_ingredient'=>'300 gr pasta',
            'gerecht_ID'=> 1,
        ]);
        \DB::table('ingredient_gerecht')->insert([
            'beschrijving_ingredient'=>'400 gr kipfilet (in stukjes)',
            'gerecht_ID'=>1,
        ]);
        \DB::table('ingredient_gerecht')->insert([
            'beschrijving_ingredient'=>'250 gr cherry tomaatje',
            'gerecht_ID'=>1,
        ]);
        \DB::table('ingredient_gerecht')->insert([
            'beschrijving_ingredient'=>'scheutje olijfolie',
            'gerecht_ID'=>1,
        ]);
        \DB::table('ingredient_gerecht')->insert([
            'beschrijving_ingredient'=>'peper en zout',
            'gerecht_ID'=>1,
        ]);
        \DB::table('ingredient_gerecht')->insert([
            'beschrijving_ingredient'=>'Handje rucola',
            'gerecht_ID'=>1,
        ]);
        \DB::table('ingredient_gerecht')->insert([
            'beschrijving_ingredient'=>'60 gr pijnboompitten (geroosterd)', 
            'gerecht_ID'=>1,
        ]);

        \DB::table('ingredient_gerecht')->insert([
            'beschrijving_ingredient'=>'600 g biefstuk, lendebiefstuk',
            'gerecht_ID'=> 2,
        ]);
        \DB::table('ingredient_gerecht')->insert([
            'beschrijving_ingredient'=>'4 tortillas',
            'gerecht_ID'=>2,
        ]);
        \DB::table('ingredient_gerecht')->insert([
            'beschrijving_ingredient'=>'2 tomaten, in dunne plakjes',
            'gerecht_ID'=>2,
        ]);
        \DB::table('ingredient_gerecht')->insert([
            'beschrijving_ingredient'=>'scheutje olijfolie',
            'gerecht_ID'=>2,
        ]);
        \DB::table('ingredient_gerecht')->insert([
            'beschrijving_ingredient'=>'peper en zout',
            'gerecht_ID'=>2,
        ]);
        \DB::table('ingredient_gerecht')->insert([
            'beschrijving_ingredient'=>'4 el zure room',
            'gerecht_ID'=>2,
        ]);
    }
}
