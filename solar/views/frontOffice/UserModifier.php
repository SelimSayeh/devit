<?PHP
   include "../../entities/User.php";
    include "../../core/UserC.php";

session_start();
if (isset($_POST['nom']) and isset($_POST['prenom']) and isset($_POST['date']) and isset($_POST['sexe']) and isset($_POST['telephone']) and isset($_POST['rue'])and isset($_POST['ville'])and isset($_POST['codep'])and isset($_POST['email']) and isset($_POST['password'])){


//Partie2
/*
var_dump($employe1);
}
*/
//Partie3
$employe1C=new UserC();

$usera=$employe1C->login($_SESSION["email"],$_SESSION["password"]);
foreach ($usera as $u) {
	
$user=new User( $u['id'],$_POST['nom'],$_POST['prenom'],$_POST['date'],$_POST['sexe'],$_POST['telephone'],$_POST['rue'],$_POST['ville'],$_POST['codep'],$_POST['email'],$_POST['password']);
$employe1C->updateUser($user);
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

}


header('Location:profile.php');
    
}else{
    echo "vérifier les champs";
}
//*/

?>