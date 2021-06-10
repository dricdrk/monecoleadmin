@extends('layouts.app', ['page' => __('Toutes les Publicités'), 'pageSlug' => 'all_message'])

@section('content')
<div class="row">
  <div class="col-md-12">
    <div class="card ">
      <div class="card-header">
        <h4 class="card-title">Toutes les publicités </h4>
      </div>
      <div class="card-body">
        <div class="table-responsive">
          <table class="table tablesorter " id="">
            <thead class=" text-primary">
            <?php 
            use App\Ads;
            $ads = Ads::all();
            ?>
            <tr>
                <th > 
                  id
                </th>
                <th>
                   Jours
                </th>
                <th>
                  Montant
                </th>
                <th>
                  Etablissement
                </th>
                <th class="text-center">
                  Description
                </th>
                <th >
                  liens
                </th>
                <th>
                  Par
                </th>
              </tr>
            </thead>
            <tbody>
             @foreach ($ads as $ad)
              <tr>
                <td>
                <?php  print_r($ad['id']); ?>
                </td>
                <td>
                <?php  print_r($ad['nmbrOfDays']); ?>
                </td>
                <td>
                <?php  print_r($ad['amount']); ?>
                </td>
                <td>
                <?php  print_r($ad['institution_name']); ?>
                </td>
                <td>
                <?php  print_r($ad['service_description']); ?>
                </td>
                <td>
                <?php  print_r($ad['pub_url_flyers']); ?>
                </td>
                <td>
                <?php  print_r($ad['user_id']); ?>
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