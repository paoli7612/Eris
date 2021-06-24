<form action="{{ $course->route('id') }}" method="post">
    @csrf

    <select name="teacher_id" onchange="this.form.submit()">
        @foreach (\App\Models\Teacher::all() as $teacher)
            <option value="{{ $teacher->id }}">{{ $teacher->name }}</option>
        @endforeach
    </select>

</form>