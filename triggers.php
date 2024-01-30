<?php 
    include("db.php");
    $con=conectar();
    $sql="SELECT * FROM log";
    $query=mysqli_query($con,$sql);
    $row=mysqli_fetch_array($query);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>disparadores</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link href="css/style.css" rel="stylesheet">
    
</head>
<body>
<div class="col-md-8" style="content: center;">
        <table class="table table-striped" id="tabla" name="tabla" width="600" border="2" cellspacing="3" cellpadding="3" style="font-size: 10pt">
        <style>
            tabla {
            width: 100px;
            margin: 0 auto;
            }
        </style>

        <thead class="table-success table-striped">
            <tr>
                <!--<td style="text-align: center";>id</td>-->
                <td style="text-align: center";>Accion</td>
                <td style="text-align: center";>Fecha y hora</td>
            </tr>
        </thead>

        <tbody>
                <?php 
            $sql="SELECT * from log";
            $result=mysqli_query($con,$sql);

            while($mostrar=mysqli_fetch_array($result)){
            ?>
            <tr>
                <!--<td style="text-align: center;"><?php  echo $mostrar['id'] ?></td>-->
                <td style="text-align: center;"><?php  echo $mostrar['accion'] ?></td>
                <td style="text-align: center;"><?php  echo $mostrar['fecha_hora'] ?></td>
                </tr>
            <?php 
            }
            ?>
        </table>

            <div class="btn">
            <li><a href="CuentasxCobrar.php">pagina principal</a></li>
            <style type="text/css">
            li { color: black; 
                font-family: Verdana;
                display: inline;
                
            }
            a {
                text-decoration: none;
                background-color: gray; 
                border: none;
                color: white;
                padding: 15px 32px;
                text-align: center;
                display: inline-block;
                font-size: 16px;
            }
            .btn {
                justify-content: center;
            }
            </style>
        </div>
</body>
</html>