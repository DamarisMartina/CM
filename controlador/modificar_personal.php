<?php

if (!empty($_POST["btnRegistrar"])) {
    if(!empty($_POST["nombres"]) and !empty($_POST["apellidos"]) and !empty($_POST["telefono"]) and !empty($_POST["direccion"]) and !empty($_POST["genero"]) and !empty($_POST["cargo"]) ){
        $id=$_POST["id"];
        $nombres=$_POST["nombres"];
        $apellidos=$_POST["apellidos"];
        $telefono=$_POST["telefono"];
        $direccion=$_POST["direccion"];
        $genero=$_POST["genero"];
        $cargo=$_POST["cargo"];
        $sql=$conexion->query(" update personal set nom_personal='$nombres', ape_personal='$apellidos', telf_personal= '$telefono', direc_personal='$direccion' , genero_personal='$genero', cargo_personal='$cargo' where cod_personal=$id");
        if ($sql==1) {
            header("location:datos_personal.php");
        } else {
            
            echo "<div class='alert alert-danger'>Error al modificar datos</div>";
        }
        
    }else{
        echo "<div class='alert alert-warning'>Campos vacios</div>";
    }
}


?>  