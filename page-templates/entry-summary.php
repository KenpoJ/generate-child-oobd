<div class="entry-summary">

  <div class="search-entry-img">
    <?php //if ( ( has_post_thumbnail() ) && ( !is_search() ) ) : ?>
    <?php if ( ( has_post_thumbnail() ) ) : ?>
      <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
        <?php the_post_thumbnail(); ?>
      </a>
    <?php else : ?>
      <div class="no-thumb"></div>
    <?php endif; ?>
  </div>

  <div class="entry-description" itemprop="description"><?php the_excerpt(); ?></div>

  <?php if ( is_search() ) { ?>
    <!-- <div class="entry-links"><?php wp_link_pages(); ?></div> -->
  <?php } ?>

</div>