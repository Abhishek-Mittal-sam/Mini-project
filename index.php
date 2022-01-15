<?php
include "navbar.php";
include "connection.php";
?>

<!DOCTYPE html>
<html>
<head>
	<title>
		Online Library Management System
	</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!--	<style type="text/css">
		nav
{
	float: right;
	word-spacing: 30px;
	
}
nav li 
{
	display: inline-block;
	line-height: 80px;
}
	</style>-->



</head>


<body>
<!--	<div class="wrapper">
		<header>
		<div class="logo">
			<img src="9.png" >
			<h1 style="color: white;">ONLINE LIBRARY MANAGEMENT SYSTEM</h1>
		</div>
			<nav>
				<ul>
					<li><a href="index.php">HOME</a></li>
					<li><a href="books.php">BOOKS</a></li>
					<li><a href="student_login.php">STUDENT-LOGIN</a></li>
					
					<li><a href="feedback.php">FEEDBACK</a></li>
				</ul>
			</nav>
		</header>
		<section>
		<div class="sec_img">
			<div class="w3-content w3-section" style="width: 200px; height: 200px ;text-align: centre">
				<img class="mySlides w3-animate-left" src="1.jpg" style="width: 100%">
				<img class="mySlides w3-animate-left" src="9.jpg" style="width: 100%">
				<img class="mySlides w3-animate-fading" src="3.jpg" style="width: 100%">
				<img class="mySlides w3-animate-fading" src="66.jpg" style="width: 100%">
			</div>
	
	<script type="text/javascript">
		var a=0;
		carousel();
	
		function carousel()
		{
			var i;
			var x= document.getElementsByClassName("mySlides");
	
			for(i=0; i<x.length; i++)
			{
				x[i].style.display="none";
			}
	
			a++;  
			if(a > x.length) {a = 1}
				x[a-1].style.display = "block";
				setTimeout(carousel, 5000);
		}
	</script>-->   
	     <section>
			
		
				
	<div class="sec_img">
		<br><br> <br>
			<div class="box">
				<br><br><br><br>
				<h1 style="text-align: center; font-size: 35px;">Welcome to library</h1><br><br>
				<h1 style="text-align: center;font-size: 25px;">Opens at: 09:00 </h1><br>
				<h1 style="text-align: center;font-size: 25px;">Closes at: 15:00 </h1><br>
			</div>
			</div>
		
		</section>
		<!--<footer>
			<p style="color:white;  text-align: center; ">
				<br>
				Email: Online.library@gmail.com <br><br>
				Mobile: +88018********
			</p>
		</footer>-->

	</div>
</body>
<?php
include "footer.php";

?>

</html>