<?php
include('php/connexiondb.php');
include('php/condition.php');
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

        <form class="" action="inscription.php" method="post">
            <label for="nom">Nom</label>
            <input type="text" name="nom" value="<?php if(isset($_POST['nom'])){echo $_POST['nom'];} ?>">
            <label for="prenom">Prénom</label>
            <input type="text" name="prenom" value="<?php if(isset($_POST['prenom'])){echo $_POST['prenom'];} ?>">

            <label for="mail">email</label>
            <input type="mail" name="mail" value="<?php if(isset($_POST['mail'])){echo $_POST['mail'];} ?>">
            <label for="mailconf">Confirmation de l'email</label>
            <input type="mail" name="mailconf" value="<?php if(isset($_POST['mailconf'])){echo $_POST['mailconf'];} ?>">

            <label for="mdp">mot de passe</label>
            <input type="password" name="mdp">
            <label for="mdpconf">Confirmation du mot de passe</label>
            <input type="password" name="mdpconf">

            <label for="formation">formation actuelle</label>
            <select name="formation">
        <option value="Premiere">Première</option>
        <option value="Terminale">Terminale</option>
        <option value="Post-Bac">Post-Bac</option>
      </select>
            <label for="reservation">réservation</label>
            <input type="date" name="reservation" max="2018-04-20" min="2018-03-12" value="<?php if(isset($_POST['reservation'])){echo $_POST['reservation'];} ?>">

            <label for="groupe">groupe</label>
            <select name="groupe">
        <option value="MMI1A">MMI1A</option>
        <option value="MMI1B">MMI1B</option>
        <option value="MMI1C">MMI1C</option>
        <option value="MMI1D">MMI1D</option>
        <option value="MMI1E">MMI1E</option>
      </select>

            <label for="present">présence aux journées portes ouvertes</label>
            <select name="present">
        <option value="Oui">Oui</option>
        <option value="Non">non</option>
      </select>

            <input type="submit" name="valider" value="Valider" style="margin-bottom: 10px;">
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

