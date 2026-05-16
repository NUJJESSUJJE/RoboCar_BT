<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manual - RoboCar BT</title>

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
            padding: 60px 20px;
        }

        .hero h1{
            font-size: 55px;
            color: #38bdf8;
            margin-bottom: 20px;
        }

        .hero p{
            font-size: 20px;
            color: #cbd5e1;
            line-height: 1.8;
            max-width: 800px;
            margin: auto;
        }

        .section{
            background: rgba(255,255,255,0.05);
            margin-top: 40px;
            padding: 35px;
            border-radius: 15px;
        }

        .section h2{
            color: #38bdf8;
            margin-bottom: 20px;
            font-size: 30px;
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
        }

        li{
            margin-bottom: 12px;
            font-size: 18px;
            color: #e2e8f0;
        }

        .button-container{
            text-align: center;
            margin-top: 40px;
        }

        .button{
            display: inline-block;
            margin: 10px;
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
            transform: scale(1.05);
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

        <h1>Manual RoboCar BT</h1>

        <p>
            En este manual se explica cómo se realizó el montaje, la conexión y la programación del proyecto RoboCar BT paso a paso.
        </p>

    </section>

    <section class="section">

        <h2>Materiales utilizados</h2>

        <ul>
            <li>Placa ZUM BT con Bluetooth integrado</li>
            <li>Driver L298N</li>
            <li>Motores DC</li>
            <li>Chasis del coche</li>
            <li>4 pilas AA</li>
            <li>Portapilas</li>
            <li>Interruptor</li>
            <li>Cables jumpers</li>
            <li>Aplicación creada con MIT App Inventor</li>
        </ul>

    </section>

    <section class="section">

        <h2>Montaje del coche</h2>

        <p>
            Primero se prepara el chasis y se colocan los motores en los laterales usando soportes y tornillos. Después se sueldan los cables rojo y negro en cada motor para conectarlos al driver L298N.
        </p>

        <p>
            Una vez colocados los motores, se montan las ruedas y se comprueba que giren correctamente.
        </p>

    </section>

    <section class="section">

        <h2>Conexión de componentes</h2>

        <p>
            La placa ZUM BT se conecta al driver L298N mediante los pines 7, 6, 5 y 4 para controlar los movimientos del coche.
        </p>

        <p>
            El portapilas alimenta el circuito y el interruptor permite encender y apagar el coche fácilmente.
        </p>

        <p>
            También es importante conectar todas las masas (GND) correctamente para evitar errores de funcionamiento.
        </p>

    </section>

    <section class="section">

        <h2>Programación</h2>

        <p>
            El programa de Arduino recibe comandos mediante Bluetooth y activa los motores según la orden enviada desde la aplicación móvil.
        </p>

        <ul>
            <li>A = Avanzar</li>
            <li>B = Retroceder</li>
            <li>C = Izquierda</li>
            <li>D = Derecha</li>
            <li>E = Stop</li>
        </ul>

    </section>

    <section class="section">

        <h2>Aplicación móvil</h2>

        <p>
            La aplicación fue creada con MIT App Inventor y permite conectar el móvil al coche mediante Bluetooth.
        </p>

        <p>
            Desde la aplicación se pueden usar los botones de dirección para controlar el movimiento del RoboCar BT en tiempo real.
        </p>

    </section>

    <section class="section">

        <h2>Resultado final</h2>

        <p>
            Después de realizar todas las pruebas, el coche quedó funcionando correctamente y respondiendo a las órdenes enviadas desde el móvil.
        </p>

        <p>
            El resultado final es un coche robot funcional, sencillo y práctico, desarrollado para aprender programación, robótica y electrónica.
        </p>

    </section>

    <div class="button-container">

        <a class="button" href="index.php">
            ← Volver al inicio
        </a>

        <a class="button" href="comentarios.php">
            Comentarios
        </a>

        <!-- BOTÓN NUEVO DEL MANUAL -->
        <a class="button" href="manual_real.pdf" target="_blank">
            Ver manual completo
        </a>

    </div>

</div>

<footer>
    RoboCar BT | Manual del proyecto
</footer>

</body>
</html>
