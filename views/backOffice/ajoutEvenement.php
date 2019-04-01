<?PHP
include "../../entities/evenement.php";
include "../../core/evenementC.php";

if (isset($_POST['id']) and isset($_POST['nomv']) and isset($_POST['date']) and isset($_POST['prix'])){
$evenement1=new Evenement($_POST['id'],$_POST['nomv'],$_POST['date'],$_POST['prix']);
//Partie2
/*
var_dump($employe1);
}
*/
//Partie3
$evenement1C=new EvenementC();
$evenement1C->ajouterEvenement($evenement1);
header('Location: table-data-table.php');
	
}else{
	echo "vérifier les champs";
}
//*/

?>