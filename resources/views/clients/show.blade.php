@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Détails du Client') }}</div>

                <div class="card-body">
                    <p><strong>Nom:</strong> {{ $client->nom }}</p>
                    <p><strong>Prénom:</strong> {{ $client->prenom }}</p>
                    <p><strong>Adresse:</strong> {{ $client->adresse }}</p>
                    <p><strong>Ville:</strong> {{ $client->ville }}</p>
                    <p><strong>Téléphone:</strong> {{ $client->tell }}</p>
                    <p><strong>Email:</strong> {{ $client->email }}</p>
                    <p><strong>Vendeur ID:</strong> {{ $client->vendeur_id }}</p>
                </div>
            </div>
            <a href="{{ route('clients.index') }}" class="btn btn-primary mt-3">{{ __('Retour à la liste des clients') }}</a>
        </div>
    </div>
</div>
@endsection
