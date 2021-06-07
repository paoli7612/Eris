@extends ('layout.app')

@section('title', 'Corsi')

@section('content')
    <h1>Corsi</h1>


    
    <table class="table">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Titolo</th>
            <th scope="col">Anno</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($courses as $course)
                <tr href="{{ $course->route() }}">
                    <th scope="row">
                        {{ $course->id }}
                    </th>
                    <td>
                        {{ $course->title }}
                    </td>
                    <td>
                        {{ $course->year }}
                    </td>
                </tr>
            @endforeach
        </tbody>
      </table>

      <div>
        <form method="POST" action="/courses" >
            @csrf
            <div class="row">
                <div class="form-group col-6">
                    <label for="title">Titolo</label>
                    <input class="form-control" id="title" type="text" name="title" placeholder="Analisi Matematica">
                </div>
                <div class="form-group col">
                    <label for="year">Anno</label>
                    <select class="form-control" name="year" id="year">
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                    </select>
                </div>
                <div class="form-group col">
                    <label for="semester">Semestre</label>
                    <select class="form-control" name="semester" id="semester">
                        <option value="1">primo</option>
                        <option value="2">secondo</option>
                    </select>
                </div>
                <div class="form-group col">
                    <label for="semester">s</label>
                    <input class="form-control" type="submit" value="Crea">
                </div>
            </div>

            
        </form>
    </div>

@endsection