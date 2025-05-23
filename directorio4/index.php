<!DOCTYPE html>
<html>
<head>
    <title>Mi Página PHP con Docker</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 40px;
            line-height: 1.6;
            color: #333;
        }
        .container {
            max-width: 800px;
            margin: 0 auto;
            padding: 20px;
            border: 1px solid #ddd;
            border-radius: 5px;
            background-color: #f9f9f9;
        }
        h1 {
            color: #2c3e50;
        }
        .info {
            background-color: #e8f4f8;
            padding: 15px;
            border-radius: 5px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Hola desde PHP y Docker</h1>
        
        <div class="info">
            <p><strong>Nombre:</strong>JHONIER PASOS--DANIEL MORA</p>
            <p><strong>Fecha y hora actual:</strong> <?php echo date('Y-m-d H:i:s'); ?></p>
            <p><strong>Versión de PHP:</strong> <?php echo phpversion(); ?></p>
            <p><strong>Información del servidor:</strong> <?php echo $_SERVER['SERVER_SOFTWARE']; ?></p>
        </div>
        
        <h2>Variables de Entorno</h2>
        <pre><?php print_r($_ENV); ?></pre>
    </div>
</body>
</html>