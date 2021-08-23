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
            'ingredient'=>'pasta',
            'aantal'=>'300 gram',
            'gerecht_ID'=> 1,
        ]);
        \DB::table('ingredient_gerecht')->insert([
            'ingredient'=>'400 gr kipfilet (in stukjes)',
            'aantal'=>'300 gram',
            'gerecht_ID'=>1,
        ]);
        \DB::table('ingredient_gerecht')->insert([
            'ingredient'=>'250 gr cherry tomaatje',
            'aantal'=>'300 gram',
            'gerecht_ID'=>1,
        ]);
        \DB::table('ingredient_gerecht')->insert([
            'ingredient'=>'scheutje olijfolie',
            'aantal'=>'300 gram',
            'gerecht_ID'=>1,
        ]);
        \DB::table('ingredient_gerecht')->insert([
            'ingredient'=>'peper en zout',
            'aantal'=>'300 gram',
            'gerecht_ID'=>1,
        ]);
        \DB::table('ingredient_gerecht')->insert([
            'ingredient'=>'Handje rucola',
            'aantal'=>'300 gram',
            'gerecht_ID'=>1,
        ]);
        \DB::table('ingredient_gerecht')->insert([
            'ingredient'=>'60 gr pijnboompitten (geroosterd)', 
            'aantal'=>'300 gram',
            'gerecht_ID'=>1,
        ]);

        \DB::table('ingredient_gerecht')->insert([
            'ingredient'=>'600 g biefstuk, lendebiefstuk',
            'aantal'=>'300 gram',
            'gerecht_ID'=> 2,
        ]);
        \DB::table('ingredient_gerecht')->insert([
            'ingredient'=>'4 tortillas',
            'aantal'=>'300 gram',
            'gerecht_ID'=>2,
        ]);
        \DB::table('ingredient_gerecht')->insert([
            'ingredient'=>'2 tomaten, in dunne plakjes',
            'aantal'=>'300 gram',
            'gerecht_ID'=>2,
        ]);
        \DB::table('ingredient_gerecht')->insert([
            'ingredient'=>'scheutje olijfolie',
            'aantal'=>'300 gram',
            'gerecht_ID'=>2,
        ]);
        \DB::table('ingredient_gerecht')->insert([
            'ingredient'=>'peper en zout',
            'aantal'=>'300 gram',
            'gerecht_ID'=>2,
        ]);
        \DB::table('ingredient_gerecht')->insert([
            'ingredient'=>'4 el zure room',
            'aantal'=>'300 gram',
            'gerecht_ID'=>2,
        ]);
    }
}
