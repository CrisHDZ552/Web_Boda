<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nombre = htmlspecialchars(trim($_POST['nombre'] ?? ''));
    $correo = filter_var($_POST['correo'] ?? '', FILTER_VALIDATE_EMAIL);
    $asistencia = htmlspecialchars($_POST['asistencia'] ?? '');
    
    if (!$nombre || !$correo || !$asistencia) {
        $error = "Por favor completa todos los campos correctamente.";
    } else {
        $correo_destino = "crishdzcruz100@gmail.com";
        $asunto = "Nueva confirmación de asistencia - Boda Karla & Ana";
        
        $mensaje = "
Nombre: $nombre
Correo: $correo
Asistencia: " . ($asistencia === 'si' ? 'CONFIRMA ASISTENCIA' : 'NO ASISTIRA') . "
Fecha de respuesta: " . date('d/m/Y H:i:s') . "
        ";
        
        $headers = "From: $correo\r\n";
        $headers .= "Reply-To: $correo\r\n";
        $headers .= "Content-Type: text/plain; charset=UTF-8\r\n";
        
        if (mail($correo_destino, $asunto, $mensaje, $headers)) {
            file_put_contents('respuestas.txt', "$nombre|$correo|$asistencia|" . date('Y-m-d H:i:s') . "\n", FILE_APPEND);
            $exitoso = true;
        } else {
            $error = "Error al enviar el correo.";
        }
    }
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Confirmación</title>
    <style>
        body {
            font-family: 'Lora', serif;
            background: linear-gradient(135deg, #f5f1eb 0%, #fafaf8 50%, #f0ebe6 100%);
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            margin: 0;
        }
        .container {
            background: white;
            padding: 60px 40px;
            border-radius: 20px;
            text-align: center;
            max-width: 500px;
            box-shadow: 0 15px 50px rgba(0, 0, 0, 0.1);
        }
        .container h1 {
            font-family: 'Cormorant Garamond', serif;
            font-size: 2.5rem;
            margin-bottom: 20px;
        }
        .exito h1, .exito .icon { color: #27ae60; }
        .error h1, .error .icon { color: #e74c3c; }
        .icon { font-size: 3rem; margin-bottom: 20px; }
        p { color: #2c3e50; font-size: 1.1rem; line-height: 1.8; }
        .btn {
            display: inline-block;
            background: linear-gradient(135deg, #4a3f8f, #5d5aa8);
            color: white;
            padding: 12px 30px;
            border-radius: 50px;
            text-decoration: none;
            font-weight: 600;
            margin-top: 30px;
            transition: all 0.3s;
        }
        .btn:hover {
            transform: translateY(-3px);
            box-shadow: 0 10px 30px rgba(74, 63, 143, 0.3);
        }
    </style>
</head>
<body>
    <div class="container <?php echo isset($exitoso) ? 'exito' : (isset($error) ? 'error' : ''); ?>">
        <?php if (isset($exitoso)): ?>
            <div class="icon">✓</div>
            <h1>¡Confirmación Enviada!</h1>
            <p>Hola <strong><?php echo $nombre; ?></strong>,</p>
            <p>Tu respuesta ha sido registrada correctamente.</p>
            <p>Hemos enviado una confirmación a tu correo.</p>
        <?php elseif (isset($error)): ?>
            <div class="icon">⚠</div>
            <h1>Error</h1>
            <p><?php echo $error; ?></p>
        <?php endif; ?>
        <a href="inicio.php" class="btn">Volver</a>
    </div>
</body>
</html>