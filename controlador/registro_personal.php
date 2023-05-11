<?php
$mysqliConect=new mysqli('localhost','root','mysql');
    if(!empty($_POST["btnRegistrar"])) {
        if(!empty($_POST["COD_PERSONAL"]) and !empty($_POST["NOMBRE_PERSONAL"]) and !empty($_POST["AP_PERSONAL"]) and !empty($_POST["AM_PERSONAL"]) and !empty($_POST["CEL_PERSONAL"]) and !empty($_POST["DIR_PERSONAL"]) and !empty($_POST["FNACIMIENTO_PERSONAL"]) and !empty($_POST["GÉNERO_PERSONAL"]) and !empty($_POST["TIPO_PERSONAL"]) and !empty($_POST["COD_SERVICIO"])) {
            
            $codigo_personal =$_POST["COD_PERSONAL"];
            $nombre=$_POST["NOMBRE_PERSONAL"];
            $apellido_paterno=$_POST["AP_PERSONAL"];
            $apellido_materno=$_POST["AM_PERSONAL"];
            $celular=$_POST["CEL_PERSONAL"];
            $direccion=$_POST["DIR_PERSONAL"];
            $fecha_nacimiento=$_POST["FNACIMIENTO_PERSONAL"];
            $genero=$_POST["GÉNERO_PERSONAL"];
            $servicio=$_POST["TIPO_PERSONAL"];
            $codigo_servicic=$_POST["COD_SERVICIO"];

            $host = 'localhost';
            $user ='root';
            $pass = '';
            $dbname = 'mysql';

            $conn = mysqli_connect($host,$user,$pass,$dbname);

            $sql = "SELECT * FROM personal';";


            $sql=$conexion->query(" insert into personal(COD_PERSONAL,NOMBRE_PERSONAL,AP_PERSONAL,AM_PERSONAL,CEL_PERSONAL,DIR_PERSONAL,FNACIMIENTO_PERSONAL, GÉNERO_PERSONAL,TIPO_PERSONAL,COD_PERSONAL)values('$codigo_personal','$nombre','$apellido_paterno','$apellido_materno','$celular','$direccion','$fecha_nacimiento','$genero','$servicio','$codigo_servicio')");
            if ($sql==1) {
                echo '<div class="alert alert-success ">Personal registrado correctamente</div>';
            } else {
                echo '<div class="alert alert-danger">Personal no registrado</div>';
            }
            

        } else {
            echo '<div class="alert alert-warning">Faltan datos para el registro</div>';
        }
    }

    ?>