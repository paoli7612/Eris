@extends('layouts.app')

@section('content')

    @auth
        @include('course.new')
    @endauth

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

