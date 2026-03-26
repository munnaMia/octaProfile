<?php

/*
DB="mysql"
DB_HOST="localhost"
DB_NAME="octaProfileDB"
DB_USER="munna"
DB_PASSWORD="***************"
DB_PORT = 3306
CHARSET="utf8mb4"
*/

namespace Core;

use PDO;

class Database
{
    public $connection;

    public function __construct($configs)
    {
        $dsn = "{$configs['db_user']['db']}:" . http_build_query($configs['dbConfig'], "", ";");

        $this->connection = new PDO($dsn, $configs['db_user']['user'], $configs['db_user']['password']);
    }
}
