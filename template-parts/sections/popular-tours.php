<?php
get_header();
?>
<div class="popular-tour-section">
    <div class="popular-tour-title">
        <span>Featured tours</span>
        <h2>Most Popular Tours</h2>
    </div>
    <div class="pupuler-card-section">
    <div class="container">
        <div class="row">
            <?php
    $args = array(
        'post_type'=>'tour',
        'posts_per_page'=> -1
    );

    $card_data= new wp_Query($args);

    if($card_data->have_posts()):
        while($card_data->have_posts()):
            $card_data->the_post();
get_template_part('template-parts/cards/popular-card');

  endwhile;
    wp_reset_postdata();
else :
    echo 'No tours found.';
endif;
?>
        </div>
        <?php wp_paginate();?>
    </div>
</div>
</div>

<?php
get_footer();
?>
