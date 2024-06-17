@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Détails du produit') }}</div>

                <div class="card-body">
                    <div>
                        <strong>Désignation:</strong> {{ $produit->designation }}
                    </div>
                    <div>
                        <strong>Famille:</strong> {{ $produit->famille->famille }}
                    </div>
                    <div>
                        <strong>Image:</strong> <img src="{{ asset('storage/' . $produit->image) }}" alt="Image du produit">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
