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
                    <button class="btn bg-white mb-3" onclick="window.location='../professori/1'">
                        <i class="fas fa-user-tie"></i>
                        Tommaso Paoli</button>
                    <button class="btn bg-white mb-3" disabled>
                        <i class="fas fa-info-circle"></i>
                        Dettagli</button>
                    <?php if (1): ?>
                    <button class="btn bg-white mb-3" disabled>
                        <i class="fas fa-edit"></i>
                        Modifica</button>
                    <button class="btn bg-white mb-3" disabled>
                        <i class="fas fa-book"></i>
                        Seleziona materie</button>
                    <button class="btn bg-white mb-3" disabled>
                        <i class="fas fa-upload"></i>
                        Carica materiali</button>
                    <a class="btn bg-white mb-3" href="elimina">
                        <i class="fas fa-trash"></i>
                        Elimina</a>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
</div>
