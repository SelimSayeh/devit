<?PHP
include "../../core/avisC.php";
$avisC=new avisC();

    echo $_POST["tel"];
	
	$avisC->supprimerAvis($_POST["tel"]);
	header('Location: table-data-table2.php');


?>