<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Especies</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <div class="container mt-3 mb-3">
        <div class="card">
            <div class="card-header bg-info">
                <h3 class="text-center text-light">Registro de Especies</h3>
            </div>
            <div class="card-body">
                <form action="" method="post" id="frm">
                    <div class="row">
                        <div>
                            <input type="hidden" name="ide" id="ide" value="">
                        </div>
                        <div class="col-md-4">
                            <div class="input-group">
                                <span class="input-group-text">Nombre</span>
                                <input type="text" name="nombre" id="nombre" placeholder="Ingresar nombre" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="input-group">
                                <span class="input-group-text">Tipo</span>
                                <input type="text" name="tipo" id="tipo" placeholder="Ingresar tipo" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-4 d-grid">
                            <input type="button" value="Registrar Especie" id="registrar" class="btn btn-info text-light">
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
                                <th>ID</th>
                                <th>Nombre</th>
                                <th>Tipo</th>
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
