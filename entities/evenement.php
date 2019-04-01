<?PHP
class Evenement{
	private $ID;
	private $NOMV;
	private $DATE;
	private $PRIX;
	function __construct($ID,$NOMV,$DATE,$PRIX){
		$this->ID=$ID;
		$this->NOMV=$NOMV;
		$this->DATE=$DATE;
		$this->PRIX=$PRIX;
		
	}
	
	function getID(){
		return $this->ID;
	}
	function getNOMV(){
		return $this->NOMV;
	}
	function getDATE(){
		return $this->DATE;
	}
	function getPRIX(){
		return $this->PRIX;
	}
	

	function setID($ID){
		$this->ID=$ID;
	}
	function setNOMV($NOMV){
		$this->NOMV;
	}
	function setDATE($DATE){
		$this->DATE=$DATE;
	}
	function setPRIX($PRIX){
		$this->PRIX=$PRIX;
	}
	
}

?>