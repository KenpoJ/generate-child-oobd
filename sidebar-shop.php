<?php
/**
 * The Sidebar containing the main widget areas.
 *
 * @package GeneratePress
 */

if ( ! defined( 'ABSPATH' ) ) {
  exit; // Exit if accessed directly.
}
?>
<div class="widget-area sidebar">
  <div class="inside-right-sidebar inside-sidebar-shop">
    
    <div class="inside-right-sidebar">
      <?php dynamic_sidebar('sidebar-shop'); ?>
    </div>
    
  </div>
  <?php

    /*if ( ! dynamic_sidebar( 'sidebar-default' ) ) {
      generate_do_default_sidebar_widgets( 'right-sidebar' );
    }*/

    /**
     * generate_after_right_sidebar_content hook.
     *
     * @since 0.1
     */
    do_action( 'generate_after_right_sidebar_content' );
    ?>
</div>
