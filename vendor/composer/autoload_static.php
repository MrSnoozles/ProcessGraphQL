<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitd5bf6117ec7197b65feebd97f1d59dd7
{
    public static $prefixLengthsPsr4 = array (
        'Y' => 
        array (
            'Youshido\\GraphQL\\' => 17,
        ),
        'P' => 
        array (
            'ProcessWire\\GraphQL\\Test\\' => 25,
            'ProcessWire\\GraphQL\\' => 20,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Youshido\\GraphQL\\' => 
        array (
            0 => __DIR__ . '/..' . '/youshido/graphql/src',
        ),
        'ProcessWire\\GraphQL\\Test\\' => 
        array (
            0 => __DIR__ . '/../..' . '/test',
        ),
        'ProcessWire\\GraphQL\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitd5bf6117ec7197b65feebd97f1d59dd7::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitd5bf6117ec7197b65feebd97f1d59dd7::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
