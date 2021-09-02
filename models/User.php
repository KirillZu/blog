<?php

namespace models;
use models\ActiveRecordEntity;


class User extends ActiveRecordEntity
{   
    /** @var string */
    protected $nickname;
    
    
    
    public function getNickname(): string
    {
        return $this->nickname;
    }

    protected static function getTableName(): string
    {
        return 'user';
    }
}
