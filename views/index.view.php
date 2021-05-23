<html>
    <head>
        <title>Foo</title>
    </head>
    <body>
        <?php print_r($corsi); ?>

        <?php foreach ($corsi as $corso): ?>

            <h1><?= $corso->titolo ?></h1>
            <h1><?= $corso->idProfessore ?></h1>

        <?php endforeach ?>

    </body>
</html>