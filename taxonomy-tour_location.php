<?php get_header(); ?>

<div class="container">
    <h2>Tour Destination: <?php echo single_term_title(); ?></h2>

    <div class="row">
        <?php
        if (have_posts()) :
            while (have_posts()) : the_post(); ?>
                <div class="col-4">
                    <div class="tour-post-card">
                        <a href="<?php the_permalink(); ?>">
                            <?php if (has_post_thumbnail()) {
                                the_post_thumbnail('medium');
                            } ?>
                            <h4><?php the_title(); ?></h4>
                        </a>
                    </div>
                </div>
            <?php endwhile;
        else :
            echo '<p>No tours found for this location.</p>';
        endif;
        ?>
    </div>
</div>

<?php get_footer(); ?>
