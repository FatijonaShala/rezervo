<!DOCTYPE html>
<?php
$servername="localhost";
$username="root";
$password="";
$dbname="restoranti";
$conn = mysqli_connect($servername, $username, $password, $dbname);
		if(isset($_POST['register']))
		{
			
	
	$ID=$_POST['ID'];
	$emri=$_POST['emri'];
	$pronari=$_POST['pronari'];
	$nr_biznesit=$_POST['nr_biznesit'];
	$nr_telefonit=$_POST['nr_telefonit'];
	$adresa=$_POST['adresa'];
	$qyteti=$_POST['qyteti'];
	$email=$_POST['email'];


	
				$query="select * from register WHERE ID='$ID'";
				$query_run = mysqli_query($conn,$query);
				
				if(mysqli_num_rows($query_run)>0)
				{
					
					echo '<script type="text/javascript"> alert("restoranti ekziston") </script>';
				}
				else
				{
					$query= "insert into register values('$ID','$emri','$pronari', '$nr_biznesit', '$nr_telefonit', '$adresa', '$qyteti', '$email')";
					$query_run = mysqli_query($conn,$query);
					
					if($query_run)
					{
						echo '<script type="text/javascript"> alert(" u regjistrua!") </script>';
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
			<h1>Regjistro Restaurantin</h1>
			
			<div>
				<input type="text" placeholder="ID" name="ID"  required />
			</div>
			
			<div>
				<input type="text" placeholder="Emri" name="emri" required />
			</div>
			<div>
				<input type="text" placeholder="Pronari" name="pronari" required />
			</div>
			<div>
				<input type="text" placeholder ="Nr_biznesit" name="nr_biznesit" required />
			</div>
		
			<div>
				<input type="text" placeholder="Nr_telefonit" name="nr_telefonit" required />
			</div>

			<div>
				<input type="text" placeholder="Adresa" name="adresa" required />
			</div>

			<div>
				<input type="text" placeholder="Qyteti" name="qyteti" required />
			</div>

			<div>
				<input type="text" placeholder="Email" name="email" required />
			</div>

			
			
			<div>
				<input type="submit" name="register" value="Register" />

				
			</div>
&nbsp;&nbsp;<br><br>

			
			
			
		</form><!-- form -->
		<div class="button">
			
		</div><!-- button -->
	</section><!-- content -->
</div><!-- container -->








</html>