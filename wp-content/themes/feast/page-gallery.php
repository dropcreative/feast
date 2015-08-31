<?php

/*
    Template Name: Galery
*/

?>
<?php get_header(); ?>



<div class="uk-margin-remove  uk-text-center">
<div class="good-vibes uk-width-1-1  uk-container-center gallery-heading " >
<h1>Gallery</h1>
<h3 class="uk-margin-remove">Welcome to our gallery. Click on the images to expand</h3>
</div>
</div>

<?php

$args = array(
    'post_type' => 'gallery',
    'posts_per_page' => 1000,
    );

$query = new WP_Query( $args );

?>

<div class="uk-container uk-container-center">

<div class="uk-grid-width-small-1-2 uk-grid-width-medium-1-4 uk-grid" data-uk-grid="{gutter: 20}"  >

<?php if( $query->have_posts() ): while( $query->have_posts() ) : $query->the_post(); ?>

       <div class="uk-scrollspy-init-inview uk-scrollspy-inview feast-animate" data-uk-scrollspy="{cls:'uk-animation-fade'}">

                                      <figure class="uk-overlay uk-overlay-hover">

                                           <img src="<?php the_field('gallery_image'); ?>"  alt="" class="feast-gallery uk-overlay-scale">
       <div class="uk-overlay-panel uk-overlay-background">

       <a href="<?php the_field('gallery_image'); ?>" data-uk-lightbox="{group:'group1'}" title="<?php the_field('gallery_image_heading'); ?>" data-uk-lightbox title="" class="uk-position-cover"></a>
       <figcaption><h4><?php the_field('gallery_image_hover_text'); ?></h4></figcaption></div>
       </figure> <div class="gallery-sub-text ">
       <h4><?php the_field('gallery_image_heading'); ?></h4>
       <p><?php the_field('gallery_image_text'); ?></p>
       </div>
    </div>

               <?php endwhile; endif; wp_reset_postdata(); ?>




</div>

            </div>

            <?php get_footer(); ?>
