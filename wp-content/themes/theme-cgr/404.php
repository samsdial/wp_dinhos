<?php get_template_part('templates/page', 'header'); ?>

<!--
<div class="alert alert-warning">
  <?php // _e('Sorry, but the page you were trying to view does not exist.', 'sage'); ?>
</div>
-->

<main class="middle pd_top--x50 pd_bottom--x50">
      <section class="intro mg_bottom--x10">
        <div class="container">
          <div class="title mg_bottom--x20 txt_upper txt_size--x35 txt_center cl--blue">
            <h1>Error 404</h1>
          </div>
          <div class="title mg_bottom--x20 txt_upper txt_size--x35 txt_center cl--blue">
            <h2>Lo sentimos, pero la página que estaba intentando ver no existe.</h2>
          </div>
          <div class="content mg_bottom--x20 txt_center">
            <p>Para nosotros es muy importante conocer sus opiniones y sugerencias. Así mismo, si desea comunicarse con el personal, diligencie el siguiente formulario y muy pronto estaremos en contacto con Usted.</p>
          </div>
        </div>
      </section>
    </main>
    <main class="full bgc--gainsboro pd_top--x50">
      <div class="container">
        <section class="full" id="form">
          <div class="box_content mg_bottom--x30">
            <div class="title txt_upper cl--blue txt_center">
              <h2>Contactenos</h2>
            </div>
          </div>
          <div class="box_content--form">
            <form class="form_one">
              <div class="row">
                <div class="column column-middle mg_right--x10">
                  <label class="mg_bottom--x15 cl--gray">Nombre</label>
                  <input class="mg_right--x10" type="text" placeholder="Mi Nombre + Apellido">
                </div>
                <div class="column column-middle mg_right--x10">
                  <label class="mg_bottom--x15 cl--gray">Asunto</label>
                  <input class="mg_right--x10" type="text" placeholder="Contacto, cotizar">
                </div>
              </div>
              <div class="row">
                <div class="column column-middle mg_right--x10">
                  <label class="mg_bottom--x15 cl--gray">Teléfono</label>
                  <input class="mg_right--x10" type="text" placeholder="(+57) 321 000 000">
                </div>
                <div class="column column-middle mg_right--x10">
                  <label class="mg_bottom--x15 cl--gray">Email</label>
                  <input type="text" placeholder="su_mail@ejemplo.com">
                </div>
              </div>
              <div class="row">
                <div class="column mg_right--x10">
                  <label class="mg_bottom--x15 cl--gray">Mensaje</label>
                  <textarea class="mg_right--x10" type="text" rows="3" placeholder="Cuentanos ahora"></textarea>
                </div>
              </div>
              <div class="row mg_bottom--x20">
                <div class="column column-min">
                  <input id="checkbox1" type="checkbox">
                  <label class="checkbox cl--blue" for="checkbox1">Acepto</label>
                </div>
              </div>
              <div class="row">
                <div class="column">
                  <bottom class="mg_bottom--x10 btn btn--blue btn--full" type="submit">Enviar</bottom>
                </div>
              </div>
            </form>
          </div>
        </section>
      </div>
    </main>

<?php // get_search_form(); ?>
