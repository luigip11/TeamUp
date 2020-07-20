<!-- Product by Virtual LP -->
<?php

session_start(); //inizia una nuova sessione 

$conn=mysqli_connect("localhost","root","","team_up");

//funzione per messaggio popup in javascript
function function_alert($message) {
	echo "<script>alert('$message');</script>";
}

//visualizza dati utente 
if(isset($_GET['edit'])){
	$id = $_GET['edit'];
	$result = $conn->query("SELECT * FROM users WHERE id=$id");
	
		$row = $result->fetch_array();
		$nome = $row['nome'];
        $cognome = $row['cognome'];
        $email = $row['email'];
        $password = $row['password'];
        $telefono = $row['telefono'];
        $foto = $row['foto'];
        $motivoIscrizione = $row['motivoIscrizione'];	
} 

//aggiorna dati utente  
if(isset($_POST['update'])){

    $nome = $_POST['nome'];
    $cognome = $_POST['cognome'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $telefono = $_POST['telefono'];
    $foto = $_POST['foto'];
    $motivoIscrizione = $_POST['motivoIscrizione'];

    $sql = "UPDATE `users` SET nome='$nome', cognome='$cognome', email='$email', password='$password', telefono='$telefono', foto='$foto', motivoIscrizione='$motivoIscrizione' WHERE id=$id ";
    if ($conn->query($sql) === TRUE) { 
    //richiamo funzione
    function_alert("Dati modificati con successo!");
            
    }
     } else {
            }
            $conn->close();
?>

<!DOCTYPE html>

  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Team Up : Edit Profilo</title>
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/icon" href="assets/images/favicon.ico"/>
    <!-- Font Awesome -->
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet">
     <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
 
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
				<!-- Text based logo -->
				<a class="navbar-brand mu-logo" href="home.php"><span><img src="assets/images/index.png"></span></a>
				<!-- image based logo -->
			   	<!-- <a class="navbar-brand mu-logo" href="home.php"><img src="assets/images/index.png" alt="logo"></a> -->
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

	<!-- Start main content -->
	<main>
        
        <form method = "post" action ="">
        <br>
        <!-- Start Profile Data -->
		<section id="mu-service">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="mu-service-area">
							<!-- Title -->
							<div class="row">
								<div class="col-md-12">
									<div class="mu-title">
										<h2>AGGIORNA I TUOI DATI UTENTE</h2>
									</div>
								</div>
							</div>
                                  
                                            <!-- Start Nome -->
											<div class="col-md-4">
												<div class="mu-single-service">
													<div class="mu-single-service-icon"><i class="fa fa-user" aria-hidden="true"></i></div>
													<div class="mu-single-service-content">
														<h3>Nome</h3>
														<p><input type="text" name="nome" value="<?php echo $nome; ?>"></p>
													</div>
												</div>
											</div>
											<!-- End Nome -->
											<!-- Start Cognome -->
											<div class="col-md-4">
												<div class="mu-single-service">
													<div class="mu-single-service-icon"><i class="fa fa-user" aria-hidden="true"></i></div>
													<div class="mu-single-service-content">
														<h3>Cognome</h3>
														<p><input type="text" name="cognome" value="<?php echo $cognome; ?>"></p>
													</div>
												</div>
											</div>
											<!-- End Cognome -->
                                            <!-- Start Email -->
											<div class="col-md-4">
												<div class="mu-single-service">
													<div class="mu-single-service-icon"><i class="fa fa-envelope" aria-hidden="true"></i></div>
													<div class="mu-single-service-content">
														<h3>Email</h3>
														<p><input type="email" name="email" value="<?php echo $email; ?>"></p>
													</div>
												</div>
											</div>
											<!-- End Email -->
											<!-- Start Password -->
											<div class="col-md-4">
												<div class="mu-single-service">
													<div class="mu-single-service-icon"><i class="fa fa-key" aria-hidden="true"></i></div>
													<div class="mu-single-service-content">
														<h3>Password</h3>
														<p><input type="text" name="password" value="<?php echo $password; ?>"></p>
													</div>
												</div>
											</div>
											<!-- End Password -->
											<!-- Start Telefono -->
											<div class="col-md-4">
												<div class="mu-single-service">
													<div class="mu-single-service-icon"><i class="fa fa-phone" aria-hidden="true"></i></div>
													<div class="mu-single-service-content">
														<h3>Telefono</h3>
														<p><input type="tel" name="telefono" value="<?php echo $telefono; ?>"></p>
													</div>
												</div>
											</div>
											<!-- End Telefono -->
											<!-- Start Foto -->
											<div class="col-md-4">
												<div class="mu-single-service">
													<div class="mu-single-service-icon"><i class="fa fa-photo" aria-hidden="true"></i></div>
													<div class="mu-single-service-content">
														<h3>Foto</h3>
														<p><input type="file" name="foto" value="<?php echo $foto; ?>"></p>
													</div>
												</div>
											</div>
											<!-- End Foto -->
											<!-- Start Motivo Iscrizione -->
											<div class="col-md-4">
												<div class="mu-single-service">
													<div class="mu-single-service-icon"><i class="fa fa-comment-o" aria-hidden="true"></i></div>
													<div class="mu-single-service-content">
														<h3>Motivo Iscrizione</h3>
														<p><input type="text" name="motivoIscrizione" value="<?php echo $motivoIscrizione; ?>"></p>
													</div>
												</div>
											</div>
											<!-- End Motivo Iscrizione -->
											
                                           <!-- Pulsante di aggiornamento -->
                                           <p class="form-submit">
                                            <input type="submit" name="update" id="update" value="update" class="mu-send-msg-btn">
                                           </p>
                                           <!-- End pulsante di aggiornamento -->
                                          
                                           <p class="form-submit">
                                            <button type="button" name="button" class="mu-send-msg-btn"><a href="profilo.php"> Indietro</a></button>
                                           </p>
                            </div>
                    </div>
                </div>
            </div>
        </section>

     </form>
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