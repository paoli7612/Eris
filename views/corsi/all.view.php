<html>
    <?php partial('head') ?>
    <body>
        <?php partial('bar') ?>

        <?php foreach ($corsi as $corso): ?>
            <?= $corso->titolo ?>
        <?php endforeach; ?>
    </body>
</html>