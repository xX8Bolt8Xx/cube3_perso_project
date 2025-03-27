@extends('layouts.nav_bar')

@section('content')
    <section class="container my-5">
        <h1 class="text-center mb-4 fw-bold text-primary">Objets actuellement aux enchères</h1>

        <!-- Introduction ou texte d'accompagnement -->
        <div class="text-center mb-4">
            <p class="lead text-muted">Découvrez les objets en vente aux enchères et faites vos offres avant qu'il ne soit trop tard!</p>
        </div>

        <!-- Grille responsive pour les cartes -->
        <div class="row row-cols-1 row-cols-md-3 g-4">
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

        {{-- Affiche un message s'il n'y a aucun item --}}
        @if ($items->isEmpty())
            <p class="text-center mt-4">Aucun item trouvé! Revenez plus tard.</p>
        @endif
    </section>
@endsection
