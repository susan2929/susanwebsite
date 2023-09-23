<?php
if(isset($_POST['add'])){
$server="localhost";
$username="root";
$password="";
$db="port";

//connecting database
$con= mysqli_connect($server,$username,$password,$db);

//getting data from form to php
$username=$_POST['fullname'];
$number=$_POST['number'];
$email=$_POST['email'];

//inserting data to database
$qu="INSERT INTO `detail`(`fullname`, `phone`, `email`) VALUES ('$username','$number','$email')";

//despleying the result
$result= mysqli_query($con,$qu);

//checking the result
if($result)
{
	echo"<script>alert('data inserted')</script>";
}
else
{
	echo"<script>alert('error......!')</script>";
}

}
?>





<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
	<title>susan acharya</title>
</head>
<body>
<!--first page-------------------------------------------------------------------------------------------->
<div id="first">


<!--nav and logo section------------------------->
	<div class="hell">

	<div class="nav">
		<ul>
			<li><a href="#first">home</a></li>
			<li><a href="#second">about</a></li>
			<li><a href="#last">contact</a></li>
		</ul>
	</div>

	<div class="logo">
		<img src="logo 2.PNG">

	</div>

</div>
<!--end of nav and logo section---------------------->



<!--main body section---------------------->
<div class="main1">

	<h1> hi everyone !</h1>
	<h2>I am Susan <span>Acharya</span></h2>
	<p><span>web</span> Designer<span> and </span>Developer </p>

  <div class="btn1">
	<a href="hire.php" target="_blank">hire me</a>
	</div>


</div>
<!--end of main body section---------------------->

</div>
<!-- end of first page------------------------------------------------------------------------------------------->

<!--second page------------------------------------------------------------------------------------------->
<div id="second">

	<h1>about</h1>

<div class="container">

	<div class="pic">
	
	</div>
	
   <div class="text">
   	 <h2><span>about </span>me</h2>
   	 <p>I am a web developer and designer. I have graduated from damak multiple campus on the course BCA(Bachelor In Computer Application).I am currently working in web development field and i have done more than 50 projects.</p>

   	 <div class="btn2">
   	 	<a href="web.pdf" target="_blank">download cv</a>
   	 </div>




   </div>



</div>


	
</div>
<!--end of second page------------------------------------------------------------------------------------------->

<!--last page------------------------------------------------------------------------------------------->
<div id="last">
	<h1><span>contact</span></h1>
	<h2>for more information </h2>


	<form method="post" action="">
<div class="form">

   <div class="input">
   
  
  <label for="fname">full name</label><br>
  <input type="text"Id="username" name="fullname"><br>
  

  <label for="lname">phone number</label><br>
  <input type="number" id="number" name="number"><br>

    <label for="lname">email</label><br>
  <input type="email" id="email" name="email"><br><br>

  </div>

   <div class="btn3">
  <input type="submit" value="submit" name="add">
  </div>

</form>

  <div class="final">
  	<h5>and do visit</h5>

  	<div class="ico">
  		
  	<i class="fa-brands fa-facebook"></i>
  	<i class="fa-brands fa-skype"></i>
  	<i class="fa-brands fa-google"></i>
  	<i class="fa-brands fa-whatsapp"></i>

  </div>

  <div class="footer">
  	<p>copyright2022&copysusanacharya</p>
  </div>




</div>




<!--end of last page------------------------------------------------------------------------------------------->


</body>
</html>