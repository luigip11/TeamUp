<!-- Product by Virtual LP -->
<?php

session_start(); //inizia una nuova sessione

$con = mysqli_connect("localhost", "root", "Luigi93.P11", "team_up");

//funzione per messaggio popup in javascript
function function_alert($message) {
  echo "<script>alert('$message');</script>";
}

if (isset($_REQUEST['id_autore'])){
    $id_autore = stripslashes($_REQUEST['id_autore']);
    $id_autore = mysqli_real_escape_string($con,$id_autore); 

    $descrizione = stripslashes($_REQUEST['descrizione']);
    $descrizione = mysqli_real_escape_string($con,$descrizione);

    $tipologia = stripslashes($_REQUEST['tipologia']);
    $tipologia = mysqli_real_escape_string($con,$tipologia); 

    $numero_max = stripslashes($_REQUEST['numero_max']);
    $numero_max = mysqli_real_escape_string($con,$numero_max);

    $costo = stripslashes($_REQUEST['costo']);
    $costo = mysqli_real_escape_string($con,$costo);

    $obiettivi = stripslashes($_REQUEST['obiettivi']);
    $obiettivi = mysqli_real_escape_string($con,$obiettivi);

    $pagamento = stripslashes($_REQUEST['pagamento']);
    $pagamento = mysqli_real_escape_string($con,$pagamento);

//inserisci nella tabella del database
$query = "INSERT into `team` (`descrizione`, `id_autore`, `tipologia`, `numero_max`, `costo`, `obiettivi`, `pagamento`) 
VALUES ('$descrizione', '$id_autore', '$tipologia', '$numero_max', '$costo', '$obiettivi','$pagamento')";

        $result = mysqli_query($con,$query);
        if($result){ //richiamo funzione
            function_alert("Creazione team effettuata con successo!");
        }
    }

?>

<!DOCTYPE html>

  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="register.css" rel="stylesheet" type="text/css">
    <link href="foundation.css" rel="stylesheet" type="text/css">

    <link class="jsbin" href="http://ajax.googleapis.com/ajax/libs/jqueryui/1/themes/base/jquery-ui.css" rel="stylesheet" type="text/css" />
    <title>Team Up : Crea Team</title>
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

	<!-- Main content -->
<section id="mu-service">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="mu-service-area">
                            <!-- Title -->
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="mu-title">
                                        <h2>CREA TEAM</h2>
                                        <p>Compila il form per creare il tuo team!</p>
                                    </div>
                                </div>
                            </div>

	<form action="" method="POST">
  <div class="sign-in-form">

     <label for="mu-single-service-content">Descrizione</label>
     <input type="text" class="mu-register-and-search-bar-form" name="descrizione" required>
    
    <label for="mu-single-service-content">Id Autore</label>
    <input type="number" class="mu-register-and-search-bar-form" placeholder="Corrisponde al tuo ID nel Database (visualizzalo nel tuo profilo utente)" name="id_autore" required>

     <label for="mu-single-service-content">Tipologia</label>
     <input type="text" class="mu-register-and-search-bar-form" name="tipologia" required>
    
    <label for="mu-single-service-content">Numero massimo partecipanti</label>
    <input type="number" class="mu-register-and-search-bar-form" name="numero_max" required>
    
     <label for="mu-single-service-content">Costo in €</label>
     <input type="number" class="mu-register-and-search-bar-form" name="costo" required>
     
    <label for="mu-single-service-content">Obiettivi</label>
    <input type="text" class="mu-register-and-search-bar-form" name="obiettivi" required>
     
    <label for="mu-single-service-content" name="pagamento">Modalità di pagamento</label><br>
    <input type="checkbox" class="radio" value="Nessuno" name="pagamento">
    <label for="pagamento"> Nessuno</label>
    <input type="checkbox" class="radio" value="Paypal" name="pagamento">
    <label for="pagamento"> Paypal</label>
    <input type="checkbox" class="radio" value="Carta di credito" name="pagamento">
    <label for="pagamento"> Carta di credito</label><br>
    <br>
    <br>
    &nbsp
     
    <button type="submit" name="update" id="update" value="update"class="sign-in-form-registration-button">Crea Team</button>
</div>
</form>

	</div>
   </div>
  </div>
 </div>
</section>
<!-- End Main content -->

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

    <!-- Script per i checkbox -->
    <script>
    	// the selector will match all input controls of type :checkbox
        // and attach a click event handler 
        $("input:checkbox").on('click', function() {
        // in the handler, 'this' refers to the box clicked on
        var $box = $(this);
        if ($box.is(":checked")) {
        // the name of the box is retrieved using the .attr() method
        // as it is assumed and expected to be immutable
        var group = "input:checkbox[name='" + $box.attr("name") + "']";
        // the checked state of the group/box on the other hand will change
        // and the current value is retrieved using .prop() method
        $(group).prop("checked", false);
        $box.prop("checked", true);
        } else {
                 $box.prop("checked", false);
                }
        });

    </script>

  </body>