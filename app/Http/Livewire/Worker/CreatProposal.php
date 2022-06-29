<?php

namespace App\Http\Livewire\Worker;

use Livewire\Component;
use App\Models\ServiceRequest;

class CreatProposal extends Component
{
    protected $rules = [
        'amount'=>'required',
        'number'=>'required',
    ];
    public $service_id;
    public $number;
    public $amount;
    public function mount($id){
        $this->service_id=$id;
    }

    public function addproposal(){
        $this->validate();

    }

    public function render()
    {
        return view('livewire.worker.creat-proposal',[
            'offer'=>ServiceRequest::where('service_requests.id',$this->service_id)
            ->join('service_of_benefit_categories','service_requests.service_of_benefit_category_id','=','service_of_benefit_categories.id')
            ->join('users','users.id','=','service_requests.user_id')
            ->first(['service_requests.*','service_of_benefit_categories.name','users.name as username'])
        ]);
    }
}
