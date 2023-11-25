<?php

/*
Template Name: Kontakt
*/
?>


<?php get_header(); ?>

    <main class="page-wrap">

        <div class="container">

            <?php get_template_part('includes/section','content');?>
            <?php the_field('om_pero'); ?>
            <?php $image = get_field('owner_image');
                if( !empty( $image ) ): ?>
                <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
            <?php endif; ?>
        </div>
        
</main>

<?php get_footer(); ?>