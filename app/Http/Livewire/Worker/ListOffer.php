<?php

namespace App\Http\Livewire\Worker;

use App\Models\ServiceProposal;
use App\Models\ServiceRequest;
use App\Models\Customer;
use App\Models\User;
use Auth;
use Livewire\Component;

class ListOffer extends Component
{

    public $status_id;

    public function mount($status){
        $this->status_id=$status;
    }


    public function render()
    {
        // dd(Auth::id());
        return view('livewire.worker.list-offer',[
            'myoffers' => ServiceProposal::where('service_proposals.id_worker',Auth::id())
            ->where('service_requests.status_id',$this->status_id)
            ->join('service_requests','service_requests.id','=','service_proposals.service_request_id')
            ->join('users','users.id','=','service_requests.user_id')
            ->get(['service_requests.*','users.name','users.phone','service_proposals.price_of_proposal','service_proposals.status_id as proposalstatus'])
        ]);
    }
}
