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

            'proposals' => ServiceProposal::where('service_request_id',$this->idService)
            ->where('service_proposals.status_id','0')
            ->join('workers','workers.id','=','service_proposals.id_worker')
            ->get(['service_proposals.*','workers.image','workers.name']),'id'=>$this->idService

        ]);
    }
}
