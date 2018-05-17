
<main class="full box_intro">
    <div class="box_intro--img" style="background-image: url(<?php echo get_field('imagen')[url]; ?>);height: 300px;background-size: cover;background-repeat:  no-repeat;background-position: top center;"></div>
</main>




<main class="middle pd_top--x50 pd_bottom--x100">
    <section class="breadcrumb container pd_bottom--x10">
        <ul class="list_breadcrumb list--inline txt_upper">
            <li><span class="cl--blue"><?php echo $_GET['type']; ?></span></li>
            <li><a href="/">Regresar <?php //echo get_field('raza'); ?></a></li>
            <li><span class="cl--lightGray"><?php the_title(); ?></span></li>
        </ul>
        <div class="bdr_solid bdr_color--blue bdr_width--x1 mg_top--x10 mg_bottom--x20"></div>
    </section>
    <section class="intro mg_bottom--x50">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="title txt_upper cl--blue mg_bottom--x10">
                        <h2>Liga de Fútbol de Bogotá / <?php the_title(); ?></h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <!-- Proximo Partido -->
                <div class="col">
                    <?php echo get_field('ultimo_partido'); ?>
                </div>
                <!-- Ultimo Partido -->
                <div class="col">
                    <?php echo get_field('proximo_paritido'); ?>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <div class="breadcrumb container pd_bottom--x10">
                        <h4>Tabla</h4>
                    </div>
                    <div style="display: block; margin-bottom: 15px">
                        <?php echo get_field('tabla'); ?>
                    </div>
                </div>
                <div class="col">
                    <?php echo get_field('fixture'); ?>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <?php echo get_field('fixture'); ?>
                </div>
                <div class="col">
                    <?php echo get_field('calendario'); ?>
                </div>
            </div>
        </div>
    </section>
</main>