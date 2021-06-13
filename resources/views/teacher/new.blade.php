<form action="/teachers" method="POST">
    @csrf
    @method('PUT')
    <div class="container border p-3 bg-dark rounded">
        <div class="form-group row mb-0">
            <input name="name" type="text" class="form-control col mx-3" placeholder="Nome" required autofocus>
            <input name="surname" type="text" class="form-control col mx-3" placeholder="Cognome" required>
            <button class="btn btn-success col-2 mx-3" type="submit">Crea</button>
        </div>
    </div>
</form>