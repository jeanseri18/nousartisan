<?php

namespace App\Http\Livewire\Customerhome;

use Livewire\Component;
use App\Models\ServiceRequest;

class Updaterequest extends Component
{

    public function mount($id){
        $this->request_id=$id;


    }
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
    public $request_id;



    public function updaterequest(){


        //  $this->validate();
        $service = ServiceRequest::find($this->request_id);
        $service->adress = $this->adress;
        $service->adress_sup = $this->adress;
        $service->code_postal =$this->codepostal;
        $service->town = $this->ville;
        $service->date=$this->date;
        $service->task_description=$this->detail;
        $service->price_by_hour=$this->prix;
        // $service->status_id=1;
        $service->titre='$this->titre';
        $service->heure='$this->time';
        $service->dure='$this->number';
        $service->save();
        session()->flash('message', 'Demande enregistrer avec succes');

    }

    public function render()
    {
        return view('livewire.customerhome.updaterequest',[  'request' => ServiceRequest::where('id',$this->request_id)->first(),'id'=>$this->request_id]);
    }
}
