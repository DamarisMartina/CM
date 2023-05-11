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
    <title>CENTRO MEDICO_MODIFICAR</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
   
</head>
<body>
<form class="col-4 p-3 m-auto" method="POST">
            <input type="hidden" name="id" value="<?= $_GET["id"]?>">
            <?php
                include "controlador/modificar_personal.php";
                $sql=$conexion->query(" select * from personal where cod_personal=$id ");
                while($datos = $sql->fetch_object()) { ?>
                <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">NOMBRES</label>
                <input type="text" class="form-control" name="nombres" value="<?= $datos->nom_personal ?>">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">APELLIDOS</label>
                <input type="text" class="form-control" name="apellidos" value="<?= $datos->ape_personal ?>">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">TELEFONO</label>
                <input type="text" class="form-control" name="telefono" value="<?= $datos->telf_personal ?>">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">DIRECCION</label>
                <input type="text" class="form-control" name="direccion" value="<?= $datos->direc_personal ?>">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">GENERO</label>
                <input type="text" class="form-control" name="genero"value="<?= $datos->genero_personal ?>">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">CARGO</label>
                <input type="text" class="form-control" name="cargo"value="<?= $datos->cargo_personal ?>">
            </div>

                <?php }
                ?>

            
            

            <button type="submit" class="btn btn-primary" name="btnRegistrar" value="ok">MODIFICAR</button>
        </form>
</body>
</html>