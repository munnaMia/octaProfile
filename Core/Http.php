<?php

namespace Core;


class Http
{
    public static function abort($statusCode = Response::NOT_FOUND)
    {
        http_response_code($statusCode);
        // give a responst page (views/statuscode.php) page and return exit()
    }
}
