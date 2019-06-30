<?php


namespace Singleton;


class SingletonExample
{
    /**
     * @var
     */
    protected static $instance;

    public static function getInstance()
    {
        if (!isset(self::$instance)) {
            $class = __CLASS__;
            self::$instance = new $class;
            echo "<p>First initialization</p>";
        } else {
            echo "<p>... initialization</p>";

        }
        return self::$instance;
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

SingletonExample::getInstance();
SingletonExample::getInstance();
SingletonExample::getInstance();
