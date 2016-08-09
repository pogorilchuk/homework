<?php

class DbConnection
{
    private static $instanse;

    /**
     * @var PDO
     */
    private $pdo;

    /**
     * DbConnection
     */
    private function __construct()
    {
        $dsn = 'mysql: host=localhost; dbname=mvc;';
        $this->pdo = new PDO($dsn, 'root', 'mysql');
        $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }

    private function __clone(){}
    private function __wakeup() {}


    public function getInstance()
    {
        if (is_null(self::$instanse)) {
            self::$instanse = new DbConnection();
        }

        return self::$instanse;
    }

    /**
     * @return PDO
     */
    public function getPdo()
    {
        return $this->pdo;
    }


}