<?PHP
class Dj{
	private $IDJ;
	private $NOMJ;
	private $MAIL;
	private $TELE;
	function __construct($IDJ,$NOMJ,$MAIL,$TELE){
		$this->IDJ=$IDJ;
		$this->NOMJ=$NOMJ;
		$this->MAIL=$MAIL;
		$this->TELE=$TELE;
		
	}
	
	function getIDJ(){
		return $this->IDJ;
	}
	function getNOMJ(){
		return $this->NOMJ;
	}
	function getMAIL(){
		return $this->MAIL;
	}
	function getTELE(){
		return $this->TELE;
	}
	

	function setIDJ($IDJ){
		$this->IDJ=$IDJ;
	}
	function setNOMJ($NOMJ){
		$this->NOMJ;
	}
	function setMAIL($MAIL){
		$this->MAIL=$MAIL;
	}
	function setPRIX($PRIX){
		$this->PRIX=$PRIX;
	}
	
}

?>