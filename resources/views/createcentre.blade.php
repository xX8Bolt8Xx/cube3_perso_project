@extends('layouts.nav_bar')

@section('content')
    <section class="container my-5">
        <h1 class="text-center mb-4 fw-bold text-primary">Vendre un objet aux enchères</h1>

        <!-- Formulaire de création de l'objet -->
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="rounded shadow-sm p-4" style="background-color: #f9f9f9;">
                    <form method="POST" action="{{ route('centres.store') }}" enctype="multipart/form-data">
                    @csrf

                        <div class="mb-3">
                            <label for="name" class="form-label">Nom de l'objet</label>
                            <input type="text" class="form-control" id="name" name="name" value="{{ old('name') }}" required>
                        </div>

                        <div class="mb-3">
                            <label for="latitude" class="form-label">Latitude</label>
                            <input type="number" class="form-control" id="latitude" name="latitude" value="{{ old('price') }}" step="0.01" required>
                        </div>

                        <div class="mb-3">
                            <label for="longitude" class="form-label">Longitude</label>
                            <input type="number" class="form-control" id="longitude" name="longitude" value="{{ old('price') }}" step="0.01" required>
                        </div>

                        <div class="mb-3">
                            <label for="price" class="form-label">Prix de départ (€)</label>
                            <input type="number" class="form-control" id="price" name="price" value="{{ old('price') }}" step="0.01" required>
                        </div>

                        <!-- Upload de fichier -->
                        <div class="mb-3">
                            <label for="image_file" class="form-label">Image (fichier)</label>
                            <input type="file" class="form-control" id="image_file" name="image_file">
                        </div>

                        <!-- OU bien : URL d'image -->
                        <div class="mb-3">
                            <label for="image_url" class="form-label">Image (URL)</label>
                            <input type="text" class="form-control" id="image_url" name="image_url" placeholder="https://exemple.com/image.jpg">
                        </div>


                        <div class="mb-3">
                            <label for="end_time" class="form-label">Fin de l'enchère</label>
                            <input type="datetime-local" class="form-control" id="end_time" name="end_time" value="{{ old('end_time') }}" required>
                        </div>

                        <button type="submit" class="btn btn-success w-100">Mettre en vente</button>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection
