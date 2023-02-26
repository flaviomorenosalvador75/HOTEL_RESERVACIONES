<?php
include('Conexion.php');

$USUARIO=$_POST['usuario'];
$PASSWORD=$_POST['password'];

$consulta = "SELECT* FROM usuariost where usuario = '$USUARIO' AND contraseña = '$PASSWORD' ";
$resultado= mysqli_query($conexion, $consulta);

$filas=mysqli_num_rows($resultado);

if ($filas) {
    header("location:home.html");
}else {
    include("index.html");
    ?>
    <h1>ERROR DE AUTENTICACION</h1>
    <?php
}    
mysqli_free_result($resultado);
mysqli_close($conexion);
?>