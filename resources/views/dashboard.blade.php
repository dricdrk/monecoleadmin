@extends('layouts.app', ['pageSlug' => 'dashboard'])

@section('content')
    <div class="row">
        <div class="col-12">
        <div class="row">
  <div class="col-sm-6">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">Messages</h5>
        <p class="card-text">Vérifier tous les messages envoyer aux utilisateurs .</p>
        <a href="all_message" class="btn">Consulter</a>
      </div>
    </div>
  </div>
  <div class="col-sm-6">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">Publicité</h5>
        <p class="card-text">Voir les spécifications par rapport aux publicités .</p>
        <a href="all_ads" class="btn">Consulter</a>
      </div>
    </div>
  </div>
</div>
<div class="row">
  <div class="col-sm-6">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">Etablissement</h5>
        <p class="card-text">Liste des établissements inscrit sur Mon ecole.</p>
        <a href="#" class="btn">Consulter</a>
      </div>
    </div>
  </div>
  <div class="col-sm-6">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">Profile d'utilisateur</h5>
        <p class="card-text">Editer votre profil ici.</p>
        <a href="profile" class="btn ">Consulter</a>
      </div>
    </div>
  </div>
</div>
        </div>
    </div>
@endsection

@push('js')
    <script src="{{ asset('black') }}/js/plugins/chartjs.min.js"></script>
    <script>
        $(document).ready(function() {
          demo.initDashboardPageCharts();
        });
    </script>
@endpush
