<?php

$defaults = array(
    'theme_location'  => '',
    'menu'            => 'primary-menu',
    'container'       => false,
    'container_class' => '',
    'container_id'    => '',
    'menu_class'      => 'primary-navigation uk-grid uk-width-1-1 uk-container-center',
    'menu_id'         => '',
    'echo'            => true,
    'fallback_cb'     => 'wp_page_menu',
    'before'          => '',
    'after'           => '',
    'link_before'     => '',
    'link_after'      => '',
    'items_wrap'      => '<div id="%1$s" class="%2$s">%3$s</div>',
    'depth'           => 0,
    'walker'          => new walker_uikits(),
);

wp_nav_menu( $defaults );

?>
