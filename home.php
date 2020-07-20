<!-- Product by Virtual LP -->
<?php

session_start(); //inizia una nuova sessione  
 
?>


<!DOCTYPE html>

  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Team Up : Home</title>
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/icon" href="assets/images/favicon.ico"/>
    <!-- Font Awesome -->
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet">
     <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
    <!-- Slick slider -->
    <link href="assets/css/slick.css" rel="stylesheet">
    <!-- Gallery Lightbox -->
    <link href="assets/css/magnific-popup.css" rel="stylesheet">
 
    <!-- Main Style -->
    <link href="style.css" rel="stylesheet">

    <!-- Fonts -->

    <!-- Google Fonts Raleway -->
	<link href="https://fonts.googleapis.com/css?family=Raleway:300,400,400i,500,500i,600,700" rel="stylesheet">
	<!-- Google Fonts Open sans -->
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,400i,600,700,800" rel="stylesheet">
 
 
	</head>
  <body>
  	
  	<!-- Start Header -->
	<header id="mu-header">
		<div class="container">
			<nav class="navbar navbar-expand-lg navbar-light mu-navbar">
				<!-- Logo -->
				<a class="navbar-brand mu-logo" href="home.php"><span><img src="assets/images/home.png" alt="logo"></span></a>
			  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
			    <span class="fa fa-bars"></span>
			  </button>

			  <div class="collapse navbar-collapse" id="navbarSupportedContent">
			    <ul class="navbar-nav mr-auto mu-navbar-nav">
			      <li class="nav-item active">
			        <a href="home.php">Home</a>
			      </li>
			      <li class="nav-item"><a href="createam.php">Crea Team</a></li>
			      <li class="nav-item"><a href="gestisciteam.php">Gestisci Team</a></li>
			      <li class="nav-item"><a href="partecipazioni.php">Partecipazioni</a></li>
			      <!-- User profile -->
			      <li class="nav-item dropdown"> 
				        <a class="dropdown-toggle" role="button" id="navbarDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
				        	<span style="color:black;"><?php echo htmlentities($_SESSION['email'], ENT_QUOTES, 'UTF-8'); ?></span>
                
				        <img class="mu-rt-img" src="assets/images/avatar.png" alt="img">

				        </a>
				        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
				          <a class="dropdown-item" href="profilo.php">Il Mio Profilo</a>
				          <a class="dropdown-item" href="logout.php">LOGOUT</a>
				        </div>
				    </li>
				    <!-- End User profile -->
			  </div>
			</nav>
		</div>
	</header>
	<!-- End Header -->

       <!-- Start Search -->
		<section id="mu-register-and-search-bar">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="mu-register-and-search-bar-area">
							<!-- Search bar -->
							<div class="row">
								<div class="col-md-12">
									<div class="mu-register-and-search-bar-content">
										<form class="mu-register-and-search-bar-form" action="listateam.php" method="POST">
											<input type="text" name="valueToSearch" placeholder="Ricerca un team...">
											<button class="mu-register-and-search-bar-btn">RICERCA</button>
										</form>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- End Search -->

	<!-- Start slider area -->
	<div id="mu-slider">
		<div class="mu-slide">
			<!-- Start single slide  -->
			<div class="mu-single-slide">
				<img src="assets/images/slider-img-1.jpg" alt="slider img">
				<div class="mu-single-slide-content-area">
					<div class="container">
						<div class="row">
							<div class="col-md-12">
								<div class="mu-single-slide-content">
									<h1>Benvenuto in Team Up! Ora potrai creare, gestire o partecipare a qualsiasi team!</h1>
									<p></p>
									<a class="mu-primary-btn" href="profilo.php">MIO PROFILO <span class="fa fa-long-arrow-right"></span></a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- End single slide  -->
		</div>
	</div>
	<!-- End Slider area -->

	
	<!-- Start main content -->
	<main>
		

	</main>
	
	<!-- End main content -->	
			
			
	<!-- Start footer -->
	<footer id="mu-footer">
		
		<div class="mu-footer-bottom">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="mu-footer-bottom-area">
							<p class="mu-copy-right">&copy; Copyright <a rel="nofollow">Virtual LP 2020</a>. All right reserved.</p>
						</div>
					</div>
				</div>
			</div>
		</div>

	</footer>
	<!-- End footer -->

	
	<!-- JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
	<!-- Slick slider -->
    <script type="text/javascript" src="assets/js/slick.min.js"></script>
    <!-- Progress Bar -->
    <script src="https://unpkg.com/circlebars@1.0.3/dist/circle.js"></script>
    <!-- Filterable Gallery js -->
    <script type="text/javascript" src="assets/js/jquery.filterizr.min.js"></script>
    <!-- Gallery Lightbox -->
    <script type="text/javascript" src="assets/js/jquery.magnific-popup.min.js"></script>
    <!-- Counter js -->
    <script type="text/javascript" src="assets/js/counter.js"></script>
    <!-- Ajax contact form  -->
    <script type="text/javascript" src="assets/js/app.js"></script>
    
    <!-- Custom js -->
	<script type="text/javascript" src="assets/js/custom.js"></script>
    
  </body>
</html>
