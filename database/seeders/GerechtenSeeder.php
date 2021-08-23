<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class GerechtenSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('gerechten')->insert([
            'gerecht_naam' => 'pasta pesto met kip',
            'aantal_personen' => 2,
            'categorie' => 'kip',
            'user_ID' => 1,  
        ]);
        \DB::table('gerechten')->insert([
            'gerecht_naam' => 'Oven FAJITAS MET BIEFSTUK',
            'aantal_personen' => 4,
            'categorie' => 'oven',
            'user_ID' => 1,  
        ]);
    }
}
