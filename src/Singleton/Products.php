<?php


namespace Singleton;

use PDO;


class Products
{

    /**
     * @var null
     */
    private $_db = null;

    public function __construct()
    {
        $this->_db = DbSingleton::getInstance();
    }

    public function getAllProducts()
    {
        $result = $this->_db->query("SELECT * FROM `products`");

        return $result->fetchAll(PDO::FETCH_ASSOC);
    }
}