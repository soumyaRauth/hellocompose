<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit18d1fe4da22f588ee09628a03349e11f
{
    public static $prefixLengthsPsr4 = array (
        'S' => 
        array (
            'Soumyarauth\\Hellocompose\\' => 25,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Soumyarauth\\Hellocompose\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit18d1fe4da22f588ee09628a03349e11f::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit18d1fe4da22f588ee09628a03349e11f::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit18d1fe4da22f588ee09628a03349e11f::$classMap;

        }, null, ClassLoader::class);
    }
}
