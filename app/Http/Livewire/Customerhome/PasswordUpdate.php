<?php

namespace App\Http\Livewire\Customerhome;

use Livewire\Component;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Auth;

class PasswordUpdate extends Component
{

    protected $rules =[
        "newpassword"=>"required",
        "password"=>"required",
    ];

    public $password;
    public $newpassword ;



    public function updatepassword(){

        $this->validate();

        //ancien compare user->password

        $user = Auth::user();

        $check = Hash::check($this->password,$user->password);

        if($check){
            $user->password = Hash::make($this->newpassword);
            $user->save();
            // session()->flash('message', 'Mot de passe modifié avec succes');
            
            $this->emit('update_password');
            
        }else{
            $this->emit('update_error');
            // session()->flash('error', 'Le mot de passe saisi est incorrect');
        }


        // $id=Auth::id();
        // $pwscheck= Hash::check($this->password,Auth::user()->password);

        // // $user=User::where('id',$id)->where('password', $pwscheck)->first();

        // if($pwscheck){
        //     session()->flash('message', 'Post successfully updated.');
        //     $user->password=Hash::make($this->newpassword);
        //     $user->save();
        // } else{
        //     session()->flash('message', 'Post error updated.');
        // }

        // $request->session()->regenerate();

    }


    public function render()
    {
        return view('livewire.customerhome.password-update');
    }
}
