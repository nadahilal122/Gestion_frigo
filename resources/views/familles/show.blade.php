@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        Détails de la Famille
                        <a href="{{ route('familles.index') }}" class="btn btn-primary btn-sm float-right">Retour</a>
                    </div>
                    <div class="card-body">
                        <div class="form-group">
                            <label for="famille">Nom de la Famille</label>
                            <input type="text" id="famille" class="form-control" value="{{ $famille->famille }}" readonly>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
