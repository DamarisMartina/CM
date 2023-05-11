<?php
include "modelo/conexion.php";
$id=$_GET["id"];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CENTRO MEDICO--MODIFICAR</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
   
</head>
<body>
<form class="col-4 p-3 m-auto" method="POST">
            <input type="hidden" name="id" value="<?= $_GET["id"]?>">
            <?php
                include "controlador/modificar_servicio.php";
                $sql=$conexion->query(" select * from servicios where cod_servicio=$id ");
                while($datos = $sql->fetch_object()) { ?>
                <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">NOMBRE</label>
                <input type="text" class="form-control" name="nombre" value="<?= $datos->nom_servicio ?>">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">DESCRIPCION</label>
                <input type="text" class="form-control" name="descripcion" value="<?= $datos->desc_servicio ?>">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">CODIGO PERSONAL</label>
                <input type="text" class="form-control" name="cod_personal" value="<?= $datos->cod_personal ?>">
            </div>
                <?php }
                ?>

            <button type="submit" class="btn btn-primary" name="btnRegistrar" value="ok">MODIFICAR</button>
        </form>
</body>
</html>