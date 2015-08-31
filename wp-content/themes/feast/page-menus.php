<?php 

/*
    Template Name: Menus
*/

?>
<?php get_header(); ?>

<?php get_template_part( 'slideshow' ); ?>
     
     
<?php 

$args = array(
    'post_type' => 'menus',
    'posts_per_page' => 100,
    );

$query = new WP_Query( $args );

?>
      
<div class="uk-grid menus uk-vertical-align uk-text-center" data-uk-grid-margin>

<?php if( $query->have_posts() ): while( $query->have_posts() ) : $query->the_post(); ?>

      <div class="uk-width-small-1-2 uk-width-medium-1-3 uk-width-large-1-4 uk-vertical-align-middle uk-container-center">
        <a class="uk-thumbnail uk-overlay-toggle" data-uk-modal="{target:'#modal-<?php echo $post->ID ?> '}" >
          <figure class="uk-overlay">
            <img width="400" height="225" src="<?php the_field ('images');?>" alt="canapes for cocktail parties">
              <figcaption class="uk-overlay-panel uk-overlay-background uk-overlay-bottom"><h5><?php the_field('heading') ?></h5></figcaption>
          </figure>
        </a>
        <div id="modal-<?php echo $post->ID ?>" class="uk-modal">
          <div class="uk-modal-dialog uk-modal-dialog-frameless">
            <a href="" class="uk-modal-close uk-close uk-close-alt"></a>
            <div class="uk-panel menu-modal">
              <div class="uk-panel-box">
                <h3 class="uk-panel-title"><?php the_field('heading') ?></h3><h4><?php the_field( 'description' ); ?></h4><h6>click the image to view</h6>
              </div>
            </div>
            <a href="<?php the_field('menu_pdf'); ?>" target="_blank"><img class="uk-align-center" width="400" height="255" src="<?php the_field ('images');?>" alt=""></a>
          </div>
        </div>
      </div>
      <?php endwhile; endif; wp_reset_postdata(); ?>

      
				
			<?php get_footer(); ?>