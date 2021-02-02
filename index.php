<?php get_header(); ?>
     <!-- Content Showcase -->
     <?php get_template_part('template-parts/content', 'showcase'); ?>
   
    <!-- Sidebar -->
   <div class="col-lg-3">

    <?php 
      get_search_form();
    ?>

    <a href="#" target="_blank">
      <img src="<?php echo get_theme_mod('sidebar_banner_one')?>"  class="banner-1">
    </a>
  </div>
   <!-- Content Blog Post -->
   <div class="col-lg-9 my-3 px-4">
        <div class="row">
          <?php if(have_posts()) : ?>
            <?php while(have_posts()) : the_post(); ?>
              <div class="col-md-6 mb-2">
                <div class="blog-post row mx-0  mb-2">

                  <div class="col-lg-5">
                    <?php if(has_post_thumbnail()) : ?>
                      <div class="blog-post-img">
                        <?php the_post_thumbnail(); ?>
                      </div>
                    <?php endif; ?>
                  </div>

                  <div class="blog-post-content col-lg-7">
                    <div class="category-post"><?php the_category(); ?></div>
                    <a href="<?php the_permalink(); ?>" class="blog-post-title"><?php the_title(); ?></a> <br>
                    <small>by <?php the_author(); ?> <?php the_time('F j, Y g:i a'); ?></small>
                  </div>
                </div>
              </div>    
            <?php endwhile; ?>
            <?php else : ?>
              <p><?php __('No Posts Found'); ?></p>
          <?php endif; ?>
        </div>
        <div class="line-break"></div>
        <div class="other-story">
          <h1>Other Story</h1>

              <?php if(have_posts()) : ?>
                <?php while(have_posts()) : the_post(); ?>
                  <div class="blog-post mb-4">
                  <a href="<?php the_permalink(); ?>" class="blog-post-title"><?php the_title(); ?></a>
                  <br>
                  <div class="blog-post-small">by <?php the_author(); ?> / <?php the_time('F j, Y g:i a'); ?> <?php the_category(); ?> </div>
                  </div>
                <?php endwhile; ?>
                <?php else : ?>
                <p><?php __('No Posts Found'); ?></p>
              <?php endif; ?>

        </div>
      </div>
      <!-- Sidebar -->
      <div class="col-lg-3 my-3">
      <?php get_template_part('template-parts/content', 'subscribe'); ?>

        <div class="GoogleContainer"></div>

        <div class="mt-4">
        <a href="#" target="_blank">
          <img src="<?php echo get_theme_mod('sidebar_banner_two')?>"  class="banner-2">
        </a>
        </div>

      </div>
     
<?php get_footer(); ?>