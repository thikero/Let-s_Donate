<?php 
session_start();
if(isset($_SESSION['email'])){
    require('menusignin.php');
    }
    else{
        require('menu.php');
        } ?>
<!--inner block start here-->
<div class="inner-block">
    <h2>Posts</h2>
    <div class="row">
    <div class="col-md-8">
    	 <p style="padding: 2% 0%">View by 
<select name="location">
  <option value="volvo">Blood</option>
  <option value="saab">Liver</option>
</select></p>
    </div>
    <?php if(isset($_SESSION['email'])){ ?>
	<div class="col-md-4">
    	 <a href="createpost.php" class="hvr-icon-bounce" style="width:55%;"  id="myBtn">Ask for donation</a>
    </div>
    <?php }
     ?>
	</div>
<div class="row justify-content-around">
	<div class="col-md-8">
	<div class="row"  style="margin-top:5em">
			<div class="malorm-bottom" style="box-shadow: 0 2px 5px 0 rgba(0, 0, 0, 0.2), 0 4px 10px 0 rgba(0, 0, 0, 0.19);width: 80%">
				<img src="images/b3.png" class="malorum-pro"/>
			     
				 <h4 style="margin-left: 6.5em">Melorum</h4> <span>10.4.2018</span>
				<p style="margin-left: 0% !important">
				<spam style="color:#FC8213">Blood type:</spam> AB</br>
				<spam style="color:#FC8213">Phone:</spam> 09 1558495625</br>
				<spam style="color:#FC8213">Location:</spam> lkjoijijk jiojoij joijoi joijoij ijoij</br>
				<spam style="color:#FC8213">Description:</spam> uhijio uhijoi uhiojoi uhuij uhjij jijoih uhijio uhijoi uhiojoi uhuij uhjij jijoih uhijio uhijoi uhiojoi uhuij uhjij jijoih uhijio uhijoi uhiojoi uhuij uhjij jijoih uhijio uhijoi uhiojoi uhuij uhjij jijoih uhijio uhijoi uhiojoi uhuij uhjij jijoih uhijio uhijoi uhiojoi uhuij uhjij jijoih 
				</p>
				<?php if(isset($_SESSION['email'])){ ?><a href="wantdonateblood.php" class="hvr-icon-bounce" style="left: 55%;">I want to donate</a><?php } ?>
			</div>
		</div>
		<div class="row"  style="margin-top:5em">
			<div class="malorm-bottom" style="box-shadow: 0 2px 5px 0 rgba(0, 0, 0, 0.2), 0 4px 10px 0 rgba(0, 0, 0, 0.19);width: 80%">
				<img src="images/b3.png" class="malorum-pro"/>
			     
				 <h4 style="margin-left: 6.5em">Melorum</h4> <span>10.4.2018</span>
				<p style="margin-left: 0% !important">
				<spam style="color:#FC8213">Blood type:</spam> AB</br>
				<spam style="color:#FC8213">Phone:</spam> 09 1558495625</br>
				<spam style="color:#FC8213">Location:</spam> lkjoijijk jiojoij joijoi joijoij ijoij</br>
				<spam style="color:#FC8213">Description:</spam> uhijio uhijoi uhiojoi uhuij uhjij jijoih uhijio uhijoi uhiojoi uhuij uhjij jijoih uhijio uhijoi uhiojoi uhuij uhjij jijoih uhijio uhijoi uhiojoi uhuij uhjij jijoih uhijio uhijoi uhiojoi uhuij uhjij jijoih uhijio uhijoi uhiojoi uhuij uhjij jijoih uhijio uhijoi uhiojoi uhuij uhjij jijoih 
				</p>
				<a href="wantdonateblood.php" class="hvr-icon-bounce" style="left: 55%;">I want to donate</a>
			</div>
		</div>
	
</div>
<div class="col-md-4" style="background-color: #fff;box-shadow: 0 2px 5px 0 rgba(0, 0, 0, 0.2), 0 4px 10px 0 rgba(0, 0, 0, 0.19);margin-top: 5%;">
	<div class="row ">
    	 <a href="#" class="hvr-icon-drop" style="width: 60%; margin-left: 15%;border-radius: 5px">Search Donator by location</a>
    </div>
    <div class="row ">
    <a href="memberinfo.php">
    <div class="malorm-bottom">
    <div class="col-md-4">
    	 <img src="images/b3.png" />
    	</div>
    	<div class="col-md-6" style="margin-top: 3%;">
    	 <p>Member 1</p>
    	 <p>09 459 596 5656</p>
    	 <p>Blood type : AB</p>
    </div>
    </div>
    </a>
    </div>
    <hr>
    <div class="row " style="padding:  1% 5%">
    <a href="memberinfo.php">
    <div class="col-md-4" >
    	 <img src="images/b3.png" />
    	</div>
    	<div class="col-md-6" style="margin-top: 10%">
    	 <p>Member 1</p>
    	 <p>09 459 596 5656</p>
    	 <p>Blood type : AB</p>
    
    </div>
    </a>
    </div>
    <hr>
    <div class="row " style="padding:  1% 5%">
    <a href="memberinfo.php">
    <div class="col-md-4" >
    	 <img src="images/b3.png" />
    	</div>
    	<div class="col-md-6" style="margin-top: 10%">
    	 <p>Member 1</p>
    	 <p>09 459 596 5656</p>
    	 <p>Blood type : AB</p>
    
    </div>
    </a>
    </div>
    <hr>
</div>
</div>
</div>
</div>
<!--inner block end here-->




                      
						
