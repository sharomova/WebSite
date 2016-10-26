<?php
/**
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @since         0.10.0
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */
?>
<!DOCTYPE html>
<html>
    <head>
        <?= $this->Html->charset() ?>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <?= $this->Html->css('base.css') ?>
        <?= $this->Html->css('cake.css') ?>
        <?= $this->Html->css('style.css') ?>
        <?= $this->Html->css('notification.css') ?>
        <?= $this->Html->script('notification') ?>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
        <script src="/BigWeb2/js/home.js"></script>
    </head>
    <body class="home">

        <div id="homeContent">

            <div class="heading" id="imaghead" >
                <p class="big" id="big" >BigWeb</p>
            </div>

            <div class="row description content">
                <center><h1 style="color: #000;">Notre compagnie</h1></center>
                <p>Depuis l'ouverture de <b>BigWeb</b>, nous n'avons cessé d'innover, 
                    d'évoluer et de nous adapter aux besoins et aux attentes 
                    des consommateurs. Ils ont toujours été au coeur de nos 
                    affaires. Cela se traduit par un objectif primordial : 
                    offrir à nos clients tous les avantages des nos services. 
                    Nos efforts ont sans cesse visé à répandre au sein de notre organisation les 
                    valeurs de service, d’excellence et d’imputabilité que nous avons toujours 
                    défendues.</p>
                <p>Nous sommes fiers du chemin parcouru et tenons à exprimer notre reconnaissance 
                    envers nos employés qui ont su défendre les valeurs qui nous caractérisent et
                    les mettre en pratique dans leur travail quotidien. Ensemble, nous bâtissons 
                    les fondations sur lesquelles notre entreprise poursuivra son développement 
                    dans les années à venir.</p>
            </div>


            <div class="row hideme">
                            <hr>
                <center><h2 style="color: #000 !important;">Nos services:</h2></center>
                <div class="col-md-4">                   
                    <center><h3 style="color: #000;">MOBILE</h3></center>
                    <center><img class="img-fluid" src="/BigWeb2/img/rsz_mobile2.png"></center> 
                </div>
                <div class="col-md-4">
                    <center><h3 style="color: #000;">WEB</h3></center>
                    <center><img class="img-fluid" src="/BigWeb2/img/rsz_siteweb.png"></center>
                </div>
                <div class="col-md-4">
                    <center><h3 style="color: #000;">LOGICIEL</h3></center>
                    <br>
                    <center><img class="img-fluid" src="/BigWeb2/img/logiciel.png"></center>
                </div>
            </div>

            <section id="carousel" class="content">    				
                <div class="container">
                    <div class="row hideme">
                        <hr>
                        <div class="col-md-8 col-md-offset-2">
                            <center><h2 style="color: #000;">À propos de nous:</h2></center>                    
                            <div class="quote"><i class="fa fa-quote-left fa-4x"></i></div>
                            <div class="carousel slide" id="fade-quote-carousel" data-ride="carousel" data-interval="3000">
                                <!-- Carousel indicators -->
                                <ol class="carousel-indicators">
                                    <li data-target="#fade-quote-carousel" data-slide-to="0"></li>
                                    <li data-target="#fade-quote-carousel" data-slide-to="1"></li>
                                    <li data-target="#fade-quote-carousel" data-slide-to="2" class="active"></li>
                                    <li data-target="#fade-quote-carousel" data-slide-to="3"></li>

                                </ol>
                                <!-- Carousel items -->
                                <div class="carousel-inner">
                                    <div class="item">
                                        <div class="profile-circle" style="background-color: rgba(0,0,0,.2);">
                                            <img class="img-fluid" src="/BigWeb2/img/olivierprofil.png">
                                        </div>
                                        <blockquote>
                                            <h3 style="color: #000;">Olivier Castro-Perrier</h3>
                                            <p style="color: #000;">Lorem ipsum dolor sit amet, consectetur adipisicing elit. 
                                                Quidem, veritatis nulla eum laudantium totam tempore optio 
                                                doloremque laboriosam quas, quos eaque molestias odio aut eius
                                                animi. Impedit temporibus nisi accusamus.</p>
                                        </blockquote>	
                                    </div>
                                    <div class="item">
                                        <div class="profile-circle" style="background-color: rgba(77,5,51,.2);">
                                            <img class="img-fluid" src="/BigWeb2/img/Thierry_Jutras.gif">
                                        </div>
                                        <blockquote>
                                            <h3 style="color: #000;">Thierry Jutras</h3>
                                            <p style="color: #000;">Installé depuis 5 ans comme développeur web, je mets mes compétences au service de vos projets Internet. 
                                                Spécialisé dans le développement de site Internet, et notamment le développement PHP, mon accompagnement peut couvrir selon vos besoins l'ensemble des étapes d'un projet de sa conception, à la réalisation puis son suivi.</p>
                                        </blockquote>
                                    </div>
                                    <div class="active item">
                                        <div class="profile-circle" style="background-color: rgba(77,5,51,.2);">
                                            <img class="img-fluid" src="/BigWeb2/img/olga.png">
                                        </div>
                                        <blockquote>
                                            <h3 style="color: #000;">Olga Sharomova</h3>
                                            <p style="color: #000;">La bonne développeur web posséde de
                                                bonnes compétences en ce qui concerne les langages de programmation du Web.
                                                Cette connaissance est indispensable pour identifier 
                                                la meilleure solution technique pour chaque de son projet et pour développer les sites Internet.</p>
                                        </blockquote>
                                    </div>
                                    <div class="item">
                                        <div class="profile-circle" style="background-color: rgba(77,5,51,.2);">
                                            <img class="img-fluid" src="/BigWeb2/img/photo1.png">
                                        </div>
                                        <blockquote>
                                            <h3 style="color: #000;">Patrick Begin</h3>
                                            <p style="color: #000;">Patrick est un développeur web paresseux possédant de
                                                bonnes compétences en ce qui concerne les langages de programmation du Web.
                                                Cette connaissance est indispensable pour identifier 
                                                la meilleure solution technique pour chaque de son projet et pour développer les sites Internet.</p>
                                        </blockquote>
                                    </div>
                                </div>
                            </div>
                        </div>							
                    </div>
                </div>
            </section>
        </div>
    </body>
</html>
