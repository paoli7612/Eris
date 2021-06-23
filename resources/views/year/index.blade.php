@extends('layouts.app')

@section('content')

	@if (count($years) == 0)
		<form action="/years" method="post">
			@csrf
			<button type="submit" class="btn btn-primary">init</button>
		</form>
      @else
		<table class="table bg-white">
			<thead>
			<tr>
				<th scope="col">Anno</th>
			</tr>
			</thead>
			<tbody>
				
				@foreach ($years as $year)
				<tr>
					<td>
						<a href="{{ $year->route() }}">
							{{ $year->id }}
						</a>
					</td>
				</tr>
				@endforeach

			</tbody>
		</table>
      @endif


          

@endsection

