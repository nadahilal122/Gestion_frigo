@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h1>Liste des Conditionnements</h1>
                    </div>
                    <div class="card-body">
                        <!-- Message de succès ou d'erreur -->
                        @if(session('success'))
                            <div class="alert alert-success">{{ session('success') }}</div>
                        @endif

                        @if(session('error'))
                            <div class="alert alert-danger">{{ session('error') }}</div>
                        @endif

                        <a href="{{ route('conditionnements.create') }}" class="btn btn-primary float-right mb-3">Ajouter un Conditionnement</a>
                        
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Conditionnement</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($conditionnements as $conditionnement)
                                    <tr>
                                        <td>{{ $conditionnement->id }}</td>
                                        <td>{{ $conditionnement->conditionnement }}</td>
                                        <td>
                                            <a href="{{ route('conditionnements.show', $conditionnement->id) }}" class="btn btn-info btn-sm">Voir</a>
                                            <a href="{{ route('conditionnements.edit', $conditionnement->id) }}" class="btn btn-primary btn-sm">Modifier</a>
                                            
                                            <form action="{{ route('conditionnements.destroy', $conditionnement->id) }}" method="POST" class="d-inline">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Êtes-vous sûr de vouloir supprimer ce conditionnement?')">Supprimer</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                        <!-- Pagination (if needed) -->
                        {{-- <div class="d-flex justify-content-center">
                            {{ $conditionnements->links() }}
                        </div> --}}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
