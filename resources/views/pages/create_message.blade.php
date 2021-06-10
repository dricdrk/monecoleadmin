@extends('layouts.app', ['page' => __('Creer un message'), 'pageSlug' => 'creaate_message'])

@section('content')

<div class="container">
        <div class="row">
            <div class="col-md-6 offset-3 mt-5">
                <div class="card">
                    <div class="card-header">
                        <h5 class='text-center'>Creer un nouveau message pour vos utilisateurs</h5>
                    </div>
                    <div class="card-body">
                        @if (count($errors) > 0)
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif

                        @if ($message = Session::get('success'))
                            <div class="alert alert-success alert-block">
                                <button type="button" class="close" data-dismiss="alert">×</button>
                                <strong>{{ $message }}</strong>
                            </div>
                        @endif

                        <form action="{{ route('user.store') }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label><strong>Objet: </strong></label>
                                <input type="text" name="objet" class="form-control">
                            </div>
                            <div class="form-group">
                                <label><strong>Message : </strong></label>
                                <input type="text" name="message" class="form-control">
                            </div>
                            
                            <div class="form-group text-center">
                                <input type="submit" class="btn btn-success" name="submit" value="Save">
                            </div>
                        </form>                     
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
