<!DOCTYPE html>
<?php
$servername="localhost";
$username="root";
$password="";
$dbname="restoranti";
$conn = mysqli_connect($servername, $username, $password, $dbname);

error_reporting(0);
$query= "SELECT * FROM klientii";
$data = mysqli_query($conn, $query);
$total = mysqli_num_rows($data);

if($total !=10)
{
	?>

<html lang="en">

<head>
  
   <title>Klientet e Regjistruar</title>
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
    <title>Rezervo...n'KS</title>
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
			<td id="header1" colspan="10"><h3>Regjistrimet e Klienteve</h3></td>
		<tr>
		<tr>
			<th>ID</th>
			<th>Emri</th>
			<th>Mbiemri</th>
			<th>Ussername</th>
			
		</tr>
		<?php
	
	while($result = mysqli_fetch_assoc($data))
	{
		echo "<tr>
				<td>".$result ['id']."</td>
				<td>".$result ['emri']."</td>
				<td>".$result ['mbiemri']."</td>
				<td>".$result ['username']."</td>
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