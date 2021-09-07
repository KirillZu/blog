<?php

namespace components;
use PDO;


class Db 
{
    private static $instance;
    
    /**
     * 
     * @var PDO
     */
    private $pdo;


    private function __construct() 
    {
        $dbParams = (require $_SERVER['DOCUMENT_ROOT'].'/config/settings.php')['db'];

        $dsn = "mysql:={$dbParams['host']}; dbname={$dbParams['dbname']}";
        $user = "{$dbParams['user']}";
        $password = "{$dbParams['password']}";
        
        $this->pdo = new PDO($dsn, $user, $password);
    
    }

    public static function getInstance()
    {
        if (self::$instance === null) {
            self::$instance = new self();
        }

        return self::$instance;
    }
    
    public function query(string $query, array $data = [], $className = 'stdClass')
    { 
        
        $result = $this->pdo->prepare($query);
        $result->execute($data);
        $result->setFetchMode(PDO::FETCH_CLASS, $className);
        
        if (false === $result) {
            return null;
        }
            
        return $result->fetchAll();
    }
}
