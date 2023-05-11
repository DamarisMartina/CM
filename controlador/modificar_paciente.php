<?php

if (!empty($_POST["btnRegistrar"])) {
    if(!empty($_POST["nombres"]) and !empty($_POST["apellidos"]) and !empty($_POST["telefono"]) and !empty($_POST["direccion"])   ){
        $id=$_POST["id"];
        $nombres=$_POST["nombres"];
        $apellidos=$_POST["apellidos"];
        $telefono=$_POST["telefono"];
        $direccion=$_POST["direccion"];
        $sql=$conexion->query(" update paciente set nom_paciente='$nombres', ape_paciente='$apellidos', telf_paciente=$telefono, direc_paciente= '$direccion' where cod_paciente=$id");
        if ($sql==1) {
            header("location:datos_paciente.php");
        } else {
            
            echo "<div class='alert alert-danger'>Error al modificar datos</div>";
        }
        
    }else{
        echo "<div class='alert alert-warning'>Campos vacios</div>";
    }
}


?>