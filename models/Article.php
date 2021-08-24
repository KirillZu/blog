<?php

namespace models;
use components\Db;
use PDO;


class Article 
{   
    private $id;
    private $authorId;
    private $title;
    private $content;
    private $createdAt;
    
    
    public function __set($name, $value) {
        $camelCase = $this->underscoreToCamelCase($name);
        
        $this->$camelCase = $value;
    }

    private function underscoreToCamelCase(string $fieldName): string
    {
        preg_match('~^([a-zA-Z]+)\_([a-zA-Z]+)$~', $fieldName, $matches);
        
        $fieldName = $matches[1].ucfirst($matches[2]);
        
        return $fieldName;
    }
}
