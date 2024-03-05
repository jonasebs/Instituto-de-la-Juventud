<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Procesamiento de Registro</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            text-align: center;
            background-color: #f2f2f2;
            margin: 0;
            padding: 0;
        }

        .container {
            max-width: 600px;
            margin: 20px auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 5px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        h1 {
            color: #333;
        }

        .btn {
            background-color: #007bff;
            color: #fff;
            border: none;
            padding: 10px 20px;
            cursor: pointer;
            border-radius: 4px;
            text-decoration: none;
        }

        .btn:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <div class="container">
        <?php
        $host = "localhost";
        $username = "root";
        $password = "";
        $database = "registros";

        $conn = new mysqli($host, $username, $password, $database);

        // Verificar la conexión
        if ($conn->connect_error) {
            die("Conexión fallida: " . $conn->connect_error);
        }

        // Recibir los datos del formulario
        $nombre = $_POST['nombre'];
        $entrada = $_POST['entrada'];
        $salida = $_POST['salida'];
        $tiempo = $_POST['tiempo'];

        // Calcular el tiempo (ejemplo, calcular la diferencia entre entrada y salida)
        // Aquí debes implementar la lógica para calcular el tiempo

        // Insertar los datos en la base de datos
        $sql = "INSERT INTO accesos (nombre, entrada, salida, tiempo) VALUES ('$nombre', '$entrada', '$salida', '$tiempo')";

        if ($conn->query($sql) === TRUE) {
            echo "<p>Registro guardado correctamente.</p>";
        } else {
            echo "<p>Error al guardar el registro: " . $conn->error . "</p>";
        }

        $conn->close();
        ?>
        <a href="index.html" class="btn">Regresar a Inicio</a>
    </div>
</body>
</html>
