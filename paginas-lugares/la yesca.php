<?php

session_start();



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="../css/sanblas.css">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <title>Document</title>
</head>
<body>

<!--imagen de fondo-->
<style>
    body{
        background: linear-gradient(transparent,rgba(28, 119, 239, 0.5)), url(../img/lugares/yesca/yesca.jpg);
        background-size: cover;
        background-attachment: fixed;
        background-position: center center;
    }
</style>

   <!--MENU-->
   <header>
    <center>
        <img src="../img/logo_wanderlust.png" alt="" class="logo">
            <nav>
    
            <ul class="menu-horizontal">

                <li>
                    <a class="menu" href="../index.php">
                        <i class="fa-solid fa-house fa-sm"></i>
                            
                                <div>
                                        <p class="menu-item">Inicio</p>
                                </div>
                    </a>
                </li>
    
    
                <li>
                    <a class="menu" href="../hotel.php">
                        <i class="fa-solid fa-hotel fa-sm"></i>
                            
                                <div>
                                        <p class="menu-item">Hoteles</p>
                                </div>
                    </a>
                </li>
    
                <li>
                    <a class="menu" href="../restaurantes.php">
                        <i class="fa-solid fa-utensils fa-sm"></i>
                                <div>
                                        <p class="menu-item">Restaurantes</p>
                                </div>    
                    </a>
                </li>
    
                <li>
                    <a class="menu" href="../lugares.php">
                        <i class="fa-solid fa-map-location-dot fa-sm"></i>
                                <div>
                                        <p>Lugares</p>
                                </div>
                    </a>
                </li>
    
                <li>
                        <a class="menu" href="../transporte.php">
                            <i class="fa-solid fa-bus"></i>
                            <div>
                                <p>Transporte</p>
                            </div>
                        </a>
                    </li>
    
                <li>
                    <a class="menu" href="../inicio-sesion.php">
                        <i class="fa-solid fa-user fa-sm"></i>
                        <div>
                                <?php
                        
                                        if(!isset($_SESSION['usuario'])){
                                            echo "Iniciar sesion";
                                        } else{
                                            echo $_SESSION['usuario'];
                                        }
                        
                                ?>
                                <!--mover el echo fuera del a para que ya no sea tratado como un enlace-->
                        </div>
                    </a>
    
                    <ul class="menu-vertical">
                        <li><a class="menu" href="../reservacion.php">Ver reservaciones</a></li>
                        <li><a class="menu" href="../boletos.php">Boletos</a></li>
                        <li><a class="menu" href="../php/cerrar_sesion.php">Cerrar sesion</a></li>
                    </ul>
    
                </li>
    
            </ul>
    
        </nav>
    </center>
        </header>
        <!---->

    <div class="title">
		<h1>La Yesca</h1>
	</div>

    <!--imagenes y texto-->
    
    <div class="container"><!--contenedor padre-->
        <div class="evento">
			<div class="foto">
				<img src="../img/lugares/yesca/bosque.png" alt="">
			</div>
			<h3 class="fecha"><a href="https://www.google.com/maps/place/Arrillo+del+Puerto+Blanco/@21.3644568,-104.0340118,4940m/data=!3m1!1e3!4m15!1m8!3m7!1s0x8427b3872a7f047d:0x9d0f8125bcb0c3b!2s63580+La+Yesca,+Nay.!3b1!8m2!3d21.3182152!4d-104.0101271!16s%2Fg%2F11c264bjsc!3m5!1s0x8427b166d2cad831:0x597c0935c9fee9dd!8m2!3d21.3626593!4d-104.0339803!16s%2Fg%2F11f3xgq0tr!5m1!1e4?hl=es&entry=ttu" target="_blank" class="link">Arrillo del Puerto Blanco <i class="fa-solid fa-location-dot fa-sm"></i></a></h3>
		</div>

        <div class="evento">
			<div class="foto" data-aos="zoom-out" data-aos-duration="1500">
				<img src="../img/lugares/yesca/vieja.jpg" alt="">
			</div>
			<h3 class="fecha"><a href="https://www.google.com/maps/place/63580+La+Yesca,+Nay./@21.3197621,-104.0113795,16.75z/data=!4m6!3m5!1s0x8427b3872a7f047d:0x9d0f8125bcb0c3b!8m2!3d21.3182152!4d-104.0101271!16s%2Fg%2F11c264bjsc?hl=es&entry=ttu" target="_blank" class="link">La Yesca Vieja (centro histórico) <i class="fa-solid fa-location-dot fa-sm"></i></a></h3>
		</div>


<!--scrip para las animaciones-->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
	<script>
		AOS.init();
	</script>
</body>
</html>