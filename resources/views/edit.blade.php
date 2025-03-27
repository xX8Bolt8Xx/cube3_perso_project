@extends('layouts.nav_bar')

@section('content')
    <section class="container my-5">
        <h1 class="text-center mb-4 fw-bold text-primary">Modifier l'objet : {{ $item->name }}</h1>

        <!-- Formulaire de modification de l'objet -->
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="rounded shadow-sm p-4" style="background-color: #f9f9f9;">
                    <form action="{{ route('items.update', $item->id) }}" method="POST">
                        @csrf
                        @method('PUT')

                        <div class="mb-3">
                            <label for="name" class="form-label">Nom de l'objet</label>
                            <input type="text" class="form-control" id="name" name="name" value="{{ old('name', $item->name) }}" required>
                        </div>

                        <div class="mb-3">
                            <label for="price" class="form-label">Prix de départ (€)</label>
                            <input type="number" class="form-control" id="price" name="price" value="{{ old('price', $item->price) }}" step="0.01" required>
                        </div>

                        <div class="mb-3">
                            <label for="image" class="form-label">URL de l'image de l'objet</label>
                            <input type="text" class="form-control" id="image" name="image" value="{{ old('image', $item->image) }}" placeholder="Entrez l'URL de l'image">
                            <small class="text-muted">Entrez l'URL de l'image ou laissez vide pour ne pas changer l'image.</small>
                        </div>

                        <div class="mb-3">
                            <label for="end_time" class="form-label">Fin de l'enchère</label>
                            <input type="datetime-local" class="form-control" id="end_time" name="end_time" value="{{ old('end_time', $item->end_time) }}" required>
                        </div>

                        <button type="submit" class="btn btn-success w-100">Mettre à jour</button>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection
