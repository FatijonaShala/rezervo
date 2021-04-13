<!DOCTYPE html>
<?php
$servername="localhost";
$username="root";
$password="";
$dbname="restoranti";
$conn = mysqli_connect($servername, $username, $password, $dbname);

error_reporting(0);
$query= "SELECT * FROM reservations";
$data = mysqli_query($conn, $query);
$total = mysqli_num_rows($data);

if($total !=10)
{
	?>

<html lang="en">

<head>
  
   <title>Rezervimet</title>
   <style>
		
		table
		{
			width: 90%;
		}
		
		table, th, td
		{
			border: 1px solid black;
			border-collapse: collapse;
			opacity: 0.95;
			font-size: 15px;
			font-style: bold;
		}
		
		th, td
		{
			padding: 10px;
			text-align: left;
			
		}
		
		th
		{
			background-color: #9494ff;
			color: white;
		}
		
		tr:nth-child(even)
		{
			background-color: #eBeBeB;
			
		}
		tr:nth-child(odd)
		{
			background-color: white;
		}
		#header1{
			background-color: #6e6eff;
			color: white;
		}
	</style>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="author" content="Colorlib">
    <meta name="description" content="#">
    <meta name="keywords" content="#">
    <!-- Page Title -->
    <title>Rezervo ne KS</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,400i,500,700,900" rel="stylesheet">
    <!-- Simple line Icon -->
    <link rel="stylesheet" href="css/simple-line-icons.css">
    <!-- Themify Icon -->
    <link rel="stylesheet" href="css/themify-icons.css">
    <!-- Hover Effects -->
    <link rel="stylesheet" href="css/set1.css">
    <!-- Main CSS -->
    <link rel="stylesheet" href="css/style.css">
    <!-- script form -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</head>
 <!--============================= HEADER =============================-->
        <div class="dark-bg sticky-top">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <nav class="navbar navbar-expand-lg navbar-light">
                        <a class="navbar-brand" href="index.html">Rezervo ne KS</a>
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
              <span class="icon-menu"></span>
            </button>
                        <div class="collapse navbar-collapse justify-content-end" id="navbarNavDropdown">
                            <ul class="navbar-nav">
                                <li class="nav-item dropdown">
                                    
                                </li>
                                <li class="nav-item active">
                                    <a class="nav-link" href="index.php">Fillimi</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="rezervimi.php">Rezervimi</a>
                                </li>
                                <li class="nav-item active">
                                    <a class="nav-link" href="meny.php">Meny</a>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                     Qyteti 
                     <span class="icon-arrow-down"></span>
                   </a>
                                        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                            <a class="dropdown-item" href="prizren.php">Prizren</a>
                                            <a class="dropdown-item" href="prishtine.php">Prishtine</a>
                                            <a class="dropdown-item" href="gjakove.php">Gjakove</a>
                                            <a class="dropdown-item" href="peja.php">Peja</a>
                                            <a class="dropdown-item" href="ferizaj.php">Ferizaj</a>
                                            <a class="dropdown-item" href="gjilan.php">Gjilan</a>
                                            <a class="dropdown-item" href="mitrovice.php">Mitrovice</a>
                                            <a class="dropdown-item" href="gracanice.php">Gracanice</a>
                                            <a class="dropdown-item" href="istog.php">Istog</a>                                        </div>  
                                    </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="rrethnesh.php">Rreth Nesh</a>
                                </li>
                                <li class="nav-item active">
                                    <a class="nav-link" href="kontakti.php">Na Kontaktoni</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="login.php">Login</a>
                                </li>
                            </ul>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </div>

<body>
 <div class="nav-menu">
        <div class="bg transition">
            <div class="container-fluid fixed">
                
            </div>
        </div>
    </div>
	<br><br><br><br><br><br>

<body><br><br><br>
<div>
<table align="center">
<tbody>
		<tr>
			<td id="header1" colspan="7"><h3>Rezervimet</h3></td>
		<tr>
		<tr>
			<th>Name</th>
			<th>Email</th>
			<th>Phone</th>
			<th>Date</th>
			<th>Meny</th>
			<th>Time</th>
			<th>Party</th>

			
			
		</tr>
		<?php
	
	while($result = mysqli_fetch_assoc($data))
	{
		echo "<tr>
				<td>".$result ['name']."</td>
				<td>".$result ['email']."</td>
				<td>".$result ['phone']."</td>
				<td>".$result ['meny']."</td>
				<td>".$result ['date']."</td>
				<td>".$result ['time']."</td>
				<td>".$result ['party']."</td>

				</tr>";
	}
}
else
{
	echo "No record found";
}
		
	?>
	
		

		</tbody>
		</table>
		</div>
</body>
<br><br><br><br><br><br><br><br>
 <footer class="main-block dark-bg">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="copyright">
                        
                        <p>Copyright &copy; 2019. All rights reserved. Created by: Fatijona Shala | Rezervo ne KS </p>
                        
                        <ul>
                            <li><a href="#"><span class="ti-facebook"></span></a></li>
                            <li><a href="#"><span class="ti-twitter-alt"></span></a></li>
                            <li><a href="#"><span class="ti-instagram"></span></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!--//END FOOTER -->

    
    <!-- jQuery, Bootstrap JS. -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>

    <script>
        $(window).scroll(function() {
            // 100 = The point you would like to fade the nav in.

            if ($(window).scrollTop() > 100) {

                $('.fixed').addClass('is-sticky');

            } else {

                $('.fixed').removeClass('is-sticky');

            };
        });
    </script>






  

   
</body>

</html>