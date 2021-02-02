        </div>
    <!-- Wrapper -->
    </div>
<!-- Container Fluid -->

<footer class="mt-3">
    <div class="footer-text text-white p-4">
            <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <h3 class="text-uppercase mt-4" >About <?php echo bloginfo('name'); ?></h3>
                    <p><?php echo get_bloginfo('description'); ?></p>
                </div>
                <div class="col-lg-4 footer-logo">
                    <a href="#"><img src="<?php echo get_theme_mod('footer_logo')?>"alt="Footer Logo"></a>
                </div>
            </div>
            </div>
        </div>
    </div>
    <?php get_template_part('template-parts/content', 'footernav'); ?>
</footer>

<?php wp_footer(); ?>

<!-- jQuery and JS bundle w/ Popper.js -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
<script src="https://kit.fontawesome.com/3a81a76e4a.js" crossorigin="anonymous"></script>
</body>
</html>