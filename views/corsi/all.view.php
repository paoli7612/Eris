<html>
    <?php partial('head') ?>
    <body>
        <?php partial('bar') ?>
        <div class="container">
            <div class="row">
                <?php foreach ($corsi as $corso): ?>
                    <div class="col p-3">
                        <div class="card">
                            <div class="card-header">
                                <?= $corso->titolo ?>
                            </div>
                            <div class="card-body">
                                <?= $corso->idProfessore ?>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </body>
</html>