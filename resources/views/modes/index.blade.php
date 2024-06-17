@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Liste des modes') }}</div>

                <div class="card-body">
                    @if (session('success'))
                        <div class="alert alert-success" role="alert">
                            {{ session('success') }}
                        </div>
                    @endif

                    <div class="mb-3">
                        <a href="{{ route('modes.create') }}" class="btn btn-primary">{{ __('Ajouter un mode') }}</a>
                    </div>

                    <table class="table">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Mode</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($modes as $mode)
                                <tr>
                                    <td>{{ $mode->id }}</td>
                                    <td>{{ $mode->mode }}</td>
                                    <td>
                                        <a href="{{ route('modes.edit', $mode->id) }}" class="btn btn-sm btn-primary">{{ __('Modifier') }}</a>
                                        <a href="{{ route('modes.show', $mode->id) }}" class="btn btn-sm btn-primary">{{ __('voir') }}</a>
                                      
                                        <form action="{{ route('modes.destroy', $mode->id) }}" method="POST" style="display: inline-block;">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Êtes-vous sûr de vouloir supprimer ce mode?')">{{ __('Supprimer') }}</button>
                                        </form>
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
