<!DOCTYPE html>
<?php
$servername="localhost";
$username="root";
$password="";
$dbname="restoranti";
$conn = mysqli_connect($servername, $username, $password, $dbname);

error_reporting(0);
$query= "SELECT * FROM review WHERE emri_restaurantit= 'Dukagjini'" ;
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
                    <a href="foto/dukagjini1.jpg" class="grid image-link">
                        <img src="foto/dukagjini1.jpg" class="img-fluid" alt="#">
                    </a>
                </div>
                <div class="swiper-slide">
                    <a href="foto/dukagjini2.jpg" class="grid image-link">
                        <img src="foto/dukagjini2.jpg" class="img-fluid" alt="#">
                    </a>
                </div>
                <div class="swiper-slide">
                    <a href="foto/dukagjini1.jpg" class="grid image-link">
                        <img src="foto/dukagjini1.jpg" class="img-fluid" alt="#">
                    </a>
                </div>
                <div class="swiper-slide">
                    <a href="foto/dukagjini1.jpg" class="grid image-link">
                        <img src="foto/dukagjini1.jpg" class="img-fluid" alt="#">
                    </a>
                </div>
                <div class="swiper-slide">
                    <a href="foto/dukagjini2.jpg" class="grid image-link">
                        <img src="foto/dukagjini2.jpg" class="img-fluid" alt="#">
                    </a>
                </div>
                <div class="swiper-slide">
                    <a href="foto/dukagjini1.jpg" class="grid image-link">
                        <img src="foto/dukagjini1.jpg" class="img-fluid" alt="#">
                    </a>
                </div>
            </div>
            <!-- Add Pagination -->
            <div class="swiper-pagination swiper-pagination-white"></div>
            <!-- Add Arrows -->
            <div class="swiper-button-next swiper-button-white"></div>
            <div class="swiper-button-prev swiper-button-white"></div>
        </div>
    </div>
    <!--//END BOOKING -->
    <!--============================= RESERVE A SEAT =============================-->
    <section class="reserve-block">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h5>Hotel Dukagjini</h5>
                    <p><span>$$$</span>$$</p>
                    <p class="reserve-description"> Strehim modern, një pishinë shtëpie, banjë me avull dhe një palestër.</p>
                </div>
                <div class="col-md-6">
                    <div class="reserve-seat-block">
                        <div class="reserve-rating">
                            <span>4.5</span>
                        </div>
                        <div class="review-btn">
                            <a href="review.php" class="btn btn-outline-danger">REVIEW</a>
                            <span>68 reviews</span>
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
                            <p>Në lumin e Bardhë dhe 1 km larg stacionit të trenit, ky hotel është 300 m nga pazari historik, 3 km nga Monumentet Mesjetare në Kosovë - një sit i Trashëgimisë Botërore - dhe 9 km nga pamje komanduese të Grykës së Rugovës.

Dhomat me shkëlqim shfaqin pa Wi-Fi, TV me ekran të sheshtë, kuti të sigurta dhe minibare. Disa kanë ballkone me pamje nga qyteti dhe / ose Gryka e Rugovës.

Pajisjet komplimente përbëhen nga mëngjesi dhe përdorimi i ambienteve të banjëve - të cilat përfshijnë një pishinë, sauna dhe hamami, plus një vaskë vorbull dhe një palestër. Ekziston edhe një dhomë ngrënie zyrtare.</p>
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
                        <h5>68 Reviews</h5>
                        <hr>
                        <div class="customer-review_wrap">
                            <div class="customer-img">
                                <img src="images/customer-img1.jpg" class="img-fluid" alt="#">
                                <p>Dashi</p>
                                
                            </div>
                            <div class="customer-content-wrap">
                                <div class="customer-content">
                                    <div class="customer-review">
                                        <h6>So good</h6>
                                        <span></span>
                                        <span></span>
                                        <span></span>
                                        <span></span>
                                        <span class="round-icon-blank"></span>
                                        <p>Reviewed 2 year ago</p>
                                    </div>
                                    <div class="customer-rating">7.0</div>
                                </div>
                                <p class="customer-text">APerfect place to stay in Peja. Hotel Dukagjini is one of the old fashioned looking hotels from the outside made of stone bricks and a very contemporary hotel from the inside. …</p>
                                  <span>50 people marked this review as helpful</span>
                                <a href="#"><span class="icon-like"></span>Helpful</a>
                            </div>
                        </div>
                        <hr>
                        <div class="customer-review_wrap">
                            <div class="customer-img">
                                <img src="images/customer-img2.jpg" class="img-fluid" alt="#">
                                <p>NoName</p>
                                
                            </div>
                            <div class="customer-content-wrap">
                                <div class="customer-content">
                                    <div class="customer-review">
                                        <h6>Bad</h6>
                                        <span class="customer-rating-red"></span>
                                        <span class="round-icon-blank"></span>
                                        <span class="round-icon-blank"></span>
                                        <span class="round-icon-blank"></span>
                                        <span class="round-icon-blank"></span>
                                        <p>Reviewed 3 years ago</p>
                                    </div>
                                    <div class="customer-rating customer-rating-red">1.5</div>
                                </div>
                                <p class="customer-text">The place has gone down hill the food is absolutely horrible ordered omelet what a disaster and the price for 2 people just breakfast is out if control for this country and as for the waiters need to be taught to listen ti what the customer is asking for thumbs down </p>
                                <span>5 people marked this review as helpful</span>
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
			<th>Emri</th>
			<th>Message</th>
			<th>Emri i Restaurantit</th>
			<th>Vleresimi</th>
			</tr>
		
		
		
		<?php
	
	while($result = mysqli_fetch_assoc($data))
	{
		echo "<tr>
				
				<td>".$result ['emri']."</td>
				<td>".$result ['message']."</td>
				<td>".$result ['emri_restaurantit']."</td>
				<td>".$result ['vleresimi']."</td>
				
				
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
                        <img src="images/mapdukagjini.png" class="img-fluid" alt="#">
                        <div class="address">
                            <span class="icon-location-pin"></span>
                            <p> Sheshi i Deshmoreve 2 <br> Peja 30000 <br> Kosovo</p>
                        </div>
                        <div class="address">
                            <span class="icon-screen-smartphone"></span>
                            <p> 039429999</p>
                        </div>
                        <div class="address">
                            <span class="icon-clock"></span>
                            <p>Mon - Sun All time there! <br>
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
$query= "SELECT * FROM info WHERE emri_res= 'Dukagjini' ";
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
