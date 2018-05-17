<?php
/**
* Template Name: Productos
*/
?>
<main class="full box_intro">
      <div class="box_intro--img" style="background-image: url(<?php echo get_field('banner')[url]; ?>);"></div>
    </main>
    <main class="middle">
      <div class="container bgc--gainsboro mg_top--x150i">
        <ul class="tabs row pd_top--x100i">
          <li class="pd_box--x15 column column-min current" data-tab="tab_1" id="lhTab">
            <div class="box_circle box_circle--float txt_center mg_bottom--x20 hidden-sm"><span class="circle circle_site circle_site--tab" style="background-image: url(<?php echo z_taxonomy_image_url(2); ?>);"></span></div>
            <div class="title mg_bottom--x10 txt_upper txt_center txt_size--x35">
              <h2>Línea hormonal</h2>
            </div>
          </li>
          <li class="pd_box--x15 column column-min" data-tab="tab_2" id="iTab">
            <div class="box_circle box_circle--float txt_center mg_bottom--x20 hidden-sm"><span class="circle circle_site circle_site--tab" style="background-image: url(<?php echo z_taxonomy_image_url(1); ?>);"></span></div>
            <div class="title mg_bottom--x10 txt_upper txt_center txt_size--x35">
              <h2>Implementos y Equipos</h2>
            </div>
          </li>
          <li class="pd_box--x15 column column-min" data-tab="tab_3" id="vTab">
            <div class="box_circle box_circle--float txt_center mg_bottom--x20 hidden-sm"><span class="circle circle_site circle_site--tab" style="background-image: url(<?php echo z_taxonomy_image_url(5); ?>);"></span></div>
            <div class="title mg_bottom--x10 txt_upper txt_center txt_size--x35">
              <h2>Venta</h2>
            </div>
          </li>
        </ul>
      </div>
      <div class="container">
        <div class="bdr_solid bdr_color--blue bdr_width--x1 mg_top--x20"></div>
      </div>
      <div class="mg_bottom--x50 tab-content current" id="tab_1">
        <div class="container">
          <div class="bgc--blueLight mg_bottom--x30">
            <ul class="bgc--blueLight tabs_inter list--inline" id="enable">
              <li class="active" data-tab="tabs_inter1_1" id="one">
                <h3>I.A.T.F.</h3>
              </li>
<!--
              <li data-tab="tabs_inter1_2">
                <h3>T.E.</h3>
              </li>
              <li data-tab="tabs_inter1_3">
                <h3>Donantes</h3>
              </li>
               <li data-tab="tabs_inter1_4">
                <h3>Receptoras</h3>
              </li>
-->
            </ul>
          </div>
        </div>
        <div class="tabs_inter-content active" id="tabs_inter1_1">
	    <?php 
	        //I.A.T.F.
			$args=array(
		            'cat'  => 7,
		            'order'  =>  'DESC',
		            'post_type' => 'producto',
		            'posts_per_page'  =>  -1,
		            );
		
		    $query = null;
		    $query = new WP_Query($args);
		    $i=0;
		if( $query->have_posts() ) {
            
            	while ($query->have_posts()) : $query->the_post(); $i++; ?>
            		<div class="container cards1" style="<?php if($i>2){ echo 'display:none'; } ?>">
			            <div class="row">
			              <div class="column box_next bgc--gainsboro va_t">
			                <div class="box_next--img" style="background-image: url(<?php echo get_field('imagen', get_the_ID())[url]; ?>);"></div>
			                <div class="content pd_box--x20 mg_bottom--x10 va_t">
			                  <div class="title txt_upper cl--blue mg_bottom--x10">
			                    <h2><?php the_title(); ?></h2>
			                  </div>
			                  <div class="paragraf mg_bottom--x20">
			                    <p><?php echo get_field('descripcion_corta', get_the_ID()); ?></p>
			                  </div><a href="<?php echo the_permalink(); ?>?type=I.A.T.F." class="btn btn_more btn--blue btn--min"><span>Ver Más</span></a>
			                </div>
			              </div>
			            </div>
			            <div class="bdr_solid bdr_color--gray bdr_width--x1 mg_top--x20 mg_bottom--x20"></div>
					</div>
            	<?php
				endwhile;
			
        }
		wp_reset_query();
		?>
		<?php if($i>2) { ?>
			<div class="container"><a class="btn btn_moreMax btn--blue btn--full btnMax1"><span>Ver Más</span></a></div>
		<?php } ?>
        </div>
		<div class="tabs_inter-content" id="tabs_inter1_2">
	    <?php 
	        //T.E.
			$args=array(
		            'cat'  => 8,
		            'order'  =>  'DESC',
		            'post_type' => 'producto',
		            'posts_per_page'  =>  -1,
		            );
		
		    $query = null;
		    $query = new WP_Query($args);
		    $i=0;
		if( $query->have_posts() ) {
            
            	while ($query->have_posts()) : $query->the_post(); $i++; ?>
            		<div class="container cards2" style="<?php if($i>2){ echo 'display:none'; } ?>">
			            <div class="row">
			              <div class="column box_next bgc--gainsboro va_t">
			                <div class="box_next--img" style="background-image: url(<?php echo get_field('imagen', get_the_ID())[url]; ?>);"></div>
			                <div class="content pd_box--x20 mg_bottom--x10 va_t">
			                  <div class="title txt_upper cl--blue mg_bottom--x10">
			                    <h2><?php the_title(); ?></h2>
			                  </div>
			                  <div class="paragraf mg_bottom--x20">
			                    <p><?php echo get_field('descripcion_corta', get_the_ID()); ?></p>
			                  </div><a href="<?php echo the_permalink(); ?>?type=T.E." class="btn btn_more btn--blue btn--min"><span>Ver Más</span></a>
			                </div>
			              </div>
			            </div>
			            <div class="bdr_solid bdr_color--gray bdr_width--x1 mg_top--x20 mg_bottom--x20"></div>
					</div>
            	<?php
				endwhile;
			
        }
		wp_reset_query();
		?>
		<?php if($i>2) { ?>
			<div class="container"><a class="btn btn_moreMax btn--blue btn--full btnMax2"><span>Ver Más</span></a></div>
		<?php } ?>
        </div>
        <div class="tabs_inter-content" id="tabs_inter1_3">
	    <?php 
	        //Donantes
			$args=array(
		            'cat'  => 3,
		            'order'  =>  'DESC',
		            'post_type' => 'producto',
		            'posts_per_page'  =>  -1,
		            );
		
		    $query = null;
		    $query = new WP_Query($args);
		    $i=0;
		if( $query->have_posts() ) {
            
            	while ($query->have_posts()) : $query->the_post(); $i++; ?>
            		<div class="container cards3" style="<?php if($i>2){ echo 'display:none'; } ?>">
			            <div class="row">
			              <div class="column box_next bgc--gainsboro va_t">
			                <div class="box_next--img" style="background-image: url(<?php echo get_field('imagen', get_the_ID())[url]; ?>);"></div>
			                <div class="content pd_box--x20 mg_bottom--x10 va_t">
			                  <div class="title txt_upper cl--blue mg_bottom--x10">
			                    <h2><?php the_title(); ?></h2>
			                  </div>
			                  <div class="paragraf mg_bottom--x20">
			                    <p><?php echo get_field('descripcion_corta', get_the_ID()); ?></p>
			                  </div><a href="<?php echo the_permalink(); ?>?type=Donantes" class="btn btn_more btn--blue btn--min"><span>Ver Más</span></a>
			                </div>
			              </div>
			            </div>
			            <div class="bdr_solid bdr_color--gray bdr_width--x1 mg_top--x20 mg_bottom--x20"></div>
					</div>
            	<?php
				endwhile;
			
        }
		wp_reset_query();
		?>
		<?php if($i>2) { ?>
			<div class="container"><a class="btn btn_moreMax btn--blue btn--full btnMax3"><span>Ver Más</span></a></div>
		<?php } ?>
        </div>
        <div class="tabs_inter-content" id="tabs_inter1_4">
	    <?php 
	        //Receptoras
			$args=array(
		            'cat'  => 9,
		            'order'  =>  'DESC',
		            'post_type' => 'producto',
		            'posts_per_page'  =>  -1,
		            );
		
		    $query = null;
		    $query = new WP_Query($args);
		    $i=0;
		if( $query->have_posts() ) {
            
            	while ($query->have_posts()) : $query->the_post(); $i++; ?>
            		<div class="container cards4" style="<?php if($i>2){ echo 'display:none'; } ?>">
			            <div class="row">
			              <div class="column box_next bgc--gainsboro va_t">
			                <div class="box_next--img" style="background-image: url(<?php echo get_field('imagen', get_the_ID())[url]; ?>);"></div>
			                <div class="content pd_box--x20 mg_bottom--x10 va_t">
			                  <div class="title txt_upper cl--blue mg_bottom--x10">
			                    <h2><?php the_title(); ?></h2>
			                  </div>
			                  <div class="paragraf mg_bottom--x20">
			                    <p><?php echo get_field('descripcion_corta', get_the_ID()); ?></p>
			                  </div><a href="<?php echo the_permalink(); ?>?type=Receptoras" class="btn btn_more btn--blue btn--min"><span>Ver Más</span></a>
			                </div>
			              </div>
			            </div>
			            <div class="bdr_solid bdr_color--gray bdr_width--x1 mg_top--x20 mg_bottom--x20"></div>
					</div>
            	<?php
				endwhile;
			
        }
		wp_reset_query();
		?>
		<?php if($i>2) { ?>
			<div class="container"><a class="btn btn_moreMax btn--blue btn--full btnMax4"><span>Ver Más</span></a></div>
		<?php } ?>
        </div>
      </div>
       <div class="mg_bottom--x50 tab-content" id="tab_2">
        <div class="container">
          <div class="bgc--blueLight mg_bottom--x30">
            <ul class="bgc--blueLight tabs_inter list--inline">
              <li class="active" data-tab="tabs_inter2_1" id="two">
                <h3>Inseminación artificial I.A. e I.A.T.F.</h3>
              </li>
              <li data-tab="tabs_inter2_2">
                <h3>Transferencia de embriones</h3>
              </li>
<!--
              <li data-tab="tabs_inter2_3">
                <h3>Congelación de semen bovino</h3>
              </li>
-->
               <li data-tab="tabs_inter2_4">
                <h3>Laboratorio de andrología</h3>
              </li>
            </ul>
          </div>
        </div>
        <div class="tabs_inter-content active" id="tabs_inter2_1">
	    <?php 
	        //Inseminación Artificial e I.A.T.F.
			$args=array(
		            'cat'  => 10,
		            'order'  =>  'DESC',
		            'post_type' => 'producto',
		            'posts_per_page'  =>  -1,
		            );
		
		    $query = null;
		    $query = new WP_Query($args);
		    $i = 0;
		if( $query->have_posts() ) {
            
            	while ($query->have_posts()) : $query->the_post(); $i++; ?>
            		<div class="container cards5" style="<?php if($i>2){ echo 'display:none'; } ?>">
			            <div class="row">
			              <div class="column box_next bgc--gainsboro va_t">
			                <div class="box_next--img" style="background-image: url(<?php echo get_field('imagen', get_the_ID())[url]; ?>);"></div>
			                <div class="content pd_box--x20 mg_bottom--x10 va_t">
			                  <div class="title txt_upper cl--blue mg_bottom--x10">
			                    <h2><?php the_title(); ?></h2>
			                  </div>
			                  <div class="paragraf mg_bottom--x20">
			                    <p><?php echo get_field('descripcion_corta', get_the_ID()); ?></p>
			                  </div><a href="<?php echo the_permalink(); ?>?type=Inseminación Artificial E I.A.T.F." class="btn btn_more btn--blue btn--min"><span>Ver Más</span></a>
			                </div>
			              </div>
			            </div>
			            <div class="bdr_solid bdr_color--gray bdr_width--x1 mg_top--x20 mg_bottom--x20"></div>
					</div>
            	<?php
				endwhile;
			
        }
		wp_reset_query();
		?>
		<?php if($i>2) { ?>
			<div class="container"><a class="btn btn_moreMax btn--blue btn--full btnMax5"><span>Ver Más</span></a></div>
		<?php } ?>
        </div>
		<div class="tabs_inter-content" id="tabs_inter2_2">
	    <?php 
	        //Transferencia de embriones
			$args=array(
		            'cat'  => 11,
		            'order'  =>  'DESC',
		            'post_type' => 'producto',
		            'posts_per_page'  =>  -1,
		            );
		
		    $query = null;
		    $query = new WP_Query($args);
		    $i=0;
		if( $query->have_posts() ) {
            
            	while ($query->have_posts()) : $query->the_post(); $i++;?>
            		<div class="container cards6" style="<?php if($i>2){ echo 'display:none'; } ?>">
			            <div class="row">
			              <div class="column box_next bgc--gainsboro va_t">
			                <div class="box_next--img" style="background-image: url(<?php echo get_field('imagen', get_the_ID())[url]; ?>);"></div>
			                <div class="content pd_box--x20 mg_bottom--x10 va_t">
			                  <div class="title txt_upper cl--blue mg_bottom--x10">
			                    <h2><?php the_title(); ?></h2>
			                  </div>
			                  <div class="paragraf mg_bottom--x20">
			                    <p><?php echo get_field('descripcion_corta', get_the_ID()); ?></p>
			                  </div><a href="<?php echo the_permalink(); ?>?type=Transferencia de Embriones" class="btn btn_more btn--blue btn--min"><span>Ver Más</span></a>
			                </div>
			              </div>
			            </div>
			            <div class="bdr_solid bdr_color--gray bdr_width--x1 mg_top--x20 mg_bottom--x20"></div>
					</div>
            	<?php
				endwhile;
			
        }
		wp_reset_query();
		?>
		<?php if($i>2) { ?>
			<div class="container"><a class="btn btn_moreMax btn--blue btn--full btnMax6"><span>Ver Más</span></a></div>
		<?php } ?>
        </div>
        <div class="tabs_inter-content" id="tabs_inter2_3">
	    <?php 
	        //Congelación de Semen Bovino
			$args=array(
		            'cat'  => 12,
		            'order'  =>  'DESC',
		            'post_type' => 'producto',
		            'posts_per_page'  =>  -1,
		            );
		
		    $query = null;
		    $query = new WP_Query($args);
		    $i=0;
		if( $query->have_posts() ) {
            
            	while ($query->have_posts()) : $query->the_post(); $i++; ?>
            		<div class="container cards7" style="<?php if($i>2){ echo 'display:none'; } ?>">
			            <div class="row">
			              <div class="column box_next bgc--gainsboro va_t">
			                <div class="box_next--img" style="background-image: url(<?php echo get_field('imagen', get_the_ID())[url]; ?>);"></div>
			                <div class="content pd_box--x20 mg_bottom--x10 va_t">
			                  <div class="title txt_upper cl--blue mg_bottom--x10">
			                    <h2><?php the_title(); ?></h2>
			                  </div>
			                  <div class="paragraf mg_bottom--x20">
			                    <p><?php echo get_field('descripcion_corta', get_the_ID()); ?></p>
			                  </div><a href="<?php echo the_permalink(); ?>?type=Congelacion de Semen Bovino" class="btn btn_more btn--blue btn--min"><span>Ver Más</span></a>
			                </div>
			              </div>
			            </div>
			            <div class="bdr_solid bdr_color--gray bdr_width--x1 mg_top--x20 mg_bottom--x20"></div>
					</div>
            	<?php
				endwhile;
			
        }
		wp_reset_query();
		?>
		<?php if($i>2) { ?>
			<div class="container"><a class="btn btn_moreMax btn--blue btn--full btnMax7"><span>Ver Más</span></a></div>
		<?php } ?>
        </div>
        <div class="tabs_inter-content" id="tabs_inter2_4">
	    <?php 
	        //Laboratorio
			$args=array(
		            'cat'  => 13,
		            'order'  =>  'DESC',
		            'post_type' => 'producto',
		            'posts_per_page'  =>  -1,
		            );
		
		    $query = null;
		    $query = new WP_Query($args);
		    $i=0;
		if( $query->have_posts() ) {
            
            	while ($query->have_posts()) : $query->the_post(); $i++; ?>
            		<div class="container cards8" style="<?php if($i>2){ echo 'display:none'; } ?>">
			            <div class="row">
			              <div class="column box_next bgc--gainsboro va_t">
			                <div class="box_next--img" style="background-image: url(<?php echo get_field('imagen', get_the_ID())[url]; ?>);"></div>
			                <div class="content pd_box--x20 mg_bottom--x10 va_t">
			                  <div class="title txt_upper cl--blue mg_bottom--x10">
			                    <h2><?php the_title(); ?></h2>
			                  </div>
			                  <div class="paragraf mg_bottom--x20">
			                    <p><?php echo get_field('descripcion_corta', get_the_ID()); ?></p>
			                  </div><a href="<?php echo the_permalink(); ?>?type=Laboratorio" class="btn btn_more btn--blue btn--min"><span>Ver Más</span></a>
			                </div>
			              </div>
			            </div>
			            <div class="bdr_solid bdr_color--gray bdr_width--x1 mg_top--x20 mg_bottom--x20"></div>
					</div>
            	<?php
				endwhile;
			
        }
		wp_reset_query();
		?>
		<?php if($i>2) { ?>
			<div class="container"><a class="btn btn_moreMax btn--blue btn--full btnMax8"><span>Ver Más</span></a></div>
		<?php } ?>
        </div>
       </div>
        <div class="mg_bottom--x50 tab-content" id="tab_3">
        <div class="container">
          <div class="bgc--blueLight mg_bottom--x30">
            <ul class="bgc--blueLight tabs_inter list--inline">
              <li class="active" data-tab="tabs_inter3_1" id="three">
                <h3>Animales Puros</h3>
              </li>
              <li data-tab="tabs_inter3_2" class="hidden">
                <h3>Venta de pajilla de toros</h3>
              </li>
              <li data-tab="tabs_inter3_3">
                <h3>Venta de preñeces</h3>
              </li>
            </ul>
          </div>
        </div>
        <div class="tabs_inter-content active" id="tabs_inter3_1">
	    <?php 
	        //Animales Puros
			$args=array(
		            'cat'  => 14,
		            'order'  =>  'DESC',
		            'post_type' => 'producto',
		            'posts_per_page'  =>  -1,
		            );
		
		    $query = null;
		    $query = new WP_Query($args);
		    $i = 0;
		if( $query->have_posts() ) {
            
            	while ($query->have_posts()) : $query->the_post(); $i++; ?>
            		<div class="container cards9" style="<?php if($i>2){ echo 'display:none'; } ?>">
			            <div class="row">
			              <div class="column box_next bgc--gainsboro va_t">
			                <div class="box_next--img" style="background-image: url(<?php echo get_field('imagen', get_the_ID())[url]; ?>);"></div>
			                <div class="content pd_box--x20 mg_bottom--x10 va_t">
			                  <div class="title txt_upper cl--blue mg_bottom--x10">
			                    <h2><?php the_title(); ?></h2>
			                  </div>
			                  <div class="paragraf mg_bottom--x20">
			                    <p><?php echo get_field('descripcion_corta', get_the_ID()); ?></p>
			                  </div><a href="<?php echo the_permalink(); ?>?type=Animales Puros" class="btn btn_more btn--blue btn--min"><span>Ver Más</span></a>
			                </div>
			              </div>
			            </div>
			            <div class="bdr_solid bdr_color--gray bdr_width--x1 mg_top--x20 mg_bottom--x20"></div>
					</div>
            	<?php
				endwhile;
			
        }
		wp_reset_query();
		?>
		   <?php if($i>2) { ?>
		   		<div class="container"><a class="btn btn_moreMax btn--blue btn--full btnMax9"><span>Ver Más</span></a></div>
			<?php } ?>
        </div>
		<div class="tabs_inter-content" id="tabs_inter3_2">
	    <?php 
	        //Venta de pajilla de toros nacionales e importados
			$args=array(
		            'cat'  => 15,
		            'order'  =>  'DESC',
		            'post_type' => 'producto',
		            'posts_per_page'  =>  -1,
		            );
		
		    $query = null;
		    $query = new WP_Query($args);
		    $i = 0;
		if( $query->have_posts() ) {
            
            	while ($query->have_posts()) : $query->the_post(); $i++; ?>
            		<div class="container cards10" style="<?php if($i>2){ echo 'display:none'; } ?>">
			            <div class="row">
			              <div class="column box_next bgc--gainsboro va_t">
			                <div class="box_next--img" style="background-image: url(<?php echo get_field('imagen', get_the_ID())[url]; ?>);"></div>
			                <div class="content pd_box--x20 mg_bottom--x10 va_t">
			                  <div class="title txt_upper cl--blue mg_bottom--x10">
			                    <h2><?php the_title(); ?></h2>
			                  </div>
			                  <div class="paragraf mg_bottom--x20">
			                    <p><?php echo get_field('descripcion_corta', get_the_ID()); ?></p>
			                  </div><a href="<?php echo the_permalink(); ?>?type=Venta de Pajilla de Toros Nacionales e Importados" class="btn btn_more btn--blue btn--min"><span>Ver Más</span></a>
			                </div>
			              </div>
			            </div>
			            <div class="bdr_solid bdr_color--gray bdr_width--x1 mg_top--x20 mg_bottom--x20"></div>
					</div>
            	<?php
				endwhile;
			
        }
		wp_reset_query();
		?>
		 <?php if($i>2) { ?>
			<div class="container"><a class="btn btn_moreMax btn--blue btn--full btnMax10"><span>Ver Más</span></a></div>
		  <?php } ?>
        </div>
        <div class="tabs_inter-content" id="tabs_inter3_3">
	    <?php 
	        //Venta de preñeces garantizadas
			$args=array(
		            'cat'  => 16,
		            'order'  =>  'DESC',
		            'post_type' => 'producto',
		            'posts_per_page'  =>  -1,
		            );
		
		    $query = null;
		    $query = new WP_Query($args);
		    $i=0;
		if( $query->have_posts() ) {
            
            	while ($query->have_posts()) : $query->the_post(); $i++; ?>
            		<div class="container cards11" style="<?php if($i>2){ echo 'display:none'; } ?>">
			            <div class="row">
			              <div class="column box_next bgc--gainsboro va_t">
			                <div class="box_next--img" style="background-image: url(<?php echo get_field('imagen', get_the_ID())[url]; ?>);"></div>
			                <div class="content pd_box--x20 mg_bottom--x10 va_t">
			                  <div class="title txt_upper cl--blue mg_bottom--x10">
			                    <h2><?php the_title(); ?></h2>
			                  </div>
			                  <div class="paragraf mg_bottom--x20">
			                    <p><?php echo get_field('descripcion_corta', get_the_ID()); ?></p>
			                  </div><a href="<?php echo the_permalink(); ?>?type=Venta de Preneces Garantizadas" class="btn btn_more btn--blue btn--min"><span>Ver Más</span></a>
			                </div>
			              </div>
			            </div>
			            <div class="bdr_solid bdr_color--gray bdr_width--x1 mg_top--x20 mg_bottom--x20"></div>
					</div>
            	<?php
				endwhile;
			
        }
		wp_reset_query();
		?>
		 <?php if($i>2) { ?>
			<div class="container"><a class="btn btn_moreMax btn--blue btn--full btnMax11"><span>Ver Más</span></a></div>
		 <?php } ?>
        </div>
      </div>
    </main>
	<script>
		(function($) {
			$('#lhTab').click(function() {
				$('.active').each(function () {
					$(this).removeClass('active');
				});
				$('#one').addClass('active');
				$('#tabs_inter1_1').addClass('active');
			});
			$('#iTab').click(function() {
				$('.active').each(function () {
					$(this).removeClass('active');
				});
				$('#two').addClass('active');
				$('#tabs_inter2_1').addClass('active');
			});
			$('#vTab').click(function() {
				$('.active').each(function () {
					$(this).removeClass('active');
				});
				$('#three').addClass('active');
				$('#tabs_inter3_1').addClass('active');
			});
			
			$('.btnMax1').click(function() {
				$('.cards1').each(function() {
					$(this).fadeIn('slow');
				});
				$(this).fadeOut('slow');
			});
			$('.btnMax2').click(function() {
				$('.cards2').each(function() {
					$(this).fadeIn('slow');
				});
				$(this).fadeOut('slow');
			});
			$('.btnMax3').click(function() {
				$('.cards3').each(function() {
					$(this).fadeIn('slow');
				});
				$(this).fadeOut('slow');
			});
			$('.btnMax4').click(function() {
				$('.cards4').each(function() {
					$(this).fadeIn('slow');
				});
				$(this).fadeOut('slow');
			});
			$('.btnMax5').click(function() {
				$('.cards5').each(function() {
					$(this).fadeIn('slow');
				});
				$(this).fadeOut('slow');
			});
			$('.btnMax6').click(function() {
				$('.cards6').each(function() {
					$(this).fadeIn('slow');
				});
				$(this).fadeOut('slow');
			});
			$('.btnMax7').click(function() {
				$('.cards7').each(function() {
					$(this).fadeIn('slow');
				});
				$(this).fadeOut('slow');
			});
			$('.btnMax8').click(function() {
				$('.cards8').each(function() {
					$(this).fadeIn('slow');
				});
				$(this).fadeOut('slow');
			});
			$('.btnMax9').click(function() {
				$('.cards9').each(function() {
					$(this).fadeIn('slow');
				});
				$(this).fadeOut('slow');
			});
			$('.btnMax10').click(function() {
				$('.cards10').each(function() {
					$(this).fadeIn('slow');
				});
				$(this).fadeOut('slow');
			});
			$('.btnMax11').click(function() {
				$('.cards11').each(function() {
					$(this).fadeIn('slow');
				});
				$(this).fadeOut('slow');
			});
			
		})(jQuery);
	</script>
	<style type="text/css" media="screen">
		li { cursor: pointer; cursor: hand; }
	</style>