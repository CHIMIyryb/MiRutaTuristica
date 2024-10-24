<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="css/Registro.css">
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
        <div class="form-box register">
            <h2>Registrarse</h2>
            <form action="php/registro_usuario_be.php" method="post">
            <div class="input-box">
                    <span class="icon"><ion-icon name="person"></ion-icon></span>
                    <input type="text" name="nombre" required>
                    <label>Nombre completo</label>
                </div>
                <div class="input-box">
                    <span class="icon"><ion-icon name="person"></ion-icon></span>
                    <input type="text" name="usuario" required>
                    <label>Nombre de usuario</label>
                </div>
                <div class="input-box">
                    <span class="icon"><ion-icon name="mail"></ion-icon></span>
                    <input type="email" name="email" required>
                    <label>Email</label>
                </div>
                <div class="input-box">
                    <span class="icon"><ion-icon name="lock-closed"></ion-icon></span>
                    <input type="password" name="password" required>
                    <label>Contraseña</label>
                </div>
                <div class="remember-forgot">
                    <label><input type="checkbox" name="" id="" required>Acepto los<a href="terminos-y-condiciones.php" style="text-decoration: underline;"> terminos y condiciones</a></label>
                </div>
                <button type="submit" class="btn">Registrarse</button>
                <div class="login-register">
                    <p>¿tienes una cuenta?<a href="inicio-sesion.php" class="login-link">Inicia sesion</a></p>
                </div>
            </form>
        </div>
    </div>

<script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</body>
</html>