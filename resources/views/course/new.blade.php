<form action="/courses" method="POST">
    @csrf
    @method('PUT')

    <div class="container border p-3 bg-dark rounded">
        <div class="form-group row mb-0">
            <input name="title" type="text" class="form-control col mx-3" placeholder="Titolo" autofocus required>
            <select name="year" class="form-control col-2">
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
            </select>
            <button class="btn btn-success col mx-3" type="submit">Crea</button>
        </div>
    </div>
    
</form>