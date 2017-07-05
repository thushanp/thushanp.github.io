<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit3a8f9e0b3c0f2f230765f51c89642e30
{
    public static $prefixLengthsPsr4 = array (
        'T' => 
        array (
            'Twilio\\' => 7,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Twilio\\' => 
        array (
            0 => __DIR__ . '/..' . '/twilio/sdk/Twilio',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit3a8f9e0b3c0f2f230765f51c89642e30::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit3a8f9e0b3c0f2f230765f51c89642e30::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
