<?php
    include('app/insertar.php');
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.css">
    <title>Sisgep</title>
</head>

<body>

    <div class="container">
        <div class="pt-3">
            <h2>Tabla clientes</h2>
            <p>Ingrese clientes en la base de datos</p>
        </div>
        <div class="row pt-5 pb-4">
            <div class="container-fluid">
                <button class="btn btn-success" type="button" data-bs-toggle="modal" data-bs-target="#exampleModal">Ingresar</button>
                <form class="d-flex p-md-2">
                    <form action="" method="get">
                        <input class="form-control me-2" name="buscar" id="myInput" type="search" placeholder="Ingrese un nombre..">
                        <button class="btn btn-primary me-1" name="enviar" type="submit">Buscar</button>
                        <button class="btn btn-success" href="<?php $mostrar ?>" name="enviar2">Mostrar todos</button>
                    </form>
                </form>
            </div>
            
        </div>
        <div class="pt-3">
            <table class="table">
                <thead class="table-dark">
                    <tr>
                        <th>#</th>
                        <th>Pnombre</th>
                        <th>Snombre</th>
                        <th>Papellido</th>
                        <th>Sapellido</th>
                        <th>Profesión</th>
                        <th>Cédula</th>
                        <th>Teléfono</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                    <?php
                        $conn = new Conexion();
                        $conn->conectar();
                        $cuando = "";
                        if(isset($_GET['enviar'])){
                            $busqueda=$_GET['buscar'];

                            if(isset($_GET['buscar'])){
                                $cuando="WHERE pnombre LIKE'%$busqueda%'";
                            }
                        }

                        $sql="SELECT * from cliente $cuando";
                        $mostrar=$conn->consultar($sql);
                        
                        if($mostrar -> num_rows > 0){

                            while($fila = mysqli_fetch_array($mostrar)){

                        ?>

                        <th><?php echo $fila['codCliente']?></th>
                        <td><?php echo $fila['pnombre']?></td>
                        <td><?php echo $fila['snombre']?></td>
                        <td><?php echo $fila['papellido']?></td>
                        <td><?php echo $fila['sapellido']?></td>
                        <td><?php echo $fila['profesion']?></td>
                        <td><?php echo $fila['cedula']?></td>
                        <td><?php echo $fila['telefono']?></td>
                        <td class="mx-auto"><a type="button" class="btn btn-success" href="actualizar.php" >Editar</a>
                        <button type="button" class="btn btn-danger active">Eliminar</button></td>
                        <td></td>
                    </tr>
                    <?php
                            }  
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </div>


    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h3 class="modal-title" id="exampleModalLabel">Ingrese sus datos</h3>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
                    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

                    <form name="form-modal", method="post">
                        <div class="form-group row">
                            <div class="col-8">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text">
                                            <i class="fa fa-address-card-o"></i>
                                        </div>
                                    </div>
                                    <input name="pnombre" placeholder="Primer nombre" type="text" class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-8">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text">
                                            <i class="fa fa-address-card-o"></i>
                                        </div>
                                    </div>
                                    <input name="snombre" placeholder="Segundo nombre" type="text" class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-8">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text">
                                            <i class="fa fa-address-card-o"></i>
                                        </div>
                                    </div>
                                    <input name="papellido" placeholder="Primer apellido" type="text" class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-8">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text">
                                            <i class="fa fa-address-card-o"></i>
                                        </div>
                                    </div>
                                    <input name="sapellido" placeholder="Segundo apellido" type="text" class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-8">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text">
                                            <i class="fa fa-briefcase"></i>
                                        </div>
                                    </div>
                                    <input name="profesion" placeholder="Profesión" type="text" class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-8">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text">
                                            <i class="fa fa-user-secret"></i>
                                        </div>
                                    </div>
                                    <input name="cedula" placeholder="Cédula de identidad" type="text" class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-8">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text">
                                            <i class="fa fa-phone-square"></i>
                                        </div>
                                    </div>
                                    <input name="telefono" placeholder="Teléfono" type="text" class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                    <button name="Submit", type="submit" class="btn btn-primary" value="Enviar">Agregar</button>
                </div>
                    </form>
                </div>
            </div>
        </div>
    </div>



</body>
<footer>
    <script src="js/jquery-3.6.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.js"></script>
</footer>

</html>


