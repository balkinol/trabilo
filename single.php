<?php get_header(); ?>
        <!-- Content Blog Post-->
        <div class="col-lg-9">
            <div class="container">
                <div class="single-blog-post">
                    <h3><?php the_title(); ?></h3>
                    <small>by <?php the_author(); ?> <?php the_time('F j, Y g:i a'); ?></small>
                    <?php if(has_post_thumbnail()) : ?>
                        <div class="blog-post-img">
                        <?php the_post_thumbnail(); ?>
                        </div>
                    <?php endif; ?>
                    <p><?php the_content(); ?></p>
                    <div class="category-post"><?php the_category(); ?></div>
                    

                    <div class="line-break"></div>

                    <?php get_template_part('template-parts/content', 'sitebtn'); ?>

                    <div class="line-break"></div>


                    <div class="other-story">
                        <h1>Related Posts</h1>

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

                    <?php get_template_part('template-parts/content', 'subscribe'); ?>

                </div>
            </div>
        </div>
    
    <!-- Sidebar -->
    <?php get_template_part('template-parts/content', 'sidebar'); ?>

<?php get_footer(); ?>