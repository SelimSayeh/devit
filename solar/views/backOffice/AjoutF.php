<?PHP
   include "../../entities/fidelite.php";
    include "../../core/fideliteC.php";




if (isset($_POST['date']) and isset($_POST['Cause'])  and isset($_POST['ptsF']) ){

$fidelite=new Fidelite(null,$_POST['date'],$_POST['Cause'],$_POST['Commentaire'],$_POST['ptsF']);
//Partie2
/*
var_dump($employe1);
}
*/
//Partie3
$fidelite1C=new fideliteC();
$fidelite1C->addCarte($fidelite);
/*session_start();
$_SESSION['date'] = $_POST['date'];
$_SESSION["nom"] = $_POST['nom'];
$_SESSION["prenom"] = $_POST['prenom'];
$_SESSION["sexe"] = $_POST['sexe'];
$_SESSION["telephone"] = $_POST['telephone'];
$_SESSION["email"] = $_POST['email'];
$_SESSION["ville"] = $_POST['ville'];
$_SESSION["codep"] = $_POST['codep'];
$_SESSION["password"] = $_POST['password'];
$_SESSION["rue"] = $_POST['rue'];

header('Location:profile.php');
  */
  header('Location: table-data-table2.php');  
}else{
    echo "vérifier les champs";
}
//*/
?>