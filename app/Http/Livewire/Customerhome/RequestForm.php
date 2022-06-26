<?php

namespace App\Http\Livewire\Customerhome;

use Livewire\Component;
use App\Models\ServiceRequest;
use App\Models\BenefitCategory;
use App\Models\ServiceOfBenefitCategory;
use Auth;
class RequestForm extends Component


{



    protected $rules =[
        "titre"=>"required",
        "adress"=>"required",
        "codepostal"=>"required",
        "local"=>"required",
        "detail"=>"required",
        "date"=>"required",
        "time"=>"required",
        "number"=>"required",
        "prix"=>"required",
        "ville"=>"required",



    ];

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

        $iduser=Auth::id();
         $this->validate();


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
        $service->status_id=1;
        $service->fix_price=0;
        $service-> price_after_nego=0;
        $service->titre=$this->titre;
        $service->heure=$this->time;
        $service->dure=$this->number;
        $service->save();
        session()->flash('message', 'Demande enregistrer avec succes');

    }
    public function render()
    {
        return view('livewire.customerhome.request-form');
    }
}
