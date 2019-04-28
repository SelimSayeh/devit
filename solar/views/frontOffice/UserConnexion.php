<?php
    session_start();
   include "../../entities/User.php";
    include "../../core/UserC.php";


    $uC=new UserC();
    $resultat= $uC->login($_POST['email'],$_POST['password']);
 
    if(empty($resultat))
        echo "<script type='text/javascript'>document.location.replace('login.php');</script>";
    else {
    foreach ($resultat as $x) {
         

           $_SESSION['id'] = $x['id'];
           $_SESSION['nom'] = $x['nom'];
           $_SESSION['prenom'] = $x['prenom'];
           $_SESSION['email'] = $x['email'];
           $_SESSION['password'] = $x['password'];

           $_SESSION['date'] = $x['date'];
           $_SESSION['sexe'] = $x['sexe'];
           $_SESSION['rue'] = $x['rue'];
           $_SESSION['ville'] = $x['ville'];
           $_SESSION['codep'] = $x['codep'];
           $_SESSION['telephone'] = $x['telephone'];
          
           if ($x['email'] != 'admin@admin.com')
               echo "<script type='text/javascript'>document.location.replace('profile.php');</script>";
           else
               echo "<script type='text/javascript'>document.location.replace('../back/AffecterF.php');</script>";


       }
   }




?>