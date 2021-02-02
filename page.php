<?php get_header(); ?>
    <!-- Content Page -->
    <div class="col-lg-9">
        <div class="container">
        
            <a href="#" class="banner-header"><img src="<?php echo get_theme_mod('page_banner_header')?>" alt="Banner Header"></a>

            <div class="my-3 p-4">
                <h3><?php the_title(); ?></h3>

                <div class="line-break"></div>

                <div class="container">
                        <?php 
                            the_content();
                        ?> 
                </div>
            </div>
            


            <div class="line-break"></div>

            <?php get_template_part('template-parts/content', 'subscribe'); ?>    

        </div>
    </div>

    <!-- Sidebar -->
    <?php get_template_part('template-parts/content', 'sidebar'); ?>

<?php get_footer(); ?>