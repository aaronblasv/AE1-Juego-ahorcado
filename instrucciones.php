<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Instrucciones - Juego del Ahorcado</title>
    <link rel="stylesheet" href="estilos.css">
</head>
<body>
    <div class="container">
        <h1>📝 Instrucciones del Juego</h1>
        
        <h2 style="color: #667eea; margin-top: 25px;">🎯 Objetivo</h2>
        <p style="font-size: 1.1em; line-height: 1.6; color: #555;">
            Adivinar la palabra oculta letra por letra antes de quedarte sin intentos.
        </p>
        
        <h2 style="color: #667eea; margin-top: 25px;">🎮 Cómo jugar</h2>
        <ol style="font-size: 1.1em; line-height: 1.8; color: #555; margin-left: 20px;">
            <li>Se te mostrará una palabra oculta representada con guiones bajos (_)</li>
            <li>Introduce una letra en el campo de texto</li>
            <li>Pulsa el botón "Probar letra" o presiona Enter</li>
            <li>Si la letra está en la palabra, se revelará en su posición correcta</li>
            <li>Si la letra NO está, perderás un intento</li>
            <li>Tienes un número limitado de intentos para completar la palabra</li>
        </ol>
        
        <h2 style="color: #667eea; margin-top: 25px;">💡 Consejos útiles</h2>
        <ul style="font-size: 1.1em; line-height: 1.8; color: #555; margin-left: 20px;">
            <li><strong>Empieza con vocales:</strong> A, E, I, O, U son las letras más comunes</li>
            <li><strong>Consonantes frecuentes:</strong> Prueba R, S, T, N, L después de las vocales</li>
            <li><strong>Observa el patrón:</strong> El número de guiones te indica la longitud de la palabra</li>
            <li><strong>Piensa estratégicamente:</strong> No desperdicies intentos con letras poco comunes</li>
        </ul>
        
        <h2 style="color: #667eea; margin-top: 25px;">🏆 Victoria y Derrota</h2>
        <div style="background: #e8f5e9; padding: 15px; border-radius: 10px; margin: 15px 0;">
            <p style="font-size: 1.1em; color: #2e7d32;"><strong>✅ GANAS:</strong> Cuando descubres todas las letras de la palabra antes de quedarte sin intentos</p>
        </div>
        <div style="background: #ffebee; padding: 15px; border-radius: 10px; margin: 15px 0;">
            <p style="font-size: 1.1em; color: #c62828;"><strong>❌ PIERDES:</strong> Cuando se agotan todos tus intentos sin completar la palabra</p>
        </div>
        
        <div style="text-align: center; margin-top: 30px;">
            <a href="index.php"><button>🎮 Jugar Ahora</button></a>
            <a href="acerca.php"><button>ℹ️ Acerca de</button></a>
        </div>
    </div>
</body>
</html>