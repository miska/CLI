<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit32a29f027cc958742692dd75565736da
{
    public static $prefixLengthsPsr4 = array (
        'P' => 
        array (
            'PHPixie\\Tests\\' => 14,
            'PHPixie\\' => 8,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'PHPixie\\Tests\\' => 
        array (
            0 => __DIR__ . '/../..' . '/tests/PHPixie/Tests',
            1 => __DIR__ . '/..' . '/phpixie/slice/tests/PHPixie/Tests',
            2 => __DIR__ . '/..' . '/phpixie/database/tests/PHPixie/Tests',
        ),
        'PHPixie\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src/PHPixie',
            1 => __DIR__ . '/..' . '/phpixie/slice/src/PHPixie',
            2 => __DIR__ . '/..' . '/phpixie/database/src/PHPixie',
        ),
    );

    public static $prefixesPsr0 = array (
        'P' => 
        array (
            'PHPixie' => 
            array (
                0 => __DIR__ . '/..' . '/phpixie/test/src',
            ),
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit32a29f027cc958742692dd75565736da::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit32a29f027cc958742692dd75565736da::$prefixDirsPsr4;
            $loader->prefixesPsr0 = ComposerStaticInit32a29f027cc958742692dd75565736da::$prefixesPsr0;

        }, null, ClassLoader::class);
    }
}