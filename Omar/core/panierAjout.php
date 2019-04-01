<?PHP
   include "../../entities/panier.php";
    include "../../core/panierC.php";

if (isset($_POST['code_panier']) and isset($_POST['nbr_produits']) and isset($_POST['total']) ){

$panier1=new User($_POST['code_panier'],$_POST['nbr_produits'],$_POST['total']);
//Partie2
/*
var_dump($employe1);
}
*/
//Partie3
$panier1C=new panierC();
$panier1C->ajouterPanier($panier1);
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