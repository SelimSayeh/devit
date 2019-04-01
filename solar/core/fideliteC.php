<?php

include "config.php";
class fideliteC
{
     

    public function addCarte($fidelite)
    {
        $conn=config::getConnexion();
        $sql="INSERT INTO `fidelite`(dateCreation,causeAjout,Commentaire,ptsF) VALUES(:dateCreation,:causeAjout,:Commentaire,:ptsF)";
        try{
        $req=$conn->prepare($sql);

         $causeAjout=$fidelite-> getCauseAjout();
        $Commentaire=$fidelite->getCommentaire();
        $dateCreation=$fidelite->getDate();
        $ptsF=$fidelite->getPtsF();
        $req->bindValue(':dateCreation',$dateCreation);
        $req->bindValue(':causeAjout',$causeAjout);
        $req->bindValue(':Commentaire',$Commentaire);
        $req->bindValue(':ptsF',$ptsF);
        
        
        $req->execute();
    }

        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
    }
}


   function afficherF(){
        //$sql="SElECT * From employe e inner join formationphp.employe a on e.cin= a.cin";
        $sql="SElECT * From fidelite";
        $db = config::getConnexion();
        try{
        $liste=$db->query($sql);
        return $liste;
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        } 
        }  

   

    function SupprimerF($ptsF){
        $sql="DELETE FROM fidelite where ptsF=:ptsF";
        $db = config::getConnexion();
        $req=$db->prepare($sql);
        $req->bindValue(':ptsF',$ptsF);
        $req->execute();
       
    }

/*public function updateUser($user)
    {
        $conn=config::getConnexion();
        $del=$conn->prepare("UPDATE `client` SET `nom`=? ,`prenom`=?,`date`=?,`sexe`=?,`telephone`=?,`rue`=?,`ville`=?,`codep`=?,`email`=?,`password`=? WHERE `id`=?");

            $del->execute(array($user->getNom(),$user->getPrenom(),$user->getDate(),$user->getSexe(),$user->getTel(),$user->getRue(),$user->getVille(),$user->getCodep(),$user->getMail(),$user->getPassword(),$user->getId()));
    }

public function login($mail,$password)
    {
        $conn=config::getConnexion();
        $check=$conn->query("Select * from client where email='$mail' AND password='$password' ");
        return $check->fetchAll();
    }



*/
}
?>