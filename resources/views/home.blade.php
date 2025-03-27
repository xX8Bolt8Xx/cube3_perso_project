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
    <div class="row g-4">
        <div class="col-md-4">
            <div class="card shadow-sm border-0">
                <img src="https://media.rolex.com/image/upload/q_auto:best/f_auto/c_limit,w_3840/v1727258031/rolexcom/collection/family-pages/professional-watches/submariner/top-navigation/professional-watches-submariner-all-models-navigation_m126603-0001_2210jva_001" class="card-img-top" alt="Montre de luxe">
                <div class="card-body">
                    <h5 class="card-title">Montre Rolex Submariner</h5>
                    <p class="card-text">Actuellement: <strong>8 500€</strong><br>Temps restant: <span class="text-danger">02:45:10</span></p>
                    <a href="#" class="btn btn-outline-primary btn-sm">Enchérir</a>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card shadow-sm border-0">
                <img src="https://upload.wikimedia.org/wikipedia/commons/b/b5/Ferrari_308GTB_Lightweight_%281976%29_-_14453314104.jpg" class="card-img-top" alt="Voiture de collection">
                <div class="card-body">
                    <h5 class="card-title">Ferrari 308 GTS</h5>
                    <p class="card-text">Actuellement: <strong>74 000€</strong><br>Temps restant: <span class="text-danger">01:12:33</span></p>
                    <a href="#" class="btn btn-outline-primary btn-sm">Enchérir</a>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card shadow-sm border-0">
                <img src="https://artfr.fr/cdn/shop/products/MON6505_2048x.jpg?v=1650964547" class="card-img-top" alt="Peinture">
                <div class="card-body">
                    <h5 class="card-title">Peinture de maître</h5>
                    <p class="card-text">Actuellement: <strong>12 300€</strong><br>Temps restant: <span class="text-danger">03:08:20</span></p>
                    <a href="#" class="btn btn-outline-primary btn-sm">Enchérir</a>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
