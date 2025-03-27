@extends('layouts.nav_bar')

@section('content')
    <section class="container my-5">
        <h1 class="text-center mb-4 fw-bold text-primary">Enchérir sur : {{ $item->name }}</h1>

        <div class="row justify-content-center">
            <div class="col-md-10">
                <div class="rounded shadow-sm p-4 mb-4" style="background-color: #f9f9f9;">
                    <div class="row align-items-center">
                        <!-- Image -->
                        <div class="col-md-4 text-center">
                            <img src="{{ $item->image }}" alt="Image de {{ $item->name }}" class="img-fluid rounded" style="max-height: 250px; object-fit: cover;">
                        </div>

                        <!-- Infos + formulaire -->
                        <div class="col-md-8">
                            <h4 class="text-muted">Proposer une enchère</h4>
                            <form action="{{ route('bids.store', $item->id) }}" method="POST">
                                @csrf
                                <div class="mb-3">
                                    <label for="amount" class="form-label">Montant proposé (€)</label>
                                    <input type="number" step="0.01" name="amount" id="amount" class="form-control" placeholder="Entrez votre enchère" required>
                                </div>
                                <button type="submit" class="btn btn-success w-100">Valider l'enchère</button>
                            </form>
                        </div>
                    </div>
                </div>

                <!-- Tableau des enchères -->
                <div class="rounded shadow-sm p-4" style="background-color: #ffffff;">
                    <h4 class="mb-3">Historique des enchères</h4>
                    @if ($item->bids->isEmpty())
                        <p class="text-muted">Aucune enchère n’a encore été placée.</p>
                    @else
                        <div class="table-responsive">
                            <table class="table table-bordered table-hover text-center">
                                <thead class="table-dark">
                                <tr>
                                    <th>Utilisateur</th>
                                    <th>Montant (€)</th>
                                    <th>Date</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach ($item->bids as $bid)
                                    <tr>
                                        <td>{{ $bid->user->name }}</td>
                                        <td>{{ number_format($bid->amount, 2) }}</td>
                                        <td>{{ $bid->created_at->format('d/m/Y H:i') }}</td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </section>
@endsection
