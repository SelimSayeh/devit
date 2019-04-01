<?PHP
include "../../core/UserC.php";
$UserC=new UserC();
if (isset($_POST["nom"])){
	$UserC->SupprimerU($_POST["nom"]);
	header('Location: table-data-table.php');
}

?>