<?php

namespace models;
use models\ActiveRecordEntity;


class Article extends ActiveRecordEntity
{
    /** @var int */
    protected $authorId;

    /** @var string */
    protected $title;

    /** @var string */
    protected $contentPreview;

    /** @var string */
    protected $content;

    /** @var string */
    protected $createdAt;
    
    

    public function getAuthorId(): int 
    {
        return $this->authorId;
    }

    public function getTitle(): string
    {
        return $this->title;
    }
    
    public function getContentPreview(): string {
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

    protected static function getTableName(): string
    {
        return 'article';
    }

}
