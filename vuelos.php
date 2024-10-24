<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vuelos con Descuento</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="css/lugares.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f7f7f7;
        }

        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 20px;
        }

        h1 {
            text-align: center;
            color: #333;
            font-size: 2.5em;
            margin-bottom: 20px;
        }

        .flight-card {
            background-color: white;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            padding: 20px;
            margin-bottom: 20px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .flight-info {
            text-align: left;
        }

        .flight-info h3 {
            font-size: 1.5em;
            color: #3498db;
            margin: 0;
        }

        .flight-info p {
            font-size: 1em;
            color: #666;
            margin: 5px 0;
        }

        .price-info {
            text-align: right;
        }

        .price-info .original-price {
            text-decoration: line-through;
            color: #999;
            font-size: 1.2em;
        }

        .price-info .discount-price {
            font-size: 1.5em;
            color: #2ecc71;
        }

        .price-info p {
            font-size: 1em;
            color: #666;
        }

        .btn-reservar {
            display: inline-block;
            background-color: #3498db;
            color: white;
            padding: 10px 20px;
            border-radius: 5px;
            text-decoration: none;
            font-size: 1em;
            transition: background-color 0.3s ease;
        }

        .btn-reservar:hover {
            background-color: #2980b9;
        }
    </style>
</head>
<body>

<?php require_once "menu.php"; ?>

<div class="container">
    <br><br><br><br>
    <h1>Vuelos con Descuento</h1>

    <!-- Tarjeta de vuelo con descuento -->
    <div class="flight-card">
        <div class="flight-info">
            <h3>Vuelo Ciudad de México - Cancún</h3>
            <p>Fecha: 28 de Octubre, 2024</p>
            <p>Aerolínea: Aeroméxico</p>
        </div>
        <div class="price-info">
            <p class="original-price">$4,500 MXN</p>
            <p class="discount-price">$3,600 MXN</p>
            <p>Descuento: 20% por 100 Tokens</p>
            <a href="#" class="btn-reservar">Reservar Ahora</a>
        </div>
    </div>

    <!-- Otro vuelo con descuento -->
    <div class="flight-card">
        <div class="flight-info">
            <h3>Vuelo Guadalajara - Monterrey</h3>
            <p>Fecha: 15 de Noviembre, 2024</p>
            <p>Aerolínea: Viva Aerobús</p>
        </div>
        <div class="price-info">
            <p class="original-price">$3,200 MXN</p>
            <p class="discount-price">$2,560 MXN</p>
            <p>Descuento: 20% por 80 Tokens</p>
            <a href="#" class="btn-reservar">Reservar Ahora</a>
        </div>
    </div>

    <!-- Más vuelos -->
    <div class="flight-card">
        <div class="flight-info">
            <h3>Vuelo Tijuana - Ciudad de México</h3>
            <p>Fecha: 10 de Diciembre, 2024</p>
            <p>Aerolínea: Volaris</p>
        </div>
        <div class="price-info">
            <p class="original-price">$5,000 MXN</p>
            <p class="discount-price">$4,250 MXN</p>
            <p>Descuento: 15% por 120 Tokens</p>
            <a href="#" class="btn-reservar">Reservar Ahora</a>
        </div>
    </div>

    <div class="flight-card">
        <div class="flight-info">
            <h3>Vuelo Monterrey - Los Ángeles</h3>
            <p>Fecha: 25 de Diciembre, 2024</p>
            <p>Aerolínea: Interjet</p>
        </div>
        <div class="price-info">
            <p class="original-price">$8,000 MXN</p>
            <p class="discount-price">$6,800 MXN</p>
            <p>Descuento: 15% por 200 Tokens</p>
            <a href="#" class="btn-reservar">Reservar Ahora</a>
        </div>
    </div>
</div>

</body>
</html>
