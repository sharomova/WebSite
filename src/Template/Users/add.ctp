<!DOCTYPE html>
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
        <?= $this->Html->css('notification.css') ?>
        <?= $this->Html->script('notification') ?>
    </head>
    <body>
        <div align="center" class="content">
            <div align="left" class="white_container large-6">
                <div>
                    <?= $this->Form->create($user) ?>
                    <fieldset>
                        <h1>Créer un compte</h1>
                        <?= $this->Form->input('username') ?>
                        <?= $this->Form->input('password') ?>
                        <?= $this->Form->input('password_confirm', array('title' => 'Confirm password', 'type' => 'password')) ?>
                        <?= $this->Form->input('first_name') ?>
                        <?= $this->Form->input('business_name') ?>
                        <?= $this->Form->input('email') ?>
                        <?= $this->Form->input('phone_number') ?>
                        <?= $this->Form->button('Ajouter', array('formnovalidate' => true)); ?>
                    </fieldset>           
                    <?= $this->Form->end() ?>
                </div>
            </div>
        </div>
    </body>
</html>