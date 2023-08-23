<x-layout>
    
    <div class="container-fluid p-3 text-center">
        <div class="row justify-content-center">
            <h1 class="display-2">
                Bentornato, Admin
            </h1>
        </div>
    </div>
    
    @if(session('message'))
    <div class="alert alert-success text-center">
        {{session('message')}}
    </div>
    @endif

    <div class="container my-5">
        <div class="row justify-content-center">
            <div class="col-12">
                <h2>Richieste per ruolo di amministratore</h2>
                <x-requests-table :roleRequests="$adminRequests" role="amministratore"/>
            </div>
        </div>
    </div>
    <div class="container my-5">
        <div class="row justify-content-center">
            <div class="col-12">
                <h2>Richieste per ruolo di revisore</h2>
                <x-requests-table :roleRequests="$revisorRequests" role="revisore"/>
            </div>
        </div>
    </div>
    <div class="container my-5">
        <div class="row justify-content-center">
            <div class="col-12">
                <h2>Richieste per ruolo di redattore</h2>
                <x-requests-table :roleRequests="$writerRequests" role="redattore" />
            </div>
        </div>
        <hr>
        <div class="container my-5">
            <div class="col-12">
                <h2>I tags della piattaforma</h2>
                <x-metainfo-table :metaInfos="$tags" metaType="tags" />
            </div>
        </div>
    </div>
    <div class="container my-5">
        <div class="row justify-content-center">
            <div class="col-12">
                <h2>Le categorie della piattaforma</h2>
                <x-metainfo-table :metaInfos="$categories" metaType="categorie" />
                <form action="{{route('admin.storeCategory')}}" method="POST" class="d-flex">
                    @csrf
                    <input type="text" name="name" class="form-control me-2 color-3" placeholder="Inserisci una nuova categoria">
                    <button type="submit" class="btn custom-3">Inserisci</button>
                </form>
            </div>
        </div>
    </div>

</x-layout>