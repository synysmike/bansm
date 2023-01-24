<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Session;

class AuthController extends Controller
{
    //
    public function index()
    {
        if (Auth::check()) {
            return redirect('/sekolah');
        }else{
            return view('auth.login');
        }
    }
    public function authenticate(Request $request){
        $request->validate([
            'username'=>'required',
            'password'=>'required'
        ]);
        $credentials = $request->only('username','password');
        if(auth::attempt($credentials)){
            $user = Auth::user();
            if($user->jabatan == 'kpa'){
                $request->session()->regenerate();
                return redirect()->intended('/sekolah');
            }elseif($user->jabatan == 'lembaga'){
                $request->session()->regenerate();
                return redirect()->intended('/sekolah/show');
            }
        }
        return back()->with('loginError','Login Gagal');
    }
    public function logout(Request $request){
        Auth::logout(); 
        $request->session()->invalidate();    
        $request->session()->regenerateToken();    
        return redirect('/login');
    }
}
