<?php
/**
* Template Name: Otras especies
*/
?>
<main class="full box_intro">
      <div class="box_intro--img" style="background-image: url(<?php echo get_field('banner')[url]; ?>);"></div>
    </main>
    <main class="middle">
      <section class="hidden-sm">
        <div class="container bgc--gainsboro mg_top--x150i">
          <ul class="tabs row pd_top--x100i">
            <li class="pd_box--x15 column column-min current" data-tab="tab_1">
              <div class="box_circle box_circle--float txt_center mg_bottom--x20"><span class="circle circle_site circle_site--tab" style="background-image: url(<?php echo z_taxonomy_image_url(23); ?>);"></span></div>
              <div class="title mg_bottom--x10 txt_upper txt_center txt_size--x35">
                <h2>Canina</h2>
              </div>
              <div class="content-tab mg_bottom--x10 txt_center">
                <p><?php echo category_description(23); ?></p>
              </div>
            </li>
            <li class="pd_box--x15 column column-min" data-tab="tab_2">
              <div class="box_circle box_circle--float txt_center mg_bottom--x20"><span class="circle circle_site circle_site--tab" style="background-image: url(<?php echo z_taxonomy_image_url(24); ?>);"></span></div>
              <div class="title mg_bottom--x10 txt_upper txt_center txt_size--x35">
                <h2>Equina</h2>
              </div>
              <div class="content-tab mg_bottom--x10 txt_center">
                <p><?php echo category_description(24); ?></p>
              </div>
            </li>
            <li class="pd_box--x15 column column-min" data-tab="tab_3">
              <div class="box_circle box_circle--float txt_center mg_bottom--x20"><span class="circle circle_site circle_site--tab" style="background-image: url(<?php echo z_taxonomy_image_url(25); ?>);"></span></div>
              <div class="title mg_bottom--x10 txt_upper txt_center txt_size--x35">
                <h2>Ovino</h2>
              </div>
              <div class="content-tab mg_bottom--x10 txt_center">
                 <p><?php echo category_description(25); ?></p>
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
			    //Canina
				$args=array(
			            'cat'  => 23,
			            'order'  =>  'DESC',
			            'post_type' => 'otras_especies',
			            'posts_per_page'  =>  -1,
			            );
			
			    $query = null;
			    $query = new WP_Query($args);
			    $i=0;
			if( $query->have_posts() ) {
	            	while ($query->have_posts()) : $query->the_post(); $i++; ?>
					<div class="container cards1" style="<?php if($i>2){echo 'display:none';} ?>">
		              <div class="row">
		                <div class="column box_next bgc--gainsboro va_t">
		                  <div class="box_next--img" style="background-image: url(<?php echo get_field('imagen', get_the_ID())[url]; ?>);"></div>
		                  <div class="content pd_box--x20 mg_bottom--x10 va_t">
		                    <div class="title txt_upper cl--blue mg_bottom--x10">
		                      <h3><?php the_title(); ?></h3>
		                    </div>
		                    <div class="subtitle txt_upper cl--blue mg_bottom--x10">
		                      <h4><?php echo get_field('raza', get_the_ID()); ?></h4>
		                    </div>
		                    <div class="paragraf paragraf--max  mg_bottom--x20">
		                      <p><?php echo get_field('descripcion_corta', get_the_ID()); ?></p>
		                    </div>
		                     <a href="#form<?php echo get_the_ID(); ?>" class="btn btn_more btn--blue btn--min" data-lity><span>Me interesa</span></a>
		                  </div>
		                </div>
		              </div>
		              <div class="bdr_solid bdr_color--gray bdr_width--x1 mg_top--x20 mg_bottom--x20"></div>
		            </div>
		            <div id="form<?php echo get_the_ID(); ?>" style="background:#fff; padding: 25px;" class="lity-hide">
			            <div class="container">
				            <div class="row">
							    <form id="interest<?php echo get_the_ID(); ?>" class="form_one">
					              <div class="row">
					                <div class="column column-middle mg_right--x10">
					                  <label class="mg_bottom--x15 cl--gray">Nombre</label>
					                  <input class="mg_right--x10" id="name<?php echo get_the_ID(); ?>" type="text" placeholder="Mi Nombre + Apellido" required>
					                </div>
					                <div class="column column-middle mg_right--x10">
					                  <label class="mg_bottom--x15 cl--gray">E-Mail</label>
					                  <input class="mg_right--x10" id="email<?php echo get_the_ID(); ?>" type="email" placeholder="su_mail@ejemplo.com" required>
					                </div>
					              </div>
					              <div class="row">
					                <div class="column column-middle mg_right--x10">
					                  <label class="mg_bottom--x15 cl--gray">Teléfono</label>
					                  <input class="mg_right--x10" id="phone<?php echo get_the_ID(); ?>" type="text" placeholder="(+57) 321 000 000" required>
					                </div>
					                <div class="column column-middle mg_right--x10">
					                  <label class="mg_bottom--x15 cl--gray">Ciudad</label>
					                  <input type="text" id="city<?php echo get_the_ID(); ?>" placeholder="Ciudad" required>
					                </div>
					              </div>
					              <div class="row">
					                <div class="column mg_right--x10">
					                  <label class="mg_bottom--x15 cl--gray">Mensaje</label>
					                  <textarea class="mg_right--x10" id="message<?php echo get_the_ID(); ?>" type="text" rows="3" placeholder="Cuentanos ahora" required></textarea>
					                </div>
					              </div>
					              <div class="row">
					                <div class="column">
					                  <button class="mg_bottom--x10 btn btn--blue btn--full" type="submit">Enviar</button>
					                </div>
					              </div>
					            </form>
				            </div>
			            </div>
					</div>
					<script>
					(function( $ ) {
						$('#interest<?php echo get_the_ID(); ?>').submit(function(){
							var name = $("#name<?php echo get_the_ID(); ?>").val();
							var email = $("#email<?php echo get_the_ID(); ?>").val();
							var city = $("#city<?php echo get_the_ID(); ?>").val();
							var phone = $("#phone<?php echo get_the_ID(); ?>").val();
							var message = $("#message<?php echo get_the_ID(); ?>").val();
							var validacion_email = /^[a-zA-Z0-9_\.\-]+@[a-zA-Z0-9\-]+\.[a-zA-Z0-9\-\.]+$/;
							if(name=="" || email=="" || phone=="" || message=="" || $('#checkbox1').prop('checked') == false ){
								if($('#checkbox1').prop('checked') == false) {
									swal(
									  'Error',
									  'Debe aceptar los términos',
									  'error'
									);
								}
								return false;
							}else{
								if(!validacion_email.test(email)){
									return false;
								}else{
									$.ajax({
									method:"Post",
									url:"/cgr/wp-content/themes/theme-cgr/lib/interest.php",
									dataType:"json",
									data:{
										codigo: <?php echo get_field('codigo', get_the_ID()); ?>,
										name: name,
										email: email,
										city: city,
										phone: phone,
										message: message
										}
										}).done(function( msg ) {
											if(msg.success) {
												$("#name<?php echo get_the_ID(); ?>").val("");
												$("#email<?php echo get_the_ID(); ?>").val("");
												$("#city<?php echo get_the_ID(); ?>").val("");
												$("#phone<?php echo get_the_ID(); ?>").val("");
												$("#message<?php echo get_the_ID(); ?>").val("");
												swal(
												  'Bien',
												  'Pronto nos pondremos en contacto',
												  'success'
												);
											}
											else {
												swal(
												  'Error',
												  'Intentelo Nuevamente',
												  'error'
												);
											}
										});	
								}
								return false;
							}
						});
					})(jQuery);	
					</script>
	            	<?php
					endwhile;
	        }
			wp_reset_query();
			?>
			<?php if($i>2) { ?>
			   <div class="container"><a class="btn btn_moreMax btn--blue btn--full mg_bottom--x20 btnMax1"><span>Ver Más</span></a></div>
			<?php } ?>
          </div>
          
          <div class="tab-content" id="tab_2">
	          <?php
			    //Equina
					$args=array(
			            'cat'  => 24,
			            'order'  =>  'DESC',
			            'post_type' => 'otras_especies',
			            'posts_per_page'  =>  -1,
			            );
			
			    $query = null;
			    $query = new WP_Query($args);
			    $i=0;
			if( $query->have_posts() ) {
	            while ($query->have_posts()) : $query->the_post(); $i++; ?>
					<div class="container cards2" style="<?php if($i>2){echo 'display:none';} ?>">
		              <div class="row">
		                <div class="column box_next bgc--gainsboro va_t">
		                  <div class="box_next--img" style="background-image: url(<?php echo get_field('imagen', get_the_ID())[url]; ?>);"></div>
		                  <div class="content pd_box--x20 mg_bottom--x10 va_t">
		                    <div class="title txt_upper cl--blue mg_bottom--x10">
		                      <h3><?php the_title(); ?></h3>
		                    </div>
		                    <div class="subtitle txt_upper cl--blue mg_bottom--x10">
		                      <h4><?php echo get_field('raza', get_the_ID()); ?></h4>
		                    </div>
		                    <div class="paragraf paragraf--max mg_bottom--x20">
		                      <p><?php echo get_field('descripcion_corta', get_the_ID()); ?></p>
		                    </div>
		                     <a href="#form<?php echo get_the_ID(); ?>" class="btn btn_more btn--blue btn--min" data-lity><span>Me interesa</span></a>
		                  </div>
		                </div>
		              </div>
		              <div class="bdr_solid bdr_color--gray bdr_width--x1 mg_top--x20 mg_bottom--x20"></div>
		            </div>
		            <div id="form<?php echo get_the_ID(); ?>" style="background:#fff; padding: 25px;" class="lity-hide">
			            <div class="container">
				            <div class="row">
							    <form id="interest<?php echo get_the_ID(); ?>" class="form_one">
					              <div class="row">
					                <div class="column column-middle mg_right--x10">
					                  <label class="mg_bottom--x15 cl--gray">Nombre</label>
					                  <input class="mg_right--x10" id="name<?php echo get_the_ID(); ?>" type="text" placeholder="Mi Nombre + Apellido" required>
					                </div>
					                <div class="column column-middle mg_right--x10">
					                  <label class="mg_bottom--x15 cl--gray">E-Mail</label>
					                  <input class="mg_right--x10" id="email<?php echo get_the_ID(); ?>" type="email" placeholder="su_mail@ejemplo.com" required>
					                </div>
					              </div>
					              <div class="row">
					                <div class="column column-middle mg_right--x10">
					                  <label class="mg_bottom--x15 cl--gray">Teléfono</label>
					                  <input class="mg_right--x10" id="phone<?php echo get_the_ID(); ?>" type="text" placeholder="(+57) 321 000 000" required>
					                </div>
					                <div class="column column-middle mg_right--x10">
					                  <label class="mg_bottom--x15 cl--gray">Ciudad</label>
					                  <input type="text" id="city<?php echo get_the_ID(); ?>" placeholder="Ciudad" required>
					                </div>
					              </div>
					              <div class="row">
					                <div class="column mg_right--x10">
					                  <label class="mg_bottom--x15 cl--gray">Mensaje</label>
					                  <textarea class="mg_right--x10" id="message<?php echo get_the_ID(); ?>" type="text" rows="3" placeholder="Cuentanos ahora" required></textarea>
					                </div>
					              </div>
					              <div class="row">
					                <div class="column">
					                  <button class="mg_bottom--x10 btn btn--blue btn--full" type="submit">Enviar</button>
					                </div>
					              </div>
					            </form>
				            </div>
			            </div>
					</div>
					<script>
					(function( $ ) {
						$('#interest<?php echo get_the_ID(); ?>').submit(function(){
							var name = $("#name<?php echo get_the_ID(); ?>").val();
							var email = $("#email<?php echo get_the_ID(); ?>").val();
							var city = $("#city<?php echo get_the_ID(); ?>").val();
							var phone = $("#phone<?php echo get_the_ID(); ?>").val();
							var message = $("#message<?php echo get_the_ID(); ?>").val();
							var validacion_email = /^[a-zA-Z0-9_\.\-]+@[a-zA-Z0-9\-]+\.[a-zA-Z0-9\-\.]+$/;
							if(name=="" || email=="" || phone=="" || message=="" || $('#checkbox1').prop('checked') == false ){
								if($('#checkbox1').prop('checked') == false) {
									swal(
									  'Error',
									  'Debe aceptar los términos',
									  'error'
									);
								}
								return false;
							}else{
								if(!validacion_email.test(email)){
									return false;
								}else{
									$.ajax({
									method:"Post",
									url:"/cgr/wp-content/themes/theme-cgr/lib/interest.php",
									dataType:"json",
									data:{
										codigo: <?php echo get_field('codigo', get_the_ID()); ?>,
										name: name,
										email: email,
										city: city,
										phone: phone,
										message: message
										}
										}).done(function( msg ) {
											if(msg.success) {
												$("#name<?php echo get_the_ID(); ?>").val("");
												$("#email<?php echo get_the_ID(); ?>").val("");
												$("#city<?php echo get_the_ID(); ?>").val("");
												$("#phone<?php echo get_the_ID(); ?>").val("");
												$("#message<?php echo get_the_ID(); ?>").val("");
												swal(
												  'Bien',
												  'Pronto nos pondremos en contacto',
												  'success'
												);
											}
											else {
												swal(
												  'Error',
												  'Intentelo Nuevamente',
												  'error'
												);
											}
										});	
								}
								return false;
							}
						});
					})(jQuery);	
					</script>
	            	<?php
					endwhile;
	        }
			wp_reset_query();
			?>
			<?php if($i>2) { ?>
			   <div class="container"><a class="btn btn_moreMax btn--blue btn--full mg_bottom--x20 btnMax2"><span>Ver Más</span></a></div>
			<?php } ?>
          </div>
		<div class="mg_bottom--x50 tab-content" id="tab_3">
			<?php
			    //Ovino
					$args=array(
			            'cat'  => 25,
			            'order'  =>  'DESC',
			            'post_type' => 'otras_especies',
			            'posts_per_page'  =>  -1,
			            );
			
			    $query = null;
			    $query = new WP_Query($args);
			    $i=0;
			if( $query->have_posts() ) {
	            while ($query->have_posts()) : $query->the_post(); $i++; ?>
					<div class="container cards3" style="<?php if($i>2){echo 'display:none';} ?>">
		              <div class="row">
		                <div class="column box_next bgc--gainsboro va_t">
		                  <div class="box_next--img" style="background-image: url(<?php echo get_field('imagen', get_the_ID())[url]; ?>);"></div>
		                  <div class="content pd_box--x20 mg_bottom--x10 va_t">
		                    <div class="title txt_upper cl--blue mg_bottom--x10">
		                      <h3><?php the_title(); ?></h3>
		                    </div>
		                    <div class="subtitle txt_upper cl--blue mg_bottom--x10">
		                      <h4><?php echo get_field('raza', get_the_ID()); ?></h4>
		                    </div>
		                    <div class="paragraf paragraf--max mg_bottom--x20">
		                      <p><?php echo get_field('descripcion_corta', get_the_ID()); ?></p>
		                    </div>
		                     <a href="#form<?php echo get_the_ID(); ?>" class="btn btn_more btn--blue btn--min" data-lity><span>Me interesa</span></a>
		                  </div>
		                </div>
		              </div>
		              <div class="bdr_solid bdr_color--gray bdr_width--x1 mg_top--x20 mg_bottom--x20"></div>
		            </div>
		            <div id="form<?php echo get_the_ID(); ?>" style="background:#fff; padding: 25px;" class="lity-hide">
			            <div class="container">
				            <div class="row">
							    <form id="interest<?php echo get_the_ID(); ?>" class="form_one">
					              <div class="row">
					                <div class="column column-middle mg_right--x10">
					                  <label class="mg_bottom--x15 cl--gray">Nombre</label>
					                  <input class="mg_right--x10" id="name<?php echo get_the_ID(); ?>" type="text" placeholder="Mi Nombre + Apellido" required>
					                </div>
					                <div class="column column-middle mg_right--x10">
					                  <label class="mg_bottom--x15 cl--gray">E-Mail</label>
					                  <input class="mg_right--x10" id="email<?php echo get_the_ID(); ?>" type="email" placeholder="su_mail@ejemplo.com" required>
					                </div>
					              </div>
					              <div class="row">
					                <div class="column column-middle mg_right--x10">
					                  <label class="mg_bottom--x15 cl--gray">Teléfono</label>
					                  <input class="mg_right--x10" id="phone<?php echo get_the_ID(); ?>" type="text" placeholder="(+57) 321 000 000" required>
					                </div>
					                <div class="column column-middle mg_right--x10">
					                  <label class="mg_bottom--x15 cl--gray">Ciudad</label>
					                  <input type="text" id="city<?php echo get_the_ID(); ?>" placeholder="Ciudad" required>
					                </div>
					              </div>
					              <div class="row">
					                <div class="column mg_right--x10">
					                  <label class="mg_bottom--x15 cl--gray">Mensaje</label>
					                  <textarea class="mg_right--x10" id="message<?php echo get_the_ID(); ?>" type="text" rows="3" placeholder="Cuentanos ahora" required></textarea>
					                </div>
					              </div>
					              <div class="row">
					                <div class="column">
					                  <button class="mg_bottom--x10 btn btn--blue btn--full" type="submit">Enviar</button>
					                </div>
					              </div>
					            </form>
				            </div>
			            </div>
					</div>
					<script>
					(function( $ ) {
						$('#interest<?php echo get_the_ID(); ?>').submit(function(){
							var name = $("#name<?php echo get_the_ID(); ?>").val();
							var email = $("#email<?php echo get_the_ID(); ?>").val();
							var city = $("#city<?php echo get_the_ID(); ?>").val();
							var phone = $("#phone<?php echo get_the_ID(); ?>").val();
							var message = $("#message<?php echo get_the_ID(); ?>").val();
							var validacion_email = /^[a-zA-Z0-9_\.\-]+@[a-zA-Z0-9\-]+\.[a-zA-Z0-9\-\.]+$/;
							if(name=="" || email=="" || phone=="" || message=="" || $('#checkbox1').prop('checked') == false ){
								if($('#checkbox1').prop('checked') == false) {
									swal(
									  'Error',
									  'Debe aceptar los términos',
									  'error'
									);
								}
								return false;
							}else{
								if(!validacion_email.test(email)){
									return false;
								}else{
									$.ajax({
									method:"Post",
									url:"/cgr/wp-content/themes/theme-cgr/lib/interest.php",
									dataType:"json",
									data:{
										codigo: <?php echo get_field('codigo', get_the_ID()); ?>,
										name: name,
										email: email,
										city: city,
										phone: phone,
										message: message
										}
										}).done(function( msg ) {
											if(msg.success) {
												$("#name<?php echo get_the_ID(); ?>").val("");
												$("#email<?php echo get_the_ID(); ?>").val("");
												$("#city<?php echo get_the_ID(); ?>").val("");
												$("#phone<?php echo get_the_ID(); ?>").val("");
												$("#message<?php echo get_the_ID(); ?>").val("");
												swal(
												  'Bien',
												  'Pronto nos pondremos en contacto',
												  'success'
												);
											}
											else {
												swal(
												  'Error',
												  'Intentelo Nuevamente',
												  'error'
												);
											}
										});	
								}
								return false;
							}
						});
					})(jQuery);	
					</script>
	            	<?php
					endwhile;
	        }
			wp_reset_query();
			?>
			<?php if($i>2) { ?>
			   <div class="container"><a class="btn btn_moreMax btn--blue btn--full mg_bottom--x20 btnMax3"><span>Ver Más</span></a></div>
			<?php } ?>
		</div>
          
        </div>
      </section>
      <section class="hidden-md hidden-lg">
        <div class="row">
          <div class="bgc--gainsboro pd_box--x15 column">
            <div class="box_circle txt_center mg_bottom--x20"><span class="circle circle_site" style="background-image: url(<?php echo z_taxonomy_image_url(23); ?>);"></span></div>
            <div class="title cl--blue mg_bottom--x10 txt_upper txt_center txt_size--x35">
              <h2>Canina</h2>
            </div>
            <div class="content mg_bottom--x10 txt_center">
              <p><?php echo category_description(23); ?></p>
            </div>
          </div>
          <?php
			    //Canina
				$args=array(
			            'cat'  => 23,
			            'order'  =>  'DESC',
			            'post_type' => 'otras_especies',
			            'posts_per_page'  =>  -1,
			            );
			
			    $query = null;
			    $query = new WP_Query($args);
			    $i=0;
			if( $query->have_posts() ) {
	            	while ($query->have_posts()) : $query->the_post(); $i++; ?>
					    <div class="bdr_solid bdr_color--blue bdr_width--x3 mg_bottom--x20"></div>
				          <div class="row cards1" style="<?php if($i>2){ echo 'display:none';} ?>">
				            <div class="column box_next bgc--gainsboro va_t">
				              <div class="box_next--img" style="background-image: url(<?php echo get_field('imagen', get_the_ID())[url]; ?>);"></div>
				              <div class="content pd_box--x20 mg_bottom--x10 va_t">
				                <div class="title txt_upper cl--blue mg_bottom--x10">
				                  <h3><?php the_title(); ?></h3>
				                </div>
				                <div class="subtitle txt_upper cl--blue mg_bottom--x10">
				                  <h4><?php echo get_field('raza', get_the_ID()); ?></h4>
				                </div>
				                <div class="paragraf paragraf--max mg_bottom--x20">
				                  <p><?php echo get_field('descripcion_corta', get_the_ID()); ?></p>
				                </div>
				                <a href="#form<?php echo get_the_ID(); ?>" class="btn btn_more btn--blue btn--min" data-lity><span>Ver Más</span></a>
				              </div>
				            </div>
				          </div>
				          <div class="bdr_solid bdr_color--gray bdr_width--x1 mg_top--x20 mg_bottom--x20"></div>
	            	<?php
					endwhile;
	        }
			wp_reset_query();
			?>
			<?php if($i>2) { ?>
				<div class="container"><a class="btn btn_moreMax btn--blue btn--full mg_bottom--x20 btnMax1"><span>Ver Más</span></a></div>
			<?php } ?>
        </div>
        <div class="row">
          <div class="bgc--gainsboro pd_box--x15 column">
            <div class="box_circle txt_center mg_bottom--x20"><span class="circle circle_site" style="background-image: url(<?php echo z_taxonomy_image_url(24); ?>);"></span></div>
            <div class="title cl--blue mg_bottom--x10 txt_upper txt_center txt_size--x35">
              <h2>Equina</h2>
            </div>
            <div class="content mg_bottom--x10 txt_center">
              <p><?php echo category_description(24); ?></p>
            </div>
          </div>
           <?php
			    //Equina
				$args=array(
			            'cat'  => 24,
			            'order'  =>  'DESC',
			            'post_type' => 'otras_especies',
			            'posts_per_page'  =>  -1,
			            );
			
			    $query = null;
			    $query = new WP_Query($args);
			if( $query->have_posts() ) {
	            	while ($query->have_posts()) : $query->the_post(); ?>
					    <div class="bdr_solid bdr_color--blue bdr_width--x3 mg_bottom--x20"></div>
				          <div class="row cards2" style="<?php if($i>2){ echo 'display:none';} ?>">
				            <div class="column box_next bgc--gainsboro va_t">
				              <div class="box_next--img" style="background-image: url(<?php echo get_field('imagen', get_the_ID())[url]; ?>);"></div>
				              <div class="content pd_box--x20 mg_bottom--x10 va_t">
				                <div class="title txt_upper cl--blue mg_bottom--x10">
				                  <h3><?php the_title(); ?></h3>
				                </div>
				                <div class="subtitle txt_upper cl--blue mg_bottom--x10">
				                  <h4><?php echo get_field('raza', get_the_ID()); ?></h4>
				                </div>
				                <div class="paragraf paragraf--max mg_bottom--x20">
				                  <p><?php echo get_field('descripcion_corta', get_the_ID()); ?></p>
				                </div>
				                <a href="#form<?php echo get_the_ID(); ?>" class="btn btn_more btn--blue btn--min" data-lity><span>Ver Más</span></a>
				              </div>
				            </div>
				          </div>
				          <div class="bdr_solid bdr_color--gray bdr_width--x1 mg_top--x20 mg_bottom--x20"></div>
	            	<?php
					endwhile;
	        }
			wp_reset_query();
			?>
			<?php if($i>2) { ?>
			  <div class="container"><a class="btn btn_moreMax btn--blue btn--full mg_bottom--x20 btnMax2"><span>Ver Más</span></a></div>
			<?php } ?>
        </div>
        <div class="row">
          <div class="bgc--gainsboro pd_box--x15 column">
            <div class="box_circle txt_center mg_bottom--x20"><span class="circle circle_site" style="background-image: url(<?php echo z_taxonomy_image_url(25); ?>);"></span></div>
            <div class="title cl--blue mg_bottom--x10 txt_upper txt_center txt_size--x35">
              <h2>Ovino</h2>
            </div>
            <div class="content mg_bottom--x10 txt_center">
              <p><?php echo category_description(25); ?></p>
            </div>
          </div>
          <?php
			//Ovino
				$args=array(
			            'cat'  => 25,
			            'order'  =>  'DESC',
			            'post_type' => 'otras_especies',
			            'posts_per_page'  =>  -1,
			            );
			
			    $query = null;
			    $query = new WP_Query($args);
			    $i=0;
				if( $query->have_posts() ) {
	            	while ($query->have_posts()) : $query->the_post(); $i++; ?>
					    <div class="bdr_solid bdr_color--blue bdr_width--x3 mg_bottom--x20"></div>
				          <div class="row cards3" style="<?php if($i>2){ echo 'display:none';} ?>">
				            <div class="column box_next bgc--gainsboro va_t">
				              <div class="box_next--img" style="background-image: url(<?php echo get_field('imagen', get_the_ID())[url]; ?>);"></div>
				              <div class="content pd_box--x20 mg_bottom--x10 va_t">
				                <div class="title txt_upper cl--blue mg_bottom--x10">
				                  <h3><?php the_title(); ?></h3>
				                </div>
				                <div class="subtitle txt_upper cl--blue mg_bottom--x10">
				                  <h4><?php echo get_field('raza', get_the_ID()); ?></h4>
				                </div>
				                <div class="paragraf paragraf--max mg_bottom--x20">
				                  <p><?php echo get_field('descripcion_corta', get_the_ID()); ?></p>
				                </div>
				                <a href="#form<?php echo get_the_ID(); ?>" class="btn btn_more btn--blue btn--min" data-lity><span>Ver Más</span></a>
				              </div>
				            </div>
				          </div>
				          <div class="bdr_solid bdr_color--gray bdr_width--x1 mg_top--x20 mg_bottom--x20"></div>
	            	<?php
					endwhile;
				}
			wp_reset_query();
			?>
			<?php if($i>2) { ?>
			   <div class="container"><a class="btn btn_moreMax btn--blue btn--full mg_bottom--x20 btnMax3"><span>Ver Más</span></a></div>
			<?php } ?>
        </div>
      </section>
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