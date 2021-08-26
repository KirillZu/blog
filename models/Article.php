<?php

namespace models;
use components\Db;
use PDO;


class Article 
{   
    private $id;
    private $authorId;
    private $title;
    private $contentPreview;
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
    
    public function getId(): int 
    {
        return $this->id;
    }

    public function getAuthorId(): int 
    {
        return $this->authorId;
    }

    public function getTitle(): string
    {
        return $this->title;
    }
    
    public function getContentPreview() {
        return $this->contentPreview;
    }

    public function getContent(): string
    {
        return $this->content;
    }

    public function getCreatedAt(): string 
    {
        return $this->createdAt;
    }


}
