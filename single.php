<?php get_header(); ?>

<main class="main-box">

   <?php if (have_posts()): ?>

    <?php while (have_posts()): the_post(); ?>

    <h2 class="main-title"><?php the_title(); ?></h2>

    <div class="main-content"><?php the_content(); ?></div>

   <?php endwhile; ?>

   <?php endif; ?>

</main>

<?php get_footer(); ?>