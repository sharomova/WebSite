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

        <script src="/BigWeb2/js/video.js"></script>

        <script type="text/javascript" src="/BigWeb2/html5lightbox/jquery.js"></script>
        <script type="text/javascript" src="/BigWeb2/html5lightbox/html5lightbox.js"></script>

        <script type='text/javascript'>
            $(document).ready(function () {
                $("#search_button").click(function () {
                    var $str = $('#search_text').val();
                    var $url = '/BigWeb2/tutorials/' + $str;
                    window.location = $url;
                });
            });
        </script>

    </head>
    <body>
        <div class="content">
            <div class="container">
                <div class="col-md-12">
                    <div id="navcontainer">
                        <ul>
                            <li>                               
                                <?=
                                $this->Html->link('Tous', [
                                    'controller' => 'Tutorials',
                                    'action' => 'index'
                                ]);
                                ?>
                            </li>
                            <li>                               
                                <?=
                                $this->Html->link('Mobile', [
                                    'controller' => 'Tutorials',
                                    'action' => 'index',
                                    'type' => 'Mobile'
                                ]);
                                ?>
                            </li>
                            <li>                               
                                <?=
                                $this->Html->link('Web', [
                                    'controller' => 'Tutorials',
                                    'action' => 'index',
                                    'type' => 'Web'
                                ]);
                                ?>
                            </li>

                            <li id="search" style="float: right">
                                <input type="text" name="search_text" id="search_text" placeholder="Rechercher"/>
                                <a style="height: 44px;" id="search_button"></a>            
                            </li>

<!--                            <li style="float:right"><a class="active_nav"><?= $type ?></a></li>-->
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="content">
            <div class="container" id="allVideos">
                <?php
                $counter = 3;
                $nextvideo = 0;
                foreach ($tutos as $tutorial):
                $id = 'video' + $nextvideo;
                ?>

                <?php if ($counter % 3 == 0) { ?>
                    <div class="col-md-4">
                        <h5 style="color: #000;"><?= h($tutorial->name) ?></h5>
                        <div class="img-zoom embed-responsive responsive">
                            <a href="#<?= $id ?>" class="html5lightbox" data-width=800 data-height=400>
                                <img style="width: 100%"src="<?= h($tutorial->image) ?>">
                            </a>
                        </div>
                        <div id="<?= $id ?>" style="display:none;">
                            <div class="lightboxcontainer">
                                <div class="lightboxleft">
                                    <div class="divtext">
                                        <p class="divtitle video_title"><?= h($tutorial->name) ?></p>
                                        <p class="divdescription video_description"><?= h($tutorial->description) ?></p>
                                    </div>
                                </div>
                                <div class="lightboxright">
                                    <iframe width="100%" height="100%" src="<?= h($tutorial->hyperlink) ?>" frameborder="0" allowfullscreen></iframe>
                                </div>
                                <div style="clear:both;"></div>
                            </div>                     
                        </div>
                    </div>
                <?php } else if ($counter % 3 == 1) { ?>
                    <div class="col-md-4">
                        <h5 style="color: #000;"><?= h($tutorial->name) ?></h5>
                        <div class="img-zoom embed-responsive responsive">
                            <a href="#<?= $id ?>"  class="html5lightbox"data-width=800 data-height=400>
                                <img style="width: 100%"src="<?= h($tutorial->image) ?>">
                            </a>
                        </div>
                        <div id="<?= $id ?>"style="display:none;">
                            <div class="lightboxcontainer">
                                <div class="lightboxleft">
                                    <div class="divtext">
                                        <p class="divtitle video_title"><?= h($tutorial->name) ?></p>
                                        <p class="divdescription video_description"><?= h($tutorial->description) ?></p>
                                    </div>
                                </div>
                                <div class="lightboxright">
                                    <iframe width="100%" height="100%" src="<?= h($tutorial->hyperlink) ?>" frameborder="0" allowfullscreen></iframe>
                                </div>
                                <div style="clear:both;"></div>
                            </div>                     
                        </div>
                    </div>
                <?php } else if ($counter % 3 == 2) { ?>
                    <div class="col-md-4">
                        <h5 style="color: #000;"><?= h($tutorial->name) ?></h5>
                        <div class="img-zoom embed-responsive responsive">
                            <a href="#<?= $id ?>"  class="html5lightbox"data-width=800 data-height=400>
                                <img style="width: 100%"src="<?= h($tutorial->image) ?>">
                            </a>
                        </div>
                        <div id="<?= $id ?>" style="display:none;">
                            <div class="lightboxcontainer">
                                <div class="lightboxleft">
                                    <div class="divtext">
                                        <p class="divtitle video_title"><?= h($tutorial->name) ?></p>
                                        <p class="divdescription video_description"><?= h($tutorial->description) ?></p>
                                    </div>
                                </div>
                                <div class="lightboxright">
                                    <iframe width="100%" height="100%" src="<?= h($tutorial->hyperlink) ?>" frameborder="0" allowfullscreen></iframe>
                                </div>
                                <div style="clear:both;"></div>
                            </div>                     
                        </div>
                    </div>
                <?php } ?>

                <?php
                $nextvideo++;
                $counter++;
                endforeach;
                ?>
            </div>

            <div class="container">
                <div class="row"  style="text-align: center; margin: 0 auto;">
                    <div class="pagination pagination-large">
                        <ul class="pager">
                            <?php
                            echo $this->Paginator->prev(__('<'), array('tag' => 'li'), null, array('tag' => 'li', 'class' => 'disabled', 'disabledTag' => 'a'));
                            echo $this->Paginator->numbers(array('separator' => '', 'currentTag' => 'a', 'currentClass' => 'active', 'tag' => 'li', 'first' => 1));
                            echo $this->Paginator->next(__('>'), array('tag' => 'li', 'currentClass' => 'disabled'), null, array('tag' => 'li', 'class' => 'disabled', 'disabledTag' => 'a'));
                            ?>
                        </ul>
                    </div>
                </div>
            </div>

        </div>
    </body>
</html>

