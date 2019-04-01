<?PHP
include "evenementC.php";
$evenementC=new EvenementC();
if (isset($_POST["ID"])){
	$evenementC->supprimerEvenement($_POST["ID"]);
	header('Location: table-data-table.php');
}

?>