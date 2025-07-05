@extends('layouts.nav_bar')
@section('content')
    <div class="container my-5">
        <h1>{{ $centre->name }}</h1>
        @if($centre->image)
            <img src="{{ asset('storage/'.$centre->image) }}" class="img-fluid mb-3">
        @endif
        <p>{{ $centre->description }}</p>
        <p>📍 {{ $centre->latitude }}, {{ $centre->longitude }}</p>
        <a href="{{ route('centres.index') }}" class="btn btn-primary">Retour</a>
    </div>
@endsection
