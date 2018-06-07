<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitbb329c85fc9f9a14ceabbbd5c104e458
{
    public static $prefixLengthsPsr4 = array (
        'M' => 
        array (
            'Moderator\\' => 10,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Moderator\\' => 
        array (
            0 => __DIR__ . '/../..' . '/app/Moderator',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitbb329c85fc9f9a14ceabbbd5c104e458::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitbb329c85fc9f9a14ceabbbd5c104e458::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}