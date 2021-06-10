@extends('layouts.app', ['page' => __('Tous les messages'), 'pageSlug' => 'all_message'])

@section('content')
<div class="row">
  <div class="col-md-12">
    <div class="card ">
      <div class="card-header">
        <h4 class="card-title"> Messages</h4>
      </div>
      <div class="card-body">
        <div class="table-responsive">
          <table class="table tablesorter " id="">
            <thead class=" text-primary">
            <?php 
            use App\Message;
            $messages = Message::all();
            ?>
            <tr>
                <th > 
                  id
                </th>
                <th>
                   Objet
                </th>
                <th>
                  Message
                </th>
                <th class="text-center">
                  Date d'envois
                </th>
              </tr>
            </thead>
            <tbody>
             @foreach ($messages as $message)
              <tr>
                <td>
                <?php  print_r($message['id']); ?>
                </td>
                <td>
                <?php  print_r($message['objet']); ?>
                </td>
                <td>
                <?php  print_r($message['message']); ?>
                </td>
                <td class="text-center">
                <?php  echo 'date'; ?>
               
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