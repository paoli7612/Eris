<form action="{{ $teacher->route('id') }}" method="post">
    @csrf
    @method('delete')
    <input class="btn btn-danger" type="submit" value="Elimina insegnante">
</form>