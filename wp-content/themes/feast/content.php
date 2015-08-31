<div class="main-image uk-vertical-align uk-text-center">
							<img class="uk-visible-small" src="<?php echo get_bloginfo('template_directory');?>/img/fig-sm.jpg" alt="delicious mouth watering canapes">
							<img class="uk-visible-medium" src="<?php echo get_bloginfo('template_directory');?>/img/fig285x1008.jpg" alt="delicious mouth watering canapes">
							<img class="uk-visible-large" src="<?php echo get_bloginfo('template_directory');?>/img/fig309x1500.jpg" alt="delicious mouth watering canapes">
						</div>	


				
				<div class="uk-grid">
				
				<?php if ( have_posts() ): while ( have_posts() ): the_post(); ?>
				
				
				<?php endwhile; endif; ?>
				</div>