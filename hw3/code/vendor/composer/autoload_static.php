<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitcda29c6859a2ec15daef0739cabebd88
{
    public static $files = array (
        '73a76277cdd754516bf94aa9c0aa6bb3' => __DIR__ . '/../..' . '/src/main.function.php',
        '2c30778c83e7cf1ab5d05f6fb053a212' => __DIR__ . '/../..' . '/src/template.function.php',
        '4497162affd5dbda9202a35ac3a5f40d' => __DIR__ . '/../..' . '/src/file.function.php',
        '69f3da648fa0f5ad5ee239f01bb86867' => __DIR__ . '/../..' . '/src/validateDate.php',
        '326e1a8df00aec184d57db1dc1eac5dc' => __DIR__ . '/../..' . '/src/todayBirthdayPeople.php',
        '68ce73203e5b0c29712fb3fdb981fb4b' => __DIR__ . '/../..' . '/src/deleteFunction.php',
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->classMap = ComposerStaticInitcda29c6859a2ec15daef0739cabebd88::$classMap;

        }, null, ClassLoader::class);
    }
}