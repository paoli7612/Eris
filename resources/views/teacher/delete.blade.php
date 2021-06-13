<form action="/teachers/{{ $teacher->id }}" method="post">
    @csrf
    @method('delete')

    <button type="submit" class="btn btn-danger">
        <i class="fa fa-trash"></i>
    </button>
</form>