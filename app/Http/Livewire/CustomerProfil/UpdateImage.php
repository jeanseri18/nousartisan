<?php

namespace App\Http\Livewire\CustomerProfil;

use App\Models\User;
use Livewire\Component;
use Livewire\WithFileUploads;

class UpdateImage extends Component
{

    use WithFileUploads;

    public $image;

    public function mount($user){
        $this->user = $user;
    }

    public function updateImage(){
        $user = User::where('id', $this->user->id)->first();
        $imageName = $this->image->getClientOriginalName() . $this->image->getClientOriginalExtension();
    
        $this->image->storeAs(public_path('/images'), $imageName);
        $user->customer->image_url = $this->image->store()->getPath();
        // dd($user->customer->image_url);
    }

    public function render()
    {
        return view('livewire.customer-profil.update-image');
    }
}
