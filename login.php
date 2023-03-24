<?php 

$patente=$_GET['patente'];
$pasw=$_GET['password'];

include("./conexion/conexion.php");
$con = conectar();

$sql = "SELECT *  FROM vehiculo where codigo=$pasw and patente='$patente'";
$query = mysqli_query($con, $sql);
echo
$rows = mysqli_fetch_array($query);

if (is_null($rows)){

    echo "<script>alert('clave erronea')</script>";

    header( "Location: ./index.php?patente=$patente" ) ;

}else{
    echo "<script>alert('Clave correcta!')</script>";



$id_tracker=$rows['id_tracker'];

header( "Location: ./cerrado.php?patente=$patente&id_tracker=$id_tracker" );

}



?>