<div class="post">
  <?php $author_archive_link = get_author_posts_url(get_the_author_meta('ID')); ?>
  <h3><a href="<?php echo the_permalink(); ?>"><?php the_title(); ?></a></h3>
  <h5>
    <i>
      Posted by
      <a class="author-archive-link" href="<?php echo $author_archive_link; ?>">
        <?php the_author(); ?>
      </a>
      on
      <?php the_time('F jS, Y g:i a'); ?>
    </i>
  </h5>
  <?php the_content(); ?>
</div>
