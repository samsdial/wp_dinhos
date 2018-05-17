<?php
/**
* Template Name: Contacto
*/
?>
<main class="full box_intro">
      <div class="box_intro--img" style="background-image: url(<?php echo get_field('banner')[url]; ?>);"></div>
    </main>
    <main class="middle pd_top--x50 pd_bottom--x50">
      <section class="intro mg_bottom--x10">
        <div class="container">
          <div class="title mg_bottom--x20 txt_upper txt_size--x35 txt_center cl--blue">
            <h2>CGR Biotecnología Reproductiva</h2>
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
              <h2>Contáctenos</h2>
            </div>
          </div>
          <div class="box_content--form">
            <form id="formContact" class="form_one">
              <div class="row">
                <div class="column column-middle mg_right--x10">
                  <label class="mg_bottom--x15 cl--gray">Nombre</label>
                  <input class="mg_right--x10" id="name" type="text" placeholder="Mi Nombre + Apellido" required>
                </div>
                <div class="column column-middle mg_right--x10">
                  <label class="mg_bottom--x15 cl--gray">Asunto</label>
                  <input class="mg_right--x10" id="subject" type="text" placeholder="Contacto, cotizar" required>
                </div>
              </div>
              <div class="row">
                <div class="column column-middle mg_right--x10">
                  <label class="mg_bottom--x15 cl--gray">Teléfono</label>
                  <input class="mg_right--x10" id="phone" type="text" placeholder="(+57) 321 000 000" required>
                </div>
                <div class="column column-middle mg_right--x10">
                  <label class="mg_bottom--x15 cl--gray">Email</label>
                  <input type="email" id="email" placeholder="su_mail@ejemplo.com" required>
                </div>
              </div>
              <div class="row">
                <div class="column mg_right--x10">
                  <label class="mg_bottom--x15 cl--gray">Mensaje</label>
                  <textarea class="mg_right--x10" id="message" type="text" rows="3" placeholder="Cuentanos ahora" required></textarea>
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
                  <button class="mg_bottom--x10 btn btn--blue btn--full" type="submit">Enviar</button>
                </div>
              </div>
            </form>
          </div>
        </section>
      </div>
    </main>
