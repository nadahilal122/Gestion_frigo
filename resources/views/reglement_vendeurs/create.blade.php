@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h1>Ajouter un Règlement pour {{ $vendeur->nom }} {{ $vendeur->prenom }}</h1>
                        @if(session('success'))
                            <div class="alert alert-success mt-3">
                                {{ session('success') }}
                            </div>
                        @endif
                    </div>
                    <div class="card-body">
                        <form action="{{ route('vendeurs.reglements.store', $vendeur->id) }}" method="POST">
                            @csrf
                            <div class="form-group">
                                <label for="date">Date</label>
                                <input type="date" name="date" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label for="montant">Montant</label>
                                <input type="number" name="montant" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label for="observation">Observation</label>
                                <textarea name="observation" class="form-control"></textarea>
                            </div>
                            <div class="form-group">
                                <label for="mode_id">Mode de Paiement</label>
                                <select name="mode_id" class="form-control" required>
                                    @foreach($modes as $mode)
                                        <option value="{{ $mode->id }}">{{ $mode->mode }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <button type="submit" class="btn btn-primary">Ajouter</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
