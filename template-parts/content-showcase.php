 <!-- Content Showcase -->
 <div class="col-lg-9">
      <div id="carouselExampleIndicators" class="carousel slide mx-1" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img class="d-block w-100" src="<?php echo get_theme_mod('carousel_one')?>" alt="First slide">
          </div>
          <div class="carousel-item">
            <img class="d-block w-100" src="<?php echo get_theme_mod('carousel_two')?>" alt="Second slide">
          </div>
          <div class="carousel-item">
            <img class="d-block w-100" src="<?php echo get_theme_mod('carousel_three')?>" alt="Third slide">
          </div>
          </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
            </a>
        </div>
        <div class="row mx-0">
          <div class="col-lg-6 p-1">
              <a href="#">
                <img src="<?php echo get_theme_mod('sponsored_one')?>" alt="" class="w-100">
              </a>
          </div>
          <div class="col-lg-6 p-1">
              <a href="#">
                <img src="<?php echo get_theme_mod('sponsored_two')?>" alt="" class="w-100">
              </a>
          </div>
        </div>
    </div>