<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit1b37eca4ed11ba0aa139fdd1158b3e61
{
    public static $files = array (
        '94eea309fd3001d34a67f67811be687a' => __DIR__ . '/../..' . '/src/AbstractBook.php',
        'f56f29dd6dbd1cbe4f3604560eb48011' => __DIR__ . '/../..' . '/src/Book.php',
        'b4b94496531cdc5d5220093ed62410f0' => __DIR__ . '/../..' . '/src/Bookcase.php',
        'bc01641c4667abd1b01a126344f22dad' => __DIR__ . '/../..' . '/src/Room.php',
        '067cce8bca82988a1124f5ea50c95009' => __DIR__ . '/../..' . '/src/Ebook.php',
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->classMap = ComposerStaticInit1b37eca4ed11ba0aa139fdd1158b3e61::$classMap;

        }, null, ClassLoader::class);
    }
}