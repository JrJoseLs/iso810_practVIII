<?php

include("db.php");
$con=conectar();

$id_cuenta=$_GET['id'];

$sql="DELETE FROM cheque, cliente, productos, factura WHERE id_cheque='$id_cheque'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: index.php");
    }
?>
