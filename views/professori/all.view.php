<html>
    <?php partial('head') ?>
    <body>
        <?php partial('bar') ?>
        <div class="container">
            <div class="row">
                <?php foreach ($professori as $professore): ?>
                    <div class="col p-3">
                        <div class="card">
                            <div class="card-header">
                                <?= $professore->cognome ?> <?= $professore->nome ?>
                            </div>
                            <div class="card-body">
                                <?= $professore->nome ?>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </body>
</html>