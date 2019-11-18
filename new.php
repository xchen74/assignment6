<?php
include('connect-db.php');
$name = mysqli_real_escape_string($connection, htmlspecialchars($_POST['name']));
$email = mysqli_real_escape_string($connection, htmlspecialchars($_POST['email']));
$years = mysqli_real_escape_string($connection, htmlspecialchars($_POST['years']));
mysqli_query($connection, "INSERT INTO team_berlin (name, email, years) VALUES ('$name','$email','$years')");
mysqli_close($connection);
?>