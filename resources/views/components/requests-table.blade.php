<table class="table table-striped table-hover border">
    <thead class="table-dark">
        <tr>
            <th scope="col" class="w-25">#</th>
            <th scope="col" class="w-25" >Nome</th>
            <th scope="col" class="w-25" >Email</th>
            <th scope="col" class="w-25 text-center" >Azioni</th>
        </tr>
    </thead>
    <tbody>
        @foreach($roleRequests as $user)
        <tr>
            <th scope="row" class=" w-25">{{$user->id}}</th>
            <td class="w-25">{{$user->name}}</td>
            <td class="w-25">{{$user->email}}</td>
            
            <td class="w-25 text-center">
                @switch($role)
                @case('amministratore')
                <a href="{{route('admin.setAdmin', compact('user'))}}" class="btn custom-3">Accetta </a>
                <a href="{{route('admin.setAdmin', compact('user'))}}" class="btn custom-4">Rifiuta </a>
                @break
                @case('revisore')
                <a href="{{route('admin.setRevisor', compact('user'))}}" class="btn custom-3">Accetta</a>
                <a href="{{route('admin.setRevisor', compact('user'))}}" class="btn custom-4">Rifiuta </a>
                @break
                @case('redattore')
                <a href="{{route('admin.setWriter', compact('user'))}}" class="btn custom-3">Accetta</a>
                <a href="{{route('admin.setWriter', compact('user'))}}" class="btn custom-4">Rifiuta</a>
                @break
                @endswitch
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
