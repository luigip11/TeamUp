<!-- Product by Virtual LP -->
<?php

require('config.php'); // includere la connessione al database

// una volta inviato il modulo, controlla e crea la sessione utente.
    if (isset($_POST['email'])) {
        $email = stripslashes($_REQUEST['email']);    
        $email = mysqli_real_escape_string($con, $email);

        $password = stripslashes($_REQUEST['password']);
        $password = mysqli_real_escape_string($con, $password);
        // verificare che l'utente sia presente nel database
        $query = "SELECT * FROM `users` WHERE email='$email' AND password='$password'";
        $result = mysqli_query($con,$query) or die(mysql_error());
        $rows = mysqli_num_rows($result);
        if ($rows == 1) {
            $_SESSION['email'] = $email;
        header("Location: home.php");
         }else{
    echo "<div class='form'>
          <h2>E-mail o password errate!</h2>
          <br/>Clicca qui per ripetere il <a href='login.php'>Login</a></div>";
        }
    }else{
?>

<!DOCTYPE html>

<head>
<meta charset="utf-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<link href="login.css" rel="stylesheet" type="text/css">
<link href="foundation.css" rel="stylesheet" type="text/css">

<title>TeamUp Login</title>

    <!-- Font Awesome -->
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet">
     <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
    <!-- Main Style -->
    <link href="style.css" rel="stylesheet">

</head>

<header>
<div class="header-nav">
 <a href="index.php"><img src="assets/images/logo.png" alt="logo"></a>
</div>
</header>

<body>

<form action="" method="post">
  <div class="sign-in-form">
    <h4 class="text-center">Effettua Login</h4>

    <label for="sign-in-form-email">Email</label>
    <input type="email" class="sign-in-form-email" id="sign-in-form-email" name="email" required>
    <span class="help-block">Inserisci l'email con cui ti sei registrato/a.</span>
<br>
<br>    
    <label for="sign-in-form-password">Password</label>
    <input type="password" class="sign-in-form-password" id="sign-in-form-password" name="password" required>
    <span class="help-block">Inserisci la password con cui ti sei registrato/a.</span>
<br>
    <button type="submit" class="sign-in-form-button" value="login">Login</button>
    &nbsp
    <button type="submit" class="sign-in-form-registration-button"><a href="register.php">Non hai un account? Registrati!</a></button>
  </div>
</form>

&nbsp 

<footer>
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

<?php } ?>
</body>
</html