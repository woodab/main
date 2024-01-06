<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit0229f86023279debae8e7bbc33335dc3
{
    public static $prefixLengthsPsr4 = array (
        'Y' => 
        array (
            'YourNamespace\\' => 14,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'YourNamespace\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit0229f86023279debae8e7bbc33335dc3::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit0229f86023279debae8e7bbc33335dc3::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit0229f86023279debae8e7bbc33335dc3::$classMap;

        }, null, ClassLoader::class);
    }
}
