@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h1>Liste des Vendeurs</h1>
                    </div>
                    <div class="card-body">
                        <a href="{{ route('vendeurs.create') }}" class="btn btn-primary float-right">Ajouter un vendeur</a>
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Nom</th>
                                    <th>Prénom</th>
                                    <th>Adresse</th>
                                    <th>Ville</th>
                                    <th>Téléphone</th>
                                    <th>Email</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($vendeurs as $vendeur)
                                    <tr>
                                        <td>{{ $vendeur->nom }}</td>
                                        <td>{{ $vendeur->prenom }}</td>
                                        <td>{{ $vendeur->adresse }}</td>
                                        <td>{{ $vendeur->ville }}</td>
                                        <td>{{ $vendeur->tell }}</td>
                                        <td>{{ $vendeur->email }}</td>
                                        <td>
                                            <a href="{{ route('vendeurs.show', $vendeur->id) }}" class="btn btn-info">Voir</a>
                                            <a href="{{ route('vendeurs.edit', $vendeur->id) }}" class="btn btn-primary">Modifier</a>
                                            <a href="{{ route('vendeurs.reglements', $vendeur->id) }}" class="btn btn-warning"> Règ</a>
                                            
                                            <form action="{{ route('vendeurs.destroy', $vendeur->id) }}" method="POST" style="display: inline-block;">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger">Supprimer</button>
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
