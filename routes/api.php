<?php
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\GerechtenController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\LoginController;
 

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::get('/tokens/create', function(Request $request){
    $token = $request->user()->createToken($request->token_name);

    return ['token' => $token->plainTextToken];
});

Route::post('/auth/login', [LoginController::class, 'login']);
Route::post('/auth/registration', [RegisterController::class, 'register']);
Route::post('/auth/logout', [RegisterController::class, 'logout']);
Route::post('/auth/me',[LoginController::class, 'me']);

Route::post('/gerecht/create', [GerechtenController::class, 'create']);
