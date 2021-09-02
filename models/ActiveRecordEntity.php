<?php

namespace models;
use components\Db;


abstract class ActiveRecordEntity
{
     /** @var int */
    protected $id;


    public function __set($name, $value) {
        $camelCase = $this->underscoreToCamelCase($name);
        
        $this->$camelCase = $value;
    }

    public static function findAll()
    {
        $db = new Db();

        $query = "SELECT * FROM ".static::getTableName()." ORDER BY created_at DESC";
        
        $articles = $db->query($query, [], static::class);
        
       return $articles;
    }

    public static function findOne(int $articleId)
    {
        $db = new Db();

        $query = "SELECT * FROM ".static::getTableName()." WHERE id = :articleId";

        $data = ['articleId' => $articleId];
        
        $article = $db->query($query, $data, static::class);
        
       return $article[0];
    }
    
    public function getId(): int 
    {
        return $this->id;
    }

    private function underscoreToCamelCase(string $fieldName): string
    {
        preg_match('~^([a-zA-Z]+)\_([a-zA-Z]+)$~', $fieldName, $matches);
        
        $fieldName = $matches[1].ucfirst($matches[2]);
        
        return $fieldName;
    }

    abstract protected static function getTableName(): string;
    
}