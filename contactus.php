<!doctype html>
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><html lang="en" class="no-js"> <![endif]-->
<html lang="en">
<?php
include 'header.php';


?>


 <script>
 
  $(document).ready(function() {
    $('select').material_select();
  });
         
 </script>
<body>


<!--start wrapper-->
<section class="wrapper">
    <section class="page_head">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="page_title">
                        <h2>Contact Us</h2>
                    </div>
                    <nav id="breadcrumbs">
                        <ul>
                            <li><a href="index.html">Home</a>/</li>
                            <li>Contact Us</li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </section>

    <section class="content contact">
        <div class="container">

            <div class="row sub_content">
                <div class="col-lg-8 col-md-8 col-sm-8">
                    <div class="dividerHeading">
                        <h4><span>Contact Us</span></h4>
                    </div>
                    <form id="contactForm" action="addcontactdetails.php" novalidate="novalidate" method="post">
                        <div class="row">
                            <div class="form-group">
                                <div class="col-lg-6 ">
                                    <input type="text" id="name" name="name" class="form-control" maxlength="100" data-msg-required="Please enter your name." value="" placeholder="Your Name" required >
                                </div>
                                <div class="col-lg-6 ">
                                    <input type="email" id="email" name="email" class="form-control" maxlength="100" data-msg-email="Please enter a valid email address." data-msg-required="Please enter your email address." value="" placeholder="Your E-mail" required >
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group">
                                <div class="col-md-6">
                                    <input type="text" id="subject" name="subject" class="form-control" maxlength="100" data-msg-required="Please enter the subject." value="" placeholder="Subject" required>
                                </div>
								<div class="col-md-6">
                                    <input type="text" id="cno" name="cno" class="form-control" maxlength="100" data-msg-required="Please enter the Contact Number." value="" placeholder="Phone No." required>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group">
                                <div class="col-md-12">
                                    <textarea id="message" class="form-control" name="message" rows="10" cols="50" data-msg-required="Please enter your message." maxlength="5000" placeholder="Message" required></textarea>

                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <input type="submit" data-loading-text="Loading..." class="btn btn-default btn-lg" value="Send Message">
                            </div>
                        </div>
                    </form>
                </div>

                <div class="col-lg-4 col-md-4 col-sm-4">
                    <div class="sidebar">
                        <div class="widget_info">
                            <div class="dividerHeading">
                                <h4><span>Contact Info</span></h4>
                            </div>
                            <ul class="widget_info_contact">
                                <li><i class="fa fa-map-marker"></i> <p><strong>Address</strong>: VVNLive <br /> &nbsp; SF-60, 2nd Floor,Bakrol Square Apartment,<br />
								 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Nr. Bakrol Gate, Vallabh Vidyanagar -<br /> 
								 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;388120,Gujarat, India.<br /></p></li>
                                <li><i class="fa fa-user"></i> <p><strong>Phone</strong>: (+91) 7043131161</p></li>
                                <li><i class="fa fa-envelope"></i> <p><strong>Email</strong>: <a href="#">contact@vvnlive.co.in, &nbsp;&nbsp;inquiry@vvnlive.co.in</a></p></li>
                                <li><i class="fa fa-globe"></i> <p><strong>Web</strong>: <a href="#" data-placement="bottom" data-toggle="tooltip" title="www.example.com">www.vvnlive.com</a></p></li>
                            </ul>

                        </div>

                        <div class="widget_social">
                            <div class="dividerHeading">
                                <h4><span>Get Social</span></h4>
                            </div>
                            <ul class="widget_social">
                                <li><a class="fb" href="https://www.facebook.com/Scit.VvnLive" data-placement="bottom" data-toggle="tooltip" title="Facbook"><i class="fa fa-facebook"></i></a></li>
                                <li><a class="twtr" href="https://twitter.com/VVN_Live" data-placement="bottom" data-toggle="tooltip" title="Twitter"><i class="fa fa-twitter"></i></a></li>
                                <li><a class="gmail" href="#." data-placement="bottom" data-toggle="tooltip" title="Google"><i class="fa fa-google-plus"></i></a></li>
                                <li><a class="dribbble" href="#." data-placement="bottom" data-toggle="tooltip" title="Dribbble"><i class="fa fa-dribbble"></i></a></li>
                                <li><a class="skype" href="#." data-placement="bottom" data-toggle="tooltip" title="Skype"><i class="fa fa-skype"></i></a></li>
                                <li><a class="pinterest" href="#." data-placement="bottom" data-toggle="tooltip" title="Pinterest"><i class="fa fa-pinterest"></i></a></li>
                                <li><a class="instagram" href="https://www.instagram.com/vvnlive/" data-placement="bottom" data-toggle="tooltip" title="Instagram"><i class="fa fa-instagram"></i></a></li>
                                <li><a class="youtube" href="https://www.youtube.com/channel/UC7mqo1ACqQc9sNcWi3Uodlg" data-placement="bottom" data-toggle="tooltip" title="Youtube"><i class="fa fa-youtube"></i></a></li>
                                <li><a class="linkedin" href="#." data-placement="bottom" data-toggle="tooltip" title="Linkedin"><i class="fa fa-linkedin"></i></a></li>
                                <li><a class="flickrs" href="#." data-placement="bottom" data-toggle="tooltip" title="Flickr"><i class="fa fa-flickr"></i></a></li>
                                <li><a class="rss" href="#." data-placement="bottom" data-toggle="tooltip" title="RSS"><i class="fa fa-rss"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
</section>
<!--end wrapper-->


 <?php
 include 'footer.php';
 ?>
 </body>
</html>