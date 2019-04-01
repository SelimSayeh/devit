<?PHP
class Employe{
	private $cin;
	private $nom;
	private $prenom;
	private $tarifHoraire;
	private $nbHeures;
	function __construct($cin,$nom,$prenom,$tarif,$nb){
		$this->cin=$cin;
		$this->nom=$nom;
		$this->prenom=$prenom;
		$this->tarifHoraire=$tarif;
		$this->nbHeures=$nb;
	}
	
	function getCin(){
		return $this->cin;
	}
	function getNom(){
		return $this->nom;
	}
	function getPrenom(){
		return $this->prenom;
	}
	function getNbHeures(){
		return $this->nbHeures;
	}
	function getTarifHoraire(){
		return $this->tarifHoraire;
	}

	function setNom($nom){
		$this->nom=$nom;
	}
	function setPrenom($prenom){
		$this->prenom;
	}
	function setNbHeures($nbHeures){
		$this->nbHeures=$nbHeures;
	}
	function setTarifHoraire($tarifHoraire){
		$this->tarifHoraire=$tarifHoraire;
	}
	
}

?>