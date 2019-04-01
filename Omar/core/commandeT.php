<?php

include "config.php";
class commandeT
{
   function ajouterCommande($commande){
        $sql="insert into commandes (id_commande,date_emission,etat_com,email,prix) values (:id_commande,:date_emission,:etat_com,:email,:prix)";
        $db = config::getConnexion();
        try{
        $req=$db->prepare($sql);

        $id_commande=$commande->getid();
        $prix=$commande->getprix();
        $email=$commande->getemail();
        $date_emission=$commande->getdate();
        $etat_com=$commande->getetat();
        
        $req->bindValue(':id_commande',$id_commande);
        $req->bindValue(':prix',$prix);
        $req->bindValue(':email',$email);
        $req->bindValue(':date_emission',$date_emission);
        $req->bindValue(':etat_com',$etat_com);
        
        
            $req->execute();
          
        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }
        
    }

   function afficherTri(){
        //$sql="SElECT * From employe e inner join formationphp.employe a on e.cin= a.cin";
        $sql="SElECT * From commandes ORDER BY email";
        $db = config::getConnexion();
        try{
        $liste=$db->query($sql);
        return $liste;
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        } 
        }  

    function supprimerCommande($id_commande){
        $sql="DELETE FROM commandes where id_commande= :id_commande";
        $db = config::getConnexion();
        $req=$db->prepare($sql);
        $req->bindValue(':id_commande',$id_commande);
        try{
            $req->execute();
           // header('Location: index.php');
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
    }


    function modifierCommande($commande,$id_commande){
        $sql="UPDATE commandes SET id_commande=:id_commande,email=:email,prix=:prix,date_emission=:date_emission,etat_com=:etat_com WHERE id_commande=:id_commande";
        
        $db = config::getConnexion();
        //$db->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
try{        
        $req=$db->prepare($sql);
        $id_commande=$commande->getid();
        $email=$commande->getemail();
        $date_emission=$commande->getdate();
        $prix=$commande->getprix();
        $etat_com=$commande->getetat();
        
        $datas = array( ':id_commande'=>$id_commande, ':email'=>$email,':prix'=>$prix,':etat_com'=>$etat_com,':date_emission'=>$date_emission);
        $req->bindValue(':id_commande',$id_commande);
        $req->bindValue(':email',$email);
        $req->bindValue(':etat_com',$etat_com);
        $req->bindValue(':prix',$prix);
        $req->bindValue(':date_emission',$date_emission);
        
        
        
            $s=$req->execute();
            
           // header('Location: index.php');
        }
        catch (Exception $e){
            echo " Erreur ! ".$e->getMessage();
   echo " Les datas : " ;
  print_r($datas);
        }
        
    }

    function recupererCommande($id_commande){
        $sql="SELECT * from commandes where id_commande=$id_commande";
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

