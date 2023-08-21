<x-layout>
    <x-header />
    

    {{-- Inizio inserimento di un articolo --}}
    <div class="container my-5">
        <div class="row justify-content-around">
            @forelse($articles as $article)
            <div class="col-12 col-md-3">
                <div class="card">
                    <img src="{{Storage::url($article->image)}}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">{{$article->title}}</h5>
                        <p class="card-text">{{$article->subtitle}}</p>
                        <p class="small text-muted fst-italic text-capitalize">{{$article->category->name}}</p>
                    </div>
                    
                    <div class="card-footer text-muted d-flex justify-content-between align-items-center">
                        Redatto il {{$article->created_at->format('d/m/Y')}} da {{$article->user->name}}
                        <a href="{{route('article.show', compact('article'))}}" class="btn btn-info text-white">Leggi</a>

                        {{-- Adesso però dobbiamo dare la possibilità agli utenti di raggiungere questa vista quindi aggiorniamo le card --}}
                        <a href="{{route('article.byCategory', ['category' => $article->category->id])}}" class="small text-muted fst-italic text-capitalize">{{$article->category->name}}</a>
                        <a href="{{ route('article.byAuthors', ['author' => $article->user->id]) }}" class="small text-muted fst-italic text-capitalize">{{ $article->user->name }}</a>
                        
                    </div>
                    
                </div>
                
            </div>
            @empty
            <h4 class="text-center pt-5">Non ci sono ancora articoli, <a href="#" class="btn custom-1">Inseriscine uno</a></h4>
            @endforelse
            
        </div>
        
    </div>

</x-layout>
