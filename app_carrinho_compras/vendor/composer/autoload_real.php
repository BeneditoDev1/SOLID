<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInit528482f92a98acfcc5d423c5b649f980
{
    private static $loader;

    public static function loadClassLoader($class)
    {
        if ('Composer\Autoload\ClassLoader' === $class) {
            require __DIR__ . '/ClassLoader.php';
        }
    }

    /**
     * @return \Composer\Autoload\ClassLoader
     */
    public static function getLoader()
    {
        if (null !== self::$loader) {
            return self::$loader;
        }

        spl_autoload_register(array('ComposerAutoloaderInit528482f92a98acfcc5d423c5b649f980', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInit528482f92a98acfcc5d423c5b649f980', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        call_user_func(\Composer\Autoload\ComposerStaticInit528482f92a98acfcc5d423c5b649f980::getInitializer($loader));

        $loader->register(true);

        return $loader;
    }
}