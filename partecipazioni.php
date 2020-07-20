<!-- Product by Virtual LP -->
<?php

session_start(); //inizia una nuova sessione

$conn = mysqli_connect("localhost","root","","team_up");
$sql = "SELECT * FROM `partecipazione` INNER JOIN team ON team.id = partecipazione.id_team";
$run = mysqli_query($conn, $sql);
  while ($row=mysqli_fetch_array($run))
  {
   $descrizione = $row[4];
   $id_autore = $row[5];
   $tipologia = $row[6];
   $obiettivi = $row[9];
  
?>
 <?php } ?>

<?php

$conn = mysqli_connect("localhost","root","","team_up");
$sql1 = "SELECT * FROM `partecipazione` INNER JOIN users ON users.id = partecipazione.id_user";
$run1 = mysqli_query($conn, $sql1);
  while ($row=mysqli_fetch_array($run1))
  {
   $id = $row[0];
   $id_team = $row[1];
   $id_user = $row[2];
     
?>
 <?php } ?>

<?php

$conn = mysqli_connect("localhost","root","","team_up");
$sql2 = "SELECT * FROM `team` INNER JOIN users ON users.id = team.id_autore";
$run2 = mysqli_query($conn, $sql2);
  while ($row=mysqli_fetch_array($run2))
  {  
   $email = $row[11];
  
?>
 <?php } ?>
 

<!DOCTYPE html>

  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Team Up : Partecipazioni</title>
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

<!-- Stile css per tabella --> 
<style>
	
.table-responsive {width: 100%;}
.table-responsive table td, 
.table-responsive table th {min-width: 50px; border: #ccc solid 0.5px; padding: 0.5em 1em;}

*, *:before, *:after {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
}

table {
  background: #012B39;
  border-radius: 0.25em;
  border-collapse: collapse;
  margin: 1em;
  margin-left: auto;
  margin-right: auto;
}

th {
  border-bottom: 1px solid #364043;
  color: #0091ea;
  font-size: 0.85em;
  font-weight: 600;
  padding: 0.5em 1em;
  text-align: left;
}

td {
  color: #fff;
  font-weight: 400;
  padding: 0.65em 1em;
}

tbody tr {
  transition: background 0.25s ease;
}

tbody tr:hover {
  background: #014055;
}
	

</style>
<!-- Fine Stile css per tabella --> 

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
							            <h2>PARTECIPAZIONI</h2>
									    <p>Qui puoi visualizzare e gestire le tue partecipazioni ai team.</p>
									</div>
								</div>
							</div>
<!-- Table -->
 <div class="table-responsive">
  <br>	
   <table>
   	<thead>
	<tr>
		<th>Tipologia</th>
		<th>Team</th>
		<th>Obiettivi</th>
		<th>Autore Team</th>
		<th>ASTENSIONE</th>
	</tr>
    </thead>

	<tbody>
	<tr>
     <td><?php echo $tipologia; ?></td>
     <td><?php echo $descrizione; ?></td>
     <td><?php echo $obiettivi; ?></td>
     <td><?php echo $email; ?></td>
     <td><a href="delete_partec.php?remove=<?php echo $id; ?>" class="btn btn-primary btn-lg" type="submit">X</a></td>
    </tr>

   </tbody>
   </table>	
 <!-- End Table -->
  <br>
 </div>
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
   
  </body>
</html> 
