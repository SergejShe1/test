<?php


namespace Singleton;

use PDO;
abstract class DbSingleton implements SingletonInterface
{
    /**
     * @var null
     */
    protected static $_db = null;

    public static function getInstance()
    {
        if (self::$_db === null) {
            self::$_db = new PDO('mysql:host=localhost; dbname=DataB', 'root', 'root');
        }
        return self::$_db;
    }

    protected function __construct()
    {
    }

    protected function __clone()
    {
    }

    protected function __wakeup()
    {
    }
}