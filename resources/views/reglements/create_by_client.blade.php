@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <h1>{{ __('Ajouter un règlement pour le client: ') }} {{ $client->nom }} {{ $client->prenom }}</h1>
                </div>
                
                <div class="card-body">
                    <form method="POST" action="{{ route('reglements.store', $clientId) }}">
                        
                        @csrf
                        <input type="hidden" name="client_id" value="{{ $clientId }}">
                        <div class="form-group">
                            <label for="montant">Montant</label>
                            <input type="text" class="form-control" id="montant" name="montant" required>
                        </div>

                        <div class="form-group">
                            <label for="date">Date</label>
                            <input type="date" class="form-control" id="date" name="date" required>
                        </div>

                        <div class="form-group">
                            <label for="mode_id">Mode de règlement</label>
                            <select class="form-control" id="mode_id" name="mode_id" required>
                                @foreach ($modes as $mode)
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
