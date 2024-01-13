<?php
namespace App\Configs;
class DatabaseConnection
{
    private static $pdo;

    public static function getConnection()
    {
        if (!isset(self::$pdo)) {
            try {
                self::$pdo = new \PDO('mysql:host=localhost;dbname=duanmot', 'root', '');
                self::$pdo->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
            } catch (\PDOException $e) {
                die("Kết nối đến cơ sở dữ liệu thất bại: " . $e->getMessage());
            }
        }

        return self::$pdo;
    }
}
