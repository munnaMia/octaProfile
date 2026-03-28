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
use PDOException;

class Database
{
    public $connection;

    public function __construct($configs)
    {
        $dsn = "{$configs['db_user']['db']}:" . http_build_query($configs['db_configs'], "", ";");

        $this->connection = new PDO(
            $dsn,
            $configs['db_user']['user'],
            $configs['db_user']['password'],
            [
                PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
            ]
        );

        // $stmt = $this->connection->query("SELECT DATABASE();");
        // Util::dumpAndDie($stmt->fetch());
    }
}
