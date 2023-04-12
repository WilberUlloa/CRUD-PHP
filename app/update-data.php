<?php
        include_once('gestionbd.php');
        $conn = new Conexion();
        $conn->conectar();
        if(isset($_GET["Update"]) && !empty($_GET["Update"])){
            $pnombre = trim($_POST['uppnombre']);
                $snombre = trim($_POST['upsnombre']);
                $papellido = trim($_POST['uppapellido']);
                $sapellido = trim($_POST['upsapellido']);
                $profesion = trim($_POST['upprofesion']);
                $cedula = trim($_POST['upcedula']);
                $telefono = trim($_POST['uptelefono']);

            $sql = "UPDATE cliente SET
                pnombre = '$pnombre',
                snombre = '$snombre',
                papellido = '$papellido',
                sapellido = '$sapellido',
                profesion = '$profesion',
                cedula = '$cedula',
                telefono = '$telefono'";
                
            $actualizar = $conn-> consultar($sql);
        }
    ?>