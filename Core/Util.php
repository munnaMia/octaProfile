<?php

namespace Core;

class Util
{
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
}
