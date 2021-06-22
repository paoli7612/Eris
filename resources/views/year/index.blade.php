@extends('layouts.app')

@section('content')

    <table class="table bg-white">
        <thead>
          <tr>
            <th scope="col">Anno</th>
          </tr>
        </thead>
        <tbody>
            
            @foreach ($years as $year)
              <tr>
                  <td>  {{ $year->id }} </td>
              </tr>
            @endforeach

        </tbody>
      </table>

    

@endsection

