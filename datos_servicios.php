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
<h1 class="text-center p-3">SERVICIOS DEL CENTRO MEDICO</h1>
    <div >
    <div class="col-8 p-4 text-center mx-auto">
            <table class="table">
                <thead >
                    <tr>
                        <th scope="col">CODIGO SERVICIO</th>
                        <th scope="col">NOMBRE</th>
                        <th scope="col">DESCRIPCION</th>
                        <th scope="col">CODIGO PERSONAL</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        include "modelo/conexion.php";
                        $sql=$conexion->query("select * from servicios ");
                        while($datos=$sql->fetch_object()){?>
                        <tr>
                        <td><?= $datos->cod_servicio ?></td>
                        <td><?= $datos->nom_servicio ?></td>
                        <td><?= $datos->desc_servicio?></td>
                        <td><?= $datos->cod_personal ?></td>
                        <td>
                            <a href="modificar_servicio.php?id=<?= $datos->cod_servicio ?>" class="btn btn-small"><i class="fa-solid fa-pen-to-square"></i></a>
                        </td>

                    </tr>
                    <?php } 
                    ?>
                    
                </tbody>
            </table>

        </div>
    </div>
    
    
    <div class="text-center">
        <a type="button" class="fa-solid "  href="http://localhost/CM/pagina%20principal.html" role="button"> PAGINA PRINCIPAL</a>
    </div>

    <div class="text-center">
        <a type="button" class="fa-solid "  href="http://localhost/CM/pagina_servicios.php" role="button">REGISTRAR SERVICIO</a>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js" integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous"></script>
</body>

</html>








