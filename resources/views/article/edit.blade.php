<x-layout>
    <div class="container-fluid custom-2 text-center pt-3">
        <div class="row justify-content-center">
            <h1 class="display-1">
                Modifica un articolo
            </h1>
        </div>
    </div>

    <div class="container my-5">
        <div class="row justify-content-center">
            <div class="col-12 col-md-8">
                @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
                @endif

                <form class="card p-5 shadow" action="{{route('article.update', compact('article'))}}" method="POST" enctype="multipart/form-data">
                    @method('put')
                    @csrf
                    <div class="mb-3">
                        <label for="title" class="form-label">Titolo:</label>
                        <input name="title" type="text" class="form-control" id="title" value="{{$article->title}}">
                    </div>
                    <div class="mb-3">
                    <label for="subtitle" class="form-label">Sottotitolo:</label>
                        <input name="subtitle" type="text" class="form-control" id="subtitle" value="{{$article->subtitle}}">
                    </div>
                    <div class="mb-3">
                    <label for="image" class="form-label">Immagine:</label>
                        <input name="image" type="file" class="form-control" id="image">
                    </div>
                    </div>
                    <div class="mb-3">
                    <label for="category" class="form-label">Categoria:</label>
                        <select name="category" class="form-control text-capitalize" id="category">
                            @foreach($categories as $category)
                            <option value="{{$category->id}}" @if($article->category && $category->id == $article->category->id) selected @endif>{{$category->name}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="body" class="form-label">Corpo del testo:</label>
                        <textarea name="body" id="body" cols="30" rows="7" class="form-control">{{$article->body}}</textarea>
                    </div>
                    <div class="mb 3">
                        <label for="tags" class="form-label">Tags:</label>
                        <input name="tags" id="tags" class="form-control" value="{{$article->tags->implode('name', ',')}}">
                        <span class="small fst-italic">Dividi ogni tag con una virgola</span>
                    </div>

                    <div class="mt-2 text-end d-flex justify-content-between pt-1">
                        <a href="{{route('homepage')}}" class="btn custom-1 fw-bold">Torna alla home</a>
                        <input type="submit" class="btn custom-3" value="Modifica">
                    </div>
                </form>

            </div>
        </div>
    </div>
</x-layout>