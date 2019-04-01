<?PHP
class avis{
	private $nom;
	private $prenom;
	private $ville;
	private $mail;
    private $tel;
    private $avis;
   function __construct($nom,$prenom,$ville,$mail,$tel,$avis)
   {
		$this->nom=$nom;
		$this->prenom=$prenom;
		$this->ville=$ville;
		$this->mail=$mail;
		$this->tel=$tel;
        $this->avis=$avis;
      }
	
	function getNom(){
		return $this->nom;
	}
	function getPrenom(){
		return $this->prenom;
	}
	
	function getVille(){
		return $this->ville;
	}
	
	function getEmail(){
		return $this->mail;
	}
	function getTel(){
		return $this->tel;
	}
	function getAvis(){
		return $this->avis;
	}
	
    function setNom($nom){
		$this->nom=$nom;
	}
	function setPrenom($prenom){
		$this->prenom=$prenom;
	}
     function setVille($ville){
		$this->ville=$ville;
	}
	function setEmail($mail){
		$this->mail=$mail;
	}
	function setTel($tel){
		$this->tel=$tel;
	}
	function setAvis($avis){
		$this->avis=$avis;
    }
    
  }


?>