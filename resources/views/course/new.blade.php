<div class="card">
    <div class="card-header">
        Nuovo insegnante
        <span class="float-right">
            <i class="fa fa-user-plus"></i>
        </span>
    </div>
    <div class="card-body">
        <form action="/courses" method="post">
            @csrf
            <div class="form-group row">
                <input class="form-control col m-1" type="text" name="title" autofocus required>
                <select name="teacher_id" class="form-control m-1">
                    @foreach (\App\Models\Teacher::all() as $teacher)
                        <option value="{{ $teacher->id }}">{{ $teacher->name }}</option>
                    @endforeach
                </select>
                <select name="year_id" class="form-control m-1">
                    @foreach (\App\Models\Year::all() as $year)
                        <option value="{{ $year->id }}">{{ $year->title }}</option>
                    @endforeach
                </select>
                <input class="form-control m-1" type="submit" value="Nuovo corso">
            </div>
        </form>
    </div>
</div>
