@extends('layouts.nav_bar')

@section('content')
    <section class="container my-5">
        <h1 class="text-center mb-4 fw-bold text-primary">Créer un compte</h1>

        <div class="row justify-content-center">
            <div class="col-md-6">
                <!-- Formulaire de création de compte -->
                <div class="rounded shadow-sm p-4" style="background-color: #f9f9f9;">
                    <form method="POST" action="{{ route('guest.register') }}">
                        @csrf

                        <!-- Champ email -->
                        <div class="mb-3">
                            <label for="email" class="form-label">Adresse email</label>
                            <input type="email" name="email" id="email" class="form-control" value="{{ old('email') }}" required autofocus>
                            @error('email')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <!-- Champ mot de passe -->
                        <div class="mb-3">
                            <label for="password" class="form-label">Mot de passe</label>
                            <input type="password" name="password" id="password" class="form-control" required>
                            @error('password')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <!-- Confirmation du mot de passe -->
                        <div class="mb-3">
                            <label for="password_confirmation" class="form-label">Confirmer le mot de passe</label>
                            <input type="password" name="password_confirmation" id="password_confirmation" class="form-control" required>
                        </div>

                        <!-- Bouton pour soumettre le formulaire -->
                        <button type="submit" class="btn btn-success w-100">S'inscrire</button>

                        <!-- Lien vers la page de connexion -->
                        <div class="mt-3 text-center">
                            <p>Déjà un compte ? <a href="{{ route('login') }}">Se connecter</a></p>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection
