
<div class="border border-primary rounded border-2 p-3 ">

    <form action="/posts" method="post">
        @csrf
        
        <textarea class="m-1 form-control" name="body" placeholder="what do you think? ..."></textarea>

        <hr>
        <footer>
            <img src="https://i.pravatar.cc/40?u={{ auth()->user()->email }}" alt="" class="rounded-circle">
            <button class="btn btn-primary ml-auto float-right" type="submit">Tweet</button>
        </footer>
        
    </form>

</div>