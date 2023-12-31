<x-layout>

<div class="container-fluid p-5 text-center">
    <div class="row justify-content-center">
        <h1 class="display-1">
            Tutti gli articoli per: {{$query}}
        </h1>
    </div>
</div>

<div class="container my-5">
    <div class="row justify-content-center">
        @foreach($articles as $article)
        <div class="col-12 col-md-3 my-2">
            <div class="card">
                <img src="{{Storage::url($article->image)}}" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">{{$article->title}}</h5>
                    <p class="card-text">{{$article->subtitile}}</p>
                    <a href="{{route('article.byCategory', ['category' => $article->category->id])}}" class="small no-line text-muted fst-italic text-capitalize">{{$article->category->name}}</a>
                </div>
                <span class="text-muted small fst-italic">Tempo di lettura: {{$article->readDuration()}} min</span>
                <div class="card-footer text-muted d-flex justify-content-between align-items-center">
                    <a class="no-line" href="{{route('article.search',['user'=> $article->user->id])}}"> {{$article->created_at->format('d/m/Y')}}</a>
                    <a href="" class="no-line">Di: {{$article->user->name}} </a>
                    <a href="{{route('article.show', compact('article'))}}" class="btn custom-1">Leggi</a>
                </div>
            </div>
        </div>
        @if ($article->category)
        @else
        <p class="small text-muted fst-italic text-capitalize">
            Non categorizzato
        </p>
        @endif
        @endforeach
    </div>
    
</div>



</x-layout>