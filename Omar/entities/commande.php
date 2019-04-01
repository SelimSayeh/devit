<?php

class commande
{

    private $id_commande;
    private $email;
    private $etat_com;
    private $date_emission;
    private $prix;
    


   
    public function __construct($email, $etat_com, $date_emission, $prix)
    {
        $this->email = $email;
        $this->etat_com = $etat_com;
        $this->date_emission = $date_emission;
        $this->prix = $prix;
        

    }

    /**
     * @return mixed
     */
    public function getid()
    {
        return $this->id_commande;
    }

    /**
     * @param mixed $id
     */
    public function setid($id_commande)
    {
        $this->id_commande = $id_commande;
    }

    /**
     * @return mixed
     */
    public function getemail()
    {
        return $this->email;
    }

    /**
     * @param mixed $mail
     */
    public function setemail($email)
    {
        $this->email = $email;
    }

    /**
     * @return mixed
     */
    public function getetat()
    {
        return $this->etat_com;
    }

    /**
     * @param mixed $password
     */
    public function setetat($etat_com)
    {
        $this->etat_com = $etat_com;
    }

    /**
     * @return mixed
     */
    public function getdate()
    {
        return $this->date_emission;
    }

    /**
     * @param mixed $nom
     */
    public function setdate($date_emission)
    {
        $this->date_emission = $date_emission;
    }

    /**
     * @return mixed
     */
    public function getprix()
    {
        return $this->prix;
    }

    /**
     * @param mixed $prenom
     */
    public function setprix($prix)
    {
        $this->prix = $prix;
    }

    /**
     * @return mixed
     */
    
   



}

?>