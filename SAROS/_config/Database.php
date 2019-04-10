<?php
/**
 * Created by PhpStorm.
 * User: DELL
 * Date: 20/11/2018
 * Time: 16:49
 */

class Database
{
    private static $dbHost = "localhost";
    private static $dbName = "mvc";
    private static $dbUsername = "root";
    private static $dbUserpassword = "";

    private static $connection = null;

    public static function connect()
    {
        if(self::$connection == null)
        {
            try
            {
                self::$connection = new PDO("mysql:host=" . self::$dbHost . ";dbname=" . self::$dbName , self::$dbUsername, self::$dbUserpassword );
            }
            catch(PDOException $e)
            {
                die($e->getMessage());
            }
        }
        return self::$connection;
    }

    public static function disconnect()
    {
        self::$connection = null;
    }
}

$db = Database::connect();