<?php require('menu.php') ?>
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
	<div class="col-md-4">
    	 <a href="#" class="hvr-icon-bounce" style="width:70%;"  id="myBtn">Ask for donation</a>
    </div>
	</div>
	<!-- The Modal -->
<div id="myModal" class="modal">

  <!-- Modal content -->
  <div class="modal-content">
    <div class="modal-header">
      <span class="close"><i class="glyphicon glyphicon-remove"></i></span>
      <h2 style="text-align: center;">Please Fill the Form</h2>
    </div>
    <div class="modal-body">
      <!--inner block start here-->

     <div class="signup-main">  	
    	
			<div class="signup-block">
				<form action="afd.php" method="post">
					<input type="text" name="text" placeholder="Phone number" required="" pattern="[0-9]{2}-[0-9]{3}-[0-9]{3}-[0-9]{*}">
					 <p style="padding: 4% 2%">Blood Type
						<select name="bloodtype" required="">
  							<option value="o">O</option>
  							<option value="a">A</option>
  							<option value="b">B</option>
  							<option value="ab">AB</option>

</select></p>
					<span style="color: #FC8213;margin-left: 5%"><input type="radio" name="type" value="blood"> Blood</span>
					<span style="color: #FC8213;"><input type="radio" name="type" value="kidney"> Kidney</span>	
					<span style="color: #FC8213;"><input type="radio" name="type" value="liver"> Liver</span>
					<textarea name="message" rows="8" cols="30" style="margin: 4% 2%">Description...</textarea>
					<input type="submit" name="createpost" value="Create Post">														
				</form>
				
			</div>
    </div>

    </div>
  
  </div>

</div>

<script>
// Get the modal
var modal = document.getElementById('myModal');

// Get the button that opens the modal
var btn = document.getElementById("myBtn");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks the button, open the modal
btn.onclick = function() {
    modal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
    modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script>
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
				<a href="wantdonateblood.php" class="hvr-icon-bounce" style="left: 20%;">I want to donate</a>
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
				<a href="#" class="hvr-icon-bounce" style="left: 20%;">I want to donate</a>
			</div>
		</div>
	
</div>
<div class="col-md-4" style="background-color: #fff;box-shadow: 0 2px 5px 0 rgba(0, 0, 0, 0.2), 0 4px 10px 0 rgba(0, 0, 0, 0.19);margin-top: 5%;">
	<div class="row ">
    	 <a href="#" class="hvr-icon-drop" style="width: 60%;">Search Donator by location</a>
    </div>
    <div class="row " style="padding: 1% 5%">
    <div class="col-md-4" >
    	 <img src="images/b3.png" />
    	</div>
    	<div class="col-md-6" style="margin-top: 3%">
    	 <p>Member 1</p>
    	 <p>09 459 596 5656</p>
    	 <p>Blood type : AB</p>
    </div>
    </div>
    <hr>
    <div class="row " style="padding:  1% 5%">
    <div class="col-md-4" >
    	 <img src="images/b3.png" />
    	</div>
    	<div class="col-md-6" style="margin-top: 10%">
    	 <p>Member 1</p>
    	 <p>09 459 596 5656</p>
    	 <p>Blood type : AB</p>
    
    </div>
    </div>
    <hr>
    <div class="row " style="padding:  1% 5%">
    <div class="col-md-4" >
    	 <img src="images/b3.png" />
    	</div>
    	<div class="col-md-6" style="margin-top: 10%">
    	 <p>Member 1</p>
    	 <p>09 459 596 5656</p>
    	 <p>Blood type : AB</p>
    
    </div>
    </div>
    <hr>
</div>
</div>
</div>
</div>
<!--inner block end here-->




                      
						
