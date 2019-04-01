<?PHP
include "config.php";
class DjC{

	function ajouterDj($djj){
		$sql="insert into dj (IDJ,NOMJ,MAIL,TELE) values (:idj,:nomj,:mail,:tele)";
		$db = config::getConnexion();
		try{
        $req=$db->prepare($sql);
		
        $idj=$djj->getIDJ();
        $nomj=$djj->getNOMJ();
        $mail=$djj->getMAIL();
        $tele=$djj->gettele();
       
		$req->bindValue(':idj',$idj);
		$req->bindValue(':nomj',$nomj);
		$req->bindValue(':mail',$mail);
		$req->bindValue(':tele',$tele);
		
		
            $req->execute();
           
        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }
		
	}
	
	function afficherDj(){
		//$sql="SElECT * From employe e inner join formationphp.employe a on e.cin= a.cin";
		$sql="SElECT * From dj";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
	}
	function supprimerDj($nomm){
		$sql="DELETE FROM dj where NOMJ= :nomj";
		$db = config::getConnexion();
        $req=$db->prepare($sql);
		$req->bindValue(':nomj',$nomm);
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