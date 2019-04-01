<?PHP
include_once "../../config.php";

class TypeC {
	function ajouterType($type){
		$sql="insert into personal (cin,nom,email,tel,nbPeople,date,event) values (:cin,:nom,:email,:tel,:nbPeople,:date,:event)";
		$db = config::getConnexion();
		try{
        $req=$db->prepare($sql);

        $cin=$type->getCin();
        $nom=$type->getNom();
        $email=$type->getEmail();
        $tel=$type->getTel();
        $nbPeople=$type->getNbPeople();
        $date=$type->getDate();
        $event=$type->getEvent();
        $req->bindValue(':cin',$cin);
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
    
    function afficherType(){
		//$sql="SElECT * From employe e inner join formationphp.employe a on e.cin= a.cin";
		$sql="SElECT * FROM personal";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
    }

    function supprimerType($cin){
		$sql="DELETE FROM personal where cin= :cin";
		$db = config::getConnexion();
        $req=$db->prepare($sql);
		$req->bindValue(':cin',$cin);
		try{
            $req->execute();
           // header('Location: index.php');
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
		$sql="UPDATE reservation SET nom=:nom,email=:email,tel=:tel,nbPeople=:nbPeople,date=:date,event=:event WHERE nom=:nom";
		
		$db = config::getConnexion();
		//$db->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
try{		
        $req=$db->prepare($sql);
		$nom=$reservation->getNom();
        $email=$reservation->getEmail();
        $tel=$reservation->getTel();
        $nbPeople=$reservation->getNbPeople();
        $date=$reservation->getDate();
        $event=$reservation->getEvent();
		$datas = array(':nom_in'=>$nom_in, ':nom'=>$nom, ':email'=>$email,':tel'=>$tel,':nbH'=>$nb,':nbPeople'=>$nbPeople, ':date'=>$date, ':event'=>$event);
		$req->bindValue(':nom_in',$nom_in);
		$req->bindValue(':nom',$nom);
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
  print_r($datas);
        }
		
    }

    function recupererReservation($nom){
		$sql="SELECT * from reservation where nom=$nom";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
}
?>