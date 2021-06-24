<form action="{{ $course->route('id') }}" method="post">
    @csrf
    @method('put')
    <input type="hidden" name="id" value="{{ $course->id }}" />

    <select name="teacher_id" class="form-control mx-3">
        @if (isset($course->teacher))
            <option value="{{ $course->teacher->id }}" hidden>{{$course->teacher->name }}</option>        
        @else
            <option value="" hidden> - - - </option>        
        @endif
        @foreach (\App\Models\Teacher::all() as $teacher)
            <option value="{{ $teacher->id }}">{{$teacher->name }}</option>
        @endforeach
    </select>

    <select name="year_id" class="form-control mx-3">
        @if (isset($course->year))
            <option value="{{ $course->year->id }}" hidden>{{$course->year->id }}</option>        
        @else
            <option value="" hidden> - - - </option>        
        @endif
        @foreach (\App\Models\Year::all() as $year)
            <option value="{{ $year->id }}"> {{ $year->id }}</option>
        @endforeach
    <select>

    <div class="row m-3">
        <input class="btn btn-primary col" type="submit" value="Salva">
    </div>
</form>
