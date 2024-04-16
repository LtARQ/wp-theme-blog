    <?php get_header(); ?>
    <div class="container">
      <div class="blog-header">
        <h1 class="blog-title">The Bootstrap Blog</h1>
        <p class="lead blog-description">The official example template of creating a blog with Bootstrap.</p>
      </div>

      <div class="row">

        <div class="col-sm-8 blog-main">

          <?php
          // $args=array('post_type'=>'post',
          //             'category'=>'');
          // $posts=new WP_Query($args);
          if(have_posts())
          {
            while (have_posts()) 
            {
              the_post();

              get_template_part('content');
              
            }
          }
          else
          {
            echo "<h2>No Posts</h2>";
          }
          ?>
          

          <nav>
            <ul class="pager">
              <li><a href="#">Previous</a></li>
              <li><a href="#">Next</a></li>
            </ul>
          </nav>

        </div><!-- /.blog-main -->

        <div class="col-sm-3 col-sm-offset-1 blog-sidebar">
          <?php if(is_active_sidebar('sidebar')) : ?>
            <?php dynamic_sidebar('sidebar') ?>
          <?php endif; ?>
        </div><!-- /.blog-sidebar -->

      </div><!-- /.row -->

    </div><!-- /.container -->

    <?php get_footer();?>