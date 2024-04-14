<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit12dd5f26e250666ac685e4cce4c4da1a
{
    public static $prefixLengthsPsr4 = array (
        's' => 
        array (
            'src\\' => 4,
        ),
        'B' => 
        array (
            'Benedito\\AppCrm\\' => 16,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'src\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
        'Benedito\\AppCrm\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit12dd5f26e250666ac685e4cce4c4da1a::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit12dd5f26e250666ac685e4cce4c4da1a::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit12dd5f26e250666ac685e4cce4c4da1a::$classMap;

        }, null, ClassLoader::class);
    }
}