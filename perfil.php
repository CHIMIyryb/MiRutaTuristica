<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="css/lugares.css">
</head>
<body>

<style>

    #s1 {
        background-size: cover;
        background-attachment: fixed;
        background-position: center center;
        display: flex;
        justify-content: center;
        align-items: flex-start;
        height: 100vh;
    }

    .profile-container {
        text-align: center;
    }

    #user-name {
        margin-top: 15px;
        font-size: 24px;
        font-weight: bold;
        color: #333;
    }

    .profile-divider {
        border-top: 2px solid #ccc;
        margin: 20px auto;
        width: 100%;
    }

    .menu-horizontal li {
        margin: 0 15px;
    }

    .menu-horizontal a {
        text-decoration: none;
        color: #333;
        font-size: 18px;
        font-weight: bold;
    }

    .menu-horizontal a:hover {
        color: #74C0FC;
    }

    /* Estilo para el balance de tokens */
    .token-balance {
        margin-top: 20px;
        font-size: 20px;
        font-weight: bold;
        color: #555;
    }

</style>

<?php require_once "menu.php"; ?>
<br><br><br><br><br>
<section id="s1">
    <div class="profile-container">
        <!-- Imagen del usuario -->
        <center>
            <i class="fa-regular fa-circle-user fa-7x"></i>
        </center>
        <!-- Nombre del usuario -->
        <h2 id="user-name">Adrian Gallardo Buenrostro <i class="fa-solid fa-circle-check" style="color: #74C0FC;"></i></h2>

        <!-- Línea gris debajo del nombre -->
        <div class="profile-divider"></div>

        <!-- Menú horizontal -->
        <ul class="menu-horizontal">
            <li><a href="crear_ruta.php">Crear ruta</a></li>
            <li><a href="validar_ruta.php">Validar ruta</a></li>
            <li><a href="canjear.php">Canjear tokens</a></li>
        </ul>

        <!-- Balance de tokens -->
        <div class="token-balance">
            <h2>
            Balance: <i class="fa-brands fa-ethereum"></i> 21 tokens
            </h2>
        </div>
    </div>
</section>

</body>
</html>
