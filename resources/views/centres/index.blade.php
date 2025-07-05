@extends('layouts.nav_bar')

@section('content')
    <div class="container my-5">
        <h1 class="mb-4">Centres</h1>
        @auth
            <a href="{{ route('centres.create') }}" class="btn btn-primary mb-3">Ajouter un centre</a>
        @endauth

        @if(session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif

        <div class="row">
            @foreach($centres as $c)
                <div class="col-md-4 mb-4">
                    <div class="card">
                        @if($c->image)
                            <img src="{{ asset('storage/'.$c->image) }}" class="card-img-top" alt="...">
                        @endif
                        <div class="card-body">
                            <h5 class="card-title">{{ $c->name }}</h5>
                            <p class="card-text">{{ Str::limit($c->description,50) }}</p>
                            <a href="{{ route('centres.show',$c) }}" class="btn btn-sm btn-outline-primary">Voir</a>
                            @auth
                                <a href="{{ route('centres.edit',$c) }}" class="btn btn-sm btn-outline-secondary">Modifier</a>
                                <form action="{{ route('centres.destroy',$c) }}" method="POST" class="d-inline">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-sm btn-outline-danger"
                                            onclick="return confirm('Supprimer ?')">Supprimer</button>
                                </form>
                            @endauth
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        {{ $centres->links() }}
    </div>
@endsection
