@extends('layouts.nav_bar')

@section('content')
    <div class="container mt-5">
        <div class="d-flex justify-content-between align-items-center mb-4">
            <h2 class="text-primary">Centres Internationaux</h2>
            <a href="{{ route('items.index') }}" class="btn btn-outline-secondary">
                <i data-feather="arrow-left"></i> Retour
            </a>
        </div>

        <div class="row">
            @php
                $centres = [
                    ['nom' => 'Centre de Paris', 'ville' => 'Paris', 'pays' => 'France'],
                    ['nom' => 'Centre de Montréal', 'ville' => 'Montréal', 'pays' => 'Canada'],
                    ['nom' => 'Centre de Tokyo', 'ville' => 'Tokyo', 'pays' => 'Japon'],
                    ['nom' => 'Centre de Berlin', 'ville' => 'Berlin', 'pays' => 'Allemagne'],
                    ['nom' => 'Centre de Dakar', 'ville' => 'Dakar', 'pays' => 'Sénégal'],
                ];
            @endphp

            @foreach($centres as $centre)
                <div class="col-md-4 mb-4">
                    <div class="card shadow-sm border-0">
                        <div class="card-body">
                            <h5 class="card-title text-primary">
                                <i data-feather="map-pin" class="me-2"></i> {{ $centre['nom'] }}
                            </h5>
                            <p class="card-text mb-1">
                                <strong>Ville :</strong> {{ $centre['ville'] }}
                            </p>
                            <p class="card-text">
                                <strong>Pays :</strong> {{ $centre['pays'] }}
                            </p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection

@push('scripts')
    <script>
        feather.replace();
    </script>
@endpush
