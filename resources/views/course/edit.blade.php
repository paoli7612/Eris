
<div class="container">
    <form action="/courses/{{ $course->id }}" method="post">
        @csrf
        @method('PUT')

        <div class="container border p-3 bg-dark rounded">
            <div class="form-group row mb-3">
                <input name="description" type="text" value="{{ $course->description }}"class="form-control col mx-3" placeholder="Descrizione">
            </div>
            <div class="form-group row">
                <input name="title" type="text" value="{{ $course->title }}"class="form-control col mx-3" placeholder="Titolo" required>
                <button class="btn btn-success col-3 mx-3" type="submit">Salva</button>
            </div>
        </div>
    </form>
</div>
