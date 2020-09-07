<!DOCTYPE html>
<!--[if IE 8 ]><html class="ie ie8" class="no-js" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html class="no-js" lang="en"> <!--<![endif]-->

<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<style>


.mymodal {
    display: block; /* Hidden by default */
    position: fixed; /* Stay in place */
    z-index: 1; /* Sit on top */
    padding-top: 0.5%; /* Location of the box */
    left: 0;
    top: 0;
    width: 100%; /* Full width */
    height: 100%; /* Full height */
    overflow: auto; /* Enable scroll if needed */
    background-color: rgb(0,0,0); /* Fallback color */
    background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
}

/* Modal Content */
.mymodal-content {
    position: relative;
    background-color: #fefefe;
    margin: auto;
    padding: 0;
    border: 1px solid #888;
    width: 77%;
    box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2),0 6px 20px 0 rgba(0,0,0,0.19);
    -webkit-animation-name: animatetop;
    -webkit-animation-duration: 0.4s;
    animation-name: animatetop;
    animation-duration: 0.4s
}

/* Add Animation */
@-webkit-keyframes animatetop {
    from {top:-300px; opacity:0} 
    to {top:0; opacity:1}
}

@keyframes animatetop {
    from {top:-300px; opacity:0}
    to {top:0; opacity:1}
}

/* The Close Button */
.close {
    color: white;
    float: right;
    font-size: 40px;
    font-weight: bold;
}

.close:hover,
.close:focus {
    color: #000;
    text-decoration: none;
    cursor: pointer;
}

.mymodal-header {
    padding: 2px 16px;
    background-color: #fff;
    color: blue;
}

.mymodal-body {padding: 2px 16px;}

.mymodal-footer {
    padding: 2px 16px;
    background-color: #fff;
    color: blue;
}



</style>



<?php
include('include_db.php');
?>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title>VVNLive-Promote Your Business with Us!</title>
    <meta name="description" content="">

    <!-- CSS FILES -->
    <link rel="stylesheet" href="css/bootstrap.min.css"/>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/style.css" media="screen" data-name="skins">
    <link rel="stylesheet" href="css/layout/box.css" data-name="layout">

    <link rel="stylesheet" href="css/fractionslider.css"/>
    <link rel="stylesheet" href="css/style-fraction.css"/>
    <link rel="stylesheet" href="css/animate.css"/>

	<script>
	$(document).ready(function () {
     $(".button-collapse").sideNav();
	$('.fixed-action-btn').FAB({
	click-to-toggle);	 		
	});
   });
	 $(document).ready(function(){
    $('.collapsible').collapsible({
      accordion : false // A setting that changes the collapsible behavior to expandable instead of the default accordion style
    });
  });
       
	</script>
	<script>
    $(document).ready(function(){
      $('.carousel').carousel();
    });
        </script>	
	<script>
	
   $(document).ready(function () {
       $('.slider').slider({full_width: true});
   });
</script>
<script>
	
  });
  $('.dropdown-button').dropdown({
	  inDuration: 100,
      outDuration: 225,
      constrain_width: false, // Does not change width of dropdown to that of the activator
	  hover: false, // Activate on hover
      gutter: 0, // Spacing from edge
      belowOrigin: true, // Displays dropdown below the button
      alignment: 'left' // Displays dropdown with edge aligned to the left of button
    }
  );
   $(".button-collapse").sideNav(); 
  </script>
 
<script>
  $(document).ready(function(){
    // the "href" attribute of .modal-trigger must specify the modal ID that wants to be triggered
    $('.modal-trigger').leanModal();
  });
   $('.modal-trigger').leanModal({
      dismissible: true, // Modal can be dismissed by clicking outside of the modal
      opacity: .2, // Opacity of modal background
      in_duration: 300, // Transition in duration
      out_duration: 200, // Transition out duration
      ready: function() { alert('Ready'); }, // Callback for Modal open
      complete: function() { alert('Closed'); } // Callback for Modal close
	  
    }
  );
$(document).ready(function() {  
  
        //the min chars for username  
        var min_chars = 1;  
  
        //result texts  
        var characters_error = 'Username or password not valid';  
        var checking_html = 'Checking...';  
  
        //when button is clicked  
        $('#check_username_availability').click(function(){  
            //run the character number check  
          check_availability();  
          /*  if($('#username').val().length < min_chars){  
                //if it's bellow the minimum show characters_error text '  
                $('#username_availability_result').html(characters_error);  
            }else{  
                //else show the cheking_text and run the function to check  
                $('#username_availability_result').html(checking_html);  
                check_availability();  
            }
*/  
        });  
  
  });  
  function capitalise() {
  var inp=document.getElementById('lastname').value;
  document.getElementById('lastname').value=inp.charAt(0).toUpperCase() + inp.slice(1).toLowerCase();
  var inp1=document.getElementById('firstname').value;
  document.getElementById('firstname').value=inp1.charAt(0).toUpperCase() + inp1.slice(1).toLowerCase();
 
  
}
//function to check username availability  
function check_availability(){  
  
        //get the username  
        var username = $('#username').val();  
		var password = $('#password').val();
        //use ajax to run the check  

        $.post("checkvalidate.php", { username: username,password:password},  
            function(result){  
                //if the result is 1  
                if(result == 1){  
				//load('session_write.php?session_name=username');
					window.location="vendordashboard/indexmed.php?username="+username;
                }else{  
                    //show that the username is NOT available  
                    $('#username_availability_result').html('Invalid Username or Password');  
                }  
        });  
  
}
function checkusername() {  

        //the min chars for username  
        var min_chars = 2;  

        //result texts  
        var characters_error = 'Invalid Username';  
        var checking_html = 'Processing...';  
  
        //when button is clicked  
         
            //run the character number check  
            if($('#username1').val().length < min_chars){  
                //if it's bellow the minimum show characters_error text '  
                $('#username_availability_result5').html(characters_error);  
            }
			else{  
                //else show the cheking_text and run the function to check  
                $('#username_availability_result5').html(checking_html); 
				//alert('username0');	
                checkusername2();  
            }  
          
		
  
}  
  
  function checkusername2()
  {
	  var username1 = $('#username1').val();
	  //alert('username');	
	  $.post("checkusername1.php", { username1: username1},
		function(result){  
		
            if(result == 1){  
                $('#username_availability_result5').html(username1 + ' is already registered! '); 
				//alert('username1');	
					$('#username1').val("");  
            }
            else{  
              $('#username_availability_result5').html("");
            }
		  
	  });
	  
  }
  function passwordcheck()
  {
	   var password1 = $('#password1').val();
	   	   var cpassword = $('#cpassword').val();
		     $('#username_availability_result6').html("");
		   if(password1!=cpassword)
		   {
			    $('#username_availability_result6').html("Sorry Password Doesn't Match!");
				$('#cpassword').val("");  
		   }
  }
//function to check username availability  	
	function forget_password()
	{
		 $('#modal3').openModal();
		 $('#username_availability_result3').html('');  
	}
	function getpassword()
	{
//		alert("hi");
//		$('#modal3').closeModal();
		var username2 = $('#username2').val();	
        $.post("forgetpassword.php", { username2: username2},  
            function(result){  
                if(result !=0){  
//					window.location="index.php";
					$('#modal3').closeModal();
					$('#modal4').openModal();
                }else{  
                    $('#username_availability_result3').html('Invalid Username');  
                }  
        });  
	}
	
	 function isNumber1(evt) {
            evt = (evt) ? evt : window.event;
			
				
            var charCode = (evt.which) ? evt.which : evt.keyCode;
            if (charCode > 31 && (charCode < 48 || charCode > 57)) {
                var errorMsg = document.getElementById("errorMsg");
                errorMsg.style.display = "block";
                document.getElementById("errorMsg").innerHTML = "  Please enter only Numbers.  ";
                return false;
            }
           
            return true;
			}
			
			
			function ValidateNo() {
            var phoneNo = document.getElementById('phone');
            var errorMsg = document.getElementById("errorMsg");
            var successMsg = document.getElementById("successMsg");
				document.getElementById("errorMsg").innerHTML="";
            if (phoneNo.value == "" || phoneNo.value == null) {
                errorMsg.style.display = "block";
                successMsg.style.display = "none";
                document.getElementById("errorMsg").innerHTML = "  Please enter your Mobile No.  ";
                return false;
            }
            if (phoneNo.value.length < 10 || phoneNo.value.length > 10) {
                errorMsg.style.display = "block";
                successMsg.style.display = "none";
                document.getElementById("errorMsg").innerHTML = "  Mobile No. is not valid, Please Enter 10 Digit Mobile No. ";
                return false;
            }

            successMsg.style.display = "block";
            document.getElementById("successMsg").innerHTML = "";
            errorMsg.style.display = "none";
            return true;
            }

  </script>
<script type="text/javascript">
            $(document).ready(function () {
                $("div#tblServiceHeader").hover(function () {
                    $(this).css("display", "block");
                }, function () {
                    $(this).css("display", "none");
                });
            });
            function lnkServicemouseover() {

                $("div#tblServiceHeader").css("display", "block");
            }
            function lnkServicemouseout() {
                $("div#tblServiceHeader").css("display", "none");
            }
			function loginfunction()
			{
				$('#username_availability_result').html(''); 
			}
        </script>
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body class="home">
    <header id="header">
        <div id="top-bar">
            <div class="container">
                <div class="row">
                    <div class="col-sm-8 top-info hidden-xs">
                        <span><i class="fa fa-phone"></i>Phone: +91 7043131161</span>
                        <span><i class="fa fa-envelope"></i>Email: contact@vvnlive.co.in</span>
                    </div>
                    <div class="col-sm-4 top-info">
                        <ul>
                            <li><a href="https://twitter.com/VVN_Live" class="my-tweet"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="https://www.facebook.com/Scit.VvnLive" class="my-facebook"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="https://www.youtube.com/channel/UC7mqo1ACqQc9sNcWi3Uodlg" class="my-pint"><i class="fa fa-youtube-play"></i></a></li>
                            <li><a href="https://www.instagram.com/vvnlive/" class="my-skype"><i class="fa fa-instagram"></i></a></li>
                            <li><a href="https://plus.google.com/108977162522271156240" class="my-google"><i class="fa fa-google-plus"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div id="logo-bar">
            <div class="container">
                <div class="row">
                    <!-- Logo / Mobile Menu -->
                    <div  class="col-lg-3 col-sm-3 ">
                        <div id="logo">
                            <h1><a href="index.php"><img alt="logo" src="images/logo.png"/></a></h1>
                        </div>
                    </div>
                    <!-- Navigation
    ================================================== -->
                    <div class="col-lg-9 col-sm-9" style="z-index: 4;">
                        <div class="navbar navbar-default navbar-static-top" role="navigation">
                            <!--  <div class="container">-->
                            <div class="navbar-header">
                                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                                    <span class="sr-only">Toggle navigation</span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                </button>
                            </div>
                           <div class="navbar-collapse collapse">
                                <ul class="nav navbar-nav">
                                    <li><a href="index.php"><i class="fa fa-home"></i>&nbsp;Home</a>
       
                                    </li>

                                    <li><a href="
										  <?php 
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
										  ?>"><i class="fa fa-gift"></i>&nbsp;Coupons</a>

                                    </li>

                                    <li><a href="vendordashboard/login.php" onclick="loginfunction();"><i class="fa fa-lock"></i>&nbsp;Vendor Login</a>

                                    </li>

                                    <li><a onmouseover="lnkServicemouseover();" onmouseout="lnkServicemouseout()" ><i class="fa fa-bars"></i>&nbsp;Category</a>
																<ul class="dropdown-menu">
																	<li><?php
										$sql="SELECT * from productcategorydetail ORDER BY NAME  ";
										$result=mysqli_query($con,$sql);
										while($row = mysqli_fetch_array($result))
										{
											$cid=$row['ID'];
										 ?>
										<a href="categorypage.php?categoryid=<?php echo $cid; ?>" class="black-text" style="font-size:10;" ><img class="responsive circle" width="20px" height="20px" src="images/<?php echo $row['IMAGE'];?>" style="margin-right:5px;"> <?php $cname=$row['NAME']; echo $cname;?></a>
										<?php
										}
										?>
																	</li>
																	
                                        </ul>
                                    </li>

                                    
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>