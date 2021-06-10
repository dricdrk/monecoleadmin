@extends('layouts.app', ['page' => __('Tous les établissements'), 'pageSlug' => 'all_institution'])

@section('content')
<div class="row">
  <div class="col-md-12">
    <div class="card ">
      <div class="card-header">
        <h4 class="card-title"> Etablissement</h4>
      </div>
      <div class="card-body">
        <div class="table-responsive">
          <table class="table tablesorter " id="">
            <thead class=" text-primary">
            <?php 
            use App\Institution;
            $institutions = Institution::all();
            ?>
            <tr>
                <th > 
                  N°
                </th>
                <th>
                  Etablissement 
                </th>
                <th class="text-center">
                  Adresse
                </th>
              </tr>
            </thead>
            <tbody>
             @foreach ($institutions as $institution)
              <tr>
                <td>
                <?php  print_r($institution['id']); ?>
                </td>
                <td>
                <?php  print_r($institution['name']); ?>
                </td>
                <td class="text-center">
                <?php  print_r($institution['adress']); ?>
                </td>
              </tr>
              @endforeach
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
  <div class="col-md-12">
    <div class="card  card-plain">
      <div class="card-header">
      </div>
      <div class="card-body">
        
      </div>
    </div>
  </div>
</div>
@endsection