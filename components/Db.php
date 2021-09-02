<?php

namespace components;
use PDO;


class Db 
{
    /**
     * 
     * @var PDO
     */
    private $pdo;


    public function __construct() 
    {
        $dbParams = (require $_SERVER['DOCUMENT_ROOT'].'/config/settings.php')['db'];

        $dsn = "mysql:={$dbParams['host']}; dbname={$dbParams['dbname']}";
        $user = "{$dbParams['user']}";
        $password = "{$dbParams['password']}";
        
        $this->pdo = new PDO($dsn, $user, $password);
    
    }
    
    public function query(string $query, array $data = [], $className = 'stdClass')
    { 
        
        $result = $this->pdo->prepare($query);
        $result->execute($data);
        $result->setFetchMode(PDO::FETCH_CLASS, $className);
        
        if (false === $result) {
            return null;
        }
            
        $article = $result->fetchAll();
        
        return $article;
    }
}
