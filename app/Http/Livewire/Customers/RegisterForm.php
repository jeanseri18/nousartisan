<?php

namespace App\Http\Livewire\Customers;

use App\Models\Customer;
use App\Models\User;
use App\Models\UserRole;
use Illuminate\Support\Facades\Hash;
use Livewire\Component;

class RegisterForm extends Component
{

    protected $rules = [
        'name' => "required",
        'email' => "required",
        'phone' => "required",
        'address_facturation' => "required",
        'password' => "required|confirmed",
    ];

    public $name;
    public $email;
    public $password;
    public $password_confirmation;
    public $dial_code;
    public $address_facturation;
    public $role_id;
    public $phone;

    public $firstname;
    public $lastname;

    public function register(){

        $this->validate();

        $userRole = UserRole::where('name','customer')->first();

        $user = new User();
        $user->name = $this->name;
        $user->user_role_id = $userRole->id;
        $user->email = $this->email;
        $user->phone = $this->phone;
        $user->password = Hash::make($this->password);
        $user->address_facturation = $this->address_facturation;
        $user->save();

        $customer = new Customer();
        $customer->user_id = $user->id;
        $customer->name = $user->name;
        $customer->email = $user->email;
        $customer->phone = $user->phone;
        $customer->address_facturation = $user->address_facturation;
        $customer->save();

        return redirect()->route('customers.home');
        // dd(
        //     [
        //         "user"=> $user,
        //         "customer"=> $customer,
        //     ]
        // );

    }

    public function render()
    {
        return view('livewire.customers.register-form');
    }
}
