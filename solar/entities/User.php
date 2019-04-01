<?php


class User
{

    private $id;
    private $email;
    private $password;
    private $nom;
    private $prenom;
    private $date;
    private $sexe;
    private $tel;
    private $rue;
    private $ville;
    private $codep;


   
    public function __construct($id=null, $nom=null, $prenom=null, $date=null, $sexe=null, $tel=null, $rue=null, $ville=null, $codep=null,$email=null,$password=null)
    {
        $this->id = $id;
        $this->email = $email;
        $this->password = $password;
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->date = $date;
        $this->sexe = $sexe;
        $this->tel = $tel;
        $this->ville = $ville;
        $this->rue=$rue;
        $this->codep=$codep;

    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getMail()
    {
        return $this->email;
    }

    /**
     * @param mixed $mail
     */
    public function setMail($email)
    {
        $this->email = $email;
    }

    /**
     * @return mixed
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * @param mixed $password
     */
    public function setPassword($password)
    {
        $this->password = $password;
    }

    /**
     * @return mixed
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * @param mixed $nom
     */
    public function setNom($nom)
    {
        $this->nom = $nom;
    }

    /**
     * @return mixed
     */
    public function getPrenom()
    {
        return $this->prenom;
    }

    /**
     * @param mixed $prenom
     */
    public function setPrenom($prenom)
    {
        $this->prenom = $prenom;
    }

    /**
     * @return mixed
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * @param mixed $dateNaiss
     */
    public function setDate($date)
    {
        $this->date = $date;
    }

    /**
     * @return mixed
     */


    /**
     * @return mixed
     */
    public function getSexe()
    {
        return $this->sexe;
    }

    /**
     * @param mixed $sexe
     */
    public function setSexe($sexe)
    {
        $this->sexe = $sexe;
    }

    /**
     * @return mixed
     */
    public function getTel()
    {
        return $this->tel;
    }

    /**
     * @param mixed $tel
     */
    public function setTel($tel)
    {
        $this->tel = $tel;
    }

    /**
     * @return mixed
     */
    public function getVille()
    {
        return $this->ville;
    }

   
    public function setVille($ville)
    {
        $this->ville = $ville;
    }

    /**
     * @return mixed
     */
     public function getRue()
    {
        return $this->rue;
    }

    /**
     * @param mixed $adressse
     */
    public function setRue($rue)
    {
        $this->rue = $rue;
    }

     public function getCodep()
    {
        return $this->codep;
    }

    /**
     * @param mixed $adressse
     */
    public function setCodep($codep)
    {
        $this->codep = $codep;
    }
   



}

?>