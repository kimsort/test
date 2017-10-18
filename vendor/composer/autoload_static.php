<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit05300d66e01a7da8cb12b694d7eb8fdf
{
    public static $prefixLengthsPsr4 = array (
        'M' => 
        array (
            'Medoo\\' => 6,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Medoo\\' => 
        array (
            0 => __DIR__ . '/..' . '/catfan/medoo/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit05300d66e01a7da8cb12b694d7eb8fdf::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit05300d66e01a7da8cb12b694d7eb8fdf::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
