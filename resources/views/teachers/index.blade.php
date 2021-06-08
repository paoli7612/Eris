@extends ('layout.app')

@section('title', 'Professori')

@section('content')
    <h1>Professori</h1>
    <table class="table table-hover">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Nome</th>
                <th scope="col">Cognome</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($teachers as $teacher)
                <tr onclick="window.location='{{ $teacher->route() }}'">
                    <th scope="row">
                        {{ $teacher->id }}
                    </th>
                    <td>
                        {{ $teacher->name }}
                    </td>
                    <td>
                        {{ $teacher->surname }}
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    <div class="container">
        <div class="card">
            <div class="card-header">Nuovo Professore</div>
            <div class="card-body">
                <form method="POST" action="/teachers" >
                    @csrf
                    <div class="row">
                        <div class="form-group col">
                            <label for="name">Nome</label>
                            <input class="form-control" id="title" type="text" name="name" placeholder="Mario" autofocus required>
                        </div>
                        <div class="form-group col">
                            <label for="surname">Cognome</label>
                            <input class="form-control" id="title" type="text" name="surname" placeholder="Rossi" autofocus required>
                        </div>
                        <div class="form-group col">
                            <label for="semester">s</label>
                            <input class="form-control" type="submit" value="Crea">
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

@endsection