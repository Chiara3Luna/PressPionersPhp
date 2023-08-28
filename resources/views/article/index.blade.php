<x-layout>

    <div class="container-fluid p-5 text-center">
        <div class="row justify-content-center">
            <h1 class="display-3 my-1">
                Tutti gli articoli
            </h1>
        </div>
    </div>

    <div class="container my-3">
        <hr>
        <div class="row justify-content-around">
            @foreach ($articles as $article)
                {{-- <div class="col-12 col-md-3 zoom">
                    <div class="card">
                        <img src="{{ Storage::url($article->image) }}" class="img-fluid" alt="Immagine dell'articolo">
                        <div class="card-body">
                            <h5 class="card-title">{{ $article->title }}</h5>
                            <p class="card-text">{{ $article->subtitle }}</p>
                            <a href="{{ route('article.byCategory', ['category' => $article->category->id]) }}"
                                class="small text-muted fst-italic text-capitalize no-line">
                                <p class="text-muted fst-italic text-capitalize"> Categoria:
                                    {{ $article->category->name }}</p>
                            </a>
                            <span class="text-muted small fst-italic ">Tempo di lettura: {{ $article->readDuration() }}
                                min</span>
                        </div>

                        <div class="card-footer text-muted d-flex justify-content-between align-items-center">
                            {{ $article->created_at->format('d/m/Y') }} <a
                                href="{{ route('article.byAuthors', ['author' => $article->user->id]) }}"
                                class="text-muted fst-italic text-capitalize no-line"> di:
                                {{ $article->user->name }}</a>
                            <a href="{{ route('article.show', compact('article')) }}" class="btn custom-1 d-flex">Leggi</a>
                        </div> --}}
                <div class="col-12 col-md-6 col-lg-4 zoom">
                    <div class="card"> 
                        <div class="card-body">
                            <img src="{{ Storage::url($article->image) }}" alt="Immagine dell'articolo" class="img-fluid">
                            <hr>
                            <h3 class="card-title">{{ $article->title }}</h3>
                            <hr>
                            <h5 class="card-title">{{ $article->created_at->format('d/m/Y') }}</h5>
                            <p class="card-text">{{ $article->subtitle }}</p>
                            <span class="text-muted small fst-italic">- tempo di lettura {{ $article->readDuration() }}
                                min</span>
                                
                            <div class="d-flex justify-content-between">
                                <a href="{{ route('article.byCategory', ['category' => $article->category->id]) }}"
                                    class="d-flex align-items-center mt-2 no-line">(Categoria:
                                    {{ $article->category->name }})</a>
                                <p>Redattore: <a href="{{ route('article.byAuthors', ['author' => $article->user->id]) }}"
                                        class="small text-muted fst-italic text-capitalize no-line">
                                        {{ $article->user->name }}</a></p>
                                <a href="{{ route('article.show', compact('article')) }}"
                                    class="btn custom-1 d-flex align-items-center"><span class="card-link">Leggi</span></a>
                            </div>
                </div>
                

                    </div>
            @endforeach

        </div>

    </div>





</x-layout>
