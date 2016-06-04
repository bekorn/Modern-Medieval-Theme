
<?php get_header(); ?>
<div class="container">
	<div class="row no-pad">
	  <div class="col-lg-12 blog-main">
	      <?php 
	        if ( have_posts() ) : while ( have_posts() ) : the_post();
	      
	          get_template_part( 'page_content', get_post_format() );
	    
	        endwhile; endif; 
	      ?>
	  </div><!-- /.blog-main -->
	</div><!-- /.row -->
</div>
<?php get_footer(); ?>