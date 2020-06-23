<?php
include('conexion.php');

$fecha    = date("d/m/Y");
$email    = $_POST['email'];
$auto     = $_POST['auto'];
$ip     =  '312.313.313.312';
//$ip     = $_SERVER['REMOTE_ADDR'];

$link = mysqli_connect(HOST, USER, PASS, DBNAME);


if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}else{
	$query = mysqli_query($link,"SELECT * FROM usuarios WHERE ip='$ip' OR email='$email'");
    $sql = "INSERT INTO usuarios(fecha, email, auto,ip) VALUES ('$fecha', '$email', '$auto','$ip')";

    //Checking to see if name or email already exsist
    if(mysqli_num_rows($query) > 0) {
        echo "El correo o dispositivo ya se encuentra registrado.";
    }
    elseif(!mysqli_query($link, $sql)) {
        echo 'Could not insert';
    }
    else {
        echo "Gracias por participar " . $_POST['email'] . " datos guardados correctamente.";
    }
}
mysqli_close($link);


//SELECT COUNT(auto) FROM usuarios WHERE auto='Monterrey - Camaro 68';
//SELECT auto, COUNT(auto) FROM usuarios GROUP BY auto HAVING COUNT(auto)>1
?>



