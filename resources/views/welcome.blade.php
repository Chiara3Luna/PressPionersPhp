<x-layout>
    <x-header />

    {{-- Inizio inserimento di un articolo --}}
    <div class="container my-5">
        <div class="row">
            @forelse($articles as $article)
                <div class="col-12 col-md-6 col-lg-4 zoom">

                    @if ($article->category)
                        <div class="col-3 zoom">

                        </div>
                    @else
                        <p class="small text-muted fst-italic text-capitalize">
                            Non categorizzato
                        </p>
                    @endif

                    <div class="card">
                        <div class="card-body">
                            <img src="{{ Storage::url($article->image) }}" alt="Immagine dell'articolo" class="img-fluid">
                            <hr>
                            <h3 class="card-title">{{ $article->title }}</h3>
                            <hr>
                            <h5 class="card-title">{{ $article->created_at->format('d/m/Y') }}</h5>
                            <p class="card-text">{{ $article->subtitle }}</p>
                            <span class="text-muted small fst-italic">Tempo di lettura: {{ $article->readDuration() }}
                                min</span>
                            <div class="d-flex justify-content-between">
                                <a href="{{ route('article.byCategory', ['category' => $article->category->id]) }}"
                                    class="mt-2 no-line">(Categoria:
                                    {{ $article->category->name }})</a>
                                <a href="{{ route('article.byAuthors', ['author' => $article->user->id]) }}"
                                    class="small text-muted fst-italic text-capitalize no-line d-flex align-items-center"> Redattore:
                                    {{ $article->user->name }}</a>
                                <a href="{{ route('article.show', compact('article')) }}"
                                    class="btn custom-1 d-flex align-items-center"><span
                                        class="card-link">Leggi</span></a>
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
