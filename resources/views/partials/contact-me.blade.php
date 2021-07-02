<div class="card">
    <div class="card-header">
        Mandami una mail
    </div>
    <div class="card-body">

        <form action="/info" method="POST" class="form-inline">
            @csrf
        
            <div class="form-group">
                <label for="email">Email</label>
                @auth
                    <input class="form-control" id="email" type="email" name="email" value="{{ auth()->user()->email }}" disabled >
                @else
                    <input class="form-control" id="email" type="email" name="email">
                @endauth
            </div>
            <button class="btn btn-primary" type="submit">
                Contattami
            </button>
        
        
        </form>
        
    </div>
</div>

@if (session('message'))
    <p>{{session('message')}}</p>
@endif  
