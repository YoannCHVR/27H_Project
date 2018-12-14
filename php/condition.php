<?php
if(!empty($_POST['valider']))
{

      $date= date("d-m-Y")." ".date("H:i");
      if(!empty($_POST['nom']))
      {
        $nom=htmlspecialchars($_POST['nom']);
        if(!empty($_POST['prenom']))
        {
          $prenom=htmlspecialchars($_POST['prenom']);
          if(!empty($_POST['mail']))
          {
            $mail=htmlspecialchars($_POST['mail']);
            if(!empty($_POST['mailconf']))
            {
              $mailconf=htmlspecialchars($_POST['mailconf']);
              if ($mail==$mailconf) {


                  if(!empty($_POST['mdp']))
                  {

                    $mdp=sha1($_POST['mdp']);
                      if (!empty($_POST['mdpconf'])) {
                        $mdpconf=sha1($_POST['mdpconf']);

                        if ($mdp==$mdpconf)
                        {

                          if(!empty($_POST['formation']))
                          {
                            $formation=htmlspecialchars($_POST['formation']);
                            if(!empty($_POST['reservation']))
                            {
                              $reservation=$_POST['reservation'];
                              if(!empty($_POST['groupe']))
                              {
                                $groupe=$_POST['groupe'];
                                if(!empty($_POST['present']))
                                {
                                  $present=$_POST['present'];

                                  $requser = $bd->prepare("SELECT * FROM profil  WHERE mail = ? ");
                                  $requser -> execute(array($mail));
                                  $userexist = $requser->rowCount();

                                  $requdate = $bd->prepare("SELECT * FROM profil  WHERE reservation = ? and groupe = ?");
                                  $requdate -> execute(array($reservation,$groupe));
                                  $dateexist = $requdate->rowCount();

                                  if ((($groupe=="MMI1A" || $groupe=="MMI1B" || $groupe=="MMI1C" || $groupe=="MMI1D")&& $dateexist==0)||($groupe=='MMI1E' && $dateexist<2)) {



                                      if ($userexist==0)
                                      {

                                        $message='
                                          Bonjour'.$nom.' '.$prenom.'<br><p>Ci-joint vous trouverz le lien de confirmation de compte réalisé lors des portes ouvertes</p><br>
                                          <a href="http://yoannchevessier.fr/confirmation.php?hash='.md5($mdp).'&mail='.$mail.'"> </a>';
                                        mail($mail, "JPO Blois", $message);
                                        include('php/insertion.php');
                                          header('Location: ../connexion');
                                      }
                                      else {
                                        $erreur="compte déja existant";
                                      }
                                  }
                                  else {
                                    $erreur="cette date est deja reservé pour le groupe:".$groupe;
                                  }

                                }
                                else {
                                  $erreur="veuillez renseigner le champ de présence";
                                }
                              }
                              else {
                                $erreur="veuillez renseigner votre groupe";
                              }
                            }
                            else {
                              $erreur="veuillez renseigner votre date de reservation";
                            }
                          }
                          else {
                            $erreur="veuillez renseigner votre formation";
                          }
                        }
                        else {
                          $erreur="vos mots de passe ne correspondent pas";
                        }
                      }
                      else {
                        $erreur="veuillez renseigner un mot de passe de confirmation";
                      }
                    }
                  else {
                    $erreur="veuillez renseigner un mot de passe";
                  }
              }
              else {
                $erreur="vos emails de passe ne correspondent pas";
              }
            }
            else {
              $erreur="veuillez renseigner un email de confirmation";
            }
          }
          else {
            $erreur="veuillez renseigner un email";
          }
        }
        else {
          $erreur="veuillez renseigner votre prenom";
        }
      }
      else {
        $erreur="veuillez renseigner votre nom";
      }
    }
  ?>
