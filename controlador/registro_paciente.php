<?php
$mysqliConect=new mysqli('localhost','root','mysql');
    if(!empty($_POST["btnRegistrar"])) {
        if(!empty($_POST["COD_PACIENTE"]) and !empty($_POST["NOMBRE_PACIENTE"]) and !empty($_POST["AP_PACIENTE"]) and !empty($_POST["AM_PACIENTE"]) and !empty($_POST["FNACIMIENTO_PACIENTE"])  and !empty($_POST["DIR_PACIENTE"]) and !empty($_POST["CEL_PACIENTE"])and !empty($_POST["GÉNERO_PACIENTE"])  ){
            
            $codigo_paciente=$_POST["COD_PACIENTE"];
            $nombre=$_POST["NOMBRE_PACIENTE"];
            $apellido_paterno=$_POST["AP_PACIENTE"];
            $apellido_materno=$_POST["AM_PACIENTE"];
            $fecha_nacimiento=$_POST["FNACIMIENTO_PACIENTE"];
            $direccion=$_POST["DIR_PACIENTE"];
            $celular=$_POST["CEL_PACIENTE"];
            $genero=$_POST["GÉNERO_PACIENTE"];

            $sql=$conexion->query(" insert into paciente(COD_PACIENTE,NOMBRE_PACIENTE,AP_PACIENTE,AM_PACIENTE,FNACIMIENTO_PACIENTE,DIR_PACIENTE,CEL_PACIENTE,GÉNERO_PACIENTE) values ('$codigo_paciente','$nombre','$apellido_paterno','$apellido_materno''$direccion','$celular','$genero')");
            if ($sql==1) {
                echo '<div class="alert alert-success ">Paciente registrado correctamente</div>';
            } else {
                echo '<div class="alert alert-danger">Paciente no registrado</div>';
            }
            

        } else {
            echo '<div class="alert alert-warning">Faltan datos para el registro</div>';
        }
    }

    ?> 

    <!DOCTYPE html PUBLIC>

    <html lang="en" xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta charset="utf-8" http-equiv="content-type" content="text/hml"/>
        <title></title>
        <link rel="stylesheet" herf="estform.css" />
    
    <head>
    <body style= background:#a26ce6;">
        <center>
            <form name ="mensaje" style="font-size: 20px; font-family: CenturyGothic;color:">
                <div class = "borde-redondeado" style="width:500px; height:400 px; border-radius:10px;a">
                    <strong>
                    <label style="font-family: Century Gothic; color:blue; "Código de paciente: </label><?php echo $codigo_paciente?><br>
                    <label style="font-family: Century Gothic; color:blue; "Nombre: </label><?php echo $nombre?><br>
                    <label style="font-family: Century Gothic; color:blue; "Apellido Paterno: </label><?php echo $apellido_paterno?><br>
                    <label style="font-family: Century Gothic; color:blue; "Apellido Materno: </label><?php echo $apellido_materno?><br>
                    <label style="font-family: Century Gothic; color:blue; "Fecha de Nacimiento: </label><?php echo $fecha_nacimiento?><br>
                    <label style="font-family: Century Gothic; color:blue; "Dirección: </label><?php echo $direccion?><br>
                    <label style="font-family: Century Gothic; color:blue; "Celular: </label><?php echo $celular?><br>
                    <label style="font-family: Century Gothic; color:blue; "Género: </label><?php echo $genero?><br>
                    </strong>
                </div>
            </form>
        </center>
    </body>
    </html>
        