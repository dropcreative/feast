<div id="offcanvas-nav" class="uk-offcanvas">
  <div class="uk-offcanvas-bar">
<?php

$defaults = array(
  'theme_location'  => 'off-canvas-menu',
//  'menu'            => '',
  'container'       => false,
//  'container_class' => '',
//  'container_id'    => '',
  'menu_class'      => 'uk-nav uk-nav-offcanvas',
//  'menu_id'         => '',
//  'echo'            => true,
//  'fallback_cb'     => 'wp_page_menu',
//  'before'          => '',
//  'after'           => '',
//  'link_before'     => '',
//  'link_after'      => '',
//  'items_wrap'      => '%3$s',
  'depth'           => 0,
//  'walker'          => new walker_uikits_offcanvas(),

);

wp_nav_menu( $defaults );

?>

    
    </div>
</div>