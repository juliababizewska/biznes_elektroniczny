<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit19d8bbffe279fbc45a12a307bab5aeff
{
    public static $classMap = array (
        'Ps_Emailsubscription' => __DIR__ . '/../..' . '/ps_emailsubscription.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->classMap = ComposerStaticInit19d8bbffe279fbc45a12a307bab5aeff::$classMap;

        }, null, ClassLoader::class);
    }
}