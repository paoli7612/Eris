<form action="{{ $course->route('id') }}" method="post">
    @csrf
    @method('delete')
    <input class="btn btn-danger" type="submit" value="Elimina corso">
</form>