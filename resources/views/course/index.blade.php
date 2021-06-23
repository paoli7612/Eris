@extends('layouts.app')

@section('content')

    <form action="/courses" method="post">
        @csrf
        <div class="form-group row">
            <input class="form-control col mr-3" type="text" name="title" autofocus required>
            <input class="form-control col-2" type="submit" value="Nuovo corso">
        </div>
    </form>

    <table class="table bg-white">
        <thead>
          <tr>
            <th scope="col">Titolo</th>
            <th scope="col">Insegnante</th>
            <th scope="col">Anno</th>
          </tr>
        </thead>
        <tbody>
            
            @foreach ($courses as $course)
			<tr>
				<td> <a href="{{ $course->route() }}"> {{ $course->title }} </a> </td>
				<td>
					@if (isset($course->teacher))
						<a href="{{ $course->teacher->route() }}"> {{ $course->teacher->name }} </a> 
					@endif
				</td>                    

                <td>
					@if (isset($course->year))
						<a href="{{ $course->year->route() }}"> {{ $course->year->id }} </a> 
					@endif
				</td>                    
			</tr>
            @endforeach

        </tbody>
      </table>

    

@endsection

