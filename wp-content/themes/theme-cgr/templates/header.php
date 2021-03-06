

<!-- <header class="banner">
  <div class="container">
    <a class="brand" href="<?= esc_url(home_url('/')); ?>"><?php bloginfo('name'); ?></a>
    <nav class="nav-primary">
      <?php
      if (has_nav_menu('primary_navigation')) :
        wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav']);
      endif;
      ?>
    </nav>
  </div>
</header> -->

<header class="header-main">
    <div class="header-upper bgc--white">
        <div class="auto-container">
            <div class="clearfix">
                <div class="logo_box">
                    <div class="logo logo-dh"><a class="btn_ghost" href="/"></a></div>
                </div>
                <div class="text-right upper_right">
                    <div class="upper-column info_box cl--red">
                        <div class="icon_box"><span class="icon icon-campo"></span></div>
                        <ul>
                            <li><b>Bogotá D.C / Sport Full</b></li>
                            <li> Calle 146F No 72b - 01</li>
                        </ul>
                    </div>
                    <div class="upper-column info_box cl--red">
                        <div class="icon_box"><span class="icon icon-premio"></span></div>
                        <ul>
                            <li><b>Celular</b></li>
                            <li> (+57) 320 2848961</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="header-lower bgc--red">
        <div class="auto-container text-right">
            <div class="col-12">
                <div class="cd-dropdown-wrapper "><a class="cd-dropdown-trigger" href="#0">Menú</a>
                    <nav class="cd-dropdown">
                        <h2>Menú</h2><a class="cd-close" href="#0">Close</a>
                        <ul class="cd-dropdown-content">
                            <li><a href="">Proximamente!</a></li>
                            <li class="see-all see-all_movie"><a class="btn btn_quote" href="https://goo.gl/MDUpqs" target="_blank"><b class="cl--white txt_upper">pagos en linea</b></a></li>
                        </ul>
                    </nav>
                </div>
                <div class="btn-box hidden-sm"><a class="btn btn_quote" href="https://goo.gl/MDUpqs" target="_blank">Pago En Linea</a></div>
            </div>
        </div>
    </div>
    <div class="header-lower hidden">
        <div class="auto-container">
            <div class="nav-outer clearfix">
                <nav class="main-menu hidden">
                    <div class="navbar-header">
                        <button class="navbar-toggle" type="button" data-toggle="collapse" data-target=".navbar-collapse"><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button>
                    </div>
                    <div class="navbar-collapse collapse clearfix">
                        <ul class="navigation clearfix">
                            <li class="dropdown"><a href="#">Inicio</a></li>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
    </div>
</header>

<div class="hidden">
<?php
if (has_nav_menu('primary_navigation')) :
    wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav_site']);
endif;
?>
</div>