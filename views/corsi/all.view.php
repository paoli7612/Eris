<html>
    <?php $title = 'Corsi'; include 'views/partials/head.php' ?>
    <body>
        <?php include 'views/partials/bar.php' ?>

        <?php foreach ($corsi as $corso): ?>
            <?= $corso->titolo ?>
        <?php endforeach; ?>
    </body>
</html>