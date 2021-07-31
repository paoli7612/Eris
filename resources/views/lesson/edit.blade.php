@extends('layouts.app')

@section('content')
    <div class="card">
        <div class="card-header">
            {{ __('Edit lesson') }}
        </div>
        <div class="card-body">
            <form action="{{ route('lesson', $lesson) }}" method="post">
                @csrf
                @method('put')
                <div class="form-group">
                    <select name="course_id" class="form-control">
                        @foreach (App\Models\Course::all() as $course)
                            <option value="{{ $course->id }}">{{ $course->title }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <textarea name="description" rows="25" class="form-control">{{ $lesson->description }}</textarea>
                </div>
                <div class="row">
                    <div class="col">
                        <a class="btn btn-danger w-100" href=".">
                            Back
                            <i class="fas fa-undo-alt"></i>
                        </a>
                    </div>
                    <div class="col">
                        <button type="submit" class="btn btn-success w-100">
                            Save lesson
                            <i class="fas fa-save"></i>
                        </button>
                    </div>
                </div>

            </form>
        </div>
    </div>
@endsection
