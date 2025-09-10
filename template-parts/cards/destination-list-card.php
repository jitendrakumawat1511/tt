<section class="destination-container">
    <div class="container ">
        <div class="row">
            <div class="col-6 destination-title">
                <span>Our destination lists
                </span>
                <h3>
                    Checkout Beautiful Places Arround the World
                </h3>
                <div class="destination-card-btn">
                    <a href="<?php the_permalink();?>">Expolore</a>
                    <i class="fa-solid fa-arrow-right"></i>
                </div>
            </div>


            <?php
           
                $terms = get_terms(array(
                    'taxonomy' => 'tour_location',
                    'hide_empty' => false,));
                    

                foreach($terms as $term){
                    $image = get_field('texonomy_image','tour_location_' . $term->term_id);
                    $link = get_term_link($term);
                    // echo "<pre>";
                    // print_r($link);
                    // echo "</pre>";
                ?>
            <div class="col-3 destination-card">
                <div class="destination-bg-image"
                    style="background-image: url('<?php echo $image ?>'); background-size: cover; background-position: center;">
                    <div class="tour-count">
                       <a href="<?php echo $link ?>"><?php echo $term->count ?></a>
                    </div>
                    <div class="destination-name">
                        <h5>
                            <a href="<?php echo $link ?>"><?php echo $term->name ?></a>
                        </h5>
                    </div>
                </div>
            </div>
            <?php } ?>
        </div>
        </div>  
</section>