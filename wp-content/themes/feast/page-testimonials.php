<?php

/*
    Template Name: Testimonials
*/

?>
<?php get_header(); ?>

<?php get_template_part( 'slideshow' ); ?>



<?php

$args = array(
    'post_type' => 'testimonial',
    'posts_per_page' => 100,
    );

$query = new WP_Query( $args );

?>



<?php if( $query->have_posts() ): while( $query->have_posts() ) : $query->the_post(); ?>
<?php if ($query->current_post % 2 == 0) : ?>
               <div id="animation-scale-up" class="uk-width-1-1 scrolling-animation">
                <div class="uk-width-8-10 uk-container-center">
                    <div class="uk-panel uk-panel-box" data-uk-scrollspy="{cls:'uk-animation-scale-up', repeat: true}">
                                                <div class="uk-panel-box">
                                                    <div class="uk-panel menu-modal">
                                            <img class="uk-align-center uk-clearfix" src="<?php echo get_bloginfo('template_directory');?>/img/quote-icon-color.png">
                      <h3 class="uk-panel-title uk-text-center uk-text-success"><?php the_field( 'customer_name' ); ?></h3>
                      <p class="uk-text-center uk-text-primary"><?php the_field( 'testimonial' ); ?></p>
                    </div>
                                    </div>
                                    </div>
                </div>
         </div>

<?php else : ?>
                <div id="animation-scale-up" class="uk-width-1-1 scrolling-animation">
                <div class="uk-width-8-10 uk-container-center">
                    <div class="uk-panel uk-panel-box" data-uk-scrollspy="{cls:'uk-animation-scale-up', repeat: true}">
                                                <div class="uk-panel-box">
                                                    <div class="uk-panel menu-modal">
                                            <img class="uk-align-center uk-clearfix" src="<?php echo get_bloginfo('template_directory');?>/img/quote-icon-dark-color.png">
                      <h3 class="uk-panel-title uk-text-center uk-text-success"><?php the_field( 'customer_name' ); ?></h3>
                      <p class="uk-text-center uk-text-primary"><?php the_field( 'testimonial' ); ?></p>
                    </div>
                                    </div>
                                    </div>
                </div>
         </div>
                 <?php endif; ?>

             <?php endwhile; endif; wp_reset_postdata(); ?>



<?php get_footer(); ?>

