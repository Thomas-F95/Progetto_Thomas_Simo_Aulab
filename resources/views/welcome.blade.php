<x-layout>
    <x-slot:title>Home — Presto.it</x-slot:title>

    {{-- Hero --}}
    <div class="row justify-content-center mt-5">
        <div class="col-12 col-md-8 text-center">
            <h1 class="display-4 fw-bold welcome-title">Presto.it</h1>
            <p class="lead mb-4 welcome-subtitle">
                Il portale numero uno per vendere e comprare articoli di ogni tipo.
            </p>
            <div class="d-flex gap-3 justify-content-center">
                {{-- Attivare quando esiste la rotta article.index (US2) --}}
                <a href="{{ route('article.index') }}" class="btn-presto btn-lg">Vedi annunci</a>
                @guest
                    <a href="{{ route('register') }}" class="btn-presto-outline btn-lg">Registrati gratis</a>
                @endguest
                @auth
                    <a href="{{ route('article.create') }}" class="btn-presto-outline btn-lg">+ Inserisci annuncio</a>
                @endauth
            </div>
        </div>
    </div>

    {{-- Ultimi annunci: attivare nella US2 --}}
    <div class="row mt-5 mb-3">
        <div class="col-12">
            <h2 class="welcome-title h4">Ultimi annunci</h2>
        </div>
    </div>

    <div class="row gy-4">
        @forelse ($articles as $article)
            <div class="col-12 col-sm-6 col-md-4 col-lg-3 d-flex">
                <x-card :article="$article" />
            </div>
        @empty
            <div class="col-12">
                <p class="welcome-subtitle">Nessun annuncio ancora pubblicato.</p>
            </div>
        @endforelse
    </div>

    @if ($articles->isNotEmpty())
        <div class="text-center mt-4">
            <a href="{{ route('article.index') }}" class="btn-presto-outline">Vedi tutti gli annunci →</a>
        </div>
    @endif


</x-layout>
