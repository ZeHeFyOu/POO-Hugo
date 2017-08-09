<?php

namespace Application\Model\Tags;

class Tags {
    
    private $IDTAGS,
            $LIBELLETAGS,
            $ROUTETAGS;
    
    /**
     * @return the $IDTAGS
     */
    public function getIDTAGS()
    {
        return $this->IDTAGS;
    }
    
    /**
     * @return the $LIBELLETAGS
     */
    public function getLIBELLETAGS()
    {
        return $this->LIBELLETAGS;
    }
    
    /**
     * @return the $ROUTETAGS
     */
    public function getROUTETAGS()
    {
        return $this->ROUTETAGS;
    }
    
}