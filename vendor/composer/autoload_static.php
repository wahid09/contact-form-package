<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitf04831efbbd30949f84ea69fdfcc200b
{
    public static $prefixLengthsPsr4 = array (
        'W' => 
        array (
            'Wahid09\\Contact\\' => 16,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Wahid09\\Contact\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInitf04831efbbd30949f84ea69fdfcc200b::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitf04831efbbd30949f84ea69fdfcc200b::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitf04831efbbd30949f84ea69fdfcc200b::$classMap;

        }, null, ClassLoader::class);
    }
}