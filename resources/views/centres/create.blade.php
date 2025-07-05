@extends('layouts.nav_bar')
@section('content')
    <div class="container my-5">
        <h1>{{ isset($centre) ? 'Modifier' : 'Ajouter' }} centre</h1>
        <form method="POST" action="{{ isset($centre) ? route('centres.update',$centre) : route('centres.store') }}" enctype="multipart/form-data">
            @csrf
            @isset($centre) @method('PUT') @endisset

            <!-- Champs : name, image_file, image_url, latitude, longitude, description -->
            <!-- Code à copier depuis ton sell.blade.php mais pour chaque champ -->
            <!-- Exemple : -->
            <div class="mb-3">
                <label>Name</label>
                <input name="name" value="{{ old('name', $centre->name ?? '') }}" class="form-control">
            </div>
            <!-- Ajoute les autres champs avec old() et valeurs existantes -->
            <button class="btn btn-success">{{ isset($centre) ? 'Sauvegarder' : 'Créer' }}</button>
        </form>
    </div>
@endsection
