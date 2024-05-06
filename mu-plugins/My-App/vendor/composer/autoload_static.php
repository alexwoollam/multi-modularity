<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit136d91d435d24682e3f9fad5ae34e700
{
    public static $prefixLengthsPsr4 = array (
        'P' => 
        array (
            'Psr\\Container\\' => 14,
        ),
        'I' => 
        array (
            'Inpsyde\\Modularity\\' => 19,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Psr\\Container\\' => 
        array (
            0 => __DIR__ . '/..' . '/psr/container/src',
        ),
        'Inpsyde\\Modularity\\' => 
        array (
            0 => __DIR__ . '/..' . '/inpsyde/modularity/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit136d91d435d24682e3f9fad5ae34e700::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit136d91d435d24682e3f9fad5ae34e700::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit136d91d435d24682e3f9fad5ae34e700::$classMap;

        }, null, ClassLoader::class);
    }
}
