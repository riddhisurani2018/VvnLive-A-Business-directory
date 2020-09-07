<?php include('headercoupon.php');
?>
	<!--start wrapper-->
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
        <div class="row sub_content">
            <div class="col-lg-6 col-sm-6">
                <div class="dividerHeading">
                    <h4><span>Register</span></h4>
                </div>
                <form id="registerform" action="couponverify.php" method="post" name="registerform" action="">
                    <div class="form-group">
                <input id="fname" type="text" name="fname" autocomplete="off" class="form-control" onkeyup="capitalise4()" placeholder="First name" required> 
              </div>
                    <div class="form-group">
                <input id="lname" type="text" name="lname" autocomplete="off" class="form-control" onkeyup="capitalise4()" placeholder="Last name" required> 
			  </div>
			  
                    <div class="form-group">
                <input id="cno" type="text" name="cno" autocomplete="off" class="form-control"  onchange="ValidateNo4();" maxlength="10" onkeyup="isNumber1(event);"  placeholder="Number" required> 
				 <span  id="errorMsg1" class="dsNone error" class="red-text"></span><span class="red-text" style="float:left;" id="successMsg1" class="dsNone success">
              </div>
			  
			  
                    <div class="form-group">
                <input id="email" type="email" name="email"  placeholder="Email" autocomplete="off" class="form-control" onchange="check_availability4()" required> 
              </div>
			<div id='username_availability_result4' class="green-text ">
          </div> 
          		
                    <div class="form-group">
                <input id="password2" type="password" name="password2" autocomplete="off"  class="form-control" placeholder="Password" required> 
              </div>
			<h6>* Your Email Address is Your Username</h6>
                    <div class="form-group">
                        <button type="submit" name="submit" class="btn btn-default btn-lg button" > Register an account</button>
                    </div>

                </form>
            </div>
            <div class="col-lg-5 col-sm-5 col-lg-offset-1">
                <div class="dividerHeading">
                    <h4><span>Login</span></h4>
                </div>
				    <div class="center">
					  <span>
						<font color="red"><?php if(!empty($_SESSION['failed'])){ echo "*Invalid Valid Username or Password"; unset($_SESSION['failed']); } ?> </font>
					  </span>
				</div>
                <form id="loginform" action="loginverify.php" method="post" name="loginform" action="">
                    <div class="form-group">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-user"></i></span>
                            <input id="username1" type="text" name="username1" autocomplete="off" required class="form-control" placeholder="Username">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-lock"></i></span>
                            <input id="password1" type="password" name="password1" autocomplete="off" required class="form-control" placeholder="Password">
                        </div>
                    </div>
                    <div class="form-group">
                        <button type="submit" name="submit" class="btn btn-default btn-lg button">Sign in</button><br>
						
						  </div>
					
                </form>
			
            </div>
        </div>
    </div>
	

	
	<div id="modal31" class="modal">
    <div class="modal-window">
      <h5>Forget Password</h5></br>
      <div class="row">
    <form action="" method="post">
	
	   <div class="row">
        <div class="col-sm-12">
          <input id="emailforget" type="text" class="form-control">
          <label for="emailforget">Username</label>
        </div>
      </div>
	  </br>
      <a onclick="getpassword()" value="login">get password</a></br></br>
	  <div class="red-text" id='username_availability_result31'></div> 	
    </form>
  </div>
    </div>
    
  </div>
  
  
  
  
  <div id="modal41" class="modal center grey lighten-3" style="width:300px" >
    <div class="modal-content black-text">
      
      <div class="row">
    <form class="col-sm-12 " action="" method="post">
	
	   <div class="row">
        <div class="col-sm-12">
          <label>Your password has been sent to your email address.</label></br></br>
        </div>
      </div>
	  </br>
      <a class=" modal-action modal-close btn-flat white orange-text text-darken-1" style="border:1px solid #ffa000">Close</a></br></br>
	  <div class="red-text" id='username_availability_result2'></div> 	
    </form>
  </div>
    </div>
  </div> 
</section>


<?php include('footer.php');
?>