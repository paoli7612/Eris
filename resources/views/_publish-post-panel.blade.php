
<div class="border border-primary rounded border-2 p-3 ">

    <form action="/posts" method="post">
        @csrf
        
        <textarea class="m-1 form-control" name="body" placeholder="what do you think? ..."></textarea>

        <hr>
        <footer class="row">
            <div class="col">
                <img src={{ auth()->user()->avatar }} alt="" class="rounded-circle">
            </div>
            <div class="col-1 ">
                <button class="btn btn-primary ml-auto" type="submit">Tweet</button>

            </div>
        </footer>
        
    </form>

    @error('body')
        <p class="text-danger"> {{ $message }}</p>
    @enderror

</div>