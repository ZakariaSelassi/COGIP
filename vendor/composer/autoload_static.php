<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitbd7039709e14f85a2a94080fce5a3c01
{
    public static $prefixLengthsPsr4 = array (
        'R' => 
        array (
            'Router\\' => 7,
        ),
        'A' => 
        array (
            'App\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Router\\' => 
        array (
            0 => __DIR__ . '/../..' . '/routes',
        ),
        'App\\' => 
        array (
            0 => __DIR__ . '/../..' . '/app',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitbd7039709e14f85a2a94080fce5a3c01::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitbd7039709e14f85a2a94080fce5a3c01::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitbd7039709e14f85a2a94080fce5a3c01::$classMap;

        }, null, ClassLoader::class);
    }
}
