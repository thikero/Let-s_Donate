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

?>
<h3 style="margin: 20px;">Charities</h3>
<div class="row" style="position: relative;">
  <div class="col-md-4 w3-hover-shadow">
  <img src="images/climate.jpg" style="border-radius: 10px;width: 300px;height: 200px;margin-top: 10px;margin-left: 10px;">
        <h4>
        	<?php
        		echo $charity_name[0];
        	?>
        </h4>
  </div>

  <div class="col-md-4 w3-hover-shadow">
  <img src="images/climate.jpg" style="border-radius: 10px;width: 300px;height: 200px;margin-top: 10px;margin-left: 10px;">
        <h4>
        	<?php
        		echo $charity_name[1];
        	?>
        </h4>
  </div>
 
  <div class="col-md-4 w3-hover-shadow">
  <img src="images/climate.jpg" style="border-radius: 10px;width: 300px;height: 200px;margin-top: 10px;margin-left: 10px;">
        <h4>
        	<?php
        		echo $charity_name[2];
        	?>
        </h4>
  </div>
  </div>
  <div class="clearfix"></div>
  <a href="charities.php" class="w3-btn-floating-large w3-tooltip" style="background-color: #FC8213;float: right;"><i class="fa fa-mail-forward"></i></a>
</div>
<!--inner block end here-->
<!--copy rights start here-->
<div class="copyrights">
	 <p> Design by  <a href="#" target="_blank">.....</a> </p>
</div>	

   