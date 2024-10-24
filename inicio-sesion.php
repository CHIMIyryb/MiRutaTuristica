<a?php

    session_start();

    if(isset($_SESSION['usuario'])){
        header("location: index.php");
    }

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="css/inicio-sesion.css">
</head>
<body>

    <style>
        body{
    display: flex;
    justify-content: center;
    align-items: center;
    min-height: 100vh;
    background: url('img/riviera-nayarit.jpg') no-repeat;
    background-size: cover;
    background-position: center;
}

.btn {
        display: inline-block;
        background-color: #041266; /* Color de fondo verde */
        color: white;              /* Color del texto */
        padding: 10px 20px;        /* Espaciado interno del botón */
        font-size: 16px;           /* Tamaño del texto */
        text-align: center;        /* Centra el texto */
        text-decoration: none;     /* Elimina el subrayado del enlace */
        border-radius: 5px;        /* Bordes redondeados */
        transition: background-color 0.3s ease; /* Transición suave del color */
    }

    .btn:hover {
        background-color: #45a049; /* Color de fondo al pasar el mouse */
    }
    </style>

<center>
    <header>
        <a class="menu" href="index.php">
            <i class="fa-solid fa-house fa-lg"></i>
                    <div class="contenedor" id="uno">
                            <p class="inicio">Inicio</p>
                    </div>
        </a>
    </header>
</center>

    <div class="wrapper">
        <div class="form-box login">
            <h2>Iniciar sesion</h2>
            <form action="" method="post">
                <div class="input-box">
                    <span class="icon"><ion-icon name="person"></ion-icon></span>
                    <input type="text" name="nombre" required>
                    <label>Nombre de usuario</label>
                </div>
                <div class="input-box">
                    <span class="icon"><ion-icon name="lock-closed"></ion-icon></span>
                    <input type="password" name="password" required>
                    <label>Contraseña</label>
                </div>
                <a class="btn" href="index.php">Iniciar Sesion</a>
                <div class="login-register">
                    <p>¿No tienes una cuenta?<a href="index.php" class="register-link">Registrarse</a></p>
                </div>
            </form>
        </div>
    </div>

    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</body>
</html>