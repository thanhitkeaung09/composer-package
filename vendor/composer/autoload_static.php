<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit2a0655883886b6ac929ad6d86ec15f5b
{
    public static $prefixLengthsPsr4 = array (
        'V' => 
        array (
            'Vitalis\\HelloComposer\\' => 22,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Vitalis\\HelloComposer\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit2a0655883886b6ac929ad6d86ec15f5b::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit2a0655883886b6ac929ad6d86ec15f5b::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit2a0655883886b6ac929ad6d86ec15f5b::$classMap;

        }, null, ClassLoader::class);
    }
}
