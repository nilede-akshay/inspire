<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInitb1082a6cfcf21a11f4379c5afb8a388d
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

        spl_autoload_register(array('ComposerAutoloaderInitb1082a6cfcf21a11f4379c5afb8a388d', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInitb1082a6cfcf21a11f4379c5afb8a388d', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        call_user_func(\Composer\Autoload\ComposerStaticInitb1082a6cfcf21a11f4379c5afb8a388d::getInitializer($loader));

        $loader->register(true);

        return $loader;
    }
}
