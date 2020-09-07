<?php
include('header.php');


if(isset($_SESSION['categorycoupon']))
{
	unset($_SESSION['categorycoupon']);
}
if(isset($_SESSION['businesscoupon']))
{
	unset($_SESSION['businesscoupon']);
}

?>
<script>
$(document).ready(function() {
    $('select').material_select();
  });

</script>


<section class="wrapper">
        <section class="page_head">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12">
                        <div class="page_title">
                            <h2>Categories</h2>
                        </div>
                    </div>
                </div>
            </div>
        </section>
		<section >
				<div class="grey_bg">
		<?php
//include('include_db.php');
  $sql="SELECT * from productcategorydetail order by NAME  LIMIT 12";
   $result=mysqli_query($con,$sql);
?>
			
			<div class="container"  >
				<div class="row" style="margin-top: 3%;" >
				
					<!--begin isotope -->
					<div class="col-lg-12 col-md-12 col-sm-12 wow bounceInUp animated" data-wow-offset="50" style="visibility: visible; animation-name: bounceInUp;" >
						<!--begin portfolio_list -->   
						<ul id="list" class="portfolio_list clearfix ">
							<!--begin List Item -->
							 <?php
		while($row = mysqli_fetch_array($result))
        {
			$cid=$row['ID'];
         ?>
							<li class="list_item col-lg-2 col-md-2 col-sm-2 branding ">
                                <div style="border-style: groove; border-color: #727cb6; background-color: white;" class="recent-item box thumbnail shadow-depth-1">
                                  <figure class="touching ">
                                        <img src="images/<?php echo $row['IMAGE'];?>" class="img" alt=""/>
                                        <div class="option inner">
                                            <div>
                                                <a href="categorypage.php?categoryid=<?php echo $cid; ?>" style="color: white; font-size: 120%;">
												<?php $cname=$row['NAME']; echo $cname;?>
                                                </a>
                                            </div>
                                        </div>
                                    </figure>
                                </div>
							</li>
							<!--end List Item -->
							
<?php   }  ?>
						
			<li class="list_item col-lg-4 col-md-4 col-sm-4 branding">
			</li>
			<li class="list_item col-lg-4 col-md-4 col-sm-4 ">
			<div align="center" class="row">
                <!-- Standard button -->
                <a href="category.php"><button class="btn btn-default btn-lg btn-block" type="button"> <i class="fa fa-search"></i> View More</button></a>
            </div></li>
						</ul> <!--end portfolio_list -->
						              
					</div>
					<!--end isotope -->
				            

				</div> <!--./row-->


			</div> <!--./div-->
			</div>
		</section>
		
	</section>
<section class="wrapper">
	 <section class="page_head">
	  
            <div class="container">
                <div class="row" >
                    <div class="col-lg-12 col-md-12 col-sm-12">
                        <div class="page_title">
                            <h2>Online Packages</h2>
                        </div>
                    </div>
                </div>
            </div>
		 
        </section>
<div class="grey_bg">
		<section class="content">
		
			<div class="container">
				<div class="row " style="margin-top: 3%;"> 
					<div class="pricingBlock theme-color-pt">
						<!--  DARK-BLUE PRICE ITEM  -->
						<div class="col-lg-4 col-md-4 col-sm-4 wow bounceInLeft">
							<div class="pricingTable"><!-- BODY BOX-->
								<div class="pricingTable-header"><!-- HEADER BOX-->
									<span class="heading">Join With Us</span>
									<span class="price-value"><span>2 </span><span class="mo"><i class="fa fa-inr"></i> / Day</span></span>
									<span class="heading"> Promote Your Business</span>
									</div><!--/ BODY BOX-->

								<div class="pricingContent">
									<ul>
										<li><strong><i class="fa fa-check"></i></strong> Post Ads & Coupons</li>
										<li><strong><i class="fa fa-check"></i></strong> Post Business Details</li>
										<li><strong><i class="fa fa-check"></i></strong> Post Product Details</li>
									</ul>
								</div><!-- /  CONTENT BOX-->
								<form action="inquiry_join.php" method="Post">
								<div class="pricingTable-sign-up"><!-- BUTTON BOX-->
									<select class="form-control" name="plan" id="join">
									
										<option> Select Duration</option>
										<option> 60 Rs @ 1 Month</option>
										<option>180 Rs @ 3 Months</option>
										<option>340 Rs @ 6 Months</option>
										<option>500 Rs @ 1 Year</option>
									</select>
								</div><!-- BUTTON BOX-->
								<div class="pricingContent">
								<ul>
									<li><button type="submit" name="submit" id="ljoin" class="btn-lg btn-default">Buy</i></button></li>
								</ul>
								</div>
								</form>
							</div><!--/ BODY BOX-->
						</div>
						<!--  DARK-BLUE PRICE ITEM  -->

						<!--  DARK-BLUE PRICE ITEM  -->
						<div class="col-lg-4 col-md-4 col-sm-4 wow bounceInDown">
							<div class="pricingTable"><!-- BODY BOX-->
								<div class="pricingTable-header"><!-- HEADER BOX-->

									<span class="heading">Social Marketing </span>
									<span class="price-value"><span> 1000 </span><span class="mo">People @ 400  <i class="fa fa-inr"></i></span></span>
									<span class="heading">Promote Your Business</span>

								</div><!--/ BODY BOX-->

								<div class="pricingContent">
									<ul>
										<li><strong><i class="fa fa-check"></i></strong> Whatsapp & Hike Sharing</li>
										<li><strong><i class="fa fa-check"></i></strong> Email Sharing</li>
										<li><strong><i class="fa fa-check"></i></strong> Facebook & Twitter Sharing</li>
									</ul>
								</div><!-- /  CONTENT BOX-->
								<form action="inquiry_social.php" method="Post">
								<div class="pricingTable-sign-up"><!-- BUTTON BOX-->
									<select class="form-control" name="plan">
										<option> Select Marketing Platform</option>
										<option>Whatsapp</option>
										<option>Twitter</option>
										<option>Facebook</option>
										<option>Email</option>
										<option>Hike</option>
									</select>
								</div><!-- BUTTON BOX-->
								<div class="pricingContent">
								<ul>
									<li><button type="submit" name="submit" id="ljoin" class="btn-lg btn-default">Buy</button></li>
								</ul>
								</div>
								</form>
								</div><!--/ BODY BOX-->
						</div>
						<!--  DARK-BLUE PRICE ITEM  -->

						<!--  DARK-BLUE PRICE ITEM  -->
						<div class="col-lg-4 col-md-4 col-sm-4 wow bounceInRight">
							<div class="pricingTable"><!-- BODY BOX-->
								<div class="pricingTable-header"><!-- HEADER BOX-->

									<span class="heading">Coupons & Deals</span>
									<span class="price-value"><span>30 </span><span class="mo"><i class="fa fa-inr"></i> / Coupon</span></span>
									<span class="heading">Share Coupons of your Business</span>

								</div><!--/ BODY BOX-->

								<div class="pricingContent">
									<ul>
										<li><strong><i class="fa fa-check"></i></strong> Share Coupon Code</li>
										<li><strong><i class="fa fa-check"></i></strong> Share Best Deals</li>
										<li><strong><i class="fa fa-check"></i></strong> Share Discounts & Offers</li>
									</ul>
								</div><!-- /  CONTENT BOX-->
								<form action="inquiry_coupon.php" method="Post">
								<div class="pricingTable-sign-up"><!-- BUTTON BOX-->
									<select class="form-control" name="plan">
										<option> Select Coupon Plan</option>
										<option>30 Rs @ 1 Coupon</option>
									</select>
								</div><!-- BUTTON BOX-->
								<div class="pricingContent">
								<ul>
									<li><button type="submit" name="submit" id="ljoin" class="btn-lg btn-default">Buy</button></li>
								</ul>
								</div>
								</form>
							</div><!--/ BODY BOX-->
						</div>
						<!--  DARK-BLUE PRICE ITEM  -->
					</div>
				</div>
				</div>

</section></div>
</section>

<section class="wrapper">
<section>
    <div class="grey_bg">
        <div class="container">
			 <div class="row sub_content">
				<div class="col-sm-4 wow bounceInLeft">
					<div style="background: #FFF;" class="serviceBox_4">
						<div class="service-icon">
							<i class="fa fa-suitcase"></i>
						</div>
						<div class="service-content"  >

							<h3>Promote Your Business</h3>
							<p>We provide features through which people can easliy explore best business sellers in city. Our Aim is to provide efficient platform through which vendors can promote their business by advertising.</p>
						</div>
						<div class="read">
							<a href="vendordashboard/login.php" class="btn btn-default">Register Now</a>
						</div>
					</div>
				</div>
				<div class="col-sm-4 wow bounceInDown">
					<div style="background: #FFF;" class="serviceBox_4">
						<div class="service-icon">
							<i class="fa fa-tag"></i>
						</div>
						<div class="service-content">
							<h3>Post Your Ads</h3>
							<p>We provide the platform for promoting of business through advertising. Post your Ads on VVNLIVE and promote your business.</p>
						</div><br>
						<div class="read">
							<a href="vendordashboard/login.php" class="btn btn-default">Advertise Now</a>
						</div>
					</div>
				</div>
				<div class="col-sm-4 wow bounceInRight">
					<div style="background: #FFF;" class="serviceBox_4">
						<div class="service-icon">
							<i class="fa fa-scissors"></i>
						</div>
						<div class="service-content">
							<h3>Get Hot Deals and Coupons</h3>
							<p>People can save their money by getting free coupons online. We provide Comprehensive Listing of Coupons, Deals, Discounts from the Best Stores of the City.</p>
						</div><br>
						<div class="read">
							<a href="couponspage.php" class="btn btn-default">Happy Savings</a>
						</div>
					</div>
				</div>
			</div>
        </div>
    </div>
</section>
</section>



<section class="wrapper">
        <section class="page_head">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12">
                        <div class="page_title">
                            <h2>Our Services</h2>
                        </div>
                    </div>
                </div>
            </div>
        </section>
		<section>
		<div class="grey_bg">
        <div class="container">
			 <div class="row " style="margin-bottom: 3%;">
				<div class="col-lg-12 col-md-12 col-sm-12">
					<div style="background: #FFF; box-shadow: 0 1px 1px;padding-left:  3%;padding-right:  3%;" class="serviceBox_4  widget-shadow ">
							<div class="row ">
							<div class="col-lg-3 col-md-3 col-sm-3">
								<div class=" shadow-depth-1">
								<a href="ourservices.php"><button class="btn btn-default btn-lg btn-block" type="button">Online Advertisement</button></a>
								</div>
							</div>
							<div class="col-lg-3 col-md-3 col-sm-3">
								<div class="shadow-depth-1">
								<a href="ourservices.php"><button class="btn btn-default btn-lg btn-block" type="button">Online Coupons</button></a>
								</div>
							</div>
							<div class="col-lg-3 col-md-3 col-sm-3">
								<div class=" shadow-depth-1">
								<a href="ourservices.php"><button class="btn btn-default btn-lg btn-block" type="button">Templates</button></a>
								</div>
							</div>	
							<div class="col-lg-3 col-md-3 col-sm-3">
								<div class=" shadow-depth-1" >
								<a href="ourservices.php"><button class="btn btn-default btn-lg btn-block" type="button">Rikshaw Banners</button></a>
								</div>
							</div>
						
					</div>
				</div>
				
				
			</div>
        </div>
    </div>
</div>
<section>
</section>




<!-- The Modal -->
<div id="myModal" class="mymodal" style="z-index: 10000;">

  <!-- Modal content -->
  <div class="mymodal-content">
   <div class="row" style="margin-right: 2%;">
      <span class="close">&times;</span>
	  </div>
    <div class="mymodal-body" style="margin-bottom: 2%;">
      <div class="container" style="width: 100%;padding-left: 0%; padding-right: 0%; ">
	  
	  <div class="col-lg-4 col-md-4 col-sm-4" style="border-color:#a8a4b9; border-style: solid;border-radius: 1em; padding-left:  3%;padding-right:  3%;padding-top: 1%; width: 48%;">
	  <section class="wrapper" style="margin-top:  4%;">
        <section class="page_head">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12">
                        <div class="page_title">
                            <h2>V V N Live</h2>
                        </div>
                    </div>
                </div>
            </div>
        </section>
		</section >
		<br />
		<div class="pricingTable" ><!-- BODY BOX-->
			
			<div class="pricingContent">
			<ul>
			<li style="align-content: left;"><strong> Join With Us</strong></li>
			<li><strong> Social Media Marketing</strong></li>
			<li><strong> Coupans & Deals</strong></li>
			<li><strong> Our Services : </strong></li>
			<li><i> Online Advertisement</i></li>
			<li><i> Online Coupons</i></li>
			<li><i> Templates</i></li>
			<li><i> Rikshaw Banners</i></li>
			</ul>
			</div><!-- /  CONTENT BOX-->
		
		</div>				
	  </div>
	  <div class="col-lg-4 col-md-4 col-sm-4" style="width: 4%;">
	  </div>
	  <div class="col-lg-4 col-md-4 col-sm-4" style="border-color:#a8a4b9;width: 48%; border-style: solid;border-radius: 1em; padding-bottom: 7.57%;padding-left:  3%;padding-right:  3%;padding-top: 3%;">
	 <h1 ><strong style="color: red;">Home</strong><strong style="color: black;">care</strong></h1>
	 <h4>Homecare is the ultimate solution for your problems.<br />It addresses various services required in the day to day life.<br />
	 Now you don't have to go look for services;Services come to you on one click!.</h4>
	 
	 
	 <ul style="list-style-type: disc; margin-left: 4%;">
	  <li><h2>Our Services: </h2>
	  <div class="col-lg-4 col-md-4 col-sm-4">
	  <ul style="list-style-type: square;">
			<li>Plumbing</li>
			<li>Carpentry</li>
			<li>Laundry</li>
			<li>Medical Care</li>
			</ul>
			
		</div>
		 <div class="col-lg-4 col-md-4 col-sm-4">
	  <ul style="list-style-type: square; ">
			<li>Beauty</li>
			<li>Accommodation</li>
			<li>Automobile</li>
			<li>Business Marketing</li>
			</ul>
			
		</div>
		 <div class="col-lg-4 col-md-4 col-sm-4">
	  <ul style="list-style-type: square;">
			<li>Coaching Classes</li>
			<li>Deep Cleaning</li>
			<li>House Maid</li>
			<li>Fitness & Sports</li>
			</ul>
			
		</div>
		</li>
		
		</ul>
		
		<i style="margin-left:  70%;" >and many more...</i>
		<div align="center" class="row" style="margin-top: 12%;">
                <!-- Standard button -->
                <a href="http://homecare.vvnlive.co.in"><button class="btn btn-default btn-lg " type="button">Visit Homecare</button></a>
            </div>
		
	  </div>
	  
	  </div>
    </div>
   
  </div>

</div>

<script>
// Get the modal
var modal = document.getElementById('myModal');

// Get the button that opens the modal


// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks the button, open the modal 


// When the user clicks on <span> (x), close the modal
span.onclick = function() {
    modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
};
window.onkeydown = function( event ) {
    if ( event.keyCode == 27 ) {
       modal.style.display = "none";
    }
};
</script>







<?php
include('footer.php');
?>