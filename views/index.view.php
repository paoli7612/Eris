<html>
    <head>
        <title>Foo</title>
    </head>
    <body>
        <?= "Hello world!" ?>

        <?php foreach ($corsi as $corso): ?>

            <h1><?= $corso->titolo ?></h1>

        <?php endforeach ?>

    </body>
</html>