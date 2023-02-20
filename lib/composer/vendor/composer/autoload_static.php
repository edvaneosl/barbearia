<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitd1f81eb88bc765f3f593ae81f478b9a8
{
    public static $prefixLengthsPsr4 = array (
        'M' => 
        array (
            'Models\\' => 7,
        ),
        'C' => 
        array (
            'Classes\\' => 8,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Models\\' => 
        array (
            0 => __DIR__ . '/../..' . '/../../model',
        ),
        'Classes\\' => 
        array (
            0 => __DIR__ . '/../..' . '/../../class',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitd1f81eb88bc765f3f593ae81f478b9a8::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitd1f81eb88bc765f3f593ae81f478b9a8::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitd1f81eb88bc765f3f593ae81f478b9a8::$classMap;

        }, null, ClassLoader::class);
    }
}
