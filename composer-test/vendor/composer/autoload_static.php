<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit1341ec28f13a48654fa8bd9f69b83f30
{
    public static $prefixLengthsPsr4 = array (
        'B' => 
        array (
            'Brick\\Math\\' => 11,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Brick\\Math\\' => 
        array (
            0 => __DIR__ . '/..' . '/brick/math/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit1341ec28f13a48654fa8bd9f69b83f30::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit1341ec28f13a48654fa8bd9f69b83f30::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
