<div {{ $attributes ->merge(['class' => 'alert alert-danger']) }}>
    {{ $slot}}
    <h1>{{ $title }}</h1>
    Hola, {{ $name }}
    <p>Este es un mensaje de alerta</p>
    @foreach ($lista("lista") as $item)
        <p>{{ $item }}</p>
    @endforeach
</div>