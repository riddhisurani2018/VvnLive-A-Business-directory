<?php include('include_db.php');
if(isset($_SESSION['registered']))
{
	echo '<script>alert("Registered Successfully! Please Login with your email address as Username")</script>';
	unset($_SESSION['registered']);
	
}
?>
<!DOCTYPE html>
<!--[if IE 8 ]><html class="ie ie8" class="no-js" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html class="no-js" lang="en"> <!--<![endif]-->
<head>


    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title>VVNLive-Promote Your Business with Us!</title>
    <meta name="description" content="">

    <!-- CSS FILES -->
    <link rel="stylesheet" href="css/bootstrap.min.css"/>
    <link rel="stylesheet" href="css/coupon.css"/>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/style.css" media="screen" data-name="skins">
    <link rel="stylesheet" href="css/layout/box.css" data-name="layout">
    <link rel="stylesheet" href="css/fractionslider.css"/>
    <link rel="stylesheet" href="css/style-fraction.css"/>
    <link rel="stylesheet" href="css/animate.css"/>

    <link rel="stylesheet" type="text/css" href="css/switcher.css" media="screen" />
	
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
	<style>
	
	.box1
{
position: relative;
width: 200px;
padding: 50px;
margin: 0 auto;
background-color: #eee;
-webkit-box-shadow: 0 0 9px rgba(0, 0, 0, 0.1), inset 0 0 0px rgba(0, 0, 0, 0.1);
-moz-box-shadow: 0 0 9px rgba(0, 0, 0, 0.1), inset 0 0 0px rgba(0, 0, 0, 0.1);
box-shadow: 0 0 9px rgba(0, 0, 0, 0.9), inset 0 0 0px rgba(0, 0, 0, 0.4);
}
	
	</style>
	<script type="text/javascript">

        function ValidateNo4() {
            var phoneNo = document.getElementById('cno');
            var errorMsg = document.getElementById("errorMsg1");
            var successMsg = document.getElementById("successMsg1");

            if (phoneNo.value == "" || phoneNo.value == null) {
                errorMsg.style.display = "block";
                successMsg.style.display = "none";
				
                document.getElementById("errorMsg1").innerHTML = "  Please enter your Mobile No.  ";
                return false;
            }
            if (phoneNo.value.length < 10 || phoneNo.value.length > 10) {
                errorMsg.style.display = "block";
				phoneNo.value="";
                successMsg.style.display = "none";
                document.getElementById("errorMsg1").innerHTML = "  Mobile No. is not valid, Please Enter 10 Digit Mobile No. ";
                return false;
            }

            successMsg.style.display = "block";
            document.getElementById("successMsg1").innerHTML = "";
            errorMsg.style.display = "none";
			check_availability();
            return true;
            }
			function isNumber1(evt) {
            evt = (evt) ? evt : window.event;
			
				
            var charCode = (evt.which) ? evt.which : evt.keyCode;
            if (charCode > 31 && (charCode < 48 || charCode > 57)) {
                var errorMsg = document.getElementById("errorMsg1");
                errorMsg.style.display = "block";
                document.getElementById("errorMsg1").innerHTML = "  Please enter only Numbers.  ";
                return false;
            }
           
            return true;
			}

function check_availability4() {  
    var email= $('#email').val();   
    $.get("checkemail.php", {email:email},  
        function(result){  
            if(result == 1){  
                $('#username_availability_result4').html(email + ' is already registered! '); 
					$('#email').val("");  
            }
            else{  
              $('#username_availability_result4').html("");
            }  
    });  

}  

function capitalise4() {
  var inp=document.getElementById('lname').value;
  document.getElementById('lname').value=inp.charAt(0).toUpperCase() + inp.slice(1).toLowerCase();
  var inp1=document.getElementById('fname').value;
  document.getElementById('fname').value=inp1.charAt(0).toUpperCase() + inp1.slice(1).toLowerCase();
 
  
}

function forget_password()
	{
		 $('#modal31').modal('open'); 
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
	function ValidateEmail()
{
	var x = document.getElementById("email").value;
    var atpos = x.indexOf("@");
    var dotpos = x.lastIndexOf(".");
    if (atpos<1 || dotpos<atpos+2 || dotpos+2>=x.length) {
        document.getElementById("emailerr").innerHTML="Please enter a valid Email Address.";
        return false;
    }
	else
		 document.getElementById("emailerr").innerHTML="";
	
}
function ValidateNo(event)
{
        var e = event || evt; // for trans-browser compatibility
        var charCode = e.which || e.keyCode;
        if (charCode > 31 && (charCode < 48 || charCode > 57))
             document.getElementById("cerr").innerHTML="Please enter a valid Phone No.";
		 else
			 document.getElementById("cerr").innerHTML="";
}
function ValidatePass()
{
	var x=document.getElementById("password1").value;
	if(x.length<8)
		document.getElementById("passerr").innerHTML="Password should be atleast of 8 characters.";
	else
		 document.getElementById("passerr").innerHTML="";
}
function PasswordCheck()
{
	var x= document.getElementById("password1");
	var y=document.getElementById("cpassword");
	if(x!==y)
		document.getElementById("passcheck").innerHTML="Passwords do not match.";
	else
		document.getElementById("passcheck").innerHTML="";
}

</script>

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
                    <div class="col-lg-9 col-sm-9">
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
                                    <li><a href="index.php"><i class="fa fa-home"></i>&nbsp;Home</a></li>
                                    <li><a href="category2.php"><i class="fa fa-tag"></i>&nbsp;Local Offers</a></li>
									<li><a href="http://shop.indiadeal.co.in"><i class="fa fa-shopping-cart"></i>&nbsp;Online Offers</a></li>
									<?php 
										if(isset($_SESSION['couponlogin']))
										{
											
											?>
											
											<li><a href="#"><i class="fa fa-smile-o"></i><b>&nbsp;Welcome <?php echo $_SESSION['firstname']; ?></b></a>
											<ul class="dropdown-menu">
												<li><a href="coupondashboard.php" ><i class="fa fa-user"></i>&nbsp;My Dashboard</a></li>
												<li><a href="couponlogout.php"><i class="fa fa-unlock-alt"></i>&nbsp;Log-Out</a></li>
											
											</ul>
											</li>
										<?php	
										}
										else
										{
										?>
										 <li><a href="couponlogin.php"><i class="fa fa-lock"></i>&nbsp;Sign-In</a></li>
										<?php } ?>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
	