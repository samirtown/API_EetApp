<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class GerechtenController extends Controller
{
    public function create(Request $request){

        $userId = Auth::id();

        $gerecht_ID = DB::table('gerechten')->insertGetId([
            'gerecht_naam' => $request['naam'],
            'aantal_personen' => $request['aantal_personen'],
            'categorie' => $request['categorie'],
            'user_ID' => $userId
        ]);


        $instructies = $request['instructies'];
        foreach($instructies as $instructie){
            DB::table('instructie_gerecht')->insert([
                'gerecht_ID' => $gerecht_ID,
                'beschrijving' => $instructie['beschrijving'],
                'stap' => $instructie['stap']
            ]);
        }

        $ingredienten = $request['ingredienten'];
        foreach($ingredienten as $ingredient){
            DB::table('ingredient_gerecht')->insert([
                'gerecht_ID' => $gerecht_ID,
                'ingredient' => $ingredient['ingredient'],
                'aantal' => $ingredient['aantal']
            ]);
        }
        return $request;
    }

}
