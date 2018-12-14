<?php
session_start();
$bd = new PDO('mysql:host=yoannchebijpo.mysql.db;dbname=yoannchebijpo;charset=utf8', 'yoannchebijpo', 'Pokemon37');

if (!empty($_GET['id']) AND $_GET['id']>0 )
{
 $getid = intval($_GET['id']);
 $requser = $bd -> prepare('SELECT * FROM profil where id = ?');
 $requser -> execute(array($getid));
 $userinfo = $requser -> fetch();

 if (!empty($_POST['reinscription'])) {
   $requinsc= $bd -> prepare("UPDATE profil SET reservation=?,reinscription=? WHERE id=?");
   $requinsc->execute(array($_POST['reservation'],1,$getid));
   echo "la nouvelle date à bien été enregistrer au ".$_POST['reservation'];
 }
}
else {
  header("Location: connexion.php?");
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
<?php
      if (isset($_SESSION['id']) AND $userinfo['id']==$_SESSION['id'])
      {
        $suppr=$userinfo['supprime'];
        $reinscription=$userinfo['reinscription'];
      ?>
<div class="align-center">
    <h1>MMI BLOIS</h1>
    <div class="form">
        <h2>Informations personnelles</h2>
      <p><?php echo $userinfo['nom']." ".$userinfo['prenom']; ?></p>
      <p><?php echo $userinfo['mail']; ?></p>
        <h2>Journée Découverte</h2>
      <p>Date : <?php echo $userinfo['reservation']; ?></p>
      <p style="margin-bottom: 30px;">Groupe : <?php echo $userinfo['groupe']; ?></p>
      <?php
        if ($reinscription==0) {
          echo '<form class="" action="" method="post">
          <p style="margin-bottom: 5px;">Attention, vous n\'avez le droit qu\'à un changement de jour pour la journée découverte :</p>
            <input type="date" name="reservation" max="2018-04-20" min="2018-03-12" value="">
            <input type="submit" name="reinscription" value="changer de jour">
          </form>';
        }
        if ($suppr==0) {
          $_SESSION['id'] = $userinfo['id'];
          echo '<div class="bottom"><a href="php/suppr.php?id='.$_SESSION['id'].'">Se désinscrire</a>';
        }
      ?>
      <a href="deconnexion.php">Déconnexion</a>
      <?php }
      else {?>
        <a href="connexion.php">Connexion</a></div>
        <?php
      }
      ?>
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
