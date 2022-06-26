<?php

namespace App\Http\Livewire\Workers;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class LoginForm extends Component
{

    public function login(){
        $this->validate();
        $login  = Auth::attempt(['email' => $this->email, 'password' => $this->password]);

        if($login == true){

            //Get user session
            $customer  = Auth::user();

            return redirect()->route('customers.home');
        }else{
            $this->no_loggin = true;
        }
    }

    public function render()
    {
        return view('livewire.workers.login-form');
    }
}

