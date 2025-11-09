<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Game Over - Juego del Ahorcado</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: linear-gradient(135deg, #eb3349 0%, #f45c43 100%);
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
            color: #eb3349;
            font-size: 3em;
            margin-bottom: 20px;
            text-shadow: 2px 2px 4px rgba(0,0,0,0.1);
        }

        .emoji {
            font-size: 5em;
            margin: 20px 0;
            animation: sacudir 0.5s ease;
        }

        @keyframes sacudir {
            0%, 100% { transform: translateX(0); }
            25% { transform: translateX(-10px); }
            75% { transform: translateX(10px); }
        }

        p {
            font-size: 1.3em;
            color: #555;
            margin: 20px 0;
            line-height: 1.6;
        }

        .palabra-correcta {
            font-size: 2em;
            color: #eb3349;
            font-weight: bold;
            margin: 25px 0;
            letter-spacing: 5px;
        }

        button {
            padding: 15px 40px;
            font-size: 1.2em;
            background: linear-gradient(135deg, #eb3349, #f45c43);
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
            box-shadow: 0 8px 20px rgba(235, 51, 73, 0.4);
        }

        button:active {
            transform: translateY(0);
        }

        .mensaje-animo {
            background: #fff3cd;
            padding: 15px;
            border-radius: 10px;
            margin: 20px 0;
            color: #856404;
            font-size: 1.1em;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>GAME OVER</h1>
        <p>¡Oh no! Te has quedado sin intentos</p>
        
        <?php
        session_start();
        if(isset($_SESSION['palabra'])) {
            echo '<p>La palabra era:</p>';
            echo '<div class="palabra-correcta">' . strtoupper($_SESSION['palabra']) . '</div>';
        }
        ?>
        
        <div class="mensaje-animo">
            ¡No te rindas! La práctica hace al maestro
        </div>
        
        <a href="index.php"><button>Intentar de Nuevo</button></a>
    </div>
</body>
</html>
