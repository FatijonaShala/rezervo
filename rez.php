<!DOCTYPE html>
<?php
$servername="localhost";
$username="root";
$password="";
$dbname="restoranti";
$conn = mysqli_connect($servername, $username, $password, $dbname);
		if(isset($_POST['rezervo']))
		{
			
	
	$name=$_POST['name'];
	$email=$_POST['email'];
	$phone=$_POST['phone'];
	$meny=$_POST['meny'];
	$date=$_POST['date'];
	$time=$_POST['time'];
	$party=$_POST['party'];
	

	
				$query="select * from reservations WHERE name='$name' AND date='$date' AND time='$time'";
				$query_run = mysqli_query($conn,$query);
				
				if(mysqli_num_rows($query_run)>0)
				{
					
					echo '<script type="text/javascript"> alert("Sorry, there is no availability on this date!") </script>';
				}
				else
				{
					$query= "insert into reservations values('$name','$email','$phone', '$meny', '$date', '$time', '$party')";
					$query_run = mysqli_query($conn,$query);
					
					if($query_run)
					{
						echo '<script type="text/javascript"> alert(" You have made a reservation!") </script>';
						$message = "Hi $name, You have reseved a table for $party people at $time on $date !";
        
					}
					else
					{
						echo '<script type="text/javascript"> alert("Error!") </script>';
					}
				}
			}
			
			
		
?>

<html lang="en">

<!--- lidhje e rez (rezervimi) me databaz me booking.php -->


<head>
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
	<style>
table {
  border-collapse: collapse;
  width: 100%;
}

th, td {
  padding: 8px;
  text-align: left;
  border-bottom: 1px solid #ddd;
}

tr:hover {background-color:#f5f5f5;}
</style>
</head>

<body>
    <!--============================= HEADER =============================-->
    <div class="nav-menu">
        <div class="bg transition">
            <div class="container-fluid fixed">
                <div class="row">
                    <div class="col-md-12">
                        <nav class="navbar navbar-expand-lg navbar-light">
                            <a class="navbar-brand" href="index.html">Rezervo...n`KS</a>
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
                                    <li class="nav-item active">
                                        <a class="nav-link" href="rezervimi.php">Rezervimi</a>
                                    </li>
                                    <li class="nav-item active">
                                        <a class="nav-link" href="meny.php">Meny</a>
                                    </li>
                                    <li class="nav-item active">
                                        <a class="nav-link" href="rrethnesh.php">Rreth Nesh</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="kontakti.php">Na Kontaktoni</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="log/login.php">Login</a>
                                    </li>
                                   
                                </ul>
                            </div>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- SLIDER -->
    <section class="slider d-flex align-items-center">
       <!--  <img src="images/slider.jpg" class="img-fluid" alt="#"> --> 
        <div class="container">
            <div class="row d-flex justify-content-center">
                <div class="col-md-12">
                    <div class="slider-title_box">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="slider-content_wrap">
                                    <h1>Rezervimi</h1>
									<a href="shiko_rezervimin.php"> Shiko rezervimet e bera</a>
									
<br><br>
                                    <div id="msg" ></div>

        <form id="reservation" method="post">

           <p><input type="text" name="name" required placeholder="Shkruani Emrin"></p>

           <p><input type="email" name="email" required placeholder="Shkruani E-mail"></p>

           <p><input type="text" name="phone" required placeholder="Numri i Telefonit"></p>

           <p><input type="text" name="meny" required placeholder="Perzgjedhja e Menys"></p>

           <p><input type="date" id="date" name="date" required></p>

           Koha: <select name="time">

               <option value="16:00">16:00</option>
               <option value="17:00">17:00</option>
               <option value="18:00">18:00</option>
               <option value="19:00">19:00</option>
               <option value="20:00">20:00</option>
               <option value="21:00">21:00</option>

           </select> <br><br>

           Nr. Personave: <select  name="party">

               <option value="2">2</option>
               <option value="3">3</option>
               <option value="4">4</option>
               <option value="4+">4+</option>

           </select> <br><br>


				<input type="submit" name="rezervo" value="Rezervo" />

        </form>





        <script type="text/javascript">
        var today = new Date();
        var dd = today.getDate();
        var mm = today.getMonth() + 1; //January is 0!
        var yyyy = today.getFullYear();
        if (dd < 10) {
            dd = '0' + dd;
        }
        if (mm < 10) {
            mm = '0' + mm;
        }
        var today = yyyy + "-" + mm + "-" + dd;
        var currentD = today.toString();
        document.getElementById("date").setAttribute("min", currentD);
        </script>

        <script src="js/ajaxrequest.js" charset="utf-8"></script>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--// SLIDER -->
    <!--//END HEADER -->

    




     <!--============================= Rezervo =============================-->
	 
    <section class="main-block light-bg">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="add-listing-wrap">
                        <h2>Meny</h2>
<br></br>						
<table>
  <tr>
    <th>Mengjesi</th>
    <th>Cmimi</th>
  </tr>
  <tr>
    <td>1.Omlet</td>
    <td>2.00€</td>
  </tr>
  <tr>
    <td>2.Veze ne sy</td>
    <td>2.00€</td>
  </tr>
  <tr>
    <td>3.Pancake</td>
    <td>2.50€</td>
  </tr>
  <tr>
    <td>4.Llokume</td>
    <td>1.50€</td>
  </tr>
  <tr>
  <th></th>
  <th></th>
  </tr>
  <tr>
    <th>Supat</th>
    <th>Cmimi</th>
  </tr>
  <tr>
    <td>1.Supe krem me perime</td>
    <td>2.00€</td>
  </tr>
  <tr>
    <td>2.Supe domate</td>
    <td>2.00€</td>
  </tr>
  <tr>
    <td>3.Supe pule</td>
    <td>2.50€</td>
  </tr>
  <tr>
    <td>4.Supe viqi</td>
    <td>2.50€</td>
  </tr>
 <tr>
  <th></th>
  <th></th>
  </tr>
  <tr>
    <th>Sallatat</th>
    <th>Cmimi</th>
  </tr>
  <tr>
    <td>1.Sallate greke</td>
    <td>2.00€</td>
  </tr>
  <tr>
    <td>2.Sallate pule</td>
    <td>3.50€</td>
  </tr>
  <tr>
    <td>3.Sallate mikse</td>
    <td>2.00€</td>
  </tr>
  <tr>
    <td>4.Sallate shope</td>
    <td>1.50€</td>
	</tr>
	 <tr>
  <th></th>
  <th></th>
  </tr>
 <tr>
  <th></th>
  <th></th>
  </tr>
  <tr>
    <th>Pasta& Rizoto</th>
    <th>Cmimi</th>
  </tr>
  <tr>
    <td>1.Pasta boloneze</td>
    <td>4.00€</td>
  </tr>
  <tr>
    <td>2.Pasta me mish pule</td>
    <td>4.00€</td>
  </tr>
  <tr>
    <td>3.Rizoto me perime</td>
    <td>4.50€</td>
  </tr>
  <tr>
    <td>4.Rizoto me mish pule</td>
    <td>4.50€</td>
  </tr>
    <tr>
    <td>5.Rizoto me spinaq</td>
    <td>4.00€</td>
  </tr>
 <tr>
  <th></th>
  <th></th>
  </tr>
  <tr>
    <th>Pica</th>
    <th>Cmimi</th>
  </tr>
  <tr>
    <td>1.Brusketa</td>
    <td>1.50€</td>
  </tr>
  <tr>
    <td>2.Pica proshute</td>
    <td>2.00€,4,00€,6.00€</td>
  </tr>
  <tr>
    <td>3.Pica Vegjetariane</td>
    <td>2.50€,4,50€,7,00€</td>
  </tr>
  <tr>
    <td>4.Pica Tuna</td>
    <td>3.00€,5,00€,7,50€</td>
  </tr>
    <tr>
    <td>5.Pica Margarita</td>
    <td>1.50€,3,00€,4,30€</td>
  </tr>
 <tr>
  <th></th>
  <th></th>
  </tr>
  <tr>
    <th>Peshku</th>
    <th>Cmimi</th>
  </tr>
  <tr>
    <td>1.Koc zgare</td>
    <td>10€</td>
  </tr>
  <tr>
    <td>2.Trofte zgare</td>
    <td>5.00€</td>
  </tr>
  <tr>
    <td>3.Fileto Salmoni</td>
    <td>9.50€</td>
  </tr>
  <tr>
    <td>4.Fileto Levreku</td>
    <td>8.00€</td>
  </tr>
    <tr>
    <td>5.Fileto Koci</td>
    <td>8.00€</td>
  </tr>
 <tr>
  <th></th>
  <th></th>
  </tr>
  <tr>
    <th>Misherat</th>
    <th>Cmimi</th>
  </tr>
  <tr>
    <td>1.Muskuj ne tave</td>
    <td>6.00€</td>
  </tr>
  <tr>
    <td>2.Qofte ne tave</td>
    <td>4.00€</td>
  </tr>
  <tr>
    <td>3.Kombinim mishi</td>
    <td>8.00€</td>
  </tr>
  <tr>
    <td>4.Rolle viqi</td>
    <td>7.00€</td>
  </tr>
    <tr>
    <td>5.Biftek</td>
    <td>8.00€</td>
  </tr>
     <tr>
    <td>6.Skenderbeg</td>
    <td>6.50€</td>
  </tr>
     <tr>
    <td>7.Ramstek</td>
    <td>7.50€</td>
  </tr>
 <tr>
  <th></th>
  <th></th>
  </tr>
  <tr>
    <th>Deserte</th>
    <th>Cmimi</th>
  </tr>
  <tr>
    <td>1.Cheescake</td>
    <td>2.50€</td>
  </tr>
  <tr>
    <td>2.Suffle me qokollate</td>
    <td>3.00€</td>
  </tr>
  <tr>
    <td>3.Tiramisu</td>
    <td>2.00€</td>
  </tr>
  <tr>
    <td>4.Trileqe</td>
    <td>1.50€</td>
  </tr>
 <tr>
  <th></th>
  <th></th>
  </tr>
  <tr>
    <th>Pijet</th>
    <th>Cmimi</th>
  </tr>
  <tr>
    <td>1.Vere e kuqe</td>
    <td>15€</td>
  </tr>
  <tr>
    <td>2.Vere e bardhe</td>
    <td>15€</td>
  </tr>
  <tr>
    <td>3.Raki e shtepise</td>
    <td>5.00€</td>
  </tr>
  <tr>
    <td>4.Llojet e birrave</td>
    <td>1.00€-5.00€</td>
  </tr>
   <tr>
    <td>5.Lengjet e gazuara</td>
    <td>1.00€</td>
  </tr>
  <tr>
    <td>6.Lengjet e pagazuara</td>
    <td>1.00€</td>
  </tr>
  <tr>
    <td>7.Kafe</td>
    <td>0.70c-1.80€</td>
  </tr>
  <tr>
    <td>8.Caj</td>
    <td>0.80c</td>
  </tr>
</table>
</section>
						</div>
						</div>
						</div>

    <!--//end -->
    <!--============================= FOOTER =============================-->
    <footer class="main-block dark-bg">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="copyright">
                        
                        <p>Copyright &copy; 2019. All rights reserved. Created by: Elhamja, Fatijona and Rajmonda | Rezervo..n`KS </p>
                        
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