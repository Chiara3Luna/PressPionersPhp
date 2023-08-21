<x-layout>
    <div class="container-fluid p-5 text-center">
        <div class="row justify-content-center">
            <h1 class="display-1">
                Accedi
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

                <form action="{{ route('login') }}" class="card p-5 shadow bg-3" method="post">
                    @csrf
                    <div class="mb-3">
                        <label for="email" class="form-label">Email:</label>
                        <input type="email" name="email" class="form-control" id="email"
                            value="{{ old('email') }}">
                    </div>

                    <div class="mb-3">
                        <label for="password" class="form-label">Password:</label>
                        <input type="password" name="password" class="form-control" id="password">
                    </div>

                    <div class="mt-2">
                        <button class="btn custom-1">Accedi</button>
                        <p class="pt-2 text-center">Non sei registrato? <a href="{{ route('register') }}" class="btn custom-1">Clicca qui</a></p>
                    </div>
                </form>

            </div>
        </div>
    </div>
</x-layout>
