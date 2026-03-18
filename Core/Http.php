<?php

namespace Core;


class Http
{
    public static function abort($statusCode = Response::NOT_FOUND)
    {
        http_response_code($statusCode);
        Util::loadView("/responses/{$statusCode}.php");
        exit();
    }
}
