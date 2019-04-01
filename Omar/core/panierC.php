<?php

include "config.php";
class panierC
{
   function ajouterPanier($panier){
        $sql="insert into panier (code_panier,nbr_produits,total) values (:code_panier,:nbr_produits,:total)";
        $db = config::getConnexion();
        try{
        $req=$db->prepare($sql);

        $code_panier=$panier->getcode();
        $nbr_produits=$panier->nbr_produits();
        $total=$panier->gettotal();
        
        
        $req->bindValue(':code_panier',$code_panier);
        $req->bindValue('nbr_produits',$nbr_produits);
        $req->bindValue(':total',$total);
        
        
            $req->execute();
          
        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }
        
    }

   function afficherPanier(){
        //$sql="SElECT * From employe e inner join formationphp.employe a on e.cin= a.cin";
        $sql="SElECT * From panier";
        $db = config::getConnexion();
        try{
        $liste=$db->query($sql);
        return $liste;
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        } 
        }  

    function supprimerPanier($code_panier){
        $sql="DELETE FROM panier where code_panier= :code_panier";
        $db = config::getConnexion();
        $req=$db->prepare($sql);
        $req->bindValue(':code_panier',$code_panier);
        try{
            $req->execute();
           // header('Location: index.php');
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
    }


    function modifierCommande($panier,$code_panier){
        $sql="UPDATE panier SET code_panier=:code_panier,nbr_produits=:nbr_produits,total=:total WHERE code_produit=:code_produit";
        
        $db = config::getConnexion();
        //$db->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
try{        
        $req=$db->prepare($sql);
        $code_produit=$panier->getcode();
        $total=$panier->gettotal();
        
        
        $datas = array( ':code_panier'=>$code_panier, ':nbr_produits'=>$nbr_produits,':total'=>$total);
        $req->bindValue(':code_panier',$code_panier);
        $req->bindValue(':nbr_produits',$nbr_produits);
        $req->bindValue(':total',$total);
        
        
        
            $s=$req->execute();
            
           // header('Location: index.php');
        }
        catch (Exception $e){
            echo " Erreur ! ".$e->getMessage();
   echo " Les datas : " ;
  print_r($datas);
        }
        
    }

    function recupererCommande($code_panier){
        $sql="SELECT * from panier where code_panier=$code_panier";
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

