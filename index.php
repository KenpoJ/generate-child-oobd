<?php get_header(); ?>


<div class="container page-container">

  <main id="content" role="main">

    <?php if(is_home()) { ?>

      <div class="blog-page">

    <?php } ?>

    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

      <?php get_template_part( 'page-templates/entry' ); ?>

      <?php comments_template(); ?>

    <?php endwhile; endif; ?>

    <?php if(is_home()) { ?>

      </div>

    <?php } ?>

    <?php get_template_part( 'nav', 'below' ); ?>

  </main>

  <?php get_sidebar(); ?>

</div>

<?php get_footer(); ?>