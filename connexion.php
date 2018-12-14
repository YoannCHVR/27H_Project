<?php session_start();

$bd = new PDO('mysql:host=yoannchebijpo.mysql.db;dbname=yoannchebijpo;charset=utf8', 'yoannchebijpo', 'Pokemon37');

if(!empty($_POST['connexion']))
{
  if (!empty($_POST['mail-connexion'])) {

    $mailconnect=htmlspecialchars($_POST['mail-connexion']);

    if (!Empty($_POST['mdp-connexion'])) {
      $mdpconnect=sha1($_POST['mdp-connexion']);
      $requser = $bd->prepare("SELECT * FROM profil  WHERE mail = ? and mdp = ?");
      $requser -> execute(array($mailconnect, $mdpconnect));
      $userexist = $requser->rowCount();

      if ($userexist==1)
      {
        $requconf = $bd->prepare("SELECT confirmation FROM profil WHERE mail = ? ");
        $requconf -> execute(array($mailconnect));
        $confinfo = $requconf -> fetch();

        if($confinfo['confirmation']==1)
        {
          $userinfo= $requser -> fetch();
          $_SESSION['id'] = $userinfo['id'];
          $_SESSION['nom'] =$userinfo['nom'];
          $_SESSION['prenom'] =$userinfo['prenom'];
          $_SESSION['mail'] =$userinfo['mail'];
          $_SESSION['reservation'] =$userinfo['reservation'];
          $_SESSION['groupe'] =$userinfo['groupe'];
          $_SESSION['reinscription'] =$userinfo['reinscription'];
          $_SESSION['supprime'] =$userinfo['supprime'];
          header('Location: profil.php?id='.$_SESSION['id']);
        }
        else {
          $erreur="veuillez confirmer votre compte";
        }
      }
      else
      {
        $erreur="mauvais mail ou mot de passe !";
      }

    }
    else {
      $erreur="entrer un mot de passe";
    }
  }
  else {
    $erreur="entrer une adresse mail";

  }
} else {
    if(!empty($_POST['pasinscrit'])){
        header('Location: inscription.php');
    }
}
?>
<!DOCTYPE html>
<html lang="fr">

<head>

    <meta charset="UTF-8">
    <meta name="description" content="Content_Description">
    <meta name="keywords" content="Content_Keyworks">
    <meta name="author" content="Content_Author">
    <title>PHP</title>
    <link rel="icon" type="image/png" href="" />
    <link rel="stylesheet" href="css/php.css" type="text/css" media="screen">
    <link rel="stylesheet" href="fonts/stylesheet.css">

</head>

<body>

    <div class="align-center">
        <h1>MMI BLOIS</h1>

        <form action="" method="post">
            <label for="adresse-mail">Adresse mail</label>
            <input type="mail" name="mail-connexion" value="<?php if(isset($_POST['mail-connexion'])){echo $_POST['mail-connexion'];} ?>">
            <label for="password">Mot de passe</label>
            <input type="password" name="mdp-connexion" value="">
            <input type="submit" name="connexion" value="connexion">
            <input type="submit" name="pasinscrit" value="Pas encore inscrit" style="margin-bottom: 10px;">
            <?php if(isset($erreur))
                        {
                          echo '<span class="alert">'.$erreur.'</span>';
                        }
                        ?>
        </form>
    </div>
    <!-- \\------------SCRIPT------------// -->

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

    <!-- \\------------CODE JQUERY------------//

    $(document).ready(
        function() {
            //Fonction
        }
    );

    -->

</body>

</html>
