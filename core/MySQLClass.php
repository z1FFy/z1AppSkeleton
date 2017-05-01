<?php
namespace z1App;
/**
 * Simple PDO Mysql class
 */
class MySQLClass {
    /**
     * @return PDO
     */
    private function getConnection() {
        $username = getConfig('dbUser');
        $password = getConfig('dbPass');
        $host = getConfig('dbHost');
        $db = getConfig('dbName');
        $connection = new PDO("mysql:dbname=$db;host=$host", $username, $password);
        return $connection;
    }

    /**
     * @param $sql
     * @param null $args
     * @return PDOStatement
     */
    function query($sql, $args=null){
        $connection = $this->getConnection();
        $stmt = $connection->prepare($sql);
        $stmt->execute($args);
        return $stmt;
    }
}
