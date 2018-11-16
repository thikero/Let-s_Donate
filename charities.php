<?php session_start();
if(isset($_SESSION['email'])){
    require('menusignin.php');
    }
    else{
        require('menu.php');
        }
require_once('dataobject.php');
require_once('getcharity.php');
list($charitytb) = Charities::getcharity();
?>
<div class="inner-block">
    <div class="product-block">
      <div class="pro-head">
        <h2>Charities</h2>
      </div>
        <p style="padding: 2% 0%">Type
<select name="location">
  <option value="volvo">Blood</option>
  <option value="saab">All</option>
</select></p>

<div class="row" style="position: relative;">
<?php
        foreach ( $charitytb as $charitytb ) {
      ?>
<a href="charitiesinfo.php?charity_id=<?php echo $charitytb->getValueEncoded( "charity_id" ) ?>">
  <div class="col-md-3">
  <div class="polaroid">
  <img src="<?php echo $charitytb->getValueEncoded( "charity_photo" ) ?>" style="width:100%;">
        <h4  style="height: 87px;"><?php echo $charitytb->getValueEncoded( "charity_name" ) ?></h4>
        </div>
  </div>
</a>
<?php } ?>


</div>

</div>
</div>
<!--inner block end here-->
<!--copy rights start here-->
<div class="copyrights">
	 <p> Design by  <a href="#" target="_blank">.....</a> </p>
</div>	