<?php
    include('app/update-data.php');
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

    <div class="container p-4">
        <div class="card">
        <div class="card-header">
            <h4>Actualizar datos del cliente</h4>
        </div>
        <div class="card-body">
            <p class="card-text">Los datos se actualizarán directamente de la base de datos.</p>
            <button class="btn btn-primary" type="button" data-bs-toggle="modal" data-bs-target="#exampleModal">Editar</button>
        </div>
        </div>
    </div>
    


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

                    <form name="form-modal", method="get" action="index.php">
                        <div class="form-group row">
                            <div class="col-8">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text">
                                            <i class="fa fa-address-card-o"></i>
                                        </div>
                                    </div>
                                    <input name="uppnombre" placeholder="Primer nombre" type="text" class="form-control">
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
                                    <input name="upsnombre" placeholder="Segundo nombre" type="text" class="form-control">
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
                                    <input name="uppapellido" placeholder="Primer apellido" type="text" class="form-control">
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
                                    <input name="upsapellido" placeholder="Segundo apellido" type="text" class="form-control">
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
                                    <input name="upprofesion" placeholder="Profesión" type="text" class="form-control">
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
                                    <input name="upcedula" placeholder="Cédula de identidad" type="text" class="form-control">
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
                                    <input name="uptelefono" placeholder="Teléfono" type="text" class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                    <button name="Update", type="#" class="btn btn-primary" value="Enviar">Guardar cambios</button>
                </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

<footer>
    <script src="js/jquery-3.6.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.js"></script>
</footer>

</html>