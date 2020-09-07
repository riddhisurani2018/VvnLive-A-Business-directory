<?php
include('header.php');
if(isset($_SESSION['vendorregistered']))
{
	echo '<script>alert("Registered Successfully! Please Login with your Username")</script>';
	unset($_SESSION['vendorregistered']);
	echo "<script>$('#modal1').openModal();</script>";
	}
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
                        <div class="page_title" >
                            <h2>Our Services</h2>
                        </div>
						 <nav id="breadcrumbs">
                        <ul>
                            <li><a href="index.php">Home</a>/</li>
                            <li>Our Services</li>
                        </ul>
                    </nav>
                    </div>
                </div>
            </div>
        </section>
<br />
<section class="wrapper">
        <section class="page_head">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12">
                        <div class="page_title">
                            <h2>Online Ads</h2>
                        </div>
                    </div>
                </div>
            </div>
        </section>
	 <section class="content elements">
			<div class="container">
				<div class="row sub_content">
            <div class="col-lg-12 col-md-12 col-sm-12">
                <div class="table-responsive">
						<table class="table table-striped table-hover">
							<thead>
							  <tr>
								  <th>Ads Type</th>
								  <th colspan="8">Duration</th>
							  </tr>
							</thead>

							<tbody>
							  <tr>
								<td>
									<b>Size</b>
								</td>
								<td>
									<b>1 Day</b>
								</td>
								<td>
									<b>1 Week</b>
								</td>
								<td>
									<b>1 Month</b>
								</td>
								<td>
									<b>2 Months</b>
								</td>
								<td>
									<b>3 Months</b>
								</td>
								<td>
									<b>6 Months</b>
								</td>
								<td>
									<b>1 Year</b>
								</td>
								<td>
									<b>2 Years</b>
								</td>
							  </tr>
							  <?php 
								$adsql="select * from adspackagedetail";
								$adsquery=mysqli_query($con,$adsql);
								$i=0;
								while($row66=mysqli_fetch_array($adsquery))
								{	
							  ?>
							  <tr>
								<td><img src="images/ads/ads0<?php echo $i; $i=$i+1;?>.jpg" width="160px" height="100px"><br><?php echo $row66['width']." X ".$row66['height']."</br>".$row66['adsname']; ?></td>
								<td><?php echo $row66['adsprice']; ?></td>
								<td><?php echo $row66['1 Week']; ?></td>
								<td><?php echo $row66['1 Month']; ?></td>
								<td><?php echo $row66['2 Month']; ?></td>
								<td><?php echo $row66['3 Month']; ?></td>
								<td><?php echo $row66['6 Month']; ?></td>
								<td><?php echo $row66['1 Year']; ?></td>
								<td><?php echo $row66['2 Year']; ?></td>
							  </tr>
							  <?php
								}
							  ?>
							</tbody>
						</table>
                </div>
            </div>                </div>
            </div>
			
								<ul align="center" style="padding-bottom:  3%;">
									<li><a href="inquiry_online_ads.php" class="btn-lg btn-default">Buy</a></li>
								</ul>
								
        </section>
        <section class="page_head">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12">
                        <div class="page_title">
                            <h2>Online Discount Coupons</h2>
                        </div>
                    </div>
                </div>
            </div>
        </section>
<div class="grey_bg">
	 <section class="content elements">
			<div class="container">
				<div class="row sub_content">
            <div class="col-lg-12 col-md-12 col-sm-12">
                <div class="table-responsive">
						<table class="table table-striped table-hover">
							<thead>
							  <tr>
								  <th>Product Amount</th>
								  <th>Up to 1000</th>
								  <th>Up to 2000</th>
								  <th>Up to 3000</th>
								  <th>Up to 5000</th>
								  <th>Up to 10000</th>
								  <th>Up to 15000</th>
								  <th>Up to 20000</th>
								  <th>Up to 30000</th>
							  </tr>
							</thead>
							<tr>
								<td class="red-text">10 Coupon</td>
								<td>300</td>
								<td>500</td>
								<td>1000</td>
								<td>1500</td>
								<td>2000</td>
								<td>2500</td>
								<td>3000</td>
								<td>4000</td>
							</tr>
							<tr>
								<td class="red-text">20 Coupon</td>
								<td>600</td>
								<td>1000</td>
								<td>2000</td>
								<td>3000</td>
								<td>4000</td>
								<td>5000</td>
								<td>6000</td>
								<td>8000</td>
							</tr>
							<tr>
								<td class="red-text">25 Coupon</td>
								<td>750</td>
								<td>1250</td>
								<td>2500</td>
								<td>3750</td>
								<td>5000</td>
								<td>6250</td>
								<td>7500</td>
								<td>10000</td>
							</tr>
							<tr>
								<td class="red-text">30 Coupon</td>
								<td>900</td>
								<td>1500</td>
								<td>3000</td>
								<td>4500</td>
								<td>6000</td>
								<td>7500</td>
								<td>9000</td>
								<td>12000</td>
							</tr>
							<tr>
								<td class="red-text">35 Coupon</td>
								<td>1050</td>
								<td>1750</td>
								<td>3000</td>
								<td>5250</td>
								<td>7000</td>
								<td>8750</td>
								<td>10500</td>
								<td>14000</td>
							</tr>
							<tr>
								<td class="red-text">Fees/Coupon</td>
								<td>30</td>
								<td>50</td>
								<td>100</td>
								<td>150</td>
								<td>200</td>
								<td>250</td>
								<td>300</td>
								<td>400</td>
							</tr>
						</table>
                </div>
            </div>                </div>
            </div>
			
								<ul align="center" style="padding-bottom:  3%;">
									<li><a href="inquiry_coupon.php" class="btn-lg btn-default">Buy</a></li>
								</ul>
								
        </section></div>
		<section class="page_head">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12">
                        <div class="page_title">
                            <h2> Template Printing + Distribution</h2>
                        </div>
                    </div>
                </div>
            </div>
        </section>
	 <section class="content elements">
			<div class="container">
				<div class="row sub_content">
            <div class="col-lg-12 col-md-12 col-sm-12">
                <div class="table-responsive">
						<table class="table table-striped table-hover">
							<thead>
							  <tr>
								  <th></th>
								  <th colspan="2">A5</th>
								  <th colspan="2">A4</th>
								  <th colspan="2">A3</th>
							  </tr>
							</thead>

							<tbody>
							  <tr>
								<td>
									<b>Quantity</b>
								</td>
								<td>
									<b>1 Side</b>
								</td>
								<td>
									<b>2 Side</b>
								</td>
								<td>
									<b>1 Side</b>
								</td>
								<td>
									<b>2 Side</b>
								</td>
								<td>
									<b>1 Side</b>
								</td>
								<td>
									<b>2 Side</b>
								</td>
							  </tr>
							  <?php
								$query5="Select * from templateprinting";
								$result5=mysqli_query($con,$query5);
								while($row5=mysqli_fetch_array($result5))
								{
							  ?>
							  <tr>
								<td><?php echo $row5['quantity']; ?></td>
								<td><?php echo $row5['sidea51']." Rs"; ?></td>
								<td><?php echo $row5['sidea52']." Rs"; ?></td>
								<td><?php echo $row5['sidea41']." Rs"; ?></td>
								<td><?php echo $row5['sidea42']." Rs"; ?></td>
								<td><?php echo $row5['sidea31']." Rs"; ?></td>
								<td><?php echo $row5['sidea32']." Rs"; ?></td>
							  </tr>
							<?php 
								} 
							?>
							</tbody>
						</table>
                </div>
            </div>                </div>
            </div>
        
								<ul align="center" style="padding-bottom:  3%;">
									<li><a href="inquiry_template.php" class="btn-lg btn-default">Buy</a></li>
								</ul>
								
		</section>
		<section class="page_head">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12">
                        <div class="page_title">
                            <h2>Printed Rickshaw Banner</h2>
                        </div>
                    </div>
                </div>
            </div>
        </section>
<div class="grey_bg">
	 <section class="content elements">
			<div class="container">
				<div class="row sub_content">
            <div class="col-lg-12 col-md-12 col-sm-12">
                <div class="table-responsive">							<?php 
							$query3="Select * from rikshawbannersize";
							$result3=mysqli_query($con,$query3);
							while($row3=mysqli_fetch_array($result3))
							{
								$sizeid=$row3['size'];	
						?>
						<table class="table table-striped table-hover">
							<h3><thead>
								<tr>
									<th colspan="4"><div align="center"><?php echo "Size : ".$row3['sizename']." ft Vinayle"; ?></div></th> 
								</tr>
							</thead></h3>
						</table>
						<table class="table table-striped table-hover">
							<thead>
							  <tr>
								  <th>Quantity</th>
								  <th>Month-1</th>
								  <th>Month-2</th>
								  <th>Month-3</th>
							  </tr>
							</thead>

							<tbody>
							<?php
								$query4="Select * from rikshawbanner where size='$sizeid'";
								$result4=mysqli_query($con,$query4);
								while($row4=mysqli_fetch_array($result4))
								{	
							?>
								<tr>
									<td>
										<?php echo $row4['quantity']; ?>
									</td>
									<td>
										<?php echo $row4['month1']." Rs"; ?>
									</td>
									<td>
										<?php echo $row4['month2']." Rs"; ?>
									</td>
									<td>
										<?php echo $row4['month3']." Rs"; ?>
									</td>
								</tr>
							<?php
								}
							?>	
							</tbody>
						</table>
						<?php		
						}	
						?>
<br>
                </div>
            </div>


	</div> <!--./row-->
				            
			</div> <!--./div-->
										<ul align="center" style="padding-bottom:  3%;">
									<li><a href="inquiry_banner.php" class="btn-lg btn-default">Buy</i></a></li>
								</ul>
								
	</section></div>
	</section>
	
	
<?php
include('footer.php');
?>