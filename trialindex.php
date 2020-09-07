<!doctype html>
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><html lang="en" class="no-js"> <![endif]-->
<html lang="en">
<?php
include 'header.php';

?>
<script>
$(document).ready(function() {
    $('select').material_select();
  });
</script>
	<script>
$(document).ready(function(){
      $('.slider').slider();
    });
</script>

  <div class="slider">
    <ul class="slides">
      <li>
        <img src="images/adsimage/redf26755.jpg"> <!-- random image -->
        <div class="caption center-align">
          <h3>This is our big Tagline!</h3>
          <h5 class="light grey-text text-lighten-3">Here's our small slogan.</h5>
        </div>
      </li>
      <li>
        <img src="http://lorempixel.com/580/250/nature/2"> <!-- random image -->
        <div class="caption left-align">
          <h3>Left Aligned Caption</h3>
          <h5 class="light grey-text text-lighten-3">Here's our small slogan.</h5>
        </div>
      </li>
      <li>
        <img src="http://lorempixel.com/580/250/nature/3"> <!-- random image -->
        <div class="caption right-align">
          <h3>Right Aligned Caption</h3>
          <h5 class="light grey-text text-lighten-3">Here's our small slogan.</h5>
        </div>
      </li>
      <li>
        <img src="http://lorempixel.com/580/250/nature/4"> <!-- random image -->
        <div class="caption center-align">
          <h3>This is our big Tagline!</h3>
          <h5 class="light grey-text text-lighten-3">Here's our small slogan.</h5>
        </div>
      </li>
    </ul>
  </div>
  <div class="container">
    <div class="section">

      <!--   Icon Section   -->
      <div class="row">
        <div class="col s12 m4">
          <div class="icon-block">
            <h2 class="center light-blue-text lighten-3"><i class="material-icons" style="font-size:50px">flash_on</i></h2>
            <h5 class="center">Aim</h5>

            <p class="light">We provide features through which people can easliy explore best business sellers in city. Our Aim is to provide efficient platform through which vendors can promote their business by advertising. Also people can save their money by getting free coupons online. </p>
          </div>
        </div>

        <div class="col s12 m4">
          <div class="icon-block">
            <h2 class="center light-blue-text lighten-3"><i class="material-icons" style="font-size:50px">group</i></h2>
            <h5 class="center">Mission</h5>

            <p class="light">Building a efficient platform to promote business of all sellers in VallabhVidhyanagar.</p>
          </div>
        </div>

        <div class="col s12 m4">
          <div class="icon-block">
            <h2 class="center light-blue-text lighten-3"><i class="material-icons" style="font-size:50px">settings</i></h2>
            <h5 class="center">Easy to work with</h5>

            <p class="light">We have provided detailed documentation as well as specific code examples to help new users get started. We are also always open to feedback and can 
answer any questions a user may have about Materialize.</p>
          </div>
        </div>
      </div>

    </div>
  </div>
  <div class="divider"></div>
  <div class="card-panel   blue accent-1 row white-text " style="margin:1% 10% 1% 10%;">
      <div class="col s12 m12 l12">
        <div class="row" style="margin:1% 1% 1% 5%">
          
            <div class="input-field white-text col s12 m6 l4" >
             
		  <select class="icons validate " id="select" >
		  <option value="" disabled selected><label for="icon_select">Select Category </label></option>
		  
<?php		 
include('include_db.php');
//$con= new mysqli("localhost","root","","vvnlive") or die("cannot connect");
$sql=mysqli_query($con,"SELECT * FROM categorydetail");
if(mysqli_num_rows($sql)){
while($rs=mysqli_fetch_array($sql)){
	echo "<option value=".$rs['categoryid']. "data-icon="."images"."/"."ad"."."."jpg". "class=" ."left circle"." > ".$rs['categoryname']."</option>";
  }
}

?>
		  
		</select>
             
            </div>
            <div class="input-field  col s12 m6 l4">
              <center>
                <input class="white-text" id="search"  type="text" name="searchv" value="<?php  if(!empty($_SESSION['searchv'])) echo $_SESSION['searchv']; ?>" class="validate" autocomplete="off">
                <label  class="white-text" for="search">Search</label>
              </center>
            </div>
            <div class="input-field col center s12 m12 l4" style="margin-top:23px;">
              <button class="btn waves-effect waves-cyan white blue-text" type="submit" name="submit">
              Search
              </button>
            </div>
          </div>
          </br>
          </br>
        </div>
      </div>
  
  <?php
//include('include_db.php');
  $sql="SELECT * from productcategorydetail order by NAME ";
   $result=mysqli_query($con,$sql);
?>
  <div class="card-section " >
  <h2 class="center black-text lighten-3"><i class="material-icons" style="font-size:80px;margin-top:30px;">language</i></h2>
  <h5 class="center black-text lighten-3"style="margin-bottom:30px">Our Services</h5>
  
   <div class="row">
    <?php
		while($row = mysqli_fetch_array($result))
        {
			$cid=$row['ID'];
         ?>
		
		<div class="view fourth-effect">
			<a href="categorypage.php?categoryid=<?php echo $cid; ?>"><img src="images/<?php echo $row['IMAGE'];?>" ></a>
			<div class="caption1"><br><?php $cname=$row['NAME']; echo $cname;?></div>
			<div class="mask"></div>
		</div>
		
		

		
		<?php   }  ?>
		</div>
		</div>
		
   </body>
 <?php
 include 'footer.php';
?>

</html>