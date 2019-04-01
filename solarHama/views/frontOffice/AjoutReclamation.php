<?PHP
   include "../../entities/reclamation.php";
    include "../../core/reclamationC.php";

if (isset($_POST['nom']) and isset($_POST['prenom']) and isset($_POST['ville']) and isset($_POST['mail']) and isset($_POST['tel']) and isset($_POST['sexe'])and isset($_POST['age'])and isset($_POST['q1'])and isset($_POST['q2']) and isset($_POST['q3'])and isset($_POST['q4'])and isset($_POST['q5'])){

$reclamation=new reclamation($_POST['nom'],$_POST['prenom'],$_POST['ville'],$_POST['mail'],$_POST['tel'],$_POST['sexe'],$_POST['age'],$_POST['q1'],$_POST['q2'],$_POST['q3'],$_POST['q4'],$_POST['q5']);
//Partie2
/*
var_dump($employe1);
}
*/
//Partie3
$reclamation1C=new reclamationC();
$reclamation1C->ajouterReclamation($reclamation);
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
header('Location:create.php');
  
}else{
    echo "vérifier les champs";
}
//*/

?>