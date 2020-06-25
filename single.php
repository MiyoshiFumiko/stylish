<?php get_header(); ?>

<main class="main-box">

   <?php if (have_posts()): ?>

    <?php while (have_posts()): the_post(); ?>

    <h2 class="main-title"><?php the_title(); ?></h2>

    <div class="main-content"><?php the_content(); ?></div>

   <?php endwhile; ?>

   <?php endif; ?>

</main>

<footer>
    <?php if (get_previous_post()):?>
    <?php previous_post_link('&laquo; %link', '前の記事へ'); ?>
    <?php endif; ?>

    <?php if (get_next_post()):?>
    <?php next_post_link('%link &raquo;', '次の記事へ'); ?>
    <?php endif; ?>
  </footer>

  </div>
<?php get_footer(); ?>