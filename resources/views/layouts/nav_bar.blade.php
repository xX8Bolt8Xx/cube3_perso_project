<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Accueil - Enchères Prestige</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&family=Playfair+Display:wght@500;700&family=Montserrat:wght@400;600&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Inter', sans-serif;
        }
        .hero-section {
            background: linear-gradient(rgba(0, 0, 0, 0.6), rgba(0, 0, 0, 0.6)),
            url('https://images.unsplash.com/photo-1593642532842-98d0fd5ebc1a') center/cover no-repeat;
            height: 70vh;
        }
        .card img {
            max-height: 220px;
            width: 100%;
            object-fit: contain;
        }
        header .fw-bold {
            font-family: 'Montserrat', sans-serif;
        }
        h1.display-3 {
            font-family: 'Playfair Display', serif;
        }
        h2 {
            font-family: 'Montserrat', sans-serif;
        }
        .card-title {
            font-family: 'Playfair Display', serif;
        }
        .card-text, .btn {
            font-family: 'Inter', sans-serif;
        }
    </style>
</head>
<body class="bg-light text-dark">
<header class="bg-dark text-white py-3 px-4 d-flex justify-content-between align-items-center shadow">
    <a href="{{route('index')}}" class="fw-bold fs-4 text-white text-decoration-none">Auction House</a>
    <nav class="d-flex align-items-center gap-3">
        <a href="{{route('encheres')}}" class="text-white text-decoration-none">Enchères</a>
        <a href="#" class="text-white text-decoration-none">Vendre</a>
        <a href="{{route('contact')}}" class="text-white text-decoration-none">Contact</a>
        <a href="#" class="btn btn-outline-warning ms-3">Connexion</a>
    </nav>
</header>

@yield('content')

<footer class="bg-dark text-white text-center py-4 mt-5">
    &copy; 2025 Enchères Prestige — Tous droits réservés
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
