<?php


class fidelite
{

    private $idF;
    private $dateCreation;
    private $user;
    private $Commentaire;
    private $ptsF;
    //private $id;
 
   
 public function __construct($idF=null,$dateCreation,$user,$Commentaire,$ptsF)
    {
        $this->idF = $idF;
        $this->dateCreation = $dateCreation;
        $this->user = $user;
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
    public function getUser()
    {
        return $this->user;
    }

    /**
     * @param mixed $sexe
     */
    public function setUser($user)
    {
        $this->user = $user;
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