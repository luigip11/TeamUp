<!-- Product by Virtual LP -->
<?php

$conn=mysqli_connect("localhost","root","Luigi93.P11","team_up");

if(isset($_GET['remove'])){
    $id = $_GET['remove'];
    $conn->query("DELETE FROM partecipazione WHERE id=$id") or die($conn->error());
   
    header("location: home.php");
} 

?>