@extends('layout.app')

@section('content')
    <div class="d-flex justify-content-between align-items-center mb-3">
        <h1>POSTS</h1>
        <a href="{{ route('posts.create') }}" class="btn btn-primary">Crear nuevo post</a>
    </div>

    @empty($posts)
        <h6>
            No hay posts disponibles.
        </h6>
        
    @endempty
    
    @if(count($posts) > 0)
        <div class="mx-5">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Título</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($posts as $item)
                        <tr>
                            <td>{{ $item['id'] }}</td>
                            <td>{{ $item['titulo'] }}</td>
                            <td>
                                <a href="/posts/{{ $item['id'] }}" class="btn btn-info">Consultar</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    @endif
@endsection