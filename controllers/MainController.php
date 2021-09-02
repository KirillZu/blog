<?php

namespace Controllers;
use components\Db;
use models\Article;
use views\View;


class MainController 
{
    const TITLE = 'Main page';

    /** @var View */
    private $view;   
    private $db;


    public function __construct() {
        $this->view = new View($_SERVER['DOCUMENT_ROOT'].'/templates/');
        $this->db = new Db();
    }

        public function actionIndex()
    {
        $articles = Article::findAll();
    //     echo '<pre>';
    //    print_r($articles);
    //    echo '</pre>';
       
        $this->view->render('main/main.php', ['articles' => $articles, 'title' => self::TITLE]);
    }
}
