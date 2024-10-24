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
        background: linear-gradient(transparent,rgba(28, 119, 239, 0.5)), url(../img/lugares/tepic/tepic.png);
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
		<h1>Tepic</h1>
	</div>

    <!--imagenes y texto-->
    
    <div class="container"><!--contenedor padre-->
        <div class="evento">
			<div class="foto">
				<img src="../img/lugares/tepic/alameda.jpg" alt="">
			</div>
			<h3 class="fecha"><a href="https://www.google.com/maps/dir//Av+Ignacio+Allende+Pte+399-434,+Centro,+63000+Tepic,+Nay./@21.5110827,-104.9826213,12z/data=!4m8!4m7!1m0!1m5!1m1!1s0x842736f8fcc988db:0xcaf8a8bd8929ecbe!2m2!1d-104.9002196!2d21.5111029?hl=es&entry=ttu" target="_blank" class="link">Parque la Alameda <i class="fa-solid fa-location-dot fa-sm"></i></a></h3>
		</div>

        <div class="evento">
			<div class="foto" data-aos="zoom-out" data-aos-duration="1500">
				<img src="../img/lugares/tepic/centroo.jpg" alt="">
			</div>
			<h3 class="fecha"><a href="https://www.google.com/maps/dir//Av.+Guadalupe+Victoria,+Centro,+63000+Tepic,+Nay./@21.5148806,-104.9724383,12z/data=!4m8!4m7!1m0!1m5!1m1!1s0x842737aa9cc9c7e7:0x97f08dd6acd0a3a0!2m2!1d-104.8900366!2d21.5149008?hl=es&entry=ttu" target="_blank" class="link">Centro Historico Tepic<i class="fa-solid fa-location-dot fa-sm"></i></a></h3>
		</div>

		<div class="evento">
			<div class="foto" data-aos="zoom-out" data-aos-duration="1500">
				<img src="../img/lugares/tepic/contemporaneo.jpg" alt="">
			</div>
			<h3 class="fecha"><a href="https://www.google.com/maps/dir//Centro+de+Arte+Contempor%C3%A1neo+del+Bicentenario+Emilia+Ort%C3%ADz,+Miguel+Hidalgo+17,+Centro,+63000+Tepic,+Nay./@21.510979,-104.9328882,13z/data=!4m8!4m7!1m0!1m5!1m1!1s0x8427374d351fd673:0x688512bed04da5ab!2m2!1d-104.891724!2d21.5108236?hl=es&entry=ttu" target="_blank" class="link">Centro de Arte Contemporáneo Emilia Ortiz <i class="fa-solid fa-location-dot fa-sm"></i></a></h3>
		</div>

		<div class="evento">
			<div class="foto" data-aos="zoom-out" data-aos-duration="1500">
				<img src="../img/lugares/tepic/gobierno.jpg" alt="">
			</div>
			<h3 class="fecha"><a href="https://www.google.com/maps/dir//Palacio+de+Gobierno,+Av.+M%C3%A9xico+Nte.+s%2Fn,+Centro,+63000+Tepic,+Nay./@21.5075728,-104.9350483,13z/data=!3m1!4b1!4m8!4m7!1m0!1m5!1m1!1s0x842736fdc3d56d35:0xcbf594bffdac6a29!2m2!1d-104.8938483!2d21.507498?hl=es&entry=ttu" target="_blank" class="link">Palacio de Gobierno <i class="fa-solid fa-location-dot fa-sm"></i></a></h3>
		</div>

		<div class="evento">
			<div class="foto" data-aos="zoom-out" data-aos-duration="1500">
				<img src="../img/lugares/tepic/indigenas.jpg" alt="">
			</div>
			<h3 class="fecha"><a href="https://www.google.com/maps/dir//Av.+M%C3%A9xico+Nte.+%26+Zapata,+Centro,+63000+Tepic,+Nay./@21.5101292,-104.9747404,12z/data=!4m8!4m7!1m0!1m5!1m1!1s0x842736fdf8c61337:0x7dc8cec61908ac28!2m2!1d-104.8923387!2d21.5101494?hl=es&entry=ttu" target="_blank" class="link">Centro estatal de culturas indigenas <i class="fa-solid fa-location-dot fa-sm"></i></a></h3>
		</div>

		<div class="evento">
			<div class="foto" data-aos="zoom-out" data-aos-duration="1500">
				<img src="../img/lugares/tepic/juan.jpg" alt="">
			</div>
			<h3 class="fecha"><a href="https://www.google.com/maps/place/Camino+CERRO+SAN+JUAN/@21.513498,-104.9689414,13z/data=!4m16!1m9!4m8!1m0!1m6!1m2!1s0x8427369b8441abf9:0x458404e6cd12a99c!2sCerro+de+San+Juan,+Monte+Vista+3,+Sin+Asignaci%C3%B3n+En+Nombre+de+Asentamiento,+63507+Tepic,+Nay.!2m2!1d-104.9277414!2d21.5134232!3m5!1s0x842735584d17a343:0x33a48333e27ff0a8!8m2!3d21.5049435!4d-104.939684!16s%2Fg%2F11tg8mfvkq?hl=es&entry=ttu" target="_blank" class="link">Cerro de San Juan <i class="fa-solid fa-location-dot fa-sm"></i></a></h3>
		</div>

        <div class="evento">
			<div class="foto" data-aos="zoom-out" data-aos-duration="1500">
				<img src="../img/lugares/tepic/loma.jpg" alt="">
			</div>
			<h3 class="fecha"><a href="https://www.google.com/maps/dir//Parque+La+Loma,+Puebla+239,+Centro,+63000+Tepic,+Nay./@21.9989756,-105.8213867,9z/data=!4m8!4m7!1m0!1m5!1m1!1s0x842736fb58ad4e09:0x6d8bd4b48ef3ab59!2m2!1d-104.8993259!2d21.5040623?hl=es&entry=ttu" target="_blank" class="link">Parque la loma <i class="fa-solid fa-location-dot fa-sm"></i></a></h3>
		</div>

        <div class="evento">
			<div class="foto" data-aos="zoom-out" data-aos-duration="1500">
				<img src="../img/lugares/tepic/mirador.jpg" alt="">
			</div>
			<h3 class="fecha"><a href="https://www.google.com/maps/dir//Mirador+Zitakua,+Zit%C3%A1cua,+63174+Tepic,+Nay./@21.9933468,-105.8067603,9z/data=!4m8!4m7!1m0!1m5!1m1!1s0x842737129fc0d34f:0x64cdf55a99b5839f!2m2!1d-104.870386!2d21.5047379?hl=es&entry=ttu" target="_blank" class="link">Mirador de Zitakua <i class="fa-solid fa-location-dot fa-sm"></i></a></h3>
		</div>

        <div class="evento">
			<div class="foto" data-aos="zoom-out" data-aos-duration="1500">
				<img src="../img/lugares/tepic/museo.jpg" alt="">
			</div>
			<h3 class="fecha"><a href="https://www.google.com/maps/dir//Museo+Regional+de+Nayarit,+Av.+M%C3%A9xico+Nte.+91,+Centro,+63000+Tepic,+Nay./@22.0012428,-105.8180024,9z/data=!4m8!4m7!1m0!1m5!1m1!1s0x842736e393bd8f97:0xb100d741039c119e!2m2!1d-104.892418!2d21.510024?hl=es&entry=ttu" target="_blank" class="link">Museo Regional de Nayarit <i class="fa-solid fa-location-dot fa-sm"></i></a></h3>
		</div>

        <div class="evento">
			<div class="foto" data-aos="zoom-out" data-aos-duration="1500">
				<img src="../img/lugares/tepic/parque.jpg" alt="">
			</div>
			<h3 class="fecha"><a href="https://www.google.com/maps/dir//Parque+Metropolitano+Tepic,+Blvrd+Luis+Donaldo+Colosio+s%2Fn,+Parque+Ecol%C3%B3gico,+63175+Tepic,+Nay./@21.9901075,-105.8018268,9z/data=!4m8!4m7!1m0!1m5!1m1!1s0x842737437339cacf:0xd927c2c02b2b3161!2m2!1d-104.8600069!2d21.489655?hl=es&entry=ttu" target="_blank" class="link">Parque Ecologico Metropolitano <i class="fa-solid fa-location-dot fa-sm"></i></a></h3>
		</div>

        <div class="evento">
			<div class="foto" data-aos="zoom-out" data-aos-duration="1500">
				<img src="../img/lugares/tepic/santuario.jpg" alt="">
			</div>
			<h3 class="fecha"><a href="https://www.google.com/maps/dir//Santuario+De+Guadalupe,+Cl.+Ures+382,+Centro,+63000+Tepic,+Nay./@22.0006523,-105.815576,9z/data=!4m8!4m7!1m0!1m5!1m1!1s0x842737b35ac29dff:0xc93276a7e3a37a63!2m2!1d-104.8875053!2d21.5123437?hl=es&entry=ttu" target="_blank" class="link">Santuario de la virgen de guadalupe <i class="fa-solid fa-location-dot fa-sm"></i></a></h3>
		</div>

<!--scrip para las animaciones-->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
	<script>
		AOS.init();
	</script>
</body>
</html>