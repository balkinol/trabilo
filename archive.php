<?php get_header(); ?>
    <!-- Content Page -->
    <div class="col-lg-9">
        <div class="container">

        <a href="#" class="banner-header"><img src="<?php echo get_theme_mod('page_banner_header')?>" alt="Banner Header"></a>

            <div class="mt-3 p-4">
                <h3>
                  <?php
                    the_archive_title();
                  ?>
                </h3>

                <div class="line-break"></div>
            </div>
       
          <div class="my-3">

            <?php if(have_posts()) : ?>
                  <?php while(have_posts()) : the_post(); ?>

                    <?php if(has_post_thumbnail()) : ?>

                        <div class="blog-post row mb-4">

                            <div class="col-lg-5">
                              <div class="blog-post-img">
                                <?php the_post_thumbnail(); ?>
                              </div>
                          </div>

                          <div class="col-lg-7">
                          <div class="blog-post-small justify-content-between mb-2">
                                  <div><?php the_category(); ?> </div>  
                                  <div>by <?php the_author(); ?> / <?php the_time('F j, Y g:i a'); ?> </div>
                                </div>

                                <a href="<?php the_permalink(); ?>" class="blog-post-title"><?php the_title(); ?></a>

                                <p><?php the_excerpt(); ?></p>

                                <div class="float-right"><a href="<?php the_permalink(); ?>" class="btn btn-danger">Read More</a></div>
                          </div>
                        </div>
                        <?php else : ?>

                          <div class="blog-post mb-4">
                            <div class="blog-post-small justify-content-between mb-2">
                              <div><?php the_category(); ?> </div>  
                              <div>by <?php the_author(); ?> / <?php the_time('F j, Y g:i a'); ?> </div>
                            </div>

                            <a href="<?php the_permalink(); ?>" class="blog-post-title"><?php the_title(); ?></a>

                            <p><?php the_excerpt(); ?></p>

                            <a href="<?php the_permalink(); ?>" class="btn btn-danger">Read More</a>
                        </div>

                      <?php endif; ?>

                  <?php endwhile; ?>
                  <?php else : ?>
                  <p><?php __('No Posts Found'); ?></p>
                <?php endif; ?>

          </div>

          <div class="line-break"></div>

          <?php get_template_part('template-parts/content', 'sitebtn'); ?>

          <div class="line-break"></div>

          <?php get_template_part('template-parts/content', 'subscribe'); ?>

        </div>
    </div>

  <!-- Sidebar -->
  <?php get_template_part('template-parts/content', 'sidebar'); ?>

<?php get_footer(); ?>