<?PHP
include "../../core/fideliteC.php";
$fideliteC=new fideliteC();

echo $_POST["id"];

	$fideliteC->SupprimerF($_POST["id"]);
	header('Location: afficherF.php');


?>