@extends('layouts.nav_bar')
@section('content')

    <section class="form-section">
        <div class="container">
            <h2 class="text-center mb-5 form-title">Vendre un objet aux enchères</h2>
            <form method="POST" action="{{ route('items.store') }}" class="mx-auto" style="max-width: 600px;" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                    <label for="itemName" class="form-label">Nom de l'objet</label>
                    <input type="text" class="form-control" id="itemName" name="name" required>
                </div>
                <div class="mb-3">
                    <label for="itemImage" class="form-label">Image de l'objet</label>
                    <input type="file" class="form-control" id="itemImage" name="image" accept="image/*" required>
                </div>
                <div class="mb-3">
                    <label for="duration" class="form-label">Durée de l'enchère (en jours)</label>
                    <input type="number" class="form-control" id="duration" name="duration" min="1" required>
                </div>
                <div class="mb-3">
                    <label for="startingPrice" class="form-label">Prix de départ (€)</label>
                    <input type="number" class="form-control" id="startingPrice" name="price" step="0.01" required>
                </div>
                <button type="submit" class="btn btn-primary w-100">Mettre en vente</button>
            </form>
        </div>
    </section>

@endsection
