<?php

namespace Core;


class Http
{
    public static function abort($statusCode = Response::NOT_FOUND, $str_msg)
    {
        $attributes = [
            "status" => $statusCode,
            "msg" => $str_msg,
        ];

        http_response_code($statusCode);
        Util::loadView("/responses/abort.php", $attributes);
        exit();
    }
}
