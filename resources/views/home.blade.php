@extends('layouts.app')

@section('content')
<h1>Libri</h1>
<ul>
    @foreach ($libri as $libro)
        <li>
            <span>{{$libro->nome}}</span>
            <img class="copertina" src="{{ $libro->copertina }}" alt="">
        </li>
    @endforeach
</ul>
<p>This is my paragraph content.</p>
<button class="btn btn-primary">Cliccami</button>
@endsection