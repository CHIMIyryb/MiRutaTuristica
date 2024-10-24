<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Canjea tus Tokens</title>
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

        .rewards-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 20px;
        }

        .reward-card {
            background-color: white;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            padding: 20px;
            text-align: center;
            transition: transform 0.3s ease;
        }

        .reward-card:hover {
            transform: translateY(-10px);
        }

        .reward-card i {
            font-size: 3em;
            color: #3498db; /* Azul claro */
            margin-bottom: 10px;
        }

        .reward-card h3 {
            font-size: 1.5em;
            color: #333;
            margin: 10px 0;
        }

        .reward-card p {
            font-size: 1em;
            color: #666;
        }

        .reward-card .btn-canjear {
            display: inline-block;
            background-color: #3498db; /* Azul claro */
            color: white;
            padding: 10px 20px;
            border-radius: 5px;
            text-decoration: none;
            font-size: 1em;
            margin-top: 10px;
            transition: background-color 0.3s ease;
        }

        .reward-card .btn-canjear:hover {
            background-color: #2980b9; /* Azul más oscuro en hover */
        }

        /* Responsive Design */
        @media (max-width: 768px) {
            h1 {
                font-size: 2em;
            }
        }
    </style>
</head>
<body>

<?php require_once "menu.php"; ?>
<div class="container">
    <br><br><br><br>
    <h1>Canjea tus Tokens</h1>

    <div class="rewards-grid">
        <!-- Descuentos en vuelos -->
        <div class="reward-card">
            <i class="fas fa-plane"></i>
            <h3>Descuentos en Vuelos</h3>
            <p>Canjea tus tokens por descuentos en vuelos nacionales e internacionales.</p>
            <a href="vuelos.php" class="btn-canjear">Canjear</a>
        </div>

        <!-- Paquetes turísticos -->
        <div class="reward-card">
            <i class="fas fa-suitcase-rolling"></i>
            <h3>Paquetes Turísticos</h3>
            <p>Obtén paquetes turísticos a destinos populares usando tus tokens.</p>
            <a href="#" class="btn-canjear">Canjear</a>
        </div>

        <!-- Descuentos en hoteles -->
        <div class="reward-card">
            <i class="fas fa-hotel"></i>
            <h3>Descuentos en Hoteles</h3>
            <p>Aprovecha descuentos en noches de hotel en varias ciudades.</p>
            <a href="#" class="btn-canjear">Canjear</a>
        </div>

        <!-- Desayunos incluidos -->
        <div class="reward-card">
            <i class="fas fa-coffee"></i>
            <h3>Desayunos Incluidos</h3>
            <p>Disfruta de desayunos gratuitos en hoteles seleccionados.</p>
            <a href="#" class="btn-canjear">Canjear</a>
        </div>

        <!-- Excursiones -->
        <div class="reward-card">
            <i class="fas fa-hiking"></i>
            <h3>Excursiones</h3>
            <p>Canjea tus tokens por excursiones y tours locales en tu destino.</p>
            <a href="#" class="btn-canjear">Canjear</a>
        </div>

        <!-- Canjea tokens por dinero -->
        <div class="reward-card">
            <i class="fas fa-money-bill-wave"></i>
            <h3>Canjea por Dinero</h3>
            <p>Convierte tus tokens en dinero en efectivo que podrás retirar o usar para futuras compras.</p>
            <a href="#" class="btn-canjear">Canjear</a>
        </div>
    </div>
</div>

</body>
</html>
