<x-layout>
    <div class="container-fluid p-5 text-center">
        <div class="row justify-content-center">
            <h1 class="display-2">
                Lavora con noi
            </h1>
        </div>
    </div>
    
    <div class="container my-3">
        <div class="row justify-content-center align-items-center border rounded p-2 shadow bg-3">
            <div class="col-12 col-md-6">
                <h2>Lavora come amministratore</h2>
                <p>Cosa farai: Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestiae reprehenderit provident iste, laboriosam deleniti minima, vitae aut molestias esse eum sequi totam labore perspiciatis rem dicta quisquam hic necessitatibus. Facilis?</p>
                <h2>Lavora come revisore</h2>
                <p>Cosa farai: Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quas, ducimus, maiores, quos libero tempore natus tempora repellendus cum alias possimus facilis error temporibus eveniet amet in. Vel corporis officiis repellendus.</p>
                <h2>Lavora come redattore</h2>
                <p>Cosa farai: Lorem ipsum dolor sit amet consectetur adipisicing elit. Delectus provident omnis, autem nobis corrupti commodi. Magnam vitae eius odio non commodi, dolorum provident, rerum voluptatum sunt doloremque, aut quia ipsa.</p>
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
                
                <form action="" class="p-5" method="">
                    @csrf
                    
                    <div class="mb-3">
                        <label for="role" class="form-label">Per quale ruolo ti stai candidando?</label>
                        <select name="role" id="role" class="form-control">
                            <option value="">Scegli qui</option>
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
                    <div class="mt-2">
                        <button class="btn custom-1">Invia la tua candidatura</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-layout>








