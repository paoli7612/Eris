<form action="/teachers" method="POST">
    @csrf
    @method('PUT')
    <div class="container border p-3 bg-dark rounded">
        <div class="form-group row">
            <input name="name" type="text" class="form-control col mx-3" placeholder="Nome">
            <input name="surname" type="text" class="form-control col mx-3" placeholder="Cognome">
            <button class="btn btn-success col mx-3" type="submit">Crea</button>
        </div>
    </div>

</form>