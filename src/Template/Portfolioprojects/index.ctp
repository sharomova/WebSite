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
        <script src="/BigWeb2/js/portfolio.js"></script>
        <script src="https://code.jquery.com/jquery-2.1.4.min.js"></script>
        <script src="https://cdn.rawgit.com/nnattawat/flip/v1.0.20/dist/jquery.flip.min.js"></script>

    </head>
    <body>
        <div class="container-fluid">     
            <div class="container">
                <br>
                <div id="myCarousel" class="carousel slide" data-ride="carousel">
                    <!-- Indicators -->
                    <ol class="carousel-indicators">
                        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                        <li data-target="#myCarousel" data-slide-to="1"></li>
                        <li data-target="#myCarousel" data-slide-to="2"></li>
                        <li data-target="#myCarousel" data-slide-to="3"></li>
                    </ol>

                    <!-- Wrapper for slides -->
                    <div class="carousel-inner" role="listbox">
                        <div class="item active">
                            <img src="/BigWeb2/img/gestionkmt.png" alt="Flower" width="460px" height="345px">
                        </div>

                        <?php if (!empty($portfolios)): foreach ($portfolios as $portfolio): ?>
                                <div class="item">
                                    <img src="<?php echo$portfolio->path_image ?>" alt="<?php echo $portfolio->name; ?>" width="460px" height="345px">       
                                </div>
                                <?php
                            endforeach;
                        else:
                            ?>
                            <p class="no-record">Not found......</p><?php endif; ?>

                        <!-- Left and right controls -->
                        <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
                            <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
                            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
                </div>

                <div class="container">
                    <div class="row">
                        <table class="table">

                            <?php if (!empty($portfolios)): foreach ($portfolios as $portfolio): ?>
                                    <tr style="height: 300px">
                                        <td style="padding-top: 3%">
                                            <div id="card" class="card col-md-10"> 
                                                <div class="front"> 
                                                    <?php
                                                    $image = $portfolio->path_image;
                                                    print '<img class="HoverImage" src="' . $image . '"/>';
                                                    ?>
                                                </div> 
                                                <div class="back">
                                                    <?php
                                                    $image = $portfolio->path_image;
                                                    print '<img class="HoverImage" src="' . $image . '"/>';
                                                    ?>
                                                </div> 
                                            </div>
                                        </td>
                                        <td>
                                            <div class="content">
                                                <div>
                                                    <h4 style="color: #000;"><?php echo $portfolio->name; ?></h4>                                 
                                                    <p><h5><?php echo $portfolio->description; ?></h5></p>
                                                </div>
                                            </div> 
                                        </td>
                                    </tr>

                                    <?php
                                endforeach;
                            else:
                                ?>
                                <p class="no-record">No project(s) found......</p>
                            <?php endif; ?>

                        </table>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>