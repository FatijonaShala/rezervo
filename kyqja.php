<!DOCTYPE html>
<?php
$servername="localhost";
$username="root";
$password="";
$dbname="restoranti";
$conn = mysqli_connect($servername, $username, $password, $dbname);

if(isset($_POST['login'])){
$klienti = $_POST['klienti'];
$password = $_POST['password'];




$query = "SELECT * FROM `klientii` WHERE klienti='".$klienti."' and password = '".$password."'";
$result = mysqli_query($conn, $query);
if($result){
while($row=mysqli_fetch_array($result)){
	
echo'<script type="text/javascript">alert("you are login successfully and you are logined as ' .$row['klienti'].'")</script>';
 
}
if($klienti=="admin"){
?>
<script type="text/javascript">
window.location.href="admin.php"</script>
<?php
 
}else if($klienti=="klient"){
?>
<script type="text/javascript">
window.location.href="index.php"</script>
<?php
 
}else if($klienti=="admin i restorantit"){
?>
<script type="text/javascript">
window.location.href="admin_res.php"</script>
<?php
 
}
}else{
echo 'no result';
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
			<h1>Logohu</h1>
			
		
			<div>
				<select name="klienti" STYLE="font-size: 10pt; width: 287px; height: 45px; background-color:#e0e0d1; border-radius: 3px; color: #888888">
				<option value="" selected="selected">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Perdoruesi</option> 
				<option value="klient">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Klient</option> 
				<option value="admin">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Admin</option> 
				<option value="admin i restorantit">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Admin i Restoranit</option> 
		
				</select>
			</div>
			<div>
				<input type="password" placeholder="Password" name="password" required />
			</div>

			
			
			<div>
				<input type="submit" name="login" value="LogIn" />
				
			</div>
			
			
		</form><!-- form -->
		<div class="button">
			
		</div><!-- button -->
	</section><!-- content -->
</div><!-- container -->








</html>