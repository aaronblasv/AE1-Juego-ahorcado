<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>¡Victoria! - Juego del Ahorcado</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: linear-gradient(135deg, #11998e 0%, #38ef7d 100%);
            min-height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 20px;
        }

        .container {
            background: white;
            padding: 40px;
            border-radius: 20px;
            box-shadow: 0 15px 40px rgba(0,0,0,0.3);
            max-width: 600px;
            width: 100%;
            text-align: center;
            animation: aparecer 0.5s ease;
        }

        @keyframes aparecer {
            from {
                opacity: 0;
                transform: scale(0.8);
            }
            to {
                opacity: 1;
                transform: scale(1);
            }
        }

        h1 {
            color: #11998e;
            font-size: 3em;
            margin-bottom: 20px;
            text-shadow: 2px 2px 4px rgba(0,0,0,0.1);
        }

        .emoji {
            font-size: 5em;
            margin: 20px 0;
            animation: saltar 0.6s ease infinite;
        }

        @keyframes saltar {
            0%, 100% { transform: translateY(0); }
            50% { transform: translateY(-20px); }
        }

        p {
            font-size: 1.3em;
            color: #555;
            margin: 20px 0;
            line-height: 1.6;
        }

        .palabra-adivinada {
            font-size: 2em;
            color: #11998e;
            font-weight: bold;
            margin: 25px 0;
            letter-spacing: 5px;
        }

        button {
            padding: 15px 40px;
            font-size: 1.2em;
            background: linear-gradient(135deg, #11998e, #38ef7d);
            color: white;
            border: none;
            border-radius: 10px;
            cursor: pointer;
            margin-top: 20px;
            transition: all 0.3s ease;
            font-weight: bold;
        }

        button:hover {
            transform: translateY(-3px);
            box-shadow: 0 8px 20px rgba(17, 153, 142, 0.4);
        }

        button:active {
            transform: translateY(0);
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>¡FELICIDADES!</h1>
        <p>Has adivinado la palabra correctamente</p>
        
        <?php
        session_start();
        if(isset($_SESSION['palabra'])) {
            echo '<div class="palabra-adivinada">' . strtoupper($_SESSION['palabra']) . '</div>';
        }
        ?>
        
        <p>¡Eres todo un maestro del ahorcado! </p>
        
        <a href="index.php"><button>Jugar de Nuevo</button></a>
    </div>
</body>
</html>