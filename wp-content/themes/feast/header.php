<!DOCTYPE html>
<html class="no-js" lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title><?php wp_title(''); ?></title>
         <meta name="description" content="Feast caterers are a catering company based in the Sutherland Shire. Feast provide wedding catering, all occassion catering such as Corporate Catering, Party catering, Birthday catering, Funeral Catering and much more."/>
        <meta name="keywords" content="Feast Caterers, Feast catering, Catering Sutherland Shire, Catering Sydney, Wedding Catering, wake catering, funeral packages, naming days, christenings, wedding receptions, corporate, boardroom catering, caterers, Sutherland Shire, Sydney, Caringbah, Cronulla, Gymea, Miranda, Engadine, Sylvania, South Coast, Balmain, Northern Beaches.">
    <title><?php wp_title(); ?></title>
            <script>
                (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
                (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
                m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
                })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

                ga('create', 'UA-51399179-1', 'feastcaterers.com.au');
                ga('send', 'pageview');

            </script>

            <?php wp_head(); ?>

    </head>

    <body <?php body_class(); ?>>

<div class="uk-grid-preserve uk-container-center">
<!--            <a href="#offcanvas-nav" class="uk-navbar-toggle uk-visible-small uk-position-top-right uk-margin-large-top" data-uk-offcanvas >MENU</a>-->
                <div class="uk-width-1-1 logo-background">
                    <img class="uk-align-center logo" src="<?php echo get_bloginfo('template_directory');?>/img/logo-white.png">

                </div>


                  <?php get_template_part('navigation') ; ?>


<!--
                      <div class="primary-navigation uk-grid uk-width-1-1 uk-container-center uk-hidden-small">
                <div class="uk-width-1-5">
                    <a class="uk-overlay menu-icon-overlay <?php if (is_page('menus')) echo 'active'; ?>" href="menus">
                        <img class="uk-visible-small" width="140" height="140" src="<?php echo get_bloginfo('template_directory');?>/img/dish-icon-inactive.png" alt="Our menus">
                                                <img class="dish-square-icon uk-hidden-small" width="140" src="<?php echo get_bloginfo('template_directory');?>/img/dish-icon-square.png" alt="Our menus">
                       <div class="uk-overlay-area">
                            <div class="uk-overlay-area-content">MENUS</div>
                        </div>
                    </a>
                </div>

                 <div class="uk-width-1-5">
                    <a class="uk-overlay menu-icon-overlay <?php if (is_page('testimonials')) echo 'active'; ?>" href="testimonials">
                        <img class="uk-visible-small" width="140" height="140" src="<?php echo get_bloginfo('template_directory');?>/img/quote-icon-inactive.png" alt="Testimonials">
                                                <img class="dish-square-icon uk-hidden-small" width="140" src="<?php echo get_bloginfo('template_directory');?>/img/quote-icon-square.png" alt="Testimonials">
                                            <div class="uk-overlay-area">
                            <div class="uk-overlay-area-content">SALUTE</div>
                        </div>
                    </a>
                </div>

                                <div class="uk-width-1-5">
                    <a class="uk-overlay menu-icon-overlay <?php if (is_page('home')) echo 'active'; ?>" href="home">
                        <img class="uk-visible-small" width="140" height="140" src="<?php echo get_bloginfo('template_directory');?>/img/home-icon-active.png" alt="Feast Caterers Home">
                                                <img class="dish-square-icon uk-hidden-small" width="140" src="<?php echo get_bloginfo('template_directory');?>/img/home-icon-square.png" alt="Feast Caterers Home">
                       <div class="uk-overlay-area">
                            <div class="uk-overlay-area-content">HOME</div>
                        </div>
                    </a>
                </div>

                                <div class="uk-width-1-5">
                    <a class="uk-overlay menu-icon-overlay <?php if (is_page('about')) echo 'active'; ?>" href="about">
                        <img class="uk-visible-small" width="140" height="140" src="<?php echo get_bloginfo('template_directory');?>/img/question-icon-inactive.png" alt="About Us">
                                                <img class="dish-square-icon uk-hidden-small" width="140" src="<?php echo get_bloginfo('template_directory');?>/img/question-icon-square.png" alt="About us">
                       <div class="uk-overlay-area">
                            <div class="uk-overlay-area-content">ABOUT</div>
                        </div>
                    </a>
                </div>

                                <div class="uk-width-1-5">
                    <a class="uk-overlay menu-icon-overlay <?php if (is_page('contact')) echo 'active'; ?>" href="contact">
                        <img class="uk-visible-small" width="140" height="140" src="<?php echo get_bloginfo('template_directory');?>/img/mail-icon-inactive.png" alt="Contact Us">
                                                <img class="dish-square-icon uk-hidden-small" width="140" src="<?php echo get_bloginfo('template_directory');?>/img/mail-icon-square.png" alt="Contact us">
                       <div class="uk-overlay-area">
                            <div class="uk-overlay-area-content">CONTACT</div>
                        </div>
                    </a>
                </div>
                        </div>
-->

        </div>

<?php get_sidebar( 'off-canvas' ); ?>

