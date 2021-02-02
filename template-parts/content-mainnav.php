<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="/"><img src="<?php echo get_theme_mod('header_navbar_brand')?>" alt="Logo"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#mainNav" aria-controls="mainNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        
        <?php
                wp_nav_menu( array(
                    'theme_location'  => 'primary',
                    'depth'           => 2, // 1 = no dropdowns, 2 = with dropdowns.
                    'container'       => 'div',
                    'container_class' => 'collapse navbar-collapse',
                    'container_id'    => 'mainNav',
                    'menu_class'      => 'navbar-nav mr-auto',
                    'fallback_cb'     => 'WP_Bootstrap_Navwalker::fallback',
                    'walker'          => new WP_Bootstrap_Navwalker(),
                ) );
            ?>
        <div class="collapse navbar-collapse" id="mainNav">
            <div class="line-break-2"></div>
          <ul class="navbar-nav ml-auto nav-icon">
              <li class="nav-item">
                  <a href="#" class="nav-link"><img src="<?php echo get_theme_mod('social_icon_one')?>" alt="facebook"></a>
              </li>
              <li class="nav-item">
                  <a href="#" class="nav-link"><img src="<?php echo get_theme_mod('social_icon_two')?>" alt="instagram"></a>
              </li>
          </ul>
          <div class="line-break-3"></div>
        </div>
    </nav>