@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <h4>{{ __('Règlements pour le client: ') }} {{ $client->nom }} {{ $client->prenom }}</h4>     
                </div>
                
                <div class="card-body">
                    <a href="{{ route('clients.index') }}" class="btn btn-primary mb-3">Retour à la liste des clients</a>
                
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Montant</th>
                                <th>Date</th>
                                <th>mode de reglement</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($reglements as $reglement)
                                <tr>
                                    <td>{{ $reglement->id }}</td>
                                    <td>{{ $reglement->montant }}</td>
                                    <td>{{ $reglement->date }}</td>
                                    <td>{{ $reglement->mode->mode }}</td>
                                    <td>
                                        <!-- Ajoutez des actions ici si nécessaire -->
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
