<?php

include('../conexion.php');

$link = mysqli_connect(HOST, USER, PASS, DBNAME);
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
$query = mysqli_query($link,"SELECT auto, COUNT(auto) FROM usuarios GROUP BY auto HAVING COUNT(auto)>1  ORDER BY COUNT(auto) DESC");



?>