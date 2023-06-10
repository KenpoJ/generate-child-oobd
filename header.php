<?php
/**
 * The template for displaying the header.
 *
 * @package GeneratePress
 */

if ( ! defined( 'ABSPATH' ) ) {
  exit; // Exit if accessed directly.
}

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>" />
  <meta name="viewport" content="width=device-width" />
  <meta name="description" content="<?php if ( is_single() ) { echo wp_strip_all_tags( get_the_excerpt(), true ); } else { bloginfo( 'description' ); } ?>" />
  <meta name="keywords" content="<?php echo implode( ', ', wp_get_post_tags( get_the_ID(), array( 'fields' => 'names' ) ) ); ?>" />

  <meta property="og:image" content="<?php if ( is_single() && has_post_thumbnail() ) { the_post_thumbnail_url( 'full' ); } elseif ( has_site_icon() ) { echo get_site_icon_url(); } ?>" />
  <meta name="twitter:card" content="photo" />
  <meta name="twitter:site" content="<?php bloginfo( 'name' ); ?>" />
  <meta name="twitter:title" content="<?php if ( is_single() ) { the_title(); } else { bloginfo( 'name' ); } ?>" />
  <meta name="twitter:description" content="<?php if ( is_single() ) { echo wp_strip_all_tags( get_the_excerpt(), true ); } else { bloginfo( 'description' ); } ?>" />
  <meta name="twitter:image" content="<?php if ( is_single() && has_post_thumbnail() ) { the_post_thumbnail_url( 'full' ); } elseif ( has_site_icon() ) { echo get_site_icon_url(); } ?>" />
  <meta name="twitter:url" content="<?php if ( is_single() ) { esc_url( the_permalink() ); } else { echo esc_url( home_url() ) . '/'; } ?>" />
  <meta name="twitter:widgets:theme" content="light" />
  <meta name="twitter:widgets:link-color" content="blue" />
  <meta name="twitter:widgets:border-color" content="#fff" />

  <link rel="canonical" href="https://<?php echo $_SERVER["HTTP_HOST"]; ?><?php echo parse_url( $_SERVER['REQUEST_URI'], PHP_URL_PATH ); ?>" />
  <link rel="preconnect" href="https://fonts.googleapis.com"> 
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin> 
  <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@500&family=Poppins:ital,wght@0,400;0,600;1,400;1,600&display=swap" rel="stylesheet">
  
  <script src="https://kit.fontawesome.com/53f8f7e502.js" crossorigin="anonymous"></script>

  <script type="application/ld+json">
    {
    "@context": "https://www.schema.org/",
    "@type": "WebSite",
    "name": "<?php bloginfo( 'name' ); ?>",
    "url": "<?php echo esc_url( home_url() ); ?>/"
    }
  </script>
  <script type="application/ld+json">
    {
    "@context": "https://www.schema.org/",
    "@type": "Organization",
    "name": "<?php bloginfo( 'name' ); ?>",
    "url": "<?php echo esc_url( home_url() ); ?>/",
    "logo": "<?php if ( has_custom_logo() ) { $custom_logo_id = get_theme_mod( 'custom_logo' ); $logo = wp_get_attachment_image_src( $custom_logo_id , 'full' ); echo esc_url( $logo[0] ); } ?>",
    "image": "<?php if ( has_site_icon() ) { echo get_site_icon_url(); } ?>",
    "description": "<?php bloginfo( 'description' ); ?>"
    }
  </script>

  <!-- Global site tag (gtag.js) - Google Analytics -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=G-CPSHHKMSPG"></script>
  <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'G-CPSHHKMSPG');
  </script>
  
  <script id="mcjs">!function(c,h,i,m,p){m=c.createElement(h),p=c.getElementsByTagName(h)[0],m.async=1,m.src=i,p.parentNode.insertBefore(m,p)}(document,"script","https://chimpstatic.com/mcjs-connected/js/users/92dcac0c3927d80d64f9ec992/971c4a4001ddeb069515b2951.js");</script>

  <!-- Hotjar Tracking Code for oneoldbikerdude.com -->
  <!-- <script>
    (function(h,o,t,j,a,r){
      h.hj=h.hj||function(){(h.hj.q=h.hj.q||[]).push(arguments)};
      h._hjSettings={hjid:2448678,hjsv:6};
      a=o.getElementsByTagName('head')[0];
      r=o.createElement('script');r.async=1;
      r.src=t+h._hjSettings.hjid+j+h._hjSettings.hjsv;
      a.appendChild(r);
    })(window,document,'https://static.hotjar.com/c/hotjar-','.js?sv=');
  </script> -->
  
  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?> <?php generate_do_microdata( 'body' ); ?>>
  <?php
  /**
   * wp_body_open hook.
   *
   * @since 2.3
   */
  do_action( 'wp_body_open' ); // phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedHooknameFound -- core WP hook.

  /**
   * generate_before_header hook.
   *
   * @since 0.1
   *
   * @hooked generate_do_skip_to_content_link - 2
   * @hooked generate_top_bar - 5
   * @hooked generate_add_navigation_before_header - 5
   */
  do_action( 'generate_before_header' );

  /**
   * generate_header hook.
   *
   * @since 1.3.42
   *
   * @hooked generate_construct_header - 10
   */
  do_action( 'generate_header' );

  /**
   * generate_after_header hook.
   *
   * @since 0.1
   *
   * @hooked generate_featured_page_header - 10
   */
  do_action( 'generate_after_header' );
  ?>

  <?php 
  if(is_front_page()) {
      echo do_shortcode('[add_hero 
        id="hero-home" 
        title="Rev Up for a Cause:" 
        subtitle="Lend a Hand to Support the MDA by Making a Purchase That Saves Lives!" 
        cta="Shop Now" 
        background-color="#bbc1d2"
        link="/shop" 
        background-image="/wp-content/uploads/2020/10/IMG_0035-scaled-e1608439545921.jpeg"]');
  }
  ?>

  <div <?php generate_do_attr( 'page' ); ?>>
    <?php
    /**
     * generate_inside_site_container hook.
     *
     * @since 2.4
     */
    do_action( 'generate_inside_site_container' );
    ?>
    <div <?php generate_do_attr( 'site-content' ); ?>>
      <?php
      /**
       * generate_inside_container hook.
       *
       * @since 0.1
       */
      do_action( 'generate_inside_container' );
