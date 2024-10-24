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
    <link rel="stylesheet" href="css/index.css">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
</head>

<body>

    <style>
        #s1 {
            background: linear-gradient(to top, transparent, rgba(239, 46, 28, .5)), url(img/f2.jpeg);
            background-size: cover;
            background-attachment: fixed;
            background-position: center center;
        }
    </style>

    <!--MENU-->
    <header>
        <center>
        <img src="img/logo_wanderlust.png" alt="" class="logo">
            <nav>

                <ul class="menu-horizontal">

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
                        <a class="menu" href="ruta.php">
                            <i class="fa-solid fa-earth-americas"></i>
                            <div>
                                <p>Mi ruta</p>
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


    <!--Parrafo ¿quienes somos?-->
    <section id="s1">
        <div class="texto">
            <h1 class="titulo">¿Quienes somos?</h1>
            <p class="parrafo">Somos apasionados de explorar el mundo y hacer realidad las mejores experiencias de
                viaje. Nos enorgullese
                ser una agencia de viajes de renombre que se dedica a ofrecer servicios exepcionales y personalizados
                a nuestros clientes.
            </p>
            <br>
            <p class="parrafo">
                Nos esforzamos por superar las expectativas de nuestros clinetes en cada etapa del viaje. Desde la
                planificacion
                inicial hasta el regreso a casa, nos aseguramos de que cada detalle este cuidadosamente coordinado.
                Trabajamos en estrecha
                colaboracion contigo para entender tus preferencias, intereses y presupuesto.
            </p>
        </div>
        <!---->
        <!--imagenes que estan al lado del texto-->
        <div class="container-img">
            <img id="photo1" src="img/mesadelnayar.jpg" alt="">
            <img id="photo2" src="img/playa.png" alt="">
            <img id="photo3" src="img/muelle-de-San-Blas.jpg" alt="">
        </div>
        <!---->
    </section>



    <!--hotel-->
    <br><br><br><br>

    <center>
        <div data-aos="fade-up" data-aos-duration="1500">
            <h3 class="index-section">Descubre tu refugio ideal en Nayarit</h3>
        </div>
        <br><br>
        <div data-aos="fade-up" data-aos-duration="1500">
            <h4 class="parrafo-lugar">Ofrecemos una amplia selección de hoteles para que encuentres el alojamiento
                perfecto
                que se ajuste a tus necesidades y preferencias durante tu visita a Nayarit.Ya sea que estés planeando
                unas
                vacaciones en familia, una escapada romántica o un viaje de negocios, aquí encontrarás el alojamiento
                ideal
                para hacer de tu experiencia en Nayarit algo verdaderamente especial.</h4>
        </div>
    </center>

    <br><br>
    <div data-aos="fade-up" data-aos-duration="1500">
        <div class="container-img">
            <div class="box-img">
               
                    <figure>
                        <img src="img/index-hoteles/Nk Hotel Nekié Tepic.jpg" alt="img-galeria">
                        <div class="centrado">Nk Hotel Nekié Tepic</div>
                    </figure>
            
            </div>

            <div class="box-img">
               
                    <figure>
                        <img src="img/index-hoteles/hardrock.jpg" alt="img-galeria">
                        <div class="centrado">Hard Rock Hotel Vallarta All Inclusive</div>
                    </figure>
            
            </div>

            <div class="box-img">
               
                    <figure>
                        <img src="img/index-hoteles/VALLARTA GARDENS.jpg" alt="img-galeria">
                        <div class="centrado">VALLARTA GARDENS</div>
                    </figure>
         
            </div>

            <div class="box-img">
              
                    <figure>
                        <img src="img/index-hoteles/Hotel & Bungalows La Casa de Fortu.jpg" alt="img-galeria">
                        <div class="centrado">Hotel & Bungalows La Casa de Fortu </div>
                    </figure>
           
            </div>

            <div class="box-img">
              
                    <figure>
                        <img src="img/index-hoteles/Hotel Real de Don Juan.jpg" alt="img-galeria">
                        <div class="centrado">Hotel Real de Don Juan</div>
                    </figure>
          
            </div>

            <div class="box-img">
             
                    <figure>
                        <img src="img/index-hoteles/Hotel Fray Junipero Serra.jpg" alt="img-galeria">
                        <div class="centrado">Hotel Fray Junipero Serra</div>
                    </figure>
             
            </div>

            <div class="box-img">
              
                    <figure>
                        <img src="img/index-hoteles/Baos Hotel & Restaurant.jpg" alt="img-galeria">
                        <div class="centrado">Baos Hotel & Restaurant</div>
                    </figure>
               
            </div>

        </div>

    </div>
    <!---->

    <br><br><br><br>
    <!--restaurantes-->
    <center>
        <div data-aos="fade-up" data-aos-duration="1500">
            <h3 class="index-section">Explora los tesoros culinarios de Nayarit</h3>
        </div>
        <br><br>
        <div data-aos="fade-up" data-aos-duration="1500">
            <h4 class="parrafo-lugar">Sumérgete en la auténtica cocina mexicana y descubre los platillos típicos de
                Nayarit.
                Desde los frescos mariscos hasta los tradicionales tacos y tamales, cada bocado es una deliciosa muestra
                de
                la cultura y la tradición local. Además de la cocina local, Nayarit también cuenta con una amplia
                variedad
                de restaurantes que ofrecen sabores internacionales. Desde cocina italiana, argentina y japonesa hasta
                opciones
                vegetarianas y veganas, satisfaceremos todos los paladares.</h4>
        </div>
    </center>
    <div data-aos="fade-up" data-aos-duration="1500">
        <div class="container">
            <div class="card" style="--clr:#009688;">
                <div class="imgBX">
                    <img src="img/index-restaurantes/muleta.jpg" alt="">
                </div>
                <div class="content">
                    <h2>MULETA RESTAURANT</h2>
                    <p>Descubre la exquisitez de La Muleta en Tepic, Nayarit. Deliciosas carnes y ambiente acogedor.
                        Disfruta de un festín de sabores en nuestro bar y restaurante.</p>
                    <a href="restaurantes.php">Ver mas</a>
                </div>
            </div>

            <div class="card" style="--clr:#ff3e7f;">
                <div class="imgBX">
                    <img src="img/index-restaurantes/Restaurante Argentino El Quincho.jpg" alt="">
                </div>
                <div class="content">
                    <h2>Restaurante El Quincho</h2>
                    <p>El Quicho en Tepic, Nayarit te transporta a Argentina con auténticos sabores. Deléitate con
                        nuestras especialidades argentinas en un ambiente acogedor y auténtico.</p>
                    <a href="restaurantes.php">Ver mas</a>
                </div>
            </div>

            <div class="card" style="--clr:#03a9f4;">
                <div class="imgBX">
                    <img src="img/index-restaurantes/RESTAURANTE BAR EL DELFÍN.jpg" alt="">
                </div>
                <div class="content">
                    <h2>Restaurante el delfin</h2>
                    <p>Sumérgete en los sabores del mar en El Delfín, San Blas, Nayarit. Nuestro restaurante y bar
                        ofrece frescos mariscos en un entorno costero y relajado.</p>
                    <a href="restaurantes.php">Ver mas</a>
                </div>
            </div>

        </div>

    </div>
    <br><br><br><br>
    <!--lugares-->
    <center>
        <div data-aos="fade-up" data-aos-duration="1500">
            <h1 class="index-section">Sumérgete en la belleza de Nayarit</h1>
        </div>
        <br><br>
        <div data-aos="fade-up" data-aos-duration="1500">
            <h4 class="parrafo-lugar">Te invitamos a explorar los lugares más fascinantes y pintorescos de Nayarit, un
                destino lleno de magia y
                diversidad para todos los gustos. En nuestro sitio web, te ofrecemos información detallada sobre cada
                lugar
                turístico para que puedas planificar tu itinerario de manera fácil y emocionante. Nayarit te espera con
                los
                brazos abiertos, listo para mostrarte su esencia, belleza y hospitalidad.
                <br>
                <br>
                ¡Prepárate para una aventura inolvidable en Nayarit y descubre los lugares más sorprendentes que este
                destino tiene para ti! Bienvenido a un viaje lleno de descubrimientos y experiencias únicas.
            </h4>
        </div>
        <br><br>
    </center>
    <div data-aos="fade-up" data-aos-duration="1500">
        <ul class="slider">
            <li>
                <div class="contenido">
                    <h2>Isla de Mexcaltitan</h2>
                    <p>Descubre la asombrosa Isla de Mexcaltitán en Nayarit. Sus sorpenteantes calles y casas
                        coloridas te transportan a un mundo único. Sumérgete en su rica cultura huichol, saborea la
                        deliciosa gastronomía local y maravíllate con su historia. Un destino imperdible para los
                        amantes de la autenticidad.</p>
                </div>
            </li>
            <li>
                <div class="contenido">
                    <h2>Bahía de Matanchén</h2>
                    <p>La Bahía de Matanchén, un paraíso en Nayarit. Sus aguas serenas y playas de arena dorada invitan
                        a la tranquilidad. Explora actividades acuáticas, saborea mariscos frescos y maravíllate con sus
                        puestas de sol únicas. Un destino que combina relajación y aventura en la costa mexicana.</p>
                </div>
            </li>
            <li>
                <div class="contenido">
                    <h2>Laguna de Santa María del Oro</h2>
                    <p>Descubre la Laguna de Santa María del Oro en Nayarit, un paraíso natural de aguas cristalinas
                        rodeadas de montañas. Sumérgete en su belleza al nadar, Un rincón sereno y exquisito para
                        conectar con la naturaleza en México.</p>
                </div>
            </li>
            <li>
                <div class="contenido">
                    <h2>Palacio de gobierno</h2>
                    <p>El Palacio de Gobierno en Tepic, Nayarit, es un tesoro histórico. Con su arquitectura neoclásica
                        y detalles ornamentales, refleja el pasado y presente de la región. Descubre su rica historia y
                        su importancia en el corazón de la ciudad.</p>
                </div>
            </li>
            <li>
                <div class="contenido">
                    <h2>Santiago Ixcuintla</h2>
                    <p>Santiago Ixcuintla, un rincón cultural en Nayarit. Con sus calles llenas de historia y
                        arquitectura colonial, te transporta al pasado. Disfruta de su ambiente acogedor, gastronomía
                        regional y la cercanía al Río San Pedro, que añade un toque de encanto natural a este destino
                        mexicano.</p>
                </div>
            </li>
        </ul>
    </div>
    <!---->


    <!---->
    <footer>
        <div class="container-footer">
            <div class="sec aboutus">
                <h2>Sobre nosotros</h2>
                <p>¡Bienvenido a Wanderlust! Descubre un paraíso en cada rincón de Nayarit. Explora playas
                    vírgenes en Bahía de Matanchén, admira la arquitectura colonial de Santiago Ixcuintla y sumérgete en
                    la belleza de la Laguna de Santa María del Oro. Deja que nuestra guía te inspire a vivir
                    experiencias auténticas y únicas en Nayarit. ¡Tu próxima aventura te espera aquí!</p>
                <ul class="sci">
                    <li><a href=""><i class="fa-brands fa-facebook-f"></i></a></li>
                    <li><a href=""><i class="fa-brands fa-x-twitter"></i></a></li>
                    <li><a href=""><i class="fa-brands fa-instagram"></i></a></li>
                    <li><a href=""><i class="fa-brands fa-youtube"></i></a></li>
                </ul>
            </div>
            <div class="sec quicklinks">
                <h2>Conocenos</h2>
                <ul>
                    <li><a href="todo-sobre-nosotros.php">Todo sobre nosotros</a></li>
                </ul>
            </div>
            <div class="sec quicklinks">
                <h2>Privacidad</h2>
                <ul>
                    <li><a href="privacidad.php">Politica de privacidad</a></li>
                    <li><a href="terminos.php">Terminos y condicones</a></li>
                </ul>
            </div>
            <div class="sec contact">
                <h2>Contacto</h2>
                <ul class="info">
                    <li>
                        <span><i class="fa-solid fa-phone"></i></span>
                        <p><a href="tel: +123456789">+52 311 106 8414</a></p>
                    </li>
                    <li>
                        <span><i class="fa-solid fa-envelope"></i></span>
                        <p><a href="mailto:wanderlusnayarit@gmail.com">wanderlusnayarit@gmail.com</a></p>
                    </li>
                </ul>
            </div>
        </div>
    </footer>
    <div class="copyrightText">
        <p>Copyright©2023 Wanderlust. Todos lo derechos resevados</p>
    </div>

    <!---->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>

</body>

</html>