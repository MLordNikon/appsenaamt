<?php
include("conn.php");

$query = $conn->query("SELECT * FROM `aprendices`");

?>
<!doctype html>
<html lang="en">

<head>
    <title>APP SENA AMT</title>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

    <!-- Bootstrap CSS v5.2.1 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />

    <!-- Bootstrap CSS Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    <!-- CDN DATATABLES CSS COPIAR LOS DOS CDN DEBAJO DE LOS ICONOS DE BOOTSTRAP-->
    <link href="https://cdn.datatables.net/v/bs5/jszip-3.10.1/dt-2.1.2/b-3.1.0/b-html5-3.1.0/b-print-3.1.0/datatables.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.datatables.net/2.1.2/css/dataTables.dataTables.css">


</head>

<body>
    <header>
        <!-- place navbar here -->
    </header>
    <main>
        <h1 class="text-center mt-3">APRENDICES AMT 2024</h1>
        <div class="row justify-content-center align-items-center g-2">
            <div class="col-1"></div>
            <div class="col-10">
                <a name="" id="" class="btn btn-primary mt-4 mb-4" href="form_agregar.php" role="button"><i class="bi bi-person-plus-fill"></i> Agregar</a>
                <div class="table-responsive">
                    <table class="table table-hover display" id="example">
                        <thead>
                            <tr class="text-center">
                                <th>Tipo</th>
                                <th>Número</th>
                                <th>Nombres</th>
                                <th>Apellidos</th>
                                <th>Programa</th>
                                <th>Ficha</th>
                                <th>Correo</th>
                                <th>Celular</th>
                                <th>Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php while ($aprendices = $query->fetch_object()) { ?>
                                <tr>
                                    <td><?= $aprendices->tipo ?></td>
                                    <td><?= $aprendices->numero ?></td>
                                    <td><?= $aprendices->nombres ?></td>
                                    <td><?= $aprendices->apellidos ?></td>
                                    <td><?= $aprendices->programa ?></td>
                                    <td><?= $aprendices->ficha ?></td>
                                    <td><?= $aprendices->correo ?></td>
                                    <td><?= $aprendices->celular ?></td>
                                    <td>
                                        <a name="" id="" class="btn btn-warning" href="form_editar.php?numero=<?= $aprendices->numero ?>" role="button">
                                            <i class="bi bi-pencil-square"></i> Editar</a>

                                        <a name="" id="" class="btn btn-danger" href="eliminar.php?numero=<?= $aprendices->numero ?>" role="button"><i class="bi bi-trash-fill"></i> Eliminar</a>
                                    </td>
                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>

            </div>
            <div class="col-1"></div>
        </div>

    </main>
    <footer>
        <!-- place footer here -->
    </footer>
    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.7.1.js"></script>
    <script src="https://cdn.datatables.net/2.1.2/js/dataTables.js"></script>

    <!-- Bootstrap JavaScript Libraries BORRAR LAS QUE HAY Y REEMPLAZAR POR ESTAS-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.2.7/pdfmake.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.2.7/vfs_fonts.js"></script>
    <script src="https://cdn.datatables.net/v/bs5/jszip-3.10.1/dt-2.1.2/b-3.1.0/b-html5-3.1.0/b-print-3.1.0/datatables.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
    
    <script src="dt.js"></script>


</body>

</html>