@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Détails du mode') }}</div>

                <div class="card-body">
                    <div>
                        <strong>ID:</strong> {{ $mode->id }}
                    </div>
                    <div>
                        <strong>Mode:</strong> {{ $mode->mode }}
                    </div>
                    <div class="mt-3">
                        <a href="{{ route('modes.edit', $mode->id) }}" class="btn btn-primary">{{ __('Modifier') }}</a>
                        <form action="{{ route('modes.destroy', $mode->id) }}" method="POST" style="display: inline-block;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger" onclick="return confirm('Êtes-vous sûr de vouloir supprimer ce mode?')">{{ __('Supprimer') }}</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
