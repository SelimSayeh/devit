<?PHP
class reclamation{
	private $nom;
	private $prenom;
	private $ville;
	private $mail;
    private $tel;
    private $sexe;
    private $age;
    private $q1;
    private $q2;
    private $q3;
    private $q4;
    private $q5;
	function __construct($nom,$prenom,$ville,$tel,$mail,$sexe,$age,$q1,$q2,$q3,$q4,$q5){
		$this->nom=$nom;
		$this->prenom=$prenom;
		$this->ville=$ville;
		$this->tel=$tel;
		$this->mail=$mail;
		
        $this->sexe=$sexe;
        $this->age=$age;
        $this->q1=$q1;
        $this->q2=$q2;
        $this->q3=$q3;
        $this->q4=$q4;
        $this->q5=$q5;
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
	function getAge(){
		return $this->age;
	}
	function getSexe(){
		return $this->sexe;
	}
	function getQ1(){
		return $this->q1;
    }
    function getQ2(){
		return $this->q2;
	}
    function getQ3(){
		return $this->q3;
	}
	
	function getQ4(){
		return $this->q4;
	}
    function getQ5(){
		return $this->q5;
	}

	function setNom($nom){
		$this->nom=$nom;
	}
	function setEmail($mail){
		$this->email=$mail;
	}
	function setTel($tel){
		$this->tel=$tel;
	}
	function setAge($age){
		$this->age=$age;
    }
    function setPrenom($prenom){
		$this->prenom=$prenom;
	}
    function setSexe($sexe){
		$this->sexe=$sexe;
	}
	function setVille($ville){
		$this->ville=$ville;
	}
	function setQ1($q1){
		$this->q1=$q1;
	}
	function setQ2($q2){
		$this->q2=$q2;
	}
	function setQ3($q3){
		$this->q3=$q3;
	}
   function setQ4($q4){
		$this->q4=$q4;
	}
  function setQ5($q5){
		$this->q5=$q5;
	}


}


?>