<x-layout>
    
    <div class="container-fluid text-center">
        <div class="row justify-content-center">
            <h3 class="display-3 my-4">
                Sezione articoli 
            </h3>
        </div>
    </div>
    
    {{-- <div class="container my-5 bg-3 shadow rounded-4 text-center">
        <div class="row justify-content-around">
            <div class="col-12 col-md-8">
                <h1 class="display-5 my-4">
                    {{$article->title}}
                </h1>
                <img src="{{Storage::url($article->image)}}" alt="Immagine correlata" class="img-fluid my-3">
                <div class="text-center">
                    <h2>{{$article->subtitle}}</h2>
                    <div class="my-4 text-muted fst-italic">
                        <p class="text-capitalize">Redattore: {{$article->user->name}}</p> 
                        <p>Data: {{$article->created_at->format('d/m/Y')}}</p>
                    </div>
                </div>
                <hr>
                <p>{{$article->body}}</p>
                <div class="text-center"> --}}

                    {{-- Bottoni accessibili solo al revisore --}}

                    {{-- @if(Auth::user() && Auth::user()->is_revisor)
                    <a href="{{route('revisor.acceptArticle', compact('article'))}}" class="btn custom-3 my-5">Accetta articolo</a>
                    <a href="{{route('revisor.rejectArticle', compact('article'))}}" class="btn custom-4 my-5">Rifiuta articolo</a>
                    <a href="{{route('article.index')}}" class="btn custom-1 my-4">Torna indietro</a>
                    @endif
                </div>
            </div>
        </div>
    </div> --}}









    <div class="container my-3 bg-3 shadow rounded-4 text-center">
        <div class="row justify-content-around">
            <div class="col-7">
                <h1 class="display-4 mt-5">
                    {{$article->title}}
                </h1>
                
                <div class="text-center">
                    <h2>{{$article->subtitle}}</h2>
                    <hr>
                    <p>{{$article->body}}</p>
                    <hr>
                    <div class="my-3 text-muted fst-italic d-flex justify-content-around">
                        <span>Data: {{$article->created_at->format('d/m/Y')}}</span>
                        <span class="text-capitalize">Redattore: {{$article->user->name}}</span>
                    </div>
                </div>
                <div class="text-center">
                    {{-- Bottoni accessibili solo al revisore --}}
                    @if(Auth::user() && Auth::user()->is_revisor)
                    <div class="d-flex justify-content-between">
                        <div class="d-flex align-items-center">
                            <a href="{{route('article.index')}}" class="btn custom-1">Torna indietro</a>
                        </div>
                        <div>
                            <a href="{{route('revisor.acceptArticle', compact('article'))}}" class="btn custom-3 my-5">Accetta articolo</a>
                            <a href="{{route('revisor.rejectArticle', compact('article'))}}" class="btn custom-4 my-5">Rifiuta articolo</a>
                        </div>
                    </div>
                    @endif
                </div>
            </div>

            <div class="col">
                <div>
                    <img src="{{Storage::url($article->image)}}" alt="" class="img-fluid my-3">
                    <img src="https://picsum.photos/480/580" alt="Immagine" class="rounded-4 mt-5">
                </div>
            </div>
        </div>
    </div>
    








</x-layout>



