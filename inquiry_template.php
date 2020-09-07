<?php
include('header.php');

?>

<section class="wrapper">
    <section class="page_head">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="page_title">
                        <h2>Inquiry: Template</h2>
                    </div>
                    <nav id="breadcrumbs">
                        <ul>
                            <li><a href="index.php">Home</a>/</li>
                            <li>Inquiry: Template</li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </section>
    <div class="container">
        <div class="row sub_content">
            <div class="col-lg-6 col-sm-6" style="margin-left: 25%; margin-right: 25%">
                <div class="dividerHeading">
                    <h4><span>Inquiry Form</span></h4>
                </div>
                <form id="inquireform" action="inquiryverify.php?form=inquiry_template" method="post" name="inquireform" action="">
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
				<select name="plan" id="adtype" class="form-control" required>
				<option>Select Ad Type</option>
				<option>A5 Side-1</option>
				<option>A5 Side-2</option>
				<option>A4 Side-1</option>
				<option>A4 Side-2</option>
				<option>A3 Side-1</option>
				<option>A3 Side-2</option>
				</select>	
				</div>
          		
                   
			
                    <div class="form-group" align="center">
                        <button type="submit" name="submit" class="btn btn-default btn-lg button" > Submit</button>
                    </div>

                </form>
            </div>
			