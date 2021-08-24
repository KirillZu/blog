<?php

namespace Controllers;
use components\Db;
use views\View;


class MainController 
{
    private $view;   
    private $db;


    public function __construct() {
        $this->view = new View($_SERVER['DOCUMENT_ROOT'].'/templates/');
        $this->db = new Db();
    }

        public function actionIndex()
    {
        $query = "SELECT * FROM article ORDER BY created_at DESC";
        
        $articles = $this->db->query($query);
        
        echo '<pre>';
        print_r($articles);
        echo '</pre>';
//            $this->view->render('main/main.php');
    }
}
