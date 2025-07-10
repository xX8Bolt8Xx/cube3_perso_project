<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Détail de l'entité</title>
    <style>
        body {
            font-family: DejaVu Sans, sans-serif;
            font-size: 14px;
        }
        h1 {
            color: #333;
        }
        p {
            margin-bottom: 10px;
        }
    </style>
</head>
<body>
<h1>Détail de l'entité #{{ $item->id }}</h1>

<p><strong>Nom :</strong> {{ $item->name }}</p>
<p><strong>Date de fin :</strong> {{ $item->end_time }}</p>
<p><strong>Prix :</strong> {{ $item->price }} €</p>

@if($item->image)
    <p><strong>Image :</strong></p>
    <img src="{{ public_path('storage/' . $item->image) }}" width="200" alt="Image de l'objet">
@else
    <p><strong>Image :</strong> Non disponible</p>
@endif
</body>
</html>
