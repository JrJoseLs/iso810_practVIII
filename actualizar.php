<?php 
    include("db.php");
    $con=conectar();

$id_cheque=$_GET['id'];

$sql="SELECT * FROM cheque, cliente, productos, factura WHERE id_cheque='$id_cheque'";
$query=mysqli_query($con,$sql);

$row=mysqli_fetch_array($query);
?>


<!DOCTYPE html>
<html lang="en">
    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
        
        <title>Actualizar</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
        
    </head>
    <body>
                <div class="container mt-5">
                    <form action="update.php" method="POST">
                    
                                <input type="hidden" name="id_cheque" value="<?php echo $row['id_cheque']  ?>">

                                

                                <h1 style="font-size: 20px;">Nombre</h1>
                                <input type="text" class="form-control mb-3" name="nombre" placeholder="nombre" value="<?php echo $row['nombre']  ?>">
                                <h1 style="font-size: 20px;">Fecha</h1>
                                <input type="datetime-local" class="form-control mb-3" name="fecha" placeholder="fecha" value="<?php echo $row['fecha']  ?>">
                                <h1 style="font-size: 20px;">Producto</h1>
                                <input type="number" class="form-control mb-3" name="producto" placeholder="producto" value="<?php echo $row['producto']  ?>">
                                <h1 style="font-size: 20px;">Monto</h1>
                                <input type="number" class="form-control mb-3" name="monto" placeholder="monto" value="<?php echo $row['precio']  ?>">
                                
                            <input type="submit" class="btn btn-primary btn-block" value="Actualizar">
                    </form>
                    
                </div>
    </body>
</html>