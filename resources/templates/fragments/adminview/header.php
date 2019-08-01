<header>
    <nav class="deep-purple darken-1" role="navigation">
        <div class="nav-wrapper container">
            <a id="logo-container" href="<?php echo BASE_DIR; ?>/admin" class="brand-logo">
                BleezBeer
            </a>
            <ul class="right hide-on-med-and-down">
                <li><a href="<?php echo BASE_DIR; ?>/"><i class="material-icons">exit_to_app</i></a></li>
            </ul>
        </div>
    </nav>
</header>

<ul id="slide-out" class="sidenav sidenav-fixed">
    <li><div class="user-view">
            <div class="background">
                <img src="<?php echo BASE_DIR; ?>/resources/static/img/img_background_user.jpg">
            </div>
            <a href="#user"><img class="circle" src="<?php echo BASE_DIR; ?>/resources/static/img/img_profile_user.jpg"></a>
            <a href="#name"><span class="white-text name">Homer Simpson</span></a>
            <a href="#email"><span class="white-text email">homer@simpson.com</span></a>
        </div></li>
    <li><a href="<?php echo BASE_DIR; ?>/admin"><i class="material-icons">dashboard</i>Dashboard</a></li>
    <li><a href="<?php echo BASE_DIR; ?>/produtos"><i class="material-icons">cloud</i>Catálogo</a></li>
    <li><a href="#!"><i class="material-icons">settings</i>Configurações</a></li>
    <li><div class="divider"></div></li>
    <li><a href="<?php echo BASE_DIR; ?>/"><i class="material-icons">exit_to_app</i>Sair</a></li>

</ul>
<a href="#" data-target="slide-out" class="sidenav-trigger show-on-large"><i class="material-icons">menu</i></a>



