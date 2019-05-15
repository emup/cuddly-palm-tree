<?php
// Create connection
$conn = new mysqli("localhost", "root", "", "cuddly-palm-tree");

$username = $_POST['username'];
$pw = $_POST['password'];
$email = $_POST['email'];
$naam = $_POST['naam'];
$adres = $_POST['adres'];
$woonplaats = $_POST['woonplaats'];
$geboortedatum = $_POST['geboortedatum'];
$telefoon = $_POST['telefoon'];

$password = password_hash($pw, PASSWORD_DEFAULT);

$sql = "INSERT INTO `user` (`username`, `password`, `email`, `naam`, `adres`, `woonplaats`, `geboortedatum`, `telefoon`) VALUES (?, ?, ?, ?, ?, ?, ?, ?)";
$statement = $conn->prepare($sql);
$statement->bind_param(
    "ssssssss",
    $username,
    $password,
    $email,
    $naam,
    $adres,
    $woonplaats,
    $geboortedatum,
    $telefoon
);
$statement->execute();

$message = "Registered successfully!";
echo "<script type='text/javascript'>const msg = alert('$message')</script>";

header("refresh:2; url=login.php");
