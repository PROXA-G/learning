<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInit6f1af7d2e0810a83416104f777d4ce31
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

        spl_autoload_register(array('ComposerAutoloaderInit6f1af7d2e0810a83416104f777d4ce31', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInit6f1af7d2e0810a83416104f777d4ce31', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        call_user_func(\Composer\Autoload\ComposerStaticInit6f1af7d2e0810a83416104f777d4ce31::getInitializer($loader));

        $loader->register(true);

        return $loader;
    }
}
