<?php get_header(); ?>

<div id="page-header">
  <p id="page-title"><?php bloginfo('name'); ?></div>
  <div class="separator"></div>
  <p id="page-tagline"><?php bloginfo('description'); ?></div>
</div>

<div id="page-content">
  <div class="content-wrapper">
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
