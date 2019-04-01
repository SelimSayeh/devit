<?PHP
include "../../entities/reservation.php";
include "../../core/reservationR.php";
if (isset($_GET['modifier'])){
    $reservation=new Reservation($_GET['nom'],$_POST['email'],$_POST['tel'],$_POST['nbPeople'],$_POST['date'],$_POST['event']);
    $reservationR= new ReservationR;
    $reservationR->modifierReservation($reservation,$_GET['nom']);
	echo $_GET['nom'];
    header('Location: ../BackEnd/table-data-user.php'); 
}
   ?>