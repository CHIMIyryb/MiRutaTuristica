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
        background: linear-gradient(transparent,rgba(28, 119, 239, 0.5)), url(../img/lugares/tecuala/tcuala.jpg);
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
		<h1>Tecuala</h1>
	</div>

    <!--imagenes y texto-->
    
    <div class="container"><!--contenedor padre-->
        <div class="evento">
			<div class="foto">
				<img src="../img/lugares/tecuala/brava.jpg" alt="">
			</div>
			<h3 class="fecha"><a href="https://www.google.com/maps/place/Laguna+de+Agua+Brava/@22.1059984,-105.5535996,14z/data=!3m1!4b1!4m6!3m5!1s0x869e3ba79c51cb09:0x5116bccafecbb827!8m2!3d22.106!4d-105.533!16s%2Fm%2F0j24mfw?hl=es&entry=ttu" target="_blank" class="link">Laguna de agua brava<i class="fa-solid fa-location-dot fa-sm"></i></a></h3>
		</div>

        <div class="evento">
			<div class="foto" data-aos="zoom-out" data-aos-duration="1500">
				<img src="../img/lugares/tecuala/novillero.jpg" alt="">
			</div>
			<h3 class="fecha"><a href="https://www.google.com/maps/place/63466+Playa+Novillero,+Nay./@22.3769568,-105.703065,15z/data=!3m1!4b1!4m10!1m2!2m1!1sPlaya+El+Novillero+tecuala+nayarit+ubicacion!3m6!1s0x869e4e79c40b7d09:0xe6385fc94f53d8f6!8m2!3d22.379325!4d-105.684168!15sCixQbGF5YSBFbCBOb3ZpbGxlcm8gdGVjdWFsYSBuYXlhcml0IHViaWNhY2lvbpIBCGxvY2FsaXR54AEA!16s%2Fg%2F1thzv728?hl=es&entry=ttu" target="_blank" class="link">Playa El Novillero <i class="fa-solid fa-location-dot fa-sm"></i></a></h3>
		</div>

	
		<div class="evento">
			<div class="foto" data-aos="zoom-out" data-aos-duration="1500">
				<img src="../img/lugares/tecuala/templo.jpg" alt="">
			</div>
			<h3 class="fecha"><a href="https://www.google.com/maps/dir//Iglesia+De+San+Francisco+De+As%C3%ADs,+63425+La+Gu%C3%A1sima,+Nay./@22.4073508,-105.4884278,10.75z/data=!4m8!4m7!1m0!1m5!1m1!1s0x869e68372774fe05:0x41b3213a39d7da02!2m2!1d-105.3882606!2d22.4064115?hl=es&entry=ttu" target="_blank" class="link">Templo de San Fransisco<i class="fa-solid fa-location-dot fa-sm"></i></a></h3>
		</div>


<!--scrip para las animaciones-->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
	<script>
		AOS.init();
	</script>
</body>
</html>