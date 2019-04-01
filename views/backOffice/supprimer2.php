<?PHP
include "../../core/djC.php";
$djC=new DjC();


	echo $_POST["nomm"];
	
	$djC->supprimerDj($_POST["nomm"]);
	header('Location: table2-data-table2.php');


?>