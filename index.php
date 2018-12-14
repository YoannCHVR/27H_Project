<?php
$mdpmodul='jpoMMIblois';
if(isset($_POST['entrer']))
{
  $mdpmodul='jpoMMIblois';
  $mdp=$_POST['mdp'];
  if($mdpmodul==$mdp)
  {
    header('Location: connexion.php');
  }
  else {
    $erreur="Mauvais code, veuillez réessayer !";
  }
}


?>

    <!DOCTYPE html>
    <html lang="fr">

    <head>

        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
        <meta name="description" content="Portfolio consacré à Yoann CHEVESSIER, étudiant dans les métiers du multimédia et de l'internet">
        <meta name="keywords" content="Portfolio, Web, Conception, Yoann, CHEVESSIER">
        <meta name="author" content="Yoann CHEVESSIER">
        <link rel="icon" type="image/png" href="svg/logo_2.png" />
        <link rel="stylesheet" href="css/index.css">
        <link rel="stylesheet" href="animation/effects.css">
        <link rel="stylesheet" href="fonts/stylesheet.css">
        <link rel="stylesheet" href="animation/animate.css">
        <title>Journées Portes Ouverte - MMI</title>

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBjelwyV3a_eZ3MzLvoucrymsMOgRA4VOE"></script>
        <script type="text/javascript" src="js/jquery.mixitup.min.js"></script>

    </head>

    <body>

        <nav>

            <a href="index.php"><img src="images/ios-lightbulb-outline.svg" alt="Logo" class="logo"></a>

            <ul>
                <li><a href="#mmi" id="nav_1">MMI</a></li>
                <li>
                    <a href="#jpo" id="nav_2">JPO</a></li>
                <li>
                    <a href="#temoignages" id="nav_3">Témoignages</a></li>
                <li>
                    <a href="#informations" id="nav_4">Informations</a></li>
                <li>
                    <a href="#blois" id="nav_5">Blois</a></li>
                <li>
                    <a href="#inscription" id="nav_6">Inscription</a></li>
            </ul>

        </nav>

        <header>

            <div>
                <img src="images/ios-lightbulb-outline.svg" alt="Logo_MMI" />
                <h1 class="wow fadeInTitleRight">MMI BLOIS</h1>
                <h2 class="wow fadeInTitleLeft">Métiers du Multimédia et de l'Internet</h2>
                <a href="#mmi" class="scrollDown"></a>
            </div>

        </header>

        <main>

            <section class="mmi" id="mmi">

                <article>
                    <div class="wow fadeInLeft">
                        <h2>DUT MMI</h2>
                        <p>L'objectif de la formation MMI (Métiers du Multimédia et de l'Internet) est de former en 2 ans des techniciens polyvalents dans les domaines des nouvelles technologies, des médias et du web. <br><br>Les diplômés de la spécialité MMI doivent donc acquérir des compétences multiples leur permettant d'intervenir à la fois dans la gestion, la conception des contenus et la réalisation des produits et services.</p>
                    </div>
                    <div class="wow fadeInRight"><img src="images/ecran.png" alt="" /></div>
                </article>
                <div class="wrapper plus1">
                  <button class="circle">
                    <img src="https://ssl.gstatic.com/bt/C3341AA7A1A076756462EE2E5CD71C11/2x/btw_ic_speeddial_white_24dp_2x.png" alt="" />
                 </button>
               </div>
                <article class="text_complet1">
                    <div><img src="images/adobe.png" alt="" style="float: left;" /></div>
                    <div>
                        <p>Acquérir ces compétences passe nécessairement par la maîtrise des outils de communication, des logiciels d'infographie, d'intégration et d'animation tout en s'appuyant sur de bonnes connaissances des langages de programmation. <br><br>Cette formation s'adresse aux titulaires de tout type de baccalauréat, particulièrement motivés par les technologies de l'information et de la communication (TIC).</p>
                    </div>
                </article>
                <article class="text_complet1">
                    <div>
                        <p>Au cours de la deuxième année, la formation se sépare en deux modules. La première communication, culture et connaissance de l’environnement, socio-économique et le deuxième culture technologique et développement multimédia. <br><br>Possibilité d’un deuxième année en apprentissage: Depuis 2014 la formation MMI est disponible en apprentissage pour les étudiants de deuxième année. Après une année d'acquisition de connaissances en première année MMI, vous est proposé la possibilité d'avoir un contrat en alternance (groupe de 15 étudiants).
                        </p>
                    </div>
                    <div><img src="images/calendrier.svg" alt="" /></div>
                </article>
                <article class="text_complet1">
                    <div>
                        <h2>Débouchés et poursuites d'études</h2>
                        <p>Au cours de la deuxième année, la formation se sépare en deux modules. La première communication, culture et connaissance de l’environnement, socio-économique et le deuxième culture technologique et développement multimédia. <br><br>Possibilité d’un deuxième année en apprentissage: Depuis 2014 la formation MMI est disponible en apprentissage pour les étudiants de deuxième année. Après une année d'acquisition de connaissances en première année MMI, vous est proposé la possibilité d'avoir un contrat en alternance (groupe de 15 étudiants).
                        </p>
                    </div>
                    <div><img src="images/cravate.svg" alt="" style="float: left;" /></div>
                </article>

            </section>

            <section class="jpo" id="jpo">

                <div>
                    <div>
                        <img src="images/affiche1.JPG" alt="" />
                    </div>
                    <div>
                        <img src="images/affiche2.JPG" alt="" />
                    </div>
                </div>

            </section>

            <section class="inscription_jo">

                <article>
                    <h2 class="wow fadeInTitleLeft">Pour vous inscrire aux journées découvertes</h2>
                    <form action="" method="post" class="wow fadeInUp" data-wow-delay="0.3s">
                        <input type="password" name="mdp" class="saisi_code wow fadeIn" placeholder="Code fournit : jpoMMIblois">
                        <input type="submit" name="entrer" value="Accès" class="hvr-shutter-in-horizontal">
                        <?php if(isset($erreur))
                        {
                          echo '<span class="alert">'.$erreur.'</span>';
                        }
                        ?>
                    </form>
                </article>

            </section>

            <section class="temoignages" id="temoignages">
                <h2>Témoignages & Réalisation</h2>
                <hr class="undertitle">
                <article>
                    <div class="photo">
                        <img src="images/charly.jpg" alt="" /></div>
                    <div class="text">
                        <h4>Charly</h4>
                        <p class="commentaire">Après mon DUT SRC/MMI, je me suis professionnalisé dans le monde du spectacle afin de pouvoir utiliser les connaissances du DUT dans un univers spécifique et différent. J’ai suivi une Licence professionnelle Communication et Commercialisation de Produits Culturels en option Industrie du disque et spectacle vivant à l'IUT de l'Indre (Issoudun). Outre mon service civique, je suis aussi auto-entrepreneur en tant que chef de projet digital et infographiste à Tours, manager du groupe Sapiens Sapiens et musicien du groupe Gonzague (en attente d'intermittence). Le DUT SRC/MMI m'a permis de découvrir le monde du web, sans me fermer les portes du monde du spectacle, mais au contraire en me permettant d’appréhender ce dernier différemment. Les aspects graphique et informatique de la formation nous permettent d'être "technicien", tandis que l’aspect communication/mercatique nous permet de comprendre comment promouvoir et vendre son projet. L’ensemble nous permet d’être très polyvalent. Ma LP m'a apporté une expertise dans le domaine du spectacle (surtout musical) et m'a permis d'approfondir mes connaissances ainsi que de commencer à créer mon carnet d'adresses.</p>
                        <p class="info">Chef de projet et accompagnateur de projets audiovisuels, en service civique à l'association Metropolis, St-Pierre-des-Corps (37)</p>
                    </div>
                </article>
                <hr>
                <article>
                    <div class="text">
                        <h4 style="text-align: right;">Marie</h4>
                        <p class="commentaire" style="text-align: right;">Après mon DUT SRC, je suis entrée à l’école d'ingénieur IMAC (Image, Multimédia, Audiovisuel et Communication) à l’Université de Paris-Marne-la-Vallée. J'effectue actuellement mon dernier semestre à l'étranger en Suède à l’université de Malmö. Le DUT SRC était parfait pour entrer dans cette école d'ingénieur car nous y faisons aussi bien de l’audiovisuel mais aussi du web, de la programmation, de la communication... Il était donc parfait de sortir du DUT SRC qui est très pluridisciplinaire !</p>
                    </div>
                    <div class="photo">
                        <img src="images/marie.jpg" alt="" /></div>
                </article>
                <hr>
                <article>
                    <div class="photo">
                        <img src="images/melodie.jpg" alt="" /></div>
                    <div class="text">
                        <h4>Mélodie</h4>
                        <p class="commentaire">Après 6 mois de CDD, j’ai obtenu un CDI en tant que développeuse informatique au service informatique du groupe Maison France Confort à Alençon. Après mon DUT SRC à Blois, j'ai suivi la licence professionnelle ATC option Métiers du web, en alternance à la mairie de Blois. Puis j'ai trouvé du travail dans un autre département au bout de 5 mois. Le DUT MMI et la LP ATC étaient à la fois polyvalents et professionnalisants grâce à l'alternance que j'ai choisie en licence professionnelle. Tous les aspects des métiers du web se complètent et sont vus dans ces formations, ce qui permet aussi de préciser son projet professionnel. Le DUT m'a également permis de m'aider à m'exprimer devant un jury et, plus largement, devant un public. Ce travail en expression orale m’est encore utile quand je forme des utilisateurs de nos outils et modules développés en entreprise, par exemple.</p>
                    </div>
                </article>
                <article style="width: 100%; display: flex; flex-direction: column">
                    <h2 style="margin-top: 50px;">Nos créations</h2>
                    <div style="width: 100%; display: flex; flex-direction: column">
                        <div style="width: 100%; display: flex;">
                            <div style="width: 50%;">


                                <img src="images/affiche.jpg" alt="" style="width: 100%;" />

                            </div>

                            <div style="width: 50%;">

                                <img class="chanel" src="images/chanel.jpg" alt="" style="width: 100%;" />

                            </div>
                        </div>

                        <div style="width: 100%; display: flex;">
                            <div style="width: 50%;">

                                <img class="cine" src="images/cine.jpg" alt="" style="width: 100%;" />

                            </div>

                            <div style="width: 50%;">

                                <img class="cine" src="images/chateau.JPG" alt="" style="width: 100%;" />

                            </div>
                        </div>
                    </div>

                </article>

            </section>

            <section class="DL_JO">

                <div>
                    <h2 class="wow fadeInLeft">English video</h2>
                    <hr class="undertitle" wow fadeInRight>
                </div>
                <div>
                    <video width="100%" controls src="teaser.mp4" class="wow fadeInUp">English presentation of IUT MMI</video>
                </div>

            </section>

            <section class="informations" id="informations">

                <article>
                    <div class="wow fadeInLeft">
                        <h2>Informations pratiques</h2>
                        <p>Les diplômés de la spécialité MMI doivent donc acquérir des compétences multiples leur permettant d'intervenir à la fois dans la gestion, la conception des contenus et la réalisation des produits et services.</p>
                    </div>
                    <div class="wow fadeInRight"><img src="images/html5.svg" alt="" /></div>
                </article>
                <div class="wrapper plus2">
                  <button class="circle">
                    <img src="https://ssl.gstatic.com/bt/C3341AA7A1A076756462EE2E5CD71C11/2x/btw_ic_speeddial_white_24dp_2x.png" alt="" />
                 </button>
               </div>
                <article class="text_complet2">
                    <div><img src="images/cloche.svg" alt="" style="float: left;" /></div>
                    <div>
                        <h2>Se restaurer</h2>
                        <p>Situé en centre ville, entre le château et la Loire Paninis, salades, sandwich chauds ou froids, pizzas, sur place ou à emporter 45 places assises, Terrasses aménagées. Ouvert de 11h30 à 14h00 du lundi au vendredi
                            <br><br>Situé en centre ville, entre le château et la Loire Buffets d'entrées et de desserts, grand choix de plats du jour300 places assises Ouvert de 11h30 à 13h30 du lundi au vendredi
                        </p>
                    </div>
                </article>
                <article class="text_complet2">
                    <div>
                        <h2>Se loger</h2>
                        <p>Desfray :Quartier proche gare, centre-ville, ENIVL, ENSNP, à 15 minutes à pied de l'antenne universitaire Du studio au T3 de 15 à 52 m²
                            <br><br>Les Flandres: Quartier résidentiel, proche lycées (sauf lycées C. Claudel et Hôtelier) et Hôpital, à 15 minutes à pied de l'antenne universitaire. Du T1 au T2 de 19 à 35 m²<br><br>Rocheron: Au sud de la loire, proche tous commerces et centre-ville, à 15 minutes à pied de l'antenne universitaire Du T1 au T2 de 18 à 35 m² (3 T1 handicapé de 23 m²) <br><br> Point Information Logement Étudiant (P.I.L.E.) :Grâce au partenariat entre le C.P.E.S.B. et le CROUS le Point Information Logement Étudiant vous accueille tout au long de l'année universitaire et assure une permanence durant l'été (du 15 juin au 15 septembre) à la Maison de l'Étudiant. Un service gratuit à votre disposition. Vous pourrez consulter l'ensemble des offres de logements (publics ou privés). Vous serez aidé dans votre démarche et conseillé sur les droits à l'ALS ou à l'APL </p>
                    </div>
                    <div><img src="images/lit.svg" alt="" /></div>
                </article>

            </section>

            <section class="mmi_stats">

                <article class="wow fadeIn">
                    <ul>
                        <li>
                            <h3 class="number">1300</h3>
                            <p>Demandes</p>
                        </li>
                        <li>
                            <h3 class="number">70</h3>
                            <p>Étudiants / Promo</p>
                        </li>
                        <li>
                            <h3 class="number">120</h3>
                            <p>Crédits Européens</p>
                        </li>
                        <li>
                            <h3 class="number">1800</h3>
                            <p>Heures</p>
                        </li>
                    </ul>
                </article>

            </section>

            <section class="blois" id="blois">

                <article>
                    <div class="wow fadeInLeft">
                        <h2>BLOIS, LA VILLE étudiante</h2>
                        <p>Blois, ville moyenne est paisible, possède les atouts d'une ville universitaire : <br><br>Les diplômés de la spécialité MMI doivent donc acquérir des compétences multiples leur permettant d'intervenir à la fois dans la gestion, la conception des contenus et la réalisation des produits et services.</p>
                    </div>
                    <div class="wow fadeInRight"><img src="images/diplome.svg" alt="" /></div>
                </article>
                <div class="wrapper plus3">
                  <button class="circle">
                    <img src="https://ssl.gstatic.com/bt/C3341AA7A1A076756462EE2E5CD71C11/2x/btw_ic_speeddial_white_24dp_2x.png" alt="" />
                 </button>
               </div>
                <article class="text_complet3">
                    <div><img src="images/livre.svg" alt="" style="float: left;" /></div>
                    <div>
                        <h2>Vivre à Blois</h2>
                        <p>Un restaurant, des chambres en résidence, une bibliothèque, une maison de l'etudiant, de nombreuses associations et des manifestations sportives et culturelles. A l'IUT, chaque département possède son association d'étudiants. Ces associations sont là pour représenter les étudiants, défendre leurs intérêts et assurer des liens de solidarité. Le Passeport Culturel Etudiant et le Passeport Sportif Étudiant permettent de participer à la vie culturelle et sportive de la ville à des tarifs préférentiels. Le centre universitaire blésois est situé au coeur de la cité, près de la Halle aux grains</p>
                    </div>
                </article>
                <article class="text_complet3">
                    <div>
                        <h2>Se divertir</h2>
                        <p>La ville de Blois propose des structures culturelles (cinéma, musique etc.), sportives et bien d'autres pour divertir et satisfaire tous les blésois. Grâce au Passeport Culturel Etudiant (PCE), les étudiants bénéficient de tarifs préférentiels dans les structures partenaires de l’université de Tours. Le Pass Ville de Blois offre également aux Blésois un tarif préférentiel sur les principaux sites culturels et touristiques de la ville.</p>
                    </div>
                    <div><img src="images/photo.svg" alt="" /></div>
                </article>

            </section>

            <section class="inscription" id="inscription">

                <article>
                    <h2 class="wow fadeInTitleLeft">Vous souhaitez rejoindre l'aventure MMI</h2>
                    <a href="#" class="hvr-shutter-in-horizontal wow fadeInUp" data-wow-delay="0.3s">Admission PostBAC</a>
                </article>
                <div id="map"></div>

            </section>

        </main>

        <footer>

            <section class="socials_networks">

                <article>
                    <h1>MMI BLOIS</h1>
                    <hr>
                    <div>
                        <a href="#"><img src="images/social-facebook.svg" alt="" /></a>
                        <a href=""><img src="images/social-twitter.svg" alt="" /></a>
                        <a href=""><img src="images/social-youtube.svg" alt="" /></a>
                    </div>
                </article>

            </section>

            <section class="legacies">

                <article>
                    <p>&copy; 2017. MMI Blois. Tous droits réservés.</p>
                </article>

            </section>

        </footer>

        <!-- \\------------SCRIPT------------// -->

        <script src="js/jquery.easing.1.3.js"></script>
        <script src="js/wow.js"></script>

        <script>
            new WOW().init();

        </script>

        <!-- \\------------CODE JQUERY------------// -->

        <script>
            var mapOptions = {
                center: new google.maps.LatLng(47.590199609540015, 1.3367217779159546),
                zoom: 15,
                mapTypeId: google.maps.MapTypeId.ROADMAP
            };

            var map = new google.maps.Map(document.getElementById('map'), mapOptions);

            var markerOptions = {
                position: new google.maps.LatLng(47.590199609540015, 1.3367217779159546)
            };

            var marker = new google.maps.Marker(markerOptions);
            marker.setMap(map);

        </script>

        <script>
            var $win = $(window),
                winH = $win.height() - 90,
                $transform_nav = $('nav'),
                $transform_a = $('nav ul li a'),
                $transform_logo = $('.logo'),
                $button = $('.scrollDown'),
                $nav_link1 = $('#nav_1'),
                $nav_link2 = $('#nav_2'),
                $nav_link3 = $('#nav_3'),
                $nav_link4 = $('#nav_4'),
                $nav_link5 = $('#nav_5'),
                $nav_link6 = $('#nav_6');

            var $position1 = $('#mmi').offset().top - 70,
                $position2 = $('#jpo').offset().top - 70,
                $position3 = $('.temoignages').offset().top - 70,
                $position4 = $('.informations').offset().top - 71,
                $position5 = $('.blois').offset().top - 71,
                $position6 = $('.inscription').offset().top - 71,
                $position7 = $('footer').offset().top;

            $(document).scroll(function() {
                if ($(this).scrollTop() > winH) {
                    $transform_nav.addClass('transform');
                    $transform_a.addClass('color');
                    $transform_logo.attr('src', 'images/ios-lightbulb-outline2.svg');
                } else {
                    $transform_nav.removeClass('transform');
                    $transform_a.removeClass('color');
                    $transform_logo.attr('src', 'images/ios-lightbulb-outline.svg');
                }
            });


            $(document).scroll(function() {
                if ($(this).scrollTop() > winH) {
                    $transform_nav.addClass('transform');
                    $transform_a.addClass('color');
                    $transform_border.addClass('border');
                    $transform_logo.attr('src', 'images/ios-lightbulb-outline2.svg');
                } else {
                    $transform_nav.removeClass('transform');
                    $transform_a.removeClass('color');
                    $transform_border.removeClass('border');
                    $transform_logo.attr('src', 'images/ios-lightbulb-outline.svg');
                }
                if ($(this).scrollTop() >= $position1 && $(this).scrollTop() < $position2) {
                    $nav_link1.addClass('active');
                } else {
                    $nav_link1.removeClass('active');
                }
                if ($(this).scrollTop() >= $position2 && $(this).scrollTop() < $position3) {
                    $nav_link2.addClass('active');
                } else {
                    $nav_link2.removeClass('active');
                }
                if ($(this).scrollTop() >= $position3 && $(this).scrollTop() < $position4) {
                    $nav_link3.addClass('active');
                } else {
                    $nav_link3.removeClass('active');
                }
                if ($(this).scrollTop() >= $position4 && $(this).scrollTop() < $position5) {
                    $nav_link4.addClass('active');
                } else {
                    $nav_link4.removeClass('active');
                }
                if ($(this).scrollTop() >= $position5 && $(this).scrollTop() < $position6) {
                    $nav_link5.addClass('active');
                } else {
                    $nav_link5.removeClass('active');
                }
                if ($(this).scrollTop() >= $position6 && $(this).scrollTop() < $position7) {
                    $nav_link6.addClass('active');
                } else {
                    $nav_link6.removeClass('active');
                }
            });

            $button.click(function() {
                var $anchor = $(this);
                $('html, body').stop().animate({
                    scrollTop: $($anchor.attr('href')).offset().top - 70
                }, 1500, 'easeInOutExpo');
                event.preventDefault();
            });

            $('nav ul li a').click(function() {
                var $anchor = $(this);
                $('html, body').stop().animate({
                    scrollTop: $($anchor.attr('href')).offset().top - 70
                }, 1500, 'easeInOutExpo');
                event.preventDefault();
            });

        </script>

        <script>
            var $more1 = $('.plus1'),
                $text1 = $('.text_complet1'),
                $text_etat1 = $text1.hide(),
                $more2 = $('.plus2'),
                $text2 = $('.text_complet2'),
                $text_etat2 = $text2.hide(),
                $more3 = $('.plus3'),
                $text3 = $('.text_complet3'),
                $text_etat3 = $text3.hide();

            $more1.click(function() {
                $more1.hide();

                $text_etat1.animate({
                    height: "show"
                }, 650, function() {});
            });

            $more2.click(function() {
                $more2.hide();

                $text_etat2.animate({
                    height: "show"
                }, 650, function() {});
            });

            $more3.click(function() {
                $more3.hide();

                $text_etat3.animate({
                    height: "show"
                }, 650, function() {});
            });

        </script>

    </body>

    </html>
