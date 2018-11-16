<?php
session_start();
if(isset($_SESSION['email'])){
    require('menusignin.php');
    }
    else{
        require('menu.php');
        }?>
<!--inner block start here-->
<div class="inner-block">
<h2 style="top: 0%;padding-bottom: 5%">Member's Information</h2>
<div class="row justify-content-around">
	<div class="col-md-9">
	<div class="row"  style="margin-top:4em;margin-left: 15%;">
			<div class="malorm-bottom" style="box-shadow: 0 2px 5px 0 rgba(0, 0, 0, 0.2), 0 4px 10px 0 rgba(0, 0, 0, 0.19);width: 80%">
				<img src="images/b3.png" class="malorum-pro"/>
			     
				 <h4 style="margin-left: 6.5em">Melorum</h4>
				<p style="margin-left: 0% !important;line-height: 30px">
				<spam style="color:#FC8213">Date fo birth  :  </spam> 4/11/1990</br>
				<spam style="color:#FC8213">Blood type  :  </spam> AB</br>
				<spam style="color:#FC8213">Phone  :  </spam> 09 1558495625</br>
				<spam style="color:#FC8213">Email  :  </spam> user1@gmail.com</br>
				<spam style="color:#FC8213">Location  :  </spam> lkjoijijk jiojoij joijoi joijoij ijoij lkjoijijk jiojoij joijoi joijoij ijoij</br>
			
				</p>
				
			</div>
		</div>
		
		</div>
	</div>
</div>