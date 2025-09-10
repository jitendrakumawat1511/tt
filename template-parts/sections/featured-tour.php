<!-- <div class="container">
    <div class="swiper mySwiper mySwiperTours banner-bg">
        <div class="swiper-wrapper">
      
            <div class="swiper-slide">
              
            </div>
     
        </div>
    </div>
</div> -->
<div class="container featured-container ">
<div class="row">
     <div class="featured-tour-title">
        <span>Featured tours</span>
        <h2>Featured Tours</h2>
    </div>
   <?php
    $args = array(
    'post_type' => 'tour',
    'posts_per_page' => -1, // All posts
    'tax_query' => array(
        array(
            'taxonomy' => 'tour_category', // Correct taxonomy slug
            'field'    => 'slug',
            'terms'    => array('featured-tour') 
        )
    )
);
$term = get_term_by('slug', 'featured-tour', 'tour_category');

$query = new WP_Query($args);
if ($query->have_posts()) :
    while ($query->have_posts()) : $query->the_post();
        // Get featured image URL
        $image_url = get_the_post_thumbnail_url(get_the_ID());
        // Get custom fields if needed (like location, price etc.)
        $location = get_field('tour_location'); // ACF field
        $price = get_field('price_start_from');       // ACF field
        ?>
    
        <div class="col-lg-3 col-md-12">
            <div class="featured-slider-background-image"
                style="background-image: url('<?php echo esc_url($image_url); ?>'); background-size: cover; background-position: center; height:365px;">
                
                <div class="featured-tour-content">
                    <h3><a href="<?php the_permalink(); ?>" class="hover"><?php the_title(); ?></a></h3>

                    <div class="popular-card-tour-location">
                        <span><i class="fa-solid fa-location-dot"></i></span>
                        <p><?php echo esc_html($location); ?></p>
                    </div>

                    <div class="popular-card-price">
                        <label>From</label>
                        <span><?php echo esc_html($price); ?></span>
                    </div>
                </div>

            </div>
        </div>

        <?php
    endwhile;
    wp_reset_postdata();
else :
    echo '<p>No tours found.</p>';
endif;
?>


</div>
</div>


    
   
