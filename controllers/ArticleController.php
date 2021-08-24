<?php

namespace Controllers;
use components\Db;
use PDO;


class ArticleController
{
   
    private $db;

    public function __construct() 
    {
        $this->db = new Db();
    }

    public function actionView(int $articleId)
    {
        $query = "SELECT * FROM article WHERE id = :articleId";
        $data = ['articleId' => $articleId];
        
        $article = $this->db->query($query, $data);
        
        echo '<pre>';
        print_r($article);
        echo '</pre>';
        
    }
    
    public function actionInsert()
    {        
        $query = "INSERT INTO article (author_id, title, content)
                  VALUES(:author_id, :title, :content)";
        
        $data = $this->dummyData();
        
        $article = $this->db->query($query, $data);
        
        header('Location: /');
    }
    
    public function actionUpdate(int $articleId)
    {
        $authorId = 1;
        $title = 'New TITLE';
        $content = 'New content';
        
        $query = "UPDATE article 
                SET author_id = :authorId, title = :title, content = :content, created_at = NOW()
                WHERE id = :articleId";
        $data = ['authorId'=> $authorId, 'title' => $title, 'content' => $content, 'articleId' => $articleId];
        
        $article = $this->db->query($query, $data);
        
        header('Location: /article/'.$articleId);
        
    }
    
    public function actionDelete(int $articleId)
    {
        $query = "DELETE FROM article WHERE id = :articleId";
        $data = ['articleId' => $articleId];
        
        $article = $this->db->query($query, $data);
        
        header('Location: /');
    }
    
    private function dummyData()
    {
        $counter = file_get_contents($_SERVER['DOCUMENT_ROOT'].'/dummy/counter.txt');
        
        file_put_contents($_SERVER['DOCUMENT_ROOT'].'/dummy/counter.txt', ++$counter);
        
        $authorId = 1;
        $title = "Title article # ".$counter;
        $content = "Content article # ".$counter;

        
        $data = ['author_id' => $authorId, 'title' => $title, 'content' => $content];
        
        return $data;
    }
}
