@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        Détails du Vendeur
                    </div>
                    <div class="card-body">
                        <p><strong>Nom:</strong> {{ $vendeur->nom }}</p>
                        <p><strong>Prénom:</strong> {{ $vendeur->prenom }}</p>
                        <p><strong>Adresse:</strong> {{ $vendeur->adresse }}</p>
                        <p><strong>Ville:</strong> {{ $vendeur->ville }}</p>
                        <p><strong>Téléphone:</strong> {{ $vendeur->tell }}</p>
                        <p><strong>Email:</strong> {{ $vendeur->email }}</p>
                        <a href="{{ route('vendeurs.edit', $vendeur->id) }}" class="btn btn-primary">Modifier</a>
                        <form action="{{ route('vendeurs.destroy', $vendeur->id) }}" method="POST" style="display: inline-block;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Supprimer</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
