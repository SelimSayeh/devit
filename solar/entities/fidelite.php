<?php


class fidelite
{

    private $idF;
    private $dateCreation;
    private $causeAjout;
    private $Commentaire;
    private $ptsF;
    //private $id;
 
   
 public function __construct($idF=null,$dateCreation,$causeAjout,$Commentaire,$ptsF)
    {
        $this->idF = $idF;
        $this->dateCreation = $dateCreation;
        $this->causeAjout = $causeAjout;
        $this->Commentaire = $Commentaire;
        $this->ptsF = $ptsF;
    }

    /**
     * @return mixed
     */
    public function getidF()
    {
        return $this->idF;
    }

    /**
     * @param mixed $id
     */
    public function setidF($idF)
    {
        $this->idF = $idF;
    }



    /**
     * @return mixed
     */
    public function getDate()
    {
        return $this->dateCreation;
    }

    /**
     * @param mixed $dateNaiss
     */
    public function setDate($dateCreation)
    {
        $this->dateCreation = $dateCreation;
    }

    /**
     * @return mixed
     */


    /**
     * @return mixed
     */
    public function getCauseAjout()
    {
        return $this->causeAjout;
    }

    /**
     * @param mixed $sexe
     */
    public function setCauseAjout($causeAjout)
    {
        $this->causeAjout = $causeAjout;
    }

    /**
     * @return mixed
     */
    
    public function getCommentaire()
    {
        return $this->Commentaire;
    }

   
    public function setCommentaire($Commentaire)
    {
        $this->Commentaire = $Commentaire;
    }


     public function getPtsF()
    {
        return $this->ptsF;
    }

    /**
     * @param mixed $adressse
     */
    public function setPtsF($ptsF)
    {
        $this->ptsF = $ptsF;
    }
   


    /**
     * @param mixed $adressse
     */
   
   /*
public function getIdClient()
    {
        return $this->id;
    }

    /**
     * @param mixed $idClient
     */
  /*
    public function setIdClient($id)
    {
        $this->id= $id;
    }
*/
}

?>