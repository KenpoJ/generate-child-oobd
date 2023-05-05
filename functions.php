<?php
/*add_action( 'wp_enqueue_scripts', 'oobd_generate_child_enqueue_styles' );
function oobd_generate_child_enqueue_styles() {
  $parenthandle = 'generate-style'; // This is 'twentyfifteen-style' for the Twenty Fifteen theme.
  $theme        = wp_get_theme();
  wp_enqueue_style( $parenthandle,
    get_template_directory_uri() . '/style.css',
    array(),  // If the parent theme code has a dependency, copy it to here.
    // $theme->parent()->get( 'Version' )
  );
  wp_enqueue_style( 'child-style',
    get_stylesheet_uri(),
    array( $parenthandle ),
    // $theme->get( 'Version' ) // This only works if you have Version defined in the style header.
  );
}*/