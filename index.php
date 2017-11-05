<?php get_header(); ?>

<div id="page-header">
  <span class="site-title"><?php bloginfo('name'); ?></div>
  <div class="separator"></div>
  <span class="site-tagline"><?php bloginfo('description'); ?></div>
</div>

<div id="page-content">
  <div class="posts-wrapper">
    <?php if (have_posts()): ?>
      <?php while (have_posts()): ?>
      	<?php the_post(); ?>
        <?php get_template_part('content', get_post_format()); ?>
      <?php endwhile; ?>
    <?php else: ?>
      <?php get_template_part('content', '404'); ?>
    <?php endif; ?>
  </div>
</div>

<?php get_footer(); ?>
