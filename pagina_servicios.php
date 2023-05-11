<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CENTRO MEDICO--SERVICIOS</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/733cecad7b.js" crossorigin="anonymous"></script>

</head>

<body>
    <div class="text-center p-3">
        <form class="text-center p-3" method="POST">
            <?php
            include "modelo/conexion.php";
            include "controlador/registro_servicios.php";
            ?>
            <div class="text-center p-3">
                <label for="exampleInputEmail1" class="form-label">NOMBRE</label>
                <input type="text" class="form-control" name="nombre">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">DESCRIPCION </label>
                <input type="text" class="form-control" name="descripcion">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">CODIGO PERSONAL</label>
                <input type="text" class="form-control" name="cod_personal">
            </div>

            <button type="submit" class="btn btn-primary" name="btnRegistrar" value="ok">REGISTRAR</button>
        </form>
        

    </div>
    <div class="text-center">
    <a type="button" class="fa-solid "  href="http://localhost/CENTRO%20MEDICO/pagina%20principal.html" role="button"> PAGINA PRINCIPAL</a>
    </div>
    <div class="text-center">
    <a type="button" class="fa-solid "  href="http://localhost/CENTRO%20MEDICO/datos_servicios.php" role="button"> MODIFICAR DATOS</a>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js" integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous"></script>
</body>

</html>