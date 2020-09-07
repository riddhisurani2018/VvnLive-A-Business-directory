<?php
include 'headercoupon.php';
if(isset($_SESSION['couponlogin']))
{

if(isset($_SESSION['updated']))
{
	echo '<script>alert("Password Updated")</script>';
	unset($_SESSION['updated']);
}
?>
<script>
$(document).ready(function(){
    $('.collapsible').collapsible();
  });
  
  function passwordcompare()
  {
	document.getElementById('errorpass').innerHTML="";
	var old=$('#oldp').val();
	var original=$('#pass').val();
	if(old!=original)
	{
		$('#oldp').val("");
		document.getElementById('errorpass').innerHTML="Please Enter Correct Old Password";
	}	
  }
  
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
  
</script>
<?php 
	$reviewid=$_SESSION['reviewid'];
	$query11="select * from reviewdetail where reviewid='$reviewid'";
	$result11=mysqli_query($con,$query11);
	$row=mysqli_fetch_array($result11);
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
	<div class="row sub_content">
		<div class="col-lg-6 col-md-6 col-sm-6">
                    <div class="dividerHeading">
                        <h4><span>My Dashboard</span></h4>
                    </div>
					<form action="updatedashboard.php" id="lg-form" name="lg-form" method="post" >
			  <div class="input-field col s6 m6 l6">
                <label for="fname" class="red-text">First Name:</label>
                <input id="fname" type="text" name="fname" autocomplete="off" class="form-control" onkeyup="capitalise4()" value="<?php echo $row['firstname']; ?>" required>
              </div>
			   <div class="input-field col s6 m6 l6">
                <label for="lname" class="red-text">Last Name:</label>
                <input id="lname" type="text" name="lname" autocomplete="off" class="form-control" onkeyup="capitalise4()"  value="<?php echo $row['lastname']; ?>" required>
              </div>
			  
			  <div class="input-field col s12 m12 l12">
                <label for="cno" class="red-text">Contact No:</label>
                <input id="cno" type="text" name="cno" autocomplete="off" class="form-control"  onchange="form-controlNo4();" maxlength="10" onkeyup="isNumber1(event);" value="<?php echo $row['cno']; ?>" required>
				 <span  id="errorMsg1" class="dsNone error" class="red-text"></span><span class="red-text" style="float:left;" id="successMsg1" class="dsNone success">
              </div>
			  
			  
			  <div class="input-field col s12 m12 l12">
                <label for="email" class="red-text" >Email Address:</label>
                <input id="email" type="email" name="email"  autocomplete="off" class="form-control" onchange="check_availability4()" value="<?php echo $row['email']; ?>" required readonly>
              </div>
			  <input type="hidden" value="<?php echo $reviewid; ?>" name="reviewid">
			<div id='username_availability_result4' class="green-text "> 
          		
		</div>
                    <button class="btn btn-default btn-lg button" type="submit" name="submit"><b>Update</b>
                    </button>
            </div>
			<input type="hidden" value="<?php echo $row['password']; ?>" name="pass" id="pass"/>
			</form>
		<div class="col-lg-5 col-sm-5 col-lg-offset-1">
                    <div class="dividerHeading">
                        <h4><span>Change Password:</span></h4>
				
				 <div class="center">
					  <span class="red-text">
						<?php if(!empty($_SESSION['failed'])){ echo "Invalid Valid Username or Password"; unset($_SESSION['failed']); } ?> 
					  </span>
				</div>
				
				<form  action="changepassword.php" id="lg-form1" name="lg-form1" method="post" >             
			  <div class="input-field col s12 m12 l12">
                 <label for="oldp" class="red-text">Old Password:</label>
               <input id="oldp" type="password" name="oldp" autocomplete="off" class="form-control" onchange="passwordcompare();" required>
				<span  id="errorpass" class="dsNone error red-text"></span>
              </div>
              <div class="input-field col s12 m12 l12">
                 <label for="newp" class="red-text">New Password:</label>
               <input id="newp" type="password" name="newp" autocomplete="off" class="form-control"  required>
              </div>
			<input type="hidden" value="<?php echo $reviewid; ?>" name="reviewid">
                <div class="input-field col s12 m12 l12">
                    <button class="btn btn-default btn-lg button" type="submit" name="submit"><b>Submit</b>
                    </button>
                </div>
			</form>
			</div>
		</div>
            

</div>
</section>

<?php include('footer.php');
}else
{
	echo "<script type='text/javascript'> window.location='couponlogin.php'</script>";
	
}
	
?>