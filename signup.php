<?php 
require('connect.php');

?>
<!DOCTYPE HTML>
<html>
<head>
<title></title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<script type="text/javascript" src="js/formden.js"></script>

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all">
<!-- Custom Theme files -->
<link href="css/style.css" rel="stylesheet" type="text/css" media="all"/>
<!--js-->
<script src="js/jquery-2.1.1.min.js"></script> 
<!--icons-css-->
<link href="css/font-awesome.css" rel="stylesheet"> 
<link rel="stylesheet" type="text/css" href="css/w3css.css">
<link href="css/hovers.css" rel="stylesheet" media="all">
<link href="css/demo-page.css" rel="stylesheet" media="all">
<!--static chart-->



<!--skycons-icons-->
<script src="js/skycons.js"></script>
<!--//skycons-icons-->
</head>
<body style="background: -webkit-linear-gradient(left,rgba(252, 130, 19, 0),rgba(252, 130, 19, 1)); /*Safari 5.1-6*/
  background: -o-linear-gradient(right,rgba(252, 130, 19, 0),rgba(252, 130, 19, 1)); /*Opera 11.1-12*/
  background: -moz-linear-gradient(right,rgba(252, 130, 19, 0)),rgba(252, 130, 19, 1)); /*Fx 3.6-15*/
  background: linear-gradient(to right, rgba(252, 130, 19, 0), rgba(252, 130, 19, 1)); 
     width: 100%;height: 100%;margin: 0 0;">	


<!--scrolling js-->
		<script src="js/jquery.nicescroll.js"></script>
		<script src="js/scripts.js"></script>
		<!--//scrolling js-->
<script src="js/bootstrap.js"> </script>
<!-- mother grid end here-->

<!--inner block start here-->
<script type="text/javascript">
function AjaxFunction()
{
var httpxml;
try
  {
  // Firefox, Opera 8.0+, Safari
  httpxml=new XMLHttpRequest();
  }
catch (e)
  {
  // Internet Explorer
		  try
   			 		{
   				 httpxml=new ActiveXObject("Msxml2.XMLHTTP");
    				}
  			catch (e)
    				{
    			try
      		{
      		httpxml=new ActiveXObject("Microsoft.XMLHTTP");
     		 }
    			catch (e)
      		{
      		alert("Your browser does not support AJAX!");
      		return false;
      		}
    		}
  }
function stateck() 
    {
    if(httpxml.readyState==4)
      {
//alert(httpxml.responseText);
var myarray = JSON.parse(httpxml.responseText);
// Remove the options from 2nd dropdown list 
for(j=document.testform.subcat.options.length-1;j>=0;j--)
{
document.testform.subcat.remove(j);
}


for (i=0;i<myarray.data.length;i++)
{
var optn = document.createElement("OPTION");
optn.text = myarray.data[i].subcategory;
optn.value = myarray.data[i].subcat_id;  // You can change this to subcategory 
document.testform.subcat.options.add(optn);

} 
      }
    } // end of function stateck
	var url="dd.php";
var cat_id=document.getElementById('s1').value;
url=url+"?cat_id="+cat_id;
url=url+"&sid="+Math.random();
httpxml.onreadystatechange=stateck;
//alert(url);
httpxml.open("GET",url,true);
httpxml.send(null);
  }
</script>

<div class="signup-page-main">
     <div class="signup-main">  

    	 <div class="signup-head">
				<h1>Sign Up</h1>
			</div>
			<div class="signup-block">
				<form action="signupinsert.php" method="POST" name="testform">
					Choose Profile picture : <input type="file" name="photo" id="photo" value="" required="" style="float: right;margin: 5% 0 5% 0" />
					<input type="text" name="username" placeholder="Name" required="">
					<input type="email" name="email" placeholder="Email" required="">
					<input type="password" name="password" class="lock" placeholder="Password" required="">
					<input class="form-control" id="date" name="date" placeholder="Date of birth(MM/DD/YYYY)" type="text" required=""/>
					<input type='tel' pattern="^\d{2}-\d{3}-\d{3}-\d{3,4}$" placeholder="09-XXX-XXX-XXXX" name="phno" required="">
					
				

<?Php

require "connect.php";// connection to database 

echo "<br>Choose City first <select name=cat id='s1' onchange=AjaxFunction(); style='margin-left:20%;line-height:20px;'   required='' >
<option value=''>Select One</option>";

$sql="select * from location "; // Query to collect data from table 

foreach ($conn->query($sql) as $row) {
echo "<option value=$row[cat_id] >$row[category]</option>";
}
?>
</select>
<br>
Choose Township 
<select name=subcat id='s2' style='margin-left:18%;margin: 20px 0 20px 18%;' required="">

</select>
<br>
					<p style="margin: 1% 0 5% 0%;float: left;">Blood Type </p>
					<select name="bloodtype" style="margin: 1% 0 5% 33%;width: 30%" required="">
  						<option value="O">O</option>
  						<option value="A">A</option>
  						<option value="B">B</option>
  						<option value="AB">AB</option>
					</select>
					<input type="submit" name="signup" value="Sign up">														
				</form>
				<div class="sign-down">
				<h4>Already have an account? <a href="signin.php"> Sign in here.</a></h4>
				 <h4><a href="javascript:history.go(-1)">Go to back</a></h4>
				</div>
			</div>
</div>
</div>
<!--inner block end here-->
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


                      
						
