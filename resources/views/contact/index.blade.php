@extends('layouts.nav_bar')
@section('content')
<main class="container my-5">
    <h1 class="text-center text-primary mb-4">Contactez-nous</h1>
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="bg-white shadow-sm rounded p-4 contact-info">
                <p class="mb-4">Vous avez une question, un problème ou besoin d’aide ? N'hésitez pas à nous contacter via les informations ci-dessous :</p>
                <div class="mb-3">
                    <label>Email :</label>
                    <p><a href="mailto:contact@encheres-prestige.fr">contact@encheres-prestige.fr</a></p>
                </div>
                <div class="mb-3">
                    <label>Téléphone :</label>
                    <p>+33 1 23 45 67 89</p>
                </div>
                <div class="mb-3">
                    <label>Adresse :</label>
                    <p>123 Avenue des Collectionneurs, 75008 Paris, France</p>
                </div>
                <div class="mb-3">
                    <label>Service client disponible :</label>
                    <p>Du lundi au vendredi, de 9h à 18h</p>
                </div>
                <div class="mb-3">
                    <label>Formulaire de contact :</label>
                    <p><a href="#" class="btn btn-outline-primary btn-sm">Remplir le formulaire</a></p>
                </div>
            </div>
        </div>
    </div>
</main>
@endsection
