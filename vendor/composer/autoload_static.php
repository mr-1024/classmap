<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit4081fba3558ecdefb10456c740d4f250
{
    public static $classMap = array (
        'Some' => __DIR__ . '/../..' . '/src/Some.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->classMap = ComposerStaticInit4081fba3558ecdefb10456c740d4f250::$classMap;

        }, null, ClassLoader::class);
    }
}
