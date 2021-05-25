<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit7d82a6c4088d62980f2d9bc753c1459a
{
    public static $classMap = array (
        'ComposerAutoloaderInit7d82a6c4088d62980f2d9bc753c1459a' => __DIR__ . '/..' . '/composer/autoload_real.php',
        'Composer\\Autoload\\ClassLoader' => __DIR__ . '/..' . '/composer/ClassLoader.php',
        'Composer\\Autoload\\ComposerStaticInit7d82a6c4088d62980f2d9bc753c1459a' => __DIR__ . '/..' . '/composer/autoload_static.php',
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
        'Connection' => __DIR__ . '/../..' . '/core/database/Connection.php',
        'CorsiController' => __DIR__ . '/../..' . '/controllers/CorsiController.php',
        'Corso' => __DIR__ . '/../..' . '/core/Corso.php',
        'HomeController' => __DIR__ . '/../..' . '/controllers/HomeController.php',
        'ProfessoriController' => __DIR__ . '/../..' . '/controllers/ProfessoriController.php',
        'QueryBuilder' => __DIR__ . '/../..' . '/core/database/QueryBuilder.php',
        'Request' => __DIR__ . '/../..' . '/core/Request.php',
        'Router' => __DIR__ . '/../..' . '/core/Router.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->classMap = ComposerStaticInit7d82a6c4088d62980f2d9bc753c1459a::$classMap;

        }, null, ClassLoader::class);
    }
}
