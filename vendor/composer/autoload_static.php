<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit4bb26e8d67d0d8d1d0116cc53f03d2e0
{
    public static $fallbackDirsPsr0 = array (
        0 => __DIR__ . '/../..' . '/src',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->fallbackDirsPsr0 = ComposerStaticInit4bb26e8d67d0d8d1d0116cc53f03d2e0::$fallbackDirsPsr0;

        }, null, ClassLoader::class);
    }
}
