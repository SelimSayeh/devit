<?PHP
class Type{
    private $cin;
	private $nom;
	private $email;
	private $tel;
	private $nbPeople;
    private $date;
    private $event;
	function __construct($cin,$nom,$email,$tel,$nbPeople,$date,$event){
        $this->cin=$cin;
        $this->nom=$nom;
		$this->email=$email;
		$this->tel=$tel;
        $this->nbPeople=$nbPeople;
        $this->date=$date;
		$this->event=$event;
	}
    
    function getCin(){
		return $this->cin;
    }
    
	function getNom(){
		return $this->nom;
	}
	function getEmail(){
		return $this->email;
	}
	function getTel(){
		return $this->tel;
	}
	function getNbPeople(){
		return $this->nbPeople;
	}
	function getDate(){
		return $this->date;
    }
    function getEvent(){
		return $this->event;
    }
    
	function setCin($cin){
		$this->cin=$cin;
	}
	function setNom($nom){
		$this->nom=$nom;
	}
	function setEmail($email){
		$this->email=$email;
	}
	function setTel($tel){
		$this->tel=$tel;
    }
    function setNbPeople($nbPeople){
		$this->nbPeople=$nbPeople;
	}
	function setDate($date){
		$this->date=$date;
    }
    function setEvent($event){
		$this->event=$event;
	}
	
}

?>