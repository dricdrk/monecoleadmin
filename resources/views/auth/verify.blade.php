@extends('layouts.app', ['class' => 'bg-default'])

@section('content')
    @include('layouts.headers.guest')

    <div class="container mt--8 pb-5">
        <div class="row justify-content-center">
            <div class="col-lg-5 col-md-7">
                <div class="card bg-secondary shadow border-0">
                    <div class="card-body px-lg-5 py-lg-5">
                        <div class="text-center text-muted mb-4">
                            <small>{{ __('Verifier votre addresse mail') }}</small>
                        </div>
                        <div>
                            @if (session('resent'))
                                <div class="alert alert-success" role="alert">
                                    {{ __('Un lien de verification vous a été envoyer .') }}
                                </div>
                            @endif
                            
                            {{ __('Avant de poursuivre, veuillez vérifier votre e-mail pour un lien de vérification.') }}
                            
                            @if (Route::has('verification.resend'))
                                {{ __('Si vous ne recevez pas de mail') }}, 
                               <form class="d-inline" method="POST" action="{{ route('verification.resend') }}">
                                   @csrf
                                   <button type="submit" class="btn btn-link p-0 m-0 align-baseline">{{ __('cliquez ici pour en demander un autre') }}</button>.
                               </form>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
