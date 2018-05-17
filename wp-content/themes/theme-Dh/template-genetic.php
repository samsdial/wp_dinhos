<?php
/**
* Template Name: Liga
*/
?>

<?php
    //Leche
	$args=array(
            'cat'  => 36,
            'order'  =>  'DESC',
            'post_type' => 'liga',
            'posts_per_page'  =>  -1,
            );

    $query = null;
    $query = new WP_Query($args);
    $i=0;
if( $query->have_posts() ) {
    	while ($query->have_posts()) : $query->the_post(); $i++; ?>
			<div class="container cards1">
		      <div class="row">
		        <div class="column box_next bgc--gainsboro va_t">
		          <div class="box_next--img" style="background-image: url(<?php echo get_field('imagen', get_the_ID())[url]; ?>);"></div>
		          <div class="content pd_box--x20 mg_bottom--x10 va_t">
		            <div class="title txt_upper cl--blue mg_bottom--x10">
		              <h2><?php the_title(); ?></h2>
		            </div>
		            <div class="paragraf paragraf--middle mg_bottom--x20">
		              <p><?php echo get_field('descripcion_corta', get_the_ID()); ?></p>
		            </div><a href="<?php echo the_permalink(); ?>?type=cat2001" class="btn btn_more btn--blue btn--min"><span>Ver Más</span></a>
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