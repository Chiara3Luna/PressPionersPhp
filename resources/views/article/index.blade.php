<x-layout>
    <div class="container-fluid p-5 text-center">
        <div class="row justify-content-center"> 
            <h1 class="display-4 my-1">
                Tutti gli articoli
            </h1>    
        </div>
    </div>
    
    <div class="container my-5">
        <div class="row justify-content-around">
            @foreach($articles as $article)
            <div class="col-12 col-md-3">
                <div class="card">
                    <img src="{{Storage::url($article->image)}}" class="card-img-top" alt="Immagine di repertorio">
                    <div class="card-body">
                        <h5 class="card-title">{{$article->title}}</h5>
                        <p class="card-text">{{$article->subtitle}}</p>
                        <a href="{{route('article.byCategory', ['category' => $article->category->id])}}" class="small text-muted fst-italic text-capitalize" style="text-decoration: none"><p class="text-muted fst-italic text-capitalize"> Categoria: {{$article->category->name}}</p> </a>
                    </div>

                    <div class="card-footer text-muted d-flex justify-content-between align-items-center">
                        {{$article->created_at->format('d/m/Y')}} da <a style="text-decoration: none" href="{{ route('article.byAuthors', ['author' => $article->user->id]) }}" class="text-muted fst-italic text-capitalize">{{$article->user->name}}</a>
                        <a href="{{route('article.show', compact('article'))}}" class="btn custom-1">Leggi</a>
                        
                        {{-- Adesso però dobbiamo dare la possibilità agli utenti di raggiungere questa vista quindi aggiorniamo le card (DA FAR VEDERE) --}}
                        {{-- <a href="{{route('article.byCategory', ['category' => $article->category->id])}}" class="small text-muted fst-italic text-capitalize">{{$article->category->name}}</a> --}}
                        {{-- <a href="{{route('article.byAuthors', ['author' => $article->user->id]) }}" class="small text-muted fst-italic text-capitalize">{{ $article->user->name }}</a> --}}
                    </div>
                    
                </div>
                
            </div>
            @endforeach
            
        </div>
        
        @if ($article->category)
        <a href="{{route('article.byCategory', ['category' => $article->category->id])}}" class="small text-muted fst-italic text-capitalize">{{$article->category->name}}</a>
        @else
        <p class="small text-muted fst-italic text-capitalize">
            Non categorizzato
        </p>
        @endif
    </div>

    
    
    
    
</x-layout>