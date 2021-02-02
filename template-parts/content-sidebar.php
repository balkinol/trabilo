<div class="col-lg-3">

        <?php 
            get_search_form();
        ?>

        <a href="#" target="_blank">
            <img src="<?php echo get_theme_mod('sidebar_banner_one')?>"  class="banner-1">
        </a>

        <div class="my-4">
            <div class="related-post">

                <?php if(is_active_sidebar('sidebar')): ?>
                    <?php dynamic_sidebar('sidebar'); ?>
                <?php endif; ?>

            </div>
        </div>

</div>