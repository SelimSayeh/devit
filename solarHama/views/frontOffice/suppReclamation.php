<?PHP
include "../core/reclamationC.php";
$reclamationC=new reclamationC();

    echo $_POST["tel"];
	
	$reclamationC->supprimerReclamation($_POST["tel"]);
	header('Location: table-data-table.php');


?>