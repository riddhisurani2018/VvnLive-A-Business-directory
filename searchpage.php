<!doctype html>
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><html lang="en" class="no-js"> <![endif]-->
<html lang="en">
<?php include('include_db.php');
//if($_POST['category11']!='' OR $_POST['subcategory11']!='' OR $_POST['store']!='')

if(isset($_SESSION['couponlogin']))
{
	$semail2=$_SESSION['email'];	
	if(isset($_POST['category11']) || isset($_POST['category11']) || isset($_POST['category11']) || isset($_POST['range1']) || isset($_POST['amount']))
	{
	$category11=$_POST['category11'];
	$subcategory11=$_POST['subcategory11'];
	$store=$_POST['store'];
	$range1=$_POST['range1'];
	$amount=$_POST['amount'];
	$storeid=$_POST['store'];
	
?>

<?php
include 'headercoupon.php';
?>
<link type="text/css" rel="stylesheet" href="css/coupon.css"  media="screen,projection"/>
<body>

<script>
  $(document).ready(function(){
      $('.parallax').parallax();
    });
$(document).ready(function(){
    // the "href" attribute of .modal-trigger must specify the modal ID that wants to be triggered
    $('.modal-trigger').leanModal();
  });
  function ongetcode(text)
  {
	  var id=text;
//	  alert(id);
	  var code=$('#vouchercode'+id).val();
	  var link=$('#link'+id).val();
	   $.post("addcount.php", { id: id},  
            function(result){   
                if(result == 1){  
				
                }else{  
                    
                }  
        });  
	  if(code=='')
	  {
		  			var code='Activated';

	  }
	  		  var win = window.open(link, '_blank');
		if(win){
			//Browser has allowed it to be opened
			win.focus();

		}else{
			//Broswer has blocked it
			alert('Please allow popups for this site');
		}
//	  alert("button click"); 
			  $('#codebutton1'+id).text(code);
			  $('#codebutton'+id).hide();
			  $('#codebutton1'+id).show();
			  $('#mail1'+id).show();
			  $('#website'+id).show();
			  $('#codebutton1'+id).enable(true);
		 
	}
	function onsubscribe1()
	{
		var semail1 = $('#semail1').val();  
		var categoryid=$('#categoryid').val();
		var x = document.forms["myForm1"]["semail1"].value;
		var atpos = x.indexOf("@");
		var dotpos = x.lastIndexOf(".");
		if (atpos<1 || dotpos<atpos+2 || dotpos+2>=x.length) {
			alert("Not a valid e-mail address");
			return false;
		}
        $.post("subscribe1.php", { semail1: semail1,categoryid:categoryid},  
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
	<script>

  
		$(document).ready(function()
		{
			  $('select').material_select();
			
			  
			$("#category11").change(function()
			{
				var id=$(this).val();
				var x = document.getElementById("category11").options[0].disabled = true;
				if(id==8)
				{
					$('#subcategory11').hide();
					$('#store').hide();
				}
				else
				{
					$('#subcategory11').show();
					$('#store').show();
				}
				var dataString = 'id='+ id;
				$.ajax
				({
				type: "POST",
				url: "ajax_subc.php",
				data: dataString,
				cache: false,
				success: function(html1)
				{
				$(".subcategory11").html(html1);
				//alert(html1);
				} 
				});
				
				$.ajax
				({
				type: "POST",
				url: "ajax_store.php",
				data: dataString,
				cache: false,
				success: function(html11)
				{
				$(".store").html(html11);
				//alert(html1);
				} 
				});

			});

		});
	  function onamountchange()
		{
			var amount=$('#amount').val();
			if(amount==1)
			{
				document.getElementById("range1").value="0";
				document.getElementById("range1").max = "10000";
			}
			else if(amount==2)
			{
				document.getElementById("range1").value="0";
				document.getElementById("range1").max = "100";
			}
		}
	</script>
		<input type="hidden" name="categoryid" id="categoryid" value="<?php echo $storeid; ?>">
		<input type="hidden" name="semail2" id="semail2" value="<?php echo $semail2; ?>">

	<?php	
		if($category11==8)
		{
				if($amount==2)
				{
					$sql1="SELECT * from onlinecoupon where discountpercent >= '$range1'";
				}
				else
				{
					$sql1="SELECT * from onlinecoupon where discountamount >= '$range1'";
				}
		}
		elseif($category11!=0 && $subcategory11!=0 && $store!=0 && $range1!=0)
		{
				$storeid=$store;
				if($amount==2)
				{
					$sql1="SELECT * from onlinecoupon where oid='$storeid' AND categoryid='$category11' AND subcategoryid='$subcategory11' AND discountpercent >= '$range1'";
				}
				else
				{
					$sql1="SELECT * from onlinecoupon where oid='$storeid' AND categoryid='$category11' AND subcategoryid='$subcategory11' AND discountamount >= '$range1'";
				}
			}
		elseif($category11==0 && $subcategory11==0 && $store==0 && $range1!=0)	
		{
				if($amount==2)
				{
					$sql1="SELECT * from onlinecoupon where discountpercent >= '$range1'";
				}
				else
				{
					$sql1="SELECT * from onlinecoupon where discountamount >= '$range1'";
				}
		
		}
		elseif($category11==0 && $subcategory11==0 && $store!=0 && $range1!=0)	
		{
				$storeid=$store;
				if($amount==2)
				{
					$sql1="SELECT * from onlinecoupon where oid='$storeid' AND discountpercent >= '$range1'";
				}
				else
				{
					$sql1="SELECT * from onlinecoupon where oid='$storeid' AND discountamount >= '$range1'";
				}
			
		}
		elseif($category11==0 && $subcategory11!=0 && $store==0 && $range1!=0)	
		{
				if($amount==2)
				{
				$sql1="SELECT * from onlinecoupon where subcategoryid='$subcategory11' AND discountpercent >= '$range1'";
				
				}
				else
				{
				$sql1="SELECT * from onlinecoupon where subcategoryid='$subcategory11' AND discountamount >= '$range1'";
				
				}
		}
		elseif($category11!=0 && $subcategory11==0 && $store==0 && $range1!=0)	
		{
				if($amount==2)
				{
				$sql1="SELECT * from onlinecoupon where categoryid='$category11' AND discountpercent >= '$range1'";
				
				}
				else
				{
				$sql1="SELECT * from onlinecoupon where categoryid='$category11' AND discountamount >= '$range1'";
				
				}
		}
		elseif($category11==0 && $subcategory11!=0 && $store!=0 && $range1!=0)	
		{
			$storeid=$store;
				if($amount==2)
				{
				$sql1="SELECT * from onlinecoupon where oid='$storeid' AND subcategoryid='$subcategory11'  AND discountpercent >= '$range1'";
				
				}
				else
				{
				$sql1="SELECT * from onlinecoupon where oid='$storeid' AND subcategoryid='$subcategory11' AND discountamount >= '$range1'";
				
				}
		}
		elseif($category11!=0 && $subcategory11!=0 && $store==0 && $range1!=0)	
		{
				if($amount==2)
				{
				$sql1="SELECT * from onlinecoupon where categoryid='$category11' AND subcategoryid='$subcategory11'  AND discountpercent >= '$range1'";
				
				}
				else
				{
				$sql1="SELECT * from onlinecoupon where categoryid='$category11' AND subcategoryid='$subcategory11' AND discountamount >= '$range1'";
				
				}

		}
		elseif($category11!=0 && $subcategory11==0 && $store!=0 && $range1!=0)	
		{
			$storeid=$store;
				if($amount==2)
				{
				$sql1="SELECT * from onlinecoupon where oid='$storeid' AND categoryid='$category11'  AND discountpercent >= '$range1'";
				
				}
				else
				{
				$sql1="SELECT * from onlinecoupon where oid='$storeid' AND categoryid='$category11' AND discountamount >= '$range1'";
				}
		}
		
		if($store!=0)
		{
		$sqls="SELECT * from onlinestores where oid='$storeid'";
		$results=mysqli_query($con,$sqls);
		while($rows=mysqli_fetch_array($results))
		{
			$storename=$rows['storename'];
			$storeimagepath=$rows['storeimagepath'];
		}
		$sql5 = "Select * from onlinecoupon where oid='$storeid'"; 
		$rs_result5 = mysqli_query($con,$sql5);
		$sql4 = "Select SUM(totaluses) AS sum1 from onlinecoupon where oid='$storeid'"; 
		$rs_result = mysqli_query($con,$sql4);
		while($rows=mysqli_fetch_array($rs_result))
		{
			$totaluses=$rows['sum1'];
		}
		}		
	?>
		<div class="parallax-container" style="height:350px;">
				<div class="parallax"><img src="images/parallax8.jpg"/>
				</div>
		</div>
		<?php if($store!=0){?>
		<div class="row" style="margin-top:-90px;margin-left:30px;">	
			<img class="white" src="images/coupons-logos/<?php echo $storeimagepath;?>" width="200px" height="80px"/>
			<!--<label class="right bottom white-text" style="margin-right:100px;margin-top:-10px;"><center><h4><?php echo mysqli_num_rows($rs_result5);?></h4> </center><h6>OFFERS AVAILABLE</h6></label>
			<label class="right bottom white-text" style="margin-right:100px;margin-top:-10px;"><center><h4><?php if($totaluses!=0){echo $totaluses;}else{echo 0;}?></h4> </center><h6>TOTAL USES</h6></label>
		--></div>
		<?php }else{ ?>
		<div class="row" style="margin-top:-90px;margin-left:30px;">	
			<label class="bottom white-text" ><h4><?php echo "Your Search";?></h4></label>
		<!--	<label class="right bottom white-text" style="margin-right:100px;margin-top:-10px;"><center><h4><?php //echo mysqli_num_rows($rs_result5);?></h4> </center><h6>OFFERS AVAILABLE</h6></label>
			<label class="right bottom white-text" style="margin-right:100px;margin-top:-10px;"><center><h4><?php //if($totaluses!=0){echo $totaluses;}else{echo 0;}?></h4> </center><h6>TOTAL USES</h6></label>
		--></div>
		<?php } ?>
		<div class="row" style="margin-top:40px;">
		<div class="col s2 l2" style="margin-top:0px;margin-left:0px;">
		<form action="searchpage.php" method="POST">
        <div class="card-panel purple lighten-1" style="padding-left:0;padding-right:0;">
		
		<h5  class="row  white-text center" >
		Filter By 
		</h5>
		<?php 
		$filter="Select * from onlinecouponcategory";
		$filterresult=mysqli_query($con,$filter);
		?>
          <div class="row  white-text"  style="padding-left:0px;padding-right:0px;">
			<div class="input-field col s12" >
				<select id="category11" name="category11" class=" browser-default black-text category">
				
				<option value="0" selected>Category</option>
				
		<?php
		while($filterrow=mysqli_fetch_array($filterresult))
		{
		?>
				<option value="<?php echo $filterrow['cid']; ?>"><?php echo $filterrow['name']; ?></option>
		<?php 
		} 
		?>
				</select>
			
			</div>
          </div>
		  <div class="row">
		    <div class="input-field col s12">
				<select class="subcategory11 browser-default" id="subcategory11" name="subcategory11" >
				<option value="0" selected>Subcategory</option>
				</select>
				  
			
			
			</div>
		  </div>
		   <div class="row">
		    <div class="input-field col s12">
				<select class="store browser-default" id="store" name="store" >
				<option value="0" selected>Store</option>
				</select>
			</div>
		  </div>
		  <div class="row" >
				<div class="col s11 center white-text" style="margin-bottom:0px;">
					<p class="range-field center" style="margin-bottom:0px;">
					 Discount Range
						<input type="number" name="range1" id="range1" min="5" max="100" value="0"/>
					</p>
				</div>
		  </div>
		  <div class="row">
		    <div class="input-field col s12">
				<select class="amount browser-default" id="amount" name="amount" onchange="onamountchange();">
					<option value=""   disabled >Amount In</option>
					<option value="2" selected>Percent(%)</option>
					<option value="1">Rs</option>
				</select>
			</div>
		  </div>
		  <div class="row center"> 
			<button class="btn white center purple-text">Search</button>
			</div>
		</div>	
	</form>
		</div>
			<div class="col s7 l7 " style="margin-left:0px;">
				<div class="row">
					<div class=" s12 l12">
						<div class="card-panel white" style="border:2px solid #9c27b0;">
						<h4 style="border-left: 5px solid #9c27b0;font-family: GillSans, Calibri, Trebuchet, sans-serif; padding-left:5%;" class="purple-text"> 
								Best Offers, Deals and Coupons
						</h4>
						<br>
							<div class="row">
							<?php
								$result1=mysqli_query($con,$sql1);
								
								$i=0;
								if(mysqli_num_rows($result1)>0)
								{
								while($row1 = mysqli_fetch_array($result1))	
								{ 
									$i=$i+1;
									$couponid=$row1['couponid'];
									$oid=$row1['oid'];
									$categoryid=$row1['categoryid'];
									$subcategoryid=$row1['subcategoryid'];
									$title=$row1['title'];
									$expirydate1=$row1['expirydate'];
									$expirydate=date('d-m-Y',strtotime($expirydate1));
									$vouchercode=$row1['vouchercode'];
									$link=$row1['link'];	
									$highlighttext=$row1['highlighttext'];
									$description=$row1['description'];
									$totaluses=$row1['totaluses'];
									
									$imgsql="Select * from onlinestores WHERE oid='$oid'";
									$imgresult=mysqli_query($con,$imgsql);
									while($rowimg = mysqli_fetch_array($imgresult))	
									{
										$storeimagepath=$rowimg['storeimagepath'];
									}
							?>
							<input type="hidden" name="vouchercode" id="vouchercode<?php echo $couponid;?>" value="<?php echo $vouchercode; ?>">
							<input type="hidden" name="couponid" id="couponid" value="<?php echo $vouchercode; ?>">
							<input type="hidden" name="link" id="link<?php echo $couponid;?>" value="<?php echo $link; ?>">
							<div class="col s12 l12">
								<div class="card purple lighten-5 hoverable black-text" style="border:2px solid #000">
									<div class="card-content" style="padding:0px;">
										<div class="row">
										<div class="col s9 l9">
										<ul>
											<li style="margin-left:2%;">
											<h4 class="black-text"><b><?php echo $title; ?></b></h4>
											<i><?php if($highlighttext!=''){echo '"';echo $highlighttext; echo '..."';}?></i></br><br>
											<p class="black-text" style="font-size:14px;" >
											<i class="material-icons left"  style="font-size:19px;">event_busy</i><b>
											<?php 
											if($expirydate1<date("Y-m-d"))
											{	?>
											<a class="red-text">	Expired</a>
											<?php
											}else{
											?>
											Expires On <?php echo $expirydate; }?></b>
											<a class="modal-trigger" href="#modaltermscondition<?php echo $couponid;?>" style="padding-left:20px;">Details</a>
											<b><a class="green-text" style="margin-left:20px;"><?php echo "Total Uses : ".$totaluses." Times";?></a></b>
											</p>
											<div id="modaltermscondition<?php echo $couponid;?>" class="modal" style="width:700px;">
												<div class="modal-content">
												  <h4 class="blue-text center">Terms And Conditions/Description</h4>
												  <p style="margin-top:40px;"><?php echo $description;?></p>
												</div>
												<div class="modal-footer">
												  <a href="#!" class=" modal-action modal-close btn-flat">Agree</a>
												</div>
											  </div>

											</li>
										</ul>	
										</div>

										<div class="col s3 l3">
											<img class="white" src="images/coupons-logos/<?php echo $storeimagepath;?>" width="160px" height="80px"/>
											<li class="center" style="display:inline-block ;font-family: GillSans, Calibri, Trebuchet, sans-serif;padding-top:40%;vertical-align:top;">
											<a class="btn right white-text purple" id="codebutton<?php echo $couponid;?>" onclick="ongetcode(<?php echo $couponid;?>);">Get Code</a>
											<a class="btn right black-text purple disabled" id="codebutton1<?php echo $couponid;?>" value="" style="display:none;"></a>
											<p style="margin-top:50px;">
											<a class="tooltipped" data-position="bottom" data-tooltip="mail" data-delay="30" id="mail1<?php echo $couponid;?>" href="couponshare.php?couponid=<?php echo $couponid; ?>&clientemail=<?php echo $semail2; ?>&storeid=<?php echo $storeid; ?>" style="display:none;margin-top:20px;background:none;"><i class="material-icons green-text">mail</i></a>
											<a class="tooltipped" data-position="bottom" data-tooltip="website" data-delay="0" href="<?php echo $link;?>" id="website<?php echo $couponid;?>" target="_blank" style="margin-top:20px;display:none;"><i class="material-icons green-text">language</i></a>
											</p>
			
											</li>
										</div>
										</div>
									</div>
									
								</div>
							</div>

							<?php
								}
								?>
							<div class="row center">
							  
							</div>

								<?php	} 
								else{
									echo '<center><h5 class="red-text">Sorry No Coupons, Deals Found.</h5></center>';
									
								}
							?>
							</div>		
										
						</div>
					</div>
				</div>
			</div>
			
			
			
 
			<div class="col s3 l3" style="margin-left:-10px;">
			<div class="row">
			<div class="col s12 l12" >
				<script charset="utf-8" type="text/javascript">
				amzn_assoc_ad_type = "responsive_search_widget";
				amzn_assoc_tracking_id = "soucodinftec-21";
				amzn_assoc_marketplace = "amazon";
				amzn_assoc_region = "IN";
				amzn_assoc_placement = "";
				amzn_assoc_search_type = "search_widget";
				amzn_assoc_width = 300;
				amzn_assoc_height = 300;
				amzn_assoc_default_search_category = "";
				amzn_assoc_default_search_key = "";
				amzn_assoc_theme = "dark";
				amzn_assoc_bg_color = "FF690E";
				</script>
				<script src="//z-in.amazon-adsystem.com/widgets/q?ServiceVersion=20070822&Operation=GetScript&ID=OneJS&WS=1&MarketPlace=IN"></script>
			</div>
			</div>
			<div class="row">
			<div class="col s12 l12" >
				<div data-WRID="WRID-145810354286580096" data-widgetType="searchWidget" data-class="affiliateAdsByFlipkart" height="300" width="300" ></div>

			<script async src="//affiliate.flipkart.com/affiliate/widgets/FKAffiliateWidgets.js"></script>
			</div>
			</div>
			<div class="row">
					<div class=" col s12 l12">
						<div class="card-panel hoverable white" style="border:2px solid #9c27b0;margin-left:0%;">
							<h4 style="border-left: 5px solid #9c27b0;font-family: GillSans, Calibri, Trebuchet, sans-serif; padding-left:10%;" class="purple-text"> 
								Subscribe
							</h4>			  
			
						<form  id="myForm1" name="myForm1" method="post" >             
							<div class="input-field col s12 m12 l12">
								<i class="material-icons prefix icon_height purple-text">email</i>
								<input id="semail1" type="email" name="semail1" autocomplete="off" class="validate" required>
								<label for="semail1" class="purple-text">Email Address</label>
							</div>
							<h6 class="black-text" style="font-family: GillSans, Calibri, Trebuchet, sans-serif; "><b>* Subscribe here to receive Best Offers from this store</b></h6>
							<div class="row">
								<div class="input-field col s12 m12 l12">
									  <center>
										<button class="btn-large white purple-text" style="border:1px solid #9c27b0;font-family: GillSans, Roboto-Thin, Trebuchet, sans-serif; " id="subscribe1" onclick="onsubscribe1();" type="submit" name="submit"><b>Subscribe</b>
										</button>
									  </center>
								</div>

							</div>
						</form>	
						</div>
					</div>
				</div>
<!--			<div class="row">
				
					<div class="col s12 l12">
						
						<div class="card-panel hoverable white" style="border:2px solid #9c27b0;margin-left:0%;">
							<h4 style="border-left: 5px solid #9c27b0;font-family: GillSans, Calibri, Trebuchet, sans-serif; padding-left:10%;" class="purple-text"> 
								Store Details
							</h4>
							<br>
								
								<?php
								/*		//include('include_db.php');
										//$cid=$_GET['categoryid'];
										$sql="SELECT * from onlinestores where oid='$storeid'";
										$result=mysqli_query($con,$sql);
										while($row = mysqli_fetch_array($result))
										{
											$storename=$row['storename'];
											$categoryid=$row['categoryid'];
											$storeimagepath=$row['storeimagepath'];
										?>	 
											
								<div class="collection" style="text-align:center;font-weight:900;border:1px solid #000;">
									<a class="collection-item black-text"><i class="material-icons red-text left"></i>      <?php echo $storename; ?> </a>
									<a class="collection-item black-text"><i class="material-icons red-text left"></i>     <?php echo $categoryid; ?></a>
								</div>   
								<?php
										}*/
								?>
						</div>
					</div>
			</div>
-->			
			</div>
		
		</div>
		<div class="row">
			<div class="col s12 l10 right">
			<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
			<!-- SourceCodeInfotechAds1 -->
			<ins class="adsbygoogle"
				 style="display:inline-block;width:728px;height:90px"
				 data-ad-client="ca-pub-5465398438066775"
				 data-ad-slot="9079680047"></ins>
			<script>
			(adsbygoogle = window.adsbygoogle || []).push({});
			</script>

			</div>
		</div>
												
</body>
<footer>
<?php 
include 'footer.php';
?>
</footer>
</html>
<?php
	}
	else
	{
		echo "<script type='text/javascript'> window.location='onlineoffers.php'</script>";
	}
}
else
{
	echo "<script type='text/javascript'> window.location='couponlogin.php'</script>";
	
}
?>