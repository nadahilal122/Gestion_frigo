@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Ajouter un Conditionnement</div>

                    <div class="card-body">
                        <form action="{{ route('conditionnements.store') }}" method="POST">
                            @csrf
                            <div class="form-group">
                                <label for="conditionnement">Conditionnement</label>
                                <input type="text" class="form-control" id="conditionnement" name="conditionnement" placeholder="Nom du conditionnement">
                            </div>
                            <button type="submit" class="btn btn-primary">Ajouter</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
