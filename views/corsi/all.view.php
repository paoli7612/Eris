<html>
    <?php $title = 'Corsi'; include 'views/partials/head.php' ?>

    <body>
        <?php foreach ($corsi as $corso): ?>
            <?= $corso->titolo ?>
        <?php endforeach; ?>
    </body>
</html>