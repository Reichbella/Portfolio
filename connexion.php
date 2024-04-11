<?php
$server="localhost";
$user="root";
$pw="";
$db="Portfolio";
$nom=$_POST['nom'];
$email=$_POST['email'];
$message=$_POST['message'];

$cnx= mysqli_connect($server,$user,$pw,$db);
$query="insert into Contact(Nom,Email,Message) values ('$nom','$email','$message')";
mysqli_query($cnx,$query);

header('Location: portfolio.php');
?>