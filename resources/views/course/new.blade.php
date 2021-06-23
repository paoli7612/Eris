<form action="/courses" method="post">
    @csrf
    <div class="form-group row">
        <input class="form-control col mr-3" type="text" name="title" autofocus required>
        <input class="form-control col-2" type="submit" value="Nuovo corso">
    </div>
</form>