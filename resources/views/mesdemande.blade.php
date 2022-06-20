
@extends('appauth')
@section('content')
<div class="container">
<br>
 <!-- Nav tabs -->
<ul class="nav nav-tabs nav-pills" id="myTab" role="tablist">
    <li class="nav-item" role="presentation">
      <button class="nav-link   active btn-accent-1" id="home-tab" data-bs-toggle="tab" data-bs-target="#home" type="button" role="tab" aria-controls="home" aria-selected="true">Toutes les demandes</button>
    </li>
    <li class="nav-item" role="presentation">
      <button class="nav-link btn" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile" type="button" role="tab" aria-controls="profile" aria-selected="false">Demandes en cours</button>
    </li>
    <li class="nav-item" role="presentation">
      <button class="nav-link btn" id="messages-tab" data-bs-toggle="tab" data-bs-target="#messages" type="button" role="tab" aria-controls="messages" aria-selected="false">Demande finalisées</button>
    </li>

  </ul>

  <!-- Tab panes -->
  <div class="tab-content">
    <BR>
    <div class="tab-pane active" id="home" role="tabpanel" aria-labelledby="home-tab">
        <div class="row">
        <div class="card card-blog  card-vertical card-hover-zoom card-blog-bordered rounded-4 overflow-hidden bg-white col-lg-12 col-md-6">    <div class="card-body py-40 px-50 pb-50"><a class="card-title h4" href="">Pose d'une Serrure Electronique</a>
                <p class="card-text">Description du service</p>
                    <div class="row">
                        <div class="col-md-6 btn">
                            Total à Payer
                        </div>
                        <div class="col-md-3">

                            <a class="btn  btn-accent-1 " href="" target="_self" style="width: 220px">Proposer </a>
                        </div>
                        <div class="col-md-3">

                            <a class="btn  btn-accent-1  " href="" target="_self" style="width: 220px">Proposer</a>
                        </div>
                        <br>
                    </div><br>
            </div>
        </div>

        </div>
    </div>
    <div class="tab-pane" id="profile" role="tabpanel" aria-labelledby="profile-tab">..edd.</div>
    <div class="tab-pane" id="messages" role="tabpanel" aria-labelledby="messages-tab">...</div>
    <div class="tab-pane" id="settings" role="tabpanel" aria-labelledby="settings-tab">...</div>
  </div>
</div><br><br><br><br>
@endsection
