<?php
include 'connect.php';
$sq="delete from city where idCidade=6";
mysqli_query($con,$sq);
header('location:viewall_city.php');
?>