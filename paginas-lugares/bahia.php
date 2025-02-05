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
        background: linear-gradient(transparent,rgba(28, 119, 239, 0.5)), url(../img/lugares/bahia/banderas.jpg);
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
		<h1>Bahia De Banderas</h1>
	</div>

    <!--imagenes y texto-->
    
    <div class="container"><!--contenedor padre-->
        <div class="evento">
			<div class="foto">
				<img src="../img/lugares/bahia/bucerias.jpg" alt="">
			</div>
			<h3 class="fecha"><a href="https://www.google.com/maps/place/Bucer%C3%ADas,+Nay./@20.7553664,-105.3339691,14z/data=!3m1!4b1!4m6!3m5!1s0x842140950f9c5c33:0xb77539c48b2e548f!8m2!3d20.7568197!4d-105.3336087!16s%2Fm%2F047c03h?entry=ttu" target="_blank" class="link">Bucerias <i class="fa-solid fa-location-dot fa-sm"></i></a></h3>
		</div>

        <div class="evento">
			<div class="foto" data-aos="zoom-out" data-aos-duration="1500">
				<img src="../img/lugares/bahia/cruzz.jpg" alt="">
			</div>
			<h3 class="fecha"><a href="https://www.google.com/maps/place/63734+Cruz+de+Huanacaxtle,+Nay./@20.7525849,-105.3784855,15z/data=!3m1!4b1!4m6!3m5!1s0x84213f9f46842dc1:0xcfccc7e2d24d4adb!8m2!3d20.7544076!4d-105.3760604!16s%2Fm%2F03c062t?entry=ttu" target="_blank" class="link">La Cruz de Huanacaxtle, <i class="fa-solid fa-location-dot fa-sm"></i></a></h3>
		</div>

		<div class="evento">
			<div class="foto" data-aos="zoom-out" data-aos-duration="1500">
				<img src="../img/lugares/bahia/vallarta.jpg" alt="">
			</div>
			<h3 class="fecha"><a href="https://www.google.com/maps/place/Nuevo+Vallarta,+Nay./data=!4m2!3m1!1s0x842146a3108c50c7:0x4cb5066faa51643d?sa=X&ved=2ahUKEwiAxdKQpNiAAxXNSDABHYctDIwQ8gF6BAgQEAA&ved=2ahUKEwiAxdKQpNiAAxXNSDABHYctDIwQ8gF6BAgREAI" target="_blank" class="link">Nuevo vallarta <i class="fa-solid fa-location-dot fa-sm"></i></a></h3>
		</div>

		<div class="evento">
			<div class="foto" data-aos="zoom-out" data-aos-duration="1500">
				<img src="../img/lugares/bahia/pancho.jpg" alt="">
			</div>
			<h3 class="fecha"><a href="https://www.google.com/maps/place/63729+San+Pancho,+Nay./data=!4m2!3m1!1s0x84213d7e4fc9e4dd:0xc2df4ecd5633c23d?sa=X&ved=2ahUKEwisg9ibpNiAAxV8SzABHVWZAiwQ8gF6BAgQEAA&ved=2ahUKEwisg9ibpNiAAxV8SzABHVWZAiwQ8gF6BAgREAI" target="_blank" class="link">San Pancho <i class="fa-solid fa-location-dot fa-sm"></i></a></h3>
		</div>

		<div class="evento">
			<div class="foto" data-aos="zoom-out" data-aos-duration="1500">
				<img src="../img/lugares/bahia/mita.jpg" alt="">
			</div>
			<h3 class="fecha"><a href="https://www.google.com/maps/place/63727+Punta+Mita,+Nay./@20.780897,-105.5272782,15z/data=!3m1!4b1!4m6!3m5!1s0x8421133eb65ffacf:0x710e3e09ad3d876e!8m2!3d20.7794845!4d-105.5269376!16s%2Fm%2F03byct7?entry=ttu" target="_blank" class="link">Punta de mita <i class="fa-solid fa-location-dot fa-sm"></i></a></h3>
		</div>

		<div class="evento">
			<div class="foto" data-aos="zoom-out" data-aos-duration="1500">
				<img src="../img/lugares/bahia/sayulita.jpg" alt="">
			</div>
			<h3 class="fecha"><a href="https://www.google.com/maps/place/63728+Sayulita,+Nay./data=!4m2!3m1!1s0x84211662ea3de98d:0x1433c0c1e6d1e84c?sa=X&ved=2ahUKEwiTiYmxpNiAAxXLRTABHUYlDEAQ8gF6BAgQEAA&ved=2ahUKEwiTiYmxpNiAAxXLRTABHUYlDEAQ8gF6BAgREAI" target="_blank" class="link">Sayulita <i class="fa-solid fa-location-dot fa-sm"></i></a></h3>
		</div>


<!--scrip para las animaciones-->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
	<script>
		AOS.init();
	</script>
</body>
</html>