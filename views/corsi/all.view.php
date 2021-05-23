<html>
    <head>
        <title>Eris - Corsi</title>
    </head>
    <body>
        <?php foreach ($corsi as $corso): ?>
            <?= $corso->titolo ?>
        <?php endforeach; ?>
    </body>
</html>