<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
        <LINK  type="text/css" rel="stylesheet" href="/BigWeb2/css/style.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
        <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
        <?= $this->Html->charset() ?>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <?= $this->Html->css('base.css') ?>
        <?= $this->Html->css('cake.css') ?>
        <?= $this->Html->css('style.css') ?>

        <script src="http://maps.googleapis.com/maps/api/js"></script>
        <script>
            function initialize() {
                var pos = new google.maps.LatLng(45.536106, -73.673469);
                var mapProp = {
                    center: pos,
                    zoom: 16,
                    mapTypeId: google.maps.MapTypeId.HYBRID
                };
                var map = new google.maps.Map(document.getElementById("googleMap"), mapProp);

                var iconMarker = {
                    url: '/BigWeb2/img/logoWtName.png', // url
                    scaledSize: new google.maps.Size(89, 48), // scaled size
                    origin: new google.maps.Point(0, 0), // origin
                    anchor: new google.maps.Point(0, 0) // anchor
                };

                var marker = new google.maps.Marker({
                    position: pos,
                    map: map,
                    icon: iconMarker
                });
            }
            ;

            google.maps.event.addDomListener(window, 'load', initialize);
        </script>
        <script type="text/javascript">
            jQuery(document).ready(function ($) {
                $('#formContact').hide();
                $('button').click(function (e) {
                    if ($('#formContact').is(":visible"))
                    {
                        $('#formContact').slideUp();
                        $("p").append("<h2>Message envoyé!</h2>");
                        $('#text').hide();
                    } else {
                        $('#formContact').slideDown();
                         $(this).css('background','#A60F0F');
                        $("#text").html(function () {
                         
                            return "Envoyer";
                             
                        });
                    }
                });

                $('#sbm').click(function (e) {
                    $('#formContact').slideUp();
                    $("p").append("<h2>Message envoyé!</h2>");
                });
            });
        </script>
    </head>
    <body>
        <div class="content">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <div id="googleMap" style="width:100%;height:400px;"></div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-4">
                        <br>
                        <h2>Nous contacter :</h2>
                        <br>
                        E-mail : <a href="mailto: BigWeb@gmail.com" style="color:#000000;">BigWeb@gmail.com</a><br>
                        Adresse : 10555 Avenue de Bois de Boulogne, <br> Montréal, QC, H4N 1L4<br>
                        Téléphone : <a href="tel: 5143323000" style="color:#000000;">(514) 332-3000</a>
                        <br>
                        <button style="float: left !important;" id="text">Écrire un message</button>
                    </div>
                    <div class="col-sm-8">
                        <br>
                        <div id="formContact" style="float: right; height:500px;width:700px;">
                            <form id="form2" method="post"  style="margin-top: 12px !important; " action="<?php echo strip_tags($_SERVER['REQUEST_URI']); ?>">                     
                                <p>Votre nom et prénom <span style="color:#ff0000;">*</span>: <input type="text" name="nom" size="30" /></p>
                                <p>Votre email <span style="color:#ff0000;">*</span>: <input type="text" name="email" size="30" /></p>
                                <p>Message <span style="color:#ff0000;">*</span>:</p>
                                <textarea name="message" cols="60" rows="5"></textarea>
                                <!--<button type="submit" name="submit1" value="Envoyer" id="sbm"/>Envoyer</button>-->
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>



<?php
// S'il y des données de postées
//                    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
//
//                        // (1) Code PHP pour traiter l'envoi de l'email
//                        // Récupération des variables et sécurisation des données
//                        $nom = htmlentities($_POST['nom']); // htmlentities() convertit des caractères "spéciaux" en équivalent HTML
//                        $email = htmlentities($_POST['email']);
//                        $message = htmlentities($_POST['message']);
//
//                        // Variables concernant l'email
//
//                        $destinataire = 'sharomovaolga@gmail.com'; // Adresse email du webmaster (à personnaliser)
//                        $sujet = 'Titre du message'; // Titre de l'email
//                        $contenu = '<html><head><title>Titre du message</title></head><body>';
//                        $contenu .= '<p>Bonjour, vous avez reçu un message à partir de votre site web.</p>';
//                        $contenu .= '<p><strong>Nom</strong>: ' . $nom . '</p>';
//                        $contenu .= '<p><strong>Email</strong>: ' . $email . '</p>';
//                        $contenu .= '<p><strong>Message</strong>: ' . $message . '</p>';
//                        $contenu .= '</body></html>'; // Contenu du message de l'email (en XHTML)
//                        // Pour envoyer un email HTML, l'en-tête Content-type doit être défini
//                        $headers = 'MIME-Version: 1.0' . "\r\n";
//                        $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
//
//                        // Envoyer l'email
?>


</body>
</html>

