<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LogoutControler extends Controller
{
    public function logout(Request $request){

        if(!empty(Auth::user()->role) && Auth::user()->role != null){
            $role = Auth::user()->role->name;
            $request->session()->flush();
            $request->session()->regenerate();

            if($role == "customer"){
                return redirect()->to('/welcome/login');
            }elseif($role == "worker"){
                return redirect()->to('/welcome/login');
            }else{
                return redirect()->to('/login');
            }

        }else{
            
            $request->session()->flush();
            $request->session()->regenerate();
            return redirect()->to('/login');
        }
        
    }
}
