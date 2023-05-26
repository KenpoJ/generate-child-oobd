<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

get_header();

?>

<!-- <div <?php generate_do_attr( 'content' ); ?>>
    <main <?php generate_do_attr( 'main' ); ?>> -->

<!-- <div class="content-area"> -->
    <main class="content-shopping">

        <?php if(is_shop()) { ?>

            <div class="alert alert-success text-center lead">
                <span>FREE SHIPPING with any order over $50!</span>
            </div>
            <div class="grid shop-topper">
                <div class="img-container">
                    
                </div>
                <div class="product-highlights">
                    <!-- <div class="best-sellers">
                        <h3 class="featured-shop-heading">Best Sellers</h3>
                        <?php 
                        //echo do_shortcode('[products limit="2" columns="2" best_selling="true" ]');
                        ?>
                    </div> -->
                    <div class="featured-products">
                        <h3 class="featured-shop-heading">Featured Items</h3>
                        <?php
                        echo do_shortcode('[products limit="4" columns="4" visibility="featured" order_by="popularity" ]');
                        ?>
                    </div>
                </div>
            </div>

        <?php } ?>

        <div class="grid shopping-content">
            <div class="product-info">
                <?php woocommerce_content(); ?>
            </div>
            <div class="sidebar sidebar-shopping">
                <?php get_sidebar('shop'); ?>
            </div>
        </div>

    </main>
<!-- </div> -->

<?php get_footer(); ?>