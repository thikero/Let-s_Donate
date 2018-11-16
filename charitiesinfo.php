<?php session_start();
if(isset($_SESSION['email'])){
    require('menusignin.php');
    }
    else{
        require('menu.php');
        };
require_once('dataobject.php');
require_once('getcharity.php');
$charity_id = isset( $_GET["charity_id"] ) ? (int)$_GET["charity_id"] : 0;
if ( !$charitytb = Charities::getcharityid( $charity_id ) ) {
 DataObject::displayPageError();
  exit;
}
?>
<div class="inner-block">
  <h2>Charities</h2>
  <div class="row" style="position: relative;width: 100%;">
    <div class="col-md-3" style="border-radius: 10px;margin-top: 5% ">
      <img src="<?php echo $charitytb->getValueEncoded( 'charity_photo' )?>" height="200" width="200"/>
    </div>
    <div class="col-md-9 d-inline bg-success" style="border-radius: 10px;padding: 5% 8%">
 
   			<p style="padding: 2% 0%;"><spam style="color:#FC8213">Name:</spam> <?php echo $charitytb->getValueEncoded( "charity_name" ) ?></p>
   			<p style="padding: 2% 0%;"><spam style="color:#FC8213">Description</spam>: <?php echo $charitytb->getValueEncoded( "charity_discription" ) ?></p>
   			<p style="padding: 2% 0%"><spam style="color:#FC8213">Facebook Page:<?php echo $charitytb->getValueEncoded( "charity_facebook" ) ?></spam></p>
   			<p style="padding: 2% 0%""><spam style="color:#FC8213">Ph No.:</spam><?php echo $charitytb>getValueEncoded( "charity_phone_no" ) ?></p>
   			<p style="padding: 2% 0%"><spam style="color:#FC8213">Address:</spam><?php echo $charitytb->getValueEncoded( "charity_addressg" ) ?></p>
      
   	 </div>
     </div>
   </div>
<div class="copyrights">
   <p> Design by  <a href="#" target="_blank">.....</a> </p>
</div>

