<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RoboCar BT</title>

    <style>

        *{
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body{
            font-family: Arial, sans-serif;
            background: linear-gradient(to right, #0f172a, #1e293b);
            color: white;
            min-height: 100vh;
        }

        .container{
            width: 90%;
            max-width: 1000px;
            margin: auto;
            padding: 40px 20px;
        }

        .hero{
            text-align: center;
            padding: 70px 20px;
        }

        .hero h1{
            font-size: 60px;
            margin-bottom: 20px;
            color: #38bdf8;
        }

        .hero p{
            font-size: 20px;
            line-height: 1.8;
            max-width: 800px;
            margin: auto;
            color: #cbd5e1;
            margin-bottom: 20px;
        }


        .section{
            background: rgba(255,255,255,0.05);
            margin-top: 40px;
            padding: 35px;
            border-radius: 15px;
        }

        .section h2{
            font-size: 32px;
            margin-bottom: 20px;
            color: #38bdf8;
        }

        .section p{
            font-size: 18px;
            line-height: 1.8;
            color: #e2e8f0;
            margin-bottom: 20px;
        }

        ul{
            margin-left: 25px;
            margin-top: 15px;
            margin-bottom: 25px;
        }

        li{
            margin-bottom: 12px;
            font-size: 18px;
            color: #e2e8f0;
        }

        .button{
            display: inline-block;
            margin-top: 30px;
            margin-right: 15px;
            padding: 14px 30px;
            background: #38bdf8;
            color: #0f172a;
            text-decoration: none;
            font-weight: bold;
            border-radius: 10px;
            transition: 0.3s;
        }

        .button:hover{
            background: #0ea5e9;

        }

        .button-container{
            text-align: center;
            margin-top: 40px;
        }

        footer{
            text-align: center;
            padding: 30px;
            margin-top: 40px;
            color: #94a3b8;
            font-size: 14px;
        }

    </style>

</head>

<body>

<div class="container">

    <section class="hero">

        <h1>RoboCar BT</h1>

        <p>
            RoboCar BT es un proyecto desarrollado para el CFGM de Sistemas Microinformáticos y Redes, centrado en el aprendizaje de robótica, electrónica y programación mediante Arduino.
        </p>

        <p>
            En esta página web podrás descubrir todo el proceso de desarrollo del proyecto, desde el montaje y la programación hasta las pruebas y el resultado final.
        </p>

    </section>

    <section class="section">

        <h2>¿Qué hace el proyecto?</h2>

        <p>
            RoboCar BT es un coche robot controlado desde un teléfono móvil mediante conexión Bluetooth. El sistema permite enviar órdenes desde una aplicación Android para controlar el movimiento del vehículo en tiempo real.
        </p>

        <p>
            El proyecto utiliza una placa Arduino compatible con Bluetooth, un controlador de motores L298N y una aplicación desarrollada con MIT App Inventor. Gracias a esta conexión, el coche puede realizar diferentes acciones de forma sencilla y rápida.
        </p>

        <h2>Funciones principales</h2>

        <ul>
            <li>Avanzar</li>
            <li>Retroceder</li>
            <li>Girar a la izquierda</li>
            <li>Girar a la derecha</li>
            <li>Detenerse</li>
        </ul>

        <p>
            La aplicación móvil envía comandos al coche mediante Bluetooth y la placa Arduino interpreta esas órdenes para controlar los motores correctamente.
        </p>

        <h2>El proyecto incluye</h2>

        <ul>
            <li>Montaje completo del coche robot</li>
            <li>Programación del sistema en Arduino</li>
            <li>Diseño de una aplicación móvil</li>
            <li>Diseño de una carcasa 3D para mejorar la estructura y protección del vehículo</li>
        </ul>

        <p>
            El objetivo principal del proyecto es demostrar la integración entre hardware y software en un sistema robótico funcional y fácil de utilizar.
        </p>

    </section>

    <div class="button-container">

        <a class="button" href="comentarios.php">
            Ir a comentarios
        </a>

        <a class="button" href="manual.php">
            Manual
        </a>

    </div>

</div>

<footer>
    RoboCar BT | Proyecto CFGM SMX
</footer>

</body>
</html>
