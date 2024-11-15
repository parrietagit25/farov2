<?php
class Database {
    private static $connection = null;

    public static function getConnection() {
        if (!self::$connection) {
            self::$connection = new PDO('mysql:host=localhost;dbname=farov2', 'root', '');
        }
        return self::$connection;
    }
}
