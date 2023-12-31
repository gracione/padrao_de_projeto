<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitdc9ccb0951a4dcbd1c8e550b47566f4c
{
    public static $prefixLengthsPsr4 = array (
        'A' => 
        array (
            'Alura\\DesignPattern\\' => 20,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Alura\\DesignPattern\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitdc9ccb0951a4dcbd1c8e550b47566f4c::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitdc9ccb0951a4dcbd1c8e550b47566f4c::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
