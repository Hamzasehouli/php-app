<?php
declare (strict_types = 1);

namespace Sehouli\config;

class Database
{

    public static function connect(string $host, int | string $port, string $dbname, string $db_username, string $db_password): \PDO
    {
        try {
            $con = new \PDO("mysql:host=$host;port=$port;dbname=$dbname", $db_username, $db_password, [\PDO::ATTR_EMULATE_PREPARES => false]);
            return $con;
        } catch (\Exception$e) {
            var_dump($e);
        }
    }

}
