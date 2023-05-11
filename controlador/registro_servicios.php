<?php

if(!empty($_POST["btnRegistrar"])) {
    if(!empty($_POST["nombre"]) and !empty($_POST["descripcion"]) and !empty($_POST["cod_personal"]) ){
        
        
        $nombre=$_POST["nombre"];
        $descripcion=$_POST["descripcion"];
        $cod_personal=$_POST["cod_personal"];

        $sql=$conexion->query(" insert into servicios(nom_servicio,desc_servicio,cod_personal)values('$nombre','$descripcion','$cod_personal')");
        if ($sql==1) {
            echo '<div class="alert alert-success ">Servicio registrado correctamente</div>';
        } else {
            echo '<div class="alert alert-danger">Servicio no registrado</div>';
        }
        

    } else {
        echo '<div class="alert alert-warning">Faltan datos para el registro</div>';
    }
}

?>