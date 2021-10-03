<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit879527525b349d8568dcc03c597b7bf1
{
    public static $prefixLengthsPsr4 = array (
        '\\' => 
        array (
            '\\App\\Model\\' => 11,
            '\\App\\Controller\\' => 16,
        ),
        'P' => 
        array (
            'Psr\\Log\\' => 8,
        ),
        'M' => 
        array (
            'Monolog\\' => 8,
        ),
    );

    public static $prefixDirsPsr4 = array (
        '\\App\\Model\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
        '\\App\\Controller\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
        'Psr\\Log\\' => 
        array (
            0 => __DIR__ . '/..' . '/psr/log/Psr/Log',
        ),
        'Monolog\\' => 
        array (
            0 => __DIR__ . '/..' . '/monolog/monolog/src/Monolog',
        ),
    );

    public static $classMap = array (
        'App\\Controller\\ContentController' => __DIR__ . '/../..' . '/src/Controller/ContentController.php',
        'App\\Controller\\UrlController' => __DIR__ . '/../..' . '/src/Controller/UrlController.php',
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit879527525b349d8568dcc03c597b7bf1::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit879527525b349d8568dcc03c597b7bf1::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit879527525b349d8568dcc03c597b7bf1::$classMap;

        }, null, ClassLoader::class);
    }
}