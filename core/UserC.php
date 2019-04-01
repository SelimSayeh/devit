<?php

include "config.php";
class UserC
{
    public function addUser($user)
    {

       $sql="insert into client(nom,prenom,date,sexe,telephone,rue,ville,codep,email,password)values(:nom,:prenom,:date,:sexe,:telephone,:rue,:ville,:codep,:email,:password)";
        $db = config::getConnexion();
        try{
       $req=$db->prepare($sql);
        
        $email=$user-> getMail();
        $password=$user->getPassword();
        $nom=$user->getNom();
        $prenom=$user->getPrenom();
        $date=$user->getDate();
        $sexe=$user->getSexe();
        $telephone=$user->getTel();
        $ville=$user->getVille();
        $rue=$user->getRue();
        $codep=$user->getCodep();

        $req->bindValue(':nom',$nom);
        $req->bindValue(':prenom',$prenom);
        $req->bindValue(':date',$date);
        $req->bindValue(':sexe',$sexe);
        $req->bindValue(':telephone',$telephone);
        $req->bindValue(':rue',$rue);
        $req->bindValue(':ville',$ville);
        $req->bindValue(':codep',$codep);
        $req->bindValue(':email',$email);
        $req->bindValue(':password',$password);
        
            $req->execute();
           
        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }

    }

   function afficherU(){
        //$sql="SElECT * From employe e inner join formationphp.employe a on e.cin= a.cin";
        $sql="SElECT * From client";
        $db = config::getConnexion();
        try{
        $liste=$db->query($sql);
        return $liste;
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        } 
        }  

   /* public function login($mail,$password)
    {
        $conn=config::getConnexion();
        $check=$conn->query("Select * from Utilisateur where mail='$mail' AND password='$password'");
        return $check->fetchAll();
    }

   

    public function updateUser($user)
    {
        $conn=config::getConnexion();
        $del=$conn->prepare("UPDATE `utilisateur` SET `nom`=?,`prenom`=?,`DateNaissance`=?,`sexe`=?,`Adresse`=?,`telephone`=? WHERE `id`=?");

            $del->execute(array($user->getNom(),$user->getPrenom(),$user->getDateNaiss(),$user->getSexe(),$user->getAdressse(),$user->getTel(),$user->getId()));
    }

*/

}
?>