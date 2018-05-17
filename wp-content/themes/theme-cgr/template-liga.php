<?php
/**
* Template Name: Liga
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
          <h2><?php echo category_description(2); ?></h2>
        </div>
        <div class="content-tab mg_bottom--x10 txt_center ">
          <p><?php echo category_description(14); ?></p>
        </div>
      </li>
      <li class="pd_box--x15 column column-min" data-tab="tab_2">
        <div class="box_circle box_circle--float txt_center mg_bottom--x20 hidden-sm"><span class="circle circle_site circle_site--tab" style="background-image: url(<?php echo z_taxonomy_image_url(18); ?>);"></span></div>
        <div class="title mg_bottom--x10 txt_upper txt_center txt_size--x35">
          <h2>Carne</h2>
        </div>
        <div class="content-tab mg_bottom--x10 txt_center ">
          <p><?php echo category_description(14); ?></p>
        </div>
      </li>
      <li class="pd_box--x15 column column-min" data-tab="tab_3">
        <div class="box_circle box_circle--float txt_center mg_bottom--x20 hidden-sm"><span class="circle circle_site circle_site--tab" style="background-image: url(<?php echo z_taxonomy_image_url(19); ?>);"></span></div>
        <div class="title mg_bottom--x10 txt_upper txt_center txt_size--x35">
          <h2><?php echo category_description(14); ?></h2>
        </div>
        <div class="content-tab mg_bottom--x10 txt_center ">
          <p><?php echo category_description(14); ?></p>
        </div>
      </li>
    </ul>
  </div>
  <div class="container">
    <div class="bdr_solid bdr_color--blue bdr_width--x3 mg_top--x20 mg_bottom--x20"></div>
  </div>

</main>
