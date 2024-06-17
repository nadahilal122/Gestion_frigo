@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <div class="card">
                    <div class="card-header">
                        <h1>Modifier le Produit</h1>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('produits.update', $produit->id) }}" method="POST">
                            @csrf
                            @method('PUT')
                            <div class="form-group">
                                <label for="designation">Désignation</label>
                                <input type="text" class="form-control" id="designation" name="designation" value="{{ $produit->designation }}" required>
                            </div>
                            <div class="form-group">
                                <label for="famille_id">Famille</label>
                                <select class="form-control" id="famille_id" name="famille_id" required>
                                    @foreach ($familles as $famille)
                                        <option value="{{ $famille->id }}" @if ($famille->id == $produit->famille_id) selected @endif>{{ $famille->famille }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="image">Image</label>
                                <input type="file" class="form-control-file" id="image" name="image">
                            </div>
                            <button type="submit" class="btn btn-primary">Modifier</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
