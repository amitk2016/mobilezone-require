<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit4d1d813c2c198f6fb9923dcb45ab23f7
{
    public static $prefixLengthsPsr4 = array (
        'L' => 
        array (
            'League\\Plates\\' => 14,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'League\\Plates\\' => 
        array (
            0 => __DIR__ . '/..' . '/league/plates/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit4d1d813c2c198f6fb9923dcb45ab23f7::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit4d1d813c2c198f6fb9923dcb45ab23f7::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
