<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitb6c40137cf6516c47eb58f8cf6109503
{
    public static $prefixLengthsPsr4 = array (
        'A' => 
        array (
            'App\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'App\\' => 
        array (
            0 => __DIR__ . '/../..' . '/app',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitb6c40137cf6516c47eb58f8cf6109503::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitb6c40137cf6516c47eb58f8cf6109503::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
