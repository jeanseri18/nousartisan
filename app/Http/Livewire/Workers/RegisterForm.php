<?php

namespace App\Http\Livewire\Workers;

use App\CustomClass\CheckUserForRedirection;
use App\Models\User;
use App\Models\UserRole;
use App\Models\Worker;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Livewire\Component;

class RegisterForm extends Component
{

    protected $rules = [
        'name' => "required",
        'email' => "required|unique:users",
        'numero_tva' => "required",
        'owner_name' => "required",
        'numero_siren' => "required",
        'address_electro' => "required",
        'password' => "required|confirmed",
    ];

    public $name;
    public $email;
    public $address_electro;
    public $password;
    public $password_confirmation;
    public $dial_code;
    public $address_facturation;
    public $role_id;
    public $phone;

    public $owner_name;
    public $numero_siren;
    public $numero_tva;
    public $numero_gerant;

    public function register(){
        $this->validate();

        $userRole = UserRole::where('name','worker')->first();

        $user = new User();
        $user->name = $this->name;
        $user->user_role_id = $userRole->id;
        $user->email = $this->email;
        $user->password = Hash::make($this->password);
        $user->save();
        // dd('Ok');
        // $user->phone = $this->phone;
        // $user->address_facturation = $this->address_facturation;

        $worker = new Worker();
        $worker->user_id = $user->id;
        $worker->number_siren = $this->numero_siren;
        $worker->name = $user->name;
        $worker->owner_name = $this->owner_name;
        $worker->number_tva = $this->numero_tva;
        $worker->address_electro = $this->address_electro;
        $worker->password = Hash::make($this->password);
        $worker->save();
        // $worker->tel = $user->address_facturation;
        // $worker->owner_number = $user->phone;
        // $worker->owner_name = $user->address_facturation;

        //Create User Session
        Auth::loginUsingId($user->id);

        //Manage Redirection
        CheckUserForRedirection::afterLogin($user);

    }

    public function render()
    {
        return view('livewire.workers.register-form');
    }
}
