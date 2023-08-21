<x-layout>
    <x-header />


    {{-- Inizio inserimento di un articolo --}}
    <div class="container my-5">
        <div class="row justify-content-around">
            @forelse($articles as $article)
            
            <div class="col-12 col-md-3 zoom">

                <div class="card">
                    <div class="card-body">
                        <img src="https://picsum.photos/250/170" alt="Immagine di repertorio">
                        <hr>
                        <h3 class="card-title">{{$article->title}}</h3>
                        <hr>
                        <h5 class="card-title">{{ $article->created_at->format('d/m/Y')}}</h5>
                        <p class="card-text">{{ $article->subtitle }}</p>
                        <div class="d-flex justify-content-between">
                            <a href="{{route('article.byCategory',['category'=>$article->category->id])}}" class="d-flex align-items-center mt-2">(Categoria: {{ $article->category->name }})</a>
                            <p>Redattore: <a href="{{ route('article.byAuthors', ['author' => $article->user->id]) }}"
                                class="small text-muted fst-italic text-capitalize"
                                style="text-decoration: none">{{ $article->user->name }}</a></p>
                            <a href="{{route('article.show', compact('article'))}}" class="btn custom-1"><span class="card-link">Leggi</span></a>
                        </div>
                    </div>
                </div>
            </div>
            @empty
                <h4 class="text-center pt-5">Non ci sono ancora articoli, <a href="#"
                        class="btn custom-1">Inseriscine uno</a></h4>
            @endforelse

        </div>

    </div>

</x-layout>
