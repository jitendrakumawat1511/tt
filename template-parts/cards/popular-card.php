
    <div class="col-12 col-md-6 col-lg-3 popular-tours-cards">
        <div class="populer-card-wrapper">
            <div class="populer-card-image">
                <?php
            
                ?>
                <img src="<?php
                the_post_thumbnail(); 
                ?>" alt="">
            </div>
            <div class="pupuler-card-content-wrapper">
                <div class="popular-tour-title">
                    <h3><a href=""><?php
                    the_title();
                    ?></a></h3>
                </div>
                <div class="popular-tour-price-location">
                    <div class="popular-card-tour-location">
                        <span> <i class="fa-solid fa-location-dot"></i></span>
                        <p><?php
                        the_field('tour_location');
                        ?></p>
                    </div>
                    <div class="popular-card-price">
                        <label for=""> From</label>
                        <span><?php
                        the_field('price_start_from')
                        ?></span>
                    </div>
                </div>
                <div class="popular-tour-details">
                    <div class="details-content">
                        <div>
                            <span> <i class="fa-regular fa-clock"></i></span>
                           <?php
                        the_field('tour_duration')
                        ?>
                        </div>
                        <div>
                            <span> <i class="fa-solid fa-user-group"></i></span>
                           <?php
                        the_field('person')
                        ?>
                        </div>
                    </div>
                    <div class="popular-card-btn">
                        <a href="<?php the_permalink();?>">Expolore</a>
                        <i class="fa-solid fa-arrow-right"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
