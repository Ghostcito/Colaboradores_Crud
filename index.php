<?php
require_once "service/ColaboradorService.php";
require_once "routes.php";
$service = new ColaboradorService();
$colaboradores = $service->getAll();
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD Colaboradores</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.0/font/bootstrap-icons.css" rel="stylesheet">
</head>

<body class="bg-light">
    <div class="row mb-4">
        <div class="col-12">
            <h1 class="text-center text-primary">
                <i class="bi bi-people-fill"></i> Gestión de Colaboradores
            </h1>
            <hr class="border-primary">
        </div>
    </div>
    <div class="row justify-content-center align-items-center g-2">
        <div class="col-4 p-3">
            <h2 class="text-secondary">Formulario de Colaboradores</h2>
            <div class="card shadow">
                <div class="card-header bg-primary text-white">
                    <h4 class="mb-0">
                        <i class="bi bi-person-plus-fill"></i> Agregar Nuevo Colaborador
                    </h4>
                </div>
                <div class="card-body">
                    <form action="controller/ColaboradorController.php" method="POST">
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label for="nombre" class="form-label">Nombre</label>
                                <input type="text" class="form-control" id="nombre" name="nombre"
                                    placeholder="Ingrese el nombre completo" required>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="puesto" class="form-label">Puesto</label>
                                <select class="form-select form-select-sm" name="puesto" id="puesto" required>
                                    <option value="Diseño Web">Diseño Web</option>
                                    <option value="Diseño Grafico">Diseño Grafico</option>
                                    <option value="Comunity Manager">Comunity Manager</option>
                                </select>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label for="cargo" class="form-label">Cargo</label>
                                <input type="text" class="form-control" id="cargo" name="cargo"
                                    placeholder="Ingrese el cargo" required>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="edad" class="form-label">Edad</label>
                                <input type="number" class="form-control" id="edad" name="edad" min="18" max="100"
                                    placeholder="Edad" required>
                            </div>

                        </div>
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label for="fecha_ingreso" class="form-label">Fecha de Ingreso</label>
                                <input type="date" class="form-control" id="fecha_ingreso" name="fecha_ingreso"
                                    required>
                            </div>
                        </div>
                        <div class="text-end">
                            <button type="submit" class="btn btn-success">
                                <i class="bi bi-save"></i> Guardar
                            </button>
                            <button type="reset" class="btn btn-secondary">
                                <i class="bi bi-arrow-clockwise"></i> Limpiar
                            </button>
                        </div>
                    </form>
                </div>
            </div>

        </div>
        <div class="col-8 p-3">
            <h2 class="text-secondary">Tabla de Colaboradores</h2>
            <div class="card shadow">
                <div class="card-header bg-info text-white">
                    <h4 class="mb-0">
                        <i class="bi bi-table"></i> Lista de Colaboradores
                    </h4>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-striped table-hover">
                            <thead class="table-dark">
                                <tr>
                                    <th scope="col">ID</th>
                                    <th scope="col">Nombre</th>
                                    <th scope="col">Cargo</th>
                                    <th scope="col">Puesto</th>
                                    <th scope="col">Edad</th>
                                    <th scope="col">Fecha de Ingreso</th>
                                    <th scope="col" class="text-center">Acciones</th>
                                </tr>
                            </thead>
                            <tbody>

                                <?php foreach ($colaboradores as $colaborador): ?>
                                    <tr>
                                        <td><?= $colaborador->id ?></td>
                                        <td><?= $colaborador->nombre ?></td>
                                        <td><?= $colaborador->cargo ?></td>
                                        <td><?= $colaborador->puesto ?></td>
                                        <td><?= $colaborador->edad ?></td>
                                        <td><?= $colaborador->fecha_ingreso ?></td>
                                        <td class="text-center">
                                            <button class="btn btn-warning" title="Editar">
                                                <i class="bi bi-pencil-square"></i>
                                            </button>
                                            <button class="btn btn-danger" title="Eliminar">
                                                <i class="bi bi-trash"></i>
                                            </button>
                                        </td>
                                    </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>

                    Información adicional
                    <div class="mt-3">
                        <small class="text-muted">
                            <i class="bi bi-info-circle"></i>
                            Total de colaboradores: 3
                        </small>
                    </div>
                </div>
            </div>


        </div>


    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>