<x-layout>
    
    <div class="container-fluid p-5 text-center">
        <div class="row justify-content-center">
            <h1 class="display-1">
                Bentornato, Redattore
            </h1>
        </div>
    </div>

   //

    <div class="container my-5">
        <div class="row justify-content-center">
            <div class="col-12">
                <h2>Articoli in fase di revisione</h2>
                <x-writer-articles-table :articles="$acceptedArticles" />
            </div>
        </div>
    </div>
    <div class="container my-5">
        <div class="row justify-content-center">
            <div class="col-12">
                <h2>Articoli respinti</h2>
                <x-writer-articles-table :articles="$rejectedArticles" />
            </div>
        </div>
    </div>

</x-layout>