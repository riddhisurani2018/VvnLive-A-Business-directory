<?php include 'headercoupon.php';
if(isset($_SESSION['couponlogin']))
{
	$semail=$_SESSION['email'];
?>

<!doctype html>
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><html lang="en" class="no-js"> <![endif]-->
<?php

							$sql1 = "SELECT * from businessdetail "; 
							$rs_result = mysqli_query($con,$sql1); //run the query
							$total_records = mysqli_num_rows($rs_result); 
							$sql2 = "SELECT * from coupondetail "; 
							$rs_result1 = mysqli_query($con,$sql2); //run the query
							$total_records1 = mysqli_num_rows($rs_result1); 		
	
?>
<style>
.disabled {
        pointer-events: none;
        cursor: default;
        opacity: 0.6;
		
    }

</style>
<script>
  $(document).ready(function(){
      $('.parallax').parallax();
    });
</script>


	<!--start wrapper-->
	<section class="wrapper">
		<section class="page_head">
			<div class="container">
				<div class="row">
					<div class="col-lg-12 col-md-12 col-sm-12">
						<div class="page_title">
							<h2>Local Offers</h2>

						</div>

						<nav id="breadcrumbs">
							
							<ul>
								<li><a href="index.php">Home</a>/</li>
								<li><a href="couponspage.php">Coupans</a>/</li>
								<li><a href="category2.php">Category</a>/</li>
								<li>Local Offers</li>
							</ul>
						</nav>
					</div>
				</div>
			</div>
		</section>

		<section >
			<div class="container">
				<div class="row">
					<div class="col-md-12 col-lg-12 col-sm-12 ">
						<div class="dividerHeading" style="margin-left: 0.5%">
							<h4><span>Stores</span></h4>
						</div>
					</div>
				<!--begin isotope -->
					<div class="col-lg-12" >
						<!--begin portfolio filter -->
						<?php
							$num_rec_per_page=8;
							if (isset($_GET["page"]))
							{
								$page  = $_GET["page"];
							}
							else
							{ 
								$page=1;
							} 
							$start_from = ($page-1) * $num_rec_per_page;
							$cid=$_GET['categoryid'];
							$sql1 = "SELECT * from businessdetail where categoryid='$cid' order by businessname "; 
							$rs_result = mysqli_query($con,$sql1); //run the query
							$total_records = mysqli_num_rows($rs_result); 
							if(mysqli_num_rows($rs_result)>0)
							{	
							//count number of records
							$total_pages = ceil($total_records / $num_rec_per_page); 
							if($total_pages==0)
							{
								$total_pages=1;
							}
							$sql="SELECT * from businessdetail where categoryid='$cid' order by businessname LIMIT $start_from, $num_rec_per_page";
							$result=mysqli_query($con,$sql);
								
						?>

						<!--end portfolio filter -->
						
						<!--begin portfolio_list -->   
						<ul id="list" class="portfolio_list clearfix ">
						<?php
								while($row = mysqli_fetch_array($result))
								{
								$bid=$row['businessid'];
						?>

						<!--begin List Item -->
							<li class="list_item col-lg-3 col-md-4 col-sm-6 branding">
								<div class="our-team">
									<div class="pic">
										<img style="width:100%;height:220px;" class="responsive-image" src="images/<?php echo $row['businessimagepath']; echo "?id="; echo rand(); ?>">
									</div>
									<div class="team_prof">
										<h3 class="post-title">
										<?php $bname=$row['businessname']; echo $bname;?>
										<br>
										Offers :
											<?php 
												$sql1="select couponid from coupondetail where businessid='$bid'";
												$result1=mysqli_query($con,$sql1);
												$count=mysqli_num_rows($result1);
												echo $count;
											?>
										</h3>
										<a href="localcouponcategory.php?businessid=<?php echo $bid;?>"><button class="btn btn-default btn-block" type="button">View Offers</button></a>
									</div>
								</div>
							</li>
							
						<?php   }  ?>

							<!--end List Item -->
						</ul> <!--end portfolio_list -->
												<div align="center" class="row">
							  <?php 
								echo "<ul class='pagination'>";
								$page1=$page-1;
								if($page1==0)
								{
								  echo "<li class=''><a class='disabled'><i class='fa fa-angle-double-left'></i></a></li>";
								}
								else
								{
								  echo "<li class=''><a href='localoffers.php?page=".($page-1)."&categoryid=".$cid."'><i class='fa fa-angle-double-left'></i></a></li>";
								}

								for ($i=1; $i<=$total_pages; $i++)
								{ 
								  if($page==$i)
								  {
									echo"<li class='active purple purple-text'><a href='localoffers.php?page=".$i."&categoryid=".$cid."'>".$i."</a></li> ";
								  }
								  else
								  {
									echo "<li class=''><a href='localoffers.php?page=".$i."&categoryid=".$cid."'>".$i."</a></li>";
								  }
								}
							  
								if($page<$total_pages) 
								{
								  echo "<li class=''><a href='localoffers.php?page=".($page+1)."&categoryid=".$cid."'><i class='fa fa-angle-double-right'></i></a></li>   </ul>";
								}   
								else 
								{ 
								  echo "<li class=''><a class='disabled'><i class='fa fa-angle-double-right'></i></a></li>   </ul>";
								}
							  ?>       
						</div>

							<?php
							} 
							else
							{ 
								echo '<h3 class="center"> Sorry No Stores</h3>';
							}	
							?>
					<br><br>
						</div>
	<!--end isotope -->
				</div> <!--./row-->
			</div> <!--./div-->
		</section>
	</section>
	<!--end wrapper-->

<?php include('footer.php');
}
else
{
	echo "<script type='text/javascript'> window.location='couponlogin.php'</script>";
	
}
?>