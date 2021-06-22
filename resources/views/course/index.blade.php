<ul>
    @foreach ($courses as $course)
        <li>
            {{ $course }}
        </li>
    @endforeach
</ul>

<form action="/courses" method="post">
    @csrf
    @method('post')
    <input type="text" name="title">
    <input type="submit">
</form>
