<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Principal</title>
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
            <h2>Bienvenido al Dashboard</h2>
        </div>

    </div>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>
</body>
</html>
