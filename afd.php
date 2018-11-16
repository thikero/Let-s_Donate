
<?php
  require('menu.php');
  require('connect.php');
  if(isset($_GET['selected_index']))
  {
    $vi=$_GET['selected_index'];
  }
  else {
      $vi=0;
  }
?>
<!--inner block start here-->
<body onload="csi()">
<div class="inner-block">
    <h2>Posts</h2>
    <div class="row">
    <div class="col-md-8">
    	 <p style="padding: 2% 0%">View by
         <!-- view_by() is at the end of the inner block. -->
<select name="view_by" id="view_by" onchange="viewby_function()">
  <option value="all">All</option>
  <option value="blood">Blood</option>
  <option value="liver">Liver</option>
  <option value="kidney">Kidney</option>
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
				<form name="poster" id="poster" action="create_post.php" method="post">
        <p id="ph_error" class="ph_error" name="ph_error" style="display:none;">Here I AM</p>
					<input type="text" name="phone_number" id="phone_number" placeholder="Phone number" required="" onblur="phone_number()">


          <input type="email" name="email" id="email" placeholder="email" required="" >
					 <p style="padding: 4% 2%">Blood Type
						<select name="blood_type" required="">
  							<option value="o">O</option>
  							<option value="a">A</option>
  							<option value="b">B</option>
  							<option value="ab">AB</option>

</select></p>
					<span style="color: #FC8213;margin-left: 5%"><input type="radio" name="type" value="blood" checked="true"> Blood</span>
					<span style="color: #FC8213;"><input type="radio" name="type" value="kidney"> Kidney</span>
					<span style="color: #FC8213;"><input type="radio" name="type" value="liver"> Liver</span>
					<textarea name="description" id="description" rows="8" cols="30" style="margin: 4% 2%">Description...</textarea>
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
    <?php
    /*get posts according to view by*/
    if(isset($_GET['view_by']))
    {
      $view_by=$_GET['view_by'];
        if($view_by!=all)
        {
            $query="select * from post where post_type='".$view_by."';";
        }
        else
        {
            $query="select * from post;";
        }
    }
    else
    {
        $query="select * from post;";
    }
    $fetch=mysqli_query($connect,$query);

    while($result=mysqli_fetch_assoc($fetch) )
    {
      $op_id=$result['user_id'];
      $op_query="select * from user where user_id=".$op_id.";";
      $op_fetch=mysqli_query($connect,$op_query);
      $op_result=mysqli_fetch_assoc($op_fetch);
    ?>
      <div class="row"  style="margin-top:5em">
          <div class="malorm-bottom" style="box-shadow: 0 2px 5px 0 rgba(0, 0, 0, 0.2), 0 4px 10px 0 rgba(0, 0, 0, 0.19);width: 80%">
            <img src="<?php echo $op_result['user_photo'];?>" class="malorum-pro"/>

             <h4 style="margin-left: 6.5em">Melorum</h4> <span><?php echo $result['post_time']; ?></span>
            <p style="margin-left: 0% !important">
            <spam style="color:#FC8213">Blood type:</spam><?php echo $result['post_blood_type']; ?></br>
            <spam style="color:#FC8213">Phone:</spam><?php echo $result['post_phone_number']; ?></br>
            <spam style="color:#FC8213">Location:</spam><?php echo $op_result['user_location']; ?></br>
            <spam style="color:#FC8213">Description:</spam><?php echo $result['post_description']; ?>
            </p>
            <a href="wantdonateblood.php" class="hvr-icon-bounce" style="left: 20%;">I want to donate</a>
          </div>
        </div>
      <?php
      }
      ?>


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
    <script type="text/javascript">

    //set view by results to php to get data from database
    function viewby_function()
    {
      var V_By=document.getElementById('view_by').value;
      var s_index=document.getElementById('view_by').options.selectedIndex;
      window.location.href="afd.php?selected_index="+s_index+"&view_by="+V_By;
    }
    //this function is not working.Still working on it.
    function phone_number()
    {
      var phone_number=document.getElementById("phone_number").value;
      if(phone_number.match(/^\d{11}$/))
        {
          document.getElementById("ph_error").style.display="none";
        }
        else {

            document.getElementById("ph_error").style.display="block";
            phone_number="";
        }
    }
    //change the selected index of view by
    function csi()
    {
      var vt=<?php echo $vi; ?> ;
      var si=parseInt(vt);
      document.getElementById('view_by').options.selectedIndex=si;
    }
    </script>
</div>
</div>
</div>
</div>

<!--inner block end here-->
</body>
