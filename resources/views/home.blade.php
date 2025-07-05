@extends('layouts.nav_bar')
@section('content')
<section class="hero-section d-flex justify-content-center align-items-center text-white text-center">
    <div class="p-4 rounded">
        <h1 class="display-3 fw-bold mb-3">Trouvez des pièces uniques.</h1>
        <h1 class="display-3 fw-bold mb-3">Misez. Gagnez.</h1>
        <a href="{{route('items.index')}}" class="btn btn-warning btn-lg shadow">Voir les enchères en cours</a>
    </div>
</section>

<section class="container my-5">
    <h2 class="text-center mb-4 fw-semibold text-primary">Enchères en cours</h2>
    <div class="container">
        <h1 class="text-center mb-4">Derniers objets aux enchères</h1>
        <div class="row">
            @forelse($items as $item)
                <div class="col-md-4 mb-4">
                    <div class="card shadow-sm">
                        <img src="{{ asset('storage/'.$item->image) }}" class="card-img-top" alt="{{ $item->name }}">
                        <div class="card-body">
                            <h5 class="card-title">{{ $item->name }}</h5>
                            <p class="card-text">{{ Str::limit($item->description, 100) }}</p>
                            <a href="{{ route('items.show', $item->id) }}" class="btn btn-primary">Voir l'enchère</a>
                        </div>
                    </div>
                </div>
            @empty
                <p class="text-center">Aucun objet disponible pour le moment.</p>
            @endforelse
        </div>
    </div>
</section>
@endsection
