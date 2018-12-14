<?php
$mdpmodul='jpoMMIblois';
if(isset($_POST['entrer']))
{
  $mdpmodul='jpoMMIblois';
  $mdp=$_POST['mdp'];
  if($mdpmodul==$mdp)
  {
    header('Location: inscription.php');
    echo "marche";
  }
  else {
    echo "mauvais mot de passe";
  }
}


?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <form class="" action="" method="post">
      <input type="text" name="mdp" value="" placeholder="Mot de passe...">
      <input type="submit" name="entrer" value="enter">
    </form>
  </body>
</html>
