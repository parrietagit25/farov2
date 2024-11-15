<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User</title>
    <!-- Enlace a Bootstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        /* Añadir espacio debajo del menú */
        .content {
            padding-top: 80px;
        }
    </style>
</head>
<body>
    <!-- Incluir el menú de navegación superior -->
    <?php include 'partials/menu.php'; ?>

    <div class="container content mt-5">
        <!-- Botón para abrir el modal de registro -->
        <div class="d-flex justify-content-between align-items-center mb-3">
            <h2>Objetos</h2>
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#registroModalTipo">
                Registrar Tipo Objeto
            </button>
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#registroModal">
                Registrar Objeto
            </button>
        </div>

        <!-- Tabla de Usuarios -->
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Codigo</th>
                    <th>Descripcion</th>
                    <th>Tipo</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                <?php if (!empty($objetos)): ?>
                    <?php foreach ($objetos as $objeto): ?>
                        <tr>
                            <td><?php echo htmlspecialchars($objeto['id']); ?></td>
                            <td><?php echo htmlspecialchars($objeto['code_obj']); ?></td>
                            <td><?php echo htmlspecialchars($objeto['descripcion']); ?></td>
                            <td><?php echo htmlspecialchars($objeto['tipo_objeto']); ?></td>
                            <td></td>
                        </tr>
                    <?php endforeach; ?>
                <?php else: ?>
                    <tr>
                        <td colspan="3">No se encontraron usuarios.</td>
                    </tr>
                <?php endif; ?>
            </tbody>
        </table>
    </div>

    <!-- Modal de Registro de Objeto -->
    <div class="modal fade" id="registroModal" tabindex="-1" aria-labelledby="registroModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="registroModalLabel">Registrar Usuario</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Cerrar"></button>
                </div>
                <form action="" method="POST">
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="nombre">Codigo</label>
                            <input type="text" class="form-control" id="codigo" name="codigo" required>
                        </div>
                        <div class="form-group">
                            <label for="email">Descripcion</label>
                            <input type="text" class="form-control" id="descripcion" name="descripcion" required>
                        </div>
                        <div class="form-group">
                            <label for="password">Tipo</label>
                            <select name="objeto" class="form-control">
                                <option value="">Seleccionar</option>
                                <?php if (!empty($tipo_obj)): ?>
                                    <?php foreach ($tipo_obj as $objeto_tipo): ?>
                                        <option value="<?php echo htmlspecialchars($objeto_tipo['id']); ?>"><?php echo htmlspecialchars($objeto_tipo['descripcion']); ?></option>
                                    <?php endforeach; ?>
                                <?php endif; ?>
                            </select>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                        <button type="submit" class="btn btn-primary">Registrar</button>
                        <input type="hidden" name="reg_obj" value="1">
                    </div>
                </form>
            </div>
        </div>
    </div>


    <!-- Modal de Registro de tipo de objeto -->
    <div class="modal fade" id="registroModalTipo" tabindex="-1" aria-labelledby="registroModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="registroModalLabel">Registrar Tipo Objeto</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Cerrar"></button>
                </div>
                <form action="" method="POST">
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="nombre">Tipo Objeto</label>
                            <input type="text" class="form-control" id="tipo_obj" name="tipo_obj" required>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                        <button type="submit" class="btn btn-primary">Registrar</button>
                        <input type="hidden" name="reg_tipo_obj" value="1">
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Scripts de Bootstrap 5 -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>
</body>
</html>
