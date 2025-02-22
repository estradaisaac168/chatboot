<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInit57c36950c8a619408a8250d99e26fd66
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

        spl_autoload_register(array('ComposerAutoloaderInit57c36950c8a619408a8250d99e26fd66', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInit57c36950c8a619408a8250d99e26fd66', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        call_user_func(\Composer\Autoload\ComposerStaticInit57c36950c8a619408a8250d99e26fd66::getInitializer($loader));

        $loader->register(true);

        return $loader;
    }
}
