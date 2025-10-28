<?php
get_header();
?>

<section class="single-tour-section">
    <div class="swiper mySwiper mySwiperTours">
        <div class="swiper-wrapper">
            <?php 
      if ( have_rows('tour_images') ):
        while ( have_rows('tour_images') ): the_row();
          $image = get_sub_field('tour_image');
          if ($image && isset($image['url'])):
            $image_url = $image['url']; ?>
            <div class="swiper-slide"
                style="background-image: url('<?php echo esc_url($image_url); ?>'); background-size: cover; background-position: center; height: 500px;">
            </div>
            <?php endif;
        endwhile;
      endif;
      ?>
        </div>
    </div>
   <div class="single-tour-details">
     <div class="container">
    <div class="row single-popular-tour-details">
        <div class="col-md-6 single-tour-title">
            <div class="single-popular-tour-title">
                <h3><?php
                    the_title();
                    ?></h3>
            </div>
           
                <div class="popular-card-tour-location">
                    <span> <i class="fa-solid fa-location-dot"></i></span>
                    <p><?php
                         echo get_field('tour_location');
                        ?></p>
                </div>
            </div>
        
        <div class="col-md-6 single-tour-details">
            <div class="single-tour-price">
                <div class="single-tour-price-icon">
                    <i class="fa-solid fa-mobile-retro"></i>
                </div>
                <div class="single-tour-price-details">
                    <label for="">From</label>
                    <span><?php
                        the_field('price_start_from')
                        ?></span>
                </div>
            </div>
            <div class="single-tour-price">
                <div class="single-tour-price-icon">
                    <i class="fa-regular fa-clock"></i>
                </div>
                <div class="single-tour-price-details">
                    <label for="">Duration</label>
                    <span><?php
                        the_field('tour_duration')
                        ?></span>
                </div>
            </div>
            <div class="single-tour-price">
                <div class="single-tour-price-icon">
                    <i class="fa-solid fa-plane-departure"></i>
                </div>
                <div class="single-tour-price-details">
                    <label for="">Tour Type</label>
                    <span><?php
                        the_field('tour_type')
                        ?></span>
                </div>
            </div>
        </div>
        </div>
       
        </div>
   </div>
</section>


<?php
get_footer();
?>