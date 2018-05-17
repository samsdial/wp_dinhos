<?php
/**
* Template Name: Servicios
*/
?>

<main class="full box_intro">
      <div class="box_intro--img" style="background-image: url(<?php echo get_field('banner')[url]; ?>);"></div>
    </main>
    <main class="middle pd_top--x50 pd_bottom--x100">
      <section class="intro mg_bottom--x10">
        <div class="container">
          <div class="title mg_bottom--x20 txt_upper txt_size--x35 txt_center cl--blue">
            <h2>La división bovinos</h2>
          </div>
          <div class="content mg_bottom--x20 txt_center">
            <p>Se encarga de ofrecer soporte técnico en el área de reproducción, aplicada al mejoramiento genético de las ganaderías de carne y leche, mediante la aplicación de las herramientas de la biotecnología.</p>
          </div>
        </div>
      </section>
      <section class="hidden-sm">
        <div class="container bgc--gainsboro mg_top--x150i">
          <ul class="tabs row pd_top--x100i">
            <li class="pd_box--x15 column column-middle current" data-tab="tab_1">
              <div class="box_circle box_circle--float txt_center mg_bottom--x20"><span class="circle circle_site circle_site--tab" style="background-image: url(<?php echo z_taxonomy_image_url(21); ?>);"></span></div>
              <div class="title mg_bottom--x10 txt_upper txt_center txt_size--x35">
                <h2>Hembras</h2>
              </div>
              <div class="content-tab mg_bottom--x10 txt_center">
                <p><?php echo category_description(21); ?></p>
              </div>
            </li>
            <li class="pd_box--x15 column column-middle" data-tab="tab_2">
              <div class="box_circle box_circle--float txt_center mg_bottom--x20"><span class="circle circle_site circle_site--tab" style="background-image: url(<?php echo z_taxonomy_image_url(22); ?>);"></span></div>
              <div class="title mg_bottom--x10 txt_upper txt_center txt_size--x35">
                <h2>Machos</h2>
              </div>
              <div class="content-tab mg_bottom--x10 txt_center">
                <p><?php echo category_description(22); ?></p>
              </div>
            </li>
          </ul>
        </div>
        <div class="container">
          <div class="bdr_solid bdr_color--blue bdr_width--x3 mg_bottom--x20"></div>
        </div>
        <div class="container">
          <div class="tab-content current" id="tab_1">
		    <?php 
		        //Hembras
				$args=array(
			            'cat'  => 21,
			            'order'  =>  'DESC',
			            'post_type' => 'servicios',
			            'posts_per_page'  =>  -1,
			            );
			
			    $query = null;
			    $query = new WP_Query($args);
			    $i = 0;
				if( $query->have_posts() ) {
	            	while ($query->have_posts()) : $query->the_post(); $i++;?>
	            		<?php if ($i%2!=0) { ?>
	            			<div class="row cards1" style="<?php if($i>4){echo 'display:none';}?>">
						<?php } ?>
			              <div class="column column-middle pd_right--x10">
			                <ul>
			                  <li><b><?php the_title(); ?></b></li>
			                </ul>
			                <p><?php echo get_field('descripcion_corta', get_the_ID()); ?></p>
			              </div>
			            <?php if ($i%2==0) { ?>
			              </div>
						<?php } ?>
	            	<?php
					endwhile;
		        }
			wp_reset_query();
			?>
			<?php if ($i%2!=0) { ?>
			     </div>
			<?php } ?>
			<br>
			<?php if ($i>4) { ?>
				<div class="container"><a class="btn btn_moreMax btn--blue btn--full buttonMax1"><span>Ver Más</span></a></div>
			<?php } ?>
          </div>
          <div class="tab-content" id="tab_2">
	          <?php 
		        //Machos
				$args=array(
			            'cat'  => 22,
			            'order'  =>  'DESC',
			            'post_type' => 'servicios',
			            'posts_per_page'  =>  -1,
			            );
			
			    $query = null;
			    $query = new WP_Query($args);
			    $i = 0;
				if( $query->have_posts() ) {
	            	while ($query->have_posts()) : $query->the_post(); $i++;?>
	            		<?php if ($i%2!=0) { ?>
	            			<div class="row cards2" style="<?php if($i>4){echo 'display:none';}?>">
						<?php } ?>
			              <div class="column column-middle pd_right--x10">
			                <ul>
			                  <li><b><?php the_title(); ?></b></li>
			                </ul>
			                <p><?php echo get_field('descripcion_corta', get_the_ID()); ?></p>
			              </div>
			            <?php if ($i%2==0) { ?>
			              </div>
						<?php } ?>
	            	<?php
					endwhile;
		        }
			wp_reset_query();
			?>
			<?php if ($i%2!=0) { ?>
			     </div>
			<?php } ?>
			<br>
			<?php if ($i>4) { ?>
				<div class="container"><a class="btn btn_moreMax btn--blue btn--full buttonMax2"><span>Ver Más</span></a></div>
			<?php } ?>
          </div>
        </div>
      </section>
      <section class="hidden-md hidden-lg">
        <div class="row">
          <div class="bgc--gainsboro pd_box--x15 column">
            <div class="box_circle txt_center mg_bottom--x20"><span class="circle circle_site" style="background-image: url(<?php echo z_taxonomy_image_url(21); ?>);"></span></div>
            <div class="title cl--blue mg_bottom--x10 txt_upper txt_center txt_size--x35">
              <h2>Hembras</h2>
            </div>
            <div class="content mg_bottom--x10 txt_center">
              <p><?php echo category_description(21); ?></p>
            </div>
          </div>
          <div class="bdr_solid bdr_color--blue bdr_width--x3 mg_bottom--x20"></div>
          <div class="column mg_bottom--x20">
             <?php 
		        //Hembras
				$args=array(
			            'cat'  => 21,
			            'order'  =>  'DESC',
			            'post_type' => 'servicios',
			            'posts_per_page'  =>  -1,
			            );
			
			    $query = null;
			    $query = new WP_Query($args);
			    $i = 0;
				if( $query->have_posts() ) {
	            	while ($query->have_posts()) : $query->the_post(); $i++;?>
	            		<?php if ($i%2!=0) { ?>
	            			<div class="row cards1" style="<?php if($i>2){echo 'display:none';}?>">
						<?php } ?>
			              <div class="column column-middle pd_right--x10">
			                <ul>
			                  <li><b><?php the_title(); ?></b></li>
			                </ul>
			                <p><?php echo get_field('descripcion_corta', get_the_ID()); ?></p>
			              </div>
			            <?php if ($i%2==0) { ?>
			              </div>
						<?php } ?>
	            	<?php
					endwhile;
		        }
			wp_reset_query();
			?>
			<?php if ($i%2!=0) { ?>
			     </div>
			<?php } ?>
			<br>
			<?php if ($i>2) { ?>
				<div class="container"><a class="btn btn_moreMax btn--blue btn--full buttonMax1"><span>Ver Más</span></a></div>
			<?php } ?>
          </div>
        </div>
        <div class="row">
          <div class="bgc--gainsboro pd_box--x15 column">
            <div class="box_circle txt_center mg_bottom--x20"><span class="circle circle_site" style="background-image: url(<?php echo z_taxonomy_image_url(22); ?>);"></span></div>
            <div class="title cl--blue mg_bottom--x10 txt_upper txt_center txt_size--x35">
              <h2>Machos</h2>
            </div>
            <div class="content mg_bottom--x10 txt_center">
              <p><?php echo category_description(22); ?></p>
            </div>
          </div>
          <div class="bdr_solid bdr_color--blue bdr_width--x3 mg_bottom--x20"></div>
          <div class="column mg_bottom--x20">
             <?php 
		        //Machos
				$args=array(
			            'cat'  => 22,
			            'order'  =>  'DESC',
			            'post_type' => 'servicios',
			            'posts_per_page'  =>  -1,
			            );
			
			    $query = null;
			    $query = new WP_Query($args);
			    $i = 0;
				if( $query->have_posts() ) {
	            	while ($query->have_posts()) : $query->the_post(); $i++;?>
	            		<?php if ($i%2!=0) { ?>
	            			<div class="row cards2" style="<?php if($i>2){echo 'display:none';}?>">
						<?php } ?>
			              <div class="column column-middle pd_right--x10">
			                <ul>
			                  <li><b><?php the_title(); ?></b></li>
			                </ul>
			                <p><?php echo get_field('descripcion_corta', get_the_ID()); ?></p>
			              </div>
			            <?php if ($i%2==0) { ?>
			              </div>
						<?php } ?>
	            	<?php
					endwhile;
		        }
			wp_reset_query();
			?>
			<?php if ($i%2!=0) { ?>
			     </div>
			<?php } ?>
			<br>
			<?php if ($i>2) { ?>
				<div class="container"><a class="btn btn_moreMax btn--blue btn--full buttonMax2"><span>Ver Más</span></a></div>
			<?php } ?>
          </div>
        </div>
      </section>
    </main>
		<script>
		  (function($) {
				$('.buttonMax2').click(function() {
					$('.cards2').each(function() {
						$(this).fadeIn('slow');
					});
					$(this).fadeOut('slow');
				});
				$('.buttonMax1').click(function() {
					$('.cards1').each(function() {
						$(this).fadeIn('slow');
					});
					$(this).fadeOut('slow');
				});
			})(jQuery);
		</script>