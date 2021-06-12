
@extends('layouts.master')
@section('title')
  Dashboard admin
@endsection

@section('content')
<div class="content">
  <div class="row" id="app">
    
    <div class="card-deck">
      <div class="card">
        <img class="card-img-top" src="influenceur.jpg" alt="Card image cap">
        <div class="card-body">
          <h5 class="card-title">Les influenceurs</h5>
          <p class="card-text"><card-infl></card-infl></p><br>
          <p class="card-text"><small class="text-muted"><div class="overlay dark">
            <i class="fas fa-2x fa-sync-alt fa-spin"></i>
          </div></small></p>
        </div>
      </div>
      <div class="card">
        <img class="card-img-top" src="manager.jpeg" alt="Card image cap">
        <div class="card-body">
          <h5 class="card-title">Les managers</h5>
          <p class="card-text"><card-manager></card-manager></p><br>
          <p class="card-text"><small class="text-muted"><div class="overlay dark">
            <i class="fas fa-2x fa-sync-alt fa-spin"></i>
          </div></small></p>
        </div>
      </div>
      <div class="card">
        <img class="card-img-top" src="user.jpg" alt="Card image cap">
        <div class="card-body">
          <h5 class="card-title">Les utilisateurs</h5>
          <p class="card-text"><card-user></card-user></p><br>
          <p class="card-text"><small class="text-muted"><div class="overlay dark">
            <i class="fas fa-2x fa-sync-alt fa-spin"></i>
          </div></small></p>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection

@section('scripts')

@endsection