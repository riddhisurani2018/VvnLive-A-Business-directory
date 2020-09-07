<?php
	if(isset($_SESSION['categorycoupon']))
	{
		unset($_SESSION['categorycoupon']);
	}
	if(isset($_SESSION['businesscoupon']))
	{
		unset($_SESSION['businesscoupon']);
	}
	
	?>
<!doctype html>
<!--[if IE 8 ]>
<html class="ie ie8" lang="en">
	<![endif]-->
	<!--[if (gte IE 9)|!(IE)]>
	<html lang="en" class="no-js">
		<![endif]-->
		<html lang="en">
			<body>
				<style>
					.box1
					{
					position: relative;
					width: 100%;
					padding: 50px;
					margin: 0 auto;
					background-color: #fff;
					-webkit-box-shadow: 0 0 9px rgba(0, 0, 0, 0.1), inset 0 0 0px rgba(0, 0, 0, 0.1);
					-moz-box-shadow: 0 0 9px rgba(0, 0, 0, 0.1), inset 0 0 0px rgba(0, 0, 0, 0.1);
					box-shadow: 0 0 9px rgba(0, 0, 0, 0.9), inset 0 0 0px rgba(0, 0, 0, 0.4);
					}
					
					
					.disabled {
					pointer-events: none;
					cursor: default;
					opacity: 0.6;
					}

					
				</style>
				<script>
					$(document).ready(function(){
					$('.materialboxed').materialbox();
					});
				</script>
				<script>
					$(document).ready(function(){
					$('.collapsible').collapsible({
					  accordion : false // A setting that changes the collapsible behavior to expandable instead of the default accordion style
					});
					});
					
				</script>
				<section class="wrapper">
					<?php
						include 'header.php';
						$cid=$_GET['categoryid'];
						$num_rec_per_page=10;
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
							$sql1 = "SELECT * from businessdetail where categoryid='$cid'"; 
							$rs_result = mysqli_query($con,$sql1); //run the query
							$total_records = mysqli_num_rows($rs_result); ?>
					<section class="page_head">
						<div class="container">
							<div class="row">
								
								<div  class="col-lg-12 col-md-12 col-sm-12">
									<div class="page_title">
										<h2> 	<?php
											$sql="SELECT * from productcategorydetail WHERE ID=$cid";
											$result=mysqli_query($con,$sql);
											while($row = mysqli_fetch_array($result))
											{
												$cid=$row['ID'];
											 ?>
											<?php $cname=$row['NAME']; echo $cname;?>
											<?php
												}
												?>
										</h2>
									</div>
									<nav id="breadcrumbs">
									<ul>
										<li><a href="index.php">Home</a>/</li>
										<li><a href="category.php">Category</a>/</li>
										<li><?php echo $cname;?></li>
									</ul>
									</nav>
								</div>
							</div>
						</div>
					</section>
					<?php
						if(mysqli_num_rows($rs_result)>0)
						{	
						//count number of records
						$total_pages = ceil($total_records / $num_rec_per_page); 
						if($total_pages==0)
						{
							$total_pages=1;
						}
						
						?>
					<section class="content portfolio small-images">
						<div class="container">
							<div class="row " style="margin-left: 14%;">
								<?php
									//include('include_db.php');
									
									
									
									
									$sql="SELECT * from businessdetail where categoryid='$cid'  LIMIT $start_from, $num_rec_per_page";
									$result=mysqli_query($con,$sql);
									$numbusiness=0;$i=0;
									if(mysqli_num_rows($result)>0)
									{
									while($row = mysqli_fetch_array($result))
									      {
										$bid=$row['businessid'];
										$bname=$row['businessname'];
										$bdescription=$row['businessdescription'];
										$baddress=$row['businessaddress'];
										$bcno=$row['businesscno'];
										$bemail=$row['businessemail'];
										$bimage=$row['businessimagepath'];
										$bst=$row['businessstarttime'];
										$bet=$row['businessendtime'];
										$bcd=$row['businesscloseday'];
										$bsite=$row['businesssite'];
										 $sql1="SELECT * from productdetail where categoryid='$cid' and businessid='$bid'";
										$result1=mysqli_query($con,$sql1);
									
										
									 
									?>
								<div class="col-lg-6 col-md-6 col-sm-6 " style="min-width: 200px">
									<div class="box1 serviceBox_4">
										<!-- BODY BOX-->
										<div class="col-md-2 col-lg-2 col-sm-2 ">
											<img style="margin-left:15px;" class="materialboxed" width="70px" height="70px" src="images/<?php echo $bimage; ?>" >
										</div>
										<div class="col-md-10 col-lg-10 col-sm-10 ">
											<div style="height:70px;" class="page_head">
												<font size="5px" color="white"><?php echo $bname; ?></font></h2>
											</div>
										</div>
										<div>
											<div class="col-md-12 col-lg-12 col-sm-12 " align="left" >
												<br>
												<div class="col-md-3 col-lg-3 col-sm-3 "><i class="fa fa-phone"> <b>Phone:</b></i></div>
												<?php echo "      ".$bcno; ?><br>
												<div class="col-md-3 col-lg-3 col-sm-3 "><i class="fa fa-envelope"> <b>Email:</b></i></div>
												<?php echo $bemail; ?><br>
												<div class="col-md-3 col-lg-3 col-sm-3 "><i class="fa fa-map-marker"> <b>Address:</b></i></div>
												<?php echo $baddress; ?><br>
												<div class="col-md-3 col-lg-3 col-sm-3 "><i class="fa fa-globe"> <b>Website:</b></i></div>
												<?php echo $bsite; ?><br>
												<div class="col-md-3 col-lg-3 col-sm-3 "><i class="fa fa-clock-o"> <b>Timing:</b></i></div>
												<?php echo $bst;echo " to  "; echo $bet; ?><br>
												<div class="col-md-3 col-lg-3 col-sm-3 "><i class="fa fa-calendar"> <b>Off-day:</b></i></div>
												<?php echo $bcd; ?><br>
												<div class="col-md-3 col-lg-3 col-sm-3 "><i class="fa fa-gift"> <b>We Offer:</b></i></div>
												<?php echo $bdescription; ?><br>
											</div>
											<div class="read">
												<div style="width:100%;">
													
													<a  style="margin-top:5%;" class="btn btn-default" href="
														<?php
															$_SESSION['categorycoupon']=$cid;
															$_SESSION['businesscoupon']=$bid;
															if (isset($_SESSION['couponlogin']))
															{
															?>
														localcouponcategory.php?businessid=<?php echo $bid; ?>
														<?php
															}   
															else
															{
															?>
														couponlogin.php?businessid=<?php echo $bid; ?>
														<?php
															}
															?>" >
													 View Coupons
													</a>
												</div>
											</div>
											<!-- Modal Structure -->
											<div id="modal<?php echo $bid;?>" class="modal bottom-sheet">
												<div class="modal-content center">
													<?php 
														if(mysqli_num_rows($result1))
														{
														 while($row1 = mysqli_fetch_array($result1))
														       {
																$pid=$row1['productid'];
																$pname=$row1['productname'];
																$pdescription=$row1['productdescription'];
																$pprice=$row1['productprice'];
																$pimage=$row1['productimagepath'];?>
													<ul class="collection blue-text">
														<li class="collection-item avatar">
															<img src="images/<?php echo $pimage; ?>" alt="" class="responsive-img circle" style="height:70px;width:70px;">
															<span class="title" style="font-weight:900;font-size:20px;"><?php echo $pname; ?></span>
															<p style="font-weight:300px;">Description : <?php echo $pdescription; ?> <br>
																Price : <?php echo $pprice; ?>
															</p>
															<a href="#!" class="secondary-content"><i class="material-icons blue-text">grade</i></a>
														</li>
													</ul>
													<?php } } 
														else {
														 echo '<center><h4>Sorry No Products Found!</h4></center>';
														}
														?>
												</div>
											</div>
										</div>
									</div>
								</div>
								<?php  } }
									?>
							</div>
							<div align="center" class="row" style="margin-left: 14%;">
								<?php 
									echo "<ul class='pagination'>";
									$page1=$page-1;
									if($page1==0)
									{
									  echo "<li class=''><a class='disabled'><i class='fa fa-angle-double-left'></i></a></li>";
									}
									else
									{
									  echo "<li class=''><a href='categorypage.php?page=".($page-1)."&categoryid=".$cid."'><i class='fa fa-angle-double-left'></i></a></li>";
									}
									
									for ($i=1; $i<=$total_pages; $i++)
									{ 
									  if($page==$i)
									  {
									    echo"<li class='active'><a href='categorypage.php?page=".$i."&categoryid=".$cid."'>".$i."</a></li> ";
									  }
									  else
									  {
									    echo "<li class=''><a href='categorypage.php?page=".$i."&categoryid=".$cid."'>".$i."</a></li>";
									  }
									}
									
									if($page<$total_pages) 	
									{
									  echo "<li class=''><a href='categorypage.php?page=".($page+1)."&categoryid=".$cid."'><i class='fa fa-angle-double-right'></i></a></li>   </ul>";
									}   
									else 
									{ 
									  echo "<li class=''><a class='disabled'><i class='fa fa-angle-double-right'></i></a></li>   </ul>";
									}
									?> <br><br>      
							</div>
							<?php 
								}
								else
								{ 
									echo '<div align="center"><h3>Sorry No Business Under This Category<br><br><br></h3></div>';
								}
								?>
						</div>
					</section>
				</section>
			</body>
			<?php
				include 'footer.php';
				?>
		</html>