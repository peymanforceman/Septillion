<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit0781d916a202303378e6a1b8d079e8ca
{
    public static $prefixLengthsPsr4 = array (
        'S' => 
        array (
            'Septillion\\' => 11,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Septillion\\' => 
        array (
            0 => __DIR__ . '/../..' . '/Septillion',
        ),
    );

    public static $classMap = array (
        'Septillion\\Classes\\Controller' => __DIR__ . '/../..' . '/Septillion/Classes/Controller.php',
        'Septillion\\Classes\\DatabaseConnection' => __DIR__ . '/../..' . '/Septillion/Classes/DatabaseConnection.php',
        'Septillion\\Classes\\Helper' => __DIR__ . '/../..' . '/Septillion/Classes/Helper.php',
        'Septillion\\Classes\\Model' => __DIR__ . '/../..' . '/Septillion/Classes/Model.php',
        'Septillion\\Classes\\Post' => __DIR__ . '/../..' . '/Septillion/Classes/Post.php',
        'Septillion\\Classes\\Request' => __DIR__ . '/../..' . '/Septillion/Classes/Request.php',
        'Septillion\\Classes\\Router' => __DIR__ . '/../..' . '/Septillion/Classes/Router.php',
        'Septillion\\Classes\\User' => __DIR__ . '/../..' . '/Septillion/Classes/User.php',
        'Septillion\\Classes\\View' => __DIR__ . '/../..' . '/Septillion/Classes/View.php',
        'Septillion\\Controllers\\Test' => __DIR__ . '/../..' . '/Septillion/Controllers/Test.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit0781d916a202303378e6a1b8d079e8ca::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit0781d916a202303378e6a1b8d079e8ca::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit0781d916a202303378e6a1b8d079e8ca::$classMap;

        }, null, ClassLoader::class);
    }
}
