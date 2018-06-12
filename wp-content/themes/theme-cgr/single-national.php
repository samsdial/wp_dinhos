
<main class="full box_intro">
    <div class="box_intro--img box_intro--height" style="background-image: url(<?php echo get_field('imagen')[url]; ?>);">
        <div class="container">
            <div class="box_intro--height d-table-cell align-bottom">
            <div class="intro">
                <div class="title bgc--white cl--silver d-block p-2 txt_size--em3">
                    Campeonato Nacional
                </div>
                <div class="subtitle bgc--black cl--white p-2 txt_size--em4">
                    <?php the_title(); ?>
                </div>
            </div>
            </div>
        </div>
    </div>
</main>
<main class="bgc--red">
    <div class="container">
        <div class="row">
            <div class="col text-right">
                <div class="title txt_upper cl--white mg_top--x10">
                    <h4>Tabla <span class="icon icon-angle-right"></span> Fixture / <?php the_title(); ?></h4>
                </div>
            </div>
        </div>
        <div class="row">
            <!-- Proximo Partido -->
            <div class="col-12 col-sm-6">
                <div class="breadcrumb container bgc--white cl--red mb-0">
                    <h4>Proximo Partido</h4>
                </div>
                <div class="next_match">
                    <?php echo get_field('proximo_partido'); ?>
                </div>
            </div>
            <!-- Ultimo Partido -->
            <div class="col-12 col-sm-6">
                <div class="breadcrumb container bgc--red cl--white mb-0">
                    <h4>Ultimo Partido</h4>
                </div>
                <div class="after_match">
                    <?php echo get_field('ultimo_partido'); ?>
                </div>
            </div>


        </div>
    </div>
</main>
<main class="bgc--white pd_bottom--x100">
    <section class="intro mg_bottom--x50">
        <div class="container-fluid">
            <div class="row">
                <div class="col">
                    <div class="table_league pd_bottom--x10 <?php echo get_field('ranking_dh'); ?>">
                        <?php echo get_field('tabla'); ?>
                    </div>
                </div>
                <!--Acordion Fixture-->
                <div class="col">
                    <div class="bgc--red cl--white p-4">
                        <h4>Fixtures / Calendario <small>(<?php the_title(); ?>)</small></h4>
                    </div>
                    <!--<div class="accordion" id="accordionExample">
                        <?php /*if( get_field('fixture') ): */?>
                            <?php /*while ( has_sub_field('fixture') ) :*/?>
                                <?php /*if( get_row_layout() == 'acordeon_date4' ): */?>
                                    <div class="card">
                                        <div class="card-header" id="headingOne">
                                            <button class="btn btn_ghost" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                                            </button>
                                            <h5 class="title mb-0 p-3 cl--red txt_size--em2">
                                                <span class="icon icon-angle-down mr-2"></span>
                                                <span><?php /*the_sub_field('title'); */?></span>
                                                <span class="circle card bgc--silver cl--white">
                                                    <span style="font-size: 21px">vs</span>
                                                </span>
                                            </h5>
                                        </div>
                                        <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample" style="">
                                            <div class="card-body ">
                                                <?php /*the_sub_field('date'); */?>
                                            </div>
                                        </div>
                                    </div>
                                <?php /*endif; */?>
                                <?php /*if( get_row_layout() == 'acordeon_date3' ): */?>
                                    <div class="card">
                                        <div class="card-header" id="headingTwo">
                                            <button class="btn btn_ghost" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseOne">
                                            </button>
                                            <h5 class="title mb-0 p-3 cl--red txt_size--em2">
                                                <span class="icon icon-angle-down mr-2"></span>
                                                <span><?php /*the_sub_field('title'); */?></span>
                                                <span class="circle card bgc--silver cl--white">
                                                    <span style="font-size: 21px">vs</span>
                                                </span>
                                            </h5>

                                        </div>
                                        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample" style="">
                                            <div class="card-body cl--blue">
                                                <?php /*the_sub_field('date'); */?>
                                            </div>
                                        </div>
                                    </div>
                                <?php /*endif; */?>
                                <?php /*if( get_row_layout() == 'acordeon_date2' ): */?>
                                    <div class="card">
                                        <div class="card-header" id="headingThree">
                                            <button class="btn btn_ghost" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseOne">
                                            </button>
                                            <h5 class="title mb-0 p-3 cl--red txt_size--em2">
                                                <span class="icon icon-angle-down mr-2"></span>
                                                <span><?php /*the_sub_field('title'); */?></span>
                                                <span class="circle card bgc--silver cl--white">
                                                    <span style="font-size: 21px">vs</span>
                                                </span>
                                            </h5>
                                        </div>
                                        <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample" style="">
                                            <div class="card-body cl--blue">
                                                <?php /*the_sub_field('date'); */?>
                                            </div>
                                        </div>
                                    </div>
                                <?php /*endif; */?>
                                <?php /*if( get_row_layout() == 'acordeon_date1' ): */?>
                                    <div class="card">
                                        <div class="card-header" id="headingfour">
                                            <button class="btn btn_ghost" type="button" data-toggle="collapse" data-target="#collapsefour" aria-expanded="true" aria-controls="collapseOne">
                                            </button>
                                            <h5 class="title mb-0 p-3 cl--red txt_size--em2">
                                                <span class="icon icon-angle-down mr-2"></span>
                                                <span><?php /*the_sub_field('title'); */?></span>
                                                <span class="circle card bgc--silver cl--white">
                                                    <span style="font-size: 21px">vs</span>
                                                </span>
                                            </h5>
                                        </div>
                                        <div id="collapsefour" class="collapse show" aria-labelledby="headingfour" data-parent="#accordionExample" style="">
                                            <div class="card-body cl--blue">
                                                <?php /*the_sub_field('date'); */?>
                                            </div>
                                        </div>
                                    </div>
                                <?php /*endif; */?>
                            <?php /*endwhile; */?>
                        <?php /*else : */?>
                        <?php /*endif; */?>
                    </div>-->
                    <div class="accordion" id="accteam">
                        <?php
                        if( have_rows('new_fixture') ):
                            while ( have_rows('new_fixture') ) : the_row(); ?>
                                <div class="card">
                                    <div class="card-header" id="headinga<?php the_sub_field('new_id'); ?> ">
                                        <button class="btn btn_ghost" type="button" data-toggle="collapse" data-target="#<?php the_sub_field('new_id'); ?>" aria-expanded="false" aria-controls="collapseOne">
                                        </button>
                                        <h5 class="title mb-0 p-3 cl--red txt_size--em2">
                                            <span class="icon icon-angle-down mr-2"></span>
                                            <span><?php the_sub_field('new_title'); ?></span>
                                            <span class="circle card bgc--silver cl--white">
                                                    <span style="font-size: 21px">vs</span>
                                                </span>
                                        </h5>
                                    </div>
                                    <div id="<?php the_sub_field('new_id'); ?>" class="collapse" aria-labelledby="heading<?php the_sub_field('new_id'); ?>" data-parent="#accteam" style="">
                                        <div class="card-body ">
                                            <?php the_sub_field('new_date'); ?>
                                        </div>
                                    </div>
                                </div>

                            <?php   endwhile; ?>

                        <?php else : ?>
                            <div class="text-center">
                                <p> No info</p>
                            </div>
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
    <section class="breadcrumb container pd_bottom--x10 hidden">
        <ul class="list_breadcrumb list--inline txt_upper">
            <li><span class="cl--blue"><?php echo $_GET['type']; ?></span></li>
            <li><a href="/">Regresar <?php //echo get_field('raza'); ?></a></li>
            <li><span class="cl--lightGray"><?php the_title(); ?></span></li>
        </ul>
        <div class="bdr_solid bdr_color--blue bdr_width--x1 mg_top--x10 mg_bottom--x20"></div>
    </section>
</main>


