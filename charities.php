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

//rows
$row_amount=mysqli_num_rows($charity_data);
for($num=0;$num<$row_amount;$num++) {

    //columns
    for($column=0;$column<4;$column++)
    {
      if(!$result=mysqli_fetch_assoc($charity_data))
        {
         break;
        }
      echo'
      <a href="charitiesinfo.php?id='.$result["charity_id"].'">
        <div class="col-md-3" style="border-radius: 10px;box-shadow: 10px">
          <div class="polaroid">
            <img src=".$result["charity_photo"]." style="width:100%;" class="shadow-lg p-3 mb-5 bg-white rounded">
              <h4>'.$result['charity_name'].'</h4>
          </div>
        </div>
      </a>
      ';
    }
}

?>

<div>
</div>
</div>
<!--inner block end here-->
<!--copy rights start here-->
<div class="copyrights">
	 <p> Design by  <a href="#" target="_blank">.....</a> </p>
</div>
