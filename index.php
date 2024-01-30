<?php 
    include("db.php");
    $con=conectar();

    $sql="SELECT *  FROM cheque";
    $query=mysqli_query($con,$sql);

    $row=mysqli_fetch_array($query);
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title> Cheques </title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
        
    </head>
    <body>
        <h1 style="text-align: center;">Cheques</h1>
            <div class="container mt-5">
                    <div class="row"> 
                        
                        <div class="col-md-3">
                            <h1 style="text-align: center;">Ingrese datos</h1>
                                <form action="insertar.php" method="POST">
                                    <!--
                                    <input type="int" class="form-control mb-3" name="id" placeholder="N°Cuenta">
                                    -->
                                    <input type="text" class="form-control mb-3" name="nombre" placeholder="Nombre">
                                    <input type="datetime-local" class="form-control mb-3" name="fecha" placeholder="fecha">
                                    <input type="text" class="form-control mb-3" name="producto" placeholder="producto">
                                    <input type="number" class="form-control mb-3" name="precio" placeholder="0.00$">
                                    
                                    
                                    <input type="submit" class="btn btn-primary">
                                </form>
                        </div>
                        <div class="col-md-8">
                            <table class="table" >
                                <thead class="table-success table-striped" >
                                    <tr>
                                        <th style="text-align: center;">N° Cuenta</th>
                                        <th style="text-align: center;">fecha</th>
                                        <th style="text-align: center;">producto</th>
                                        <th style="text-align: center;">precio</th>
                                        <th></th>
                                        <th></th>
                                    </tr>
                                </thead>

                                <tbody>
                                        <?php
                                            while($row=mysqli_fetch_array($query)){
                                        ?>
                                            <tr>
                                                <th style="text-align: center;"><?php  echo $row['id_cheque']?></th>
                                                <th style="text-align: center;"><?php  echo $row['nombre']?></th> 
                                                <th style="text-align: center;"><?php  echo $row['fecha']?></th> 
                                                <th style="text-align: center;"><?php  echo $row['producto']?></th>
                                                <th style="text-align: center;"><?php  echo $row['precio']?></th>
                                                
                                                <br>
                                                <th style="text-align: center;"><a href="actualizar.php?id=<?php echo $row['id_cheque'] ?>" class="btn btn-info">Editar</a></th>
                                                <th style="text-align: center;"><a href="delete.php?id=<?php echo $row['id_cheque'] ?>" class="btn btn-danger">Eliminar</a></th>                                        
                                            </tr>
                                        <?php 
                                            }
                                        ?>
                                </tbody>
                            </table>
                        </div>

                        <!--
                        <div class="btn">
                            <li><a href="triggers.php">Triggers</a></li>
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
                        -->
                    </div>  
            </div>
    </body>
</html>