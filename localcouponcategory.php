<?php 	include 'headercoupon.php';

	$bid=$_GET['businessid'];
	if(isset($_SESSION['couponlogin']))
	{
		$semail2=$_SESSION['email'];	
	$sql2="Select categoryid from businessdetail where businessid='$bid'";
	$result2=mysqli_query($con,$sql2);
	while($row2 = mysqli_fetch_array($result2))	
	{
	$cid=$row2['categoryid'];} 
	$sql3="Select businessname from businessdetail where businessid='$bid'";
	$result3=mysqli_query($con,$sql3);
	while($row3 = mysqli_fetch_array($result3))	
	{
	$bname=$row3['businessname'];} 

	?>
	<style>
	
.box3
{
	min-width: 373px;
position: relative;
width: 100%;
padding: 50px;
margin: 0 auto; 
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
	   // the "href" attribute of .modal-trigger must specify the modal ID that wants to be triggepurple
	   $('.modal-trigger').leanModal();
	    var semail = $('#semail2').val(); 
		var categoryid = $('#categoryid').val(); 		
		
	       $.post("subscribe.php", { semail: semail,categoryid,categoryid},  
	           function(result){  
	               //if the result is 1  
	               if(result == 1){  
				
	               }else{  
	                   
	               }  
	       });  
	 });
	    
</script>
<script>
	$(document).ready(function(){
	    $('.parallax').parallax();
	  });
	function oncouponbuttonclick(text)
	{
	var id = text; 
	      $.post("addcount1.php", { id: id},  
	          function(result){  
	              //if the result is 1  
	              if(result == 1){  
			
	              }else{  
	                  
	              }  
	      });  
	}
	function onsubscribe1()
	{
	var semail = $('#semail1').val();  
	var categoryid=$('#categoryid').val();
	var x = document.forms["myForm1"]["semail1"].value;
	var atpos = x.indexOf("@");
	var dotpos = x.lastIndexOf(".");
	if (atpos<1 || dotpos<atpos+2 || dotpos+2>=x.length) {
		alert("Not a valid e-mail address");
		return false;
	}
	      $.post("subscribe.php", { semail: semail,categoryid:categoryid},  
	          function(result){  
	              //if the result is 1  
	              if(result == 1){  
				alert("Thank You For Subscribe");
			//	$('#modalsemail').openModal();
	              }else{  
	                  //show that the username is NOT available  
	                  //$('#username_availability_result').html('Invalid Username or Password');  
				alert("Please Try Again Later");
	              }  
	      }); 
	}
</script>
<input type="hidden" name="categoryid" id="categoryid" value="<?php echo $cid; ?>">
<input type="hidden" name="semail2" id="semail2" value="<?php echo $semail2; ?>">
<?php	
	$sqls="SELECT * from businessdetail where businessid='$bid'";
	$results=mysqli_query($con,$sqls);
	while($rows=mysqli_fetch_array($results))
	{
		$businessname=$rows['businessname'];
		$businessimagepath=$rows['businessimagepath'];
	}
	$sql5 = "Select * from coupondetail where businessid='$bid'"; 
	$rs_result5 = mysqli_query($con,$sql5);
	$sql4 = "Select SUM(totaluses) AS sum1 from coupondetail where businessid='$bid'"; 
	$rs_result = mysqli_query($con,$sql4);
	while($rows=mysqli_fetch_array($rs_result))
	{
		$totaluses=$rows['sum1'];
	}		
	?>
<!--start wrapper-->
<section class="wrapper">
<section class="page_head">
	<div class="container">
		<div class="row">
			<div class="col-lg-12 col-md-12 col-sm-12">
				<div class="page_title">
					<h2>Business: <?php echo $businessname;?></</h2>
				</div>
				<nav id="breadcrumbs">
					<ul>
						<li><a href="index.php">Home</a>/</li>
						<li><a href="couponspage.php">Coupans</a>/</li>
						<li><a href="category2.php">Category</a>/</li>
						<li><a href="localoffers.php?categoryid=<?php echo $cid ?>">Local Offers</a>/</li>
						<li>Business: <?php echo $bname; ?></li>
					</ul>
				</nav>
			</div>
		</div>
	</div>
</section>
<section >
	<div class="container">
		<div class="row">
						<div class="col-lg-12 col-md-12 col-sm-12">
							<!-- BODY BOX-->
								<div class="col-md-12 col-lg-12 col-sm-12 ">
									<div class="dividerHeading">
										<h4><span>Best Offers, Deals and Coupons</span></h4>
									</div>
								</div>
							
								<?php
									$i=0;
									$num_rec_per_page=6;
									if (isset($_GET["page"]))
									{
										$page  = $_GET["page"];
									}
									else
									{ 
										$page=1;
									} 
									$start_from = ($page-1) * $num_rec_per_page;
									$sql4 = "Select * from coupondetail where businessid='$bid'"; 
									$rs_result = mysqli_query($con,$sql4); //run the query
									$total_records = mysqli_num_rows($rs_result); 
									if(mysqli_num_rows($rs_result)>0)
									{	
									//count number of records
									$total_pages = ceil($total_records / $num_rec_per_page); 
									if($total_pages==0)
									{
										$total_pages=1;
									}
									
									$sql1="Select * from coupondetail where businessid='$bid' LIMIT $start_from, $num_rec_per_page";
									$result1=mysqli_query($con,$sql1);
									while($row1 = mysqli_fetch_array($result1))	
									{ 
										$cpid=$row1['couponid'];
										$cpno=$row1['couponno'];
										$cpdesc=$row1['coupondescription'];
										$cpstatus=$row1['couponstatus'];
										$couponlogo=$row1['couponlogo'];
										$cpname=$row1['couponname'];
										$cashback=$row1['cashback'];	
										$expirydate=$row1['todate'];
										$totaluses=$row1['totaluses'];
										
									?>
										<div class="col-sm-6 col-md-6" style="padding-top: 3%;">
										  <div class="dl box3 ">
											<div class="row">
											<div class="col-sm-12 col-md-6 brand">
											<img src="images/<?php echo $couponlogo; ?>" width="80" height="80" />
												<h2><b><?php echo $cpname; ?></b></h2>	
												<i><?php echo '"';echo $cpdesc; echo '"'; ?></i>	
											</div>
											<div class="col-sm-12 col-md-6 ">
											<div class="descr">
												<h3></b>Expires On:<br> <?php echo $expirydate; ?></b></h3>
												<strong>Visit the Store and Use Above Code  to activate the Deal.</strong> Happy Savings!!
											</div>
											<div class="ends"><font size="2px" color="red">* Conditions and restrictions apply.</font>
											</div></div>
											<div class="col-sm-12 col-md-12 coupon midnight-blue" style="background: #727CB6">
												<a data-toggle="collapse" href="#code-<?php echo $i; ?>" >
												<button class="btn btn-danger btn-lg button" style="margin-bottom:  2%;margin-top:  2%;"><?php echo $cashback; ?>	</button></button>
												</a>
												<div id="code-<?php echo $i++; ?>" style="border:dotted red; background: yellow" class="collapse code"><b><font color="red"><?php echo $cpno; ?></font></b></div>
											</div></div> 
										  </div>
										 </div> 	
										
										

									<?php
									
									}
									?>
									</div>
		</div>
		<div class="row">
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
										  echo "<li class=''><a href='localcouponcategory.php?page=".($page-1)."&businessid=".$bid."'><i class='fa fa-angle-double-left'></i></a></li>";
										}
										
										for ($i=1; $i<=$total_pages; $i++)
										{ 
										  if($page==$i)
										  {
											echo"<li class='active'><a href='localcouponcategory.php?page=".$i."&businessid=".$bid."'>".$i."</a></li> ";
										  }
										  else
										  {
											echo "<li class=''><a href='localcouponcategory.php?page=".$i."&businessid=".$bid."'>".$i."</a></li>";
										  }
										}
										 
										if($page<$total_pages) 
										{
										  echo "<li class=''><a href='localcouponcategory.php?page=".($page+1)."&businessid=".$bid."'><i class='fa fa-angle-double-right'></i></a></li>   </ul>";
										}   
										else 
										{ 
										  echo "<li class='disabled' ><a ><i class='fa fa-angle-double-right'></i></a></li>   </ul>";
										}
										 ?>       
								</div>
								<?php }
									else{
										echo '<center><h5 class="purple-text">Sorry No Coupons, Deals Found from this Store.</h5></center>';
										
									}
									?>
									

</div><br><br><br>
	</div>
</section>
</section>
<!--end wrapper-->
<?php 
	include 'footer.php';
	
	}
	else
	{
		echo "<script type='text/javascript'> window.location='couponlogin.php'</script>";
		
	}
	?>