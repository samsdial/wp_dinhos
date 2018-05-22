
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
        <div class="container-fluid">
            <div class="row">
                <div class="col">
                    <div class="title txt_upper cl--blue mg_bottom--x10">
                        <h2>Nacionales / <?php the_title(); ?></h2>
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
                    <?php echo get_field('proximo_partido'); ?>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <div class="breadcrumb container pd_bottom--x10">
                        <h4>Tabla</h4>
                    </div>
                    <div class="pd_bottom--x10">
                        <?php echo get_field('tabla'); ?>
                    </div>
                </div>
                <!--Acordion Fixture-->
                <div class="col">
                    <div class="breadcrumb container pd_bottom--x10">
                        <h4>Fixtures / Calendario</h4>
                    </div>
                    <div class="accordion" id="accordionExample">
                        <?php if( get_field('fixture') ): ?>
                            <?php while ( has_sub_field('fixture') ) :?>
                                <?php if( get_row_layout() == 'acordeon_date4' ): ?>
                                    <div class="card">
                                        <div class="card-header" id="headingOne">
                                            <h5 class="mb-0">
                                                <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                                                    <span class="talleres aicon" ></span>
                                                    <span>
                                            <?php the_sub_field('title'); ?>
                                        </span>
                                                </button>
                                            </h5>
                                        </div>
                                        <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample" style="">
                                            <div class="card-body ">
                                                <?php the_sub_field('date'); ?>
                                            </div>
                                        </div>
                                    </div>
                                <?php endif; ?>
                                <?php if( get_row_layout() == 'acordeon_date3' ): ?>
                                    <div class="card">
                                        <div class="card-header" id="headingTwo">
                                            <h5 class="mb-0">
                                                <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                                    <span class="talleres aicon"></span>
                                                    <span><?php the_sub_field('title'); ?></span>
                                                </button>
                                            </h5>
                                        </div>
                                        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample" style="">
                                            <div class="card-body cl--blue">
                                                <?php the_sub_field('date'); ?>
                                            </div>
                                        </div>
                                    </div>
                                <?php endif; ?>
                                <?php if( get_row_layout() == 'acordeon_date2' ): ?>
                                    <div class="card">
                                        <div class="card-header" id="headingThree">
                                            <h5 class="mb-0">
                                                <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="true" aria-controls="collapseThree">
                                                    <span class="talleres aicon" ></span>
                                                    <span>
                                            <?php the_sub_field('title'); ?>
                                        </span>
                                                </button>
                                            </h5>
                                        </div>
                                        <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample" style="">
                                            <div class="card-body cl--blue">
                                                <?php the_sub_field('date'); ?>
                                            </div>
                                        </div>
                                    </div>
                                <?php endif; ?>
                                <?php if( get_row_layout() == 'acordeon_date1' ): ?>
                                    <div class="card">
                                        <div class="card-header" id="headingfour">
                                            <h5 class="mb-0">
                                                <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapsefour" aria-expanded="false" aria-controls="collapsefour">
                                                    <span class="talleres aicon"></span>
                                                    <span><?php the_sub_field('title');?></span>
                                                </button>
                                            </h5>
                                        </div>
                                        <div id="collapsefour" class="collapse" aria-labelledby="headingfour" data-parent="#accordionExample" style="">
                                            <div class="card-body cl--blue">
                                                <?php the_sub_field('date'); ?>
                                            </div>
                                        </div>
                                    </div>
                                <?php endif; ?>
                            <?php endwhile; ?>
                        <?php else : ?>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
            <div class="row">
                <!--<div class="col">
                    <?php /*echo get_field('fixture'); */?>
                </div>-->
                <div class="col">
                    <?php echo get_field('calendario'); ?>
                </div>
            </div>
        </div>
    </section>
</main>
