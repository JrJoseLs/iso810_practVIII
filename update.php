<?php
include("db.php");
$con=conectar();

$id_cuenta=$_POST['id_cuenta'];
$producto=$_POST['producto'];
$cantidad=$_POST['cantidad'];
$cliente=$_POST['cliente'];
$fecha=$_POST['fecha'];
$monto=$_POST['monto'];

$sql="UPDATE cxc SET  producto='$producto',cantidad='$cantidad',cliente='$cliente', fecha='$fecha', monto='$monto' WHERE id_cuenta='$id_cuenta'";
$query=mysqli_query($con,$sql);
    if($query){
        Header("Location: CuentasxCobrar.php");
    }
?>

