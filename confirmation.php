<?php
if (isset($_GET['hash']) AND !empty($_GET['hash']) AND isset($_GET['mail']) AND !empty($_GET['mail'])) {
  $mail=$_GET['mail'];
  $hash=$_GET['hash'];
  $bd = new PDO('mysql:host=yoannchebijpo.mysql.db;dbname=yoannchebijpo;charset=utf8', 'yoannchebijpo', 'Pokemon37');
  $requser = $bd -> prepare("SELECT mdp FROM profil WHERE mail = ? ");
  $requser->execute(array($mail));

  $userexist=$requser->rowCount();
  if ($userexist==1) {
    $user=$requser->fetch();
    if ($hash==md5($user['mdp']))
    {
      $requser = $bd -> prepare("UPDATE profil SET confirmation=? WHERE mail=?");
      $requser->execute(array(1,$mail));
      echo "<h1>Votre compte a bien été activé ! </h1> <a href=connexion.php>Vous pouvez vous connectez</a>";
    }

  }
  else {
    echo "l'utilisateur n'existe pas !";
  }
}


?>
