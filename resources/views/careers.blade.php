<x-layout>
    <div class="container-fluid p-5 text-center">
        <div class="row justify-content-center">
            <h1 class="display-2">
                Lavora con noi
            </h1>
        </div>
    </div>
    
    <div class="container my-3">
        <div class="row justify-content-center align-items-center border rounded-4 p-2 shadow bg-3">
            <div class="col-12 col-md-6">
                <h2>Lavora come amministratore</h2>
                <p>Il ruolo che ricoprirai: in qualità di Amministratore, avrai accesso ad una sezione studiata appositamente per te: potrai approvare o rifiutare le candidature per le quali i nostri utenti si stanno candidando, gestire/aggiungere/modificare le categorie e i tag, e molto altro ancora!</p>
                <h2>Lavora come revisore</h2>
                <p>Il ruolo che ricoprirai: in qualità di Revisore, avrai una pagina a te dedicata, in cui passare in rassegna tutti gli articoli che arrivano in redazione: potrai accettarli, rifiutarli o lasciarli in pending!</p>
                <h2>Lavora come redattore</h2>
                <p>Il ruolo che ricoprirai: in qualità di Redattore, potrai inserire gli articoli in un form dedicato, e collaborare con altri membri del team per rendere il nostro giornale completo, interattivo e privo di fake news! </p>
            </div>
            <div class="col-12 col-md-6">
                @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
                @endif
                
                <form action="{{route('careers.submit')}}" class="p-5" method="POST">
                    @csrf
                    
                    <div class="mb-3">
                        <label for="role" class="form-label">Per quale ruolo ti stai candidando?</label>
                        <select name="role" id="role" class="form-control">
                            <option disabled value="">Scegli qui</option>
                            <option value="admin">Amministratore</option>
                            <option value="revisor">Revisore</option>
                            <option value="writer">Redattore</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email:</label>
                        <input type="email" name="email" class="form-control" id="email" value="{{old('email') ?? Auth::user()->email}}">
                    </div>
                    <div class="mb-3">
                        <label for="message" class="form-label">Parlaci di te:</label>
                        <textarea name="message" id="message" cols="30" rows="7" class="form-control">{{old('message')}}</textarea>
                    </div>
                    <div class="mt-2 text-end">
                        <button class="btn custom-1">Invia la tua candidatura</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    
</x-layout>








