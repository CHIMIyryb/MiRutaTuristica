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
        background: linear-gradient(transparent,rgba(28, 119, 239, 0.5)), url(../img/lugares/sanblas/sanblas.jpg);
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
		<h1>San Blas</h1>
	</div>

    <!--imagenes y texto-->
    
    <div class="container"><!--contenedor padre-->
        <div class="evento">
			<div class="foto">
				<img src="../img/lugares/sanblas/la contaduria.jpg" alt="">
			</div>
			<h3 class="fecha"><a href="https://www.google.com/maps/dir//la+contaduria+san+blas+nayarit/@22.0180035,-105.8971485,9z/data=!4m8!4m7!1m0!1m5!1m1!1s0x8420b88e644fa2f3:0x62d0cc0efe6a4fdf!2m2!1d-105.2756271!2d21.5422756?entry=ttu" target="_blank" class="link">La Contaduria <i class="fa-solid fa-location-dot fa-sm"></i></a></h3>
		</div>

        <div class="evento">
			<div class="foto" data-aos="zoom-out" data-aos-duration="1000">
				<img src="../img/lugares/sanblas/latovara.jpg" alt="">
			</div>
			<h3 class="fecha"><a href="https://www.google.com/maps/dir//La+Tovara+san+blas+nayarit/@22.012834,-105.8971485,9z/data=!4m8!4m7!1m0!1m5!1m1!1s0x8420b87430b6996f:0x669b8750d5c01cfb!2m2!1d-105.2473373!2d21.5319486?entry=ttu" target="_blank" class="link">La Tovara <i class="fa-solid fa-location-dot fa-sm"></i></a></h3>
		</div>

		<div class="evento">
			<div class="foto" data-aos="zoom-out" data-aos-duration="1000">
				<img src="../img/lugares/sanblas/AntiguaAduana.jpg" alt="">
			</div>
			<h3 class="fecha"><a href="https://www.google.com/maps/dir//Antigua+aduana+san+blas+nayarit/@22.0171507,-105.8971485,9z/data=!4m8!4m7!1m0!1m5!1m1!1s0x8420b91a0a4931af:0x77d05f48c2eb98a3!2m2!1d-105.2888826!2d21.540505?entry=ttu" target="_blank" class="link">Antigua aduana <i class="fa-solid fa-location-dot fa-sm"></i></a></h3>
		</div>

		<div class="evento">
			<div class="foto" data-aos="zoom-out" data-aos-duration="1000">
				<img src="../img/lugares/sanblas/islaisabel.jpg" alt="">
			</div>
			<h3 class="fecha"><a href="https://www.google.com/maps/place/Parque+Nacional+Isla+Isabel/@21.8861402,-105.9452228,12.5z/data=!4m15!1m8!3m7!1s0x8420b890eb3c1c4b:0xb2213ac5956de74e!2sIsla+Mar%C3%ADa+Isabel,+Progreso,+San+Blas,+Nay.!3b1!8m2!3d21.538236!4d-105.2819402!16s%2Fg%2F1wyc4nc7!3m5!1s0x869fd6038266c505:0xcae0adc6929dfd9f!8m2!3d21.8440167!4d-105.8847361!16s%2Fg%2F1214m2g8?entry=ttu" target="_blank" class="link">Isla Isabel <i class="fa-solid fa-location-dot fa-sm"></i></a></h3>
		</div>

		<div class="evento">
			<div class="foto" data-aos="zoom-out" data-aos-duration="1000">
				<img src="../img/lugares/sanblas/PlayaElBorrego.jpg" alt="">
			</div>
			<h3 class="fecha"><a href="https://www.google.com/maps/dir//Playa+el+borrego+san+blas+nayarit/@22.0092108,-105.8971485,9z/data=!4m8!4m7!1m0!1m5!1m1!1s0x8420c77d144c4fc5:0x30cb8f2cd00c9716!2m2!1d-105.2785907!2d21.5245337?entry=ttu" target="_blank" class="link">Playa el borrego <i class="fa-solid fa-location-dot fa-sm"></i></a></h3>
		</div>

		<div class="evento">
			<div class="foto" data-aos="zoom-out" data-aos-duration="1000">
				<img src="../img/lugares/sanblas/bahiamatanchen.jpg" alt="">
			</div>
			<h3 class="fecha"><a href="https://www.google.com/maps/place/63748+Matanch%C3%A9n,+Nay./@21.5291572,-105.2459285,16.25z/data=!4m6!3m5!1s0x8420b875a231d02b:0xe616981568aa4b80!8m2!3d21.5295362!4d-105.2461769!16s%2Fm%2F02q7spx?entry=ttu" target="_blank" class="link">Bahia de Mantanchen <i class="fa-solid fa-location-dot fa-sm"></i></a></h3>
		</div>

        <div class="evento">
			<div class="foto" data-aos="zoom-out" data-aos-duration="1000">
				<img src="../img/lugares/sanblas/lasislitas.jpg" alt="">
			</div>
			<h3 class="fecha"><a href="https://www.google.com/maps/place/Las+Islitas,+63748+Nay./data=!4m2!3m1!1s0x8420c79ad26eb133:0xa82f7675a04fcf31?sa=X&ved=2ahUKEwis0NiXq9iAAxVMfjABHfRhClUQ8gF6BAgTEAA&ved=2ahUKEwis0NiXq9iAAxVMfjABHfRhClUQ8gF6BAgUEAI" target="_blank" class="link">Las islitas <i class="fa-solid fa-location-dot fa-sm"></i></a></h3>
		</div>

        <div class="evento">
			<div class="foto" data-aos="zoom-out" data-aos-duration="1000">
				<img src="../img/lugares/sanblas/playadelrey.jpg" alt="">
			</div>
			<h3 class="fecha"><a href="https://www.google.com/maps/dir//Playa+del+rey+san+blas+nayarit/@22.013529,-105.8971485,9z/data=!4m8!4m7!1m0!1m5!1m1!1s0x8420b8a4e560b333:0xd64b194c3707943d!2m2!1d-105.2977753!2d21.5331704?entry=ttu" target="_blank" class="link">Playa del rey <i class="fa-solid fa-location-dot fa-sm"></i></a></h3>
		</div>

        <div class="evento">
			<div class="foto" data-aos="zoom-out" data-aos-duration="1000">
				<img src="../img/lugares/sanblas/palyadeloscocos.jpg" alt="">
			</div>
			<h3 class="fecha"><a href="https://www.google.com/maps/dir//cocodrilario+san+blas+nayarit/@22.0089751,-105.8971485,9z/data=!4m8!4m7!1m0!1m5!1m1!1s0x8420b80292b86095:0x15d71865ed8148f!2m2!1d-105.2062895!2d21.5285233?entry=ttu" target="_blank" class="link">Cocodrilario Kiekari <i class="fa-solid fa-location-dot fa-sm"></i></a></h3>
		</div>

        <div class="evento">
			<div class="foto" data-aos="zoom-out" data-aos-duration="1000">
				<img src="../img/lugares/sanblas/playaplatanitos.jpg" alt="">
			</div>
			<h3 class="fecha"><a href="https://www.google.com/maps/dir//platanitos+san+blas+nayarit/@21.9225807,-105.8585402,9z/data=!4m8!4m7!1m0!1m5!1m1!1s0x8420c548505f5a33:0x8e754b177041c6ac!2m2!1d-105.24061!2d21.3517742?hl=es&entry=ttu" target="_blank" class="link">Playa platanitos <i class="fa-solid fa-location-dot fa-sm"></i></a></h3>
		</div>
    </div>

<!--scrip para las animaciones-->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
	<script>
		AOS.init();
	</script>
</body>
</html>