<?php require_once('menu.php') ?>
<?php require_once('connect.php') ?>

<div class="inner-block ">
<!--market updates updates-->
	 <div class="market-updates">
	 	<a href="bankinfo.php">
			<div class="col-md-4 market-update-gd">
				<div class="market-update-block clr-block-1">
					<div class="col-md-8 market-update-left">
				
						<h4>Blood Bank</h4>
						<p>More Infomation</p>
					</div>
					<div class="col-md-4 market-update-right">
						<i class="fa fa-tint" style="font-size: 80px;color: #fff;"> </i>
					</div>
				  <div class="clearfix"> </div>
				</div>
			</div>
			</a>
			<a href="bankinfo.php">
			<div class="col-md-4 market-update-gd">
				<div class="market-update-block clr-block-2">
				 <div class="col-md-8 market-update-left">
					
					<h4>Eye Bank</h4>
					<p>More Infomation</p>
				  </div>
					<div class="col-md-4 market-update-right">
						<i class="fa fa-eye"> </i>
					</div>
				  <div class="clearfix"> </div>
				</div>
			</div>
			</a>
			<a href="bankinfo.php">
			<div class="col-md-4 market-update-gd">
				<div class="market-update-block clr-block-3">
					<div class="col-md-8 market-update-left">
						
						<h4>Body Part</h4>
						<p>More Infomation</p>
					</div>
					<div class="col-md-4 market-update-right">
						<i class="fa fa-user"  style="font-size: 80px;color: #fff;"> </i>
					</div>
				  <div class="clearfix"> </div>
				</div>
			</div>
			</a>
		   <div class="clearfix"> </div>
		</div>
<!--market updates end here-->
<!--get data from database-->
<?php
$query="select charity_name from charity";
try{
$charity_name=mysqli_query($connect,$query);	
}
catch(Exception $e)
{
	echo $e;
}
$charity=mysqli_fetch_assoc($charity_name);
?>

<h3 style="margin: 20px;color:#FC8213 ">Charities</h3>

<div class="row" style="position: relative;">
<a href="charitiesinfo.php">
  <div class="col-md-3">
  <div class="polaroid">
  <img src="images/climate.jpg" style="width:100%;"><!--<?php/*echo $charity["photo"]*/ ?>-->
        <h4>
        	<?php
        		
        		echo $name["charity_name"];
        	?>
        </h4>
  </div>
  </div>
</a>

  <a href="charitiesinfo.php">
  <div class="col-md-3">
  <div class="polaroid">
  <img src="images/climate.jpg" style="width:100%;">
        <h4>
        	<?php
        		$charity=mysqli_fetch_assoc($charity_name);
        		echo $name["charity_name"];
        	?>
        </h4>
  </div>
  </div>
</a>
 
  <a href="charitiesinfo.php">
  <div class="col-md-3">
  <div class="polaroid">
  <img src="images/climate.jpg" style="width:100%;">
        <h4>
        	<?php
        		$charity=mysqli_fetch_assoc($charity_name);
        		echo $name["charity_name"];
        	?>
        </h4>
  </div>
  </div>
</a>
<a href="charitiesinfo.php">
  <div class="col-md-3">
  <div class="polaroid">
  <img src="images/climate.jpg" style="width:100%;">
        <h4>
        	<?php
        		$charity=mysqli_fetch_assoc($charity_name);
        		echo $name["charity_name"];
        	?>
        </h4>
  </div>
  </div>
</a>
  </div>
  <div class="clearfix"></div>
  <a href="charities.php" class="hvr-icon-wobble-horizontal" style="float: right;padding: 2% 4%;color:#FC8213 ">More</a>
</div>
<!--inner block end here-->
<!--copy rights start here-->
<div class="copyrights">
	 <p> Design by  <a href="#" target="_blank">.....</a> </p>
</div>	

