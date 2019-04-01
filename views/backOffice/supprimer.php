<?PHP
include "../../core/evenementC.php";
$evenementC=new EvenementC();


	echo $_GET["name"];
	
	$evenementC->supprimerEvenement($_GET["name"]);
	header('Location: table-data-table.php');


?>