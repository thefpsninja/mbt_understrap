<div class="wrapper-portfolio col-md-6 col-lg-4">
    <a href="<?php the_permalink(); ?>"><h1><?php the_title(); ?></h1></a>

    <?php the_excerpt(); ?>

    <?php $link = get_post_meta($post->ID, 'Link'); 
    if($link) : ?>
    <!-- Testing Custom Field -->
    <a href="<?php echo $link[0]; ?>"><?php _e('Link', 'understrap'); ?></a>
    <?php endif; ?>
</div>