<?php 
  require_once('menu.php') ;
  require_once('connect.php');
?>
<div class="inner-block">
    <div class="product-block">
      <div class="pro-head">
        <h2>Charities</h2>
      </div>
<div class="row" style="position: relative;">
<!--get data from database-->
<?php
$query="select charity_id,charity_name,charity_photo from charity";
$charity_data=mysqli_query($connect,$query);

//row--sizeof(charity_data)
while ($rows=mysql_fetch_assoc($charity_data)) {
    
    for($column=0;$column<4;$column++)
    {
      echo'
      <a href="charitiesinfo.php">
        <div class="col-md-3" style="border-radius: 10px;box-shadow: 10px">
          <div class="polaroid">
            <img src="images/climate.jpg" style="width:100%;" class="shadow-lg p-3 mb-5 bg-white rounded">
              <h4>'.$column.'</h4>
          </div>
        </div>
      </a>';
    }
    
    $row=$row+4;
}

?>

<div>
<!--<div class="row" style="position: relative;">
<a href="charitiesinfo.php">
  <div class="col-md-3" style="border-radius: 10px;box-shadow: 10px">
  <div class="polaroid">
  <img src="images/climate.jpg" style="width:100%;" class="shadow-lg p-3 mb-5 bg-white rounded">
        <h4>Donation Team 1Donation Team 1Donation Team 1Donation Team 1Donation Team 1</h4>
        </div>
  </div>
</a>
<a href="charitiesinfo.php">
  <div class="col-md-3">
  <div class="polaroid">
  <img src="images/climate.jpg" style="width: 100%">
        <h4>Donation Team 2</h4>
  </div>
  </div>
 </a>
<a href="charitiesinfo.php">
  <div class="col-md-3 w3-hover-shadow w3-hover-shadow">
  <div class="polaroid">
  <img src="images/climate.jpg" style="width: 100%">
        <h4>Donation Team 2</h4>
  </div>
  </div>
 </a><a href="charitiesinfo.php">
  <div class="col-md-3 w3-hover-shadow w3-hover-shadow">
  <div class="polaroid">
  <img src="images/climate.jpg" style="width: 100%">
        <h4>Donation Team 2</h4>
  </div>
  </div>

 </a>
 </div>
 <div class="row" style="position: relative;">
 <a href="charitiesinfo.php">
  <div class="col-md-3 w3-hover-shadow w3-hover-shadow">
  <div class="polaroid">
  <img src="images/climate.jpg" style="width: 100%">
        <h4>Donation Team 2</h4>
  </div>
  </div>
 </a><a href="charitiesinfo.php">
  <div class="col-md-3 w3-hover-shadow w3-hover-shadow">
  <div class="polaroid">
  <img src="images/climate.jpg" style="width: 100%">
        <h4>Donation Team 2</h4>
  </div>
  </div>
 </a>

</div>
-->
</div>
</div>
<!--inner block end here-->
<!--copy rights start here-->
<div class="copyrights">
	 <p> Design by  <a href="#" target="_blank">.....</a> </p>
</div>	