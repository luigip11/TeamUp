<!-- Product by Virtual LP -->
<?php

include("config.php"); // includere la connessione al database

if (isset($_REQUEST['email'])){
    $email = stripslashes($_REQUEST['email']);
    $email = mysqli_real_escape_string($con,$email); 

    $password = stripslashes($_REQUEST['password']);
    $password = mysqli_real_escape_string($con,$password);

    $nome = stripslashes($_REQUEST['nome']);
    $nome = mysqli_real_escape_string($con,$nome);

    $cognome = stripslashes($_REQUEST['cognome']);
    $cognome = mysqli_real_escape_string($con,$cognome);

    $telefono = stripslashes($_REQUEST['telefono']);
    $telefono = mysqli_real_escape_string($con,$telefono);

    $foto = stripslashes($_REQUEST['foto']);
    $foto = mysqli_real_escape_string($con,$foto);

    $motivoIscrizione = stripslashes($_REQUEST['motivoIscrizione']);
    $motivoIscrizione = mysqli_real_escape_string($con,$motivoIscrizione);

    
        $query = "INSERT into `users` (email, password, nome, cognome, telefono, foto, motivoIscrizione) 
VALUES ('$email', '$password', '$nome', '$cognome', '$telefono', '$foto', '$motivoIscrizione')"; // inserisci nella tabella del database
        $result = mysqli_query($con,$query);
        if($result){
            echo "<div class='form'>
                  <h2>Registrazione effettuata con successo!</h2>
                  <br/>Clicca qui per fare il <a href='login.php'>Login</a></div>";
        }
    }else{
         }


?>

<!DOCTYPE html>

<head>
<meta charset="utf-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<link href="register.css" rel="stylesheet" type="text/css">
<link href="foundation.css" rel="stylesheet" type="text/css">

<link class="jsbin" href="http://ajax.googleapis.com/ajax/libs/jqueryui/1/themes/base/jquery-ui.css" rel="stylesheet" type="text/css" />

<title>TeamUp Registrazione</title>

    <!-- Font Awesome -->
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet">
     <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
    <!-- Main Style -->
    <link href="style.css" rel="stylesheet">

</head>

<header>
<div class="header-nav">
 <a href="index.php"><img src="assets/images/logo.png"></a>
</div>
</header>

<body>

<form action="" method="post">
  <div class="sign-in-form">
    <h4 class="text-center">Registra un nuovo account</h4>
    <p class="text-center">Completa questo form per creare un account.</p>

    <label for="sign-in-form-nome">Nome</label>
    <input type="text" class="sign-in-form-nome" id="sign-in-form-nome" name="nome" required>
    <span class="help-block"></span>

     <label for="sign-in-form-cognome">Cognome</label>
     <input type="text" class="sign-in-form-cognome" id="sign-in-form-cognome" name="cognome" required>
     <span class="help-block"></span>

    <label for="sign-in-form-email">Email</label>
    <input type="email" class="sign-in-form-email" id="sign-in-form-email" name="email" required>
    <span class="help-block"></span>

     <label for="sign-in-form-password">Password</label>
     <input type="text" class="sign-in-form-password" id="sign-in-form-password" name="password" required>
     <span class="help-block"></span>

    <label for="sign-in-form-telefono">Telefono</label>
    <input type="tel" class="sign-in-form-telefono" id="sign-in-form-telefono" placeholder="3330011223" name="telefono" required>
    <span class="help-block"></span>

     <label for="sign-in-form-motivoIscrizione">Motivo dell'iscrizione</label>
     <input type="text" class="sign-in-form-motivoIscrizione" id="sign-in-form-motivoIscrizione" name="motivoIscrizione">
     <span class="help-block"></span>
  
    <label for="file">Seleziona una foto profilo</label>
    <input type='file' name="foto" onchange="readURL(this);"/> 
    <img id="foto" src="#" alt=".Immagine" width="150" height="150"/>

    <!-- Script per visualizzare anteprima immagine -->
    <script type="text/javascript">
    function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function (e) {
                $('#foto').attr('src', e.target.result);
            }

            reader.readAsDataURL(input.files[0]);
        }
    }
    </script>
    <!-- End script -->
    <br>
    <br>
    &nbsp
     
    <button type="submit" class="sign-in-form-registration-button" value="Registrati">Registrati</button>
    &nbsp
    <button type="submit" class="sign-in-form-button"><a href="login.php">Hai già un account? Effettua il Login!</a></button>
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

<!-- Script -->
<script class="jsbin" src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
<script class="jsbin" src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.0/jquery-ui.min.js"></script>

<?php  ?>
</body>
</html>
