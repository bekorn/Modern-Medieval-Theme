
<?php get_header(); ?>
<div class="container">
<div class="row no-pad">

  <?php get_sidebar(); ?>
  
  <div class="col-lg-9 col-offset-1 blog-main">
    <div class="row no-pad" >
      <div class="col-lg-10 col-lg-offset-1 blog-main">
          <?php 
            if ( have_posts() ) : while ( have_posts() ) : the_post();
          
              get_template_part( 'home_content', get_post_format() );
        
            endwhile; endif; 
          ?>
      </div><!-- /.blog-main -->
    </div><!-- en of inner row -->
  </div>
</div><!-- /.row -->

<?php get_footer(); ?>