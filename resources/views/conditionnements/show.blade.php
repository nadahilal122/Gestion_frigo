@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Détails du Conditionnement</div>

                    <div class="card-body">
                        <div>
                            <strong>ID:</strong> {{ $conditionnement->id }}
                        </div>
                        <div>
                            <strong>Conditionnement:</strong> {{ $conditionnement->conditionnement }}
                        </div>
                       
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
