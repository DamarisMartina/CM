<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CENTRO MEDICO--PERSONAL</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/733cecad7b.js" crossorigin="anonymous"></script>

</head>

<body>
<h1 class="text-center p-3">EMPLEADOS DEL CENTRO MEDICO</h1>
    <div >
    <div class="col-8 p-4 text-center mx-auto">
            <table class="table">
                <thead >
                    <tr>
                        <th scope="col">CODIGO</th>
                        <th scope="col">NOMBRES</th>
                        <th scope="col">APELLIDOS</th>
                        <th scope="col">TELEFONO</th>
                        <th scope="col">DIRECCION</th>
                        <th scope="col">GENERO</th>
                        <th scope="col">CARGO</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        include "modelo/conexion.php";
                        $sql=$conexion->query("select * from personal ");
                        while($datos=$sql->fetch_object()){?>
                        <tr>
                        <td><?= $datos->cod_personal ?></td>
                        <td><?= $datos->nom_personal ?></td>
                        <td><?= $datos->ape_personal ?></td>
                        <td><?= $datos->telf_personal ?></td>
                        <td><?= $datos->direc_personal ?></td>
                        <td><?= $datos->genero_personal ?></td>
                        <td><?= $datos->cargo_personal ?></td>
                        <td>
                            <a href="modificar_personal.php?id=<?= $datos->cod_personal ?>" class="btn btn-small"><i class="fa-solid fa-pen-to-square"></i></a>
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
        <a type="button" class="fa-solid "  href="http://localhost/CM/pagina_personal.php" role="button">REGISTRAR PERSONAL</a>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js" integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous"></script>
</body>

</html>








