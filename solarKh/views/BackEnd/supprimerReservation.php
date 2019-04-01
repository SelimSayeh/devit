<?PHP
include "../../core/reservationR.php";
$reservationR=new ReservationR();
if (isset($_POST["nom"])){
	$reservationR->supprimerReservation($_POST["nom"]);
	header('Location: table-data-table.php');
}

?>