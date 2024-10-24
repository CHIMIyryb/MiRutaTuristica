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
        background: linear-gradient(transparent,rgba(28, 119, 239, 0.5)), url(../img/lugares/tuxpan/tuxpan.jpg);
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
		<h1>Tuxpan</h1>
	</div>

    <!--imagenes y texto-->
    
    <div class="container"><!--contenedor padre-->
        <div class="evento">
			<div class="foto">
				<img src="../img/lugares/tuxpan/coamiles.jpeg" alt="">
			</div>
			<h3 class="fecha"><a href="https://www.google.com/maps/place/63660+Coamiles,+Nay./@21.9227048,-105.2714936,15z/data=!3m1!4b1!4m10!1m2!2m1!1sZona+Arqueol%C3%B3gica+de+Coamiles+tuxpan+nayarit+ubicacion!3m6!1s0x869e1d7fa5f2fef3:0xde757c406a309519!8m2!3d21.9226432!4d-105.2535624!15sCjdab25hIEFycXVlb2zDs2dpY2EgZGUgQ29hbWlsZXMgdHV4cGFuIG5heWFyaXQgdWJpY2FjaW9ukgEIbG9jYWxpdHngAQA!16s%2Fg%2F1tykvttv?hl=es&entry=ttu" target="_blank" class="link">Zona Arqueológica de Coamiles <i class="fa-solid fa-location-dot fa-sm"></i></a></h3>
		</div>

        <div class="evento">
			<div class="foto" data-aos="zoom-out" data-aos-duration="1500">
				<img src="../img/lugares/tuxpan/malencon.jpg" alt="">
			</div>
			<h3 class="fecha"><a href="https://www.google.com/maps/dir//Malec%C3%B3n+Tuxpan,+Independencia+Pte.,+Ismael+Verd%C3%ADn,+Tuxpan,+Nay./@22.2152877,-105.6494937,10z/data=!4m8!4m7!1m0!1m5!1m1!1s0x869e1d2cdba94223:0x82c2dbf7ca87882b!2m2!1d-105.2908163!2d21.9422842?hl=es&entry=ttu" target="_blank" class="link">Malecon <i class="fa-solid fa-location-dot fa-sm"></i></a></h3>
		</div>

	
		<div class="evento">
			<div class="foto" data-aos="zoom-out" data-aos-duration="1500">
				<img src="../img/lugares/tuxpan/palacion.jpeg" alt="">
			</div>
			<h3 class="fecha"><a href="https://www.google.com/maps/dir//Palacio+Municipal+tuxpan+nayarit+ubicacion/@21.9429898,-105.3048286,13.79z/data=!4m8!4m7!1m0!1m5!1m1!1s0x869e1c33aa27f81d:0x9f945f4145c90701!2m2!1d-105.2981106!2d21.944853?hl=es&entry=ttu" target="_blank" class="link">Palacio Municipal <i class="fa-solid fa-location-dot fa-sm"></i></a></h3>
		</div>

        <div class="evento">
			<div class="foto" data-aos="zoom-out" data-aos-duration="1500">
				<img src="../img/lugares/tuxpan/iglesia.jpg" alt="">
			</div>
			<h3 class="fecha"><a href="https://www.google.com/maps/dir//Parroquia+de+San+Miguel+Arcangel+tuxpan+nayarit+ubicacion/@22.2201853,-105.6494937,10z/data=!4m8!4m7!1m0!1m5!1m1!1s0x869e1dd206858e47:0x3201aaf020deb60!2m2!1d-105.2989644!2d21.9445148?hl=es&entry=ttu" target="_blank" class="link">Parroquia de San Miguel Arcangel <i class="fa-solid fa-location-dot fa-sm"></i></a></h3>
		</div>


<!--scrip para las animaciones-->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
	<script>
		AOS.init();
	</script>
</body>
</html>