<?PHP
include "../../entities/type.php";
include "../../core/typeC.php";

if (isset($_POST['cin']) and isset($_POST['nom']) and isset($_POST['email']) and isset($_POST['tel']) and isset($_POST['nbPeople']) and isset($_POST['date']) and isset($_POST['event']) ){
$type1=new Type($_POST['cin'],$_POST['nom'],$_POST['email'],$_POST['tel'],$_POST['nbPeople'],$_POST['date'],$_POST['event']);
//Partie2
/*
var_dump($employe1);
}
*/
//Partie3
$type1C=new TypeC();
$type1C->ajouterType($type1);
header('Location: book-table-type.html');
	
}else{
	echo "vérifier les champs";
}
//*/

?>