<?php

session_start();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="css/hotel.css">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <script type="text/javascript" src="js/cargarhoteles.js"></script>
    <script type="text/javascript" src="js/jquery-3.7.0.js"></script>
</head>
<body>

    <style>
        #s1/*, #s2, #s3*/{
            background: linear-gradient(to top,transparent,rgba(28, 77, 239, 0.5)), url(img/riviera-nayarit-hoteles.jpeg);
            background-size: cover;
            background-attachment: fixed;
            background-position: center center;
            height: 100vh;
        }
    </style>

<section id="s1">
<?php
    require_once "menu.php";
?>

                <h1 class="hotel">Hoteles</h1>

<div class="reserva">
    <center>
        <h1>Alojamientos</h1>
    </center>
<center>
        <form action="php/rerserva_be.php" method="post" id="f1" name="f1">
            <div class="input">
                <p>Destino</p>
                <i id="icon" class="fa-solid fa-location-dot fa-lg"></i>
<select name="municipio" id="municipio" onchange="cambia_departamento()" required>
			<option value="0">Seleccione un municipio...</option>
    <option value="Acaponeta">Acaponeta</option>
    <option value="Ahuacatlán">Ahuacatlán</option>
    <option value="Amatlán de Cañas">Amatlán de Cañas</option>
    <option value="Bahia de Banderas">Bahia de Banderas</option>
    <option value="Compostela">Compostela</option>
    <option value="Ixtlán del Río">Ixtlán del Río</option>
    <option value="Jala">Jala</option>
    <option value="La Yesca">La Yesca</option>
    <option value="Rosamorada">Rosamorada</option>
    <option value="Ruíz">Ruíz</option>
    <option value="San Pedro Lagunillas">San Pedro Lagunillas</option>
    <option value="San Blas">San Blas</option>
    <option value="Santa María del Oro">Santa María del Oro</option>
    <option value="Santiago Ixcuintla">Santiago Ixcuintla</option>
    <option value="Tecuala">Tecuala</option>
    <option value="Tepic">Tepic</option>
    <option value="Tuxpan">Tuxpan</option>
    <option value="Xalisco">Xalisco</option>
</select>
            </div>

            <div class="input">
                <p>Hotel</p>
                <i id="icon" class="fa-solid fa-hotel fa-lg"></i>
                <select name="hotel" id="hotel" required style="width: 275px;">

                    <option value="0">Seleccione un hotel...</option>

		        </select>
            </div>

            <div id="calender" class="input">
                <p>Entrada</p>
                <input name="entrada" type="date" required type="date" id="timeStart" class="form-control" oninput="calculardiasDiscount()">
            </div>

            <div id="calender" class="input">
                <p>Salida</p>
                <input name="salida" type="date" required type="date" id="timeEnd" class="form-control" oninput="calculardiasDiscount()">
            </div>

            <div class="input">
                <p>Noches</p>
                <input name="noches" class="form-control" id="daysDiscount" size="10">
            </div>

            <div class="input">
                <p>Habitaciones</p>
                <i id="icon" class="fa-solid fa-bed fa-lg"></i>
                <input name="habitaciones" type="number" min="1" max="6" required>
            </div>

            <div class="input">
                <p>Adultos</p>
                <i id="icon" class="fa-solid fa-user"></i>
                <input name="adultos" type="number" min="1" max="6" required>
            </div>

            <div class="input">
                <p>Niños</p>
                <i id="icon" class="fa-solid fa-child fa-lg"></i>
                <input name="ninos" type="number" min="0" max="6">
            </div>
                <br><br>
            <div class="input-submit">

            <input class="reservacion" type="submit" value="Hacer reservacion" onclick = "accion();">


            </div>

        </form>
</center>   
</div>


</section>


<!--Acaponeta-->
<!--tarjetas hoteles(las 3 que son visibles)-->
<div data-aos="fade-up" data-aos-duration="1500">
    <h1 class="title">Hoteles de Acaponeta</h1>
    </div>
    <div data-aos="fade-up" data-aos-duration="1500">
    <div class="container">
        <div class="card">
            <img src="img/Hoteles/Acaponeta/gardena.jpg" alt="">
            <h2 class="hotel-name">Gardenia Hotel & Suites</h2>
            4.3<i class="fa-solid fa-star" style="color: #ffd500;"></i>
            <i class="fa-solid fa-star" style="color: #ffd500;"></i>
            <i class="fa-solid fa-star" style="color: #ffd500;"></i>
            <i class="fa-solid fa-star" style="color: #ffd500;"></i>
            <i class="fa-solid fa-star-half-stroke" style="color: #ffd500;"></i>         
            <h3 class="numero">Telefono: 325 252 0026</h3>
            <a href="#" target="_blank">Ver ubicacion</a>
        </div>
        <div class="card">
            <img src="img/Hoteles/Acaponeta/continental.jpg" alt="">
            <h2 class="hotel-name">Hotel G&B Continental</h2>
            4.4<i class="fa-solid fa-star" style="color: #ffd500;"></i>
            <i class="fa-solid fa-star" style="color: #ffd500;"></i>
            <i class="fa-solid fa-star" style="color: #ffd500;"></i>
            <i class="fa-solid fa-star" style="color: #ffd500;"></i>
            <i class="fa-solid fa-star-half-stroke" style="color: #ffd500;"></i>
            <h3 class="numero">Telefono: 325 252 1039</h3>
            <a href="#" target="_blank">Ver ubicacion</a>
        </div>
        <div class="card">
            <img src="img/Hoteles/Acaponeta/quintablanca.jpg" alt="">
            <h2 class="hotel-name">HOTEL QUINTA BLANCA</h2>
            4.2<i class="fa-solid fa-star" style="color: #ffd500;"></i>
            <i class="fa-solid fa-star" style="color: #ffd500;"></i>
            <i class="fa-solid fa-star" style="color: #ffd500;"></i>
            <i class="fa-solid fa-star" style="color: #ffd500;"></i>
            <i class="fa-solid fa-star-half-stroke" style="color: #ffd500;"></i>
            
            <h3 class="numero">Telefono: 325 252 0777</h3>
            <a href="#" target="_blank">Ver ubicacion</a>
        </div>
    </div>
</div>
<!---->
<br>
<br>
<!--resto de tarjetas-->
<!--lo que se mostrara debe ir dentro de span-->
<span class="hideText">
<div class="container">
    <div class="card">
        <img src="img/Hoteles/Acaponeta/sanluis.jpg" alt="">
        <h2 class="hotel-name">Hotel San Luis</h2>
        4.3<i class="fa-solid fa-star" style="color: #ffd500;"></i>
        <i class="fa-solid fa-star" style="color: #ffd500;"></i>
        <i class="fa-solid fa-star" style="color: #ffd500;"></i>
        <i class="fa-solid fa-star" style="color: #ffd500;"></i>
        <i class="fa-solid fa-star-half-stroke" style="color: #ffd500;"></i>
      
        <h3 class="numero">Telefono: 325 252 0163</h3>
        <a href="#" target="_blank">Ver ubicacion</a>
    </div>
    <div class="card">
        <img src="img/Hoteles/Acaponeta/casablanca.png" alt="">
        <h2 class="hotel-name">Hotel Casa Blanca</h2>
        3.8<i class="fa-solid fa-star" style="color: #ffd500;"></i>
        <i class="fa-solid fa-star" style="color: #ffd500;"></i>
        <i class="fa-solid fa-star" style="color: #ffd500;"></i>
        <i class="fa-solid fa-star" style="color: #ffd500;"></i>
        <i class="fa-regular fa-star" style="color: #ffd500;"></i>
        <h3>MXN $350 por noche</h3>
        
        <h3 class="numero">Telefono: 325 252 0026</h3>
        <a href="#" target="_blank">Ver ubicacion</a>
    </div>
    <div class="card">
        <img src="img/Hoteles/Acaponeta/candelaria.jpg" alt="">
        <h2 class="hotel-name">Hotel y Restaurante Candelaria</h2>
        3.9<i class="fa-solid fa-star" style="color: #ffd500;"></i>
        <i class="fa-solid fa-star" style="color: #ffd500;"></i>
        <i class="fa-solid fa-star" style="color: #ffd500;"></i>
        <i class="fa-solid fa-star" style="color: #ffd500;"></i>
        <i class="fa-regular fa-star" style="color: #ffd500;"></i>
       
        <h3 class="numero">Telefono: 389 253 2089</h3>
        <a href="#" target="_blank">Ver ubicacion</a>
    </div>
</div>
<br><br>
<div class="container">
    <div class="card">
        <img src="img/Hoteles/Acaponeta/royal.jpg" alt="">
        <h2 class="hotel-name">Hospedaje Royal</h2>
        3.6<i class="fa-solid fa-star" style="color: #ffd500;"></i>
        <i class="fa-solid fa-star" style="color: #ffd500;"></i>
        <i class="fa-solid fa-star" style="color: #ffd500;"></i>
        <i class="fa-solid fa-star" style="color: #ffd500;"></i>
        <i class="fa-regular fa-star" style="color: #ffd500;"></i>
        
        <h3 class="numero">Telefono: 325 252 0269</h3>
        <a href="#" target="_blank">Ver ubicacion</a>
    </div>
</div>
</span>
<br>
<br>
<!--boton para mostrar mas-->
<center><button class="read-more-btn">Ver Mas/Menos</button></center>
<br><br><br>

<!--Ahuacatlan-->
<!--tarjetas hoteles(las 3 que son visibles)-->
<div data-aos="fade-up" data-aos-duration="1500">
    <h1 class="title">Hoteles de Ahuacatlán</h1>
    </div>
    <div data-aos="fade-up" data-aos-duration="1500">
    <div class="container">
        <div class="card">
            <img src="img/Hoteles/Ahuacatlan/ceboruco.jpg" alt="">
            <h2 class="hotel-name">Hotel Hacienda el Ceboruco</h2>
            3.7<i class="fa-solid fa-star" style="color: #ffd500;"></i>
            <i class="fa-solid fa-star" style="color: #ffd500;"></i>
            <i class="fa-solid fa-star" style="color: #ffd500;"></i>
            <i class="fa-solid fa-star-half-stroke" style="color: #ffd500;"></i>
            <i class="fa-regular fa-star" style="color: #ffd500;"></i>
            <h3 style="color: rgb(0, 58, 247);">Ubicado en: Hotel Principal & Mesón Olas Altas</h3>
            <h3 class="numero">Telefono: 325 252 0026</h3>
            <a href="#" target="_blank">Ver ubicacion</a>
        </div>
        <div class="card">
            <img src="img/Hoteles/Ahuacatlan/quinta.jpg" alt="">
            <h2 class="hotel-name">Hotel Quinta Valentina</h2>
            4.8<i class="fa-solid fa-star" style="color: #ffd500;"></i>
            <i class="fa-solid fa-star" style="color: #ffd500;"></i>
            <i class="fa-solid fa-star" style="color: #ffd500;"></i>
            <i class="fa-solid fa-star" style="color: #ffd500;"></i>
            <i class="fa-solid fa-star" style="color: #ffd500;"></i>
           
            <h3 class="numero">Telefono: 324 170 6120</h3>
            <a href="#" target="_blank">Ver ubicacion</a>
        </div>
        <div class="card">
            <img src="img/Hoteles/Ahuacatlan/ibarra.jpg" alt="">
            <h2 class="hotel-name">Hotel Boutique Ibarra</h2>
            4.8<i class="fa-solid fa-star" style="color: #ffd500;"></i>
            <i class="fa-solid fa-star" style="color: #ffd500;"></i>
            <i class="fa-solid fa-star" style="color: #ffd500;"></i>
            <i class="fa-solid fa-star" style="color: #ffd500;"></i>
            <i class="fa-solid fa-star" style="color: #ffd500;"></i>
            <h3>MXN $1222 por noche</h3>
          
            <h3 class="numero">Telefono: 374 182 4829</h3>
            <a href="#" target="_blank">Ver ubicacion</a>
        </div>
    </div>
</div>
<!---->
<br>
<br>
<!--resto de tarjetas-->
<!--lo que se mostrara debe ir dentro de span-->
<span class="hideText">
<div class="container">
    <div class="card">
        <img src="img/Hoteles/Ahuacatlan/margarita.jpg" alt="">
        <h2 class="hotel-name">Hotel margarita</h2>
        4.0<i class="fa-solid fa-star" style="color: #ffd500;"></i>
        <i class="fa-solid fa-star" style="color: #ffd500;"></i>
        <i class="fa-solid fa-star" style="color: #ffd500;"></i>
        <i class="fa-solid fa-star" style="color: #ffd500;"></i>
        <i class="fa-regular fa-star" style="color: #ffd500;"></i>
       
        <a href="#" target="_blank">Ver ubicacion</a>
    </div>
    <div class="card">
        <img src="img/Hoteles/Ahuacatlan/olas altas.jpg" alt="">
        <h2 class="hotel-name">Hotel Principal & Mesón Olas Altas</h2>
        4.3<i class="fa-solid fa-star" style="color: #ffd500;"></i>
        <i class="fa-solid fa-star" style="color: #ffd500;"></i>
        <i class="fa-solid fa-star" style="color: #ffd500;"></i>
        <i class="fa-solid fa-star" style="color: #ffd500;"></i>
        <i class="fa-solid fa-star-half-stroke" style="color: #ffd500;"></i>
       
        <h3 class="numero">Telefono: 324 241 0993</h3>
        <a href="#" target="_blank">Ver ubicacion</a>
    </div>
</div>
</span>
<br>
<br>
<!--boton para mostrar mas-->
<center><button class="read-more-btn">Ver Mas/Menos</button></center>
<br><br><br>

<!--Amatlan de cañas-->
<div data-aos="fade-up" data-aos-duration="1500">
    <h1 class="title">Hoteles de Amatlan de cañas</h1>
</div>
    <div data-aos="fade-up" data-aos-duration="1500">
<div class="container">
    <div class="card">
        <img src="img/Hoteles/Amatlan de cañas/yolo.jpg" alt="">
        <h2 class="hotel-name">Casa IxeYolo</h2>
        5.0<i class="fa-solid fa-star" style="color: #ffd500;"></i>
        <i class="fa-solid fa-star" style="color: #ffd500;"></i>
        <i class="fa-solid fa-star" style="color: #ffd500;"></i>
        <i class="fa-solid fa-star" style="color: #ffd500;"></i>
        <i class="fa-solid fa-star" style="color: #ffd500;"></i>
        <h3>MXN $1881 por noche</h3>
       
        <h3 class="numero">Telefono: 777 616 0144</h3>
        <a href="#" target="_blank">Ver ubicacion</a>
    </div>
    <div class="card">
        <img src="img/Hoteles/Amatlan de cañas/zazen.jpg" alt="">
        <h2 class="hotel-name">Habitacion Privada Zazen</h2>
        4.2<i class="fa-solid fa-star" style="color: #ffd500;"></i>
        <i class="fa-solid fa-star" style="color: #ffd500;"></i>
        <i class="fa-solid fa-star" style="color: #ffd500;"></i>
        <i class="fa-solid fa-star" style="color: #ffd500;"></i>
        <i class="fa-regular fa-star" style="color: #ffd500;"></i>
        <h3>MXN $1202 por noche</h3>
       
        <a href="#" target="_blank">Ver ubicacion</a>
    </div>
    <div class="card">
        <img src="img/Hoteles/Amatlan de cañas/agua caliente.JPG" alt="">
        <h2 class="hotel-name">Hotel Agua Caliente</h2>
        4.2<i class="fa-solid fa-star" style="color: #ffd500;"></i>
        <i class="fa-solid fa-star" style="color: #ffd500;"></i>
        <i class="fa-solid fa-star" style="color: #ffd500;"></i>
        <i class="fa-solid fa-star" style="color: #ffd500;"></i>
        <i class="fa-regular fa-star" style="color: #ffd500;"></i>
       
        <h3 class="numero">Telefono: 324 247 0473</h3>
        <a href="#" target="_blank">Ver ubicacion</a>
    </div>
</div>
</div>

<!---->
<br>
<br>
<!--resto de tarjetas-->
<!--lo que se mostrara debe ir dentro de span-->
<span class="hideText">
<div class="container">
<div class="card">
    <img src="img/Hoteles/Amatlan de cañas/pavorreales.jpg" alt="">
    <h2 class="hotel-name">Bungalows Los Pavorreales</h2>
    4.1<i class="fa-solid fa-star" style="color: #ffd500;"></i>
    <i class="fa-solid fa-star" style="color: #ffd500;"></i>
    <i class="fa-solid fa-star" style="color: #ffd500;"></i>
    <i class="fa-solid fa-star" style="color: #ffd500;"></i>
    <i class="fa-regular fa-star" style="color: #ffd500;"></i>
   
    <h3 class="numero">Telefono: 324 247 0730</h3>
    <a href="#" target="_blank">Ver ubicacion</a>
</div>
<div class="card">
    <img src="img/Hoteles/Amatlan de cañas/boja boja.jpg" alt="">
    <h2 class="hotel-name">Hotel Boja-Boja</h2>
    4.4<i class="fa-solid fa-star" style="color: #ffd500;"></i>
    <i class="fa-solid fa-star" style="color: #ffd500;"></i>
    <i class="fa-solid fa-star" style="color: #ffd500;"></i>
    <i class="fa-solid fa-star" style="color: #ffd500;"></i>
    <i class="fa-solid fa-star-half-stroke" style="color: #ffd500;"></i>
    
    <h3 class="numero">Telefono: 324 108 8847</h3>
    <a href="#" target="_blank">Ver ubicacion</a>
</div>
</div>
</span>
<br>
<br>
<!--boton para mostrar mas-->
<center><button class="read-more-btn">Ver Mas/Menos</button></center>
<br><br><br>

<!--Bahia de Banderas-->
<div data-aos="fade-up" data-aos-duration="1500">
    <h1 class="title">Hoteles de Bahía de Bandera</h1>
</div>
    <div data-aos="fade-up" data-aos-duration="1500">
<div class="container">
    <div class="card">
        <img src="img/Hoteles/Bahia de banderas/aventurapacifico.jpg" alt="">
        <h2 class="hotel-name">Aventura Pacifico</h2>
        4.6<i class="fa-solid fa-star" style="color: #ffd500;"></i>
        <i class="fa-solid fa-star" style="color: #ffd500;"></i>
        <i class="fa-solid fa-star" style="color: #ffd500;"></i>
        <i class="fa-solid fa-star" style="color: #ffd500;"></i>
        <i class="fa-solid fa-star-half-stroke" style="color: #ffd500;"></i>
        <h3>MXN $1209 por noche</h3>
       
        <h3 class="numero">Telefono: 329 298 2797</h3>
        <a href="#" target="_blank">Ver ubicacion</a>
    </div>
    <div class="card">
        <img src="img/Hoteles/Bahia de banderas/corita.jpg" alt="">
        <h2 class="hotel-name">Hotel y Suites Corita</h2>
        4.3<i class="fa-solid fa-star" style="color: #ffd500;"></i>
        <i class="fa-solid fa-star" style="color: #ffd500;"></i>
        <i class="fa-solid fa-star" style="color: #ffd500;"></i>
        <i class="fa-solid fa-star" style="color: #ffd500;"></i>
        <i class="fa-solid fa-star-half-stroke" style="color: #ffd500;"></i>
        <h3>MXN $1977 por noche</h3>
       
        <h3 class="numero">Telefono: 329 298 1070</h3>
        <a href="#" target="_blank">Ver ubicacion</a>
    </div>
    <div class="card">
        <img src="img/Hoteles/Bahia de banderas/olas altas.jpg" alt="">
        <h2 class="hotel-name">Hotel Olas Altas Bucerias</h2>
        4.1<i class="fa-solid fa-star" style="color: #ffd500;"></i>
        <i class="fa-solid fa-star" style="color: #ffd500;"></i>
        <i class="fa-solid fa-star" style="color: #ffd500;"></i>
        <i class="fa-solid fa-star" style="color: #ffd500;"></i>
        <i class="fa-regular fa-star" style="color: #ffd500;"></i>
        <h3>MXN $921 por noche</h3>
        
        <h3 class="numero">Telefono: 325 252 0777</h3>
        <a href="#" target="_blank">Ver ubicacion</a>
    </div>
</div>
</div>

<!---->
<br>
<br>
<!--resto de tarjetas-->
<!--lo que se mostrara debe ir dentro de span-->
<span class="hideText">
<div class="container">
<div class="card">
    <img src="img/Hoteles/Bahia de banderas/nadia.jpg" alt="">
    <h2 class="hotel-name">Hotel Suites Nadia</h2>
    4.5<i class="fa-solid fa-star" style="color: #ffd500;"></i>
    <i class="fa-solid fa-star" style="color: #ffd500;"></i>
    <i class="fa-solid fa-star" style="color: #ffd500;"></i>
    <i class="fa-solid fa-star" style="color: #ffd500;"></i>
    <i class="fa-solid fa-star-half-stroke" style="color: #ffd500;"></i>
    <h3>MXN $2061 por noche</h3>
 
    <h3 class="numero">Telefono: 325 252 0163</h3>
    <a href="#" target="_blank">Ver ubicacion</a>
</div>
<div class="card">
    <img src="img/Hoteles/Bahia de banderas/bandera.jpg" alt="">
    <h2 class="hotel-name">Banderas Suites & Hotel</h2>
    3.8<i class="fa-solid fa-star" style="color: #ffd500;"></i>
    <i class="fa-solid fa-star" style="color: #ffd500;"></i>
    <i class="fa-solid fa-star" style="color: #ffd500;"></i>
    <i class="fa-solid fa-star" style="color: #ffd500;"></i>
    <i class="fa-regular fa-star" style="color: #ffd500;"></i>
    <h3>MXN $2264 por noche</h3>
   
    <h3 class="numero">Telefono: 329 298 1514</h3>
    <a href="#" target="_blank">Ver ubicacion</a>
</div>
<div class="card">
    <img src="img/Hoteles/Bahia de banderas/palmeras.jpg" alt="">
    <h2 class="hotel-name">Hotel Palmeras</h2>
    4.2<i class="fa-solid fa-star" style="color: #ffd500;"></i>
    <i class="fa-solid fa-star" style="color: #ffd500;"></i>
    <i class="fa-solid fa-star" style="color: #ffd500;"></i>
    <i class="fa-solid fa-star" style="color: #ffd500;"></i>
    <i class="fa-regular fa-star" style="color: #ffd500;"></i>
    <h3>MXN $1862 por noche</h3>
   
    <a href="#" target="_blank">Ver ubicacion</a>
</div>
</div>
<br><br>
<div class="container">
    <div class="card">
        <img src="img/Hoteles/Bahia de banderas/ysuri.jpg" alt="">
        <h2 class="hotel-name">HOTEL YSURI BUCERIAS</h2>
        4.6<i class="fa-solid fa-star" style="color: #ffd500;"></i>
        <i class="fa-solid fa-star" style="color: #ffd500;"></i>
        <i class="fa-solid fa-star" style="color: #ffd500;"></i>
        <i class="fa-solid fa-star" style="color: #ffd500;"></i>
        <i class="fa-solid fa-star-half-stroke" style="color: #ffd500;"></i>
        <h3>MXN $3429 por noche</h3>

        <h3 class="numero">Telefono: 322 117 8082</h3>
        <a href="#" target="_blank">Ver ubicacion</a>
    </div>
    <div class="card">
        <img src="img/Hoteles/Bahia de banderas/posada.jpg" alt="">
        <h2 class="hotel-name">La Posada de Bucerias</h2>
        4.7<i class="fa-solid fa-star" style="color: #ffd500;"></i>
        <i class="fa-solid fa-star" style="color: #ffd500;"></i>
        <i class="fa-solid fa-star" style="color: #ffd500;"></i>
        <i class="fa-solid fa-star" style="color: #ffd500;"></i>
        <i class="fa-solid fa-star-half-stroke" style="color: #ffd500;"></i>
        <h3>MXN $2017 por noche</h3>
        <h3 style="color: rgb(0, 58, 247);">Direccion: La Posada de Bucerias, Francisco I. Madero 59, Flamingos, 63732 Bucerías, Nay.</h3>
        <a href="#" target="_blank">Ver ubicacion</a>
    </div>
    <div class="card">
        <img src="img/Hoteles/Bahia de banderas/Hard Rock Hotel Vallarta.jpg" alt="">
        <h2 class="hotel-name">Hard Rock Hotel Vallarta</h2>
        4.6<i class="fa-solid fa-star" style="color: #ffd500;"></i>
        <i class="fa-solid fa-star" style="color: #ffd500;"></i>
        <i class="fa-solid fa-star" style="color: #ffd500;"></i>
        <i class="fa-solid fa-star" style="color: #ffd500;"></i>
        <i class="fa-solid fa-star-half-stroke" style="color: #ffd500;"></i>
        <h3>MXN $7483 por noche</h3>
        <h3 class="numero">Telefono: 322 226 8470</h3>
        <a href="#" target="_blank">Ver ubicacion</a>
    </div>
    </div>
    <br><br>
    <div class="container">
        <div class="card">
            <img src="img/Hoteles/Bahia de banderas/luxury.jpg" alt="">
            <h2 class="hotel-name">Marival Distinct Luxury Residences</h2>
            4.7<i class="fa-solid fa-star" style="color: #ffd500;"></i>
            <i class="fa-solid fa-star" style="color: #ffd500;"></i>
            <i class="fa-solid fa-star" style="color: #ffd500;"></i>
            <i class="fa-solid fa-star" style="color: #ffd500;"></i>
            <i class="fa-solid fa-star-half-stroke" style="color: #ffd500;"></i>
            <h3>MXN $7550 por noche</h3>
           
            <h3 class="numero">Telefono: 800 112 2617</h3>
            <a href="https://www.google.com/maps/dir//Marival+Distinct+Luxury+Residences+Bahia+de+banderas/@21.2850051,-105.8050099,9z/data=!4m8!4m7!1m0!1m5!1m1!1s0x842146b83993039d:0x4c39958ec54a2cb8!2m2!1d-105.30385!2d20.717231?hl=es&entry=ttu" target="_blank">Ver ubicacion</a>
        </div>
        <div class="card">
            <img src="img/Hoteles/Bahia de banderas/vardero.jpg" alt="">
            <h2 class="hotel-name">Hotel Villa Varadero</h2>
            4.2<i class="fa-solid fa-star" style="color: #ffd500;"></i>
            <i class="fa-solid fa-star" style="color: #ffd500;"></i>
            <i class="fa-solid fa-star" style="color: #ffd500;"></i>
            <i class="fa-solid fa-star" style="color: #ffd500;"></i>
            <i class="fa-regular fa-star" style="color: #ffd500;"></i>
            <h3>MXN $2624 por noche</h3>
            
            <h3 class="numero">Telefono: 461 613 0466</h3>
            <a href="https://www.google.com/maps/dir//Hotel+Villa+Varadero+Bahia+de+banderas/@21.2699134,-105.8050099,9z/data=!4m8!4m7!1m0!1m5!1m1!1s0x8421441e32932fc9:0x88aa4166808479d0!2m2!1d-105.2923349!2d20.687046?hl=es&entry=ttu" target="_blank">Ver ubicacion</a>
        </div>
        <div class="card">
            <img src="img/Hoteles/Bahia de banderas/banderas.jpg" alt="">
            <h2 class="hotel-name">MARINA BANDERAS, Hotel boutique & Suites</h2>
            4.5<i class="fa-solid fa-star" style="color: #ffd500;"></i>
            <i class="fa-solid fa-star" style="color: #ffd500;"></i>
            <i class="fa-solid fa-star" style="color: #ffd500;"></i>
            <i class="fa-solid fa-star" style="color: #ffd500;"></i>
            <i class="fa-solid fa-star-half-stroke" style="color: #ffd500;"></i>
            <h3>MXN $1874 por noche</h3>
           
            <h3 class="numero">Telefono: 322 297 6056</h3>
            <a href="https://www.google.com/maps/dir//MARINA+BANDERAS,+Hotel+boutique+%26+Suites+Bahia+de+banderas/@21.2701236,-105.8050099,9z/data=!4m8!4m7!1m0!1m5!1m1!1s0x842146a00d9c4b2f:0xb2b9618cd83137ee!2m2!1d-105.2909799!2d20.6887238?hl=es&entry=ttu" target="_blank">Ver ubicacion</a>
        </div>
    </div>
    <br><br>
    <div class="container">
        <div class="card">
            <img src="img/Hoteles/Bahia de banderas/village.jpg" alt="">
            <h2 class="hotel-name">Paradise Village Resort & Spa</h2>
            4.4<i class="fa-solid fa-star" style="color: #ffd500;"></i>
            <i class="fa-solid fa-star" style="color: #ffd500;"></i>
            <i class="fa-solid fa-star" style="color: #ffd500;"></i>
            <i class="fa-solid fa-star" style="color: #ffd500;"></i>
            <i class="fa-solid fa-star-half-stroke" style="color: #ffd500;"></i>
            <h3>MXN $2767 por noche</h3>
           
            <h3 class="numero">Telefono: 322 226 8850</h3>
            <a href="https://www.google.com/maps/dir//Paradise+Village+Resort+%26+Spa+Bahia+de+banderas/@21.2716343,-105.8050099,9z/data=!4m8!4m7!1m0!1m5!1m1!1s0x842146b84c7840eb:0x9da924862ead1361!2m2!1d-105.2950631!2d20.690488?hl=es&entry=ttu" target="_blank">Ver ubicacion</a>
        </div>
        <div class="card">
            <img src="img/Hoteles/Bahia de banderas/byb.jpg" alt="">
            <h2 class="hotel-name">Casa Virgilios B&B</h2>
            4.4<i class="fa-solid fa-star" style="color: #ffd500;"></i>
            <i class="fa-solid fa-star" style="color: #ffd500;"></i>
            <i class="fa-solid fa-star" style="color: #ffd500;"></i>
            <i class="fa-solid fa-star" style="color: #ffd500;"></i>
            <i class="fa-solid fa-star-half-stroke" style="color: #ffd500;"></i>
            <h3>MXN $1481 por noche</h3>
            
            <h3 class="numero">Telefono: 322 297 1180</h3>
            <a href="https://www.google.com/maps/dir//Casa+Virgilios+B%26B+Bahia+de+banderas/@21.2796855,-105.8050099,9z/data=!4m8!4m7!1m0!1m5!1m1!1s0x84273734c9a55deb:0x2b47ef37b3bc9092!2m2!1d-105.2945542!2d20.7068948?hl=es&entry=ttu" target="_blank">Ver ubicacion</a>
        </div>
        <div class="card">
            <img src="img/Hoteles/Bahia de banderas/breakfast.jpg" alt="">
            <h2 class="hotel-name">Villa San Juan Bed & Breakfast</h2>
            4.5<i class="fa-solid fa-star" style="color: #ffd500;"></i>
            <i class="fa-solid fa-star" style="color: #ffd500;"></i>
            <i class="fa-solid fa-star" style="color: #ffd500;"></i>
            <i class="fa-solid fa-star" style="color: #ffd500;"></i>
            <i class="fa-solid fa-star-half-stroke" style="color: #ffd500;"></i>
            <h3>MXN $1375 por noche</h3>
           
            <h3 class="numero">Telefono: 33 1519 0540</h3>
            <a href="https://www.google.com/maps/dir//Villa+San+Juan+Bed+%26+Breakfast+Bahia+de+banderas/@21.2793148,-105.8050099,9z/data=!4m8!4m7!1m0!1m5!1m1!1s0x842147e9318ec5af:0x57cc0f287210d9c2!2m2!1d-105.2934574!2d20.706648?hl=es&entry=ttu" target="_blank">Ver ubicacion</a>
        </div>
    </div>
    <br><br>
    <div class="container">
        <div class="card">
            <img src="img/Hoteles/Bahia de banderas/palladium.jpg" alt="">
            <h2 class="hotel-name">Grand Palladium Vallarta Resort & Spa</h2>
            4.5<i class="fa-solid fa-star" style="color: #ffd500;"></i>
            <i class="fa-solid fa-star" style="color: #ffd500;"></i>
            <i class="fa-solid fa-star" style="color: #ffd500;"></i>
            <i class="fa-solid fa-star" style="color: #ffd500;"></i>
            <i class="fa-solid fa-star-half-stroke" style="color: #ffd500;"></i>
            <h3>MXN $4105 por noche</h3>
           
            <h3 class="numero">Telefono: 329 226 9900</h3>
            <a href="https://www.google.com/maps/dir//Grand+Palladium+Vallarta+Resort+%26+Spa+Bahia+de+banderas/@21.3016554,-105.8314737,9z/data=!4m8!4m7!1m0!1m5!1m1!1s0x84216b4b3ec25209:0x82c692f582ae3921!2m2!1d-105.4559136!2d20.7541037?hl=es&entry=ttu" target="_blank">Ver ubicacion</a>
        </div>
        <div class="card">
            <img src="img/Hoteles/Bahia de banderas/conrad.jpg" alt="">
            <h2 class="hotel-name">Conrad Punta de Mita</h2>
            4.6<i class="fa-solid fa-star" style="color: #ffd500;"></i>
            <i class="fa-solid fa-star" style="color: #ffd500;"></i>
            <i class="fa-solid fa-star" style="color: #ffd500;"></i>
            <i class="fa-solid fa-star" style="color: #ffd500;"></i>
            <i class="fa-solid fa-star-half-stroke" style="color: #ffd500;"></i>
            <h3>MXN $12327 por noche</h3>
            
            <h3 class="numero">Telefono: 800 288 9985</h3>
            <a href="https://www.google.com/maps/dir//Conrad+Punta+de+Mita+Bahia+de+banderas/@21.3009728,-105.9602543,9z/data=!4m8!4m7!1m0!1m5!1m1!1s0x842114972504c541:0xb8fd812a1ca4d0a0!2m2!1d-105.4864232!2d20.7913093?hl=es&entry=ttu" target="_blank">Ver ubicacion</a>
        </div>
        <div class="card">
            <img src="img/Hoteles/Bahia de banderas/w.jpg" alt="">
            <h2 class="hotel-name">W Punta de Mita</h2>
            4.7<i class="fa-solid fa-star" style="color: #ffd500;"></i>
            <i class="fa-solid fa-star" style="color: #ffd500;"></i>
            <i class="fa-solid fa-star" style="color: #ffd500;"></i>
            <i class="fa-solid fa-star" style="color: #ffd500;"></i>
            <i class="fa-solid fa-star-half-stroke" style="color: #ffd500;"></i>
            <h3>MXN $10788 por noche</h3>
           
            <h3 class="numero">Telefono: 329 226 8333</h3>
            <a href="https://www.google.com/maps/dir//W+Punta+de+Mita+Bahia+de+banderas/@21.2774683,-105.9409608,9z/data=!4m8!4m7!1m0!1m5!1m1!1s0x84216ac7248b6a4f:0x4ffd9b48a3fcc564!2m2!1d-105.4321982!2d20.7486873?hl=es&entry=ttu" target="_blank">Ver ubicacion</a>
        </div>
    </div>
    <br><br>
    <div class="container">
        <div class="card">
            <img src="img/Hoteles/Bahia de banderas/meson de mita.jpg" alt="">
            <h2 class="hotel-name">HOTEL MESON DE MITA</h2>
            4.2<i class="fa-solid fa-star" style="color: #ffd500;"></i>
            <i class="fa-solid fa-star" style="color: #ffd500;"></i>
            <i class="fa-solid fa-star" style="color: #ffd500;"></i>
            <i class="fa-solid fa-star" style="color: #ffd500;"></i>
            <i class="fa-regular fa-star" style="color: #ffd500;"></i>
            <h3>MXN $1697 por noche</h3>
           
            <h3 class="numero">Telefono: 329 291 6330</h3>
            <a href="https://www.google.com/maps/dir//HOTEL+MESON+DE+MITA+Bahia+de+banderas/@21.2805858,-105.975809,9z/data=!4m8!4m7!1m0!1m5!1m1!1s0x8421134f5a0645e3:0xc48cf5e4f110a5b3!2m2!1d-105.517543!2d20.7717047?hl=es&entry=ttu" target="_blank">Ver ubicacion</a>
        </div>
        <div class="card">
            <img src="img/Hoteles/Bahia de banderas/suf.jpg" alt="">
            <h2 class="hotel-name">Punta Mita Surf Lodge</h2>
            4.4<i class="fa-solid fa-star" style="color: #ffd500;"></i>
            <i class="fa-solid fa-star" style="color: #ffd500;"></i>
            <i class="fa-solid fa-star" style="color: #ffd500;"></i>
            <i class="fa-solid fa-star" style="color: #ffd500;"></i>
            <i class="fa-solid fa-star-half-stroke" style="color: #ffd500;"></i>
            <h3>MXN $3074 por noche</h3>
            
            <h3 class="numero">Telefono: 322 109 9279</h3>
            <a href="https://www.google.com/maps/dir//Punta+Mita+Surf+Lodge+Bahia+de+banderas/@21.2805858,-105.9755848,9z/data=!4m8!4m7!1m0!1m5!1m1!1s0x842113e89e2c2989:0xc9c555ee291feae2!2m2!1d-105.5169526!2d20.7729712?hl=es&entry=ttu" target="_blank">Ver ubicacion</a>
        </div>
        <div class="card">
            <img src="img/Hoteles/Bahia de banderas/marival.jpg" alt="">
            <h2 class="hotel-name">Marival Armony Luxury Resort and World Spa</h2>
            4.5<i class="fa-solid fa-star" style="color: #ffd500;"></i>
            <i class="fa-solid fa-star" style="color: #ffd500;"></i>
            <i class="fa-solid fa-star" style="color: #ffd500;"></i>
            <i class="fa-solid fa-star" style="color: #ffd500;"></i>
            <i class="fa-solid fa-star-half-stroke" style="color: #ffd500;"></i>
            <h3>MXN $5969 por noche</h3>
           
            <h3 class="numero">Telefono: +1 877-222-0302</h3>
            <a href="https://www.google.com/maps/dir//Marival+Armony+Luxury+Resort+and+World+Spa+Bahia+de+banderas/@21.298538,-105.8274396,9z/data=!4m8!4m7!1m0!1m5!1m1!1s0x84216a958e37c8e7:0x2dda4f118f6c1066!2m2!1d-105.4270226!2d20.7448772?hl=es&entry=ttu" target="_blank">Ver ubicacion</a>
        </div>
    </div>
    <br><br>
    <div class="container">
        <div class="card">
            <img src="img/Hoteles/Bahia de banderas/four reason.jpg" alt="">
            <h2 class="hotel-name">Four Seasons Resort Punta Mita</h2>
            4.8<i class="fa-solid fa-star" style="color: #ffd500;"></i>
            <i class="fa-solid fa-star" style="color: #ffd500;"></i>
            <i class="fa-solid fa-star" style="color: #ffd500;"></i>
            <i class="fa-solid fa-star" style="color: #ffd500;"></i>
            <i class="fa-solid fa-star" style="color: #ffd500;"></i>
            <h3>MXN $28590 por noche</h3>
           
            <h3 class="numero">Telefono: 329 291 6000</h3>
            <a href="https://www.google.com/maps/dir//Four+Seasons+Resort+Punta+Mita+Bahia+de+banderas/@21.2805858,-105.9816496,9z/data=!4m8!4m7!1m0!1m5!1m1!1s0x8421145c10b5cd35:0x6a34d46b32dc24ae!2m2!1d-105.529223!2d20.781032?hl=es&entry=ttu" target="_blank">Ver ubicacion</a>
        </div>
        <div class="card">
            <img src="img/Hoteles/Bahia de banderas/basalto.jpg" alt="">
            <h2 class="hotel-name">Hotel Basalto</h2>
            4.8<i class="fa-solid fa-star" style="color: #ffd500;"></i>
            <i class="fa-solid fa-star" style="color: #ffd500;"></i>
            <i class="fa-solid fa-star" style="color: #ffd500;"></i>
            <i class="fa-solid fa-star" style="color: #ffd500;"></i>
            <i class="fa-solid fa-star-half-stroke" style="color: #ffd500;"></i>
            <h3>MXN $4372 por noche</h3>
            
            <h3 class="numero">Telefono: 329 298 4283</h3>
            <a href="https://www.google.com/maps/dir//Hotel+Basalto+Bahia+de+banderas/@21.2805858,-105.9702295,9z/data=!4m8!4m7!1m0!1m5!1m1!1s0x842115b23b8bf90f:0x67759a086bccb0f3!2m2!1d-105.4977448!2d20.7873438?hl=es&entry=ttu" target="_blank">Ver ubicacion</a>
        </div>
        <div class="card">
            <img src="img/Hoteles/Bahia de banderas/onda surf.jpg" alt="">
            <h2 class="hotel-name">ONDA Surf Hotel</h2>
            4.7<i class="fa-solid fa-star" style="color: #ffd500;"></i>
            <i class="fa-solid fa-star" style="color: #ffd500;"></i>
            <i class="fa-solid fa-star" style="color: #ffd500;"></i>
            <i class="fa-solid fa-star" style="color: #ffd500;"></i>
            <i class="fa-solid fa-star-half-stroke" style="color: #ffd500;"></i>
            <h3>MXN $833 por noche</h3>
           
            <h3 class="numero">Telefono: 322 278 7796</h3>
            <a href="https://www.google.com/maps/dir//ONDA+Surf+Hotel+Bahia+de+banderas/@21.2805858,-105.9751851,9z/data=!4m8!4m7!1m0!1m5!1m1!1s0x8421139f9b3b841b:0xb590e2074d0ad035!2m2!1d-105.515969!2d20.7742682?hl=es&entry=ttu" target="_blank">Ver ubicacion</a>
        </div>
    </div>
    <br><br>
    <div class="container">
        <div class="card">
            <img src="img/Hoteles/Bahia de banderas/suites y hostal.jpg" alt="">
            <h2 class="hotel-name">Punto Mita Suites & Hostal</h2>
            4.7<i class="fa-solid fa-star" style="color: #ffd500;"></i>
            <i class="fa-solid fa-star" style="color: #ffd500;"></i>
            <i class="fa-solid fa-star" style="color: #ffd500;"></i>
            <i class="fa-solid fa-star" style="color: #ffd500;"></i>
            <i class="fa-solid fa-star" style="color: #ffd500;"></i>
            <h3>MXN $834 por noche</h3>
           
            <h3 class="numero">Telefono: 329 291 6558</h3>
            <a href="https://www.google.com/maps/dir//Punto+Mita+Suites+%26+Hostal+Bahia+de+banderas/@21.2805858,-105.9748212,9z/data=!4m8!4m7!1m0!1m5!1m1!1s0x8421134517a60a89:0xcbf0c00aba2bf02c!2m2!1d-105.5139307!2d20.7742377?hl=es&entry=ttu" target="_blank">Ver ubicacion</a>
        </div>
        <div class="card">
            <img src="img/Hoteles/Bahia de banderas/akai.jpg" alt="">
            <h2 class="hotel-name">Casa Akai</h2>
            4.4<i class="fa-solid fa-star" style="color: #ffd500;"></i>
            <i class="fa-solid fa-star" style="color: #ffd500;"></i>
            <i class="fa-solid fa-star" style="color: #ffd500;"></i>
            <i class="fa-solid fa-star" style="color: #ffd500;"></i>
            <i class="fa-solid fa-star" style="color: #ffd500;"></i>
            <h3>MXN $1515 por noche</h3>
            
            <h3 class="numero">Telefono: 322 135 9920</h3>
            <a href="https://www.google.com/maps/dir//Casa+Akai+Bahia+de+banderas/@21.2805858,-105.9844998,9z/data=!4m8!4m7!1m0!1m5!1m1!1s0x84216d5363af58a3:0xacc87d05193ccdd8!2m2!1d-105.5332288!2d20.7578758?hl=es&entry=ttu" target="_blank">Ver ubicacion</a>
        </div>
        <div class="card">
            <img src="img/Hoteles/Bahia de banderas/oceana.jpg" alt="">
            <h2 class="hotel-name">Hotel Vista Oceana</h2>
            4.0<i class="fa-solid fa-star" style="color: #ffd500;"></i>
            <i class="fa-solid fa-star" style="color: #ffd500;"></i>
            <i class="fa-solid fa-star" style="color: #ffd500;"></i>
            <i class="fa-solid fa-star" style="color: #ffd500;"></i>
            <i class="fa-regular fa-star" style="color: #ffd500;"></i>
            <h3>MXN $1302 por noche</h3>
            <h3 class="numero">Telefono: 322 980 0923</h3>
            <a href="https://www.google.com/maps/dir//Hotel+Vista+Oceana+Bahia+de+banderas/@21.3366179,-105.9377682,9z/data=!4m8!4m7!1m0!1m5!1m1!1s0x84211670724c5933:0x9b72173d39278fc1!2m2!1d-105.4413966!2d20.8700444?hl=es&entry=ttu" target="_blank">Ver ubicacion</a>
        </div>
    </div>
    <br><br>
    <div class="container">
        <div class="card">
            <img src="img/Hoteles/Bahia de banderas/sayulita.jpg" alt="">
            <h2 class="hotel-name">Selina Sayulita</h2>
            4.7<i class="fa-solid fa-star" style="color: #ffd500;"></i>
            <i class="fa-solid fa-star" style="color: #ffd500;"></i>
            <i class="fa-solid fa-star" style="color: #ffd500;"></i>
            <i class="fa-solid fa-star" style="color: #ffd500;"></i>
            <i class="fa-solid fa-star-half-stroke" style="color: #ffd500;"></i>
            <h3>MXN $951 por noche</h3>
           
            <h3 class="numero">Telefono: 322 199 4605</h3>
            <a href="https://www.google.com/maps/dir//Selina+Sayulita+Bahia+de+banderas/@21.3366179,-105.9370958,9z/data=!4m8!4m7!1m0!1m5!1m1!1s0x84211729e37f081d:0x9a3599613fceb47e!2m2!1d-105.440067!2d20.8698095?hl=es&entry=ttu" target="_blank">Ver ubicacion</a>
        </div>
        <div class="card">
            <img src="img/Hoteles/Bahia de banderas/pia.jpg" alt="">
            <h2 class="hotel-name">Casa Pia</h2>
            4.5<i class="fa-solid fa-star" style="color: #ffd500;"></i>
            <i class="fa-solid fa-star" style="color: #ffd500;"></i>
            <i class="fa-solid fa-star" style="color: #ffd500;"></i>
            <i class="fa-solid fa-star" style="color: #ffd500;"></i>
            <i class="fa-regular fa-star" style="color: #ffd500;"></i>
            <h3>MXN $1104 por noche</h3>
            <h3 class="numero">Telefono: 329 298 8881</h3>
            <a href="https://www.google.com/maps/dir//Casa+Pia+Bahia+de+banderas/@21.3366179,-105.9361951,9z/data=!4m8!4m7!1m0!1m5!1m1!1s0x8421167109c6c371:0xa8aa977242b16243!2m2!1d-105.4380687!2d20.8690092?hl=es&entry=ttu" target="_blank">Ver ubicacion</a>
        </div>
        <div class="card">
            <img src="img/Hoteles/Bahia de banderas/sayulita cenntrarl.jpg" alt="">
            <h2 class="hotel-name">Hotel Sayulita Central</h2>
            4.3<i class="fa-solid fa-star" style="color: #ffd500;"></i>
            <i class="fa-solid fa-star" style="color: #ffd500;"></i>
            <i class="fa-solid fa-star" style="color: #ffd500;"></i>
            <i class="fa-solid fa-star" style="color: #ffd500;"></i>
            <i class="fa-solid fa-star-half-stroke" style="color: #ffd500;"></i>
            <h3>MXN $1104 por noche</h3>
            <h3 class="numero">Telefono: 329 291 3845</h3>
            <a href="https://www.google.com/maps/dir//Hotel+Sayulita+Central+Bahia+de+banderas/@21.3366179,-105.9375233,9z/data=!4m8!4m7!1m0!1m5!1m1!1s0x842116706d1bd2a3:0xd07276ea33e82777!2m2!1d-105.4409483!2d20.8695882?hl=es&entry=ttu" target="_blank">Ver ubicacion</a>
        </div>
        </div>
</span>
<br>
<br>
<!--boton para mostrar mas-->
<center><button class="read-more-btn">Ver Mas/Menos</button></center>
<br><br><br>

<!--Compostela-->
<div data-aos="fade-up" data-aos-duration="1500">
    <h1 class="title">Hoteles de Compostela</h1>
</div>
    <div data-aos="fade-up" data-aos-duration="1500">
<div class="container">
    <div class="card">
        <img src="img/Hoteles/Compostela/el nayar.jpg" alt="">
        <h2 class="hotel-name">Hotel Nayar</h2>
        3.5<i class="fa-solid fa-star" style="color: #ffd500;"></i>
        <i class="fa-solid fa-star" style="color: #ffd500;"></i>
        <i class="fa-solid fa-star" style="color: #ffd500;"></i>
        <i class="fa-solid fa-star-half-stroke" style="color: #ffd500;"></i>
        <i class="fa-regular fa-star" style="color: #ffd500;"></i>
        <h3>MXN $633 por noche</h3>
       
        <h3 class="numero">Telefono: 327 277 4131</h3>
        <a href="https://www.google.com/maps/dir/21.8131863,-105.204327/Hotel+Nayar+compostela+nayarit/@21.545163,-105.3781047,10z/data=!3m1!4b1!4m9!4m8!1m1!4e1!1m5!1m1!1s0x842728ffe1681ac7:0xa7859c77bd7764a0!2m2!1d-104.8996378!2d21.2356458?hl=es&entry=ttu" target="_blank">Ver ubicacion</a>
    </div>
    <div class="card">
        <img src="img/Hoteles/Compostela/awake.jpg" alt="">
        <h2 class="hotel-name">Hotel Akawe</h2>
        4.8<i class="fa-solid fa-star" style="color: #ffd500;"></i>
        <i class="fa-solid fa-star" style="color: #ffd500;"></i>
        <i class="fa-solid fa-star" style="color: #ffd500;"></i>
        <i class="fa-solid fa-star" style="color: #ffd500;"></i>
        <i class="fa-solid fa-star" style="color: #ffd500;"></i>
        <h3>MXN $1394 por noche</h3>
        
        <h3 class="numero">Telefono: 327 121 7099</h3>
        <a href="google.com/maps/dir/21.8131863,-105.204327/Hotel+Akawe+compostela+nayarit/@21.540884,-105.3781047,10z/data=!3m1!4b1!4m9!4m8!1m1!4e1!1m5!1m1!1s0x842729b8345900bf:0xa4bf312615e5d6bf!2m2!1d-104.9011966!2d21.2300417?hl=es&entry=ttu" target="_blank">Ver ubicacion</a>
    </div>
    <div class="card">
        <img src="img/Hoteles/Compostela/jardin de las estrellas.jpg" alt="">
        <h2 class="hotel-name">Hotel jardin de estrellas</h2>
        4.7<i class="fa-solid fa-star" style="color: #ffd500;"></i>
        <i class="fa-solid fa-star" style="color: #ffd500;"></i>
        <i class="fa-solid fa-star" style="color: #ffd500;"></i>
        <i class="fa-solid fa-star" style="color: #ffd500;"></i>
        <i class="fa-solid fa-star-half-stroke" style="color: #ffd500;"></i>
        <h3>MXN $ por noche</h3>
       
        <h3 class="numero">Telefono: 327 688 1819</h3>
        <a href="https://www.google.com/maps/dir//Hotel+jardin+de+estrellas+compostela+nayarit/@21.5455058,-105.3781047,10z/data=!4m8!4m7!1m0!1m5!1m1!1s0x8427293e301928ed:0x3e158332ae6e8f20!2m2!1d-104.9158296!2d21.2364336?hl=es&entry=ttu" target="_blank">Ver ubicacion</a>
    </div>
</div>
</div>

<!---->
<br>
<br>
<!--resto de tarjetas-->
<!--lo que se mostrara debe ir dentro de span-->
<span class="hideText">
<div class="container">
<div class="card">
    <img src="img/Hoteles/Acaponeta/sanluis.jpg" alt="">
    <h2 class="hotel-name">Hotel Asturias</h2>
    4.3<i class="fa-solid fa-star" style="color: #ffd500;"></i>
    <i class="fa-solid fa-star" style="color: #ffd500;"></i>
    <i class="fa-solid fa-star" style="color: #ffd500;"></i>
    <i class="fa-solid fa-star" style="color: #ffd500;"></i>
    <i class="fa-solid fa-star-half-stroke" style="color: #ffd500;"></i>
    <h3>MXN $ por noche</h3>
   
    <h3 class="numero">Telefono: 325 252 0163</h3>
    <a href="#" target="_blank">Ver ubicacion</a>
</div>
<div class="card">
    <img src="img/Hoteles/Compostela/hocaro.jpg" alt="">
    <h2 class="hotel-name">Hotel Hocaro y Alojamiento</h2>
    3.5<i class="fa-solid fa-star" style="color: #ffd500;"></i>
    <i class="fa-solid fa-star" style="color: #ffd500;"></i>
    <i class="fa-solid fa-star" style="color: #ffd500;"></i>
    <i class="fa-solid fa-star-half-stroke" style="color: #ffd500;"></i>
    <i class="fa-regular fa-star" style="color: #ffd500;"></i>
    <h3 class="numero">Telefono: 327 103 6625</h3>
    <a href="https://www.google.com/maps/dir//Hotel+Hocaro+y+Alojamiento+compostela/@21.8630463,-105.8158844,9z/data=!4m8!4m7!1m0!1m5!1m1!1s0x84272916d5ca9a9b:0x5a7df81783b2b6f4!2m2!1d-104.8997833!2d21.2348654?entry=ttu" target="_blank">Ver ubicacion</a>
</div>
</div>
</span>
<br>
<br>
<!--boton para mostrar mas-->
<center><button class="read-more-btn">Ver Mas/Menos</button></center>
<br><br><br>


<!--Ixtlán del Río-->
<div data-aos="fade-up" data-aos-duration="1500">
    <h1 class="title">Hoteles de 	Ixtlán del Río</h1>
</div>
    <div data-aos="fade-up" data-aos-duration="1500">
<div class="container">
    <div class="card">
        <img src="img/Hoteles/Ixtlan del Rio/maya.png" alt="">
        <h2 class="hotel-name">Hotel Maya</h2>
        3.6<i class="fa-solid fa-star" style="color: #ffd500;"></i>
        <i class="fa-solid fa-star" style="color: #ffd500;"></i>
        <i class="fa-solid fa-star" style="color: #ffd500;"></i>
        <i class="fa-solid fa-star-half-stroke" style="color: #ffd500;"></i>
        <i class="fa-regular fa-star" style="color: #ffd500;"></i>
        <h3>MXN $556 por noche</h3>
       
        <h3 class="numero">Telefono: 324 100 1434</h3>
        <a href="https://www.google.com/maps/dir//hotel+maya+ixtlan+del+rio/@21.7634358,-105.553186,9z/data=!4m8!4m7!1m0!1m5!1m1!1s0x8426f745704f5f43:0x5d37259a5f3152b3!2m2!1d-104.3709163!2d21.0354214?entry=ttu" target="_blank">Ver ubicacion</a>
    </div>
    <div class="card">
        <img src="img/Hoteles/Ixtlan del Rio/obsidian rio.jpg" alt="">
        <h2 class="hotel-name">OBSIDIANA RIO</h2>
        4.5<i class="fa-solid fa-star" style="color: #ffd500;"></i>
        <i class="fa-solid fa-star" style="color: #ffd500;"></i>
        <i class="fa-solid fa-star" style="color: #ffd500;"></i>
        <i class="fa-solid fa-star" style="color: #ffd500;"></i>
        <i class="fa-solid fa-star-half-stroke" style="color: #ffd500;"></i>
        
        <h3 class="numero">Telefono: 324 116 7000</h3>
        <a href="#" target="_blank">Ver ubicacion</a>
    </div>
    <div class="card">
        <img src="img/Hoteles/Ixtlan del Rio/marques.jpg" alt="">
        <h2 class="hotel-name">Hotel Boutique El Marqués de Minas</h2>
        4.5<i class="fa-solid fa-star" style="color: #ffd500;"></i>
        <i class="fa-solid fa-star" style="color: #ffd500;"></i>
        <i class="fa-solid fa-star" style="color: #ffd500;"></i>
        <i class="fa-solid fa-star" style="color: #ffd500;"></i>
        <i class="fa-solid fa-star-half-stroke" style="color: #ffd500;"></i>
        <h3 class="numero">Telefono: 324 243 2159</h3>
        <a href="https://www.google.com/maps/dir//Hotel+Boutique+El+Marqu%C3%A9s+de+Minas+ixtlan+del+rio/@21.7648058,-105.553186,9z/data=!4m8!4m7!1m0!1m5!1m1!1s0x8426f7453f1b1e0f:0xaf865ad92ab437b6!2m2!1d-104.3658627!2d21.0357016?entry=ttu" target="_blank">Ver ubicacion</a>
    </div>
</div>
</div>

<!---->
<br>
<br>
<!--resto de tarjetas-->
<!--lo que se mostrara debe ir dentro de span-->
<span class="hideText">
<div class="container">
<div class="card">
    <img src="img/Hoteles/Ixtlan del Rio/hidalgo.jpg" alt="">
    <h2 class="hotel-name">Hotel Plaza Hidalgo</h2>
    4.3<i class="fa-solid fa-star" style="color: #ffd500;"></i>
    <i class="fa-solid fa-star" style="color: #ffd500;"></i>
    <i class="fa-solid fa-star" style="color: #ffd500;"></i>
    <i class="fa-solid fa-star" style="color: #ffd500;"></i>
    <i class="fa-solid fa-star-half-stroke" style="color: #ffd500;"></i>
    <h3 class="numero">Telefono: 324 243 2100</h3>
    <a href="https://www.google.com/maps/dir//Hotel+Plaza+Hidalgo+ixtlan+del+rio/@21.7634358,-105.553186,9z/data=!4m8!4m7!1m0!1m5!1m1!1s0x842737167c0dfecd:0x53cf36941adaf772!2m2!1d-104.3705945!2d21.0353931?entry=ttu" target="_blank">Ver ubicacion</a>
</div>
</div>
</span>
<br>
<br>
<!--boton para mostrar mas-->
<center><button class="read-more-btn">Ver Mas/Menos</button></center>
<br><br><br>

<!--Jala-->
<div data-aos="fade-up" data-aos-duration="1500">
    <h1 class="title">Hoteles de Jala</h1>
</div>
    <div data-aos="fade-up" data-aos-duration="1500">
<div class="container">
    <div class="card">
        <img src="img/Hoteles/Jala/nukari.jpg" alt="">
        <h2 class="hotel-name">Nukari Quinta Boutique</h2>
        4.5<i class="fa-solid fa-star" style="color: #ffd500;"></i>
        <i class="fa-solid fa-star" style="color: #ffd500;"></i>
        <i class="fa-solid fa-star" style="color: #ffd500;"></i>
        <i class="fa-solid fa-star" style="color: #ffd500;"></i>
        <i class="fa-solid fa-star-half-stroke" style="color: #ffd500;"></i>
        <h3>MXN $2905 por noche</h3>
       
        <h3 class="numero">Telefono: 311 980 0641</h3>
        <a href="https://www.google.com/maps/dir//Nukari+Quinta+Boutique+ixtlan+del+rio/@21.7903175,-105.5879016,9z/data=!4m8!4m7!1m0!1m5!1m1!1s0x8426fb83a31d9fbf:0x1f1546ddc932f419!2m2!1d-104.4361291!2d21.1050422?entry=ttu" target="_blank">Ver ubicacion</a>
    </div>
    <div class="card">
        <img src="img/Hoteles/Jala/casa corita.jpg" alt="">
        <h2 class="hotel-name">"CASA CORITA"</h2>
        4.6<i class="fa-solid fa-star" style="color: #ffd500;"></i>
        <i class="fa-solid fa-star" style="color: #ffd500;"></i>
        <i class="fa-solid fa-star" style="color: #ffd500;"></i>
        <i class="fa-solid fa-star" style="color: #ffd500;"></i>
        <i class="fa-solid fa-star-half-stroke" style="color: #ffd500;"></i>
    
        <h3 class="numero">Telefono: 324 276 1687</h3>
        <a href="https://www.google.com/maps/dir//%22CASA+CORITA%22,+Guerrero+73,+Centro,+63880+Jala,+Nay./@21.7903175,-105.5879016,9z/data=!4m8!4m7!1m0!1m5!1m1!1s0x8426fb11b1677411:0xb43ac45a30fd774f!2m2!1d-104.4393249!2d21.1039078?entry=ttu" target="_blank">Ver ubicacion</a>
    </div>
    <div class="card">
        <img src="img/Hoteles/Jala/tia maria.jpg" alt="">
        <h2 class="hotel-name">Hostal Casa Tia María</h2>
        4.3<i class="fa-solid fa-star" style="color: #ffd500;"></i>
        <i class="fa-solid fa-star" style="color: #ffd500;"></i>
        <i class="fa-solid fa-star" style="color: #ffd500;"></i>
        <i class="fa-solid fa-star" style="color: #ffd500;"></i>
        <i class="fa-solid fa-star-half-stroke" style="color: #ffd500;"></i>

        <h3 class="numero">Telefono: 311 267 6983</h3>
        <a href="https://www.google.com/maps/dir//Hostal+Casa+Tia+Mar%C3%ADa+ixtlan+del+rio/@21.7903175,-105.5879016,9z/data=!4m8!4m7!1m0!1m5!1m1!1s0x8426fb11bceed6b3:0x5136e9c870979739!2m2!1d-104.43948!2d21.1047266?hl=es&entry=ttu" target="_blank">Ver ubicacion</a>
    </div>
</div>
</div>
<br><br><br>

<!--La yesca-->
<div data-aos="fade-up" data-aos-duration="1500">
    <h1 class="title">Hotel de L Yesca</h1>
</div>
    <div data-aos="fade-up" data-aos-duration="1500">
<div class="container">
    <div class="card">
        <img src="img/Hoteles/La Yesca/la plasita.jpg" alt="">
        <h2 class="hotel-name">HOTEL La Placita</h2>
        4.3<i class="fa-solid fa-star" style="color: #ffd500;"></i>
        <i class="fa-solid fa-star" style="color: #ffd500;"></i>
        <i class="fa-solid fa-star" style="color: #ffd500;"></i>
        <i class="fa-solid fa-star" style="color: #ffd500;"></i>
        <i class="fa-solid fa-star-half-stroke" style="color: #ffd500;"></i>
        <a href="https://www.google.com/maps/dir//HOTEL+La+Placita+la+yesca+nayarit/@21.7350819,-106.035924,8z/data=!4m8!4m7!1m0!1m5!1m1!1s0x8427b3b19575ccb3:0x9491d9d95a88282!2m2!1d-104.0096132!2d21.3191834?hl=es&entry=ttu" target="_blank">Ver ubicacion</a>
    </div>
</div>
</div>
<br><br><br>

<!--Rosamorada-->
<div data-aos="fade-up" data-aos-duration="1500">
    <h1 class="title">Hotel de Rosamorada</h1>
</div>
    <div data-aos="fade-up" data-aos-duration="1500">
<div class="container">
    <div class="card">
        <img src="img/Hoteles/Acaponeta/gardena.jpg" alt="">
        <h2 class="hotel-name">HOTEL CATALINA </h2>
        3.7<i class="fa-solid fa-star" style="color: #ffd500;"></i>
        <i class="fa-solid fa-star" style="color: #ffd500;"></i>
        <i class="fa-solid fa-star" style="color: #ffd500;"></i>
        <i class="fa-solid fa-star-half-stroke" style="color: #ffd500;"></i>
        <i class="fa-regular fa-star" style="color: #ffd500;"></i>
        <h3 class="numero">Telefono: 323 239 3024</h3>
        <a href="https://www.google.com/maps/dir//HOTEL+CATALINA+rosamorada+nayarit/@22.2900287,-105.484446,11z/data=!4m8!4m7!1m0!1m5!1m1!1s0x869e0f8b28ac784f:0x95738cebcaad1395!2m2!1d-105.2145309!2d22.1188678?hl=es&entry=ttu" target="_blank">Ver ubicacion</a>
    </div>
   
</div>
</div>

<br><br><br>

<!--Ruíz-->
<div data-aos="fade-up" data-aos-duration="1500">
    <h1 class="title">Hoteles de Ruíz</h1>
</div>
    <div data-aos="fade-up" data-aos-duration="1500">
<div class="container">
    <div class="card">
        <img src="img/Hoteles/Ruiz/ruesga" alt="">
        <h2 class="hotel-name">Hotel Casa Monte Ruesga</h2>
        4.4<i class="fa-solid fa-star" style="color: #ffd500;"></i>
        <i class="fa-solid fa-star" style="color: #ffd500;"></i>
        <i class="fa-solid fa-star" style="color: #ffd500;"></i>
        <i class="fa-solid fa-star" style="color: #ffd500;"></i>
        <i class="fa-solid fa-star-half-stroke" style="color: #ffd500;"></i>

        <h3 class="numero">Telefono: 319 233 2939</h3>
        <a href="https://www.google.com/maps/dir//Hotel+Casa+Monte+Ruesga+ruiz+nayarit/@22.2137589,-105.6014224,10z/data=!4m8!4m7!1m0!1m5!1m1!1s0x869e0248bb3760e5:0x66b0321dc6d5bee5!2m2!1d-105.1557141!2d21.9433698?hl=es&entry=ttu" target="_blank">Ver ubicacion</a>
    </div>
    <div class="card">
        <img src="img/Hoteles/Ruiz/river.jpg" alt="">
        <h2 class="hotel-name">Hotel Tenamache River</h2>
        4.7<i class="fa-solid fa-star" style="color: #ffd500;"></i>
        <i class="fa-solid fa-star" style="color: #ffd500;"></i>
        <i class="fa-solid fa-star" style="color: #ffd500;"></i>
        <i class="fa-solid fa-star" style="color: #ffd500;"></i>
        <i class="fa-solid fa-star-half-stroke" style="color: #ffd500;"></i>
        <h3>MXN $700 por noche</h3>
        <h3 class="numero">Telefono: 319 233 2478</h3>
        <a href="https://www.google.com/maps/dir//Hotel+Tenamache+River+ruiz+nayarit/@22.2137589,-105.6014224,10z/data=!4m8!4m7!1m0!1m5!1m1!1s0x869e03446b30621f:0x55bd4ff07eb05897!2m2!1d-105.1441371!2d21.9515225?hl=es&entry=ttu" target="_blank">Ver ubicacion</a>
    </div>

</div>
</div>
<br><br><br>

<!--	San Blas-->
<div data-aos="fade-up" data-aos-duration="1500">
    <h1 class="title">Hoteles de San Blas</h1>
</div>
    <div data-aos="fade-up" data-aos-duration="1500">
<div class="container">
    <div class="card">
        <img src="img/Hoteles/San Blas/fortu.jpg" alt="">
        <h2 class="hotel-name">La casa de Fortu, Hotel & Bungalows</h2>
        4.5<i class="fa-solid fa-star" style="color: #ffd500;"></i>
        <i class="fa-solid fa-star" style="color: #ffd500;"></i>
        <i class="fa-solid fa-star" style="color: #ffd500;"></i>
        <i class="fa-solid fa-star" style="color: #ffd500;"></i>
        <i class="fa-solid fa-star-half-stroke" style="color: #ffd500;"></i>
        <h3>MXN $1044 por noche</h3>
       
        <h3 class="numero">Telefono: 323 102 5215</h3>
        <a href="https://www.google.com/maps/dir//La+casa+de+Fortu,+Hotel+%26+Bungalows+sanblas+nayarit/@22.0179404,-105.8971485,9z/data=!4m8!4m7!1m0!1m5!1m1!1s0x8420b895b4e8a05f:0xfec4ce8f38514531!2m2!1d-105.2868132!2d21.5437333?hl=es&entry=ttu" target="_blank">Ver ubicacion</a>
    </div>
    <div class="card">
        <img src="img/Hoteles/San Blas/Baos.jpg" alt="">
        <h2 class="hotel-name">Baos Hotel & Restaurant</h2>
        4.0<i class="fa-solid fa-star" style="color: #ffd500;"></i>
        <i class="fa-solid fa-star" style="color: #ffd500;"></i>
        <i class="fa-solid fa-star" style="color: #ffd500;"></i>
        <i class="fa-solid fa-star" style="color: #ffd500;"></i>
        <i class="fa-regular fa-star" style="color: #ffd500;"></i>
        <h3>MXN $1526 por noche</h3>
        
        <h3 class="numero">Telefono: 311 111 6069</h3>
        <a href="https://www.google.com/maps/dir//Baos+Hotel+%26+Restaurant+san+blas+nayarit/@22.0101096,-105.8971485,9z/data=!4m8!4m7!1m0!1m5!1m1!1s0x8420c76e19f10b2b:0x6a68294e8e2b5bba!2m2!1d-105.2290799!2d21.5263314?hl=es&entry=ttu" target="_blank">Ver ubicacion</a>
    </div>
    <div class="card">
        <img src="img/Hoteles/San Blas/marina.jpg" alt="">
        <h2 class="hotel-name">Hotel Marina San Blas</h2>
        4.0<i class="fa-solid fa-star" style="color: #ffd500;"></i>
        <i class="fa-solid fa-star" style="color: #ffd500;"></i>
        <i class="fa-solid fa-star" style="color: #ffd500;"></i>
        <i class="fa-solid fa-star" style="color: #ffd500;"></i>
        <i class="fa-regular fa-star" style="color: #ffd500;"></i>
        <h3>MXN $1067 por noche</h3>
       
        <h3 class="numero">Telefono: 323 285 1437</h3>
        <a href="https://www.google.com/maps/dir//Hotel+Marina+San+Blas+san+blas+nayarit/@22.0149491,-105.8971485,9z/data=!4m8!4m7!1m0!1m5!1m1!1s0x8420a54a14cdbf0d:0x42207cbe9d2886f!2m2!1d-105.287392!2d21.5359933?hl=es&entry=ttu" target="_blank">Ver ubicacion</a>
    </div>
</div>
</div>

<!---->
<br>
<br>
<!--resto de tarjetas-->
<!--lo que se mostrara debe ir dentro de span-->
<span class="hideText">
<div class="container">
<div class="card">
    <img src="img/Hoteles/San Blas/posada del rey.jpg" alt="">
    <h2 class="hotel-name">Hotel Posada del Rey</h2>
    4.3<i class="fa-solid fa-star" style="color: #ffd500;"></i>
    <i class="fa-solid fa-star" style="color: #ffd500;"></i>
    <i class="fa-solid fa-star" style="color: #ffd500;"></i>
    <i class="fa-solid fa-star" style="color: #ffd500;"></i>
    <i class="fa-solid fa-star-half-stroke" style="color: #ffd500;"></i>
    <h3>MXN $829 por noche</h3>
   
    <h3 class="numero">Telefono: 323 285 0123</h3>
    <a href="https://www.google.com/maps/dir//Hotel+Posada+del+Rey+san+blas+nayarit/@22.0152715,-105.8971485,9z/data=!4m8!4m7!1m0!1m5!1m1!1s0x8420b89796276ce1:0x60bb5909c9bb9029!2m2!1d-105.2876261!2d21.5375904?hl=es&entry=ttu" target="_blank">Ver ubicacion</a>
</div>
<div class="card">
    <img src="img/Hoteles/Acaponeta/casablanca.png" alt="">
    <h2 class="hotel-name">Hotel Casa Mañana</h2>
    4.3<i class="fa-solid fa-star" style="color: #ffd500;"></i>
    <i class="fa-solid fa-star" style="color: #ffd500;"></i>
    <i class="fa-solid fa-star" style="color: #ffd500;"></i>
    <i class="fa-solid fa-star" style="color: #ffd500;"></i>
    <i class="fa-regular fa-star" style="color: #ffd500;"></i>
    <h3 class="numero">Telefono: 323 254 9080</h3>
    <a href="https://www.google.com/maps/dir//Hotel+Casa+Ma%C3%B1ana+san+blas+nayarit/@21.9775598,-105.8585401,9z/data=!4m8!4m7!1m0!1m5!1m1!1s0x8420c8c3ae081c85:0xc6794985ea6b5b1c!2m2!1d-105.1875892!2d21.4612287?hl=es&entry=ttu" target="_blank">Ver ubicacion</a>
</div>
<div class="card">
    <img src="img/Hoteles/San Blas/cocadas.jpg" alt="">
    <h2 class="hotel-name">Casa De Las Cocadas</h2>
    4.4<i class="fa-solid fa-star" style="color: #ffd500;"></i>
    <i class="fa-solid fa-star" style="color: #ffd500;"></i>
    <i class="fa-solid fa-star" style="color: #ffd500;"></i>
    <i class="fa-solid fa-star" style="color: #ffd500;"></i>
    <i class="fa-regular fa-star" style="color: #ffd500;"></i>
    <h3 class="numero">Telefono: 323 285 0960</h3>
    <a href="https://www.google.com/maps/dir//Casa+De+Las+Cocadas+san+blas+nayarit/@22.0166233,-105.8971485,9z/data=!4m8!4m7!1m0!1m5!1m1!1s0x8420b8bd84db2ba3:0xaae67a2ac73be06b!2m2!1d-105.2903833!2d21.5393671?hl=es&entry=ttu" target="_blank">Ver ubicacion</a>
</div>
</div>
<br><br>
<div class="container">
    <div class="card">
        <img src="img/Hoteles/San Blas/quinta sierra.jpg" alt="">
        <h2 class="hotel-name">Hotel 'Quinta Sierra'</h2>
        3.5<i class="fa-solid fa-star" style="color: #ffd500;"></i>
        <i class="fa-solid fa-star" style="color: #ffd500;"></i>
        <i class="fa-solid fa-star" style="color: #ffd500;"></i>
        <i class="fa-solid fa-star-half-stroke" style="color: #ffd500;"></i>
        <i class="fa-regular fa-star" style="color: #ffd500;"></i>
        <h3>MXN $680 por noche</h3>
       
        <h3 class="numero">Telefono: 323 110 2878</h3>
        <a href="https://www.google.com/maps/dir//Hotel+'+Quinta+Sierra'+san+blas+nayarit/@22.0180638,-105.8971485,9z/data=!4m8!4m7!1m0!1m5!1m1!1s0x8420b8917d54599d:0xd90ca220fc5632be!2m2!1d-105.2816616!2d21.542604?hl=es&entry=ttu" target="_blank">Ver ubicacion</a>
    </div>
    <div class="card">
        <img src="img/Hoteles/San Blas/chaco.jpg" alt="">
        <h2 class="hotel-name">Hotel y Camping El Chaco</h2>
        4.1<i class="fa-solid fa-star" style="color: #ffd500;"></i>
        <i class="fa-solid fa-star" style="color: #ffd500;"></i>
        <i class="fa-solid fa-star" style="color: #ffd500;"></i>
        <i class="fa-solid fa-star" style="color: #ffd500;"></i>
        <i class="fa-regular fa-star" style="color: #ffd500;"></i>
        <h3 class="numero">Telefono: 323 231 2229</h3>
        <a href="https://www.google.com/maps/dir//Hotel+y+Camping+El+Chaco+san+blas+nayarit/@21.9939288,-105.85854,9z/data=!4m8!4m7!1m0!1m5!1m1!1s0x8420c867144d88b7:0x1af661d64385645d!2m2!1d-105.1979936!2d21.4940275?hl=es&entry=ttu" target="_blank">Ver ubicacion</a>
    </div>
</div>
</span>
<br>
<br>
<!--boton para mostrar mas-->
<center><button class="read-more-btn">Ver Mas/Menos</button></center>
<br><br><br>

<!--	San Pedro Lagunillas-->
<div data-aos="fade-up" data-aos-duration="1500">
    <h1 class="title">Hoteles de San Pedro Lagunillas</h1>
</div>
    <div data-aos="fade-up" data-aos-duration="1500">
<div class="container">
    <div class="card">
        <img src="img/Hoteles/San Pedro Lagunillas/lpepes.jpg" alt="">
        <h2 class="hotel-name">Posada Lepe´s</h2>
        4.2<i class="fa-solid fa-star" style="color: #ffd500;"></i>
        <i class="fa-solid fa-star" style="color: #ffd500;"></i>
        <i class="fa-solid fa-star" style="color: #ffd500;"></i>
        <i class="fa-solid fa-star" style="color: #ffd500;"></i>
        <i class="fa-regular fa-star" style="color: #ffd500;"></i>
        <h3 class="numero">Telefono: 311 124 6571</h3>
        <a href="https://www.google.com/maps/dir//Posada+Lepe%C2%B4s+san+pedro+lagunillas+nayarit/@21.8391128,-105.6922029,9z/data=!4m8!4m7!1m0!1m5!1m1!1s0x842720b51e0d7955:0x410ab92dc7b6769d!2m2!1d-104.7527108!2d21.2132735?hl=es&entry=ttu" target="_blank">Ver ubicacion</a>
    </div>
    <div class="card">
        <img src="img/Hoteles/San Pedro Lagunillas/del rio.jpg" alt="">
        <h2 class="hotel-name">Hotel del Río</h2>
        4.3<i class="fa-solid fa-star" style="color: #ffd500;"></i>
        <i class="fa-solid fa-star" style="color: #ffd500;"></i>
        <i class="fa-solid fa-star" style="color: #ffd500;"></i>
        <i class="fa-solid fa-star" style="color: #ffd500;"></i>
        <i class="fa-solid fa-star-half-stroke" style="color: #ffd500;"></i>

        <h3 class="numero">Telefono: 327 258 5289</h3>
        <a href="https://www.google.com/maps/dir//Hotel+del+R%C3%ADo+san+pedro+lagunillas+nayarit/@21.8391128,-105.6922029,9z/data=!4m8!4m7!1m0!1m5!1m1!1s0x84272752031aca23:0x59f3c7840d022d2f!2m2!1d-104.756942!2d21.2123501?hl=es&entry=ttu" target="_blank">Ver ubicacion</a>
    </div>
    <div class="card">
        <img src="img/Hoteles/San Pedro Lagunillas/verde encanto.jpg" alt="">
        <h2 class="hotel-name">Verde Encanto</h2>
        4.0<i class="fa-solid fa-star" style="color: #ffd500;"></i>
        <i class="fa-solid fa-star" style="color: #ffd500;"></i>
        <i class="fa-solid fa-star" style="color: #ffd500;"></i>
        <i class="fa-solid fa-star" style="color: #ffd500;"></i>
        <i class="fa-regular fa-star" style="color: #ffd500;"></i>

        <h3 class="numero">Telefono: 311 184 0836</h3>
        <a href="https://www.google.com/maps/dir//Verde+Encanto+san+pedro+lagunillas+nayarit/@21.8391128,-105.6922029,9z/data=!4m8!4m7!1m0!1m5!1m1!1s0x84272190fe3b744f:0x17eebbd25f4b5d34!2m2!1d-104.7516053!2d21.2201643?hl=es&entry=ttu" target="_blank">Ver ubicacion</a>
    </div>
</div>
</div>
<br><br><br>

<!--Santa María del Oro-->

<div data-aos="fade-up" data-aos-duration="1500">
    <h1 class="title">Hoteles de Santa María del Oro</h1>
</div>
    <div data-aos="fade-up" data-aos-duration="1500">
<div class="container">
    <div class="card">
        <img src="img/Hoteles/Santa Maria del Oro/casa.jpg" alt="">
        <h2 class="hotel-name">Hospedaje Casa Santa María</h2>
        4.9<i class="fa-solid fa-star" style="color: #ffd500;"></i>
        <i class="fa-solid fa-star" style="color: #ffd500;"></i>
        <i class="fa-solid fa-star" style="color: #ffd500;"></i>
        <i class="fa-solid fa-star" style="color: #ffd500;"></i>
        <i class="fa-solid fa-star-half-stroke" style="color: #ffd500;"></i>
        <h3 class="numero">Telefono: 311 743 1013</h3>
        <a href="https://www.google.com/maps/dir//Hospedaje+Casa+Santa+Mar%C3%ADa+nayarit/@21.9096405,-105.6649215,9z/data=!4m8!4m7!1m0!1m5!1m1!1s0x8427197065001be7:0x7b61477b95766a0c!2m2!1d-104.5862458!2d21.3305033?hl=es&entry=ttu" target="_blank">Ver ubicacion</a>
    </div>
    <div class="card">
        <img src="img/Hoteles/Santa Maria del Oro/realmaria.jpg" alt="">
        <h2 class="hotel-name">Hotel Real María</h2>
        4.3<i class="fa-solid fa-star" style="color: #ffd500;"></i>
        <i class="fa-solid fa-star" style="color: #ffd500;"></i>
        <i class="fa-solid fa-star" style="color: #ffd500;"></i>
        <i class="fa-solid fa-star" style="color: #ffd500;"></i>
        <i class="fa-solid fa-star-half-stroke" style="color: #ffd500;"></i>

        <h3 class="numero">Telefono: 327 244 0199</h3>
        <a href="https://www.google.com/maps/dir//Hotel+Real+Mar%C3%ADa+Santa+Mar%C3%ADa+del+oro+nayarit/@21.9096405,-105.6665071,9z/data=!4m8!4m7!1m0!1m5!1m1!1s0x8427193f82d0b011:0x72f989b558c1667a!2m2!1d-104.5895215!2d21.3293294?hl=es&entry=ttu" target="_blank">Ver ubicacion</a>
    </div>
    <div class="card">
        <img src="img/Hoteles/Santa Maria del Oro/duarte.jpg" alt="">
        <h2 class="hotel-name">Hospedaje Duarte</h2>
        4.0<i class="fa-solid fa-star" style="color: #ffd500;"></i>
        <i class="fa-solid fa-star" style="color: #ffd500;"></i>
        <i class="fa-solid fa-star" style="color: #ffd500;"></i>
        <i class="fa-solid fa-star" style="color: #ffd500;"></i>
        <i class="fa-regular fa-star" style="color: #ffd500;"></i>
        <a href="https://www.google.com/maps/dir//Hospedaje+Duarte+Santa+Mar%C3%ADa+del+oro+nayarit/@21.9096405,-105.6645344,9z/data=!4m8!4m7!1m0!1m5!1m1!1s0x8427196ba0a11c2b:0xf54c1db09dc098c8!2m2!1d-104.5858887!2d21.3364207?hl=es&entry=ttu" target="_blank">Ver ubicacion</a>
    </div>
</div>
</div>
<br><br><br>

<!--	Santiago Ixcuintla-->
<div data-aos="fade-up" data-aos-duration="1500">
    <h1 class="title">Hoteles de Santiago Ixcuintla</h1>
</div>
    <div data-aos="fade-up" data-aos-duration="1500">
<div class="container">
    <div class="card">
        <img src="img/Hoteles/Santiago Ixcuintla/santiago.jpg" alt="">
        <h2 class="hotel-name">Hotel Santiago</h2>
        4.3<i class="fa-solid fa-star" style="color: #ffd500;"></i>
        <i class="fa-solid fa-star" style="color: #ffd500;"></i>
        <i class="fa-solid fa-star" style="color: #ffd500;"></i>
        <i class="fa-solid fa-star" style="color: #ffd500;"></i>
        <i class="fa-solid fa-star-half-stroke" style="color: #ffd500;"></i>
        <h3 class="numero">Telefono: 323 235 0719</h3>
        <a href="https://www.google.com/maps/dir//Hotel+Santiago+santiago+ixcuintla+nayarit/@22.1516871,-105.6159602,10z/data=!4m8!4m7!1m0!1m5!1m1!1s0x8420af5264a133c7:0x498e009a00ba6a49!2m2!1d-105.2087366!2d21.8075114?hl=es&entry=ttu" target="_blank">Ver ubicacion</a>
    </div>
    <div class="card">
        <img src="img/Hoteles/Santiago Ixcuintla/los reyes.jpg" alt="">
        <h2 class="hotel-name">Hotel plaza los reyes</h2>
        3.7<i class="fa-solid fa-star" style="color: #ffd500;"></i>
        <i class="fa-solid fa-star" style="color: #ffd500;"></i>
        <i class="fa-solid fa-star" style="color: #ffd500;"></i>
        <i class="fa-solid fa-star-half-stroke" style="color: #ffd500;"></i>
        <i class="fa-regular fa-star" style="color: #ffd500;"></i>
        <h3 class="numero">Telefono: 323 235 4257</h3>
        <a href="https://www.google.com/maps/dir//Hotel+plaza+los+reyes+santiago+ixcuintla+nayarit/@22.1521915,-105.5850235,10z/data=!4m8!4m7!1m0!1m5!1m1!1s0x8420af4d0d66941b:0xe67921d4f962a722!2m2!1d-105.2060318!2d21.8087006?hl=es&entry=ttu" target="_blank">Ver ubicacion</a>
    </div>
    <div class="card">
        <img src="img/Hoteles/Santiago Ixcuintla/plaza.jpg" alt="">
        <h2 class="hotel-name">Hotel Casino Plaza</h2>
        4.2<i class="fa-solid fa-star" style="color: #ffd500;"></i>
        <i class="fa-solid fa-star" style="color: #ffd500;"></i>
        <i class="fa-solid fa-star" style="color: #ffd500;"></i>
        <i class="fa-solid fa-star" style="color: #ffd500;"></i>
        <i class="fa-regular fa-star" style="color: #ffd500;"></i>

        <h3 class="numero">Telefono: 323 235 0851</h3>
        <a href="https://www.google.com/maps/dir//Hotel+Casino+Plaza+ixcuintla+nayarit/@22.1516433,-105.6159602,10z/data=!4m8!4m7!1m0!1m5!1m1!1s0x8420af527c30ab41:0xd2d4a5c85bc282dd!2m2!1d-105.2081757!2d21.8076839?hl=es&entry=ttu" target="_blank">Ver ubicacion</a>
    </div>
</div>
</div>

<br><br><br>

<!--	Tecuala-->

<div data-aos="fade-up" data-aos-duration="1500">
    <h1 class="title">Hoteles en Tecuala</h1>
</div>
    <div data-aos="fade-up" data-aos-duration="1500">
<div class="container">
    <div class="card">
        <img src="img/Hoteles/Tecuala/tecuala.jpg" alt="">
        <h2 class="hotel-name">Hotel Las Rosas </h2>
        4.1<i class="fa-solid fa-star" style="color: #ffd500;"></i>
        <i class="fa-solid fa-star" style="color: #ffd500;"></i>
        <i class="fa-solid fa-star" style="color: #ffd500;"></i>
        <i class="fa-solid fa-star" style="color: #ffd500;"></i>
        <i class="fa-regular fa-star" style="color: #ffd500;"></i>
        <h3 class="numero">Telefono: 389 253 2100</h3>
        <a href="https://www.google.com/maps/dir//hotel+las+rosas+en+tecuala+nayarit/@22.4489351,-105.4930027,12z/data=!4m8!4m7!1m0!1m5!1m1!1s0x869e430346b33521:0xdb3940a4d8debfae!2m2!1d-105.4583175!2d22.4013868?hl=es&entry=ttu" target="_blank">Ver ubicacion</a>
    </div>
    <div class="card">
        <img src="img/Hoteles/Tecuala/candelaria.jpg" alt="">
        <h2 class="hotel-name">Hotel y Restaurante Candelaria</h2>
        3.9<i class="fa-solid fa-star" style="color: #ffd500;"></i>
        <i class="fa-solid fa-star" style="color: #ffd500;"></i>
        <i class="fa-solid fa-star" style="color: #ffd500;"></i>
        <i class="fa-solid fa-star" style="color: #ffd500;"></i>
        <i class="fa-regular fa-star" style="color: #ffd500;"></i>
        <h3 class="numero">Telefono: 389 253 2089</h3>
        <a href="https://www.google.com/maps/dir//Hotel+y+Restaurante+Candelaria+en+tecuala+nayarit/@22.4491154,-105.4931276,12z/data=!4m8!4m7!1m0!1m5!1m1!1s0x869e43034c3a6f05:0x9af58f8658f49eba!2m2!1d-105.4585039!2d22.402189?hl=es&entry=ttu" target="_blank">Ver ubicacion</a>
    </div>
    <div class="card">
        <img src="img/Hoteles/Tecuala/imperial.jpg" alt="">
        <h2 class="hotel-name">Hotel Imperial</h2>
        4.2<i class="fa-solid fa-star" style="color: #ffd500;"></i>
        <i class="fa-solid fa-star" style="color: #ffd500;"></i>
        <i class="fa-solid fa-star" style="color: #ffd500;"></i>
        <i class="fa-solid fa-star" style="color: #ffd500;"></i>
        <i class="fa-solid fa-star-half-stroke" style="color: #ffd500;"></i>
        <a href="https://www.google.com/maps/dir//Hotel+Imperial+en+tecuala+nayarit/@22.4469813,-105.4937472,12z/data=!4m8!4m7!1m0!1m5!1m1!1s0x869e430409babdc3:0x5d775bda30c0e204!2m2!1d-105.4590654!2d22.3975232?hl=es&entry=ttu" target="_blank">Ver ubicacion</a>
    </div>
</div>
</div>

<!---->
<br>
<br>
<!--resto de tarjetas-->
<!--lo que se mostrara debe ir dentro de span-->
<span class="hideText">
<div class="container">
<div class="card">
    <img src="img/Hoteles/Tecuala/mj.jpg" alt="">
    <h2 class="hotel-name">HOTEL MJ</h2>
    4.1<i class="fa-solid fa-star" style="color: #ffd500;"></i>
    <i class="fa-solid fa-star" style="color: #ffd500;"></i>
    <i class="fa-solid fa-star" style="color: #ffd500;"></i>
    <i class="fa-solid fa-star" style="color: #ffd500;"></i>
    <i class="fa-regular fa-star" style="color: #ffd500;"></i>
    <h3 class="numero">Telefono: 389 253 2660</h3>
    <a href="https://www.google.com/maps/dir//HOTEL+MJ+en+tecuala+nayarit/@22.4497762,-105.4921859,12z/data=!4m8!4m7!1m0!1m5!1m1!1s0x869e431d29fa923d:0xd1062b6a51038788!2m2!1d-105.4565424!2d22.4030734?hl=es&entry=ttu" target="_blank">Ver ubicacion</a>
</div>
<div class="card">
    <img src="img/Hoteles/Tecuala/ramirez.jpg" alt="">
    <h2 class="hotel-name">Hotel Ramirez</h2>
    4.6<i class="fa-solid fa-star" style="color: #ffd500;"></i>
    <i class="fa-solid fa-star" style="color: #ffd500;"></i>
    <i class="fa-solid fa-star" style="color: #ffd500;"></i>
    <i class="fa-solid fa-star" style="color: #ffd500;"></i>
    <i class="fa-solid fa-star-half-stroke" style="color: #ffd500;"></i>
    <h3 class="numero">Telefono: 389 253 0963</h3>
    <a href="https://www.google.com/maps/dir//Hotel+Ramirez+en+tecuala+nayarit/@22.4470013,-105.4937472,12z/data=!4m8!4m7!1m0!1m5!1m1!1s0x869e4303e96a025b:0x87c9b2b3ce696a34!2m2!1d-105.458245!2d22.3977706?hl=es&entry=ttu" target="_blank">Ver ubicacion</a>
</div>
</div>
</span>
<br>
<br>
<!--boton para mostrar mas-->
<center><button class="read-more-btn">Ver Mas/Menos</button></center>

<br><br><br>

<!--	Tepic-->

<div data-aos="fade-up" data-aos-duration="1500">
    <h1 class="title">Hoteles de Tepic</h1>
</div>
    <div data-aos="fade-up" data-aos-duration="1500">
<div class="container">
    <div class="card">
        <img src="img/Hoteles/Tepic/inn.jpg" alt="">
        <h2 class="hotel-name">Fiesta Inn Tepic</h2>
        4.5<i class="fa-solid fa-star" style="color: #ffd500;"></i>
        <i class="fa-solid fa-star" style="color: #ffd500;"></i>
        <i class="fa-solid fa-star" style="color: #ffd500;"></i>
        <i class="fa-solid fa-star" style="color: #ffd500;"></i>
        <i class="fa-solid fa-star-half-stroke" style="color: #ffd500;"></i>
        <h3>MXN $1124 por noche</h3>
       
        <h3 class="numero">Telefono: 311 129 5950</h3>
        <a href="https://www.google.com/maps/dir//Fiesta+Inn+Tepic++nayarit/@21.9930513,-105.80487,9z/data=!4m8!4m7!1m0!1m5!1m1!1s0x84273741ad4a78d7:0xa09dd72094a5d60d!2m2!1d-104.8662122!2d21.4922131?hl=es&entry=ttu" target="_blank">Ver ubicacion</a>
    </div>
    <div class="card">
        <img src="img/Hoteles/Tepic/laloma.jpg" alt="">
        <h2 class="hotel-name">Hotel La Loma</h2>
        4.2<i class="fa-solid fa-star" style="color: #ffd500;"></i>
        <i class="fa-solid fa-star" style="color: #ffd500;"></i>
        <i class="fa-solid fa-star" style="color: #ffd500;"></i>
        <i class="fa-solid fa-star" style="color: #ffd500;"></i>
        <i class="fa-regular fa-star" style="color: #ffd500;"></i>
        <h3>MXN $996 por noche</h3>
        
        <h3 class="numero">Telefono: 311 115 9022</h3>
        <a href="https://www.google.com/maps/dir//Hotel+La+Loma+Tepic++nayarit/@22.0000376,-105.8223062,9z/data=!4m8!4m7!1m0!1m5!1m1!1s0x842736fa483a883b:0x24710e7441618089!2m2!1d-104.9015413!2d21.5062429?hl=es&entry=ttu" target="_blank">Ver ubicacion</a>
    </div>
    <div class="card">
        <img src="img/Hoteles/Tepic/urban.jpg" alt="">
        <h2 class="hotel-name">EH Ejecutivo Urban Hotel</h2>
        3.8<i class="fa-solid fa-star" style="color: #ffd500;"></i>
        <i class="fa-solid fa-star" style="color: #ffd500;"></i>
        <i class="fa-solid fa-star" style="color: #ffd500;"></i>
        <i class="fa-solid fa-star" style="color: #ffd500;"></i>
        <i class="fa-solid fa-star-half-stroke" style="color: #ffd500;"></i>
        <h3>MXN $1007 por noche</h3>
       
        <h3 class="numero">Telefono: 311 212 0716</h3>
        <a href="https://www.google.com/maps/dir//EH+Ejecutivo+Urban+Hotel+Tepic++nayarit/@22.001955,-105.8232241,9z/data=!4m8!4m7!1m0!1m5!1m1!1s0x842736f9c876621b:0xe85053b1ba4bd90a!2m2!1d-104.9028016!2d21.510225?hl=es&entry=ttu" target="_blank">Ver ubicacion</a>
    </div>
</div>
</div>

<!---->
<br>
<br>
<!--resto de tarjetas-->
<!--lo que se mostrara debe ir dentro de span-->
<span class="hideText">
<div class="container">
<div class="card">
    <img src="img/Hoteles/Tepic/rosas.jpg" alt="">
    <h2 class="hotel-name">Hotel Villa Las Rosas</h2>
    4.3<i class="fa-solid fa-star" style="color: #ffd500;"></i>
    <i class="fa-solid fa-star" style="color: #ffd500;"></i>
    <i class="fa-solid fa-star" style="color: #ffd500;"></i>
    <i class="fa-solid fa-star" style="color: #ffd500;"></i>
    <i class="fa-solid fa-star-half-stroke" style="color: #ffd500;"></i>
    <h3 class="numero">Telefono:  311 213 1857</h3>
    <a href="https://www.google.com/maps/dir//Hotel+Villa+Las+Rosas+Tepic++nayarit/@22.0002125,-105.8220582,9z/data=!4m8!4m7!1m0!1m5!1m1!1s0x842736fbcc1b9849:0x8ca331e54fbfcf2b!2m2!1d-104.9004698!2d21.5065918?hl=es&entry=ttu" target="_blank">Ver ubicacion</a>
</div>
<div class="card">
    <img src="img/Hoteles/Tepic/melanie.png" alt="">
    <h2 class="hotel-name">HOTEL MELANIE</h2>
    4.1<i class="fa-solid fa-star" style="color: #ffd500;"></i>
    <i class="fa-solid fa-star" style="color: #ffd500;"></i>
    <i class="fa-solid fa-star" style="color: #ffd500;"></i>
    <i class="fa-solid fa-star" style="color: #ffd500;"></i>
    <i class="fa-regular fa-star" style="color: #ffd500;"></i>
    <h3>MXN $1005 por noche</h3>
    <h3 class="numero">Telefono: 311 214 2310</h3>
    <a href="https://www.google.com/maps/dir//HOTEL+MELANIE+Tepic++nayarit/@21.9877693,-105.8184187,9z/data=!4m8!4m7!1m0!1m5!1m1!1s0x842736e1427d3711:0x8a77d67fb81d175b!2m2!1d-104.8968042!2d21.4962181?hl=es&entry=ttu" target="_blank">Ver ubicacion</a>
</div>
<div class="card">
    <img src="img/Hoteles/Tepic/express.jpg" alt="">
    <h2 class="hotel-name">City Express Tepic</h2>
    4.4<i class="fa-solid fa-star" style="color: #ffd500;"></i>
    <i class="fa-solid fa-star" style="color: #ffd500;"></i>
    <i class="fa-solid fa-star" style="color: #ffd500;"></i>
    <i class="fa-solid fa-star" style="color: #ffd500;"></i>
    <i class="fa-regular fa-star" style="color: #ffd500;"></i>
    <h3>MXN $1291 por noche</h3>
    <h3 class="numero">Telefono: 311 171 9001</h3>
    <a href="https://www.google.com/maps/dir//City+Express+Tepic+Tepic++nayarit/@21.9980338,-105.8176337,9z/data=!4m8!4m7!1m0!1m5!1m1!1s0x8427371d5107a4ab:0xcd9045e7754edf95!2m2!1d-104.8916207!2d21.5024619?hl=es&entry=ttu" target="_blank">Ver ubicacion</a>
</div>
</div>
<br><br>
<div class="container">
    <div class="card">
        <img src="img/Hoteles/Tepic/sierra.jpg" alt="">
        <h2 class="hotel-name">Hotel Sierra de Álica</h2>
        4.2<i class="fa-solid fa-star" style="color: #ffd500;"></i>
        <i class="fa-solid fa-star" style="color: #ffd500;"></i>
        <i class="fa-solid fa-star" style="color: #ffd500;"></i>
        <i class="fa-solid fa-star" style="color: #ffd500;"></i>
        <i class="fa-regular fa-star" style="color: #ffd500;"></i>
        <h3>MXN $804 por noche</h3>
       
        <h3 class="numero">Telefono: 311 212 0324</h3>
        <a href="#https://www.google.com/maps/dir//Hotel+Sierra+de+%C3%81lica+Tepic+nayarit/@22.0012428,-105.8176781,9z/data=!4m8!4m7!1m0!1m5!1m1!1s0x84273701d1129a27:0xc6d4b95faba7da13!2m2!1d-104.8917096!2d21.511305?hl=es&entry=ttu target="_blank">Ver ubicacion</a>
    </div>
    <div class="card">
        <img src="img/Hoteles/Tepic/violeta.jpg" alt="">
        <h2 class="hotel-name">Casa Violeta</h2>
        4.5<i class="fa-solid fa-star" style="color: #ffd500;"></i>
        <i class="fa-solid fa-star" style="color: #ffd500;"></i>
        <i class="fa-solid fa-star" style="color: #ffd500;"></i>
        <i class="fa-solid fa-star" style="color: #ffd500;"></i>
        <i class="fa-solid fa-star-half-stroke" style="color: #ffd500;"></i>
        <h3>MXN $653 por noche</h3>
        
        <h3 class="numero">Telefono: 311 160 0760</h3>
        <a href="https://www.google.com/maps/dir//Casa+Violeta+Tepic+nayarit/data=!4m6!4m5!1m1!4e2!1m2!1m1!1s0x8427375d7f15aba1:0x123a1e1e37d12d72?sa=X&ved=2ahUKEwjRsvjJjNiAAxXIfzABHRMDB9cQ9Rd6BAhFEAA&hl=es&ved=2ahUKEwjRsvjJjNiAAxXIfzABHRMDB9cQ9Rd6BAhPEAQ" target="_blank">Ver ubicacion</a>
    </div>
    <div class="card">
        <img src="img/Hoteles/Tepic/humberto.jpg" alt="">
        <h2 class="hotel-name">Hotel Humberto</h2>
        3.6<i class="fa-solid fa-star" style="color: #ffd500;"></i>
        <i class="fa-solid fa-star" style="color: #ffd500;"></i>
        <i class="fa-solid fa-star" style="color: #ffd500;"></i>
        <i class="fa-solid fa-star-half-stroke" style="color: #ffd500;"></i>
        <i class="fa-regular fa-star" style="color: #ffd500;"></i>
        <h3>MXN $674 por noche</h3>
       
        <h3 class="numero">Telefono: 311 212 1867</h3>
        <a href="https://www.google.com/maps/dir//Hotel+Humberto+Tepic+nayarit/@22.006299,-105.8302428,9z/data=!4m8!4m7!1m0!1m5!1m1!1s0x8427365e1a647105:0x6875b2c2c8fd86d9!2m2!1d-104.916901!2d21.5187098?hl=es&entry=ttu" target="_blank">Ver ubicacion</a>
    </div>
</div>
<br><br>
<div class="container">
    <div class="card">
        <img src="img/Hoteles/Tepic/fray.jpg" alt="">
        <h2 class="hotel-name">Hotel Fray Select</h2>
        4.3<i class="fa-solid fa-star" style="color: #ffd500;"></i>
        <i class="fa-solid fa-star" style="color: #ffd500;"></i>
        <i class="fa-solid fa-star" style="color: #ffd500;"></i>
        <i class="fa-solid fa-star" style="color: #ffd500;"></i>
        <i class="fa-solid fa-star-half-stroke" style="color: #ffd500;"></i>
        <h3>MXN $1411 por noche</h3>
       
        <h3 class="numero">Telefono: 311 133 7060</h3>
        <a href="https://www.google.com/maps/dir//Hotel+Fray+Select+Tepic+nayarit/@21.9991657,-105.8159395,9z/data=!4m8!4m7!1m0!1m5!1m1!1s0x8427376cb3b719c3:0x4e57974dbf142b2a!2m2!1d-104.8892078!2d21.5044714?hl=es&entry=ttu" target="_blank">Ver ubicacion</a>
    </div>
    <div class="card">
        <img src="img/Hoteles/Tepic/fray junipero.jpg" alt="">
        <h2 class="hotel-name">Hotel Fray Junípero Serra</h2>
        4.6<i class="fa-solid fa-star" style="color: #ffd500;"></i>
        <i class="fa-solid fa-star" style="color: #ffd500;"></i>
        <i class="fa-solid fa-star" style="color: #ffd500;"></i>
        <i class="fa-solid fa-star" style="color: #ffd500;"></i>
        <i class="fa-solid fa-star-half-stroke" style="color: #ffd500;"></i>
        <h3>MXN $1557 por noche</h3>
        
        <h3 class="numero">Telefono: 311 212 2525</h3>
        <a href="https://www.google.com/maps/dir//Hotel+Fray+Jun%C3%ADpero+Serra+Tepic+nayarit/@22.0012428,-105.8176891,9z/data=!4m8!4m7!1m0!1m5!1m1!1s0x84273701d4a85e5f:0xe65b3453b0ce5b01!2m2!1d-104.891853!2d21.511542?hl=es&entry=ttu" target="_blank">Ver ubicacion</a>
    </div>
    <div class="card">
        <img src="img/Hoteles/Tepic/valle.jpg" alt="">
        <h2 class="hotel-name">Hotel Vista Valle</h2>
        4.8<i class="fa-solid fa-star" style="color: #ffd500;"></i>
        <i class="fa-solid fa-star" style="color: #ffd500;"></i>
        <i class="fa-solid fa-star" style="color: #ffd500;"></i>
        <i class="fa-solid fa-star" style="color: #ffd500;"></i>
        <i class="fa-solid fa-star" style="color: #ffd500;"></i>
        <h3>MXN $1363 por noche</h3>
       
        <h3 class="numero">Telefono: 311 890 8580</h3>
        <a href="https://www.google.com/maps/dir//Hotel+Vista+Valle+Tepic+nayarit/@21.9901701,-105.8088391,9z/data=!4m8!4m7!1m0!1m5!1m1!1s0x8427373fb17ff09d:0x758c264c99591164!2m2!1d-104.8751134!2d21.4872465?hl=es&entry=ttu" target="_blank">Ver ubicacion</a>
    </div>
</div>
<br><br>
<div class="container">
    <div class="card">
        <img src="img/Hoteles/Tepic/nekie.jpg" alt="">
        <h2 class="hotel-name">Hotel Nekié Tepic</h2>
        4.2<i class="fa-solid fa-star" style="color: #ffd500;"></i>
        <i class="fa-solid fa-star" style="color: #ffd500;"></i>
        <i class="fa-solid fa-star" style="color: #ffd500;"></i>
        <i class="fa-solid fa-star" style="color: #ffd500;"></i>
        <i class="fa-regular fa-star" style="color: #ffd500;"></i>
        <h3>MXN $1230 por noche</h3>
       
        <h3 class="numero">Telefono: 311 211 8450</h3>
        <a href="https://www.google.com/maps/dir//Hotel+Neki%C3%A9+Tepic+Tepic+nayarit/@21.9782602,-105.7941653,9z/data=!4m8!4m7!1m0!1m5!1m1!1s0x8427374c6b5d2085:0xd541b13a45239219!2m2!1d-104.8647222!2d21.4766667?hl=es&entry=ttu" target="_blank">Ver ubicacion</a>
    </div>
    <div class="card">
        <img src="img/Hoteles/Tepic/sanjorge.jpg" alt="">
        <h2 class="hotel-name">Hotel San Jorge</h2>
        4.1<i class="fa-solid fa-star" style="color: #ffd500;"></i>
        <i class="fa-solid fa-star" style="color: #ffd500;"></i>
        <i class="fa-solid fa-star" style="color: #ffd500;"></i>
        <i class="fa-solid fa-star" style="color: #ffd500;"></i>
        <i class="fa-regular fa-star" style="color: #ffd500;"></i>
        <h3>MXN $1349 por noche</h3>
        
        <h3 class="numero">Telefono: 325 252 1039</h3>
        <a href="https://www.google.com/maps/dir//Hotel+San+Jorge+Tepic+nayarit/@22.0015962,-105.8185005,9z/data=!4m8!4m7!1m0!1m5!1m1!1s0x842736ffc63e36b5:0x90129ea1046976d7!2m2!1d-104.8934667!2d21.5123679?hl=es&entry=ttu" target="_blank">Ver ubicacion</a>
    </div>
    <div class="card">
        <img src="img/Hoteles/Tepic/higueras.jpg" alt="">
        <h2 class="hotel-name">Hotel Hacienda las Higueras</h2>
        4.3<i class="fa-solid fa-star" style="color: #ffd500;"></i>
        <i class="fa-solid fa-star" style="color: #ffd500;"></i>
        <i class="fa-solid fa-star" style="color: #ffd500;"></i>
        <i class="fa-solid fa-star" style="color: #ffd500;"></i>
        <i class="fa-solid fa-star-half-stroke" style="color: #ffd500;"></i>
        <h3>MXN $1331 por noche</h3>
       
        <h3 class="numero">Telefono: 311 215 4600</h3>
        <a href="https://www.google.com/maps/dir//Hotel+Hacienda+las+Higueras+Tepic+nayarit/@22.0076552,-105.834372,9z/data=!4m8!4m7!1m0!1m5!1m1!1s0x8427368c4a9a603f:0xb7eeae4f76f93f8!2m2!1d-104.9252149!2d21.5218674?hl=es&entry=ttu" target="_blank">Ver ubicacion</a>
    </div>
</div>
<br><br>
<div class="container">
    <div class="card">
        <img src="img/Hoteles/Tepic/Hotel Real de Don Juan.jpg" alt="">
        <h2 class="hotel-name">Hotel Real de Don Juan</h2>
        4.5<i class="fa-solid fa-star" style="color: #ffd500;"></i>
        <i class="fa-solid fa-star" style="color: #ffd500;"></i>
        <i class="fa-solid fa-star" style="color: #ffd500;"></i>
        <i class="fa-solid fa-star" style="color: #ffd500;"></i>
        <i class="fa-solid fa-star-half-stroke" style="color: #ffd500;"></i>
        <h3>MXN $1671 por noche</h3>
       
        <h3 class="numero">Telefono: 311 216 1888</h3>
        <a href="https://www.google.com/maps/dir//Hotel+Real+de+Don+Juan+tepic+nayarit/@21.5180681,-105.3791846,10z/data=!4m8!4m7!1m0!1m5!1m1!1s0x842736fd96a3cd23:0x1d12a7d3340bea40!2m2!1d-104.8935503!2d21.5068469?hl=es&entry=ttu" target="_blank">Ver ubicacion</a>
    </div>
    <div class="card">
        <img src="img/Hoteles/Tepic/paraiso.jpg" alt="">
        <h2 class="hotel-name">Hotel Paraíso</h2>
        3.9<i class="fa-solid fa-star" style="color: #ffd500;"></i>
        <i class="fa-solid fa-star" style="color: #ffd500;"></i>
        <i class="fa-solid fa-star" style="color: #ffd500;"></i>
        <i class="fa-solid fa-star" style="color: #ffd500;"></i>
        <i class="fa-regular fa-star" style="color: #ffd500;"></i>
        <h3>MXN $1127 por noche</h3>
        
        <h3 class="numero">Telefono: 311 214 0881</h3>
        <a href="https://www.google.com/maps/dir//Hotel+Para%C3%ADso+tepic+nayarit/@21.9782602,-105.8014465,9z/data=!4m8!4m7!1m0!1m5!1m1!1s0x842730b60e05606b:0x1da80055ca5708b6!2m2!1d-104.8608663!2d21.4662361?hl=es&entry=ttu" target="_blank">Ver ubicacion</a>
    </div>
    <div class="card">
        <img src="img/Hoteles/Tepic/santa rita.jpg" alt="">
        <h2 class="hotel-name">Hotel Colonial Santa Rita</h2>
        4.1<i class="fa-solid fa-star" style="color: #ffd500;"></i>
        <i class="fa-solid fa-star" style="color: #ffd500;"></i>
        <i class="fa-solid fa-star" style="color: #ffd500;"></i>
        <i class="fa-solid fa-star" style="color: #ffd500;"></i>
        <i class="fa-regular fa-star" style="color: #ffd500;"></i>
        <h3 class="numero">Telefono: 311 212 3936</h3>
        <a href="https://www.google.com/maps/dir//Hotel+Colonial+Santa+Rita+tepic+nayarit/@21.99768,-105.8139626,9z/data=!4m8!4m7!1m0!1m5!1m1!1s0x84265a482e0a68bd:0x587c6b9e94ab650e!2m2!1d-104.8880206!2d21.5140427?hl=es&entry=ttu" target="_blank">Ver ubicacion</a>
    </div>
</div>
</span>
<br>
<br>
<!--boton para mostrar mas-->
<center><button class="read-more-btn">Ver Mas/Menos</button></center>
<br><br><br>

<!--Tuxpan-->

<div data-aos="fade-up" data-aos-duration="1500">
    <h1 class="title">Hoteles de Tuxpan</h1>
</div>
    <div data-aos="fade-up" data-aos-duration="1500">
<div class="container">
    <div class="card">
        <img src="img/Hoteles/Tuxpan/provincia.jpg" alt="">
        <h2 class="hotel-name">Hotel Provincia</h2>
        3.8<i class="fa-solid fa-star" style="color: #ffd500;"></i>
        <i class="fa-solid fa-star" style="color: #ffd500;"></i>
        <i class="fa-solid fa-star" style="color: #ffd500;"></i>
        <i class="fa-solid fa-star" style="color: #ffd500;"></i>
        <i class="fa-regular fa-star" style="color: #ffd500;"></i>
        <h3 class="numero">Telefono: 319 232 3042</h3>
        <a href="https://www.google.com/maps/dir//Hotel+Provincia+tuxpan+nayarit/@22.2186892,-105.6494937,10z/data=!4m8!4m7!1m0!1m5!1m1!1s0x869e1c2d5e24961b:0xbb027186f77b5b88!2m2!1d-105.3016882!2d21.9427732?hl=es&entry=ttu" target="_blank">Ver ubicacion</a>
    </div>
    <div class="card">
        <img src="img/Hoteles/Tuxpan/blanquita.jpg" alt="">
        <h2 class="hotel-name">Hotel blanquita</h2>
        4.0<i class="fa-solid fa-star" style="color: #ffd500;"></i>
        <i class="fa-solid fa-star" style="color: #ffd500;"></i>
        <i class="fa-solid fa-star" style="color: #ffd500;"></i>
        <i class="fa-solid fa-star" style="color: #ffd500;"></i>
        <i class="fa-regular fa-star" style="color: #ffd500;"></i>
        <h3 class="numero">Telefono: 319 232 0684</h3>
        <a href="https://www.google.com/maps/dir//Hotel+blanquita+tuxpan+nayarit/@22.2152877,-105.6494937,10z/data=!4m8!4m7!1m0!1m5!1m1!1s0x869e1db4e20f8593:0x2961cb2c41e8ca47!2m2!1d-105.2865705!2d21.9410309?hl=es&entry=ttu" target="_blank">Ver ubicacion</a>
    </div>
</div>
</div>
<br><br><br>
<!--	Xalisco-->
<div data-aos="fade-up" data-aos-duration="1500">
    <h1 class="title">Hotel de Xalisco</h1>
</div>
    <div data-aos="fade-up" data-aos-duration="1500">
<div class="container">
    <div class="card">
        <img src="img/Hoteles/Xalisco/aztlan.jpg" alt="">
        <h2 class="hotel-name">Hotel Aztlan</h2>
        3.9<i class="fa-solid fa-star" style="color: #ffd500;"></i>
        <i class="fa-solid fa-star" style="color: #ffd500;"></i>
        <i class="fa-solid fa-star" style="color: #ffd500;"></i>
        <i class="fa-solid fa-star" style="color: #ffd500;"></i>
        <i class="fa-regular fa-star" style="color: #ffd500;"></i>
        <h3>MXN $805 por noche</h3>
       
        <h3 class="numero">Telefono: 311 211 0163</h3>
        <a href="https://www.google.com/maps/dir//Hotel+Aztlan+Xalisco+nayarit/@21.9713407,-105.8158841,9z/data=!4m8!4m7!1m0!1m5!1m1!1s0x842731243d378855:0xd45eee3a0a8d4cd2!2m2!1d-104.8993923!2d21.4487895?hl=es&entry=ttu" target="_blank">Ver ubicacion</a>
    </div>
</div>
</div>








<!--script para el boton-->
<script src="js/ocultar.js"></script>
<!--tarjetas restaurantes-->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
    AOS.init();
</script>
<!--script para el boton-->
<script src="js/ocultar.js"></script>
<!---->
<script>

function calculardiasDiscount() {
                var timeStart = new Date(document.getElementById("timeStart").value);
                var timeEnd = new Date(document.getElementById("timeEnd").value);
                var actualDate = new Date();
                if (timeEnd > timeStart)
                {
                    var diff = timeEnd.getTime() - timeStart.getTime();
                    document.getElementById("daysDiscount").value = Math.round(diff / (1000 * 60 * 60 * 24));
                }
                else if (timeEnd != null && timeEnd < timeStart) {
                    alert("La fecha final de la reserva debe ser mayor a la fecha inicial");
                    document.getElementById("daysDiscount").value = 0;
                }
            }

</script>

</body>
</html>