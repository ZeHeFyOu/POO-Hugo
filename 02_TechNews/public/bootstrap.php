<?php
# Affichage des Erreurs en mode DEV = 1 , en PROD = 0
ini_set('display_errors',1); // 1 = activé , 0 = désactivé

# Racine du Site Internet
# Nécessite PHP 7+
# http://php.net/manual/fr/function.dirname.php

define('RACINE_SITE',dirname(__FILE__,2));

# Chemin Relatif vers le Dossier Public
define('PUBLIC_URL','/POO-Hugo/02_TechNews/public');

# En-tete du site
define('HEADER_SITE', RACINE_SITE.'/Application/Layout/header.inc.php');

# Pied de page du site
define('FOOTER_SITE', RACINE_SITE.'/Application/Layout/footer.inc.php');

# Sidebar du site
define('SIDEBAR_SITE', RACINE_SITE.'/Application/Layout/sidebar.inc.php');

# Les Vues
define('VIEW_SITE', RACINE_SITE.'/Application/Views');

# Connexion BDD
define('DBHOST',        'localhost');
define('DBNAME',        'technews');
define('DBUSERNAME',    'root');
define('DBPASSWORD',    '');

# Autoloader
require_once 'Autoloader.php';
Autoloader::register();