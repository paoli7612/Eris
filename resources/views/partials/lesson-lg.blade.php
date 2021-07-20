<div class="container-fluid">
    <ol class="breadcrumb">
        <li class="breadcrumb-item">
            <a href="../home/">Home</a>
        </li>
        <li class="breadcrumb-item">
            <a href="../lezioni/">Lezioni</a>
        </li>
        <li class="breadcrumb-item">
            {{ $lesson->title }}
        </li>
    </ol>
    <div class="row">
        <div class="col">
            <div class="card bg-secondary">
                <h2 class="card-header text-white">
                    {{ $lesson->title }}
                </h2>
                <div class="card-body">
                    <button class="btn bg-white mb-3" onclick="salvaLezione(this, <?php echo $lesson->id; ?>)">
                        <?php if (1): ?>
                        <i class="fas fa-bookmark"></i>
                        <?php else: ?>
                        <i class="far fa-bookmark"></i>
                        <?php endif; ?>
                        Salva</button>
                    <a href="{{ App\Models\User::first()->route }}" class="btn bg-white mb-3">
                        <i class="fas fa-user-tie"></i>
                        Tommaso Paoli</a>
                    <button class="btn bg-white mb-3" disabled>
                        <i class="fas fa-info-circle"></i>
                        Dettagli</button>
                    <?php if (1): ?>
                    @if ($lesson->user_id == auth()->user()->id)
                        <a class="btn bg-white mb-3" href="{{ route('modifica-lezione', $lesson) }}">
                            <i class="fas fa-edit"></i>
                            Modifica</a>        
                    @endif
                    <button class="btn bg-white mb-3" disabled>
                        <i class="fas fa-book"></i>
                        Seleziona materie</button>
                    <button class="btn bg-white mb-3" disabled>
                        <i class="fas fa-upload"></i>
                        Carica materiali</button>
                    <a class="btn bg-white mb-3" href="/lezioni/{{ $lesson->id }}/elimina">
                        <i class="fas fa-trash"></i>
                        Elimina</a>
                    <?php endif; ?>
                </div>
            </div>
        </div>



    </div>

    <div class="row mt-3">
        @for ($i = 0; $i < 6; $i++)
            <div class="col-xl-6 col-md-12 col-sm-12 mb-3">
                <button class="btn btn-block bg-primary w-100 p-3" style="height: 100%"
                    onclick="window.location='../materiali/?id={{ $lesson->id }}&tipo=1'">
                    <div class="row">
                        <div class="col-8">
                            <h4 class="float-left">
                            </h4>
                        </div>
                        <h1 class="col-4">
                            <i class="fas fa-book float-right"></i>
                        </h1>
                    </div>
                </button>
            </div>
        @endfor
     
        <div class="container">
            <div class="card bg-light card-body">
                <div class="row">
                    <div class="col">
                        <h3>Nessun materiale caricato</h3>
                        <p>Il docente non ha ancora caricato materiali in questa lezione</p>
                    </div>
                    <div class="col">
                        <h1 class="float-right">
                            <i class="fas fa-exclamation-triangle"></i>
                        </h1>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
