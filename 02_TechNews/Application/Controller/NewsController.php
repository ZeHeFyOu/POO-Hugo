<?php
namespace Application\Controller;

use Application\Model\Article\ArticleDb;


class NewsController extends \Core\Controller\AppController
{
    public function index() {
        
        # Connexion à la BDD
        $ArticleDb = new ArticleDb();
        
        # Récupération des Catégories
        $articles   = $ArticleDb->fetchAll();
        
        # Récupération des Articles en SPOTLIGHT
        $where      = 'SPOTLIGHTARTICLE = 1';
        $spotlight  = $ArticleDb->fetchAll($where);
        
        # Affichage dans la Vue
        $this->render('news/index',['articles'=> $articles , 'spotlight' => $spotlight]);
    }
}