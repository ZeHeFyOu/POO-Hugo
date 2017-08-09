<?php
namespace Application\Model\Auteur;

use Application\Model\Auteur\AuteurDb;

use Application\Model\Categorie\CategorieDb;
    
    class Auteur {
    private $IDAUTEUR,
            $NOMAUTEUR,
            $PRENOMAUTEUR,
            $EMAILAUTEUR;
    
    /**
     * @return the $IDAUTEUR
     */
    
    public function getIDAUTEUR()
    {
        return $this->IDAUTEUR;
    }
    
    /**
     * @return the $NOMAUTEUR
     */
    
    
    public function getNOMAUTEUR()
    {
        return $this->NOMAUTEUR;
    }
    
    /**
     * @return the $PRENOMAUTEUR
     */
    
    
    public function getPRENOMAUTEUR()
    {
        return $this->PRENOMAUTEUR;
    }
    
    /**
     * @return the $EMAILAUTEUR
     */
    
    
    public function getEMAILAUTEUR()
    {
        return $this->EMAILAUTEUR;
    }
    
    public function getNOMCOMPLET() {
        return $this->PRENOMAUTEUR.' '.$this->NOMAUTEUR;
    }
}
    