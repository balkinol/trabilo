<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <?php
                wp_nav_menu( array(
                    'theme_location'  => 'footer',
                    'depth'           => 2, // 1 = no dropdowns, 2 = with dropdowns.
                    'container'       => 'div',
                    'container_class' => 'collapse navbar-collapse',
                    'container_id'    => 'footerNav',
                    'menu_class'      => 'navbar-nav mr-auto',
                    'fallback_cb'     => 'WP_Bootstrap_Navwalker::fallback',
                    'walker'          => new WP_Bootstrap_Navwalker(),
                ) );
            ?>
        <div class="collapse navbar-collapse" id="footerNav">
          <ul class="navbar-nav ml-auto nav-icon">
              <li class="nav-item">
                  <a href="#" class="nav-link"><img src="<?php echo get_theme_mod('social_icon_one')?>" alt="facebook"></a>
              </li>
              <li class="nav-item">
                  <a href="#" class="nav-link"><img src="<?php echo get_theme_mod('social_icon_two')?>" alt="instagram"></a>
              </li>
          </ul>
        </div>
</nav>