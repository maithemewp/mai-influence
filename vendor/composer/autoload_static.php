<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit069c495dc398afdfac9607626f997184
{
    public static $files = array (
        '20716b7470cda7cd561f4000f723e024' => __DIR__ . '/..' . '/maithemewp/mai-installer/mai-installer.php',
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->classMap = ComposerStaticInit069c495dc398afdfac9607626f997184::$classMap;

        }, null, ClassLoader::class);
    }
}
