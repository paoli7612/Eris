<form action="/courses/{{ $course->id }}" method="post">
    @csrf
    @method('delete')
    <button type="submit" class="btn btn-danger">
        <i class="fa fa-trash"></i>
    </button>
    <button class="btn btn-secondary" type="button" data-toggle="collapse" data-target="#edit" aria-expanded="false" aria-controls="edit">
        <i class="fa fa-edit"></i>
    </button>
</form>
<div class="collapse my-3" id="edit">
    @include('course.edit')
</div>
