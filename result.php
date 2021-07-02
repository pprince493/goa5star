<html>
<head>
<!--////////////////////////bootstrap using////////////////////-->
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
<head>
 <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	
	<!--////////////////////////Css using////////////////////-->
	
	<style>
		.navi{
			width:100%;
			height:50px;
		}
		.inner1{
			
			width:100%;
			height:200px;
			background-color:#48D1cc;
		}
		.main1_div{
			width:100%;
			height:100%;
			background-color:#AFEEEE
		}
		
		
			font{
				color:red;
				text-shadow:2px 2px  5px black;
			}
	</style>
</head>
<body>

	<div class="main_div">
					<div class="navi">
					<nav class="navbar navbar-expand-sm bg-primary navbar-dark fixed-top">
					<div class="container">
					<a href=""class="navbar-brand text-warning font-weight-bold"><marquee>Welcome to Goa5star</marquee></a>
					<button class="navbar-toggler"type="button" data-toggle="collapse" data-target="#collapsenavbar">
					<span class="navbar-toggler-icon"></span>
					</button>
					<div class="collapse navbar-collapse text-center"id="collapsenavbar">
					<ul class="navbar-nav ml-auto">
					<li class="nav-item">
					<a href="index.php"class="nav-link text-white">Home</a>
					</li>
					<li class="nav-item dropdowm">
					<a href="aboutus.php"class="nav-link text-white">About</a>
					</li>
					<li class="nav-item">
					<a href="contact.php"class="nav-link text-white">Contact us</a>
					</li>
					<li class="nav-item">
					<a href="admin.php"class="nav-link text-white">Admin</a>
					</li>
					</ul>
					</div>
					</div>
					</nav>
					</div>
					
					
			<div class="inner1">
					<table width="100%" height="100%">
							<tr>
								<td width="25%"><h5>mobile no:-</h5>9852513794</td>
								<td width="50%"></td>
								<td width="25%">
									<h5>Current Date:-</h5>
									<input type="text" id="currentDate">
									 
									<script>
									  var today = new Date();
									  var date = today.getFullYear()+'-'+(today.getMonth()+1)+'-'+today.getDate();
									  document.getElementById("currentDate").value = date;
									</script>
								
								</td>
							</tr>
							<tr>
								<td width="25%">
									
										<body onload="startTime()">
											<h5>Current Time:-</h5>
											<div id="txt"></div>

											<script>
											function startTime() {
											  const today = new Date();
											  let h = today.getHours();
											  let m = today.getMinutes();
											  let s = today.getSeconds();
											  m = checkTime(m);
											  s = checkTime(s);
											  document.getElementById('txt').innerHTML =  h + ":" + m + ":" + s;
											  setTimeout(startTime, 1000);
											}

											function checkTime(i) {
											  if (i < 10) {i = "0" + i};  // add zero in front of numbers < 10
											  return i;
											}
											</script>

											</body>
								</td>
								<td width="50%"><h5>next draw time:-</h5></td>
								<td width="25%">
								<form action="result.php" method="Post">
								<label for="Result_date"><h5>Result Date:-</h5></label><br>
								<input type="date" id="date" name="date">
								<input type="submit" name="search" value="search">
								</form>
								</td>
							</tr>
					</table>
					</table>


			</div>	
			
			
			<div class="main1_div" align="center">
			
					<?php
						include "dbconnect.php";
						
						
						
						$q="select*from resultupload";
						$r=mysqli_query($con,$q);
						echo "<table width='80%' border='5'>
						<tr>
							<td>sl.no</td>
							<td>Result Slot</td>
							<td>R.A</td>
						</tr>";
						while($a=mysqli_fetch_array($r)) //while($a=mysql_fetch_assoc($r))
						{
							echo "<tr>";
							echo "<td>".$a[0]."</td>";
							echo "<td>".$a[1]."</td>";
							echo "<td>".$a[2]."</td>";
							echo "</tr>";
						}
						echo "</table>";
						mysqli_close($con);

					?>
					
			</div>
				
			
				
		
				
	</div>
</body>
</html>