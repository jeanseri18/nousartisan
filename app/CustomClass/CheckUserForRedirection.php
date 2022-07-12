<?php
namespace App\CustomClass;

use App\Providers\RouteServiceProvider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CheckUserForRedirection
{

    public static function afterLogout(Request $request){
        if(!empty(Auth::user()->role) && Auth::user()->role != null){
            $role = Auth::user()->role->name;
            $request->session()->flush();
            $request->session()->regenerate();
    
            if($role == "customer"){
                return redirect()->to(
                    RouteServiceProvider::CUSTOMER_WORKER_LOGIN
                );
            }elseif($role == "worker"){
                return redirect()->to(
                    RouteServiceProvider::CUSTOMER_WORKER_LOGIN
                );
            }else{
                return redirect()->to('/login');
            }
        }else{
            $request->session()->flush();
            $request->session()->regenerate();
            return redirect()->to('/login');
        }
    }

    public static function afterLogin($user){

        if(!empty($user)){
            if($user->role->name ="customer"){
                return redirect()->to(RouteServiceProvider::CUSTOMER_HOME);
            }elseif($user->role->name =="worker"){
                return redirect()->to(RouteServiceProvider::WORKER_HOME);
            }else{
                return redirect()->to(RouteServiceProvider::HOME);
            }
        }else{
            return redirect()->to('/');
        }
    }

}
