<?PHP
include "../../entities/dj.php";
include "../../core/djC.php";

if (isset($_POST['idj']) and isset($_POST['nomj']) and isset($_POST['mail']) and isset($_POST['tele'])){
$dj1=new Dj($_POST['idj'],$_POST['nomj'],$_POST['mail'],$_POST['tele']);
//Partie2
/*
var_dump($employe1);
}
*/
//Partie3
$dj1C=new DjC();
$dj1C->ajouterDj($dj1);
header('Location: table2-data-table2.php');
	
}else{
	echo "vérifier les champs";
}
//*/

?>