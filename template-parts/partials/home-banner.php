<section class="banner-section">
  <div class="swiper mySwiper banner-bg">
  <div class="swiper-wrapper ">
    <?php 
    if( have_rows('banner', 22) ):
      while( have_rows('banner', 22) ) : the_row();
        $image_url = get_sub_field('images'); ?>
    <div class="swiper-slide " style="background-image: url(' <?php echo esc_url($image_url); ?>');"></div>
      <?php 
      endwhile;
    endif;  ?>
    
</div>
 
<div class="banner-title">
  <span class="sub-title"><?php the_field('sub_title',22)?></span>
      <h1 style="color:<?php the_field('title_color',22);?>; font-size:<?php the_field('title_size',22);?>"><?php the_field('banner_title',22)?></h1>
    </div>
</section>  