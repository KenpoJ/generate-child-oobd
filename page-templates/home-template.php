<?php
/**
 * Template Name: Homepage
 *
 * Template for displaying the homepage
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

get_header();
?>

<!-- <div class="container page-container"> -->

  <!-- <main id="content" role="main"> -->

    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

      <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

        <div class="entry-content" itemprop="mainContentOfPage">
          <?php if ( has_post_thumbnail() ) { the_post_thumbnail( 'full', array( 'itemprop' => 'image' ) ); } ?>
          <?php the_content(); ?>
          <div class="entry-links"><?php wp_link_pages(); ?></div>
        </div>

      </article>

      <?php if ( comments_open() && !post_password_required() ) { comments_template( '', true ); } ?>

    <?php endwhile; endif; ?>

  <!-- </main> -->

<!-- </div> -->

<?php get_footer(); ?>