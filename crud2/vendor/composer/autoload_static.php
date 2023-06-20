<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit96380796e0fe597668e51675e3511f19
{
    public static $prefixLengthsPsr4 = array (
        'C' => 
        array (
            'Colors\\' => 7,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Colors\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit96380796e0fe597668e51675e3511f19::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit96380796e0fe597668e51675e3511f19::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit96380796e0fe597668e51675e3511f19::$classMap;

        }, null, ClassLoader::class);
    }
}
