<?php 

/*
    Template Name: Contact
*/

?>
<?php get_header(); ?>
						<div class="main-image-about uk-vertical-align uk-text-center">
							<img class="uk-visible-small" src="<?php echo get_bloginfo('template_directory');?>/img/cupcakes-sm.jpg" alt="delicious mouth watering canapes">
							<img class="uk-visible-medium" src="<?php echo get_bloginfo('template_directory');?>/img/cupcakes-285x1008.jpg" alt="delicious mouth watering canapes">
							<img class="uk-visible-large" src="<?php echo get_bloginfo('template_directory');?>/img/cupcakes-309x1500.jpg" alt="delicious mouth watering canapes">
						</div>	
<div class="uk-grid">
				<div id="animation-scale-up" class="uk-width-1-1 scrolling-animation">
                <div class="uk-width-8-10 uk-container-center">
                    <div class="uk-panel uk-panel-box" data-uk-scrollspy="{cls:'uk-animation-scale-up', repeat: true}">
											<img class="uk-align-center uk-clearfix" src="<?php echo get_bloginfo('template_directory');?>/img/mail-icon-active.png">  
                      <h3 class="uk-panel-title uk-text-center uk-text-success">Contact Feast Caterers</h3>
<div class="contact-wrap"><?php echo do_shortcode('[ninja_forms id=1]'); ?>
</div>
                      <p class="uk-text-center uk-text-primary"><a href="tel:0295440283"><span class="phone uk-icon-phone-square uk-icon-small" alt="phone"> 9544-0283</a><br><a href="tel:0425260199"><span class="phone uk-icon-phone-square uk-icon-small" alt="phone"> 0425 260 199</a><br><a href="mailto:orders@feastcaterers.com.au?Subject=Enquiry" style="text-decoration:none;"><span class="email uk-icon-envelope uk-icon-small" alt="email"> orders@feastcaterers.com.au</a></p>
                    </div>
                </div>
         </div>					
					
					
				</div>
				
			<?php get_footer(); ?>