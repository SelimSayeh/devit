<?PHP
include "config.php";
class EvenementC {

	function calculerSalaire($employe){
		echo $employe->getNbHeures() * $employe->getTarifHoraire();
	}
	function ajouterEvenement($evenement){
		$sql="insert into evenementn (ID,NOMV,DATE,PRIX) values (:id,:nomv,:date,:prix)";
		$db = config::getConnexion();
		try{
        $req=$db->prepare($sql);
		
        $id=$evenement->getID();
        $nomv=$evenement->getNOMV();
        $date=$evenement->getDATE();
        $prix=$evenement->getPRIX();
       
		$req->bindValue(':id',$id);
		$req->bindValue(':nomv',$nomv);
		$req->bindValue(':date',$date);
		$req->bindValue(':prix',$prix);
		
		
            $req->execute();
           
        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }
		
	}
	
	function afficherEvenement(){
		//$sql="SElECT * From employe e inner join formationphp.employe a on e.cin= a.cin";
		$sql="SElECT * From evenementn";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
	}

		function trierEvenement(){
		//$sql="SElECT * From employe e inner join formationphp.employe a on e.cin= a.cin";
		$sql="SElECT * From evenementn ORDER BY DATE";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
	}

	function supprimerEvenement($nomm){
		$sql="DELETE FROM evenementn where NOMV= :nomv";
		$db = config::getConnexion();
        $req=$db->prepare($sql);
		$req->bindValue(':nomv',$nomm);
		$req->execute();
		
	}
	/*function modifierEvenement($evenement,$id){
		$sql="UPDATE evenementn SET id=:ID, nomv=:NOMV,prenom=:prenom,nbHeures=:nbH,tarifHoraire=:tarifH WHERE id=:ID";
		
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
	
	function rechercherEvenement($id){
		$sql="SELECT * from evenementn where ID=$id";
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