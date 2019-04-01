<?PHP
include "../../core/typeC.php";
$typeT=new TypeC();
if (isset($_POST["cin"])){
	$typeT->supprimerType($_POST["cin"]);
	header('Location: table-data-table2.php');
}

?>