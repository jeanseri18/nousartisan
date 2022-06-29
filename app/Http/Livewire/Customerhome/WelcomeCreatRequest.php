<?php

namespace App\Http\Livewire\Customerhome;

use Livewire\Component;
use App\Models\Customer;
use App\Models\User;
use App\Models\UserRole;
use App\Models\ServiceRequest;
use App\Models\ServiceOfBenefitCategory;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class WelcomeCreatRequest extends Component
{


    protected $rules =[
        "titre"=>"required",
        "adress"=>"required",
        "codepostal"=>"required",
        "local"=>"required",
        "detail"=>"required",
        "date"=>"required",
        // "time"=>"required",
        "number"=>"required",
        "prix"=>"required",
        "ville"=>"required",
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

    public $titre;
    public $adress;
    public $codepostal;
    public $local;
    public $detail;
    public $date;
    public $time;
    public $number;
    public $prix;
    public $ville;
    public $idService;

    public function mount($ids){
        $this->idService=$ids;
    }

    public function creatoffer(){

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

        Auth::loginUsingId($user->id);


        $iduser=Auth::id();



        $services=ServiceOfBenefitCategory::where('id',$this->idService)->first();



        $service = new ServiceRequest();
        $service->benefit_category_id =$services->benefit_category_id;
        $service->user_id=$iduser;
        $service->service_of_benefit_category_id = $this->idService;
        $service->adress = $this->adress;
        $service->adress_sup = $this->adress;
        $service->code_postal =$this->codepostal;
        $service->town = $this->ville;
        $service->date=$this->date;
        $service->task_description=$this->detail;
        $service->price_by_hour=$this->prix;
        $service->status_id=0;
        $service->fix_price=0;
        $service-> price_after_nego=0;
        $service->titre=$this->titre;
        $service->heure=$this->time;
        $service->dure=$this->number;
        $service->save();
        session()->flash('message', 'Demande enregistrer avec succes. Connectez vous maintenant');

    }

    public function render()
    {
        return view('livewire.customerhome.welcome-creat-request');
    }
}
