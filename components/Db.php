<?php

namespace components;
use PDO;


class Db 
{
    
    private $pdo;


    public function __construct() 
    {
        $dbParams = (require $_SERVER['DOCUMENT_ROOT'].'/config/settings.php')['db'];

        $dsn = "mysql:={$dbParams['host']}; dbname={$dbParams['dbname']}";
        $user = "{$dbParams['user']}";
        $password = "{$dbParams['password']}";
        
        $this->pdo = new PDO($dsn, $user, $password);
    
    }
    
    public function query(string $query, array $data = []) 
    { 
        
        $result = $this->pdo->prepare($query);
        $result->execute($data);
        $result->setFetchMode(PDO::FETCH_CLASS, 'Models\Article');
        $article = $result->fetchAll();
        
        return $article;
    }
}
