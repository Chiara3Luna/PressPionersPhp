<x-layout>
    <div class="container-fluid text-center">
        <div class="row justify-content-center">
            <h1 class="display-4 my-5">
                Titolo dell'articolo: "{{$article->title}}"
            </h1>
        </div>
    </div>
    
    <div class="container my-5 bg-3 shadow rounded-4">
        <div class="row justify-content-around">
            <div class="col-12 col-md-8">
                <img src="{{Storage::url($article->image)}}" alt="Immagine correlata" class="img-fluid my-3">
                <div class="text-center">
                    <h2>{{$article->subtitle}}</h2>
                    <div class="my-3 text-muted fst-italic">
                        <p class="text-capitalize">Redattore: {{$article->user->name}}</p> 
                        <p>Data: {{$article->created_at->format('d/m/Y')}}</p>
                    </div>
                </div>
                <hr>
                <p>{{$article->body}}</p>
                <div class="text-center">
                    <a href="{{route('article.index')}}" class="btn custom-1 my-4">Torna indietro</a>
                </div>
            </div>
        </div>
    </div>
    
    {{-- Bottoni accessibili solo al revisore --}}
    
    @if(Auth::user() && Auth::user()->is_revisor)
    <a href="{{route('revisor.acceptArticle', compact('article'))}}" class="btn btn-success text-white my-5">Accetta articolo</a>
    <a href="{{route('revisor.rejectArticle', compact('article'))}}" class="btn btn-danger text-white my-5">Rifiuta articolo</a>
    @endif
    
    
    
</x-layout>



