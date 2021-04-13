<!DOCTYPE html>
<?php
$servername="localhost";
$username="root";
$password="";
$dbname="restoranti";
$conn = mysqli_connect($servername, $username, $password, $dbname);
		if(isset($_POST['info']))
		{
			
	$id=$_POST['id'];
	$emri_res=$_POST['emri_res'];
	$informacionet=$_POST['informacionet'];
	$pushimet=$_POST['pushimet'];
	$festat=$_POST['festat'];
	
	
				$query="select * from info WHERE id='$id'";
				$query_run = mysqli_query($conn,$query);
				
				if(mysqli_num_rows($query_run) > 100)
				{
					
					echo '<script type="text/javascript"> alert("ekziston") </script>';
				}
				else
				{
					$query= "insert into info values('$id' , '$emri_res' ,'$informacionet', '$pushimet' , '$festat' )";
					$query_run = mysqli_query($conn,$query);
					
					if($query_run)
					{
						echo '<script type="text/javascript"> alert(" u dergua!") </script>';
					}
					else
					{
						echo '<script type="text/javascript"> alert("Error!") </script>';
					}
				}
			}
			
			
		
?>

<html lang="en">

<head>
  
   <title>Restoranti</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
	  
    <link href="https://fonts.googleapis.com/css?family=Libre+Baskerville" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"
          integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css"
          integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
			<link rel="images/icon"   href="icon.png">
		  </head>
		  
    <link rel="stylesheet" type="text/css" href="loginHTMLCSS/css/style.css">
</head>


<body>
<p><a href="admin_res.php">...kthehu mbrapa</a></p>

<div class="container">
	<section id="content">
		<form method="post">
			<h1>Shto te dhena</h1>
			
			<div>
				<input type="text" placeholder="ID" name="id"  required />
			</div>
			
			<div>
				<input type="text" placeholder="Emri i Restaurantit" name="emri_res" required />
			</div>
			<div>
				<input type="text" placeholder="Informacionet" name="informacionet" required />
			</div>
			<div>
				<input type="text" placeholder ="Pushimet" name="pushimet" required />
			</div>
			<div>
				<input type="text" placeholder ="Festat" name="festat" required />
			</div>
			
			
			<div>
				<input type="submit" name="info" value="Modifiko" />

				
			</div>
&nbsp;&nbsp;<br><br>

			
			
			
		</form><!-- form -->
		<div class="button">
			
		</div><!-- button -->
	</section><!-- content -->
</div><!-- container -->








</html>