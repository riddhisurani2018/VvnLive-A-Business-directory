<?php 
include 'headercoupon.php';
if(isset($_SESSION['couponlogin']))
{

?>
<section class="wrapper">
<section class="page_head">
	<div class="container">
		<div class="row">
			<div class="col-lg-12 col-md-12 col-sm-12">
				<div class="page_title">
					<h2>Coupons</h2>
				</div>
				<nav id="breadcrumbs">
					<ul>
						<li><a href="index.php">Home</a>/</li>
						<li>Coupons</li>
					</ul>
				</nav>
			</div>
		</div>
	</div>
</section>
        <div class="container">
            <div class="row super_sub_content">
                <div class="col-md-6 col-sm-6"  style="margin-top: 4%;">
				 <div class="serviceBox_2 purple shadow-depth-1 box1">
				<a href="category2.php">
                   
						
					  <div class="service-icon">
                           <i class="fa fa-rocket"></i>
                        </div>
					
                        <div class="service-content">
                            <h3>Local Offers</h3>
                        </div>
						
                   
				</a>
				  </div>
                </div>
                <div class="col-md-6 col-sm-6" style="margin-top: 4%;">
				<div class="serviceBox_2 green shadow-depth-1 box1">
				<a href="http://shop.indiadeal.co.in">
                    
						
					   <div class="service-icon">
                            <i class="fa fa-globe"></i>
                        </div>
						
                        <div class="service-content">
                            <h3>Online Offers</h3>
						</div>
						
                    
				</a>
				</div>
                </div>
            </div>
        </div>
		</section>
<?php include 'footer.php';?>
</footer>
</html>
<?php
}
else
{
	echo "<script type='text/javascript'> window.location='couponlogin.php'</script>";
	
}
?>