<div>
    <div>
        <form id="form1" runat="server">
            <input type='file' id="imgInp" style="display: none;" wire:model="image"/>
         </form>
    </div>

    <img src=
        "
            @if ($image == null)
                {{ 'https://www.nousartisans.com/theme/assets/img/default-avatar.png' }}
            @elseif ($image != null)
                {{ $user->customer->image }}
            @else
                {{ 'https://www.nousartisans.com/theme/assets/img/default-avatar.png' }}
            @endif
        "
     
        id="blah" class="rounded-circle" width="150">
    <br>

    <button class="btn" 
        style="height: 45px" 
         
        @if ($image != null)
            wire:click="updateImage"
        @else
            id="chooseImg"
        @endif 
    >
        @if($image == null)
            Choisir une photo
        @else
            {{ "Mettre à jour" }}
        @endif    
    </button> 
</div>
