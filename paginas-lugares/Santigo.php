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
        background: linear-gradient(transparent,rgba(28, 119, 239, 0.5)), url(../img/lugares/SantiagoIxc/santiago.jpg);
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
		<h1>Santiago Ixcuintla</h1>
	</div>

    <!--imagenes y texto-->
    
    <div class="container"><!--contenedor padre-->
        <div class="evento">
			<div class="foto">
				<img src="../img/lugares/SantiagoIxc/boca.jpg" alt="">
			</div>
			<h3 class="fecha"><a href="https://www.google.com/maps/place/63573+Boca+de+Camich%C3%ADn,+Nay./@21.7448671,-105.490319,17z/data=!3m1!4b1!4m6!3m5!1s0x8420997a3fddcdbf:0x8dedfc37a82e05cb!8m2!3d21.7463888!4d-105.4894444!16s%2Fg%2F11bc8z7j8g?hl=es&entry=ttu" target="_blank" class="link">Boca de camichin <i class="fa-solid fa-location-dot fa-sm"></i></a></h3>
		</div>

        <div class="evento">
			<div class="foto" data-aos="zoom-out" data-aos-duration="1500">
				<img src="../img/lugares/SantiagoIxc/colorado.jpeg" alt="">
			</div>
			<h3 class="fecha"><a href="https://www.google.com/maps/dir//Playa+el+colorado+santiago+ixcuintla+nayarit/@22.1878865,-105.7376565,10z/data=!4m8!4m7!1m0!1m5!1m1!1s0x869e27f029f4ec8b:0x485f601ce514e720!2m2!1d-105.5800637!2d21.8799111?hl=es&entry=ttu" target="_blank" class="link">Playa el colorado <i class="fa-solid fa-location-dot fa-sm"></i></a></h3>
		</div>

		<div class="evento">
			<div class="foto" data-aos="zoom-out" data-aos-duration="1500">
				<img src="../img/lugares/SantiagoIxc/corchos.jpg" alt="">
			</div>
			<h3 class="fecha"><a href="https://www.google.com/maps/dir//Playa+los+corchos+santiago+ixcuintla+nayarit/@22.0923637,-105.6391156,10z/data=!4m8!4m7!1m0!1m5!1m1!1s0x84209763de4bc9b9:0xd947d05f09e495e1!2m2!1d-105.4710483!2d21.6888632?hl=es&entry=ttu" target="_blank" class="link">Playa los corchos <i class="fa-solid fa-location-dot fa-sm"></i></a></h3>
		</div>

		<div class="evento">
			<div class="foto" data-aos="zoom-out" data-aos-duration="1500">
				<img src="../img/lugares/SantiagoIxc/palmar.jpg" alt="">
			</div>
			<h3 class="fecha"><a href="https://www.google.com/maps/place/63568+Palmar+de+Cuautla,+Nay./@22.2203313,-105.6464288,16z/data=!3m1!4b1!4m6!3m5!1s0x869e362dc679940d:0xf86d673c38710811!8m2!3d22.2215462!4d-105.6472819!16s%2Fg%2F12307c1b?hl=es&entry=ttu" target="_blank" class="link">Palmar de cautla <i class="fa-solid fa-location-dot fa-sm"></i></a></h3>
		</div>

		<div class="evento">
			<div class="foto" data-aos="zoom-out" data-aos-duration="1500">
				<img src="../img/lugares/SantiagoIxc/papalota.jpg" alt="">
			</div>
			<h3 class="fecha"><a href="https://www.google.com/maps/dir//21.8151312,-105.2094956/@21.8147615,-105.2073888,17.25z?entry=ttu" target="_blank" class="link">La papalota <i class="fa-solid fa-location-dot fa-sm"></i></a></h3>
		</div>

		<div class="evento">
			<div class="foto" data-aos="zoom-out" data-aos-duration="1500">
				<img src="../img/lugares/SantiagoIxc/sesteo.jpg" alt="">
			</div>
			<h3 class="fecha"><a href="https://www.google.com/maps/place/63573+Playa+el+Sesteo,+Nay./@21.7239418,-105.4875443,15z/data=!3m1!4b1!4m6!3m5!1s0x84209990365f53a3:0xc218c4bdd8098806!8m2!3d21.7239422!4d-105.4875443!16s%2Fg%2F11c5m31r2d?hl=es&entry=ttu" target="_blank" class="link">Playa el sesteo <i class="fa-solid fa-location-dot fa-sm"></i></a></h3>
		</div>

        <div class="evento">
			<div class="foto" data-aos="zoom-out" data-aos-duration="1500">
				<img src="../img/lugares/SantiagoIxc/mexcal.jpg" alt="">
			</div>
			<h3 class="fecha"><a href="https://www.google.com/maps/dir//Mexcaltit%C3%A1n,+63563+Nay./@21.9249422,-105.5158607,12z/data=!4m8!4m7!1m0!1m5!1m1!1s0x869e20ea46447e01:0xef795da8ba7ff25b!2m2!1d-105.4752218!2d21.9056579?hl=es&entry=ttu" target="_blank" class="link">La Isla de Mexcaltitan <i class="fa-solid fa-location-dot fa-sm"></i></a></h3>
		</div>

<!--scrip para las animaciones-->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
	<script>
		AOS.init();
	</script>
</body>
</html>