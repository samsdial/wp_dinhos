<?php
/**
* Template Name: Formación
*/
?>
<main class="full box_intro">
      <div class="box_intro--img" style="background-image: url(<?php echo get_field('banner')[url]; ?>);"></div>
    </main>
    <main class="middle pd_top--x50 pd_bottom--x100">
      <section class="intro mg_bottom--x50">
        <div class="container">
          <div class="title mg_bottom--x20 txt_upper txt_size--x35 txt_center cl--blue">
            <h2>Capacitación</h2>
          </div>
          <div class="content mg_bottom--x20 txt_center">
            <p><?php echo category_description(20); ?></p>
          </div>
        </div>
      </section>
      <section class="list_capacitacion">
	       <?php 
	        //Capacitación
			$args=array(
		            'cat'  => 20,
		            'order'  =>  'DESC',
		            'post_type' => 'capacitacion',
		            'posts_per_page'  =>  -1,
		            );
		
		    $query = null;
		    $query = new WP_Query($args);
		    $i=0;
		if( $query->have_posts() ) {
            	while ($query->have_posts()) : $query->the_post(); $i++; ?>
					<div class="container cards" style="<?php if($i>2){ echo 'display:none'; } ?>">
			          <div class="row">
			            <div class="column box_next bgc--gainsboro va_t">
			              <div class="box_next--img" style="background-image: url(<?php echo get_field('imagen', get_the_ID())[url]; ?>);"></div>
			              <div class="content pd_box--x20 mg_bottom--x10 va_t">
			                <div class="title txt_upper cl--blue mg_bottom--x10">
			                  <h2><?php the_title(); ?></h2>
			                </div>
			                <div class="paragraf paragraf--middle mg_bottom--x20">
			                  <p><?php echo get_field('descripcion_corta', get_the_ID()); ?></p>
			                </div><a href="<?php echo the_permalink(); ?>" class="btn btn_more btn--blue btn--min"><span>Ver Temática</span></a>
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
        	<div class="container"><a class="btn btn_moreMax btn--blue btn--full"><span>Ver Más</span></a></div>
        <?php } ?>
    </section>
</main>
	<script>
		(function($) {
			$('.btn_moreMax').click(function() {
				$('.cards').each(function() {
					$(this).fadeIn('slow');
				});
				$(this).fadeOut('slow');
			});
		})(jQuery);
	</script>