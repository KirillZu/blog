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
        $db = Db::getInstance();

        $query = "SELECT * FROM ".static::getTableName()." ORDER BY created_at DESC";
        
        $result = $db->query($query, [], static::class);
        
       return $result;
    }

    public static function findOne(int $id)
    {
        $db = Db::getInstance();

        $query = "SELECT * FROM ".static::getTableName()." WHERE id = :id";

        $data = ['id' => $id];
        
        $result = $db->query($query, $data, static::class);
        
        if (empty($result)) {
            return null;
        }

        return $result[0];
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