@extends('layout.app')
@section('content')
    <div class="card border-info mb-3" style="max-width: 100%;">
        <div class="card-header">
            <h2>{{ $post['titulo'] }}</h2>
        </div>
        <div class="card-body">
            <p>{{ $post['contenido'] }}</p>
        </div>
        <div class="card-footer">
            <a href="{{ route('posts.index') }}" class="btn btn-secondary">Regresar</a>
        </div>
    </div>
@endsection