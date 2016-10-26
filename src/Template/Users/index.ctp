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
    </head>
    <body>
        <div class="container">
            <div>
                <h1>Blog Utilisateur</h1>
                <div class="col-md-8">
                    <?php if (!empty($users)): foreach ($users as $user): ?>
                            <div class="post-box">
                                <div class="post-content">
                                    <div class="caption">
                                        <h4><a href=""><?php echo $user->username; ?></a></h4>
                                        <p><?php echo $user->email; ?></p>
                                    </div>
                                </div>
                            </div>
                            <?php
                        endforeach;
                    else:
                        ?>
                        <p class="no-record">No users found......</p>
                    <?php endif; ?>

                    <?php if (!empty($tutos)): foreach ($tutos as $tuto): ?>
                            <div class="tuto-box">
                                <div class="tuto-content">
                                    <div class="caption_tuto">
                                        <h4><a href="javascript:void(0);"><?php echo $tuto->Name; ?></a></h4>
                                        <p><?php echo $tuto->Hyperlink; ?></p>
                                    </div>
                                </div>
                            </div>
                            <?php
                        endforeach;
                    else:
                        ?>
                        <p class="notuto-record">No tuto found......</p>
                    <?php endif; ?>

                </div>
                <p> 
                    <?php echo $this->Html->link('Ajouter', array('action' => 'add')); ?> 
                </p>
                <p> 
                    <?= $this->Html->link('Edit', ['action' => 'edit', $user->id]) ?>
                </p>
            </div>
        </div>

    </body>
</html>

