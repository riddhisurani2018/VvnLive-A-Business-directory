    <!--start footer-->
   

   <footer class="footer">
        <div class="container">
            <div class="row">
                <div class="col-sm-6 col-md-3 col-lg-3">
                    <div class="widget_title">
                        <h4><span>About VVNLive</span></h4>
                    </div>
                    <div class="widget_content">
 
                        <ul class="contact-details-alt">
                            <li><i class="fa fa-map-marker"></i> <p><strong>Address</strong>: BitExcellent Pvt. Ltd.,<br /> 
								SF-60, 2nd Floor,Bakrol Square<br />
								Apartment,Nr. Bakrol Gate,<br />
								Vallabh Vidyanagar - 388120,<br />
								Anand, Gujarat,<br />
								India.</p></li>
                            <li><i class="fa fa-user"></i> <p><strong>Phone</strong>:+91 7043131161 </p></li>
                            <li><i class="fa fa-envelope"></i> <p><strong>Email</strong>: <a href="#">contact@vvnlive.co.in</a></p></li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-6 col-md-3 col-lg-3">
                    <div class="widget_title">
                        <h4><span>Help</span></h4>
                    </div>
                    <div class="widget_content">
                       <ul class="links">
                  <li><a class="blue-text accent-3" href="contactus.php">Contact Us</a></li>
                  <li><a class="blue-text accent-3" href="aboutus.php">About Us</a></li>
                  <li><a class="blue-text accent-3" href="careers.php">Careers</a></li>
                  <li><a class="blue-text accent-3" href="termsofuse.php">Terms Of Use</a></li>
                  <li><a class="blue-text accent-3" href="privacy.php">Privacy And Policy</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-6 col-md-3 col-lg-3">
                    <div class="widget_title">
                        <h4><span>Links</span></h4>
                    </div>
                    <div class="widget_content">
                        <ul class="links">
                  <li><a class="blue-text accent-3" href="index.php">Home</a></li>
                  <li><a class="blue-text accent-3" href=" <?php 
						if(isset($_SESSION['categorycoupon']))
						{
							unset($_SESSION['categorycoupon']);
						}
						if(isset($_SESSION['businesscoupon']))
						{
							unset($_SESSION['businesscoupon']);
						}

					  if(isset($_SESSION['couponlogin']))
					  {
						echo 'couponspage.php';  
					  }
					  else{
						  echo 'couponlogin.php';
					  }
					  ?>">Coupons</a></li>
								  <li><a class="blue-text accent-3" href="<?php 
						if(isset($_SESSION['categorycoupon']))
						{
							unset($_SESSION['categorycoupon']);
						}
						if(isset($_SESSION['businesscoupon']))
						{
							unset($_SESSION['businesscoupon']);
						}

					  if(isset($_SESSION['couponlogin']))
					  {
						echo 'localoffers.php';  
					  }
					  else{
						  echo 'couponlogin.php';
					  }
					  ?>">Local Offers</a></li>
				   <li><a class="blue-text accent-3" href="faq.php">FAQ</a></li>
				   <li><a class="blue-text accent-3" href="">Site map</a></li>
                        </ul>
                    </div>
                    <div class="widget_content">
                        <div class="tweet_go"></div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-3 col-lg-3">
                    <div class="widget_title">
                        <h4><span>Subscribe</span></h4>
                            <div>
						<form action="subscribe2.php" method="post">
						<input type="text" name="semail" class="form-control"  placeholder="Email Id" autocomplete="off">
						<input type="text" name="smobile" class="form-control" placeholder="Mobile No." autocomplete="off">
                                <input type="submit" data-loading-text="Loading..." class="btn btn-default btn-sm" value="Subscribe"></form>
                            </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!--end footer-->

    <section class="footer_bottom">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <p class="copyright">&copy; Copyright 2017 VVNLive | Powered by  <a href="http://www.sourcecodeinfotech.co.in/">Source Code Info Tech</a></p>
                </div>

                <div class="col-sm-6 ">
                    <div class="footer_social">
                        <ul class="footbot_social">
                            <li><a href="https://twitter.com/VVN_Live" data-placement="top" data-toggle="tooltip" title="Twitter" class="twtr"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="https://www.facebook.com/Scit.VvnLive" data-placement="top" data-toggle="tooltip" title="Facebook" class="fb"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="https://www.youtube.com/channel/UC7mqo1ACqQc9sNcWi3Uodlg" class="dribbble"><i class="fa fa-youtube-play"></i></a></li>
                            <li><a href="https://www.instagram.com/vvnlive/" data-placement="top" data-toggle="tooltip" title="Instagram" class="rss"><i class="fa fa-instagram"></i></a></li>
                            <li><a href="https://plus.google.com/108977162522271156240" data-placement="top" data-toggle="tooltip" title="Google" class="rss"><i class="fa fa-google-plus"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script type="text/javascript" src="js/jquery-1.10.2.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.easing.1.3.js"></script>
    <script src="js/retina-1.1.0.min.js"></script>
    <script type="text/javascript" src="js/jquery.cookie.js"></script> <!-- jQuery cookie -->
    <script type="text/javascript" src="js/styleswitch.js"></script> <!-- Style Colors Switcher -->
    <script src="js/jquery.fractionslider.js" type="text/javascript" charset="utf-8"></script>
    <script type="text/javascript" src="js/jquery.smartmenus.min.js"></script>
    <script type="text/javascript" src="js/jquery.smartmenus.bootstrap.min.js"></script>
    <script type="text/javascript" src="js/owl.carousel.min.js"></script>
    <script type="text/javascript" src="js/jflickrfeed.js"></script>
    <script type="text/javascript" src="js/jquery.magnific-popup.min.js"></script>
    <script type="text/javascript" src="js/jquery.isotope.min.js"></script>
    <script type="text/javascript" src="js/jquery.easypiechart.min.js"></script>
    <script type="text/javascript" src="js/swipe.js"></script>
    <script type="text/javascript" src="js/jquery-hoverdirection.min.js"></script>
    <script type="text/javascript" src="js/jquery.matchHeight-min.js"></script>
    <script type="text/javascript" src="js/jquery-scrolltofixed-min.js"></script>

    <script src="js/main.js"></script>

    <!-- Start Style Switcher -->
    <!-- End Style Switcher -->

        <script>
            /*Portfolio*/
            (function($) {
                "use strict";
                var $container = $('.portfolio'),
                        $items = $container.find('.portfolio-item'),
                        portfolioLayout = 'fitRows';

                if( $container.hasClass('portfolio-centered') ) {
                    portfolioLayout = 'masonry';
                }

                $container.isotope({
                    filter: '*',
                    animationEngine: 'best-available',
                    layoutMode: portfolioLayout,
                    animationOptions: {
                        duration: 750,
                        easing: 'linear',
                        queue: false
                    },
                    masonry: {
                    }
                }, refreshWaypoints());

                function refreshWaypoints() {
                    setTimeout(function() {
                    }, 1000);
                }

                $('ul#filter li').on('click', function() {
                    var selector = $(this).attr('data-filter');
                    $container.isotope({ filter: selector }, refreshWaypoints());
                    $('ul#filter li').removeClass('selected');
                    $(this).addClass('selected');
                    return false;
                });

                function getColumnNumber() {
                    var winWidth = $(window).width(),
                            columnNumber = 1;

                    if (winWidth > 1200) {
                        columnNumber = 5;
                    } else if (winWidth > 950) {
                        columnNumber = 4;
                    } else if (winWidth > 600) {
                        columnNumber = 3;
                    } else if (winWidth > 400) {
                        columnNumber = 2;
                    } else if (winWidth > 250) {
                        columnNumber = 1;
                    }
                    return columnNumber;
                }

                function setColumns() {
                    var winWidth = $(window).width(),
                            columnNumber = getColumnNumber(),
                            itemWidth = Math.floor(winWidth / columnNumber);

                    $container.find('.portfolio-item').each(function() {
                        $(this).css( {
                            width : itemWidth + 'px'
                        });
                    });
                }

                function setPortfolio() {
                    setColumns();
                    $container.isotope('reLayout');
                }

                $container.imagesLoaded(function () {
                    setPortfolio();
                });

                $(window).on('resize', function () {
                    setPortfolio();
                });
            })(jQuery);
        </script>


    <!-- WARNING: Wow.js doesn't work in IE 9 or less -->
    <!--[if gte IE 9 | !IE ]><!-->
    <script type="text/javascript" src="js/wow.min.js"></script>
    <script>
        // WOW Animation
        new WOW().init();
    </script>
    <!--[endif]-->

</body>
</html>