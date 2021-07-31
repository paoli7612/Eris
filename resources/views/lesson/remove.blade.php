@extends('layouts.app')

@section('content')
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Remove lesson</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p>Do you want to delete this lesson: <b>{{ $lesson->title }}</b>?</p>
            </div>
            <div class="modal-footer">
                <a href="." class="btn btn-secondary">
                    Back
                    <i class="fas fa-undo-alt"></i>
                </a>
                <form action="{{ route('lesson', $lesson) }}" method="post"> @csrf @method('delete')
                    <button type="submit" class="btn btn-danger">
                        Delete lesson
                        <i class="fas fa-trash"></i>
                    </button>
                </form>
            </div>
        </div>
    </div>
@endsection
