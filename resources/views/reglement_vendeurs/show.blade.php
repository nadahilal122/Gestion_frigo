@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h1>Détails du Règlement</h1>
                    </div>
                    <div class="card-body">
                        <a href="{{ route('vendeurs.reglements', $vendeur->id) }}" class="btn btn-secondary float-right">Retour</a>
                        <table class="table">
                            <tbody>
                                <tr>
                                    <th>Date :</th>
                                    <td>{{ $reglement->date }}</td>
                                </tr>
                                <tr>
                                    <th>Montant :</th>
                                    <td>{{ $reglement->montant }}</td>
                                </tr>
                                <tr>
                                    <th>Observation :</th>
                                    <td>{{ $reglement->observation }}</td>
                                </tr>
                                <tr>
                                    <th>Mode :</th>
                                    <td>{{ $reglement->mode->mode }}</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
