<?php

    include_once('gestionbd.php');
    $conn = new Conexion();
    $conn->conectar();

    if(isset($_POST["Submit"]) && !empty($_POST["Submit"])){
        $pnombre = trim($_POST['pnombre']);
        $snombre = trim($_POST['snombre']);
        $papellido = trim($_POST['papellido']);
        $sapellido = trim($_POST['sapellido']);
        $profesion = trim($_POST['profesion']);
        $cedula = trim($_POST['cedula']);
        $telefono = trim($_POST['telefono']);

        $sql = "INSERT INTO cliente (pnombre, snombre, papellido, sapellido, profesion, cedula, telefono)
            VALUES ('$pnombre','$snombre',
            '$papellido','$sapellido','$profesion',
            '$cedula','$telefono')";

        $result = $conn->consultar($sql);
        
    }

    

?>