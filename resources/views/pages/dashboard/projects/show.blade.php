@extends('layouts.app')

@section('content')
<main class="container">
    <h1>Project</h1>
    <h2>{{ $project->nome_progetto }}</h2>
    <p>{{ $project->descrizione_progetto }}</p>
    <img src="{{ asset('/storage/' . $project->immagine) }}" alt="">
    
</main>
@endsection