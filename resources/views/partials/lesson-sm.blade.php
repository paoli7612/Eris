<div class="col-4">
    <div class="card text-white bg-secondary mb-3">
        <div class="card-body">
            {{ $lesson->title }}
        </div>
        <div class="card-footer">
            <div class="float-right">
                <i class="fas fa-swatchbook"></i>
            </div>
        </div>
        <div class="card-footer">
            <div class="float-right">
                <i class="fas fa-user-tie"></i>
            </div>
            Tommaso
            Paoli
        </div>
        <div class="card-footer">
            <div class="float-right">
                <i class="fas fa-layer-group"></i>
            </div>
            5
        </div>
        <div class="card-footer">
            <div class="row">
                <div class="col">
                    <a class="btn bg-white btn-block" href="/lezioni/{{ $lesson->id }}">Visualizza</a>
                </div>
                <div class="col">
                    <button class="btn bg-white btn-block" onclick="salvaLezione(this,23)">
                        <?php if (1): ?>
                               <i class="fas fa-bookmark"></i> 
                        <?php else: ?>
                            <i class="far fa-bookmark"></i>
                        <?php endif; ?>
                        Salva </button>
                </div>
            </div>
        </div>
    </div>
</div>