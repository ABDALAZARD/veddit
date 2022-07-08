<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit6c21981b580d07e12e2ce3932cd40fe3
{
    public static $prefixLengthsPsr4 = array (
        'P' => 
        array (
            'Psr\\Log\\' => 8,
        ),
        'M' => 
        array (
            'Monolog\\' => 8,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Psr\\Log\\' => 
        array (
            0 => __DIR__ . '/..' . '/psr/log/Psr/Log',
        ),
        'Monolog\\' => 
        array (
            0 => __DIR__ . '/..' . '/monolog/monolog/src/Monolog',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit6c21981b580d07e12e2ce3932cd40fe3::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit6c21981b580d07e12e2ce3932cd40fe3::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit6c21981b580d07e12e2ce3932cd40fe3::$classMap;

        }, null, ClassLoader::class);
    }
}