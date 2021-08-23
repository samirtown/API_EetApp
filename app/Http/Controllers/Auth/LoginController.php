<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class LoginController extends Controller
{
    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function login(Request $request){
        
        $attr = $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if(!Auth::attempt($attr)){
            return response ()->json([
                'status_code' => 500,
                'message' => 'Invalid details'
            ]);
        }

        $user = User::where('email', $request['email'])->first();
        
        $tokenResult = $user->createToken('authToken')->plainTextToken;

        return response()->json([
            'status_code' => 200,
            'acces_token' => $tokenResult,
            'token_type' => 'Bearer',
            'message' => 'Valid details',
            'user' => $user
        ]);
    }

    public function logout(){
        auth()->user()->tokens()->delete();

        return['message' => 'Tokens Revoked'];
    }

    protected function authenticated(Request $requeset, $user){
        if($user->suspended){
            Auth::logout();
        }
        
    }
}
