<?php

include 'Article.class.php';
include 'Auteur.class.php';
include 'Categorie.class.php';

/**
 * Création d'une instance de la Class "Article"
 * Ici, notre variable $UnArticle est un Objet de la classe Article.
 * En ce sens, elle a accès à l'ensemble des propriétés et fonctions qui la composent.
 */

$UnArticle = new Article("La Formation WF3", "Une Formation Certifiante en 3 mois !",
                         "Rejoignez-nous à Limas et vous verrez bien !", "wf3.jpg", "04/08/2017");

// -- Afficher l'Objet Article
echo '<pre>';
print_r($UnArticle);
echo '</pre>';

$UnDeuxiemeArticle = new Article("La Martinique","Une île pour les vacances !",
                                 "Venez nombweu pouw prendre le Ti-Punch...","ti-punch.jpg","04/08/2017");

echo '<pre>';
print_r($UnDeuxiemeArticle);
echo '</pre>';

// -- Je veux afficher le Titre de mon Premier Article
#echo $UnArticle->Titre;
# : Uncaught Error: Cannot access private property Article::$Titre

echo $UnArticle->getTitre();
echo '<br/>';
echo $UnArticle->getAccroche();
echo '<br/>';
echo $UnArticle->getDescription();
echo '<br/>';
echo $UnArticle->getFeaturedImage();
echo '<br/>';
echo $UnArticle->getDateCreationArticle();
echo '<br/>';
echo $UnDeuxiemeArticle->getTitre();
echo '<br/>';
echo $UnDeuxiemeArticle->getAccroche();
echo '<br/>';
echo $UnDeuxiemeArticle->getDescription();
echo '<br/>';
echo $UnDeuxiemeArticle->getFeaturedImage();
echo '<br/>';
echo $UnDeuxiemeArticle->getDateCreationArticle();
echo '<br/>';

$UnArticle->setTitre('La Fromation Web Force 3');

echo $UnArticle->getTitre();

echo '<pre>';
print_r($UnArticle);
echo '</pre>';

$UnAuteur = new Auteur("Roald","Dahl","roaldlefou@utopia.com");

echo '<pre>';
print_r($UnAuteur);
echo '</pre>';

$UnAuteur->setNom('Michael');
$UnAuteur->setPrenom('Le fou');
$UnAuteur->setEmail('Malade@hisoka.dio');

echo $UnAuteur->getNom();
echo '<br>';
echo $UnAuteur->getPrenom();
echo '<br>';
echo $UnAuteur->getEmail();

echo '<hr>';

$UneCategorie = new Categorie ('Formation Informatique');
$UneCategorie->AjouterUnArticle($UnArticle);
$UneCategorie->AjouterUnArticle($UnDeuxiemeArticle);
#$UneCategorie->AjouterUnArticle("Titre de mon Article");

echo '<pre>';
print_r($UneCategorie);
echo '</pre>';

$UneCategorie->setLibelle('NO PLS NO !');

echo $UneCategorie->getLibelle();
echo '<hr>';

echo '<ol>';
    echo '<li>';
        echo $UneCategorie->getLibelle();
    echo '</li>';
    echo '<ul>';
        $articles = $UneCategorie->getCollectionArticles();
        foreach ($articles as $article) :
        echo "<li>". $article->getTitre() ."-".
            $article->getAuteur()->getNomComplet() ."</li>";
        endforeach;
    echo '<ul>';
echo '</ol>';

echo '<hr>';

