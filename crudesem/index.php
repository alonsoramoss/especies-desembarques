<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desembarques</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <div class="container mt-3 mb-3">
        <div class="card">
            <div class="card-header bg-info">
                <h3 class="text-center text-light">Registro de Desembarques</h3>
            </div>
            <div class="card-body">
                <form action="" method="post" id="frm">
                    <div class="row">
                        <div>
                            <input type="hidden" name="idd" id="idd" value="">
                        </div>
                        <div class="col-md-3">
                            <div class="input-group mb-3 mb-md-0">
                                <span class="input-group-text">ID Especie</span>
                                <input type="text" name="idEspecie" id="idEspecie" placeholder="Ingresar ID Esp." class="form-control">
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="input-group mb-3 mb-md-0">
                                <span class="input-group-text">Fecha</span>
                                <input type="text" name="fecha" id="fecha" placeholder="AAAA-MM-DD" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="input-group mb-3 mb-md-0">
                                <span class="input-group-text">Kg</span>
                                <input type="text" name="kg_dia" id="kg_dia" placeholder="Ingresar kg" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-3 d-grid">
                            <input type="submit" value="Registrar Desembarque" id="registrar" class="btn btn-info text-light">
                        </div>
                    </div>
                </form>
            </div>

            <div class="card-footer">
                <div class="row mb-3 mt-1">
                    <div class="col-lg-12">
                        <form action="" method="post">
                            <div class="form-group">
                                <input type="text" name="buscar" id="buscar" placeholder="Buscar..." class="form-control">
                            </div>
                        </form>
                    </div>
                </div>
                <div class="table-responsive">
                    <table class="table table-hover table-bordered">
                        <thead class="table-dark">
                            <tr class="text-center">
                                <th>ID Desembarque</th>
                                <th>ID Especie</th>
                                <th>Fecha</th>
                                <th>KG/DIA</th>
                                <th>Acciones</th>
                            </tr>
                        </thead>
                        <tbody id="resultado">
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <script src="script.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
</body>
</html>
