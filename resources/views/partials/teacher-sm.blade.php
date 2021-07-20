<div class="col-4">
    <div class="card text-white bg-secondary mb-3">
        <div class="card-header">
            {{ $teacher->complete_name }}
            <span class="float-right">
                <i class="fas fa-user-graduate fa-lg"></i>
            </span>
        </div>
        <div class="card-body">
            4
            Lezioni create
        </div>
        <div class="card-footer">
            <div class="row">
                <div class="col">
                    <a class="btn bg-white btn-block" href="{{ route('lezioni-cerca', $teacher) }}"
                     <?php if (4==0): ?>disabled="disabled" <?php endif; ?>>
                        Lezioni</a>
                </div>
                <div class="col">
                    <button class="btn bg-white btn-block" onclick="salvaDocente(this,2)" disabled>
                        <?php if (1): ?>
                        <i class="fas fa-bookmark"></i>
                        <?php else: ?>
                        <i class="far fa-bookmark"></i>
                        <?php endif; ?>
                        Salva</button>
                </div>
                <div class="col">
                    <button class="btn bg-white btn-block" disabled>
                        <i class="fas fa-comment-dots"></i>

                        Scrivi messaggio
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>
