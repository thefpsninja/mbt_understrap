<?php
/**
 * Single post partial template
 *
 * @package understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;
?>

<article <?php post_class(); ?> id="post-<?php the_ID(); ?>">

	<header class="entry-header">

		<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>

		<div class="entry-meta">

			<?php understrap_posted_on(); ?>

		</div><!-- .entry-meta -->

	</header><!-- .entry-header -->

	<?php echo get_the_post_thumbnail( $post->ID, 'large' ); ?>

	<div class="entry-content">

		<?php the_content(); ?>

		<?php 
		// Fetch Client
		$client = get_field('add_client');

		// Fetch Client Url
		$client_url = get_field('client_url');

		// If there is no URL print without
		if( $client && !$client_url): ?>
			<h2><?php echo esc_html( $client->name ); ?></h2>
			<p><?php echo esc_html( $client->description ); ?></p>
		<?php endif; 

		// If there is URL print with
		if( $client_url && $client ): ?>
			<h2><?php echo '<a href="' . esc_url( $client_url ) . '">'; ?><?php echo esc_html( $client->name ); ?></a></h2>
			<p><?php echo esc_html( $client->description ); ?></p>
		<?php else: ?>

		<?php endif; ?>

		<?php
		wp_link_pages(
			array(
				'before' => '<div class="page-links">' . __( 'Pages:', 'understrap' ),
				'after'  => '</div>',
			)
		);
		?>

	</div><!-- .entry-content -->

	<footer class="entry-footer">

		<?php understrap_entry_footer(); ?>

        <?php $link = get_post_meta($post->ID, 'Link'); 
            if($link) : ?>
                <!-- Testing Custom Field -->
                <a href="<?php echo $link[0]; ?>"><?php _e('Link', 'understrap'); ?></a>
            <?php endif; ?>

	</footer><!-- .entry-footer -->

</article><!-- #post-## -->
