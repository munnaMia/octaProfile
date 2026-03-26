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
                "db" => $_ENV["DB"],
                "host" => $_ENV["DB_HOST"],
                "name" => $_ENV["DB_NAME"],
                "user" => $_ENV["DB_USER"],
                "password" => $_ENV["DB_PASSWORD"],
                "port" => $_ENV["DB_PORT"],
                "charset" => $_ENV["CHARSET"],
            ],
        ];
    }

    public static function getConfigs(string $key)
    {
        if (self::$configs == null) {
            echo "run";
            self::loadConfig();
        }

        return self::$configs;
    }
}
