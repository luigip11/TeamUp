<!-- Product by Virtual LP -->
<?php

$conn=mysqli_connect("localhost","root","","team_up");

if(isset($_GET['delete'])){
    $id = $_GET['delete'];
    $conn->query("DELETE FROM users WHERE id=$id") or die($conn->error());
   
    $_SESSION['message'] = "Utente eliminato!";
    $_SESSION['msg_type'] = "Errore";

    header("location: login.php");
}

?>