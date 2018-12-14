<?php

    $req= $bd->prepare('INSERT INTO profil( date, nom, prenom, mail, mdp, formation, reservation, groupe, present)
    VALUES(:date, :nom, :prenom, :mail, :mdp, :formation, :reservation, :groupe, :present)');

$req->execute(array(
    'date' => $date,
    'nom' => $nom,
    'prenom' => $prenom,
    'mail'=> $mail,
    'mdp' => $mdp,
    'formation' => $formation,
    'reservation' => $reservation,
    'groupe' => $groupe,
    'present' => $present
));


 ?>
