<?php
include("db.php");
$con=conectar();

$id_cheque=$_POST['id_cheque'];
$nombre=$_POST['nombre'];
/*$pago=$_POST['pago'];*/
$fecha=$_POST['fecha'];
$producto=$_POST['producto'];
$precio=$_POST['precio'];

$sql="INSERT INTO cheque, cliente, productos, factura VALUES('$id_cheque','$nombre',/*'$pago'*/,'$fecha','$producto','$precio')";
$query= mysqli_query($con,$sql);

if($query){
    Header("Location: index.php");
    
}else {
}
?>
