<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInitec7edceab2bc0c9f6541c75bfc91a19c
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

        require __DIR__ . '/platform_check.php';

        spl_autoload_register(array('ComposerAutoloaderInitec7edceab2bc0c9f6541c75bfc91a19c', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInitec7edceab2bc0c9f6541c75bfc91a19c', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        call_user_func(\Composer\Autoload\ComposerStaticInitec7edceab2bc0c9f6541c75bfc91a19c::getInitializer($loader));

        $loader->register(true);

        return $loader;
    }
}
