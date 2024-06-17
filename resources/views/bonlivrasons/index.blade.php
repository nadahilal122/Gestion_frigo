@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        Liste des Bons de Livraison
                       
                    </div>
                    <div class="card-body">
                    <a href="{{ route('bonlivrasons.create') }}" class="btn btn-primary float-right">Ajouter un Bon de Livraison</a>
                        @if (session('success'))
                            <div class="alert alert-success">
                                {{ session('success') }}
                            </div>
                        @endif
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Date</th>
                                    <th>Observation</th>
                                    <th>Vendeur</th>
                                    <th>Client</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($bons as $bonLivrason)
                                    <tr>
                                        <td>{{ $bonLivrason->id }}</td>
                                        <td>{{ $bonLivrason->date }}</td>
                                        <td>{{ $bonLivrason->observation }}</td>
                                        <td>{{ $bonLivrason->vendeur->nom }} {{ $bonLivrason->vendeur->prenom }}</td>
                                        <td>{{ $bonLivrason->client->nom }} {{ $bonLivrason->client->prenom }}</td>
                                        <td>
                                            <a href="{{ route('bonlivrasons.show', $bonLivrason->id) }}" class="btn btn-info">Voir</a>
                                            <a href="{{ route('bonlivrasons.edit', $bonLivrason->id) }}" class="btn btn-warning">Modifier</a>
                                            <form action="{{ route('bonlivrasons.destroy', $bonLivrason->id) }}" method="POST" style="display:inline-block;">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger" onclick="return confirm('Êtes-vous sûr de vouloir supprimer ce bon de livraison ?')">Supprimer</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
