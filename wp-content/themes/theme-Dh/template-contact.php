<?php
/**
* Template Name: Contacto
*/
?>
<div class="main mg_top--x50">
      <section class="container pd_box--x20 bdr_box bdr_top--contact">
        <div class="Grid Grid--full">
          <div class="content">
            <div class="title txt_fonTwo txt_upper cl--black">
              <h3>Enviar un mensaje</h3>
            </div>
          </div>
        </div>
        <div class="Grid Grid--full contact_form">
          <from id="contact">
            <div class="Grid Grid--gutters Grid--1of3">
              <div class="Grid-cell">
                <label>Asunto</label>
                <input class="contac_input" type="text" placeholder="Tipo de Contacto">
                <label>Nombre y Apellidos</label>
                <input class="contac_input" type="text" placeholder="Mi nombre completo">
                <label>Correo Electronico</label>
                <input class="contac_input" type="email" placeholder="micorreo@empresa.com">
                <label>Referencia</label>
                <input class="contac_input" type="text" placeholder="No. 12344">
              </div>
              <div class="Grid-cell">
                <label>Mensaje</label>
                <textarea class="contac_txtArea" type="text" rows="16" cols="60" placeholder="Cuentanos ahora"></textarea>
              </div>
            </div>
            <div class="Grid Grid--full">
              <div class="Grid-cell mg_top--x20 mg_bottom--x20">
                <buttom class="btn btn_site">Enviar</buttom>
              </div>
            </div>
          </from>
        </div>
      </section>
    </div>
