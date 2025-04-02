@if ($num == 10)
    <h2> Es 10 </h2>
@elseif ($num < 10)
    <h2> Es menor a 10 </h2>
@else
    <h2> Es mayor a 10 </h2>
@endif

@isset($data)
    <h2> La variable data existe </h2>
@endisset

@empty($data)
    <h2> La variable data no existe </h2>
@endempty


@for ($i = 0; $i < count($names); $i++)
    <h1>{{ $i }} => {{ $names[$i] }}</h1>
@endfor

@forelse ($names as $item)
    
@empty
    
@endforelse