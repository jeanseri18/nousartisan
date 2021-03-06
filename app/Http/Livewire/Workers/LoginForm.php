<?php

namespace App\Http\Livewire\Workers;

use App\CustomClass\CheckUserForRedirection;
use App\Providers\RouteServiceProvider;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class LoginForm extends Component
{

    protected $rules = [
        'email'=>'required',
        'password'=>'required',
    ];

    public $no_loggin;
    public $email;
    public $password;

    public function login(){
        $this->validate();
        $login  = Auth::attempt(['email' => $this->email, 'password' => $this->password]);

        if($login == true){
            //Get user session
            $user = Auth::user();
            Auth::loginUsingId($user->id);

            //m
            CheckUserForRedirection::afterLogin($user);
  
        }else{
            $this->no_loggin = true;
        }
    }

    public function render()
    {
        return view('livewire.workers.login-form');
    }
}

