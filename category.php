<?php 
include 'headercoupon.php';
?>
<section class="wrapper">
<section class="page_head">
	<div class="container">
		<div class="row">
			<div class="col-lg-12 col-md-12 col-sm-12">
				<div class="page_title">
					<h2>Category</h2>
				</div>
				<nav id="breadcrumbs">
					<ul>
						<li><a href="index.php">Home</a>/</li>
						<li>Category</li>
					</ul>
				</nav>
			</div>
		</div>
	</div>
</section>
        <div class="container">
            <div class="row sub_content">
            <div class="col-lg-12 col-md-12 col-sm-12">
                <div class="table-responsive">
                    <table class="table table-striped table-hover">
                        <tbody>
                            <?php
										$sql="SELECT * from productcategorydetail ORDER BY NAME  ";
										$result=mysqli_query($con,$sql);
										$i=0;
										while($row = mysqli_fetch_array($result))
										{
											$cid=$row['ID'];
											if(($i%3)==0)
											{
												echo "<tr>";
											}
										 ?><td align="left">
										<a href="categorypage.php?categoryid=<?php echo $cid; ?>" class="black-text" style="font-size:10;" ><img class="responsive circle" width="20px" height="20px" src="images/<?php echo $row['IMAGE'];?>" style="margin-right:5px;"> <?php $cname=$row['NAME']; echo $cname;?></a>
										</td><?php
											if(($i%3)==2)
											{
												echo "</tr>";
											}
											$i++;
										}
										?>
                             
                        
                        </tbody>
                    </table>
                </div>
            </div>
        </div> <!--./row-->


        </div>
		</section>
<?php include 'footer.php';?>
</footer>
</html>
