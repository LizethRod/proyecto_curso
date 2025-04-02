@extends('layout.app')

@section('content')
    <div class="d-flex justify-content-end align-items-center mb-3">
        <a href="{{ route('posts.index') }}" class="btn btn-secondary">Regresar</a>
    </div>
    <div class="card">
        <div class="card-header">
            <h2>Crear</h2>
        </div>
        <div class="card-body">
            <form action="{{ route('posts.store') }}" method="post">
                @csrf
                <div class="form-group mb-3">
                    <label for="titulo">Título</label>
                    <input type="text" class="form-control" id="titulo" name="titulo" required>
                </div>
                <div class="form-group mb-3">
                    <label for="contenido">Contenido</label>
                    <textarea class="form-control" id="contenido" name="contenido" rows="5" required></textarea>
                </div>
                <button type="submit" class="btn btn-primary mt-3">Guardar</button>
            </form>
        </div>

    </div>
    
@endsection