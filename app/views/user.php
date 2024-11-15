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
            <h2>Usuarios</h2>
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#registroModal">
                Registrar Usuario
            </button>
        </div>

        <!-- Tabla de Usuarios -->
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Email</th>
                    <th>Tipo Usuario</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                <?php if (!empty($users)): ?>
                    <?php foreach ($users as $user): ?>
                        <tr>
                            <td><?php echo htmlspecialchars($user['id']); ?></td>
                            <td><?php echo htmlspecialchars($user['nombre']); ?></td>
                            <td><?php echo htmlspecialchars($user['email']); ?></td>
                            <td><?php if($user['tipo_user'] == 1){ echo 'IT'; }elseif($user['tipo_user'] == 2){echo 'Supervisor';}elseif($user['tipo_user'] == 3){echo 'Usuario Regular';} ?></td>
                            <td><a class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#registroAccess">Accesos</a></td>
                        </tr>


                        <div class="modal fade" id="registroAccess" tabindex="-1" aria-labelledby="registroModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="registroModalLabel">Accesos por objetos</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Cerrar"></button>
                                    </div>
                                    <form action="" method="POST">
                                        <div class="modal-body">
                                        <?php if (!empty($all_objetos)): ?>
                                            <?php foreach ($all_objetos as $objetos): ?>
                                                <label for=""><?php echo $objetos['tipo_objeto']. ' ' .$objetos['code_obj']; ?></label>
                                                <input type="checkbox" name="code_obj[]" id="" value="<?php echo $objetos['code_obj']; ?>">
                                            <?php endforeach; ?>
                                        <?php endif; ?>
                                            
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                                            <button type="submit" class="btn btn-primary">Registrar</button>
                                            <input type="hidden" name="reg_accesos">
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>


                    <?php endforeach; ?>
                <?php else: ?>
                    <tr>
                        <td colspan="3">No se encontraron usuarios.</td>
                    </tr>
                <?php endif; ?>
            </tbody>
        </table>
    </div>

    <!-- Modal de Registro de Usuario -->
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
                            <label for="nombre">Nombre</label>
                            <input type="text" class="form-control" id="nombre" name="nombre" required>
                        </div>
                        <div class="form-group">
                            <label for="apellido">Apellido</label>
                            <input type="text" class="form-control" id="apellido" name="apellido" required>
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" class="form-control" id="email" name="email" required>
                        </div>
                        <div class="form-group">
                            <label for="password">Contraseña</label>
                            <input type="password" class="form-control" id="password" name="password" required>
                        </div>
                        <div class="form-group">
                            <label for="password">Tipo Usuario</label>
                            <select name="tipo_usuario" class="form-control">
                                <option value="">Seleccionar</option>
                                <option value="1">IT</option>
                                <option value="2">Supervisor</option>
                                <option value="3">Usuario Regular</option>
                            </select>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                        <button type="submit" class="btn btn-primary">Registrar</button>
                        <input type="hidden" name="reg_user">
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
