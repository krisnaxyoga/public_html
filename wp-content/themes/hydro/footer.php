<?php global $soms_redux; ?>
<footer class="page-footer bg-red-dark">
    <div class="container">
        <div class="row">
            <div class="col-lg-4">
                <div class="footer-widget widget-about">
                    <a href="<?php echo home_url('/'); ?>"><img class="footer-logo fotowid" src="<?php echo $soms_redux['logofooter']['url']; ?>" alt="footer logo"></a>
                    <p> <?php echo $soms_redux['xxaa121221122222222222222222222222']; ?></p>
                    <ul class="social-icons">
                        <li>
                            <a href="https://www.facebook.com/refeed.id/" target="_blank" rel="noopener" style="color: #ffff;">
                                <i class="fa fa-facebook-f"></i>
                            </a>
                        </li>
                        <li>
                            <a href="https://www.instagram.com/refeed_id/" target="_blank" rel="noopener" style="colo:#ffff;">
                                <i class="fa fa-instagram"></i>
                            </a>
                        </li>
                    </ul>
                    <!-- End of .social-icons -->
                    <p class="copywrite-txt">© <?= date('Y') ?> Resellr.id. All Rights Reserved.</p>
                </div>
            </div>

            <div class="col-lg-3">
                <div class="footer-widget">
                    <ul class="footer-nav dynamic-nav">
                         <?php 
                            wp_nav_menu(array(
                                'theme_location' => 'footer-menu',
                                'menu_class' => 'footer-nav dynamic-nav'
                            ));
                        ?> 
                    </ul>
                </div>
            </div>
            <!-- End of .col-lg-2 -->

            <div class="col-lg-3">
                <div class="footer-widget">
                <ul class="footer-nav dynamic-nav">
                         <?php 
                            wp_nav_menu(array(
                                'theme_location' => 'footer-2',
                                'menu_class' => 'footer-nav dynamic-nav'
                            ));
                        ?> 
                    </ul>
                </div>
            </div>
            <!-- End of .col-lg-2 -->

            <div class="col-lg-2">
                <div class="footer-widget">
                    <h5 class="footer-nav-title mb-1">Managed By</h5>
                    <img src="<?php echo $soms_redux['hkommmmaaa']['url']; ?>" alt="" class="">
                    <h5 class="footer-nav-title mb-1 mt-5">Supported By</h5>
                    <img src="<?php echo $soms_redux['hj0ay9zmzppqpqpqpqpqpqpq021333333ioasdauda']['url']; ?>" alt="" class="">
                </div>
            </div>
            <!-- End of .col-lg-2 -->
        </div>
        <!-- End of .row -->
    </div>
    <!-- End of .container -->
</footer>
</div>
<script src="js/bootstrap.bundle.min.js"></script>
<script type="text/javascript">
    var nav = document.querySelector('#header');
    var a = document.querySelector('#menu');

    // window.addEventListener('scroll', function () {
    //     if (window.pageYOffset > 100) {
    //         nav.classList.add('bg-light', 'shadow');
    //         a.classList.add('text-light');
    //     } else {
    //         nav.classList.remove('bg-light', 'shadow');
    //         a.classList.remove('text-light');
    //     }
    // });

    window.addEventListener('scroll', function () {
        if (window.pageYOffset > 100) {
            nav.classList.add('bg-white', 'shadow');
        } else {
            nav.classList.remove('bg-white', 'shadow');
        }
    });
</script>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
<script src="assets/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

<!-- <script src="assets/dist/js/bootstrap.bundle.min.js"></script> -->
<?php wp_footer();?>

<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script type="text/javascript">
    $('.owl-one').owlCarousel({
        items:5,
        loop:true,
        margin:10,
        autoplay:true,
        autoplayTimeout:3000,
        autoplayHoverPause:true,
        responsiveClass:true,
        responsive:{
            0:{
                items:1,
                nav:true
            },
            600:{
                items:3,
                nav:false
            },
            1000:{
                items:5,
                nav:true,
                loop:false
            }
        }
    });

    $('.owl-two').owlCarousel({
        items:3,
        loop:true,
        margin:10,
        autoplay:true,
        autoplayTimeout:3000,
        autoplayHoverPause:true,
        responsiveClass:true,
        responsive:{
            0:{
                items:1,
                nav:true
            },
            600:{
                items:2,
                nav:false
            },
            1000:{
                items:3,
                nav:true,
            }
        }
    });

</script>
</body>
</html>