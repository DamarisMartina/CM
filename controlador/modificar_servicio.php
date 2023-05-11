<?php

if (!empty($_POST["btnRegistrar"])) {
    if(!empty($_POST["nombre"]) and !empty($_POST["descripcion"]) and !empty($_POST["cod_personal"]) ){
        
        $id=$_POST["id"];
        $nombre=$_POST["nombre"];
        $descripcion=$_POST["descripcion"];
        $cod_personal=$_POST["cod_personal"];
        $sql=$conexion->query(" update servicios set nom_servicio='$nombre', desc_servicio='$descripcion', cod_personal='$cod_personal' where cod_servicio=$id");
        if ($sql==1) {
            header("location:datos_servicios.php");
        } else {
            
            echo "<div class='alert alert-danger'>Error al modificar datos</div>";
        }
        
    }else{
        echo "<div class='alert alert-warning'>Campos vacios</div>";
    }
}


?> 
