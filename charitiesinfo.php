<?php require('menu.php') ?>
<?php require_once('connect.php') ?>
<div class="inner-block">
<h2>Charities</h2>
  <p style="padding: 2% 0%">Location:
<?php
  $id=$_GET['id'];
  echo $id;
  $query="Select * from charity where charity_id=".$id.";";
  $fetch=mysqli_query($connect,$query);
  $result=mysqli_fetch_assoc($fetch);
 ?>
</p>
 <div class="clearfix"></div>
 <div class="container">
 <div class="row" style="position: relative;max-width: 100%;width: 100%;">
 <div class="col-md-3" style="border-radius: 10px;margin-top: 5% ">
 <img src="<?php echo $result['charity_photo']; ?>" height="200" width="200"/><!---->
</div>
 <div class="col-md-8 d-inline bg-success" style="border-radius: 10px;padding: 5% 8%">

   			<p style="padding: 2% 0%;"><spam style="color:#FC8213">Name</spam><?php echo $result['charity_name']; ?></p>
   			<p style="padding: 2% 0%;"><spam style="color:#FC8213">Description</spam>: <?php echo $result['charity_discription']; ?></p>
   			<p style="padding: 2% 0%"><spam style="color:#FC8213">Facebook Page:</spam><?php echo $result['charity_facebook']; ?></p>
   			<p style="padding: 2% 0%"><spam style="color:#FC8213">Ph No.:</spam><?php echo $result['charity_phone_no']; ?></p>
   			<p style="padding: 2% 0%"><spam style="color:#FC8213">Address:</spam><?php echo $result['charity_address']; ?></p>

   	 </div>
     </div>
   </div>
</div>

</div>
