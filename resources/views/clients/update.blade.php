@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="alert alert-success" role="alert">
                {{ __('Client mis à jour avec succès.') }}
            </div>
            <a href="{{ route('clients.index') }}" class="btn btn-primary">{{ __('Retour à la liste des clients') }}</a>
        </div>
    </div>
</div>
@endsection
