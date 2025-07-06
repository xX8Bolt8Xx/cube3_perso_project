@extends('layouts.nav_bar')

@section('content')
    <div class="container my-5">
        <h1>{{ isset($centre) ? 'Modifier' : 'Ajouter' }} centre</h1>

        <form method="POST" action="{{ isset($centre) ? route('centres.update', $centre) : route('centres.store') }}" enctype="multipart/form-data">
            @csrf
            @isset($centre)
                @method('PUT')
            @endisset

            <!-- Nom -->
            <div class="mb-3">
                <label for="name" class="form-label">Nom</label>
                <input type="text" name="name" class="form-control" value="{{ old('name', $centre->name ?? '') }}" required>
            </div>

            <!-- Image (fichier) -->
            <div class="mb-3">
                <label for="image_file" class="form-label">Image (fichier)</label>
                <input type="file" name="image_file" class="form-control">
            </div>

            <!-- Image (URL) -->
            <div class="mb-3">
                <label for="image_url" class="form-label">Image (URL)</label>
                <input type="url" name="image_url" class="form-control" value="{{ old('image_url', $centre->image ?? '') }}">
            </div>

            <!-- Latitude -->
            <div class="mb-3">
                <label for="latitude" class="form-label">Latitude</label>
                <input type="text" name="latitude" class="form-control" value="{{ old('latitude', $centre->latitude ?? '') }}" required>
            </div>

            <!-- Longitude -->
            <div class="mb-3">
                <label for="longitude" class="form-label">Longitude</label>
                <input type="text" name="longitude" class="form-control" value="{{ old('longitude', $centre->longitude ?? '') }}" required>
            </div>

            <!-- Description -->
            <div class="mb-3">
                <label for="description" class="form-label">Description</label>
                <textarea name="description" rows="5" class="form-control" required>{{ old('description', $centre->description ?? '') }}</textarea>
            </div>

            <button type="submit" class="btn btn-success">
                {{ isset($centre) ? 'Sauvegarder' : 'Créer' }}
            </button>
        </form>
    </div>
@endsection
