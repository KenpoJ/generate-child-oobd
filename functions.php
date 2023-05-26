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

if ( ! function_exists( 'generate_widgets_init' ) ) {
  add_action( 'widgets_init', 'generate_widgets_init' );
  /**
   * Register widgetized area and update sidebar with default widgets
   */
  function generate_widgets_init() {
    $widgets = array(
      'sidebar-default' => __( 'Sidebar Default', 'generatepress' ),
      'sidebar-ride' => __( 'Sidebar Ride', 'generatepress' ),
      'sidebar-shop' => __( 'Sidebar Shop', 'generatepress' ),
      'header' => __( 'Header', 'generatepress' ),
      'footer-1' => __( 'Footer Widget 1', 'generatepress' ),
      'footer-2' => __( 'Footer Widget 2', 'generatepress' ),
      'footer-3' => __( 'Footer Widget 3', 'generatepress' ),
      'footer-4' => __( 'Footer Widget 4', 'generatepress' ),
      'footer-5' => __( 'Footer Widget 5', 'generatepress' ),
      'footer-bar' => __( 'Footer Bar', 'generatepress' ),
      'top-bar' => __( 'Top Bar', 'generatepress' ),
    );

    foreach ( $widgets as $id => $name ) {
      register_sidebar(
        array(
          'name'          => $name,
          'id'            => $id,
          'before_widget' => '<aside id="%1$s" class="widget inner-padding %2$s">',
          'after_widget'  => '</aside>',
          'before_title'  => apply_filters( 'generate_start_widget_title', '<h2 class="widget-title">' ),
          'after_title'   => apply_filters( 'generate_end_widget_title', '</h2>' ),
        )
      );
    }
  }
}

if ( ! function_exists( 'generate_construct_sidebars' ) ) {
  /**
   * Construct the sidebars.
   *
   * @since 0.1
   */
  function generate_construct_sidebars() {
    $layout = generate_get_layout();

    // When to show the right sidebar.
    $rs = array( 'right-sidebar', 'both-sidebars', 'both-right', 'both-left' );

    // When to show the left sidebar.
    $ls = array( 'left-sidebar', 'both-sidebars', 'both-right', 'both-left' );

    // If left sidebar, show it.
    if ( in_array( $layout, $ls ) ) {
      get_sidebar( 'left' );
    }

    // If right sidebar, show it.
    if ( in_array( $layout, $rs ) ) {
      if(is_single() && in_category('rides')) {
        get_sidebar('ride');
      } else {
        get_sidebar('right');
      }
    }
  }

  /**
   * The below hook was removed in 2.0, but we'll keep the call here so child themes
   * don't lose their sidebar when they update the theme.
   */
  add_action( 'generate_sidebars', 'generate_construct_sidebars' );
}

if(! function_exists('get_star_rating')) {
    function get_star_rating($num) {
        // echo gettype($num);
        $rating = '';

        if($num == '.5') {
            $rating = '<i class="fas fa-star-half-alt"></i>
            <i class="far fa-star"></i>
            <i class="far fa-star"></i>
            <i class="far fa-star"></i>
            <i class="far fa-star"></i>';
        }
        elseif($num == '1') {
            $rating = '<i class="fas fa-star"></i>
            <i class="far fa-star"></i>
            <i class="far fa-star"></i>
            <i class="far fa-star"></i>
            <i class="far fa-star"></i>';
        }
        elseif($num == '1.5') {
            $rating = '<i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
            <i class="far fa-star"></i>
            <i class="far fa-star"></i>
            <i class="far fa-star"></i>';
        }
        elseif($num == '2') {
            $rating = '<i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="far fa-star"></i>
            <i class="far fa-star"></i>
            <i class="far fa-star"></i>';
        }
        elseif($num == '2.5') {
            $rating = '<i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
            <i class="far fa-star"></i>
            <i class="far fa-star"></i>';
        }
        elseif($num == '3') {
            $rating = '<i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="far fa-star"></i>
            <i class="far fa-star"></i>';
        }
        elseif($num == '3.5') {
            $rating = '<i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
            <i class="far fa-star"></i>';
        }
        elseif($num == '4') {
            $rating = '<i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="far fa-star"></i>';
        }
        elseif($num == '4.5') {
            $rating = '<i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>';
        }
        elseif($num == '5') {
            $rating = '<i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>';
        }

        return $rating;
    }
}
