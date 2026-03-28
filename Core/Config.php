<?php

namespace Core;

use Dotenv\Dotenv;

class Config
{
    private static $configs = null;

    private static function loadConfig()
    {
        $dotenv = Dotenv::createImmutable(Util::getBasePath());
        $dotenv->load();

        self::$configs = [
            "database" => [
                "db_configs" => [
                    "host" => $_ENV["DB_HOST"],
                    "dbname" => $_ENV["DB_NAME"],
                    "port" => $_ENV["DB_PORT"],
                    "charset" => $_ENV["CHARSET"],
                ],
                "db_user" => [
                    "db" => $_ENV["DB"],
                    "user" => $_ENV["DB_USER"],
                    "password" => $_ENV["DB_PASSWORD"],
                ],
            ]
        ];
    }

    public static function getConfigs(string $key)
    {
        if (self::$configs == null) {
            self::loadConfig();
        }

        return self::$configs[$key];
    }
}
