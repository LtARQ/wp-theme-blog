<div class="blog-post">
                <h2 class="blog-post-title">
                  <?php
                  if (is_single()) 
                  {
                    the_title();
                  }
                  else
                  {
                    ?>
                    <a href="<?php the_permalink(); ?>">
                      <?php the_title(); ?>
                    </a>
                    <?php

                  }
                  ?>
                  
                </h2>
                <p class="blog-post-meta">
                  <?php the_date(); ?> 
                  by 
                  <a href="<?php echo get_author_posts_url(get_the_author_meta('ID')); ?>">
                    <?php the_author(); ?>
                  </a>
                </p>

                <!-- <p><?php //the_content(); ?></p> -->
                <div class="post-thumb">
                	<?php the_post_thumbnail(); ?>
                </div>
                <?php
                if(is_single())
                {
                ?>
                <p><?php the_content(); ?></p>
                <?php
                }
                else
                {
                ?>
                <p><?php the_excerpt(); ?></p>
                <?php
                }
                ?>
                
              </div><!-- /.blog-post -->