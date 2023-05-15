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
<div class="widget-area sidebar is-right-sidebar">
  <div class="inside-right-sidebar inside-sidebar-ride">
    <?php
    /**
     * generate_before_right_sidebar_content hook.
     *
     * @since 0.1
     */
    // do_action( 'generate_before_right_sidebar_content' );
    ?>

    <div class="widget inner-padding widget_block ride-ratings">
      <h3 class="sidebar-heading">Ride Ratings</h3>
      <div class="grid">
        <div class="rating-container">
          <h4 class="rating-title">Enjoyment</h4>
          <div class="rating-level">
            <? $enjoyment = get_field('rating-enjoyment'); ?>
            <? //echo $enjoyment; ?>
            <? echo get_star_rating($enjoyment); ?>
          </div>
        </div>
        <div class="rating-container">
          <h4 class="rating-title">Scenery</h4>
          <div class="rating-level">
            <? $scenery = get_field('rating-scenery'); ?>
            <? //echo $scenery; ?>
            <? echo get_star_rating($scenery); ?>
          </div>
        </div>
        <div class="rating-container">
          <h4 class="rating-title">Tourism</h4>
          <div class="rating-level">
            <? $tourism = get_field('rating-tourism'); ?>
            <? //echo $tourism; ?>
            <? echo get_star_rating($tourism); ?>
          </div>
        </div>
        <div class="rating-container">
          <h4 class="rating-title">Overall</h4>
          <div class="rating-level">
            <? $overall = get_field('rating-overall'); ?>
            <? //echo $overall; ?>
            <? echo get_star_rating($overall); ?>
          </div>
        </div>
      </div>
    </div>

    <div class="widget inner-padding widget_block ride-map">
      <?
      $image = get_field('ride_map');
      $size = $image['sizes'][ 'medium' ];
      if( !empty( $image ) ): ?>
          <a href="<?php echo esc_url($image['sizes'][ 'large' ]); ?>" data-featherlight="image"><img class="img-fluid" src="<?php echo esc_url($size); ?>" alt="<?php echo esc_attr($image['alt']); ?>"></a>
      <?php endif; ?>
    </div>

    <div class="widget inner-padding widget_block ride-elevation">
      <?
      $image = get_field('elevation');
      $size = $image['sizes'][ 'medium' ];
      if( !empty( $image ) ): ?>
          <a href="<?php echo esc_url($image['sizes'][ 'large' ]); ?>" data-featherlight="image"><img class="img-fluid" src="<?php echo esc_url($size); ?>" alt="<?php echo esc_attr($image['alt']); ?>"></a>
      <?php endif; ?>
    </div>

    <?php if (get_field('directions')) { ?>

    <div class="widget inner-padding widget_block ride-directions">
      <h3 class="sidebar-heading">Directions</h3>
      <?php the_field('directions'); ?>
    </div>

    <?php } ?>

    <?php 
    if(is_active_sidebar('sidebar-popular-posts')) { ?>

      <div class="widget inner-padding widget_block popular-posts">
        <h3 class="sidebar-heading">Popular Posts</h3>
        <?php dynamic_sidebar('popular-posts'); ?>
      </div>

    <?php
    }

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
</div>
