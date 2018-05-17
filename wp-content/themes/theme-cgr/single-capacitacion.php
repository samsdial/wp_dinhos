
    <main class="full box_intro">
      <div class="box_intro--img" style="background-image: url(<?php echo get_field('banner')[url]; ?>);"></div>
    </main>
    <main class="middle pd_top--x50 pd_bottom--x100">
        <section class="breadcrumb container pd_bottom--x10">
            <ul class="list_breadcrumb list--inline txt_upper">
              <li><a href="/cgr/formacion/">Capacitación</a></li>
              <li><span class="cl--lightGray"><?php the_title(); ?></span></li>
            </ul>
            <div class="bdr_solid bdr_color--blue bdr_width--x1 mg_top--x10 mg_bottom--x20"></div>
        </section>
      <section class="intro mg_bottom--x50">
        <div class="container">
          <div class="row">
            <div class="column box_next bgc--gainsboro va_t">
              <div class="box_next--img" style="background-image: url(<?php echo get_field('imagen')[url]; ?>);"></div>
              <div class="content pd_box--x20 mg_bottom--x10 va_t">
                <div class="title txt_upper cl--blue mg_bottom--x10">
                  <h2><?php the_title(); ?></h2>
                </div>
                <div class="mg_bottom--x20">
                  <p><?php echo get_field('descripcion_interna'); ?></p>
                </div><a href="#form<?php echo get_the_ID(); ?>" class="btn btn_more btn--blue btn--min" data-lity><span>Me interesa</span></a>
              </div>
            </div>
          </div>
          <div class="bdr_solid bdr_color--gray bdr_width--x1 mg_top--x20 mg_bottom--x20"></div>
        </div>
      </section>
    </main>
    
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
			if(name=="" || email=="" || phone=="" || message==""){
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
						codigo: '<?php the_title(); ?>',
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
