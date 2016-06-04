    </div><!-- /.container -->

    <footer class="blog-footer">
      <p>Modern Medieval Theme by <a href="/bekorn">bekorn</a></p>
      <p>
        <a href="#">Back to top</a>
      </p>
    </footer>


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>

    <script>
      
      $(document).ready(function(){

      $(".blog-post").find(".post-title-bg").click( function(){    $(this).parent().find(".post-content-container").slideToggle();   });

      //$(".blog-post").click( function(){    $(this).find(".post-content-container").slideToggle();   });

      });

    </script>
    <?php wp_footer(); ?> 
  </body>
</html>