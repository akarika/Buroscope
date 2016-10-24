<?php get_header(); ?>

<main role="main">
    <!-- section -->
    <section>

        <h1><?php the_title(); ?></h1>

        <?php if (have_posts()): ?>

            <?php woocommerce_content(); ?>

        <?php endif; ?>

    </section>
    <!-- /section -->
</main>

<?php get_sidebar(); ?>

<?php get_footer(); ?>
