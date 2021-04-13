<!DOCTYPE html>
<?php
$servername="localhost";
$username="root";
$password="";
$dbname="restoranti";
$conn = mysqli_connect($servername, $username, $password, $dbname);

error_reporting(0);
$query= "SELECT * FROM review WHERE emri_restaurantit= 'Marashi'" ;
$data = mysqli_query($conn, $query);
$total = mysqli_num_rows($data);

if($total !=10)
{
	?>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="author" content="Colorlib">
    <meta name="description" content="#">
    <meta name="keywords" content="#">
    <!-- Favicons -->
    <link rel="shortcut icon" href="#">
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
    <!-- Swipper Slider -->
    <link rel="stylesheet" href="css/swiper.min.css">
    <!-- Magnific Popup CSS -->
    <link rel="stylesheet" href="css/magnific-popup.css">
    <!-- Main CSS -->
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
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

     

    <!--//END HEADER -->
    <!--============================= BOOKING =============================-->
 <div>
        <!-- Swiper -->
        <div class="swiper-container">
            <div class="swiper-wrapper">

                <div class="swiper-slide">
                    <a href="foto/marashi1.jpg" class="grid image-link">
                        <img src="foto/marashi1.jpg" class="img-fluid" alt="#">
                    </a>
                </div>
                <div class="swiper-slide">
                    <a href="foto/marashi2.jpg" class="grid image-link">
                        <img src="foto/marashi2.jpg" class="img-fluid" alt="#">
                    </a>
                </div>
                <div class="swiper-slide">
                    <a href="foto/marashi3.jpg" class="grid image-link">
                        <img src="foto/marashi3.jpg" class="img-fluid" alt="#">
                    </a>
                </div>
                   <div class="swiper-slide">
                    <a href="foto/marashi1.jpg" class="grid image-link">
                        <img src="foto/marashi1.jpg" class="img-fluid" alt="#">
                    </a>
                </div>
                <div class="swiper-slide">
                    <a href="foto/marashi2.jpg" class="grid image-link">
                        <img src="foto/marashi2.jpg" class="img-fluid" alt="#">
                    </a>
                </div>
                <div class="swiper-slide">
                    <a href="foto/marashit3.jpg" class="grid image-link">
                        <img src="foto/marashi3.jpg" class="img-fluid" alt="#">
                    </a>
                </div>
            </div>
    <!--//END BOOKING -->
    <!--============================= RESERVE A SEAT =============================-->
    <section class="reserve-block">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h5>Marashi</h5>
                    <p><span>$$$</span>$$</p>
                    <p class="reserve-description">Shijoje ushqim prane freskise se ujit...</p>
                </div>
                <div class="col-md-6">
                    <div class="reserve-seat-block">
                        <div class="reserve-rating">
                            <span>4.2</span>
                        </div>
                        <div class="review-btn">
                            <a href="review.php" class="btn btn-outline-danger">REVIEW</a>
                            <span>20 reviews</span>
                        </div>
                        <div class="reserve-btn">
                            <div class="featured-btn-wrap">
                                <a href="rez.php" class="btn btn-danger">REZERVO</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--//END RESERVE A SEAT -->
    <!--============================= BOOKING DETAILS =============================-->
    <section class="light-bg booking-details_wrap">
        <div class="container">
            <div class="row">
                <div class="col-md-8 responsive-wrap">
                    <div class="booking-checkbox_wrap">
                        <div class="booking-checkbox">
                            <p>Ky restorant i njohur bregdetar, i vendosur pranë një peme madhështore të vjetër sykorale, shërben një sërë pjatash autentike, tradicionale shqiptare, por është më e njohur për biftekët e saj, të cilat i gatuani vetë në gurë të nxehtë..</p>
                         
                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                <label class="custom-checkbox">
                        <span class="ti-check-box"></span>
                        <span class="custom-control-description">Bike Parking</span>
                      </label> </div>
                            <div class="col-md-4">
                                <label class="custom-checkbox">
                       <span class="ti-check-box"></span>
                       <span class="custom-control-description">Wireless Internet  </span>
                     </label>
                            </div>
                            <div class="col-md-4">
                                <label class="custom-checkbox">
                     <span class="ti-check-box"></span>
                     <span class="custom-control-description">Smoking Allowed  </span>
                   </label> </div>
                            <div class="col-md-4">
                                <label class="custom-checkbox">
                    <span class="ti-check-box"></span>
                    <span class="custom-control-description">Street Parking</span>
                  </label>
                            </div>
                            <div class="col-md-4">
                                <label class="custom-checkbox">
                   <span class="ti-check-box"></span>
                   <span class="custom-control-description">Special</span>
                 </label> </div>
                            <div class="col-md-4">
                                <label class="custom-checkbox">
                  <span class="ti-check-box"></span>
                  <span class="custom-control-description">Accepts Credit cards</span>
                </label>
                            </div>
                        </div>
                    </div>
                    <div class="booking-checkbox_wrap mt-4">
                        <h5>3 Reviews</h5>
                        <hr>
                        <div class="customer-review_wrap">
                            <div class="customer-img">
                                <img src="images/customer-img1.jpg" class="img-fluid" alt="#">
                                <p>Kim</p>
                                
                            </div>
                            <div class="customer-content-wrap">
                                <div class="customer-content">
                                    <div class="customer-review">
                                        <h6>Exellent!</h6>
                                        <span></span>
                                        <span></span>
                                        <span></span>
                                        <span></span>
                                        <span class="round-icon-blank"></span>
                                        <p>Reviewed 4 months ago</p>
                                    </div>
                                    <div class="customer-rating">8.0</div>
                                </div>
                                <p class="customer-text">When I was in town for a weekend I walked along the river. This restaurant stood out due to its gorgeous external appearance. This was lucky as the food was DELICIOUS, the beer refreshing and the prices were JUST right. 
DO NOT MISS THIS PLACE!!</p>
                               
                                
                                <span>34 people marked this review as helpful</span>
                                <a href="#"><span class="icon-like"></span>Helpful</a>
                            </div>
                        </div>
                        <hr>
                        <div class="customer-review_wrap">
                            <div class="customer-img">
                                <img src="images/customer-img2.jpg" class="img-fluid" alt="#">
                                <p>Ella</p>
                                
                            </div>
                            <div class="customer-content-wrap">
                                <div class="customer-content">
                                    <div class="customer-review">
                                        <h6>...</h6>
                                        <span class="customer-rating-red"></span>
                                        <span class="round-icon-blank"></span>
                                        <span class="round-icon-blank"></span>
                                        <span class="round-icon-blank"></span>
                                        <span class="round-icon-blank"></span>
                                        <p>Reviewed 2 months ago</p>
                                    </div>
                                    <div class="customer-rating customer-rating-red">2.0</div>
                                </div>
                                <p class="customer-text">It is sometimes very cold inside</p>
                                <span>10 people marked this review as helpful</span>
                                <a href="#"><span class="icon-like"></span>Helpful</a>
								<br><br><br>
<br><br><br>
<br><br><br>
	   <title>Komentet E Klienteve </title>
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
<div>
<table align="center">
<tbody>
		<tr>
			<td id="header1" colspan="5"><h3>Komentet e klienteve</h3></td>
		</tr>
		<tr>
			<th>ID</th>
			<th>Emri</th>
			<th>Email</th>
			<th>Message</th>
			<th>Emri i Restaurantit</th>
		</tr>
		<?php
	
	while($result = mysqli_fetch_assoc($data))
	{
		echo "<tr>
				<td>".$result ['id']."</td>
				<td>".$result ['emri']."</td>
				<td>".$result ['email']."</td>
				<td>".$result ['message']."</td>
				<td>".$result ['emri_restaurantit']."</td>
				
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

                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 responsive-wrap">
                    <div class="contact-info">
                        <img src="images/mapmarashi.png" class="img-fluid" alt="#">
                        <div class="address">
                            <span class="icon-location-pin"></span>
                            <p> Vatrat Shqiptare 25 <br> Prizren<br> Kosovo</p>
                        </div>
                        <div class="address">
                            <span class="icon-screen-smartphone"></span>
                            <p>+377 45 225 985</p>
                        </div>
                        <div class="address">
                            <span class="icon-clock"></span>
                            <p>Mon - Sun 07:00 am - 20:30 pm <br>
                                <span class="open-now">OPEN NOW</span></p>
                                         </div> 
						</div> 
						</div>
						 </div>
					</section>

	
                  
					<?php
$servername="localhost";
$username="root";
$password="";
$dbname="restoranti";
$conn = mysqli_connect($servername, $username, $password, $dbname);

error_reporting(0);
$query= "SELECT * FROM info WHERE emri_res= 'Marashi' ";
$data = mysqli_query($conn, $query);
$total = mysqli_num_rows($data);

if($total !=10)
{
	?>
		   <title>Informacione shtese </title>
   <style>
		
table, td, th {  
  border: 1px solid #ddd;
  text-align: left;
}

table {
  border-collapse: collapse;
  width: 100%;
}

th, td {
  padding: 15px;
}
</style>
<div>
<table align="center">
<tbody>
		<tr>
			<td id="header1" colspan="4"><h3>Informacione shtese</h3></td>
		</tr>
		<tr>
			<!--<th>ID</th>
			<th>Emri i Restaurantit</th> -->
			<th>Informacionet</th>
			<th>Pushimet</th>
			<th>Festat</th>
			</tr>
		
		
		
		<?php
	
	while($result = mysqli_fetch_assoc($data))
	{
		echo "<tr>
				
				
				<td>".$result ['informacionet']."</td>
				<td>".$result ['pushimet']."</td>
				<td>".$result ['festat']."</td>
				
				</tr>";
	}
}
else
{
	echo "No record found";
}
		
	?>
					
					</div>
					</tbody>
						</table>	
              
					

		<br><br><br>
    <!--//END BOOKING DETAILS -->
    <!--============================= FOOTER =============================-->
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
    <!-- Magnific popup JS -->
    <script src="js/jquery.magnific-popup.js"></script>
    <!-- Swipper Slider JS -->
    <script src="js/swiper.min.js"></script>
    <script>
        var swiper = new Swiper('.swiper-container', {
            slidesPerView: 3,
            slidesPerGroup: 3,
            loop: true,
            loopFillGroupWithBlank: true,
            pagination: {
                el: '.swiper-pagination',
                clickable: true,
            },
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            },
        });
    </script>
    <script>
        if ($('.image-link').length) {
            $('.image-link').magnificPopup({
                type: 'image',
                gallery: {
                    enabled: true
                }
            });
        }
        if ($('.image-link2').length) {
            $('.image-link2').magnificPopup({
                type: 'image',
                gallery: {
                    enabled: true
                }
            });
        }
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
