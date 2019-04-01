<?PHP
   include "../../entities/commande.php";
    include "../../core/commandeC.php";

if (isset($_POST['email']) and isset($_POST['etat_com']) and isset($_POST['date_emission']) and isset($_POST['prix']) and isset($_POST['id_commande'])){

$commande1=new User(null,$_POST['email'],$_POST['etat_com'],$_POST['date_emission'],$_POST['prix'],$_POST['id_commande']);
//Partie2
/*
var_dump($employe1);
}
*/
//Partie3
$commande1C=new commandeC();
$commande1C->ajoutercommande($commande1);
/*session_start();
$_SESSION['date_emission'] = $_POST['date_emission'];
$_SESSION["prix"] = $_POST['prix'];
$_SESSION["email"] = $_POST['email'];
$_SESSION["etat_com"] = $_POST['etat_com'];
$_SESSION["id_commande"] = $_POST['id_commande'];*/

header('Location:profile.php');
    
}else{
    echo "vérifier les champs";
}
//*/

?>