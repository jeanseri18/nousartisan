<?php

namespace App\Http\Livewire\CustomerProfil;

use App\Models\User;
use Livewire\Component;

class UpdateForm extends Component
{
    public $user;
    public $name;
    public $phone;
    public $email;
    public $address_facturation;


    public function mount($user){
        $this->user = $user;
        $this->name = $user->name;
        $this->phone = $user->phone;
        $this->email = $user->email;
        $this->address_facturation = $user->address_facturation;
    }

    public function updateProfil(){

        $user = User::where('id', $this->user->id)->first();
        $user->name = $this->name;
        $user->phone = $this->phone;
        $user->email = $this->email;
        $user->address_facturation = $this->address_facturation;

        $user->save();

        $this->emit('update');

    }

    public function render()
    {
        return view('livewire.customer-profil.update-form');
    }
}
