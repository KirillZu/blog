<?php

namespace Controllers;
use models\Article;
use views\View;


class ArticleController
{
    /**@var View */
    private $view;
    private $title;


    public function __construct() 
    {
        $this->view = new View($_SERVER['DOCUMENT_ROOT'].'/templates');
    }

    public function actionView(int $articleId)
    {
        $article = Article::findOne($articleId);
        
        if ($article == null) {
            $this->view->render('errors/404.php', [], 404);
            
            return;
        }

        $author = $article->getAuthor()->getNickname();
  
        $this->view->render('article/article.php', ['article' => $article, 'nickname' => $author, 'title' => $article->getTitle()]);
        
    }
    
    public function actionInsert()
    {        
        $query = "INSERT INTO article (author_id, title, content)
                  VALUES(:author_id, :title, :content)";
        
        $data = $this->dummyData();
        
        // $article = $this->db->query($query, $data);
        
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
        
        // $article = $this->db->query($query, $data);
        
        header('Location: /article/'.$articleId);
        
    }
    
    public function actionDelete(int $articleId)
    {
        $query = "DELETE FROM article WHERE id = :articleId";
        $data = ['articleId' => $articleId];
        
        // $article = $this->db->query($query, $data);
        
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
