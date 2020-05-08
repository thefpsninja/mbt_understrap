<?php
/**
 * Hero setup
 *
 * @package understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;


// Get the three latest USPs
$usps = new WP_Query([
	'post_type' 		=>	'us_usp',
	'posts_per_page'		=> 3,
]);

if ($usps->have_posts() ) :
?>



<div class="wrapper" id="wrapper-usps">

	<div class="container">
		<div class="row">

		<?php while ($usps->have_posts()) : $usps->the_post(); ?>
			<!-- The USPs content item loop -->
			<?php get_template_part('loop-templates/content', 'usp'); ?>
		<?php endwhile; ?>

		</div><!-- ./row -->
	</div><!-- ./container -->
</div><!-- ./wrapper -->

<!-- Reset WP postdata -->
<?php wp_reset_postdata(); ?>

<?php endif; ?>