<div id="wrapper" class="fixed-nav-bar">
    <nav class="navbar navbar-inverse" id="nav">
        <div class="container-fluid">
            <div class="navbar-header">
                <a class="nav navbar-nav" href="/BigWeb2/"><img class="img-fluid" width="90px" src="/BigWeb2/img/logoWtName.png"></a>
            </div>
            <ul class="nav navbar-nav navbar-right" id="navigation">
                <li><a href="/BigWeb2/services">Services</a></li>
                <li><a href="/BigWeb2/tutorials">Tutoriaux</a></li>
                <li><a href="/BigWeb2/portfolioprojects">Portfolio</a></li>
                <li><a href="/BigWeb2/contact">Contact</a></li>
                <li><a><span class="glyphicon glyphicon-user"></span> <?= $authUserName ?></a>
                    <ul>
                        <li><a href="/BigWeb2/profil">Mon profil</a></li>
                        <li><a href="/BigWeb2/logout">Déconnection</a></li>
                    </ul>
                </li>
            </ul>      
        </div>
    </nav>
</div>

