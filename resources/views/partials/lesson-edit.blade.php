<div class="container-fluid">
    <ol class="breadcrumb">
        <li class="breadcrumb-item">
            <a href="../home/">Home</a>
        </li>
        <li class="breadcrumb-item">
            <a href="../lezioni/">Lezioni</a>
        </li>
        <li class="breadcrumb-item">
            <a href="{{ $lesson->route }}">{{ $lesson->title }}</a>
        </li>
        <li class="breadcrumb-item">
            Modifica
        </li>
    </ol>
    <div class="container">
        <h1>Modifica lezione</h1>
        <div class="card">
            <div class="card-header">
                <span class="float-right">
                    Modifica lezione
                </span>
                <i class="fas fa-edit"></i>
            </div>
            <div class="card-body">
                <form action="{{ $lesson->route }}" method="post">
                    @csrf
                    @method('put')
                    <div class="form-group">
                        <div class="row">
                            <div class="col">
                                <label for="title">Titolo</label>
                                <input value="{{ $lesson->title }}" type="text" disabled="disabled" id="title" class="form-control" required placeholder="Titolo">
                                @error('title')
                                    <span class="text-danger">{{ $message }}</span>                                    
                                @enderror
                            </div>
                            <div class="col">
                                <label for="title">Utente</label>
                                <input type="text" class="form-control" placeholder="Titolo" disabled value="{{ auth()->user()->name }}">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="description">Descrizione</label>
                        <textarea name="description" id="description" class="form-control">{{ $lesson->description }}</textarea>
                    </div>
                    <div class="form-group">
                        <div class="float-right">
                            <a href="{{ route('home') }}" class="btn btn-secondary"> Annulla </a>
                            <input type="submit" class="btn btn-primary" value="Modifica lezione">
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

</div>
