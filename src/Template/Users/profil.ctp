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
        <?= $this->Html->css('profil.css') ?>
        <?= $this->Html->css('notification.css') ?>
        <?= $this->Html->script('notification') ?>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
        <script src="/BigWeb2/js/profil.js"></script>
    </head>
    <body>
        <div class="row">
            <div class="col-md-offset-3 col-md-6 Profile-General-Information" style="vertical-align: middle">
                <img class="img-fluid Fade-medium" src="/BigWeb2/img/profile.png">
                <h1 class="Fade-medium"> <?= $authUserName ?> </h1>
                <h1 class="Fade-medium"> <?= $this->request->session()->read('Auth.User.email') ?> </h1>
                <h1 class="Fade-medium"> 
                    <?php 
                    $phoneNumber = $this->request->session()->read('Auth.User.phone_number');
                            
                            
                            $array = str_split($phoneNumber);
                            echo '('.$array[0].$array[1].$array[2].')'.$array[3].$array[4].$array[5].'-'.$array[6].$array[7].$array[8].$array[9];
                            ?> </h1>
                <!-- Trigger the modal with a button -->
                <div class="col-md-1"></div> <!-- offset -->
                <button type="button" class="btn btn-info btn-lg col-md-5 btn-Profil-General Fade-slow animate-left" data-toggle="modal" data-target="#DeleteProfile">Supprimer le profil</button>
                <button type="button" class="btn btn-info btn-lg col-md-5 btn-Profil-General Fade-slow animate-right" data-toggle="modal" data-target="#changePassword">Changer le mot de passe</button>
            </div>
        </div>
        
        <!-- Modal Password -->
        <div id="changePassword" class="modal fade" role="dialog" style="margin-top: 51px">
            <div class="modal-dialog">
                <!-- Modal content-->
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">Changer le mot de passe</h4>
                    </div>
                    <div class="modal-body">
                        <?= $this->Form->create(null, [
                        'url' => ['controller' => 'Users', 'action' => 'changePassword']
                    ])?>
                        <fieldset>
                            <?= $this->Form->input('old_password', ['type' => 'password', 'label' => 'Ancient mot de passe']) ?>
                            <?= $this->Form->input('password1', ['type' => 'password', 'label' => 'Nouveau Mot de passe']) ?>
                            <?= $this->Form->input('password2', ['type' => 'password', 'label' => 'Répéter le mot de passe']) ?>
                        </fieldset>
                    </div>
                    <div class="modal-footer">
                        <?= $this->Form->button(__('Save')) ?>
                        <?= $this->Form->end() ?>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Modal Delete Profile -->
        <div id="DeleteProfile" class="modal fade" role="dialog" style="margin-top: 51px">
            <div class="modal-dialog">
                <!-- Modal content-->
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">Supression du compte</h4>
                    </div>
                    <div class="modal-body">
                        Êtes-vous sur de vouloir supprimer le compte?
                        Cette action n'est pas reversible.
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
