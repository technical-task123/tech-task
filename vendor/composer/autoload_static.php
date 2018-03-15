<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit08a106a35b8980414491f13288ee6bc1
{
    public static $prefixLengthsPsr4 = array (
        'Z' => 
        array (
            'Zoo\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Zoo\\' => 
        array (
            0 => __DIR__ . '/../..' . '/models',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit08a106a35b8980414491f13288ee6bc1::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit08a106a35b8980414491f13288ee6bc1::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
