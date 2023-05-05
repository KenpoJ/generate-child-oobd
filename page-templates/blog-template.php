<?php
/**
* Template Name: Blog Page Template
*
* @package WordPress
* @subpackage OneOldBikerDude2022
* @since One Old Biker Dude 2022 1.0
*/
get_header();
?>

<div class="container page-container full-width-container">

  <main id="content" role="main">

    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

        <?php get_template_part( 'loop-templates/content', 'blog' ); ?>

        <?php //comments_template(); ?>

      <?php endwhile; endif; ?>

    <?php get_template_part( 'nav', 'below' ); ?>

  </main>

</div>

<?php get_footer(); ?>