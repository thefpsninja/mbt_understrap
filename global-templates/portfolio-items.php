<?php
/**
 * Portfolio Items Setup
 *
 * @package understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

// Get three latest Portfolio Items
$portfolio_items = new WP_Query([
    'post_type'         => 'us_portfolio',
    'posts_per_page'    => -1,
]);

// If there is any Portfolio Items
if ($portfolio_items->have_posts()) : ?>
    
    <div class="wrapper" id="wrapper-portfolio-items">
        <div class="container">
            <div class="row">
            <!-- Portfolio Items Loop -->
            <?php while($portfolio_items->have_posts()) : $portfolio_items->the_post(); 
            get_template_part('loop-templates/content-us_portfolio');
            endwhile;
            wp_reset_postdata(); ?>


            </div>
        </div>
    </div>
<?php endif; ?>