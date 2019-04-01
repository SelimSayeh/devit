<?PHP
   include "../../entities/commande.php";
   include "../../core/commandeC.php";

if (isset($_POST['date_emission']) and isset($_POST['etat_com']) and isset($_POST['email']) and isset($_POST['prix'])){

$commande1=new commande($_POST['date_emission'],$_POST['etat_com'],$_POST['email'],$_POST['prix']);
//Partie2
/*
var_dump($employe1);
}
*/
//Partie3
$commande1C=new commandeC();
$commande1C->ajouterCommande($commande1);
/*session_start();
$_SESSION['date_emission'] = $_POST['date_emission'];
$_SESSION["prix"] = $_POST['prix'];
$_SESSION["email"] = $_POST['email'];
$_SESSION["etat_com"] = $_POST['etat_com'];
$_SESSION["id_commande"] = $_POST['id_commande'];*/

header('Location: form-validation.html');
    
}else{
    echo "vérifier les champs";
}
//*/

?>