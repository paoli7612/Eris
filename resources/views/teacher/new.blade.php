    <form action="/teachers" method="post">
        @csrf
        <div class="form-group row">
            <input class="form-control col mr-3" type="text" name="name" autofocus required>
            <input class="form-control col-2" type="submit" value="Nuovo insegnante">
        </div>
    </form>
