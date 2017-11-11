<nav class="navbar navbar-default">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">Menu</a>
        </div>

        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

            <?php if (is_home()) { ?>
                <?php wp_nav_menu(array('menu' => 'home', 'menu_class' => 'nav navbar-nav navbar-left')); ?>
            <?php } else { ?>
                <?php wp_nav_menu(array('menu' => 'topo', 'menu_class' => 'nav navbar-nav navbar-left')); ?>
            <?php } ?>
        </div>
    </div>
</nav>

