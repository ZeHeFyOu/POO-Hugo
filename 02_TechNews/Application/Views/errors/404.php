<?php
    # On récupère les paramètres de la Vue
    $params = $this->getParams();
?>


<div class="page-404">
    <h1>404</h1>
    <img src="<?= PUBLIC_URL; ?>/images/404.png" alt="404 error" />
    <p>Erreur, <?= $params['erreur']; ?></p>
    <a href="<?= PUBLIC_URL; ?>" class="my-btn btn-go-home">RETOURNER VERS L'ACCUEIL</a>
</div>