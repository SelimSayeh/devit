<?php

include "config.php";
class fideliteC
{
     

    public function addCarte($fidelite)
    {
        $conn=config::getConnexion();
        $sql="INSERT INTO `fidelite`(dateCreation,iduser,Commentaire,ptsF) VALUES(:dateCreation,:iduser,:Commentaire,:ptsF)";
        try{
        $req=$conn->prepare($sql);

        $user=$fidelite->getUser();
        $Commentaire=$fidelite->getCommentaire();
        $dateCreation=$fidelite->getDate();
        $ptsF=$fidelite->getPtsF();
        $req->bindValue(':dateCreation',$dateCreation);
        $req->bindValue(':iduser',$user);
        $req->bindValue(':Commentaire',$Commentaire);
        $req->bindValue(':ptsF',$ptsF);
        
        
        $req->execute();
    }

        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
    }
}

   function trierF(){
        //$sql="SElECT * From employe e inner join formationphp.employe a on e.cin= a.cin";
        $sql="SElECT * From fidelite ORDER BY dateCreation";
        $db = config::getConnexion();
        try{
        $liste=$db->query($sql);
        return $liste;
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        } 
        }  

   function afficherF(){
        //$sql="SElECT * From employe e inner join formationphp.employe a on e.cin= a.cin";
        $sql="select c.nom , c.prenom , f.dateCreation , f.Commentaire , f.ptsF , f.idF from fidelite as f inner join client as c where f.iduser=c.id";
        $db = config::getConnexion();
        try{
        $liste=$db->query($sql);
        return $liste;
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        } 
        }  

   

    function SupprimerF($id){
        $sql="DELETE FROM fidelite where idF=:idF";
        $db = config::getConnexion();
        $req=$db->prepare($sql);
        $req->bindValue(':idF',$id);
        $req->execute();
       
    }


      function getusers(){
        $sql="SELECT client.id, client.nom FROM client where client.id not in (select fidelite.iduser from fidelite )";
        $db = config::getConnexion();
        $users=$db->query($sql);
        return $users;
       
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