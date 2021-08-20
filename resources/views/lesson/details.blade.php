@extends('layouts.app')

@section('content')

    <ol class="breadcrumb">
        <li class="breadcrumb-item">
            <a href="/">Home</a>
        </li>
        <li class="breadcrumb-item">
            <a href="/lessons">Lessons</a>
        </li>
        <li class="breadcrumb-item">
            <a href="{{ route('lesson', $lesson) }}">{{ $lesson->title }}</a>
        </li>
        <li class="breadcrumb-item">
            Details
        </li>
    </ol>
    <div class="bg-light px-3 border">
        <table class="table">
            <thead class=" text-primary">
              <th>
                Name
              </th>
              <th>
                Country
              </th>
              <th>
                City
              </th>
              <th class="text-right">
                Salary
              </th>
            </thead>
            <tbody>
                @for ($i = 0; $i < 50; $i++)
                <tr>
                    <td>
                      Dakota Rice
                    </td>
                    <td>
                      Niger
                    </td>
                    <td>
                      Oud-Turnhout
                    </td>
                    <td class="text-right">
                      $36,738
                    </td>
                  </tr>      
                @endfor
              
            </tbody>
          </table>

    </div>
        
@endsection
