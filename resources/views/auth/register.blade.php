<x-layout>

    <div class="container-fluid p-5 text-center">
        <div class="row justify-content-center">
            <h1 class="display-1">
                Registrati
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

                <form action="{{route('register')}}" class="card p-5 shadow bg-3" method="POST">
                    @csrf

                    <div class="mb-3">
                        <label for="username" class="form-label">Username:</label>
                        <input type="text" name="name" class="form-control" id="username" value="{{old('name')}}">
                    </div>

                    <div class="mb-3">
                        <label for="email" class="form-label">Email:</label>
                        <input type="email" name="email" class="form-control" id="email" value="{{old('email')}}">
                    </div>

                    <div class="mb-3">
                        <label for="password" class="form-label">Password:</label>
                        <input type="password" name="password" class="form-control" id="password">
                    </div>

                    <div class="mb-3">
                        <label for="password_confirmation" class="form-label">Conferma password:</label>
                        <input type="password" name="password_confirmation" class="form-control" id="password_confirmation">
                    </div>

                    <div class="mt-2 text-end">
                        <button class="btn custom-1"> Registrati
                        </button>
                        <hr>
                        <p class="text-center">Già registrato? <a href="{{route('login')}}" class="btn custom-1">Accedi</a></p>
                    </div>
                </form>

            </div>
        </div>
    </div>
</x-layout>
