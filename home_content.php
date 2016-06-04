       

<div class="blog-post">
  <div class="post-title-bg">
    <h2 class="post-title"><?php echo the_title(); ?></h2>
  </div>
  <div class="post-container">

  <a href="<? echo esc_url(get_permalink()); ?>" class="post-content-link">
      <div class="post-content-container">
          <?php echo the_content(); ?>
      </div>
  </a>
    <div class="post-info-container">
        <p class="post-date"><?php echo get_the_date(); ?></p>
        <a href="<?php echo esc_url(get_the_author_meta('url')); ?>" class="post-author" title="<? echo get_the_author() . "'s Website"; ?>"><?php echo get_the_author(); ?></a>
    </div>

  </div>
</div><!-- /.blog-post -->

