<x-layout>
    <x-slot:title>Tutti gli annunci — Presto</x-slot:title>

    {{-- Header --}}
    <div class="row mb-4 mt-3">
        <div class="col">
            <h1 class="welcome-title display-5">
                {{ isset($category) ? $category->name : 'Tutti gli annunci' }}
            </h1>
            <p class="welcome-subtitle">
                {{ isset($category) ? 'Annunci nella categoria ' . $category->name : 'Scopri gli ultimi articoli in vendita' }}
            </p>
        </div>
    </div>

    <div class="row">

        {{-- Sidebar categorie --}}
        <div class="col-12 col-md-3 col-lg-2">
            <div class="sidebar-categories">

                {{-- Toggle Bootstrap collapse --}}
                <button class="sidebar-toggle w-100 d-flex justify-content-between align-items-center"
                    data-bs-toggle="collapse" data-bs-target="#sidebarLinks" aria-expanded="true"
                    aria-controls="sidebarLinks">
                    <span class="sidebar-title">Categorie</span>
                    <span class="sidebar-arrow">▲</span>
                </button>

                {{-- Lista categorie --}}
                <div class="collapse show mt-2" id="sidebarLinks">
                    <a href="{{ route('article.index') }}" class="sidebar-link {{ !isset($category) ? 'active' : '' }}">
                        Tutti gli annunci
                    </a>
                    @foreach ($categories as $cat)
                        <a href="{{ route('article.byCategory', $cat) }}"
                            class="sidebar-link {{ isset($category) && $category->id === $cat->id ? 'active' : '' }}">
                            {{ $cat->name }}
                        </a>
                    @endforeach
                </div>

            </div>
        </div>

        {{-- Griglia articoli --}}
        <div class="col">
            <div class="row gy-4">
                @forelse ($articles as $article)
                    <div class="col-12 col-sm-6 col-md-4 col-lg-3 d-flex">
                        <x-card :article="$article" />
                    </div>
                @empty
                    <div class="col-12 text-center">
                        <p class="welcome-subtitle">Nessun annuncio in questa categoria.</p>
                        @auth
                            <a href="{{ route('article.create') }}" class="btn-presto mt-3">
                                + Inserisci il primo annuncio
                            </a>
                        @endauth
                    </div>
                @endforelse
            </div>

            @if ($articles->hasPages())
                <div class="d-flex justify-content-center mt-5">
                    {{ $articles->links() }}
                </div>
            @endif
        </div>

    </div>

</x-layout>
