<?php require('menu.php') ?>
<?php  require('connect.php') ?>
<!--inner block start here-->
<div class="signup-page-main">
     <div class="signup-main">
    	 <div class="signup-head">
				<h1>Sign Up</h1>
			</div>
			<div class="signup-block">
				<form name="signup" id="signup" action="signin.php" method="post">
					<input type="text" name="email" placeholder="Name" required="">
					<input type="text" name="email" placeholder="Email" required="">
					<input type="password" id="password" name="password" class="lock" placeholder="Password">
					<input class="form-control" id="date" name="date" placeholder="Date of birth(MM/DD/YYYY)" type="text"/>
					<input type='tel' pattern='[0-9]{2}-[0-9]{3}-[0-9]{*}' placeholder="12-123-12345">
					<p style="margin: 3% 1%;float: left;">Location </p>
					<select id="city" name="city" style="margin: 3% 10%;width: 30%" onChange="set_the_select()" >
              <option value="" selected="selected"></option>
  						<option value="1">Yangon</option>
  						<option value="2">Manadalay</option>
					</select>
          <select name="location" id="location" style="margin: 3% 1%;float: right;width: 30%">
                <option value="">Select city first</option>
          </select>
          <script type="text/javascript">
          function set_the_select()
          {
            document.signup.location.options.length=0;
            var city=document.signup.city.value;
            if (city==1) {
              document.signup.location.options[0]=new Option('yangon_a','a');
              document.signup.location.options[1]=new Option('yangon_e','e');
              document.signup.location.options[2]=new Option('yangon_d','d');
              document.signup.location.options[3]=new Option('yangon_c','c');
              document.signup.location.options[4]=new Option('yangon_b','b');
            }
            else if (city==2) {
              document.signup.location.options[0]=new Option('m_1','a');
              document.signup.location.options[1]=new Option('m_2','e');
              document.signup.location.options[2]=new Option('m_3','d');
              document.signup.location.options[3]=new Option('m_4','c');
              document.signup.location.options[4]=new Option('m_4','b');
            }
            else {
              document.signup.location.options[4]=new option('selectcityfirst','b');
            }

          };
          </script>
					</br>
					<p style="margin: 3% 1%;float: left;">Blood Type </p>
					<select name="City" style="margin: 3% 1%;float: right;width: 63%">
  						<option value="O">O</option>
  						<option value="A">A</option>
  						<option value="B">B</option>
  						<option value="AB">AB</option>
					</select>
					<input type="submit" name="Sign In" value="Sign up">
				</form>
				<div class="sign-down">
				<h4>Already have an account? <a href="signin.php"> Sign in here.</a></h4>

				</div>
			</div>
    </div>
</div>

<!--inner block end here-->
<!--copy rights start here-->
<div class="copyrights">
	 <p>Design by  ......</p>
</div>
<!--COPY rights end here-->
<script type="text/javascript">
	$(function (){$('#datepick').datetimepicker();});
</script>
<!--scrolling js-->
		<script src="js/jquery.nicescroll.js"></script>
		<script src="js/scripts.js"></script>
		<!--//scrolling js-->
<script src="js/bootstrap.js"> </script>
<!-- mother grid end here-->
<script type="text/javascript" src="js/jquery-1.11.3.min.js"></script>

<!-- Include Date Range Picker -->
<script type="text/javascript" src="js/bootstrap-datepicker.min.js"></script>
<link rel="stylesheet" href="css/bootstrap-datepicker3.css"/>

<script>
	$(document).ready(function(){
		var date_input=$('input[name="date"]'); //our date input has the name "date"
		var container=$('.bootstrap-iso form').length>0 ? $('.bootstrap-iso form').parent() : "body";
		date_input.datepicker({
			format: 'mm/dd/yyyy',
			container: container,
			todayHighlight: true,
			autoclose: true,
		})
	})
</script>
</body>
</html>
