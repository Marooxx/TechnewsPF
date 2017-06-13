<?php
namespace Model\News;

class Categorie //extends \W\Model\Model
{
    private $IDCATEGORIE,
            $LIBELLECATEGORIE,
            $ROUTECATEGORIE;

    function __construct($IDCATEGORIE,$LIBELLECATEGORIE,$ROUTECATEGORIE)
    {



            $this->IDCATEGORIE       = $IDCATEGORIE;
            $this->LIBELLECATEGORIE  = $LIBELLECATEGORIE;
            $this->ROUTECATEGORIE    = $ROUTECATEGORIE;

    }



                # GETTERS #
    public function getIDCATEGORIE
    {
        return $this->IDCATEGORIE;
    }

    public function getLIBELLECATEGORIE
    {
        return $this->LIBELLECATEGORIE;
    }

    public function getROUTECATEGORIE
    {
        return $this->ROUTECATEGORIE;
    }






}






 ?>
