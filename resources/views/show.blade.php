@extends('layouts.nav_bar')

@section('content')
    <section class="container my-5">
        <!-- Titre -->
        <h1 class="text-center mb-4 fw-bold text-primary">{{ $item->name }}</h1>

        <div class="row justify-content-center">
            <!-- Conteneur de l'image et des informations dans le même cadre -->
            <div class="col-md-10">
                <div class="rounded shadow-sm p-4" style="background-color: #dfdfdf;">
                    <div class="row align-items-center">
                        <div class="col-md-6 text-center">
                            <!-- Affichage de l'image de l'objet avec un contour arrondi -->
                            <img src="{{ $item->image }}" class="img-fluid rounded" alt="Image de {{ $item->name }}" style="object-fit: cover; height: 400px;">
                        </div>
                        <div class="col-md-6">
                            <!-- Informations détaillées sur l'objet -->
                            <h3 class="text-center text-muted">Détails de l'objet</h3>
                            <p><strong>Nom :</strong> {{ $item->name }}</p>
                            <p><strong>Fin de l'enchère :</strong> {{ $item->end_time }}</p>
                            <p><strong>Prix de départ :</strong> €{{ number_format($item->price, 2) }}</p>

                            <!-- Boutons d'actions (modifier et supprimer) -->
                            <div class="d-flex justify-content-between mt-4">
                                <a href="{{ route('items.edit', $item->id) }}" class="btn btn-warning">Modifier</a>
                                <form action="{{ route('items.destroy', $item->id) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger">Supprimer</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
