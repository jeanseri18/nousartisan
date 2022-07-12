@extends('customerhome.app')

@section('title', 'Mon  Profil')

@section('content')
    <div class="container">
        
        <h1 class="m-0 pe-30">Mon profil</h1><br>
        <hr>
        <h3 class="m-0 pe-30">Photo de profil</h3>
        <hr>
        
        <div>
           @livewire('customer-profil.update-image', ['user' => $user], key($user->id))  
        </div>
        
        <hr>

        <h3 class="m-0 pe-30">Mes informations</h3>
        <hr>

        @livewire('customer-profil.update-form',['user'=> $user], key($user->id))
        <hr>
        @livewire('customerhome.password-update')

        <script>

            function choosePicture(){
                const hiddenButton = document.getElementById("imgInp");
                hiddenButton.click()
            }


            $("#chooseImg").click(function(){
                choosePicture()
            });

            function readURL(input) {
                if (input.files && input.files[0]) {
                    var reader = new FileReader();

                    reader.onload = function (e) {
                        $('#blah').attr('src', e.target.result);
                    }

                    reader.readAsDataURL(input.files[0]);
                }
            }

            $("#imgInp").change(function(){
                    readURL(this);
            });

            
        </script>
    </div>
@endsection
