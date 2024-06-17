@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h1>Modifier le Règlement</h1>
                        @if(session('success'))
    <div class="alert alert-success mt-3">
        {{ session('success') }}
    </div>
@endif
                    </div>
                    <div class="card-body">
                        <form action="{{ route('reglements.update', $reglementVendeur->id) }}" method="POST">
                            @csrf
                            @method('PUT')

                            <div class="form-group">
                                <label for="date">Date :</label>
                                <input type="date" name="date" id="date" class="form-control" value="{{ $reglementVendeur->date }}">
                            </div>

                            <div class="form-group">
                                <label for="montant">Montant :</label>
                                <input type="number" name="montant" id="montant" class="form-control" value="{{ $reglementVendeur->montant }}">
                            </div>

                            <div class="form-group">
                                <label for="observation">Observation :</label>
                                <textarea name="observation" id="observation" class="form-control">{{ $reglementVendeur->observation }}</textarea>
                            </div>

                            <div class="form-group">
                                <label for="mode_id">Mode :</label>
                                <select name="mode_id" id="mode_id" class="form-control">
                                    @foreach($modes as $mode)
                                        <option value="{{ $mode->id }}" @if($mode->id == $reglementVendeur->mode_id) selected @endif>{{ $mode->mode }}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="form-group">
                                <button type="submit" class="btn btn-primary">Mettre à Jour</button>
                                <a href="{{ route('reglements.show', $reglementVendeur->id) }}" class="btn btn-secondary">Annuler</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
