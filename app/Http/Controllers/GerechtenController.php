<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class GerechtenController extends Controller
{
    public function gerechtenGebruiker($user_ID){
        return DB::table('gerechten')
        ->where('user_ID', '=', $user_ID)
        ->get();
    }

    public function gerechtenInstructie($gerecht_ID){
        return DB::table('instructie_gerecht')
        ->where('gerecht_ID', '=', $gerecht_ID)
        ->get();
    }

    public function gerechtenIngredient($gerecht_ID){
        return DB::table('ingredient_gerecht')
        ->where('gerecht_ID', '=', $gerecht_ID)
        ->get();
    }
}
