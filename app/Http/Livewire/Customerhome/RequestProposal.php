<?php

namespace App\Http\Livewire\Customerhome;

use Livewire\Component;
use App\Models\ServiceProposal;

use Auth;

class RequestProposal extends Component
{
    public $idService;
 
    public function mount($id){
        $this->idService=$id;


    }

    public function render()
    {
        return view('livewire.customerhome.request-proposal',[

            'proposals' => ServiceProposal::where('service_request_id',$this->idService)->get(),'id'=>$this->idService

        ]);
    }
}
