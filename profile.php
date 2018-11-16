<?php 
   session_start();
if(isset($_SESSION['email'])){
    require('menusignin.php');
    }
    else{
        require('menu.php');
    }
    
?>
<!--inner block start here-->
<div class="inner-block">
<?php require('connect.php');
    $email=$_SESSION["email"];
    $result = $conn->query("SELECT * FROM user WHERE user_email='$email'");
    $row = $result->fetch();

    ?>
<h2 style="top: 0%;padding-bottom: 5%"><?php echo $row["user_name"] ?>'s Information</h2>
<div class="row justify-content-around">
	<div class="col-md-9">
	<div class="row"  style="margin-top:4em;margin-left: 4%;">
			<div class="malorm-bottom" style="box-shadow: 0 2px 5px 0 rgba(0, 0, 0, 0.2), 0 4px 10px 0 rgba(0, 0, 0, 0.19);width: 80%">
				<img src="<?php echo $row['user_photo'] ?>" class="malorum-pro"/>
			     
				 <h4 style="margin-left: 6.5em"><?php echo $row["user_name"] ?></h4>
				<p style="margin-left: 0% !important;line-height: 40px">
					<spam style="color:#FC8213">Date fo birth  :  </spam> <?php echo $row["user_dob"] ?></br>
					<spam style="color:#FC8213">Blood type  :  </spam> <?php echo $row["user_blood_type"]?></br>
					<spam style="color:#FC8213">Phone  :  </spam> <?php echo $row["user_ph"] ?></br>
					<spam style="color:#FC8213">Email  :  </spam> <?php echo $row["user_email"] ?></br>
					<spam style="color:#FC8213">Location  :  </spam> 
					<?php
					$tsid=$row["user_location_township"];
					$cityid=$row["user_location_city"];
					$ts = $conn->query("SELECT subcategory FROM location_subcategory WHERE subcat_id='$tsid' and cat_id='$cityid'");
    			  	$township = $ts->fetch();
					$city = $conn->query("SELECT category FROM location WHERE cat_id='$cityid'");
    			  	$ci = $city->fetch();
    				echo "$township[subcategory] , "."$ci[category]";?></br>
			</p>
				<a href="javascript:history.go(-1)" class="hvr-underline-from-center" style="float: right;color:#FC8213;width: 15%;border-radius: 5px;"/>Edit</a><a href="javascript:history.go(-1)" class="hvr-underline-from-center" style="float: right;color:#FC8213;width: 15%;border-radius: 5px;"/>Back</a>
				<br>
			</div>
		</div>
		

		</div>

	</div>
</div>