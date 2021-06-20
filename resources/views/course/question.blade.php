<h1> Crea domanda </h1>
<form action="/questions" method="post">
    @csrf
    @method('put')
    <input type="hidden" name="course_id" value="{{ $course->id }}">

    <div class="container border p-3 bg-dark rounded ">
        <div class="form-group row mb-3">
            <input name="text" type="text" class="form-control col mx-3" placeholder="Testo">
        </div>

        <div class="form-group row mb-0">
            <button class="btn btn-success col-2 mx-3" type="submit">Crea domanda</button>
        </div>
    </div>
</form>
