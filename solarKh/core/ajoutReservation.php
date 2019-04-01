<?PHP
include "../entities/reservation.php";
include_once "reservationR.php";

if (isset($_POST['nom']) and isset($_POST['email']) and isset($_POST['tel']) and isset($_POST['nbPeople']) and isset($_POST['date']) and isset($_POST['event'])){
$reservation1=new Reservation($_POST['nom'],$_POST['email'],$_POST['tel'],$_POST['nbPeople'],$_POST['date'],$_POST['event']);
//Partie2
/*
var_dump($employe1);
}
*/
//Partie3
$reservation1C=new ReservationR();
$reservation1C->ajouterReservation($reservation1);
header('Location: ../views/FrontEnd/book-table.html');
	
}else{
	echo "vérifier les champs";
}
//*/

?>