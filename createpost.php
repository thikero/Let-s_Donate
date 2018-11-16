 <?php session_start();
if(isset($_SESSION['email'])){
    require('menusignin.php');
    }
    else{
        require('menu.php');
        }?>	
<!--inner block start here-->
<div class="signup-page-main">
 <div class="signup-main">  	
    	<div class="signup-head">
				<h1>Create post</h1>
			</div>
			<div class="signup-block">
				<form action="afd.php" method="post">
					<input type='tel' pattern="^\d{2}-\d{3}-\d{3}-\d{3,4}$" placeholder="09-XXX-XXX-XXXX" name="phno" required="">
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