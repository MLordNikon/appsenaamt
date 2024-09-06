<!doctype html>
<html lang="en">

<head>
    <title>Agregar aprendiz</title>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

    <!-- Bootstrap CSS v5.2.1 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />

    <!-- Bootstrap CSS Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
</head>
</head>

<body>
    <header>
        <!-- place navbar here -->
    </header>
    <main>
        <h1 class="text-center mt-5 mb-3 text-uppercase">agregar aprendices</h1>
        <div class="row justify-content-center align-items-center g-2">
            <div class="col-4"></div>
            <div class="col-4">
                <form action="agregar.php" method="post">
                    <div class="card">
                        <div class="card-header">DATOS NUEVO APRENDIZ</div>
                        <div class="card-body">
                            <div class="">
                                <label for="" class="form-label"></label>
                                <select class="form-select form-select" name="tipo" id="tipo">
                                    <option selected>Seleccione su tipo de documento</option>
                                    <option value="CC">Cédula de ciudadanía</option>
                                    <option value="CE">Cédula de extranjería</option>
                                    <option value="TI">Tarjeta de identidad</option>
                                    <option value="PPT">Permiso protección temporal</option>
                                </select>
                            </div>
                            <div class="">
                                <label for="" class="form-label"></label>
                                <input type="text" class="form-control" name="numero" id="numero" aria-describedby="helpId" placeholder="Digite su número de documento, sin puntos, espacios o guiones" />
                            </div>
                            <div class="">
                                <label for="" class="form-label"></label>
                                <input type="text" class="form-control" name="nombres" id="nombres" aria-describedby="helpId" placeholder="Digite sus nombres completos" />
                            </div>
                            <div class="">
                                <label for="" class="form-label"></label>
                                <input type="text" class="form-control" name="apellidos" id="apellidos" aria-describedby="helpId" placeholder="Digite sus apellidos completos" />
                            </div>
                            <div class="">
                                <label for="" class="form-label"></label>
                                <select class="form-select form-select" name="programa" id="programa">
                                    <option selected>Seleccione su programa de formación</option>
                                    <option value="Sistemas telemáticos">Sistemas telemáticos</option>
                                    <option value="Monitoreo ambiental">Monitoreo ambiental</option>
                                    <option value="Electrónica">Electrónica</option>
                                    <option value="Electricidad">Electricidad</option>
                                    <option value="Programación de software">Programación de software</option>
                                </select>
                            </div>
                            <div class="">
                                <label for="" class="form-label"></label>
                                <input type="text" class="form-control" name="ficha" id="ficha" aria-describedby="helpId" placeholder="Digite su número de ficha" />
                            </div>
                            <div class="">
                                <label for="" class="form-label"></label>
                                <input type="text" class="form-control" name="correo" id="correo" aria-describedby="helpId" placeholder="Digite su correo electrónico" />
                            </div>
                            <div class="">
                                <label for="" class="form-label"></label>
                                <input type="text" class="form-control" name="celular" id="celular" aria-describedby="helpId" placeholder="Digite su número de celular" />
                            </div>
                            <div class="div" style="text-align: center;">
                                <button type="submit" class="btn btn-success mt-3">
                                    <i class="bi bi-person-plus-fill"></i> Agregar
                                </button>
                                <a name="" id="" class="btn btn-danger mt-3" href="index.php" role="button"><i class="bi bi-backspace-reverse-fill"></i> Cancelar</a>
                            </div>
                        </div>
                        <div class="card-footer text-muted"></div>
                    </div>

                </form>
            </div>
            <div class="col-4"></div>
        </div>

    </main>
    <footer>
        <!-- place footer here -->
    </footer>
    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
</body>

</html>