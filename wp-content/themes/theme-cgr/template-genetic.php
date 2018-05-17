<?php
/**
* Template Name: Material Genético
*/
?>

<main class="full box_intro">
  <div class="box_intro--img" style="background-image: url(<?php echo get_field('banner')[url]; ?>);"></div>
</main>
<main class="middle">
  <div class="container bgc--gainsboro mg_top--x150i">
    <ul class="tabs row pd_top--x100i">
      <li class="pd_box--x15 column column-min current" data-tab="tab_1">
        <div class="box_circle box_circle--float txt_center mg_bottom--x20 hidden-sm"><span class="circle circle_site circle_site--tab" style="background-image: url(<?php echo z_taxonomy_image_url(17); ?>);"></span></div>
        <div class="title mg_bottom--x10 txt_upper txt_center txt_size--x35">
          <h2>Leche</h2>
        </div>
        <div class="content-tab mg_bottom--x10 txt_center hidden-sm">
          <p><?php echo category_description(17); ?></p>
        </div>
      </li>
      <li class="pd_box--x15 column column-min" data-tab="tab_2">
        <div class="box_circle box_circle--float txt_center mg_bottom--x20 hidden-sm"><span class="circle circle_site circle_site--tab" style="background-image: url(<?php echo z_taxonomy_image_url(18); ?>);"></span></div>
        <div class="title mg_bottom--x10 txt_upper txt_center txt_size--x35">
          <h2>Carne</h2>
        </div>
        <div class="content-tab mg_bottom--x10 txt_center hidden-sm">
          <p><?php echo category_description(18); ?></p>
        </div>
      </li>
      <li class="pd_box--x15 column column-min" data-tab="tab_3">
        <div class="box_circle box_circle--float txt_center mg_bottom--x20 hidden-sm"><span class="circle circle_site circle_site--tab" style="background-image: url(<?php echo z_taxonomy_image_url(19); ?>);"></span></div>
        <div class="title mg_bottom--x10 txt_upper txt_center txt_size--x35">
          <h2>Doble propósito</h2>
        </div>
        <div class="content-tab mg_bottom--x10 txt_center hidden-sm">
          <p><?php echo category_description(19); ?></p>
        </div>
      </li>
    </ul>
  </div>
  <div class="container">
    <div class="bdr_solid bdr_color--blue bdr_width--x3 mg_top--x20 mg_bottom--x20"></div>
  </div>
  <div class="mg_bottom--x50 tab-content current" id="tab_1">
	   <?php 
	        //Leche
			$args=array(
		            'cat'  => 17,
		            'order'  =>  'DESC',
		            'post_type' => 'material_genetico',
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
				            <div class="paragraf paragraf--middle mg_bottom--x20">
				              <p><?php echo get_field('descripcion_corta', get_the_ID()); ?></p>
				            </div><a href="<?php echo the_permalink(); ?>?type=Leche" class="btn btn_more btn--blue btn--min"><span>Ver Más</span></a>
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
  <div class="mg_bottom--x50 tab-content" id="tab_2">
     <?php 
	        //Carne
			$args=array(
		            'cat'  => 18,
		            'order'  =>  'DESC',
		            'post_type' => 'material_genetico',
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
				            <div class="paragraf paragraf--middle mg_bottom--x20">
				              <p><?php echo get_field('descripcion_corta', get_the_ID()); ?></p>
				            </div><a href="<?php echo the_permalink(); ?>?type=Carne" class="btn btn_more btn--blue btn--min"><span>Ver Más</span></a>
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
  <div class="mg_bottom--x50 tab-content" id="tab_3">
   <?php 
	    //Doble Proposito
			$args=array(
		            'cat'  => 19,
		            'order'  =>  'DESC',
		            'post_type' => 'material_genetico',
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
				            <div class="paragraf paragraf--middle mg_bottom--x20">
				              <p><?php echo get_field('descripcion_corta', get_the_ID()); ?></p>
				            </div><a href="<?php echo the_permalink(); ?>?type=Doble Proposito" class="btn btn_more btn--blue btn--min"><span>Ver Más</span></a>
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
</main>
	<script>
		(function($) {
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
		})(jQuery);
	</script>