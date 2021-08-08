@extends('layouts.app')

@section('content')
    <div class="card">
        <div class="card-header">
            {{ __('New lesson') }}
        </div>
        <div class="card-body">
            <form action="{{ route('new-lesson') }}" method="post">
                @csrf
                <div class="form-group">
                    <select name="course_id" class="form-control">
                        @foreach (App\Models\Course::all() as $course)
                            <option value="{{ $course->id }}">{{ $course->title }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <div class="row">
                        <div class="col">
                            <input type="text" name="title" class="form-control" placeholder="title">
                        </div>
                        <div class="col text-right">
                            <button type="submit" class="btn btn-primary w-100">
                                Create lesson
                                <i class="fas fa-plus"></i>
                            </button>
                        </div>
                    </div>
                    
                </div>
            </form>            
        </div>
    </div>
@endsection
