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
            @foreach ($items as $item)
                <div class="col">
                    <div class="card shadow-lg border-light rounded h-100">
                        <!-- Image de l'objet avec un style amélioré -->
                        <img src="{{$item->image}}" class="card-img-top" alt="Image de {{ $item->name }}" style="object-fit: cover; height: 250px;">

                        <div class="card-body d-flex flex-column">
                            <h5 class="card-title text-center text-primary">{{ $item->name }}</h5>
                            <p class="card-text text-muted">Fin : {{ $item->end_time }}</p>
                            <p class="card-text text-success fs-4 mb-3">Prix de départ : €{{ number_format($item->price, 2) }}</p>

                            <!-- Ajouter un bouton ou un lien pour plus d'interaction -->
                            <a href="{{ route('items.show', $item->id) }}" class="btn btn-primary mt-auto">Voir plus</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>
@endsection
