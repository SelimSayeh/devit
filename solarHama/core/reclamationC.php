<?PHP
include "config.php";
class reclamationC {
	
/*	function calculerSalaire($employe){
		echo $employe->getNbHeures() * $employe->getTarifHoraire();
	}
	*/
	function ajouterReclamation($reclamation){
		$sql="insert into reclamations (nom,prenom,ville,mail,tel,sexe,age,q1,q2,q3,q4,q5) values (:nom, :prenom,:ville,:mail,:tel,:sexe,:age,:q1,:q2,:q3,:q4,:q5)";
		$db = config::getConnexion();
		try{
        $req=$db->prepare($sql);
		$nom=$reclamation->getNom();
        $prenom=$reclamation->getPrenom();
        $ville=$reclamation->getVille();
        $mail=$reclamation->getEmail();
        $tel=$reclamation->getTel();
        $sexe=$reclamation->getSexe();
		$age=$reclamation->getAge();
		$q1=$reclamation->getQ1();
		$q2=$reclamation->getQ2();
		$q3=$reclamation->getQ3();
		$q4=$reclamation->getQ4();
		$q5=$reclamation->getQ5();
		$req->bindValue(':nom',$nom);
		$req->bindValue(':prenom',$prenom);
		$req->bindValue(':ville',$ville);
        $req->bindValue(':mail',$mail);
		$req->bindValue(':tel',$tel);
		$req->bindValue(':sexe',$sexe);
		$req->bindValue(':age',$age);
		$req->bindValue(':q1',$q1);
		$req->bindValue(':q2',$q2);
		$req->bindValue(':q3',$q3);
		$req->bindValue(':q4',$q4);
		$req->bindValue(':q5',$q5);
            $req->execute();
           
        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }
		
	}

		function trierReclamation(){
		//$sql="SElECT * From employe e inner join formationphp.employe a on e.cin= a.cin";
		$sql="SElECT * From reclamations ORDER BY nom";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
	}
	
	function afficherReclamation(){
		//$sql="SElECT * From employe e inner join formationphp.employe a on e.cin= a.cin";
		$sql="SElECT * From reclamations";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
	}

	
	function supprimerReclamation($tel){
		$sql="DELETE FROM reclamations where tel= :tel";
		$db = config::getConnexion();
        $req=$db->prepare($sql);
		$req->bindValue(':tel',$tel);
		    $req->execute();
        }
	
	/*
	function modifierEmploye($employe,$cin){
		$sql="UPDATE employe SET cin=:cinn, nom=:nom,prenom=:prenom,nbHeures=:nbH,tarifHoraire=:tarifH WHERE cin=:cin";
		
		$db = config::getConnexion();
		//$db->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
try{		
        $req=$db->prepare($sql);
		$cinn=$employe->getCin();
        $nom=$employe->getNom();
        $prenom=$employe->getPrenom();
        $nb=$employe->getNbHeures();
        $tarif=$employe->getTarifHoraire();
		$datas = array(':cinn'=>$cinn, ':cin'=>$cin, ':nom'=>$nom,':prenom'=>$prenom,':nbH'=>$nb,':tarifH'=>$tarif);
		$req->bindValue(':cinn',$cinn);
		$req->bindValue(':cin',$cin);
		$req->bindValue(':nom',$nom);
		$req->bindValue(':prenom',$prenom);
		$req->bindValue(':nbH',$nb);
		$req->bindValue(':tarifH',$tarif);
		
		
            $s=$req->execute();
			
           // header('Location: index.php');
        }
        catch (Exception $e){
            echo " Erreur ! ".$e->getMessage();
   echo " Les datas : " ;
  print_r($datas);
        }
		
	}
	function recupererEmploye($cin){
		$sql="SELECT * from employe where cin=$cin";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
	
	function rechercherListeEmployes($tarif){
		$sql="SELECT * from employe where tarifHoraire=$tarif";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
	*/
}

?>