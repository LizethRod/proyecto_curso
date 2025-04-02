@extends("layout.app")

@section("title", "Página de inicio")

@section("content")
    <h1>Bienvenido a mi app</h1>
    <hr>
    <p>Esta es la página de inicio de mi app</p>
    <p>{{$name}}</p>
    <p>{{$lastname}}</p>
    <p>{{$age}}</p>

    @component("components.alert", ["name", "Nombre1"])
        @slot("title")
            Mensaje de alerta
        @endslot
        <p>Este es un mensaje de componente</p>
@endsection