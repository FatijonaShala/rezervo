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
	$mbiemri=$_POST['mbiemri'];
	$username=$_POST['username'];
	$password=$_POST['password'];
	$klienti=$_POST['klienti'];

	
				$query="select * from klientii WHERE ID='$ID'";
				$query_run = mysqli_query($conn,$query);
				
				if(mysqli_num_rows($query_run)>0)
				{
					
					echo '<script type="text/javascript"> alert("klienti ekziston") </script>';
				}
				else
				{
					$password = md5($password);
					$query= "insert into klientii values('$ID','$emri','$mbiemri', '$username', '$password', '$klienti')";
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
<p><a href="index.php">...kthehu mbrapa</a></p>

<div class="container">
	<section id="content">
		<form method="post">
			<h1>Regjistro</h1>
			
			<div>
				<input type="text" placeholder="ID" name="ID"  required />
			</div>
			
			<div>
				<input type="text" placeholder="Emri" name="emri" required />
			</div>
			<div>
				<input type="text" placeholder="Mbiemri" name="mbiemri" required />
			</div>
			<div>
				<input type="text" placeholder ="Username" name="username" required />
			</div>
		
			<div>
				<input type="password" placeholder="Password" name="password" required />
			</div>
			<div>
				<select name="klienti" STYLE="font-size: 10pt; width: 287px; height: 45px; background-color:#e0e0d1; border-radius: 3px; color: #888888">
				<option value="" selected="selected">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Perdoruesi</option> 
				<option value="klient">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Klient</option> 
				<option value="admin">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Admin</option> 
				<option value="admin i restorantit">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Admin i Restoranit</option> 
		
				
				
				</select>
			</div>

			
			
			<div>
				<input type="submit" name="register" value="Register" />

				
			</div>
&nbsp;&nbsp;<br><br>
<a href="kyqja.php">Logohu</a>

			
			
			
		</form><!-- form -->
		<div class="button">
			
		</div><!-- button -->
	</section><!-- content -->
</div><!-- container -->








</html>