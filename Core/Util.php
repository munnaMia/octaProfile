<?php

namespace Core;

class Util
{
    private static $BASEPATH;

    public static function setBasePath(string $str): void
    {
        self::$BASEPATH = $str;
    }

    public static function getBasePath(): string
    {
        return self::$BASEPATH ?? throw new \Exception("Basepath not initiallize.");
    }

    //takes and data as an parameter. print the data on screen and kill the screen
    public static function dumpAndDie($data)
    {
        echo "<pre>";
        var_dump($data);
        die;
        echo "</pre>";
    }

    // if uri match to the request uri that return bool.
    public static function isUri($uri): bool
    {
        if ($_SERVER['REQUEST_URI'] == $uri) {
            return true;
        }
        return false;
    }

    // return the base path of a file
    public static function basePath($path): string
    {
        return self::$BASEPATH . $path;
    }

    // load a view on user side
    public static function loadView($path, $attributes = [])
    {
        extract($attributes);

        require static::basePath("views/{$path}");
    }

    // automatically require class
    public static function autoRegisterClasses()
    {
        spl_autoload_register(function ($class) {
            require str_replace('\\', '/', $class) . ".php";
        });
    }
}
