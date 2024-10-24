<?php

session_start();

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
        integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="css/todo-sobre-nosotros.css">
</head>

<body>
    <!--MENU-->
    <header>
        <center>
            <img src="img/logo_wanderlust.png" alt="" class="logo">
            <nav>

                <ul class="menu-horizontal">

                    <li>
                        <a class="menu" href="index.php">
                            <i class="fa-solid fa-house fa-sm"></i>

                            <div>
                                <p class="menu-item">Inicio</p>
                            </div>
                        </a>
                    </li>


                    <li>
                        <a class="menu" href="hotel.php">
                            <i class="fa-solid fa-hotel fa-sm"></i>

                            <div>
                                <p class="menu-item">Hoteles</p>
                            </div>
                        </a>
                    </li>

                    <li>
                        <a class="menu" href="restaurantes.php">
                            <i class="fa-solid fa-utensils fa-sm"></i>
                            <div>
                                <p class="menu-item">Restaurantes</p>
                            </div>
                        </a>
                    </li>

                    <li>
                        <a class="menu" href="lugares.php">
                            <i class="fa-solid fa-map-location-dot fa-sm"></i>
                            <div>
                                <p>Lugares</p>
                            </div>
                        </a>
                    </li>

                    <li>
                        <a class="menu" href="transporte.php">
                            <i class="fa-solid fa-bus"></i>
                            <div>
                                <p>Transporte</p>
                            </div>
                        </a>
                    </li>

                    <li>
                        <a class="menu" href="inicio-sesion.php">
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
                            <li><a class="menu" href="reservacion.php">Ver reservaciones</a></li>
                            <li><a class="menu" href="boletos.php">Boletos</a></li>
                            <li><a class="menu" href="php/cerrar_sesion.php">Cerrar sesion</a></li>
                        </ul>

                    </li>

                </ul>

            </nav>
        </center>
    </header>
    <!---->
    <br><br><br><br><br>
    <center>
        <h1 class="titulo">¿Quienes somos?</h1>
    </center>
    <br>
    <div class="container-img">
        <div class="box-img">
                <figure>
                    <p class="parrafo">¡Bienvenidos a Wanderlust!
                        <br><br>
                        En Wanderlust, nuestra misión es abrir las puertas de este magnífico estado de Nayarit y presentarte todos
                        los tesoros que tiene para ofrecer. Somos un equipo apasionado por el turismo y la exploración, y creemos en la
                        importancia de viajar de manera responsable, respetando las comunidades locales y la naturaleza. A través de
                        nuestro sitio web, queremos fomentar el turismo sostenible y auténtico en Nayarit, inspirando a viajeros a
                        descubrir los atractivos ocultos y las maravillas conocidas de esta región. <br><br>
                        Nayarit, ubicado en la costa del Pacífico mexicano, es un paraíso que combina una belleza natural deslumbrante
                        con una rica herencia cultural. Desde las playas doradas hasta las montañas cubiertas de selva, cada rincón de
                        este estado ofrece una experiencia única y memorable. En Wanderlust, creemos que viajar es una forma de
                        enriquecimiento personal y cultural. </Cada viaje es una oportunidad para aprender, conectar y descubrir nuevas
                        perspectivas.p>
                </figure>
        </div>

        <div class="box-img">
                <figure>
                    <img src="img/conocenos/nayarit-paisajes.jpg" alt="img-galeria">
                </figure>
        </div>

        <div class="box-img">
                <figure>
                    <img src="img/conocenos/nayarit.jpg" alt="img-galeria">
                </figure>
        </div>

        <div class="box-img">
                <figure>
                    <p class="parrafo">Al explorar Nayarit a través de nuestro sitio web, esperamos que sientas la emoción y el asombro
                        que nosotros experimentamos al conocer este destino increíble. 
                        <br><br>
                        Ya sea que estés planeando tu primer viaje a Nayarit o seas un viajero experimentado en busca de nuevas
                        aventuras, Wanderlust está aquí para ser tu guía confiable y apasionada. Nuestro compromiso es ofrecerte
                        información precisa, inspiradora y útil para que tu experiencia en Nayarit sea inolvidable. Te invitamos a
                        explorar nuestro sitio, sumergirte en las historias y fotos que compartimos y sentir la conexión con este
                        hermoso rincón de México. Desde las playas hasta las montañas, desde la historia hasta la cultura, desde los
                        sabores hasta los paisajes, Nayarit te espera con los brazos abiertos, y Wanderlust está aquí para ser
                        tu compañero de viaje en cada paso del camino.
                        <br><br>
                        Gracias por unirte a nosotros en esta emocionante aventura. ¡Bienvenido a Wanderlust, donde la
                        exploración nunca termina y cada día es una oportunidad para descubrir algo nuevo y asombroso!</p>
                </figure>
        </div>
</body>

</html>