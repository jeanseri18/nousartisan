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
        $imageName = $this->image->getClientOriginalName();
        $options = [];
        $path = public_path('/images');
        $save  = $this->image->storeAs($path, $imageName, $options);

        if($save){
            dd(["okay", $save]);
        }
        
        $user->customer->image_url = $this->image->getRealPath();
        
        // dd([
        //     $path,
        //     $imageName,
        //     $user
        // ]);
    }

    public function render()
    {
        return view('livewire.customer-profil.update-image');
    }
}
