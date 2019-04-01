<?PHP
include "../../core/fideliteC.php";
$fideliteC=new fideliteC();

echo $_POST["ptsF"];

	$fideliteC->SupprimerF($_POST["ptsF"]);
	header('Location: table-data-table2.php');


?>