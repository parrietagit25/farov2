import os

# Definir la estructura de carpetas y archivos
structure = {
    "mvc_project": {
        "app": {
            "controllers": {
                "HomeController.php": "<?php\nclass HomeController {\n    public function index() {\n        require_once '../app/views/home.php';\n    }\n}\n",
                "UserController.php": "<?php\nclass UserController {\n    public function index() {\n        require_once '../app/views/user.php';\n    }\n}\n"
            },
            "models": {
                "User.php": """<?php\nrequire_once 'Database.php';\n\nclass User {\n    private $db;\n\n    public function __construct() {\n        $this->db = Database::getConnection();\n    }\n\n    public function getAllUsers() {\n        $stmt = $this->db->query("SELECT * FROM users");\n        return $stmt->fetchAll(PDO::FETCH_ASSOC);\n    }\n}\n""",
                "Database.php": """<?php\nclass Database {\n    private static $connection = null;\n\n    public static function getConnection() {\n        if (!self::$connection) {\n            self::$connection = new PDO('mysql:host=localhost;dbname=testdb', 'root', '');\n        }\n        return self::$connection;\n    }\n}\n"""
            },
            "views": {
                "home.php": """<!DOCTYPE html>\n<html lang="es">\n<head>\n    <meta charset="UTF-8">\n    <title>Home</title>\n</head>\n<body>\n    <h1>Bienvenido a la página principal</h1>\n</body>\n</html>\n""",
                "user.php": """<!DOCTYPE html>\n<html lang="es">\n<head>\n    <meta charset="UTF-8">\n    <title>User</title>\n</head>\n<body>\n    <h1>Bienvenido a la página del usuario</h1>\n</body>\n</html>\n"""
            }
        },
        "public": {
            "index.php": """<?php\nrequire_once '../config/config.php';\nrequire_once '../app/controllers/HomeController.php';\nrequire_once '../app/controllers/UserController.php';\n\n$controller = $_GET['controller'] ?? 'home';\n$action = $_GET['action'] ?? 'index';\n\n$controllerName = ucfirst($controller) . 'Controller';\n$controllerFile = "../app/controllers/{$controllerName}.php";\n\nif (file_exists($controllerFile)) {\n    require_once $controllerFile;\n    $controllerInstance = new $controllerName();\n    if (method_exists($controllerInstance, $action)) {\n        $controllerInstance->$action();\n    } else {\n        echo "Acción no encontrada.";\n    }\n} else {\n    echo "Controlador no encontrado.";\n}\n""",
            "css": {},
            "js": {}
        },
        "config": {
            "config.php": "<?php\ndefine('BASE_URL', 'http://localhost/mvc_project');\n"
        }
    }
}

# Función para crear la estructura de carpetas y archivos
def create_structure(base_path, structure):
    for name, content in structure.items():
        path = os.path.join(base_path, name)
        if isinstance(content, dict):
            os.makedirs(path, exist_ok=True)
            create_structure(path, content)
        else:
            with open(path, "w") as file:
                file.write(content)

# Crear la estructura de MVC en el directorio actual
create_structure(os.getcwd(), structure)
print("Estructura MVC creada exitosamente.")
