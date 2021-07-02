<?php
include "dbconnect.php";
?>

<html>
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
	<style>	
		body{
			background-color:lightblue;
		}
		.main{
			height:100%;
			width:100%
		}
		.nav{
			width:100%;
			height:10%;
		}
		.order{
				width:100%;
				height:50%;
			}
		
	</style>
</head>
		<script>
				function validation(){
				
				var a=document.getElementById("liter").value;
				var b=document.getElementById("mobile").value;
				var c=document.getElementById("email_id").value;
				var d=document.getElementById("address_id").value;
				
				if(a=="")
				{
				document.getElementById("message").innerHTML="**Please  fill quantity of milk";
				return false;
				}
				if(b=="")
				{
				document.getElementById("mobile_n").innerHTML="**Please enter the mobile  number";
				return false;
				}
				if(c=="")
				{
				document.getElementById("email").innerHTML="**Please enter the mobile  number";
				return false;
				}
				if(d=="")
				{
				document.getElementById("address").innerHTML="**Please enter the address";
				return false;
				}
				}

		</script>
<body>
<div class="main">
		<div class="nav">
				<nav class="navbar navbar-expand-sm bg-primary navbar-dark fixed-top">
				<div class="container">
					<a href=""class="navbar-brand text-danger font-weight-bold">goa5star</a>
					<button class="navbar-toggler"type="button" data-toggle="collapse" data-target="#collapsenavbar">
					<span class="navbar-toggler-icon"></span>
					</button>
						<div class="collapse navbar-collapse text-center"id="collapsenavbar">
							<ul class="navbar-nav ml-auto">
							<li class="nav-item">
							<a href="index.php"class="nav-link text-white">Home</a>
							</li>
							<li class="nav-item dropdowm">
							<a class="nav-link text-white"href="about.php">About</a>
							 </li>

							<li class="nav-item">
							<a href="contactus.php"class="nav-link text-white">Contact us</a>
							</li>
							
							<li class="nav-item">
							<a href="admin.php"class="nav-link text-white">Admin</a>
							</li>
							
							</ul>
						</div>
				</div>
				</nav>
		</div>
		
		<div class="order">
			<div class="container">
					<form action="" method="POST"onclick="return validation()">

					<h1><center>Result Upload</center></h1>
					<div class="form-group">
						Result Slot<input type="text" name="rs"class="form-control">
					</div>
					<div class="form-group">
						R.A<input type="text" name="ra"class="form-control">
					</div>
					<div class="form-group">
					 <input type="submit" value="Submit Data" class="btn btn-primary"name="submit">
					 </div>
					</form>
</div>
		</div>
<?php
if(isset($_POST["submit"]))
{
	//$date=$_POST['date'];
		//$liter=$_POST['liter'];
			$rs=$_POST['rs'];
				//$mobile_number=$_POST['mobile_number'];
					//$email=$_POST['email'];
						$ra=$_POST['ra'];
	$insertquery=("insert into resultupload(rs,ra)values('$rs','$ra')");
             $res=mysqli_query($con,$insertquery);
         if($res)
{
	?>
<script>
alert("Result Uploded");
</script><?php	
}
else{
?>
<script>
alert("please fill correctly");
</script><?php
}
}
?>
</div>
</body>
</html>
