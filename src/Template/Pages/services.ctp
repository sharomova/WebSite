<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
    Created on : 2016-03-04, 09:51:40
    Author     : Olga
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
        <?= $this->Html->css('service.css') ?>    
        <?= $this->Html->script('service') ?>
    </head>
    <body>
        <div id="ServiceContent">
            <div class="content">
                <div class="container">
                    <div class="col-md-12">
                        <div class="navcontainer">
                            Nos services
                        </div>
                    </div>
                </div>
            </div>
            <div class="content">
                <div class="container">
                    <div class="description row">           
                        <div id="service" class=" col-md-6">
                            <center><a href="http://localhost/BigWeb2/tutorials/Web"><img class="img-fluid" width="100%" src="/BigWeb2/img/rsz_siteweb.png"></a></center>                     
                        </div>
                        <div class=" col-md-6">
                            <h4 style="color: #000;">Voici ce que nous réalisons:</h4>
                            <ul style="color: #000;">
                                    <li>Applications mobiles iOS</li>
                                    <li>Applications mobiles Android</li>
                                    <li>Fonctionnalités de réalité augmentée (RA) ou de réalité virtuelle (RV)</li>
                                    <li>Convergence télévision et numérique</li>
                                </ul>
                        </div>
                        <hr>
                    </div>
                    <div class="description row">
                        <div class=" col-md-6" style="text-align: center">
                            <center><a href="http://localhost/BigWeb2/tutorials/Mobile"><img class="img-fluid1" width="100%" src="/BigWeb2/img/mobile2.png"></a></center> 
                        </div>
                        <div class=" col-md-6">
                            <h5>
                                <h4 style="color: #000;">Mobile</h4>
                                Que ce soit pour automatiser une partie de votre processus 
                                d’affaires, remplacer un logiciel existant ou créer un nouveau
                                logiciel sur mesure parfaitement adapté à votre réalité, nous 
                                pouvons vous aider. Nous avons travaillé avec plusieurs grandes
                                entreprises. 
                            </h5>
                        </div>
                        <hr>
                    </div>

                    <div class="hideme row">
                        <div class=" col-md-6">
                            <!-- Container -->
                        <div class="thumb" style="margin-top: 5px !important;">
                            <!-- Image -->
                            <a href="http://localhost/BigWeb2/tutorials">
                                <!-- Label -->
                                <span>Logiciel</span>
                            </a>
                        </div>
                        </div>
                        <div class=" col-md-6"><h5>
                                <h4 style="color: #000;">Logiciel</h4>
                                Site web, intranet et extranet responsive personnalisés. 
                                Nous offrons des services allant de l’élaboration de stratégies Internet 
                                à la création de sites Web, en passant par le référencement sur les 
                                moteurs de recherche Google et Bing et par le commerce électronique 
                                (e-commerce).</h5>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </body>
</html>