<?php
/**
* Template Name: Full Width Template
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
      <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

        <?php if(!has_shortcode($post->post_content, 'add_hero')) { ?>
          <header class="header">
            <h1 class="entry-title" itemprop="name"><?php the_title(); ?></h1> 
          </header>
        <?php } ?>

        <div class="entry-content" itemprop="mainContentOfPage">
          <?php if ( has_post_thumbnail() ) { the_post_thumbnail( 'full', array( 'itemprop' => 'image' ) ); } ?>
          <?php the_content(); ?>
          <div class="entry-links"><?php wp_link_pages(); ?></div>
        </div>
      </article>
      <?php if ( comments_open() && !post_password_required() ) { comments_template( '', true ); } ?>
    <?php endwhile; endif; ?>

    <?php edit_post_link(); ?>

  </main>

</div>

<?php get_footer(); ?>