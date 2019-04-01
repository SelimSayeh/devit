<?PHP
include "../core/avisC.php";
$avisC=new reclamationC();
if (isset($_POST["id"])){
	$employeC->supprimerReclamation($_POST["id"]);
	header('Location: create2.php');
}

?>