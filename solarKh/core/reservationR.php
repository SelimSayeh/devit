<?PHP
include_once "C:/wamp/www/config.php";
class ReservationR {
	function ajouterReservation($reservation){
		$sql="insert into reservation (nom,email,tel,nbPeople,date,event) values (:nom,:email,:tel,:nbPeople,:date,:event)";
		$db = config::getConnexion();
		try{
        $req=$db->prepare($sql);

        $nom=$reservation->getNom();
        $email=$reservation->getEmail();
        $tel=$reservation->getTel();
        $nbPeople=$reservation->getNbPeople();
        $date=$reservation->getDate();
        $event=$reservation->getEvent();
		$req->bindValue(':nom',$nom);
		$req->bindValue(':email',$email);
		$req->bindValue(':tel',$tel);
		$req->bindValue(':nbPeople',$nbPeople);
        $req->bindValue(':date',$date);
        $req->bindValue(':event',$event);
		
            $req->execute();
          
        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }
		
    }
    
    function afficherReservation(){
		//$sql="SElECT * From employe e inner join formationphp.employe a on e.cin= a.cin";
		$sql="SElECT * FROM reservation";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
    }

    function trierReservation(){
		//$sql="SElECT * From employe e inner join formationphp.employe a on e.cin= a.cin";
		$sql="SElECT * FROM reservation ORDER BY nbPeople";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
    }

    function supprimerReservation($nom){
		$sql="DELETE FROM reservation where nom= :nom";
		$db = config::getConnexion();
        $req=$db->prepare($sql);
		$req->bindValue(':nom',$nom);
		try{
            $req->execute();
           // header('Location: index.php');
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}

    function modifierReservation($reservation,$nom){
		$sql='UPDATE reservation SET email=:email,
                                     tel=:tel,
                                     nbPeople=:nbPeople,
                                     date=:date,
                                     event=:event
                                     WHERE nom=:nom';
		
		$db = config::getConnexion();
		//$db->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
try{		
        $req=$db->prepare($sql);
		$nom_in=$nom;
        $email=$reservation->getEmail();
        $tel=$reservation->getTel();
        $nbPeople=$reservation->getNbPeople();
        $date=$reservation->getDate();
        $event=$reservation->getEvent();
		$datas = array(':nom'=>$nom_in,':email'=>$email,':tel'=>$tel,':nbPeople'=>$nbPeople, ':date'=>$date, ':event'=>$event);
		$req->bindValue(':nom',$nom_in);
		$req->bindValue(':email',$email);
		$req->bindValue(':tel',$tel);
		$req->bindValue(':nbPeople',$nbPeople);
		$req->bindValue(':date',$date);
		$req->bindValue(':event',$event);
		
		
            $s=$req->execute();
			
           // header('Location: index.php');
        }
        catch (Exception $e){
            echo " Erreur ! ".$e->getMessage();
   echo " Les datas : " ;
  //print_r($datas);
        }
		
    }

   public function recupererReservation($nom){
		$sql="SELECT * from reservation where nom='".$nom."'";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
    }
    
    public function selectLivraison($nom)
    {
        $sql = "SELECT * FROM reservation WHERE `nom`=" . $nom;
        try {
            $q = $this->db->query($sql);
            return $q;
        } catch (Exception $e) {
            die('Erreur: ' . $e->getMessage());
        }
    }

    public function updateLivraison($d, $nom)
    {
        echo "updating Livraison...";
        $sql = "UPDATE `reservation` SET `nom`=:nom,`email`=:email,`tel`=:tel,`nbPeople`=:nbPeople,`date`=:date,`event`=:event WHERE `nom`=" . $nom;
        // $sql = "UPDATE document SET (reference=:reference,nom=:nom,date_creation=:date_creation,prix=:prix,auteur=:auteur,nbPages=:nbPages,duree=:duree,capacite=:capacite,type=:type ) WHERE reference=$ref";
        $q = $this->db->prepare($sql);
        $nom = $d->getNom();
        $email = $d->getEmail();
        $tel = $d->getTel();
        $nbPeople = $d->getPeople();
        $date = $d->getDate();
        $event = $d->getEvent();
		
		$q->bindValue(':nom', $nom);
        $q->bindValue(':email', $email);
        $q->bindValue(':tel', $tel);
        $q->bindValue(':nbPeople', $nbPeople);
        $q->bindValue(':date', $date);
        $q->bindValue(':event', $event);
        try {            
		    $q->execute();
                header('Location: ../views/FrontEnd/book-table.html');

        } catch (Exception $e) {
            die('Erreur: ' . $e->getMessage());
        }

    }
}
?>