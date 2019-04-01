<?PHP
   include "../../entities/avis.php";
    include "../../core/avisC.php";

if ( (isset($_POST['nom']) and isset($_POST['prenom']) and isset($_POST['ville']) and isset($_POST['mail']) and isset($_POST['tel']) and isset($_POST['avis'])))
{
$avis=new avis($_POST['nom'],$_POST['prenom'],$_POST['ville'],$_POST['mail'],$_POST['tel'],$_POST['avis']);
//Partie2
/*
var_dump($employe1);
}
*/
//Partie3
$avis1C=new avisC();
$avis1C->ajouterAvis($avis);
/*session_start();
$_SESSION['date'] = $_POST['date'];
$_SESSION["nom"] = $_POST['nom'];
$_SESSION["prenom"] = $_POST['prenom'];
$_SESSION["sexe"] = $_POST['sexe'];
$_SESSION["telephone"] = $_POST['telephone'];
$_SESSION["email"] = $_POST['email'];
$_SESSION["ville"] = $_POST['ville'];
$_SESSION["codep"] = $_POST['codep'];
*/  
header('Location:create2.php');
  
}else{
    echo "vérifier les champs";
}
//*/

?>