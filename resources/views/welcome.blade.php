<x-layout>
    <x-header />

    {{-- Inizio inserimento di un articolo --}}
    <div class="container my-5">
        <div class="row">
            @forelse($articles as $article)
                <div class="col-3 col-md-3 zoom">

                    @if ($article->category)
                        <div class="col-3 zoom">

                        </div>
                        {{-- <a href="{{ route('article.byCategory', ['category' => $article->category->id]) }}"
                            class="small text-muted fst-italic text-capitalize">{{ $article->category->name }}</a> --}}
                    @else
                        <p class="small text-muted fst-italic text-capitalize">
                            Non categorizzato
                        </p>
                    @endif

                    <div class="card">
                        <div class="card-body">
                            <img src="https://picsum.photos/250/170?random={{$article->id}}" alt="Immagine di repertorio">
                            <hr>
                            <h3 class="card-title">{{ $article->title }}</h3>
                            <hr>
                            <h5 class="card-title">{{ $article->created_at->format('d/m/Y') }}</h5>
                            <p class="card-text">{{ $article->subtitle }}</p>
                            <div class="d-flex justify-content-between">
                                <a href="{{ route('article.byCategory', ['category' => $article->category->id]) }}"
                                    class="d-flex align-items-center mt-2 no-line">(Categoria:
                                    {{ $article->category->name }})</a>
                                <p>Redattore: <a
                                        href="{{ route('article.byAuthors', ['author' => $article->user->id]) }}"
                                        class="small text-muted fst-italic text-capitalize no-line">
                                        {{ $article->user->name }}</a></p>
                                <a href="{{ route('article.show', compact('article')) }}"
                                    class="btn custom-1 d-flex align-items-center"><span
                                        class="card-link">Leggi</span></a>
                                <span class="text-muted small fst-italic">- tempo di lettura {{$article->readDuration()}} min</span>
                            </div>
                        </div>
                    </div>
                </div>

            @empty
                @if (Auth::check() && Auth::user()->is_writer)
                    <h5 class="text-center pt-5">Non ci sono ancora articoli, <a href="{{ route('article.create') }}"
                            class="btn custom-1">Inseriscine uno</a></h5>
                @endif
            @endforelse

        </div>

    </div>

</x-layout>
