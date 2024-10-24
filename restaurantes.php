<?php

session_start();



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="css/restaurantes.css">
    <title>Document</title>
</head>
<body>
    <style>
        #s1{
            background: linear-gradient(to top,transparent,rgba(137, 218, 255, 0.281)), url(img/restaurente-header.jpg);
            background-size: cover;
            background-attachment: fixed;
            background-position: center center;
        }
    </style>
     <?php
    require_once "menu.php";
?>

    <section id="s1">
    <h1 class="restaurante">Restaurantes</h1>


    <div class="texto">
        <p class="parrafo">
            Si eres un amante de la buena comida y estás buscando los mejores lugares para disfrutar de una gran experiencia gastronómica
            en Nayarit, has llegado al sitio indicado. En nuestro sitio, encontrarás una lista completa de los mejores restaurantes en la región, donde podrás deleitar tu paladar con una amplia variedad de sabores y estilos culinarios.
            <br>
            Desde auténticos platillos mexicanos hasta exquisiteces internacionales, pasando por deliciosos mariscos frescos y opciones vegetarianas, Nayarit cuenta con una escena gastronómica diversa y emocionante que seguramente satisfará todos los gustos y preferencias.
        </p>
    </div>


    </section>

<section id="s2">




<!--Acaponeta-->
<!--tarjetas restaurantes(las 3 que son visibles)-->
<div data-aos="fade-up" data-aos-duration="1500">
    <h1 class="title">Restaurantes de Acaponeta</h1>
    </div>
    <div data-aos="fade-up" data-aos-duration="1500">
    <div class="container">
        <div class="card">
            <img src="img/restaurantes/Acaponeta/laesquinaweb.png" alt="">
            <h2 class="hotel-name">La Esquina</h2>
            <h3>Restaurant & Bar</h3>
            <h3 style="color: rgb(0, 58, 247);">Direccion: Puebla Sur 17, Centro.</h3>
            <h4 style="color: rgb(0, 18, 78);">De lunes a domingo de 7:00 am a 11:00 pm</h4>
            <h3 class="numero">Telefono: 325 252 2754</h3>
            <a href="https://www.google.com/maps?opi=89978449&lqi=Ch9MYSBFc3F1aW5hIGVuIGFjYXBvbmV0YSBuYXlhcml0SMH0vteYroCACForEAAQARgAGAEYAyIfbGEgZXNxdWluYSBlbiBhY2Fwb25ldGEgbmF5YXJpdJIBDWJhcl9hbmRfZ3JpbGyqAVkQASoOIgpsYSBlc3F1aW5hKA4yIBABIhwG5T8jzCnF7Hzg5p-9Ua1ZZJaKyDKTHo8QTo52MiMQAiIfbGEgZXNxdWluYSBlbiBhY2Fwb25ldGEgbmF5YXJpdA&phdesc=buuSfkGzDlo&vet=12ahUKEwiVwpnPk5mAAxV1TDABHRPCAzMQ8UF6BAgFEFg..i&lei=yP22ZJW-BfWYwbkPk4SPmAM&cs=1&um=1&ie=UTF-8&fb=1&gl=mx&sa=X&geocode=KaslVtWqZ56GMdQnsGj-1oqR&daddr=Puebla+Sur+17,+Centro,+63430+Acaponeta,+Nay." target="_blank">Ver ubicacion</a>
        </div>
        <div class="card">
            <img src="img/restaurantes/Acaponeta/elbigotes.jpg" alt="">
            <h2 class="hotel-name">El Bigotes</h2>
            <h3>Restaurant & Bar</h3>
            <h3 style="color: rgb(0, 58, 247);">Direccion: Dirección: Guerrero Ote. 2, Centro.</h3>
            <h4 style="color: rgb(0, 18, 78);"></h4>
            <h3 class="numero"></h3>
            <a href="https://www.google.com/maps?opi=89978449&lqi=Ch9FbCBCaWdvdGVzIGVuIGFjYXBvbmV0YSBuYXlhcml0SK232pHUuICACFozEAAQARgAGAEYAyIfZWwgYmlnb3RlcyBlbiBhY2Fwb25ldGEgbmF5YXJpdCoGCAIQABABkgEKcmVzdGF1cmFudKoBWBABKg4iCmVsIGJpZ290ZXMoDjIfEAEiG0NsOTfFfoai_QgCAwQon7bjpPWX7CkCklzLbTIjEAIiH2VsIGJpZ290ZXMgZW4gYWNhcG9uZXRhIG5heWFyaXQ&phdesc=OOf2WfIeP-E&vet=12ahUKEwihl_W7k5mAAxVBSjABHQD7DycQ8UF6BAgFEBg..i&lei=n_22ZOHLJ8GUwbkPgPa_uAI&cs=1&um=1&ie=UTF-8&fb=1&gl=mx&sa=X&geocode=KStRbfqLZ56GMWS7j7O7KSfD&daddr=Guerrero+Ote.+2,+Centro,+63430+Acaponeta,+Nay." target="_blank">Ver ubicacion</a>
        </div>
        <div class="card">
            <img src="img/restaurantes/Acaponeta/mipueblito.jpg" alt="">
            <h2 class="hotel-name">Restaurante Mi pueblito</h2>
            <h3>Restaurante</h3>
            <h3 style="color: rgb(0, 58, 247);"></h3>
            <h4 style="color: rgb(0, 18, 78);">De lunes a domingo de 7:30 pm a 4:00 pm</h4>
            <h3 class="numero">Telefono: 325 251 1680</h3>
            <a href="https://www.google.com/maps?opi=89978449&lqi=CixSZXN0YXVyYW50ZSBNaSBwdWVibGl0byBlbiBhY2Fwb25ldGEgbmF5YXJpdEis5InZnK-AgAhaRhAAEAEQAhgAGAEYAhgEIixyZXN0YXVyYW50ZSBtaSBwdWVibGl0byBlbiBhY2Fwb25ldGEgbmF5YXJpdCoICAIQABABEAKSAQpyZXN0YXVyYW50qgFyEAEqGyIXcmVzdGF1cmFudGUgbWkgcHVlYmxpdG8oDjIfEAEiG1lzcPlvZVCXiPNR3_ZuEkXZSjGMZ7_9ku-vCjIwEAIiLHJlc3RhdXJhbnRlIG1pIHB1ZWJsaXRvIGVuIGFjYXBvbmV0YSBuYXlhcml0&phdesc=YJPok8B6CZ8&vet=12ahUKEwi63Pqmk5mAAxVFSDABHZLLDCsQ8UF6BAgGEBg..i&lei=c_22ZPrWKsWQwbkPkpez2AI&cs=1&um=1&ie=UTF-8&fb=1&gl=mx&sa=X&geocode=KV_60AQBZ56GMYLViYtC2Msr&daddr=63414+Nay." target="_blank">Ver ubicacion</a>
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
            <img src="img/restaurantes/Acaponeta/tacoexpress.jpeg" alt="">
            <h2 class="hotel-name">Taco express</h2>
            <h3>Taqueria</h3>
            <h3 style="color: rgb(0, 58, 247);">Direccion: Guerrero 11, entre Veracruz y Oaxaca Norte, Centro.</h3>
            <h4 style="color: rgb(0, 18, 78);">De lunes a domingo de 3:30 pm a 11:30 pm</h4>
            <h3 class="numero">Telefono: 667 492 9238</h3>
            <a href="https://www.google.com/maps/dir//Guerrero+11,+entre+Veracruz+y+Oaxaca+Norte,+Centro,+63430+Acaponeta,+Nay./@22.4951467,-105.4321081,12z/data=!4m8!4m7!1m0!1m5!1m1!1s0x869e67ca215d2bd3:0xfc116c1596090153!2m2!1d-105.3620677!2d22.4951617?entry=ttu" target="_blank">Ver ubicacion</a>
        </div>
        <div class="card">
            <img src="img/restaurantes/Acaponeta/buratas.jpg" alt="">
            <h2 class="hotel-name">Burrata pizzeria</h2>
            <h3>Pizerria</h3>
            <h3 style="color: rgb(0, 58, 247);">Direccion: Juárez Ote. 21, Centro.</h3>
            <h4 style="color: rgb(0, 18, 78);">De lunes a domingo de 12:00 pm a las 9:30 pm</h4>
            <h3 class="numero">Telefono: 325 251 0615</h3>
            <a href="https://www.google.com/maps/dir//Ju%C3%A1rez+Ote.+21,+Centro,+63430+Acaponeta,+Nay./@22.4915355,-105.4324921,12z/data=!4m8!4m7!1m0!1m5!1m1!1s0x869e673273541f71:0xc2f7031ca94b401c!2m2!1d-105.3624526!2d22.4915751?entry=ttu" target="_blank">Ver ubicacion</a>
        </div>
        <div class="card">
            <img src="img/restaurantes/Acaponeta/italianny.jpg" alt="">
            <h2 class="hotel-name">Italianny Pizza</h2>
            <h3>Pizzeria</h3>
            <h3 style="color: rgb(0, 58, 247);">Direccion: Morelos 32 int 10, galaxia.</h3>
            <h4 style="color: rgb(0, 18, 78);">De lunes a viernes de 9:00 am a 10:00 pm sabdo y domingo de 11:00 am a 10 pm</h4>
            <h3 class="numero">Telefono: 325 252 0400</h3>
            <a href="https://www.google.com/maps?opi=89978449&lqi=CiRJdGFsaWFubnkgUGl6emEgZW4gYWNhcG9uZXRhIG5heWFyaXRI2pPb2s6rgIAIWjgQABABGAAYARgDIiRpdGFsaWFubnkgcGl6emEgZW4gYWNhcG9uZXRhIG5heWFyaXQqBggCEAAQAZIBEHBpenphX3Jlc3RhdXJhbnQ&phdesc=Li4q4aICDgk&vet=12ahUKEwig2taWk5mAAxVkSTABHfydASkQ8UF6BAgFEFg..i&lei=Uf22ZODtIeSSwbkP_LuGyAI&cs=1&um=1&ie=UTF-8&fb=1&gl=mx&sa=X&geocode=KReGuNarZ56GMV0iDLQFpl-3&daddr=Morelos+32+int+10,+galaxia,+63435+Acaponeta,+Nay." target="_blank">Ver ubicacion</a>
        </div>
    </div>
    </span>
    <br>
    <br>
    <!--boton para mostrar mas-->
    <center><button class="read-more-btn">Ver Mas/Menos</button></center>
<!--separacion entre tarjetas-->
<br>
<br>
<br>
   <!----> 

<!--Ahuacatlan-->
 <!--tarjetas restaurantes(las 3 que son visibles)-->
 <div data-aos="fade-up" data-aos-duration="1500">
    <h1 class="title">Restaurantes de Ahuacatlan</h1>
    </div>
    <div data-aos="fade-up" data-aos-duration="1500">
    <div class="container">
        <div class="card">
            <img src="img/restaurantes/Acaponeta/elparque.jpg">
            <h2 class="hotel-name">Restaurante el parque</h2>
            <h3>Restaurante</h3>
            <h3 style="color: rgb(0, 58, 247);">Direccion: : 20 de Noviembre 24, Centro.</h3>
            <h4 style="color: rgb(0, 18, 78);">De lunes a sábado de 8:00 am a 4:30 pm</h4>
            <h3 class="numero">Telefono: 324 241 0543</h3>
            <a href="https://www.google.com/maps/dir//Restaurante+el+parque+ahiacatlan/@21.8561323,-106.0284924,7.25z/data=!4m8!4m7!1m0!1m5!1m1!1s0x8426e5455d947df3:0x223b62e34e66ed3!2m2!1d-104.4843317!2d21.051511?entry=ttu" target="_blank">Ver ubicacion</a>
        </div>
        <div class="card">
            <img src="img/restaurantes/Acaponeta/meosn.jpg" alt="">
            <h2 class="hotel-name">Meson Olas Altas</h2>
            <h3>Meson</h3>
            <h3 style="color: rgb(0, 58, 247);">Direccion: Amado Nervo 158, Prisciliano Sánchez.</h3>
            <h4 style="color: rgb(0, 18, 78);"></h4>
            <h3 class="numero"></h3>
            <a href="https://www.google.com/maps/dir//Meson+Olas+Altas+ahiacatlan/@21.7721086,-105.4928093,9z/data=!4m8!4m7!1m0!1m5!1m1!1s0x8426e56d3ce37daf:0x38770cc449e31d74!2m2!1d-104.4893517!2d21.0513985?entry=ttu" target="_blank">Ver ubicacion</a>
        </div>
        <div class="card">
            <img src="img/restaurantes/Ahuacatlan/varela.jpg" alt="">
            <h2 class="hotel-name">Mariscos y Botanas Varela</h2>
            <h3>Marisqueria</h3>
            <h3 style="color: rgb(0, 58, 247);">Direccion: Río Amazonas 82, El Llano.</h3>
            <h4 style="color: rgb(0, 18, 78);">De lunes a domingo de 11:00 pm a 10:00 pm</h4>
            <h3 class="numero"></h3>
            <a href="https://www.google.com/maps/dir//Mariscos+y+Botanas+Varela+ahiacatlan/@21.7721086,-105.4928093,9z/data=!4m8!4m7!1m0!1m5!1m1!1s0x8426e5489e35f549:0x64012d916e354c64!2m2!1d-104.4839554!2d21.057486?entry=ttu" target="_blank">Ver ubicacion</a>
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
        <img src="img/restaurantes/Ahuacatlan/mar y tierra.jpg" alt="">
        <h2 class="hotel-name">Restaurante Mar y tierra</h2>
        <h3>Marisqueria</h3>
        <h3 style="color: rgb(0, 58, 247);">Direccion: 20 de Noviembre 96, 140, Centro.</h3>
        <h4 style="color: rgb(0, 18, 78);">De lunes a sábado de 8:00 am a 4:00 pm</h4>
        <h3 class="numero">Telefono: 324 108 1602</h3>
        <a href="https://www.google.com/maps/dir//Restaurante+Mar+y+tierra+ahuacatlan/@21.7721086,-105.4928093,9z/data=!4m8!4m7!1m0!1m5!1m1!1s0x8426e5454ec0c661:0x2f8079f90b216864!2m2!1d-104.4848839!2d21.0505493?entry=ttu" target="_blank">Ver ubicacion</a>
    </div>
    <div class="card">
        <img src="img/restaurantes/Ahuacatlan/zarandeaditos.jpg" alt="">
        <h2 class="hotel-name">Los Zarandeaditos</h2>
        <h3>Restaurante familiar</h3>
        <h3 style="color: rgb(0, 58, 247);">Direccion:  México 15 #153, Emilio M. González.</h3>
        <h4 style="color: rgb(0, 18, 78);">De lunes a domingo de 12:00 pm a las 7:00 pm</h4>
        <h3 class="numero">Telefono: 324 103 7155</h3>
        <a href="https://www.google.com/maps/dir//M%C3%A9xico+15+%23153,+Emilio+M.+Gonz%C3%A1lez,+63038+Ahuacatl%C3%A1n,+Nay./@21.0593956,-104.5664545,12z/data=!4m8!4m7!1m0!1m5!1m1!1s0x8426e5d50b6ebbe5:0x92fa16287abf5fe5!2m2!1d-104.4964141!2d21.05941?entry=ttu" target="_blank">Ver ubicacion</a>
    </div>
    <div class="card">
        <img src="img/restaurantes/Ahuacatlan/king.jpg" alt="">
        <h2 class="hotel-name">Restaurante chino CHANG LONG</h2>
        <h3>Restaurante chino</h3>
        <h3 style="color: rgb(0, 58, 247);">Direccion: La Otra Banda</h3>
        <h4 style="color: rgb(0, 18, 78);">De lunes a domingo de 10:00 am a las 8:00 pm</h4>
        <h3 class="numero">Telefono: 324 688 1904</h3>
        <a href="https://www.google.com/maps/dir//La+Otra+Banda,+63900+Ahuacatl%C3%A1n,+Nay./@21.056131,-104.5523026,12z/data=!4m8!4m7!1m0!1m5!1m1!1s0x8426e5e176748cf9:0xc75b00a46a7769a0!2m2!1d-104.4822598!2d21.056151?entry=ttu" target="_blank">Ver ubicacion</a>
    </div>
</div>
</span>
<br>
<br>
<!--boton para mostrar mas-->
<center><button class="read-more-btn">Ver Mas/Menos</button></center>

<!--separacion entre tarjetas-->
<br>
<br>
<br>
   <!---->    

<!--Amatlan de Cañas-->
<!--tarjetas restaurantes(las 3 que son visibles)-->
<div data-aos="fade-up" data-aos-duration="1500">
    <h1 class="title">Restaurantes de Amatlan de Cañas</h1>
    </div>
    <div data-aos="fade-up" data-aos-duration="1500">
    <div class="container">
        <div class="card">
            <img src="img/restaurantes/Amatlan de Cañas/tukanes.jpg">
            <h2 class="hotel-name">Los tukanes restaurante</h2>
            <h3>Restaurante</h3>
            <h3 style="color: rgb(0, 58, 247);">Direccion: : 2Morelos Guerrero Carriza.</h3>
            <h4 style="color: rgb(0, 18, 78);">De lunes a domingo de 10:00 am a 7:00 pm</h4>
            <h3 class="numero">Telefono: 324 247 1313</h3>
            <a href="https://www.google.com/maps?opi=89978449&lqi=Cilsb3MgdHVjYW5lcyByZXN0YXVyYW50ZSBhbWF0bGFuIGRlIGNhw7Fhc0iR8KSQ46uAgAhaORAAEAEQAhgAGAIYAxgFIilsb3MgdHVjYW5lcyByZXN0YXVyYW50ZSBhbWF0bGFuIGRlIGNhw7Fhc5IBCnJlc3RhdXJhbnSaASNDaFpEU1VoTk1HOW5TMFZKUTBGblNVTjFPV0V5TkdaQkVBRaoBbxABKhsiF2xvcyB0dWNhbmVzIHJlc3RhdXJhbnRlKA4yHxABIhsN8cJWGj-hc-_t5iCkvcUlvVZWy7sdhjPvBwkyLRACIilsb3MgdHVjYW5lcyByZXN0YXVyYW50ZSBhbWF0bGFuIGRlIGNhw7Fhcw&phdesc=FqD3a_1dqUs&vet=12ahUKEwi2rImDqJmAAxXRRDABHfR8BjYQ8UF6BAgFEBg..i&lei=LRO3ZPbhI9GJwbkP9PmZsAM&cs=1&um=1&ie=UTF-8&fb=1&gl=mx&sa=X&geocode=KZFUlo1gjCaEMVYknTPBJPAM&daddr=Morelos+Guerrero+Carrizal,+63969+Amatl%C3%A1n+de+Ca%C3%B1as,+Nay." target="_blank">Ver ubicacion</a>
        </div>
        <div class="card">
            <img src="img/restaurantes/Amatlan de Cañas/lafinca.jpg" alt="">
            <h2 class="hotel-name">La Finca De Piedra</h2>
            <h3>Restaurante de brunch</h3>
            <h3 style="color: rgb(0, 58, 247);">Direccion: Vicente Guerrero, 15 esquina con el malecón El carrizal.</h3>
            <h4 style="color: rgb(0, 18, 78);">De viernes a domingo de 7:00 am 3:00 pm</h4>
            <h3 class="numero">Telefono: 324 247 1346</h3>
            <a href="https://www.google.com/maps?opi=89978449&lqi=CiRsYSBmaW5jYSBkZSBwaWVkcmEgYW1hdGxhbiBkZSBjYcOxYXNI8b-V9uCugIAIWkgQABABEAIQAxgAGAEYAhgDGAQYBRgGIiRsYSBmaW5jYSBkZSBwaWVkcmEgYW1hdGxhbiBkZSBjYcOxYXMqCggCEAAQARACEAOSARFicnVuY2hfcmVzdGF1cmFudKoBTRABMh8QASIbcbeU8796cEOOKeHR6B3ZIKCt6Jh0Fx0MqVVeMigQAiIkbGEgZmluY2EgZGUgcGllZHJhIGFtYXRsYW4gZGUgY2HDsWFz&phdesc=GBf6MrUnFak&vet=12ahUKEwiwooviqJmAAxXXj4QIHSupDSgQ8UF6BAgFEBg..i&lei=9BO3ZLDYM9efkvQPq9K2wAI&cs=1&um=1&ie=UTF-8&fb=1&gl=mx&sa=X&geocode=KRlf1R5PjSaEMZepKn0_6F52&daddr=Vicente+Guerrero,+15+esquina+con+el+malec%C3%B3n+El+carrizal,+63960+Amatl%C3%A1n+de+Ca%C3%B1as,+Nay." target="_blank">Ver ubicacion</a>
        </div>
        <div class="card">
            <img src="img/restaurantes/Amatlan de Cañas/los nenes.jpg" alt="">
            <h2 class="hotel-name">Los nenes</h2>
            <h3>Marisqueria</h3>
            <h3 style="color: rgb(0, 58, 247);">Direccion: Malecón.</h3>
            <h4 style="color: rgb(0, 18, 78);">De lunes a domingo de 10:00 am a 6:00 pm</h4>
            <h3 class="numero">Telefono: 324 114 9957</h3>
            <a href="https://www.google.com/maps?opi=89978449&lqi=Chtsb3MgbmVuZXMgYW1hdGxhbiBkZSBjYcOxYXNI98b04r-tgIAIWisQABABGAAYARgCGAMYBCIbbG9zIG5lbmVzIGFtYXRsYW4gZGUgY2HDsWFzkgESc2VhZm9vZF9yZXN0YXVyYW50qgFTEAEqDSIJbG9zIG5lbmVzKA4yHxABIhsQMgGRm4pAxPA1Joew1Md22e4WfCrgkxZ67H8yHxACIhtsb3MgbmVuZXMgYW1hdGxhbiBkZSBjYcOxYXM&phdesc=AJ6_blHvzwk&vet=12ahUKEwjov4SxqZmAAxVsQjABHcrzBg8Q8UF6BAgFEBg..i&lei=mhS3ZOiKGeyEwbkPyuebeA&cs=1&um=1&ie=UTF-8&fb=1&gl=mx&sa=X&geocode=KSlBf_eJjSaEMfSwoqzGzod2&daddr=Malec%C3%B3n,+63960+Amatl%C3%A1n+de+Ca%C3%B1as,+Nay." target="_blank">Ver ubicacion</a>
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
        <img src="img/restaurantes/Amatlan de Cañas/elpuinguico.jpg" alt="">
        <h2 class="hotel-name">El pingüico</h2>
        <h3>Restaurante</h3>
        <h3 style="color: rgb(0, 58, 247);"></h3>
        <h4 style="color: rgb(0, 18, 78);">De lunes a domingo de 7:00 am a 10:00 pm</h4>
        <h3 class="numero">Telefono: 324 247 0098</h3>
        <a href="https://www.google.com/maps/dir//63960+Amatl%C3%A1n+de+Ca%C3%B1as,+Nay./@20.8088608,-104.4701038,12z/data=!4m8!4m7!1m0!1m5!1m1!1s0x84268dcc71f289bb:0x24f89504728bd7e8!2m2!1d-104.4000634!2d20.808875?entry=ttu" target="_blank">Ver ubicacion</a>
    </div>
    <div class="card">
        <img src="img/restaurantes/Amatlan de Cañas/donchilo.png" alt="">
        <h2 class="hotel-name">Taqueria "Don Chilo"</h2>
        <h3>Taqueria</h3>
        <h3 style="color: rgb(0, 58, 247);">Direccion:  C. Juárez.</h3>
        <h4 style="color: rgb(0, 18, 78);">De jueves a domingo de 3:00 pm a las 9:00 pm</h4>
        <h3 class="numero"></h3>
        <a href="https://www.google.com/maps?opi=89978449&lqi=CiZUYXF1ZXJpYSAiRG9uIENoaWxvIiBhbWF0bGFuIGRlIGNhw7Fhc0j05JeFnKuAgAhaNBAAEAEQAhgAGAEYAhgEIiR0YXF1ZXJpYSBkb24gY2hpbG8gYW1hdGxhbiBkZSBjYcOxYXOSAQ90YWNvX3Jlc3RhdXJhbnSqAWUQASoWIhJ0YXF1ZXJpYSBkb24gY2hpbG8oDjIfEAEiGwHyaQ6Ql98plJazR36s_Ok1uvDkRQ57bNs4QTIoEAIiJHRhcXVlcmlhIGRvbiBjaGlsbyBhbWF0bGFuIGRlIGNhw7Fhcw&phdesc=pUCBHXdyMR0&vet=12ahUKEwie7qvPqpmAAxVgRzABHfIiAyoQ8UF6BAgFEDI..i&lei=5hW3ZJ7jGOCOwbkP8sWM0AI&cs=1&um=1&ie=UTF-8&fb=1&gl=mx&sa=X&geocode=KU3dd1xejCaEMbF0So30KH5t&daddr=C.+Ju%C3%A1rez,+63960+Amatl%C3%A1n+de+Ca%C3%B1as,+Nay." target="_blank">Ver ubicacion</a>
    </div>
</div>
</span>
<br>
<br>
<!--boton para mostrar mas-->
<center><button class="read-more-btn">Ver Mas/Menos</button></center>
<!--separacion entre tarjetas-->
<br>
<br>
<br>
   <!----> 

<!--Bahia de Banderas-->
<!--tarjetas restaurantes(las 3 que son visibles)-->
<div data-aos="fade-up" data-aos-duration="1500">
    <h1 class="title">Restaurantes de Bahia de Banderas</h1>
    </div>
    <div data-aos="fade-up" data-aos-duration="1500">
    <div class="container">
        <div class="card">
            <img src="img/restaurantes/Bahia de banderas/dugarelplay.jpg" alt="">
            <h2 class="hotel-name">Restaurant Dugarel Plays</h2>
            <h3>Marisquería</h3>
            <h3 style="color: rgb(0, 58, 247);">Direccion: Av Pacífico 25, Brisas, Bucerias</h3>
            <h4 style="color: rgb(0, 18, 78);">De lunes a domingo de 12:00 am a 10:00 pm</h4>
            <h3 class="numero">Telefono: 329 298 1757</h3>
            <a href="https://www.google.com/maps/dir//Av+Pac%C3%ADfico+25,+Brisas,+63732+Bucer%C3%ADas,+Nay./@20.7578633,-105.4135069,12z/data=!4m8!4m7!1m0!1m5!1m1!1s0x8424d6f76cdd8e77:0x84e4cee5114607f9!2m2!1d-105.3434678!2d20.7578758?entry=ttu" target="_blank">Ver ubicacion</a>
        </div>
        <div class="card">
            <img src="img/restaurantes/Bahia de banderas/lapstal.jpg" alt="">
            <h2 class="hotel-name">La Postal Restaurante</h2>
            <h3>Restaurante italiano</h3>
            <h3 style="color: rgb(0, 58, 247);">Direccion: Calle Lázaro Cárdenas s/n, Centro, Bucerías,</h3>
            <h4 style="color: rgb(0, 18, 78);">De lunes a domingo de 12:00 pm a las 10:00 pm</h4>
            <h3 class="numero">Telefono: 329 298 0273</h3>
            <a href="https://www.google.com/maps?opi=89978449&lqi=CipMYSBQb3N0YWwgUmVzdGF1cmFudGUgZW4gYmFoaWEgZGUgYmFuZGVyYXNIys73pPGqgIAIWkIQABABEAIYABgBGAIiKmxhIHBvc3RhbCByZXN0YXVyYW50ZSBlbiBiYWhpYSBkZSBiYW5kZXJhcyoICAIQABABEAKSARJpdGFsaWFuX3Jlc3RhdXJhbnSqAW4QASoZIhVsYSBwb3N0YWwgcmVzdGF1cmFudGUoDjIfEAEiG1aNBgUPDdz6MHFTo2Qy7EkPWNh_n-hLf7ttATIuEAIiKmxhIHBvc3RhbCByZXN0YXVyYW50ZSBlbiBiYWhpYSBkZSBiYW5kZXJhcw&phdesc=9Kd4QSwevZg&vet=12ahUKEwiGsPDorpmAAxWFSDABHVwbBHMQ8UF6BAgFEBg..i&lei=TRq3ZMbVKoWRwbkP3LaQmAc&cs=1&um=1&ie=UTF-8&fb=1&gl=mx&sa=X&geocode=KasNEkeVQCGEMdstSmPLe24r&daddr=Calle+L%C3%A1zaro+C%C3%A1rdenas+s/n,+Centro,+63732+Bucer%C3%ADas,+Nay." target="_blank">Ver ubicacion</a>
        </div>
        <div class="card">
            <img src="img/restaurantes/Bahia de banderas/san.jpg" alt="">
            <h2 class="hotel-name">Sandrina´s Restaurant</h2>
            <h3>Restaurante</h3>
            <h3 style="color: rgb(0, 58, 247);">Direccion: Calle Lázaro Cárdenas, Las Palmas 33 Colonia, Bucerías</h3>
            <h4 style="color: rgb(0, 18, 78);">De miercoles a lunes de 5:00 pm a 9:00 pm</h4>
            <h3 class="numero">Telefono: 329 298 3176</h3>
            <a href="https://www.google.com/maps/dir//Calle+L%C3%A1zaro+C%C3%A1rdenas,+Las+Palmas+33+Colonia,+63732+Bucer%C3%ADas,+Nay./@20.7540213,-105.4071967,12z/data=!4m8!4m7!1m0!1m5!1m1!1s0x84214403ffffffff:0xff20ae10e1d35acc!2m2!1d-105.3371647!2d20.7540217?entry=ttu" target="_blank">Ver ubicacion</a>
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
        <img src="img/restaurantes/Bahia de banderas/karen.jpg" alt="">
        <h2 class="hotel-name">Karens Place</h2>
        <h3>Restaurante</h3>
        <h3 style="color: rgb(0, 58, 247);">Direccion: Benito Juárez 12, Zona Dorada,Bucerías, Nay.</h3>
        <h4 style="color: rgb(0, 18, 78);">De lunes a domingo de 9:00 am a 9:00 pm</h4>
        <h3 class="numero">Telefono: 329 298 3176</h3>
        <a href="https://www.google.com/maps/dir//Karen's+Place+bahia+de+banderas/@21.6233787,-105.7169016,9z/data=!4m8!4m7!1m0!1m5!1m1!1s0x842140c01592c5e9:0xc578842befaccc0d!2m2!1d-105.3354609!2d20.7521105?entry=ttu" target="_blank">Ver ubicacion</a>
    </div>
    <div class="card">
        <img src="img/restaurantes/Bahia de banderas/lanegra.jpg" alt="">
        <h2 class="hotel-name">La Negra</h2>
        <h3>Restaurante</h3>
        <h3 style="color: rgb(0, 58, 247);">Direccion: Abasolo 11, Bucerías, Nay.</h3>
        <h4 style="color: rgb(0, 18, 78);">De lunes a domingo de 6:00 pm a las 11:00 pm</h4>
        <h3 class="numero">Telefono: 311 275 3070</h3>
        <a href="https://www.google.com/maps/dir//Abasolo+11,+63732+Bucer%C3%ADas,+Nay./@20.7526802,-105.4035932,12z/data=!4m8!4m7!1m0!1m5!1m1!1s0x842140c08a9badd7:0x1afdb61ba22bc63e!2m2!1d-105.3334731!2d20.7526374?entry=ttu" target="_blank">Ver ubicacion</a>
    </div>
    <div class="card">
        <img src="img/restaurantes/Bahia de banderas/armando.jpg" alt="">
        <h2 class="hotel-name">Armando's Place</h2>
        <h3>Restaurante</h3>
        <h3 style="color: rgb(0, 58, 247);">Direccion: Francisco I. Madero 34, Zona Dorada, Bucerías, Nay.</h3>
        <h4 style="color: rgb(0, 18, 78);">De lunes a domingo de 12:00 pm a 10:00 pm</h4>
        <h3 class="numero">Telefono: 322 728 9515</h3>
        <a href="https://www.google.com/maps?opi=89978449&lqi=ChtBcm1hbmRvJ3MgUGxhY2UgZGUgYmFuZGVyYXNIyOeI3pSrgIAIWiMQAxgAGAEiG2FybWFuZG8ncyBwbGFjZSBkZSBiYW5kZXJhc5IBCnJlc3RhdXJhbnSqAVwKCC9tLzAzMTIwEAEqDCIIYmFuZGVyYXMoDjIfEAEiGxBnkamRR7Sb7npO1Zhb2NQzg3Jn1lohr-qKyTIfEAIiG2FybWFuZG8ncyBwbGFjZSBkZSBiYW5kZXJhcw&phdesc=gwaEx47hxnU&vet=12ahUKEwjPk_bhuZmAAxXdRjABHc7_AScQ8UF6BAgFEBg..i&lei=xyW3ZI-UN92NwbkPzv-HuAI&cs=1&um=1&ie=UTF-8&fb=1&gl=mx&sa=X&geocode=KTOMQ16VQCGEMc0Mc6XRC7l0&daddr=Francisco+I.+Madero+34,+Zona+Dorada,+63732+Bucer%C3%ADas,+Nay." target="_blank">Ver ubicacion</a>
    </div>
</div>
<br>
<br>
<div class="container">
    <div class="card">
        <img src="img/restaurantes/Bahia de banderas/mezogiootno.jpeg" alt="">
        <h2 class="hotel-name">MEZZOGIORNO</h2>
        <h3>Restaurante italiano</h3>
        <h3 style="color: rgb(0, 58, 247);">Direccion: Av Pacífico 33, Centro, Bucerías, Nay.</h3>
        <h4 style="color: rgb(0, 18, 78);">De martes a sábado de 6:00 pm a 11:00 pm</h4>
        <h3 class="numero">Telefono: 329 298 0350</h3>
        <a href="https://www.google.com/maps?opi=89978449&lqi=CiBNRVpaT0dJT1JOTyBlbiBiYWhpYSBkZSBiYW5kZXJhc0iVgdn75oCAgAhaLBAAGAAiIG1lenpvZ2lvcm5vIGVuIGJhaGlhIGRlIGJhbmRlcmFzKgQIAhAAkgESaXRhbGlhbl9yZXN0YXVyYW50qgFaEAEqDyILbWV6em9naW9ybm8oDjIfEAEiG1QWhke35akQoJ97hlODw95boA4aP_UDT_5_NzIkEAIiIG1lenpvZ2lvcm5vIGVuIGJhaGlhIGRlIGJhbmRlcmFz&phdesc=b87aIRYHYsc&vet=12ahUKEwiszc6Su5mAAxWRTTABHXyAAjoQ8UF6BAgFEBg..i&lei=Oie3ZKzIG5GbwbkP_ICK0AM&cs=1&um=1&ie=UTF-8&fb=1&gl=mx&sa=X&geocode=KR0yeOeTQCGEMUHnYvBjs_vt&daddr=Av+Pac%C3%ADfico+33,+Centro,+63732+Bucer%C3%ADas,+Nay." target="_blank">Ver ubicacion</a>
    </div>
    <div class="card">
        <img src="img/restaurantes/Bahia de banderas/kenshi.jpg" alt="">
        <h2 class="hotel-name">Kensho</h2>
        <h3>Restaurante tailandés</h3>
        <h3 style="color: rgb(0, 58, 247);">Direccion: Calle Lázaro Cárdenas 108, Bucerías, Nay.</h3>
        <h4 style="color: rgb(0, 18, 78);">De miercoles a domingo de 3:00 pm a las 10:00 pm</h4>
        <h3 class="numero">Telefono: 329 298 1324</h3>
        <a href="https://www.google.com/maps/dir//Calle+L%C3%A1zaro+C%C3%A1rdenas+108,+63732+Bucer%C3%ADas,+Nay./@20.7501145,-105.4012276,12z/data=!4m8!4m7!1m0!1m5!1m1!1s0x842140c00d6470ff:0xbee21958a23adba7!2m2!1d-105.3311872!2d20.7501287?entry=ttu" target="_blank">Ver ubicacion</a>
    </div>
    <div class="card">
        <img src="img/restaurantes/Bahia de banderas/brujo playa.jpg" alt="">
        <h2 class="hotel-name">El Brujo Playa</h2>
        <h3>Marisquería</h3>
        <h3 style="color: rgb(0, 58, 247);">Direccion:</h3>
        <h4 style="color: rgb(0, 18, 78);">De lunes a domingo de 11:00 am a 9:00 pm</h4>
        <h3 class="numero">Telefono: 329 298 1396</h3>
        <a href="https://www.google.com/maps?opi=89978449&lqi=CiNFbCBCcnVqbyBQbGF5YSBlbiBiYWhpYSBkZSBiYW5kZXJhc0iBl6CU96qAgAhaOxAAEAEQAhgAGAEYAiIjZWwgYnJ1am8gcGxheWEgZW4gYmFoaWEgZGUgYmFuZGVyYXMqCAgCEAAQARACkgESc2VhZm9vZF9yZXN0YXVyYW50qgFgEAEqEiIOZWwgYnJ1am8gcGxheWEoDjIfEAEiGyptabTeoGDUCthb2NvqoIYQiwJKel1ii_uEZTInEAIiI2VsIGJydWpvIHBsYXlhIGVuIGJhaGlhIGRlIGJhbmRlcmFz&phdesc=w_sEKUrTqHI&vet=12ahUKEwinuI-lvJmAAxUtg4QIHXLMAzQQ8UF6BAgFEBg..i&lei=bSi3ZOfNKq2GkvQP8piPoAM&cs=1&um=1&ie=UTF-8&fb=1&gl=mx&sa=X&geocode=KYUqv3aUQCGEMfqvVePUAzOb&daddr=Av+Pac%C3%ADfico+15,+63732+Bucer%C3%ADas,+Nay." target="_blank">Ver ubicacion</a>
    </div>
</div>
<br>
<br>
<div class="container">
    <div class="card">
        <img src="img/restaurantes/Bahia de banderas/culis.png" alt="">
        <h2 class="hotel-name">Culi's Restaurant & Bar</h2>
        <h3>Restaurante mediterráneo</h3>
        <h3 style="color: rgb(0, 58, 247);">Direccion:  5 de Mayo, La unidad, Bucerías, Nay.</h3>
        <h4 style="color: rgb(0, 18, 78);">De miercoles a lunes de 5:00 am a 10:00 pm</h4>
        <h3 class="numero">Telefono: 322 159 6929</h3>
        <a href="https://www.google.com/maps/dir//5+de+Mayo,+La+unidad,+63732+Bucer%C3%ADas,+Nay./@20.7566696,-105.4029087,12z/data=!4m8!4m7!1m0!1m5!1m1!1s0x842140bf07d8cb2b:0x9ed561fe75d158f1!2m2!1d-105.3328614!2d20.756681?entry=ttu" target="_blank">Ver ubicacion</a>
    </div>
    <div class="card">
        <img src="img/restaurantes/Bahia de banderas/toscana.jpg" alt="">
        <h2 class="hotel-name">Toscana Mia</h2>
        <h3>Restaurante italiano</h3>
        <h3 style="color: rgb(0, 58, 247);">Direccion: Miguel Hidalgo 25, Centro, Bucerías, Nay.</h3>
        <h4 style="color: rgb(0, 18, 78);">De martes a sabado de 2:30 pm a las 9:30 pm</h4>
        <h3 class="numero">Telefono: 329 298 1525</h3>
        <a href="https://www.google.com/maps?opi=89978449&lqi=CiBUb3NjYW5hIE1pYSBlbiBiYWhpYSBkZSBiYW5kZXJhc0imp4Tls4-AgAhaMhAAEAEYABgBIiB0b3NjYW5hIG1pYSBlbiBiYWhpYSBkZSBiYW5kZXJhcyoGCAIQABABkgESaXRhbGlhbl9yZXN0YXVyYW50qgFaEAEqDyILdG9zY2FuYSBtaWEoDjIfEAEiGwd7mCSFhJZubyksR8CN_NNVdSf9N-Nl3eZ5bDIkEAIiIHRvc2NhbmEgbWlhIGVuIGJhaGlhIGRlIGJhbmRlcmFz&phdesc=KIsNYo3U-JA&vet=12ahUKEwiHjozFvpmAAxVJRDABHZvGASgQ8UF6BAgFEBg..i&lei=ySq3ZMeFJsmIwbkPm42HwAI&cs=1&um=1&ie=UTF-8&fb=1&gl=mx&sa=X&geocode=KQtS5D-UQCGEMZBQjey5mvzD&daddr=Miguel+Hidalgo+25,+Centro,+63732+Bucer%C3%ADas,+Nay." target="_blank">Ver ubicacion</a>
    </div>
    <div class="card">
        <img src="img/restaurantes/Bahia de banderas/mr fish.jpg" alt="">
        <h2 class="hotel-name">Mr. & Mrs. Fish</h2>
        <h3>Marisquería</h3>
        <h3 style="color: rgb(0, 58, 247);">Direccion: Miguel Hidalgo 12, Centro, Bucerías, Nay.</h3>
        <h4 style="color: rgb(0, 18, 78);">De lunes a sabado de 12:00 pm a 9:00 pm</h4>
        <h3 class="numero">Telefono: 322 138 9581</h3>
        <a href="https://www.google.com/maps/dir//Miguel+Hidalgo+12,+Centro,+63732+Bucer%C3%ADas,+Nay./@20.7572381,-105.4122089,12z/data=!4m8!4m7!1m0!1m5!1m1!1s0x84214094743fffff:0xfe15f23526f9ad76!2m2!1d-105.3421638!2d20.7572486?entry=ttu" target="_blank">Ver ubicacion</a>
    </div>
</div>
<br>
<br>
<div class="container">
    <div class="card">
        <img src="img/restaurantes/Bahia de banderas/creperia.jpg" alt="">
        <h2 class="hotel-name">Casa Triskell CREPERIE BRETONNE</h2>
        <h3>Crepería</h3>
        <h3 style="color: rgb(0, 58, 247);">Direccion: Calle Lázaro Cárdenas 500 B, Zona Dorada, Bucerías, Nay.</h3>
        <h4 style="color: rgb(0, 18, 78);">De lunes a sábado de 12:00 pm a 9:00 pm</h4>
        <h3 class="numero">Telefono: 322 120 5041</h3>
        <a href="https://www.google.com/maps/dir//Calle+L%C3%A1zaro+C%C3%A1rdenas+500+B,+Zona+Dorada,+63732+Bucer%C3%ADas,+Nay./@20.7507,-105.4019466,12z/data=!4m8!4m7!1m0!1m5!1m1!1s0x842141010a617e67:0x4b5aa5c0c1201fdd!2m2!1d-105.3319425!2d20.7506718?entry=ttu" target="_blank">Ver ubicacion</a>
    </div>
    <div class="card">
        <img src="img/restaurantes/Bahia de banderas/mmguaz.jpeg" alt="">
        <h2 class="hotel-name">Mmugazz Bistro</h2>
        <h3>Restaurante</h3>
        <h3 style="color: rgb(0, 58, 247);">Direccion: Calle Lázaro Cárdenas 74, Zona Dorada, Bucerías, Nay.</h3>
        <h4 style="color: rgb(0, 18, 78);">De martes a domingo de 2:30 pm a las 10:00 pm</h4>
        <h3 class="numero">Telefono: 329 298 0241</h3>
        <a href="https://www.google.com/maps?opi=89978449&lqi=CiNNbXVnYXp6IEJpc3RybyBlbiBiYWhpYSBkZSBiYW5kZXJhc0jE5ZeS17aAgAhaNRAAEAEYABgBIiNtbXVnYXp6IGJpc3RybyBlbiBiYWhpYSBkZSBiYW5kZXJhcyoGCAIQABABkgEKcmVzdGF1cmFudA&phdesc=XpXHsrA6_bQ&vet=12ahUKEwjT1viswJmAAxUbk4QIHQluAhcQ8UF6BAgFEBg..i&lei=ryy3ZJPDM5umkvQPidyJuAE&cs=1&um=1&ie=UTF-8&fb=1&gl=mx&sa=X&geocode=KaEvgQf_QSGEMXjOZVj4V75Z&daddr=Calle+L%C3%A1zaro+C%C3%A1rdenas+74,+Zona+Dorada,+63732+Bucer%C3%ADas,+Nay." target="_blank">Ver ubicacion</a>
    </div>
    <div class="card">
        <img src="img/restaurantes/Bahia de banderas/chivirp.jpg" alt="">
        <h2 class="hotel-name">Mariscos Bucerías El Chivero</h2>
        <h3>Marisquería</h3>
        <h3 style="color: rgb(0, 58, 247);">Direccion: Av Pacífico 9, centro, Bucerías, Nay.</h3>
        <h4 style="color: rgb(0, 18, 78);">De lunes a domingo de 10:00 pm a 10:00 pm</h4>
        <h3 class="numero">Telefono: 329 111 2233</h3>
        <a href="https://www.google.com/maps/dir//Av+Pac%C3%ADfico+9,+centro,+63732+Bucer%C3%ADas,+Nay./@20.7566608,-105.4118164,12z/data=!4m8!4m7!1m0!1m5!1m1!1s0x842140947aef3013:0x5ccc827749ba9014!2m2!1d-105.3417316!2d20.7567216?entry=ttu" target="_blank">Ver ubicacion</a>
    </div>
</div>
<br>
<br>
<div class="container">
    <div class="card">
        <img src="img/restaurantes/Bahia de banderas/matsuo.jpg" alt="">
        <h2 class="hotel-name">Matsuri Koi</h2>
        <h3>Restaurante japonés</h3>
        <h3 style="color: rgb(0, 58, 247);">Direccion: Av. Héroes de Nacozari 25, Los Amores, Centro, Bucerías, Nay.</h3>
        <h4 style="color: rgb(0, 18, 78);">De lunes a domingo de 2:00 pm a 9:45 pm</h4>
        <h3 class="numero">Telefono: 329 298 3800</h3>
        <a href="https://www.google.com/maps/dir//Av.+H%C3%A9roes+de+Nacozari+25,+Los+Amores,+Centro,+63732+Bucer%C3%ADas,+Nay./@20.7610864,-105.4154581,12z/data=!4m8!4m7!1m0!1m5!1m1!1s0x84214091a8110afb:0x911a97756200e331!2m2!1d-105.3454177!2d20.7611006?entry=ttu" target="_blank">Ver ubicacion</a>
    </div>
    <div class="card">
        <img src="img/restaurantes/Bahia de banderas/blue.jpg" alt="">
        <h2 class="hotel-name">The Blue Shrimp</h2>
        <h3>Restaurante</h3>
        <h3 style="color: rgb(0, 58, 247);">Direccion: Blvrd. Nayarit 208 Jarretaderas Jarretaderas.</h3>
        <h4 style="color: rgb(0, 18, 78);">De lunes a domingo de 11:30 am a las 10:00 pm</h4>
        <h3 class="numero">Telefono: 322 222 1059</h3>
        <a href="https://www.google.com/maps/dir//Blvrd.+Nayarit+208+Jarretaderas+Jarretaderas,+63735+Nuevo+Vallarta,+Nay./@20.6937127,-105.3502333,12z/data=!4m8!4m7!1m0!1m5!1m1!1s0x8421469c93f6583d:0xb8b2b8a25ba1e186!2m2!1d-105.2801929!2d20.6937269?entry=ttu" target="_blank">Ver ubicacion</a>
    </div>
    <div class="card">
        <img src="img/restaurantes/Bahia de banderas/barracuda.jpg" alt="">
        <h2 class="hotel-name">Restaurant El Barracuda</h2>
        <h3>Restaurante</h3>
        <h3 style="color: rgb(0, 58, 247);">Direccion: Blvrd de Nayarit 708, Villa 5, Nuevo Vallarta, Nay.</h3>
        <h4 style="color: rgb(0, 18, 78);">De lunes a domingo de 1:00 pm a 11:00 pm</h4>
        <h3 class="numero">Telefono: 322 297 6622</h3>
        <a href="https://www.google.com/maps?opi=89978449&lqi=CixSZXN0YXVyYW50IEVsIEJhcnJhY3VkYSBlbiBiYWhpYSBkZSBiYW5kZXJhc0jWpcXy76qAgAhaRBAAEAEQAhgAGAEYAiIscmVzdGF1cmFudCBlbCBiYXJyYWN1ZGEgZW4gYmFoaWEgZGUgYmFuZGVyYXMqCAgCEAAQARACkgEKcmVzdGF1cmFudKoBchABKhsiF3Jlc3RhdXJhbnQgZWwgYmFycmFjdWRhKA4yHxABIhtWkIzqp-E8tzjvQAz6pB4zCKKYhXRpq9KpT-gyMBACIixyZXN0YXVyYW50IGVsIGJhcnJhY3VkYSBlbiBiYWhpYSBkZSBiYW5kZXJhcw&phdesc=SuftHMpqaKs&vet=12ahUKEwiWlOTCwpmAAxU1QjABHebwCSwQ8UF6BAgFEFg..i&lei=9i63ZJbBH7WEwbkP5uGn4AI&cs=1&um=1&ie=UTF-8&fb=1&gl=mx&sa=X&geocode=Kc_XuOQfRCGEMXy7Nyp6FQ_4&daddr=Blvrd+de+Nayarit+708,+Villa+5,+63737+Nuevo+Vallarta,+Nay." target="_blank">Ver ubicacion</a>
    </div>
</div>
<br>
<br>
<div class="container">
    <div class="card">
        <img src="img/restaurantes/Bahia de banderas/estero.jpg" alt="">
        <h2 class="hotel-name">Restaurante El Estero Nuevo Vallarta</h2>
        <h3>Restaurante</h3>
        <h3 style="color: rgb(0, 58, 247);">Direccion: Blvrd de Nayarit #79, Nuevo Vallarta, Nay.</h3>
        <h4 style="color: rgb(0, 18, 78);">De lunes a domingo de 2:00 pm a 9:00 pm</h4>
        <h3 class="numero">Telefono: </h3>
        <a href="https://www.google.com/maps?opi=89978449&lqi=CjlSZXN0YXVyYW50ZSBFbCBFc3Rlcm8gTnVldm8gVmFsbGFydGEgZW4gYmFoaWEgZGUgYmFuZGVyYXNI3Lyj3J60gIAIWlEQABABEAIQBhAHEAgYABgBGAIYAxgEIjlyZXN0YXVyYW50ZSBlbCBlc3Rlcm8gbnVldm8gdmFsbGFydGEgZW4gYmFoaWEgZGUgYmFuZGVyYXOSAQpyZXN0YXVyYW50qgGMARABKigiJHJlc3RhdXJhbnRlIGVsIGVzdGVybyBudWV2byB2YWxsYXJ0YSgOMh8QASIbQzf5HOY7kW9dPnIRAKOeBw-xzPC8n5S7uQnPMj0QAiI5cmVzdGF1cmFudGUgZWwgZXN0ZXJvIG51ZXZvIHZhbGxhcnRhIGVuIGJhaGlhIGRlIGJhbmRlcmFz&phdesc=gUKi5Fsnhec&vet=12ahUKEwiJg4W4w5mAAxXZVTABHX8vAS0Q8UF6BAgFEBg..i&lei=7C-3ZIndGdmrwbkP_96E6AI&cs=1&um=1&ie=UTF-8&fb=1&gl=mx&sa=X&geocode=KZVYElFmRyGEMUnlT1KSvyO6&daddr=Blvrd+de+Nayarit+%2379,+63732+Nuevo+Vallarta,+Nay." target="_blank">Ver ubicacion</a>
    </div>
    <div class="card">
        <img src="img/restaurantes/Bahia de banderas/nicksan.png" alt="">
        <h2 class="hotel-name">Nicksan Nuevo Vallarta</h2>
        <h3>Restaurante japonés</h3>
        <h3 style="color: rgb(0, 58, 247);">Direccion: Paseo de los Cocoteros 53, Zona Hotelera, Nuevo Vallarta, Nay.</h3>
        <h4 style="color: rgb(0, 18, 78);">De lunes a domingo de 2:00 pm a las 10:00 pm</h4>
        <h3 class="numero">Telefono: 322 297 2464</h3>
        <a href="https://www.google.com/maps?opi=89978449&lqi=CitOaWNrc2FuIE51ZXZvIFZhbGxhcnRhIGVuIGJhaGlhIGRlIGJhbmRlcmFzSPDd4M6sj4CACFpDEAAQARACGAAYARgCIituaWNrc2FuIG51ZXZvIHZhbGxhcnRhIGVuIGJhaGlhIGRlIGJhbmRlcmFzKggIAhAAEAEQApIBE2phcGFuZXNlX3Jlc3RhdXJhbnSqAXAQASoaIhZuaWNrc2FuIG51ZXZvIHZhbGxhcnRhKA4yHxABIhsxbMM3kQX9nN_o7P0pYKjwQTDw9KAATasS1fEyLxACIituaWNrc2FuIG51ZXZvIHZhbGxhcnRhIGVuIGJhaGlhIGRlIGJhbmRlcmFz&phdesc=DwccPQypcIA&vet=12ahUKEwiTtP3ew5mAAxV4fDABHcnoBiQQ8UF6BAgFEBg..i&lei=PjC3ZJOdBfj4wbkPydGboAI&cs=1&um=1&ie=UTF-8&fb=1&gl=mx&sa=X&geocode=KYNnqi_PRiGEMRQ_4xIFWSic&daddr=Paseo+de+los+Cocoteros+53,+Zona+Hotelera,+63732+Nuevo+Vallarta,+Nay." target="_blank">Ver ubicacion</a>
    </div>
    <div class="card">
        <img src="img/restaurantes/Bahia de banderas/bistro.jpg" alt="">
        <h2 class="hotel-name">Bistro Bleu at Vidanta Nuevo Vallarta</h2>
        <h3>Restaurante</h3>
        <h3 style="color: rgb(0, 58, 247);">Direccion:  Boulevard Riviera Nayarit 254, Nuevo Vallarta, Nay.</h3>
        <h4 style="color: rgb(0, 18, 78);">De lunes a domingo de 7:00 am a 11:00 pm</h4>
        <h3 class="numero">Telefono: 322 226 4000</h3>
        <a href="https://www.google.com/maps/dir//Boulevard+Riviera+Nayarit+254,+63735+Nuevo+Vallarta,+Nay./@20.6803279,-105.3556498,12z/data=!4m8!4m7!1m0!1m5!1m1!1s0x8421450b99f37117:0xa0a98d361a22dfa8!2m2!1d-105.2856094!2d20.680342?entry=ttu" target="_blank">Ver ubicacion</a>
    </div>
</div>
<br>
<br>
<div class="container">
    <div class="card">
        <img src="img/restaurantes/Bahia de banderas/ediies.jpg" alt="">
        <h2 class="hotel-name">Eddie's Place Nopal Beach</h2>
        <h3>Restaurante</h3>
        <h3 style="color: rgb(0, 58, 247);">Direccion: Boulevard Nayarit 70, Local 1-3, P.º de la Marina, Nuevo Vallarta, Nay.</h3>
        <h4 style="color: rgb(0, 18, 78);">De lunes a domingo de 8:00 am a 10:00 pm</h4>
        <h3 class="numero">Telefono: 322 297 4568</h3>
        <a href="https://www.google.com/maps/dir//Boulevard+Nayarit+70,+Local+1-3,+P.%C2%BA+de+la+Marina,+63735+Nuevo+Vallarta,+Nay./@20.6881635,-105.3627225,12z/data=!4m8!4m7!1m0!1m5!1m1!1s0x842146a080853cb3:0xb3335067d14b9df4!2m2!1d-105.2926821!2d20.6881776?entry=ttu" target="_blank">Ver ubicacion</a>
    </div>
    <div class="card">
        <img src="img/restaurantes/Bahia de banderas/riviera.jpg" alt="">
        <h2 class="hotel-name">Riviera Grill</h2>
        <h3>Parrilla</h3>
        <h3 style="color: rgb(0, 58, 247);">Direccion: Paseo de los Cocoteros 35, Nuevo Vallarta, Nay.</h3>
        <h4 style="color: rgb(0, 18, 78);">De lunes a domingo de 8:00 am a las 11:00 pm</h4>
        <h3 class="numero">Telefono: 322 297 6545</h3>
        <a href="https://www.google.com/maps/dir//Paseo+de+los+Cocoteros+35,+63735+Nuevo+Vallarta,+Nay./@20.7021865,-105.3671298,12z/data=!4m8!4m7!1m0!1m5!1m1!1s0x842146ba4d18df3d:0x7e80f7d8215e926f!2m2!1d-105.2970894!2d20.7022007?entry=ttu" target="_blank">Ver ubicacion</a>
    </div>
    <div class="card">
        <img src="img/restaurantes/Bahia de banderas/sazon de ama.jpg" alt="">
        <h2 class="hotel-name">El Sazón de Amá</h2>
        <h3>Restaurante</h3>
        <h3 style="color: rgb(0, 58, 247);">Direccion: Paseo de los Cocoteros #85-Interior J2 y J3, Nuevo Vallarta, Nay.</h3>
        <h4 style="color: rgb(0, 18, 78);">De lunes a domingo de 8:00 am a 10:00 pm</h4>
        <h3 class="numero">Telefono: 329 111 1772</h3>
        <a href="https://www.google.com/maps/dir//Paseo+de+los+Cocoteros+%2385-Interior+J2+y+J3,+63735+Nuevo+Vallarta,+Nay./@20.6947774,-105.3644646,12z/data=!4m8!4m7!1m0!1m5!1m1!1s0x8421470d2d220c89:0xe6de1364dce5b270!2m2!1d-105.2944242!2d20.6947916?entry=ttu" target="_blank">Ver ubicacion</a>
    </div>
</div>
<br><br>
<div class="container">
    <div class="card">
        <img src="img/restaurantes/Bahia de banderas/la cantina.jpg" alt="">
        <h2 class="hotel-name">La Cantina at Vidanta Nuevo Vallarta</h2>
        <h3>Restaurante</h3>
        <h3 style="color: rgb(0, 58, 247);">Direccion: Blvrd Riviera Nayarit 254, Nuevo Vallarta, Nay.</h3>
        <h4 style="color: rgb(0, 18, 78);">De lunes a sábado de 12:00 pm a 11:30 pm</h4>
        <h3 class="numero">Telefono: 322 226 4000</h3>
        <a href="https://www.google.com/maps/dir//Blvrd+Riviera+Nayarit+254,+63735+Nuevo+Vallarta,+Nay./@20.6834068,-105.3561682,12z/data=!4m8!4m7!1m0!1m5!1m1!1s0x84214421701360f9:0xe8de7578100aac47!2m2!1d-105.2861278!2d20.6834209?entry=ttu" target="_blank">Ver ubicacion</a>
    </div>
    <div class="card">
        <img src="img/restaurantes/Bahia de banderas/porto bello.jpg" alt="">
        <h2 class="hotel-name">Porto Bello Bistro and Lounge</h2>
        <h3>Restaurante italiano</h3>
        <h3 style="color: rgb(0, 58, 247);">Direccion: Plaza Bussines Center Blvd. Nayarit #2 Pte. Local 3.</h3>
        <h4 style="color: rgb(0, 18, 78);">De lunes a domingo de 2:00 pm a las 11:00 pm</h4>
        <h3 class="numero">Telefono: 322 297 6719</h3>
        <a href="https://www.google.com/maps?opi=89978449&lqi=CjJQb3J0byBCZWxsbyBCaXN0cm8gYW5kIExvdW5nZSBlbiBiYWhpYSBkZSBiYW5kZXJhc0jD35mh8YCAgAhaVhAAEAEQAhADEAQYABgBGAIYAxgEIjJwb3J0byBiZWxsbyBiaXN0cm8gYW5kIGxvdW5nZSBlbiBiYWhpYSBkZSBiYW5kZXJhcyoMCAIQABABEAIQAxAEkgESaXRhbGlhbl9yZXN0YXVyYW50qgF-EAEqISIdcG9ydG8gYmVsbG8gYmlzdHJvIGFuZCBsb3VuZ2UoDjIfEAEiG7LkZzU_UqUB6QgIldsvu3Pxwfi3RaoIQLyEqzI2EAIiMnBvcnRvIGJlbGxvIGJpc3RybyBhbmQgbG91bmdlIGVuIGJhaGlhIGRlIGJhbmRlcmFz&phdesc=i7fKXfLmwmk&vet=12ahUKEwiLvYfCxpmAAxXnloQIHSBEAB0Q8UF6BAgFEBg..i&lei=JjO3ZIuSLeetkvQPoIiB6AE&cs=1&um=1&ie=UTF-8&fb=1&gl=mx&sa=X&geocode=KZ-fvQ8gRCGEMSLe5m5CPq55&daddr=Nuevo+Vallarta+Plaza+Bussines+Center+Blvd.+Nayarit+%232+Pte.+Local+3+Nuevo+Vallarta,+63735+Puerto+Vallarta,+Nay." target="_blank">Ver ubicacion</a>
    </div>
    <div class="card">
        <img src="img/restaurantes/Bahia de banderas/saku suchi.jpg" alt="">
        <h2 class="hotel-name">Saku Sushi Bar</h2>
        <h3>Restaurante de sushi</h3>
        <h3 style="color: rgb(0, 58, 247);">Direccion: Paseo de las Palmas No. 3-Local 30, Nuevo Vallarta, Nay.</h3>
        <h4 style="color: rgb(0, 18, 78);">De martes a domingo de 1:30 pm a 11:30 pm</h4>
        <h3 class="numero">Telefono: 322 113 3277</h3>
        <a href="https://www.google.com/maps?opi=89978449&lqi=CiNTYWt1IFN1c2hpIEJhciBlbiBiYWhpYSBkZSBiYW5kZXJhc0imo7uZvIGAgAhaPRAAEAEQAhgAGAEYAhgFIiNzYWt1IHN1c2hpIGJhciBlbiBiYWhpYSBkZSBiYW5kZXJhcyoICAIQABABEAKSARBzdXNoaV9yZXN0YXVyYW50qgFgEAEqEiIOc2FrdSBzdXNoaSBiYXIoDjIfEAEiG9wsQzqWxtNMXnVeWArw0oATh1PMARhcncjpKDInEAIiI3Nha3Ugc3VzaGkgYmFyIGVuIGJhaGlhIGRlIGJhbmRlcmFz&phdesc=hDBwIiM-T60&vet=12ahUKEwjZ3_6Hx5mAAxWASDABHWNABC8Q8UF6BAgFEBg..i&lei=uTO3ZJmfGICRwbkP44CR-AI&cs=1&um=1&ie=UTF-8&fb=1&gl=mx&sa=X&geocode=KS0VoSSFRiGEMTyogmL0WvPG&daddr=Paseo+de+las+Palmas+No.+3-Local+30,+63735+Nuevo+Vallarta,+Nay." target="_blank">Ver ubicacion</a>
    </div>
</div>
<br><br>
<div class="container">
    <div class="card">
        <img src="img/restaurantes/Bahia de banderas/piaf.jpg" alt="">
        <h2 class="hotel-name">Piaf</h2>
        <h3>Restaurante</h3>
        <h3 style="color: rgb(0, 58, 247);">Direccion: Paseo de los Cocoteros 98, Sur, Nuevo Vallarta, Nay.</h3>
        <h4 style="color: rgb(0, 18, 78);">De lunes a domingo de 6:00 pm a 11:00 pm</h4>
        <h3 class="numero">Telefono: 322 176 0236</h3>
        <a href="https://www.google.com/maps?opi=89978449&lqi=ChlQaWFmIGVuIGJhaGlhIGRlIGJhbmRlcmFzSK3DhOP7rICACFofEAAYACIZcGlhZiBlbiBiYWhpYSBkZSBiYW5kZXJhc5IBCnJlc3RhdXJhbnSqAUwQASoIIgRwaWFmKA4yHxABIhtcZLvJvR8BF3CGZGoIVthSRcD7Y193Gjw7X7QyHRACIhlwaWFmIGVuIGJhaGlhIGRlIGJhbmRlcmFz&phdesc=sne2c5N6TXA&vet=12ahUKEwjd58ru0JmAAxXCSzABHSKyBSgQ8UF6BAgFEBg..i&lei=AD63ZN3nHMKXwbkPouSWwAI&cs=1&um=1&ie=UTF-8&fb=1&gl=mx&sa=X&geocode=KYHUzv_uAJ6GMTBgn501W-C5&daddr=Paseo+de+los+Cocoteros+98,+Sur,+63735+Nuevo+Vallarta,+Nay." target="_blank">Ver ubicacion</a>
    </div>
    <div class="card">
        <img src="img/restaurantes/Bahia de banderas/MOZZA_3.jpg" alt="">
        <h2 class="hotel-name">Mozzamare</h2>
        <h3>Restaurante</h3>
        <h3 style="color: rgb(0, 58, 247);">Direccion: Avenida Paseo Cocoteros lote 53 Villa 8-11.</h3>
        <h4 style="color: rgb(0, 18, 78);">De lunes a domingo de 8:00 am a 11:00 am y de 1:00 pm a 5:00 pm</h4>
        <h3 class="numero">Telefono: 322 226 9745</h3>
        <a href="https://www.google.com/maps?opi=89978449&lqi=Ch5Nb3p6YW1hcmUgZW4gYmFoaWEgZGUgYmFuZGVyYXNI9sjbn6-vgIAIWioQABgAIh5tb3p6YW1hcmUgZW4gYmFoaWEgZGUgYmFuZGVyYXMqBAgCEACSAQpyZXN0YXVyYW50qgFWEAEqDSIJbW96emFtYXJlKA4yHxABIhsxbZtX_PRhdHSYyo7e2mbcoLyX5rzVTZccOh0yIhACIh5tb3p6YW1hcmUgZW4gYmFoaWEgZGUgYmFuZGVyYXM&phdesc=m47IKLxZYFI&vet=12ahUKEwjGkc-k0pmAAxWrSzABHbNlASsQ8UF6BAgFEBg..i&lei=fj-3ZMbaDauXwbkPs8uF2AI&cs=1&um=1&ie=UTF-8&fb=1&gl=mx&sa=X&geocode=KY1QUW7ORiGEMV7-26G4pLQc&daddr=Avenida+Paseo+Cocoteros+lote+53+Villa+8-11,+63732+Nuevo+Vallarta,+Nay." target="_blank">Ver ubicacion</a>
    </div>
    <div class="card">
        <img src="img/restaurantes/Bahia de banderas/del lago.jpg" alt="">
        <h2 class="hotel-name">Café del Lago at Vidanta Nuevo Vallarta</h2>
        <h3>Restaurante</h3>
        <h3 style="color: rgb(0, 58, 247);">Direccion: Blvrd Riviera Nayarit 254, Nuevo Vallarta, Nay.</h3>
        <h4 style="color: rgb(0, 18, 78);">De lunes a domingo de 7:00 am a 12:00 pm</h4>
        <h3 class="numero">Telefono: 322 226 4000</h3>
        <a href="https://www.google.com/maps?opi=89978449&lqi=Cj1DYWbDqSBkZWwgTGFnbyBhdCBWaWRhbnRhIE51ZXZvIFZhbGxhcnRhIGVuIGJhaGlhIGRlIGJhbmRlcmFzIgOIAQFI77mYz_GsgIAIWl0QABABEAIQAxAEEAgQCRAKGAAYARgCGAMYBBgFGAYiPWNhZsOpIGRlbCBsYWdvIGF0IHZpZGFudGEgbnVldm8gdmFsbGFydGEgZW4gYmFoaWEgZGUgYmFuZGVyYXOSAQpyZXN0YXVyYW50qgGUARABKiwiKGNhZsOpIGRlbCBsYWdvIGF0IHZpZGFudGEgbnVldm8gdmFsbGFydGEoDjIfEAEiG4EOLuUfItXOJjQsMyJBs1zb57SWZrbmSvTdSjJBEAIiPWNhZsOpIGRlbCBsYWdvIGF0IHZpZGFudGEgbnVldm8gdmFsbGFydGEgZW4gYmFoaWEgZGUgYmFuZGVyYXM&vet=12ahUKEwi4lMjk0pmAAxUvlIQIHVfgBSgQ8UF6BAgGEBg..i&lei=BEC3ZLiCFK-okvQP18CXwAI&cs=1&um=1&ie=UTF-8&fb=1&gl=mx&sa=X&geocode=KfXwwA4jRCGEMcbmWV-0Gqqv&daddr=Blvrd+Riviera+Nayarit+254,+63735+Nuevo+Vallarta,+Nay." target="_blank">Ver ubicacion</a>
    </div>
</div>
<br><br>
<div class="container">
    <div class="card">
        <img src="img/restaurantes/Bahia de banderas/patadelefante.jpg" alt="">
        <h2 class="hotel-name">Pata de Elefante Nuevo Vallarta</h2>
        <h3>Restaurante</h3>
        <h3 style="color: rgb(0, 58, 247);">Direccion: Blvd. Nuevo Vallarta 804, Nuevo Vallarta, Nay.</h3>
        <h4 style="color: rgb(0, 18, 78);">De lunes a domingo de 8:30 am a 5:00 pm</h4>
        <h3 class="numero">Telefono: 322 286 9339</h3>
        <a href="https://www.google.com/maps/dir//Blvd.+Nuevo+Vallarta+804,+63735+Nuevo+Vallarta,+Nay./@20.7099866,-105.3612844,12z/data=!4m8!4m7!1m0!1m5!1m1!1s0x8421475de1c0a6e1:0x7b754d0b0d288565!2m2!1d-105.291244!2d20.7100008?entry=ttu" target="_blank">Ver ubicacion</a>
    </div>
    <div class="card">
        <img src="img/restaurantes/Bahia de banderas/insu.jpg" alt="">
        <h2 class="hotel-name">Insu Sky Bar</h2>
        <h3>Bar restaurante</h3>
        <h3 style="color: rgb(0, 58, 247);">Direccion: Av. Paseo Cocoteros Lote 53 Villa 8 11-A, Nuevo Vallarta, Nay.</h3>
        <h4 style="color: rgb(0, 18, 78);">De lunes a domingo de 5:00 pm a las 1:00 am</h4>
        <h3 class="numero">Telefono:  322 226 9740</h3>
        <a href="https://www.google.com/maps/dir//Av.+Paseo+Cocoteros+Lote+53+Villa+8+11-A,+63732+Nuevo+Vallarta,+Nay./@20.7178981,-105.3743501,12z/data=!4m8!4m7!1m0!1m5!1m1!1s0x842146cf23883401:0xfd6ca37d0492e0c8!2m2!1d-105.3043023!2d20.7179179?entry=ttu" target="_blank">Ver ubicacion</a>
    </div>
    <div class="card">
        <img src="img/restaurantes/Bahia de banderas/pepitos.jpg" alt="">
        <h2 class="hotel-name">Pepito's Bar</h2>
        <h3>Restaurante</h3>
        <h3 style="color: rgb(0, 58, 247);">Direccion:  Blvd, Nuevo Vallarta, Nuevo Vallarta, Nay.</h3>
        <h4 style="color: rgb(0, 18, 78);">De martes a domingo de 2:00 pm a 10:00 pm</h4>
        <h3 class="numero">Telefono: 322 297 4950</h3>
        <a href="https://www.google.com/maps/dir//Blvd,+Nuevo+Vallarta,+63735+Nuevo+Vallarta,+Nay./@20.7003196,-105.3462793,12z/data=!4m8!4m7!1m0!1m5!1m1!1s0x8421472d6c207e7b:0x5455dbaad93eaa9!2m2!1d-105.2762403!2d20.7003353?entry=ttu" target="_blank">Ver ubicacion</a>
    </div>
</div>
<br><br>
<div class="container">
    <div class="card">
        <img src="img/restaurantes/Bahia de banderas/destock.jpg" alt="">
        <h2 class="hotel-name">Dstock deck & bistro</h2>
        <h3>Restaurante</h3>
        <h3 style="color: rgb(0, 58, 247);">Direccion: Paseo de los Cocoteros 53, Zona Hotelera, 63732 Nuevo Vallarta, Nay.</h3>
        <h4 style="color: rgb(0, 18, 78);">De lunes a sábado de 8:00 am a 4:00 pm</h4>
        <h3 class="numero">Telefono: 322 226 9765</h3>
        <a href="https://www.google.com/maps/dir//Paseo+de+los+Cocoteros+53,+Zona+Hotelera,+63732+Nuevo+Vallarta,+Nay./@20.716511,-105.3738104,12z/data=!4m8!4m7!1m0!1m5!1m1!1s0x842146cf2f2c0317:0xe9f8125c56bc1514!2m2!1d-105.30377!2d20.7165252?entry=ttu" target="_blank">Ver ubicacion</a>
    </div>
    <div class="card">
        <img src="img/restaurantes/Bahia de banderas/buisono.JPG" alt="">
        <h2 class="hotel-name">Buonissimo Gourmet</h2>
        <h3>Restaurante</h3>
        <h3 style="color: rgb(0, 58, 247);">Direccion: Plaza 3.14 Ave., Paseo De Las Palmas 3 unit 37, Nuevo Vallarta, Nay.</h3>
        <h4 style="color: rgb(0, 18, 78);">De lunes a domingo de 9:00 am a 11:00 pm</h4>
        <h3 class="numero">Telefono: 322 297 7841</h3>
        <a href="https://www.google.com/maps/dir//Plaza+3.14+Ave.,+Paseo+De+Las+Palmas+3+unit+37,+63735+Nuevo+Vallarta,+Nay./@20.7081888,-105.3634276,12z/data=!4m8!4m7!1m0!1m5!1m1!1s0x8421473f658deb99:0x85422b881226fc70!2m2!1d-105.2933872!2d20.708203?entry=ttu" target="_blank">Ver ubicacion</a>
    </div>
    <div class="card">
        <img src="img/restaurantes/Bahia de banderas/osais.jpg" alt="">
        <h2 class="hotel-name">Oasis Bay Nuevo Vallarta</h2>
        <h3>Marisquería</h3>
        <h3 style="color: rgb(0, 58, 247);">Direccion: Blvrd de Nayarit 400, Flamingos, Nuevo Vallarta, Nay.</h3>
        <h4 style="color: rgb(0, 18, 78);">De lunes a sabado de 10:00 am a 10:00 pm</h4>
        <h3 class="numero">Telefono: 322 297 1062</h3>
        <a href="https://www.google.com/maps?opi=89978449&lqi=Ci5PYXNpcyBCYXkgTnVldm8gVmFsbGFydGEuIGVuIGJhaGlhIGRlIGJhbmRlcmFzSIii242vrYCACFo_EAAQARACEAMYABgBGAIYAyItb2FzaXMgYmF5IG51ZXZvIHZhbGxhcnRhIGVuIGJhaGlhIGRlIGJhbmRlcmFzkgESc2VhZm9vZF9yZXN0YXVyYW50qgF0EAEqHCIYb2FzaXMgYmF5IG51ZXZvIHZhbGxhcnRhKA4yHxABIhsxBuRAcM9KzLxEgRq_ivxiCwDUxyQw0r25_jQyMRACIi1vYXNpcyBiYXkgbnVldm8gdmFsbGFydGEgZW4gYmFoaWEgZGUgYmFuZGVyYXM&phdesc=UxX1NH0rwcQ&vet=12ahUKEwjM1vfW2ZmAAxVpTTABHdmKCioQ8UF6BAgFEBg..i&lei=Pke3ZMy_MOmawbkP2ZWq0AI&cs=1&um=1&ie=UTF-8&fb=1&gl=mx&sa=X&geocode=KVd7TG2oRSGEMSLpncwbq_7x&daddr=Blvrd+de+Nayarit+400,+Flamingos,+63735+Nuevo+Vallarta,+Nay." target="_blank">Ver ubicacion</a>
    </div>
</div>
<br><br>
<div class="container">
    <div class="card">
        <img src="img/restaurantes/Bahia de banderas/azul.jpg" alt="">
        <h2 class="hotel-name">Restaurant Azul</h2>
        <h3>Buffet libre</h3>
        <h3 style="color: rgb(0, 58, 247);">Direccion: Paseo de los Cocoteros Sur 98, Nuevo Vallarta, Nay.</h3>
        <h4 style="color: rgb(0, 18, 78);">De lunes a domingo de 7:00 am a 6:00 pm</h4>
        <h3 class="numero">Telefono: 322 176 1067</h3>
        <a href="https://www.google.com/maps?opi=89978449&lqi=CiRSZXN0YXVyYW50IEF6dWwgZW4gYmFoaWEgZGUgYmFuZGVyYXNIrc2N1q2BgIAIWi4QABABGAAYASIkcmVzdGF1cmFudCBhenVsIGVuIGJhaGlhIGRlIGJhbmRlcmFzkgERYnVmZmV0X3Jlc3RhdXJhbnSqAWIQASoTIg9yZXN0YXVyYW50IGF6dWwoDjIfEAEiG078Q38xLA0FaapStmiZqQpVWsN_iuxWTCqDDjIoEAIiJHJlc3RhdXJhbnQgYXp1bCBlbiBiYWhpYSBkZSBiYW5kZXJhcw&phdesc=hWVdEzYiLRM&vet=12ahUKEwjut5W_2pmAAxUaRzABHcDOCAgQ8UF6BAgFEDI..i&lei=GUi3ZK7HF5qOwbkPwJ2jQA&cs=1&um=1&ie=UTF-8&fb=1&gl=mx&sa=X&geocode=KWlwitS5RiGEMRBoIcHmr_ae&daddr=Paseo+de+los+Cocoteros+Sur+98,+63735+Nuevo+Vallarta,+Nay." target="_blank">Ver ubicacion</a>
    </div>
    <div class="card">
        <img src="img/restaurantes/Bahia de banderas/lucca.jpg" alt="">
        <h2 class="hotel-name">Restaurante Lucca</h2>
        <h3>Restaurante italiano</h3>
        <h3 style="color: rgb(0, 58, 247);">Direccion: Paseo de los Cocoteros 98, Sur, Nuevo Vallarta, Nay.</h3>
        <h4 style="color: rgb(0, 18, 78);">De lunes a domingo de 6:00 pm a 11:00 pm</h4>
        <h3 class="numero">Telefono: 322 226 8007</h3>
        <a href="https://www.google.com/maps/dir//Paseo+de+los+Cocoteros+98,+Sur,+63735+Nuevo+Vallarta,+Nay./@20.7066514,-105.3704338,12z/data=!4m8!4m7!1m0!1m5!1m1!1s0x842146b9ced84b73:0x7fe57c352b0f5d70!2m2!1d-105.3003934!2d20.7066656?entry=ttu" target="_blank">Ver ubicacion</a>
    </div>
    <div class="card">
        <img src="img/restaurantes/Bahia de banderas/vidnata.jpg" alt="">
        <h2 class="hotel-name">Quinto at Vidanta Nuevo Vallarta</h2>
        <h3>Restaurante</h3>
        <h3 style="color: rgb(0, 58, 247);">Direccion: Blvrd Riviera Nayarit 254, Nuevo Vallarta, Nay.</h3>
        <h4 style="color: rgb(0, 18, 78);">De lunes a domingo de 6:00 pm a 11:00 pm</h4>
        <h3 class="numero">Telefono: 322 226 4024</h3>
        <a href="https://www.google.com/maps/dir//Blvrd+Riviera+Nayarit+254,+63735+Nuevo+Vallarta,+Nay./@20.6831509,-105.3487666,12z/data=!4m8!4m7!1m0!1m5!1m1!1s0x84214421160b0e5f:0xea4ee7d3c62a142f!2m2!1d-105.2787262!2d20.683165?entry=ttu" target="_blank">Ver ubicacion</a>
    </div>
</div>
<br><br>
<div class="container">
    <div class="card">
        <img src="img/restaurantes/Bahia de banderas/pescador.jpg" alt="">
        <h2 class="hotel-name">Il Pescatore Restorante</h2>
        <h3>Restaurante</h3>
        <h3 style="color: rgb(0, 58, 247);">Direccion: Channel, Nuevo Vallarta, Nay.</h3>
        <h4 style="color: rgb(0, 18, 78);">Abierto las 24 horas</h4>
        <h3 class="numero">Telefono: 322 226 6770</h3>
        <a href="https://www.google.com/maps/dir//Channel,+Nuevo+Vallarta,+Nay./@20.693065,-105.3646612,12z/data=!4m8!4m7!1m0!1m5!1m1!1s0x842146a165675393:0x46e7c504aa78aafb!2m2!1d-105.2946208!2d20.6930792?entry=ttu" target="_blank">Ver ubicacion</a>
    </div>
    <div class="card">
        <img src="img/restaurantes/Bahia de banderas/donpedro.jpg" alt="">
        <h2 class="hotel-name">Don Pedro's Restaurant & Bar</h2>
        <h3>Restaurante</h3>
        <h3 style="color: rgb(0, 58, 247);">Direccion: C. Marlín 2, Sayulita, Nay.</h3>
        <h4 style="color: rgb(0, 18, 78);">De lunes a domingo de 9:00 am a las 10:00 pm</h4>
        <h3 class="numero">Telefono: 329 291 3090</h3>
        <a href="https://www.google.com/maps/dir//C.+Marl%C3%ADn+2,+63734+Sayulita,+Nay./@20.870055,-105.5115973,12z/data=!4m8!4m7!1m0!1m5!1m1!1s0x84211670725415bd:0xf02aafe3b42fac8a!2m2!1d-105.4415569!2d20.8700693?entry=ttu" target="_blank">Ver ubicacion</a>
    </div>
    <div class="card">
        <img src="img/restaurantes/Bahia de banderas/alas blancas.jpg" alt="">
        <h2 class="hotel-name">Alas Blancas Restaurant & Bar</h2>
        <h3>Restaurante</h3>
        <h3 style="color: rgb(0, 58, 247);">Direccion: Delfines 219, Sayulita, Nay.</h3>
        <h4 style="color: rgb(0, 18, 78);">De lunes a domingo de 1:00 pm a 9:00 pm. miercoles cerrado</h4>
        <h3 class="numero">Telefono: 329 291 3438</h3>
        <a href="https://www.google.com/maps?opi=89978449&lqi=CjJBbGFzIEJsYW5jYXMgUmVzdGF1cmFudCAmIEJhciBlbiBiYWhpYSBkZSBiYW5kZXJhc0izs_vR8aqAgAhaUhAAEAEQAhADEAQYABgBGAIiMmFsYXMgYmxhbmNhcyByZXN0YXVyYW50ICYgYmFyIGVuIGJhaGlhIGRlIGJhbmRlcmFzKgwIAhAAEAEQAhADEASSAQpyZXN0YXVyYW50mgEkQ2hkRFNVaE5NRzluUzBWSlEwRm5TVU5uTFU1cVl6QjNSUkFCqgF-EAEqISIdYWxhcyBibGFuY2FzIHJlc3RhdXJhbnQgJiBiYXIoDjIfEAEiG1BrKl4F2PSW7xLhHOR00b_lc1w0TyrbaLlQRDI2EAIiMmFsYXMgYmxhbmNhcyByZXN0YXVyYW50ICYgYmFyIGVuIGJhaGlhIGRlIGJhbmRlcmFz&phdesc=5p6AxYlYKng&vet=12ahUKEwiw4pPm3ZmAAxWVTDABHbq_CywQ8UF6BAgGEBg..i&lei=kEu3ZLDaG5WZwbkPuv-u4AI&cs=1&um=1&ie=UTF-8&fb=1&gl=mx&sa=X&geocode=KX0iFxNwFiGEMZCqdUjV7ChT&daddr=Delfines+219,+63734+Sayulita,+Nay." target="_blank">Ver ubicacion</a>
    </div>
</div>
<br><br>
<div class="container">
    <div class="card">
        <img src="img/restaurantes/Bahia de banderas/rustica.jpg" alt="">
        <h2 class="hotel-name">La Rustica Sayulita</h2>
        <h3>Restaurante</h3>
        <h3 style="color: rgb(0, 58, 247);">Direccion: Av. Revolución 40C, Centro, 63734 Sayulita, Nay.</h3>
        <h4 style="color: rgb(0, 18, 78);">De lunes a domingo de 11:00 am a 11:00 pm</h4>
        <h3 class="numero">Telefono: 322 100 7379</h3>
        <a href="https://www.google.com/maps?opi=89978449&lqi=CihMYSBSdXN0aWNhIFNheXVsaXRhIGVuIGJhaGlhIGRlIGJhbmRlcmFzSMXa57Gaq4CACFo-EAAQARACGAAYARgCIihsYSBydXN0aWNhIHNheXVsaXRhIGVuIGJhaGlhIGRlIGJhbmRlcmFzKgYIAhAAEAGSAQpyZXN0YXVyYW50qgFqEAEqFyITbGEgcnVzdGljYSBzYXl1bGl0YSgOMh8QASIbRwVCX4gp7pzLrXh2G7paPLfE1pRLGFrE50UcMiwQAiIobGEgcnVzdGljYSBzYXl1bGl0YSBlbiBiYWhpYSBkZSBiYW5kZXJhcw&phdesc=2fVRSLPCwtc&vet=12ahUKEwji7OLe3pmAAxWrgIQIHb4RBCcQ8UF6BAgFEBg..i&lei=jUy3ZKLyGKuBkvQPvqOQuAI&cs=1&um=1&ie=UTF-8&fb=1&gl=mx&sa=X&geocode=KRscX2dwFiGEMapc855z90Au&daddr=Av.+Revoluci%C3%B3n+40C,+Centro,+63734+Sayulita,+Nay." target="_blank">Ver ubicacion</a>
    </div>
    <div class="card">
        <img src="img/restaurantes/Bahia de banderas/tierra viva.jpg" alt="">
        <h2 class="hotel-name">Tierra Viva</h2>
        <h3>Restaurante</h3>
        <h3 style="color: rgb(0, 58, 247);">Direccion: C. Marlín 10, Zona Centro, Sayulita, Nay.</h3>
        <h4 style="color: rgb(0, 18, 78);">De lunes a domingo de 8:00 pm a 11:00 pm</h4>
        <h3 class="numero">Telefono: 329 291 3280</h3>
        <a href="https://www.google.com/maps/dir//C.+Marl%C3%ADn+10,+Zona+Centro,+63734+Sayulita,+Nay./@20.8696495,-105.511379,12z/data=!4m8!4m7!1m0!1m5!1m1!1s0x8421167073d6a85d:0x6c1a7129f12a9168!2m2!1d-105.4413386!2d20.8696638?entry=ttu" target="_blank">Ver ubicacion</a>
    </div>
    <div class="card">
        <img src="img/restaurantes/Bahia de banderas/kahlo.jpg" alt="">
        <h2 class="hotel-name">Kahlo Restaurante & Bar</h2>
        <h3>Restaurante mexicano</h3>
        <h3 style="color: rgb(0, 58, 247);">Direccion: Av. Revolución 39, Sayulita, Nay.</h3>
        <h4 style="color: rgb(0, 18, 78);">De lunes a domingo de 9:00 am a 11:30 pm</h4>
        <h3 class="numero">Telefono: 322 237 0006</h3>
        <a href="https://www.google.com/maps/dir//Av.+Revoluci%C3%B3n+39,+63734+Sayulita,+Nay./@20.8692861,-105.5104076,12z/data=!4m8!4m7!1m0!1m5!1m1!1s0x842117d78b0aca09:0xed98c3dac5fe063c!2m2!1d-105.4403672!2d20.8693004?entry=ttu" target="_blank">Ver ubicacion</a>
    </div>
</div>
<br><br>
<div class="container">
    <div class="card">
        <img src="img/restaurantes/Bahia de banderas/marcolino.jpg" alt="">
        <h2 class="hotel-name">Marcolino pasta y vino</h2>
        <h3>Restaurante</h3>
        <h3 style="color: rgb(0, 58, 247);">Direccion: C. Jose Mariscal 44, Sayulita, Nay.</h3>
        <h4 style="color: rgb(0, 18, 78);">De lunes a sábado de 1:30 pm a 11:30 pm</h4>
        <h3 class="numero">Telefono: 322 111 7768</h3>
        <a href="https://www.google.com/maps/dir//C.+Jose+Mariscal+44,+63734+Sayulita,+Nay./@20.8691302,-105.5098126,12z/data=!4m8!4m7!1m0!1m5!1m1!1s0x842117feacfa980b:0xa924bc46c61dc649!2m2!1d-105.4397722!2d20.8691444?entry=ttu" target="_blank">Ver ubicacion</a>
    </div>
    <div class="card">
        <img src="img/restaurantes/Bahia de banderas/xovhi.png" alt="">
        <h2 class="hotel-name">Xochi</h2>
        <h3>Restaurante</h3>
        <h3 style="color: rgb(0, 58, 247);">Direccion: Av. Revolución 44, Centro, Sayulita, Nay</h3>
        <h4 style="color: rgb(0, 18, 78);">De lunes a domingo de 8:30 pm a 11:00 pm</h4>
        <h3 class="numero">Telefono: 329 291 3704</h3>
        <a href="https://www.google.com/maps/dir//Av.+Revoluci%C3%B3n+44,+Centro,+63734+Sayulita,+Nay./@20.8693223,-105.5109867,12z/data=!4m8!4m7!1m0!1m5!1m1!1s0x842117be3c11452d:0xbd2396f300ad3dc1!2m2!1d-105.4409463!2d20.8693366?entry=ttu" target="_blank">Ver ubicacion</a>
    </div>
    <div class="card">
        <img src="img/restaurantes/Bahia de banderas/itacate.jpg" alt="">
        <h2 class="hotel-name">El Itacate</h2>
        <h3>Taqueria</h3>
        <h3 style="color: rgb(0, 58, 247);">Direccion: Av. Revolución 15-local 2, Sayulita, Nay.</h3>
        <h4 style="color: rgb(0, 18, 78);">De lunes a domingo de 1:00 pm a 9:00 pm</h4>
        <h3 class="numero">Telefono: 55 3068 0645</h3>
        <a href="https://www.google.com/maps/dir//Av.+Revoluci%C3%B3n+15-local+2,+63734+Sayulita,+Nay./@20.868995,-105.5081091,12z/data=!4m8!4m7!1m0!1m5!1m1!1s0x84211670f602a0a9:0xb0d118e688c23b44!2m2!1d-105.4380687!2d20.8690092?entry=ttu" target="_blank">Ver ubicacion</a>
    </div>
</div>
<br><br>
<div class="container">
    <div class="card">
        <img src="img/restaurantes/Bahia de banderas/si señor.jpg" alt="">
        <h2 class="hotel-name">Si Señor Sayulita</h2>
        <h3>Restaurante mexicano</h3>
        <h3 style="color: rgb(0, 58, 247);">Direccion: Playa Los Muertos 13 A, Pescadores S/N, Sayulita, Nay</h3>
        <h4 style="color: rgb(0, 18, 78);">De lunes a domingo de 9:00 am a 10:00 pm</h4>
        <h3 class="numero">Telefono: 329 291 2055</h3>
        <a href="https://www.google.com/maps/dir//Playa+Los+Muertos+13+A,+Pescadores+S%2FN,+63734+Sayulita,+Nay./@20.8706026,-105.5148326,12z/data=!4m8!4m7!1m0!1m5!1m1!1s0x84211744fabab2cf:0xaab8a4dc0b219a1a!2m2!1d-105.4447922!2d20.8706169?entry=ttu" target="_blank">Ver ubicacion</a>
    </div>
    <div class="card">
        <img src="img/restaurantes/Bahia de banderas/fogonera.png" alt="">
        <h2 class="hotel-name">La Fogonera</h2>
        <h3>Restaurante</h3>
        <h3 style="color: rgb(0, 58, 247);">Direccion: C. Playa Azul 338, Sayulita, Nay.</h3>
        <h4 style="color: rgb(0, 18, 78);">De lunes a domingo de 5:00 pm a 11:45 pm. cerrado el jueves</h4>
        <h3 class="numero">Telefono: 322 274 7889</h3>
        <a href="https://www.google.com/maps/dir//C.+Playa+Azul+338,+63734+Sayulita,+Nay./@20.8699434,-105.5074752,12z/data=!4m8!4m7!1m0!1m5!1m1!1s0x8421172dab486e5f:0xf2512e5c15f1adfc!2m2!1d-105.4374348!2d20.8699577?entry=ttu" target="_blank">Ver ubicacion</a>
    </div>
    <div class="card">
        <img src="img/restaurantes/Bahia de banderas/tiburon.jpg" alt="">
        <h2 class="hotel-name">El Tiburón Sayulita</h2>
        <h3>Restaurante</h3>
        <h3 style="color: rgb(0, 58, 247);">Direccion: Av. Revolución 37A, Sayulita, Nay.</h3>
        <h4 style="color: rgb(0, 18, 78);">De lunes a domingo de 10:00 am a 12:00 am</h4>
        <h3 class="numero">Telefono: 322 291 7438</h3>
        <a href="https://www.google.com/maps/dir//Av.+Revoluci%C3%B3n+37A,+63734+Sayulita,+Nay./@20.8691738,-105.5099768,12z/data=!4m8!4m7!1m0!1m5!1m1!1s0x842117cd80b3110d:0xa049adf2fe73c54c!2m2!1d-105.4399364!2d20.869188?entry=ttu" target="_blank">Ver ubicacion</a>
    </div>
</div>
<br><br>
<div class="container">
    <div class="card">
        <img src="img/restaurantes/Bahia de banderas/trattoria.JPEG" alt="">
        <h2 class="hotel-name">Trattoria Toscana Sayulita</h2>
        <h3>Restaurante</h3>
        <h3 style="color: rgb(0, 58, 247);">Direccion: Delfines 6, Sayulita, Nay.</h3>
        <h4 style="color: rgb(0, 18, 78);">De lunes a domingo de 3:00 pm a 10:30 pm</h4>
        <h3 class="numero">Telefono: 55 5907 4378</h3>
        <a href="https://www.google.com/maps?opi=89978449&lqi=Ci9UcmF0dG9yaWEgVG9zY2FuYSBTYXl1bGl0YSBlbiBiYWhpYSBkZSBiYW5kZXJhc0jFl8HGkKuAgAhaQRAAEAEQBBAFEAYYABgBGAIiL3RyYXR0b3JpYSB0b3NjYW5hIHNheXVsaXRhIGVuIGJhaGlhIGRlIGJhbmRlcmFzkgEKcmVzdGF1cmFudKoBeBABKh4iGnRyYXR0b3JpYSB0b3NjYW5hIHNheXVsaXRhKA4yHxABIhuCnwYGuXxoP_OrNtNDPMN1g3J0Ld1JqeL6qGMyMxACIi90cmF0dG9yaWEgdG9zY2FuYSBzYXl1bGl0YSBlbiBiYWhpYSBkZSBiYW5kZXJhcw&phdesc=iuuZU5YwMOk&vet=12ahUKEwjugMOs45mAAxVaSTABHX-AATEQ8UF6BAgFEBg..i&lei=YlG3ZO7HDNqSwbkP_4CGiAM&cs=1&um=1&ie=UTF-8&fb=1&gl=mx&sa=X&geocode=KfM2mmhwFiGEMczTDXW5-Hgx&daddr=Delfines+6,+63734+Sayulita,+Nay." target="_blank">Ver ubicacion</a>
    </div>
    <div class="card">
        <img src="img/restaurantes/Bahia de banderas/cas aparaiso.jpg" alt="">
        <h2 class="hotel-name">Casa Paraíso Restaurante Bar</h2>
        <h3>Bar restaurante</h3>
        <h3 style="color: rgb(0, 58, 247);">Direccion: C. Primavera 16, entre Av Naranjito y Av Revolución</h3>
        <h4 style="color: rgb(0, 18, 78);">De lunes a domingo de 8:00 pm a 12:00 am</h4>
        <h3 class="numero">Telefono: 322 368 7782</h3>
        <a href="https://www.google.com/maps?opi=89978449&lqi=CjJDYXNhIFBhcmHDrXNvIFJlc3RhdXJhbnRlIEJhciBlbiBiYWhpYSBkZSBiYW5kZXJhc0iLoYbK_7SAgAhaUBAAEAEQAhADGAAYARgCGAMiMmNhc2EgcGFyYcOtc28gcmVzdGF1cmFudGUgYmFyIGVuIGJhaGlhIGRlIGJhbmRlcmFzKgoIAhAAEAEQAhADkgENYmFyX2FuZF9ncmlsbJoBI0NoWkRTVWhOTUc5blMwVkpRMEZuU1VOU2VrMDJhMHRSRUFFqgF9EAEqISIdY2FzYSBwYXJhw61zbyByZXN0YXVyYW50ZSBiYXIoDjIeEAEiGoK5rWficpN7mCVBbenXBEuBbdIjmXco297fMjYQAiIyY2FzYSBwYXJhw61zbyByZXN0YXVyYW50ZSBiYXIgZW4gYmFoaWEgZGUgYmFuZGVyYXM&phdesc=_5o_CxU3Lw0&vet=12ahUKEwiU6YDx45mAAxWMSTABHUvWCScQ8UF6BAgFEBg..i&lei=8VG3ZNSsMoyTwbkPy6ynuAI&cs=1&um=1&ie=UTF-8&fb=1&gl=mx&sa=X&geocode=KQ2iOZxnFyGEMaViD1KK13ji&daddr=C.+Primavera+16,+entre+Av+Naranjito+y+Av+Revoluci%C3%B3n,+63734+Sayulita,+Nay." target="_blank">Ver ubicacion</a>
    </div>
</div>
</span>
<br>
<br>
<!--boton para mostrar mas-->
<center><button class="read-more-btn">Ver Mas/Menos</button></center>
<!--separacion entre tarjetas-->
<br>
<br>
<br>
   <!----> 

<!--Compostela-->
<!--tarjetas restaurantes(las 3 que son visibles)-->
<div data-aos="fade-up" data-aos-duration="1500">
    <h1 class="title">Restaurantes de Compostela</h1>
    </div>
    <div data-aos="fade-up" data-aos-duration="1500">
    <div class="container">
        <div class="card">
            <img src="img/restaurantes/Compostela/lasbrasas.jpg" alt="">
            <h2 class="hotel-name">Las Brasas Compostela</h2>
            <h3>Restaurante</h3>
            <h3 style="color: rgb(0, 58, 247);">Direccion: Hidalgo 65, Santa Ana, Compostela, Nay.</h3>
            <h4 style="color: rgb(0, 18, 78);"></h4>
            <h3 class="numero">Telefono: 327 277 0073</h3>
            <a href="https://www.google.com/maps?opi=89978449&lqi=Ch1sYXMgYnJhc2FzIGNvbXBvc3RlbGEgbmF5YXJpdEjb39_4obCAgAhaMxAAEAEYABgBGAIYAyIdbGFzIGJyYXNhcyBjb21wb3N0ZWxhIG5heWFyaXQqBggCEAAQAZIBCnJlc3RhdXJhbnSqAUYQATIfEAEiG2B1K1bKzhpl4qyEfCWlysWA4MBh2Sfq-A2paTIhEAIiHWxhcyBicmFzYXMgY29tcG9zdGVsYSBuYXlhcml0&phdesc=FxcKwgD6VvI&vet=12ahUKEwi1otP85JmAAxXnSTABHSG9ChcQ8UF6BAgFEBg..i&lei=FlO3ZLW_KeeTwbkPofqquAE&cs=1&um=1&ie=UTF-8&fb=1&gl=mx&sa=X&geocode=KV9reqfFKSeEMVzIFVYXB9h2&daddr=Hidalgo+65,+Santa+Ana,+63705+Compostela,+Nay." target="_blank">Ver ubicacion</a>
        </div>
        <div class="card">
            <img src="img/restaurantes/Compostela/camahuer.jpg" alt="">
            <h2 class="hotel-name">Restaurante Camahuer</h2>
            <h3>Restaurante mexicano</h3>
            <h3 style="color: rgb(0, 58, 247);">Direccion: Zaragoza 49, Alto, Compostela, Nay.</h3>
            <h4 style="color: rgb(0, 18, 78);">De lunes a domingo de 7:00 am a 10:00 pm. miercoles cerrado</h4>
            <h3 class="numero">Telefono: 327 277 1051</h3>
            <a href="https://www.google.com/maps/dir//Zaragoza+49,+Alto,+63703+Compostela,+Nay./@21.2364916,-104.9698176,12z/data=!4m8!4m7!1m0!1m5!1m1!1s0x8427290719572f23:0x5b7361c7fe3e264!2m2!1d-104.8997772!2d21.2365061?entry=ttu" target="_blank">Ver ubicacion</a>
        </div>
        <div class="card">
            <img src="img/restaurantes/Compostela/casrillo rojo.jpg" alt="">
            <h2 class="hotel-name">Castillo Rojo Restaurant</h2>
            <h3>Restaurante</h3>
            <h3 style="color: rgb(0, 58, 247);">Direccion: Leal 139, Barrio de Chila, Compostela, Nay.</h3>
            <h4 style="color: rgb(0, 18, 78);">De jueves a domingo de 1:00 pm a 11:00 pm</h4>
            <h3 class="numero">Telefono: 311 139 8696</h3>
            <a href="https://www.google.com/maps/dir//Leal+139,+Barrio+de+Chila,+63700+Compostela,+Nay./@21.2336585,-104.9717972,12z/data=!4m8!4m7!1m0!1m5!1m1!1s0x842729058fc9ad9f:0x92bc12c66b3049a2!2m2!1d-104.9017568!2d21.233673?entry=ttu" target="_blank">Ver ubicacion</a>
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
        <img src="img/restaurantes/Compostela/cevivhito.jpg" alt="">
        <h2 class="hotel-name">EL CEVICHITO MARS</h2>
        <h3>Restaurante</h3>
        <h3 style="color: rgb(0, 58, 247);">Direccion: Allende 23, entre Morelos y Bravo, Barrio de Chila, Compostela, Nay.</h3>
        <h4 style="color: rgb(0, 18, 78);">De lunes a sábado de 9:00 am a 5:00 pm</h4>
        <h3 class="numero">Telefono: 327 111 1068</h3>
        <a href="https://www.google.com/maps/dir//Allende+23,+entre+Morelos+y+Bravo,+Barrio+de+Chila,+63700+Compostela,+Nay./@21.2373359,-104.9715266,12z/data=!4m8!4m7!1m0!1m5!1m1!1s0x84272907ac070069:0x6cf25949436e2202!2m2!1d-104.9014862!2d21.2373504?entry=ttu" target="_blank">Ver ubicacion</a>
    </div>
    <div class="card">
        <img src="img/restaurantes/Compostela/zarandeaditos.jpg" alt="">
        <h2 class="hotel-name">Los Zarandeaditos</h2>
        <h3>Restaurante</h3>
        <h3 style="color: rgb(0, 58, 247);">Direccion: Hidalgo #484, Col del Bosque, Compostela, Nay.</h3>
        <h4 style="color: rgb(0, 18, 78);">De lunes a domingo de 12:00 pm a 7:00 pm</h4>
        <h3 class="numero">Telefono: 327 688 0333</h3>
        <a href="https://www.google.com/maps/dir//Hidalgo+%23484,+Col+del+Bosque,+63703+Compostela,+Nay./@21.2265324,-104.971036,12z/data=!4m8!4m7!1m0!1m5!1m1!1s0x842729e56b3fd02b:0xc12052db2919745a!2m2!1d-104.9009956!2d21.2265468?entry=ttu" target="_blank">Ver ubicacion</a>
    </div>
    <div class="card">
        <img src="img/restaurantes/Compostela/camahuer lljpg.jpg" alt="">
        <h2 class="hotel-name">Camahuer II</h2>
        <h3>Restaurantes mexicano</h3>
        <h3 style="color: rgb(0, 58, 247);">Direccion: Benito Juárez 22, Barrio de Chila,Compostela, Nay.</h3>
        <h4 style="color: rgb(0, 18, 78);">De lunes a domingo de 7:00 am a 10:00 pm. Miercoles cerrado</h4>
        <h3 class="numero">Telefono: 327 277 0011</h3>
        <a href="https://www.google.com/maps/dir//Benito+Ju%C3%A1rez+22,+Barrio+de+Chila,+63704+Compostela,+Nay./@21.236358,-104.971132,12z/data=!4m8!4m7!1m0!1m5!1m1!1s0x84272907a76f064b:0xd4e8ae287d671ca5!2m2!1d-104.9010916!2d21.2363725?entry=ttu" target="_blank">Ver ubicacion</a>
    </div>
</div>
<br><br>
<div class="container">
    <div class="card">
        <img src="img/restaurantes/Compostela/xl.jpg" alt="">
        <h2 class="hotel-name">XL Restaurant Bar</h2>
        <h3>Restaurante de alas de pollo</h3>
        <h3 style="color: rgb(0, 58, 247);">Direccion: Allende 111, Santa Ana, Compostela, Nay.</h3>
        <h4 style="color: rgb(0, 18, 78);"></h4>
        <h3 class="numero">Telefono: 327 103 4532</h3>
        <a href="https://www.google.com/maps/dir//Allende+111,+Santa+Ana,+63700+Compostela,+Nay./@21.2390399,-104.9717583,12z/data=!4m8!4m7!1m0!1m5!1m1!1s0x84272906690899a7:0x4f103ee67513245c!2m2!1d-104.9017199!2d21.2390544?entry=ttu" target="_blank">Ver ubicacion</a>
    </div>
    <div class="card">
        <img src="img/restaurantes/Compostela/titos.jpg" alt="">
        <h2 class="hotel-name">Mariscos Tito´s Barrabas</h2>
        <h3>Marisquería</h3>
        <h3 style="color: rgb(0, 58, 247);">Direccion: Bravo 11, Sin Nombre Loc. Compostela, Centro.</h3>
        <h4 style="color: rgb(0, 18, 78);">De lunes a domingo de 9:30 pm a 5:00 pm. Miercoles cerrado</h4>
        <h3 class="numero">Telefono: 327 277 2707</h3>
        <a href="https://www.google.com/maps/dir//Bravo+11,+Sin+Nombre+Loc.+Compostela,+Centro,+63702+Compostela,+Nay./@21.2379939,-104.9706294,12z/data=!4m8!4m7!1m0!1m5!1m1!1s0x84272906561d9201:0x44bda463bce69dc6!2m2!1d-104.900589!2d21.2380084?entry=ttu" target="_blank">Ver ubicacion</a>
    </div>
    <div class="card">
        <img src="img/restaurantes/Compostela/gerardos.jpg" alt="">
        <h2 class="hotel-name">Mariscos aguachiles y ceviches Gerardo’s</h2>
        <h3>Marisquería</h3>
        <h3 style="color: rgb(0, 58, 247);">Direccion: Hidalgo 348D Nte, Sta Ana, Compostela, Nay.</h3>
        <h4 style="color: rgb(0, 18, 78);"></h4>
        <h3 class="numero">Telefono: 327 121 2328</h3>
        <a href="https://www.google.com/maps?opi=89978449&lqi=CiJyZXN0YXVyYW50ZXMgZW4gY29tcG9zdGVsYSBuYXlhcml0SODV2NjBuYCACFowEAAYABgCIiJyZXN0YXVyYW50ZXMgZW4gY29tcG9zdGVsYSBuYXlhcml0KgQIAxAAkgEKcmVzdGF1cmFudKoBXRABKhAiDHJlc3RhdXJhbnRlcygOMh8QASIbxCkWasXPjQQarvBrB6nNBJDIM1CvHlmXJxTfMiYQAiIicmVzdGF1cmFudGVzIGVuIGNvbXBvc3RlbGEgbmF5YXJpdA&phdesc=XDenD9Yp7iM&vet=12ahUKEwjDt-LW7JmAAxVMTDABHfYuDBwQ8UF6BAgFEGs..i&lei=Klu3ZMP6K8yYwbkP9t2w4AE&cs=1&um=1&ie=UTF-8&fb=1&gl=mx&sa=X&geocode=KUXyUGUTKSeEMaa4SL0AHrgI&daddr=Hidalgo+348D+Nte,+Sta+Ana,+63700+Compostela,+Nay." target="_blank">Ver ubicacion</a>
    </div>
</div>
<br><br>
<div class="container">
    <div class="card">
        <img src="img/restaurantes/Compostela/gorilla grill.jpg" alt="">
        <h2 class="hotel-name">Gorila Grill</h2>
        <h3>Restaurante</h3>
        <h3 style="color: rgb(0, 58, 247);">Direccion: Ignacio Aldama 213, Sur, Compostela, Nay.</h3>
        <h4 style="color: rgb(0, 18, 78);">De lunes a sábado de 6:00 pm a 11:00 pm</h4>
        <h3 class="numero">Telefono: 311 151 8375</h3>
        <a href="https://www.google.com/maps?opi=89978449&lqi=CiJyZXN0YXVyYW50ZXMgZW4gY29tcG9zdGVsYSBuYXlhcml0SLSjvaGZuICACFowEAAYABgCIiJyZXN0YXVyYW50ZXMgZW4gY29tcG9zdGVsYSBuYXlhcml0KgQIAxAAkgEKcmVzdGF1cmFudKoBXRABKhAiDHJlc3RhdXJhbnRlcygOMh8QASIbxCkWasXPjQQarvBrB6nNBJDIM1CvHlmXJxTfMiYQAiIicmVzdGF1cmFudGVzIGVuIGNvbXBvc3RlbGEgbmF5YXJpdA&phdesc=JEh7EYkCt58&vet=12ahUKEwjDt-LW7JmAAxVMTDABHfYuDBwQ8UF6BAgFEGs..i&lei=Klu3ZMP6K8yYwbkP9t2w4AE&cs=1&um=1&ie=UTF-8&fb=1&gl=mx&sa=X&geocode=KXl-f1j-KSeEMZT0ejr_GJkx&daddr=Ignacio+Aldama+213,+Sur,+63700+Compostela,+Nay." target="_blank">Ver ubicacion</a>
    </div>
    <div class="card">
        <img src="img/restaurantes/Compostela/bugatti.jpg" alt="">
        <h2 class="hotel-name">Bugatti pizza y cafe</h2>
        <h3>Pizzeria</h3>
        <h3 style="color: rgb(0, 58, 247);">Direccion: 24 de Febrero 37, Barrio de Chila, Compostela, Nay.</h3>
        <h4 style="color: rgb(0, 18, 78);">De lunes a domingo de 2:30 pm a 10:00 pm. Martes cerrado</h4>
        <h3 class="numero">Telefono: 327 277 3700</h3>
        <a href="https://www.google.com/maps?opi=89978449&lqi=CiJyZXN0YXVyYW50ZXMgZW4gY29tcG9zdGVsYSBuYXlhcml0SIyi26u5roCACFowEAAYABgCIiJyZXN0YXVyYW50ZXMgZW4gY29tcG9zdGVsYSBuYXlhcml0KgQIAxAAkgEQcGl6emFfcmVzdGF1cmFudKoBXRABKhAiDHJlc3RhdXJhbnRlcygOMh8QASIbxCkWasXPjQQarvBrB6nNBJDIM1CvHlmXJxTfMiYQAiIicmVzdGF1cmFudGVzIGVuIGNvbXBvc3RlbGEgbmF5YXJpdA&phdesc=hfEo0B8mTHQ&vet=12ahUKEwjDt-LW7JmAAxVMTDABHfYuDBwQ8UF6BAgFEGs..i&lei=Klu3ZMP6K8yYwbkP9t2w4AE&cs=1&um=1&ie=UTF-8&fb=1&gl=mx&sa=X&geocode=KZ9-2tKpKSeEMS93LDfUXdCt&daddr=24+de+Febrero+37,+Barrio+de+Chila,+63704+Compostela,+Nay." target="_blank">Ver ubicacion</a>
    </div>
    <div class="card">
        <img src="img/restaurantes/Compostela/jaque buger.jpg" alt="">
        <h2 class="hotel-name">Jaque burgers</h2>
        <h3>Hamburguesería</h3>
        <h3 style="color: rgb(0, 58, 247);">Direccion: Gral. Rocha 19, Alto,Compostela, Nay.</h3>
        <h4 style="color: rgb(0, 18, 78);"></h4>
        <h3 class="numero">Telefono: 327 688 2827</h3>
        <a href="https://www.google.com/maps?opi=89978449&lqi=CiJyZXN0YXVyYW50ZXMgZW4gY29tcG9zdGVsYSBuYXlhcml0SOHtjLb2r4CACFowEAAYABgCIiJyZXN0YXVyYW50ZXMgZW4gY29tcG9zdGVsYSBuYXlhcml0KgQIAxAAkgEUaGFtYnVyZ2VyX3Jlc3RhdXJhbnSqAV0QASoQIgxyZXN0YXVyYW50ZXMoDjIfEAEiG8QpFmrFz40EGq7wawepzQSQyDNQrx5ZlycU3zImEAIiInJlc3RhdXJhbnRlcyBlbiBjb21wb3N0ZWxhIG5heWFyaXQ&phdesc=lPxdET3q0Gk&vet=12ahUKEwjDt-LW7JmAAxVMTDABHfYuDBwQ8UF6BAgFEGs..i&lei=Klu3ZMP6K8yYwbkP9t2w4AE&cs=1&um=1&ie=UTF-8&fb=1&gl=mx&sa=X&geocode=KVNno9ZBKSeEMaTsamiu_NeA&daddr=Gral.+Rocha+19,+Alto,+63700+Compostela,+Nay." target="_blank">Ver ubicacion</a>
    </div>
</div>
<div class="container">
    <div class="card">
        <img src="img/restaurantes/Compostela/menni.jpg" alt="">
        <h2 class="hotel-name">Pizzas Menni</h2>
        <h3>Pizzeria</h3>
        <h3 style="color: rgb(0, 58, 247);">Direccion:Morelos 799, Aviación, Compostela, Nay. </h3>
        <h4 style="color: rgb(0, 18, 78);">De lunes a sábado de 12:45 pm a 10:00 pm</h4>
        <h3 class="numero">Telefono: 327 277 2035</h3>
        <a href="https://www.google.com/maps?opi=89978449&lqi=CiJyZXN0YXVyYW50ZXMgZW4gY29tcG9zdGVsYSBuYXlhcml0SK3amY2YrYCACFowEAAYABgCIiJyZXN0YXVyYW50ZXMgZW4gY29tcG9zdGVsYSBuYXlhcml0KgQIAxAAkgEQcGl6emFfcmVzdGF1cmFudKoBXRABKhAiDHJlc3RhdXJhbnRlcygOMh8QASIbxCkWasXPjQQarvBrB6nNBJDIM1CvHlmXJxTfMiYQAiIicmVzdGF1cmFudGVzIGVuIGNvbXBvc3RlbGEgbmF5YXJpdA&phdesc=9Mx4q0efisk&vet=12ahUKEwjDt-LW7JmAAxVMTDABHfYuDBwQ8UF6BAgFEGs..i&lei=Klu3ZMP6K8yYwbkP9t2w4AE&cs=1&um=1&ie=UTF-8&fb=1&gl=mx&sa=X&geocode=Kb_99m1wKSeEMZTCd-zZXm9g&daddr=Morelos+799,+Aviaci%C3%B3n,+63703+Compostela,+Nay." target="_blank">Ver ubicacion</a>
    </div>
    <div class="card">
        <img src="img/restaurantes/Compostela/taberna.jpg" alt="">
        <h2 class="hotel-name">La Taberna restaurant</h2>
        <h3>Bar</h3>
        <h3 style="color: rgb(0, 58, 247);">Direccion: Hidalgo 93, Santa Ana, Compostela, Nay.</h3>
        <h4 style="color: rgb(0, 18, 78);"></h4>
        <h3 class="numero">Telefono: 327 115 5759</h3>
        <a href="https://www.google.com/maps/dir//Hidalgo+93,+Santa+Ana,+63700+Compostela,+Nay./@21.2539359,-104.971236,12z/data=!4m8!4m7!1m0!1m5!1m1!1s0x842729a3d293e225:0xc4b22fa6780bff4e!2m2!1d-104.9011563!2d21.2539504?entry=ttu" target="_blank">Ver ubicacion</a>
    </div>
    <div class="card">
        <img src="img/restaurantes/Compostela/montero.jpg" alt="">
        <h2 class="hotel-name">Rincon del Montero II</h2>
        <h3>Restaurante</h3>
        <h3 style="color: rgb(0, 58, 247);">Direccion: Col del Bosque, Compostela, Nay.</h3>
        <h4 style="color: rgb(0, 18, 78);">De lunes a domingo de 10:00 am a 6:00 pm. Martes cerrado</h4>
        <h3 class="numero">Telefono: 327 277 2418</h3>
        <a href="https://www.google.com/maps?opi=89978449&lqi=CiJyZXN0YXVyYW50ZXMgZW4gY29tcG9zdGVsYSBuYXlhcml0SP_dr8uZqoCACFowEAAYABgCIiJyZXN0YXVyYW50ZXMgZW4gY29tcG9zdGVsYSBuYXlhcml0KgQIAxAAkgEGZWF0ZXJ5qgFdEAEqECIMcmVzdGF1cmFudGVzKA4yHxABIhvEKRZqxc-NBBqu8GsHqc0EkMgzUK8eWZcnFN8yJhACIiJyZXN0YXVyYW50ZXMgZW4gY29tcG9zdGVsYSBuYXlhcml0&phdesc=ih2VeaYIhOY&vet=12ahUKEwjDt-LW7JmAAxVMTDABHfYuDBwQ8UF6BAgFEGs..i&lei=Klu3ZMP6K8yYwbkP9t2w4AE&cs=1&um=1&ie=UTF-8&fb=1&gl=mx&sa=X&geocode=KR0TZNuuKSeEMcshv_iSzhJu&daddr=Col+del+Bosque,+63703+Compostela,+Nay." target="_blank">Ver ubicacion</a>
    </div>
</div>
<br><br>
<div class="container">
    <div class="card">
        <img src="img/restaurantes/Compostela/grilos.jpg" alt="">
        <h2 class="hotel-name">Pizzas Grilo’s</h2>
        <h3>Pizzeria</h3>
        <h3 style="color: rgb(0, 58, 247);">Direccion: Tiburcio Grande 79, Guayabal, Compostela, Nay.</h3>
        <h4 style="color: rgb(0, 18, 78);">De lunes a domingo de 1:30 pm a 10:00 pm</h4>
        <h3 class="numero">Telefono: 327 277 0539</h3>
        <a href="https://www.google.com/maps?opi=89978449&lqi=CiJyZXN0YXVyYW50ZXMgZW4gY29tcG9zdGVsYSBuYXlhcml0SK6x-47Pq4CACFowEAAYABgCIiJyZXN0YXVyYW50ZXMgZW4gY29tcG9zdGVsYSBuYXlhcml0KgQIAxAAkgEQcGl6emFfcmVzdGF1cmFudKoBXRABKhAiDHJlc3RhdXJhbnRlcygOMh8QASIbxCkWasXPjQQarvBrB6nNBJDIM1CvHlmXJxTfMiYQAiIicmVzdGF1cmFudGVzIGVuIGNvbXBvc3RlbGEgbmF5YXJpdA&phdesc=y3-EiFAWv-Q&vet=12ahUKEwjDt-LW7JmAAxVMTDABHfYuDBwQ8UF6BAgFEGs..i&lei=Klu3ZMP6K8yYwbkP9t2w4AE&cs=1&um=1&ie=UTF-8&fb=1&gl=mx&sa=X&geocode=KY_GczQHKSeEMbQv3l-UFCVm&daddr=Tiburcio+Grande+79,+Guayabal,+63703+Compostela,+Nay." target="_blank">Ver ubicacion</a>
    </div>
    <div class="card">
        <img src="img/restaurantes/Compostela/zong cheng.jpg" alt="">
        <h2 class="hotel-name">Comida China ZONG SHENG</h2>
        <h3>Restaurante chino</h3>
        <h3 style="color: rgb(0, 58, 247);">Direccion: Zaragoza Sur 97 58, Guayabal,Compostela, Nay.</h3>
        <h4 style="color: rgb(0, 18, 78);">De lunes a domingo de 10:00 am a 7:30 pm</h4>
        <h3 class="numero"></h3>
        <a href="https://www.google.com/maps?opi=89978449&lqi=CiJyZXN0YXVyYW50ZXMgZW4gY29tcG9zdGVsYSBuYXlhcml0SOiQyaWqr4CACFowEAAYABgCIiJyZXN0YXVyYW50ZXMgZW4gY29tcG9zdGVsYSBuYXlhcml0KgQIAxAAkgESY2hpbmVzZV9yZXN0YXVyYW50qgFdEAEqECIMcmVzdGF1cmFudGVzKA4yHxABIhvEKRZqxc-NBBqu8GsHqc0EkMgzUK8eWZcnFN8yJhACIiJyZXN0YXVyYW50ZXMgZW4gY29tcG9zdGVsYSBuYXlhcml0&phdesc=yLAvhMgxoB0&vet=12ahUKEwjDt-LW7JmAAxVMTDABHfYuDBwQ8UF6BAgFEGs..i&lei=Klu3ZMP6K8yYwbkP9t2w4AE&cs=1&um=1&ie=UTF-8&fb=1&gl=mx&sa=X&geocode=KbmschQHKSeEMe5eLZhhovtU&daddr=Zaragoza+Sur+97(58,+Guayabal,+63703+Compostela,+Nay." target="_blank">Ver ubicacion</a>
    </div>
    <div class="card">
        <img src="img/restaurantes/Compostela/burromexicano.jpg" alt="">
        <h2 class="hotel-name">El Burro Mexicano</h2>
        <h3>Taqueria</h3>
        <h3 style="color: rgb(0, 58, 247);">Direccion: Compostela, Nay.</h3>
        <h4 style="color: rgb(0, 18, 78);">Abierto las 24 horas</h4>
        <h3 class="numero">Telefono: 311 253 3683</h3>
        <a href="https://www.google.com/maps?opi=89978449&lqi=CiJyZXN0YXVyYW50ZXMgZW4gY29tcG9zdGVsYSBuYXlhcml0SLmq39-UrYCACFowEAAYABgCIiJyZXN0YXVyYW50ZXMgZW4gY29tcG9zdGVsYSBuYXlhcml0KgQIAxAAkgEPdGFjb19yZXN0YXVyYW50mgEjQ2haRFNVaE5NRzluUzBWSlEwRm5TVVJvTlZCNmRrcFJFQUWqAV0QASoQIgxyZXN0YXVyYW50ZXMoDjIfEAEiG8QpFmrFz40EGq7wawepzQSQyDNQrx5ZlycU3zImEAIiInJlc3RhdXJhbnRlcyBlbiBjb21wb3N0ZWxhIG5heWFyaXQ&phdesc=Gi6VJI94yXY&vet=12ahUKEwjDt-LW7JmAAxVMTDABHfYuDBwQ8UF6BAgFEGs..i&lei=Klu3ZMP6K8yYwbkP9t2w4AE&cs=1&um=1&ie=UTF-8&fb=1&gl=mx&sa=X&geocode=KdeFeGCdKSeEMeYXzdLM7aDk&daddr=63718+Compostela,+Nay." target="_blank">Ver ubicacion</a>
    </div>
</div>
</span>
<br>
<br>
<!--boton para mostrar mas-->
<center><button class="read-more-btn">Ver Mas/Menos</button></center>
<!--separacion entre tarjetas-->
<br>
<br>
<br>
   <!----> 

<!--El Nayar-->
<!--tarjetas restaurantes(las 3 que son visibles)-->
<div data-aos="fade-up" data-aos-duration="1500">
    <h1 class="title">Restaurantes de El Nayar</h1>
    </div>
    <div data-aos="fade-up" data-aos-duration="1500">
    <div class="container">
        <div class="card">
            <img src="img/restaurantes/El Nayar/Elpinito.jpg" alt="">
            <h2 class="hotel-name">El pinito</h2>
            <h3>Restaurante</h3>
            <h3 style="color: rgb(0, 58, 247);">Direccion: Mesa del Nayar, Nay.</h3>
            <h4 style="color: rgb(0, 18, 78);"></h4>
            <h3 class="numero"></h3>
            <a href="https://www.google.com/maps?opi=89978449&lqi=CihyZXN0YXVyYW50ZSBlbCBwaW50byBkZSBlbCBuYXlhciBuYXlhcml0SKGSg9eFr4CACFo-EAAQARACGAAYARgEGAUiKHJlc3RhdXJhbnRlIGVsIHBpbnRvIGRlIGVsIG5heWFyIG5heWFyaXQqBAgDEACSAQpyZXN0YXVyYW50qgFrEAEqGCIUcmVzdGF1cmFudGUgZWwgcGludG8oDjIfEAEiG0YGgTElGV0t1BuXgCprUgV9Bv5T6ImvvHU_RDIsEAIiKHJlc3RhdXJhbnRlIGVsIHBpbnRvIGRlIGVsIG5heWFyIG5heWFyaXQ&phdesc=HT4084b_rqg&vet=12ahUKEwjwgduZ_ZmAAxWkQzABHVXnDS8Q8UF6BAgFEBg..i&lei=fmy3ZPDKBKSHwbkP1c63-AI&cs=1&um=1&ie=UTF-8&fb=1&gl=mx&sa=X&geocode=KaPC65-Pk52GMW0cu_jlfmCQ&daddr=63546+Mesa+del+Nayar,+Nay." target="_blank">Ver ubicacion</a>
        </div>
        <div class="card">
            <img src="img/restaurantes/El Nayar/pizza el nayar.jpeg" alt="">
            <h2 class="hotel-name">Pizza El Nayar</h2>
            <h3>Pizzeria</h3>
            <h3 style="color: rgb(0, 58, 247);">Direccion: Mololoa, Jesús María, Nay.</h3>
            <h4 style="color: rgb(0, 18, 78);">De lunes a domingo de 10:00 am a 8:00 pm</h4>
            <h3 class="numero">Telefono: 311 249 3111</h3>
            <a href="https://www.google.com/maps/dir//Mololoa,+63530+Jes%C3%BAs+Mar%C3%ADa,+Nay./@22.2573234,-104.5879462,12z/data=!4m8!4m7!1m0!1m5!1m1!1s0x869d97e9d90fd491:0xcf8fc18af568062a!2m2!1d-104.5179058!2d22.2573384?entry=ttu" target="_blank">Ver ubicacion</a>
        </div>
    </div>
</div>
<!--separacion entre tarjetas-->
<br>
<br>
<br>
   <!----> 
<!--Huajicori-->
<!--tarjetas restaurantes(las 3 que son visibles)-->
<div data-aos="fade-up" data-aos-duration="1500">
    <h1 class="title">Restaurantes de Huajicori</h1>
    </div>
    <div data-aos="fade-up" data-aos-duration="1500">
    <div class="container">
        <div class="card">
            <img src="img/restaurantes/Huajicori/laecondida.jpg" alt="">
            <h2 class="hotel-name">La Escondida</h2>
            <h3>Marisquería</h3>
            <h3 style="color: rgb(0, 58, 247);">Direccion: Aldama 64-100, Centro, Huajicori, Nay.</h3>
            <h4 style="color: rgb(0, 18, 78);">De lunes a sábado de 11:00 am a 7:00 pm</h4>
            <h3 class="numero"></h3>
            <a href="https://www.google.com/maps/dir//Aldama+64-100,+Centro,+63480+Huajicori,+Nay./@22.638157,-105.3891635,12z/data=!4m8!4m7!1m0!1m5!1m1!1s0x869e8b37fdc72f87:0x698e1e98d5d65c65!2m2!1d-105.3191233!2d22.6381722?entry=ttu" target="_blank">Ver ubicacion</a>
        </div>
        <div class="card">
            <img src="img/restaurantes/Huajicori/el buen sabor de mama.jpg" alt="">
            <h2 class="hotel-name">El buen sabor de mamá</h2>
            <h3>Restaurante</h3>
            <h3 style="color: rgb(0, 58, 247);">Direccion: Lerdo No. 10, Col. San Sebastián, 63480 Huajicori, Nay.</h3>
            <h4 style="color: rgb(0, 18, 78);">De lunes a domingo de 5:00 pm a las 11:00 pm. Martes, miercoles y jueves cerrado</h4>
            <h3 class="numero">Telefono: 325 251 7235</h3>
            <a href="https://www.google.com/maps/dir//Lerdo+No.+10,+Col.+San+Sebasti%C3%A1n,+63480+Huajicori,+Nay./@22.6387535,-105.3876206,12z/data=!4m8!4m7!1m0!1m5!1m1!1s0x869e8b6ef79ddead:0xf79a58cd7ade7618!2m2!1d-105.317569!2d22.6386652?entry=ttu" target="_blank">Ver ubicacion</a>
        </div>
        <div class="card">
            <img src="img/restaurantes/Huajicori/doañpetra.jpg" alt="">
            <h2 class="hotel-name">Restaurant Doña Petra</h2>
            <h3>Restaurante</h3>
            <h3 style="color: rgb(0, 58, 247);">Direccion: Esquina, Aldama y Corona 51, Centro, Huajicori, Nay.</h3>
            <h4 style="color: rgb(0, 18, 78);"></h4>
            <h3 class="numero"></h3>
            <a href="https://www.google.com/maps/dir//Esquina,+Aldama+y+Corona+51,+Centro,+Huajicori,+Nay./@22.6378884,-105.3890011,12z/data=!4m8!4m7!1m0!1m5!1m1!1s0x869e8b6090614e07:0xb93601a92afa042c!2m2!1d-105.3189612!2d22.6379152?entry=ttu" target="_blank">Ver ubicacion</a>
        </div>
    </div>
</div>
<!--separacion entre tarjetas-->
<br>
<br>
<br>
   <!----> 
<!--Ixtlan del Rio-->
<!--tarjetas restaurantes(las 3 que son visibles)-->
<div data-aos="fade-up" data-aos-duration="1500">
    <h1 class="title">Restaurantes de Ixtlan del Rio</h1>
    </div>
    <div data-aos="fade-up" data-aos-duration="1500">
    <div class="container">
        <div class="card">
            <img src="img/restaurantes/Ixtlan del Rio/la casona.jpg" alt="">
            <h2 class="hotel-name">La Casona de Ixtlán</h2>
            <h3>Restaurante</h3>
            <h3 style="color: rgb(0, 58, 247);">Direccion: Hidalgo 756, Emiliano Zapata, Carmen Romano.</h3>
            <h4 style="color: rgb(0, 18, 78);">De lunes a domingo de 8:00 am a 4:30 pm. Miercoles cerrado</h4>
            <h3 class="numero">Telefono: 324 243 3109</h3>
            <a href="https://www.google.com/maps/dir//La+Casona+de+Ixtl%C3%A1n+ixtlan+del+rio/@21.7621645,-105.4480119,9z/data=!4m8!4m7!1m0!1m5!1m1!1s0x8426f768d168455f:0x66b185d49753601f!2m2!1d-104.3504533!2d21.0359641?entry=ttu" target="_blank">Ver ubicacion</a>
        </div>
        <div class="card">
            <img src="img/restaurantes/Ixtlan del Rio/veracruz.jpg" alt="">
            <h2 class="hotel-name">Restaurante La Veracruz</h2>
            <h3>Restaurante</h3>
            <h3 style="color: rgb(0, 58, 247);">Direccion: 5 de Mayo No. 22 norte, Centro, Ixtlán del Río, Nay.</h3>
            <h4 style="color: rgb(0, 18, 78);">De lunes a domingo de 7:00 pm a 5:00 pm</h4>
            <h3 class="numero">Telefono: 324 243 2195</h3>
            <a href="https://www.google.com/maps/dir//5+de+Mayo+No.+22+norte,+Centro,+63940+Ixtl%C3%A1n+del+R%C3%ADo,+Nay./@21.0357871,-104.4404939,12z/data=!4m8!4m7!1m0!1m5!1m1!1s0x8426f74fd2a01cdb:0xea2e4a593976ff7f!2m2!1d-104.3704535!2d21.0358014?entry=ttu" target="_blank">Ver ubicacion</a>
        </div>
        <div class="card">
            <img src="img/restaurantes/Ixtlan del Rio/campestre.jpg" alt="">
            <h2 class="hotel-name">La Veracruz Campestre</h2>
            <h3>Restaurante</h3>
            <h3 style="color: rgb(0, 58, 247);">Direccion: Miguel Alemán Sur 125, La Moderna, Ixtlán del Río, Nay.</h3>
            <h4 style="color: rgb(0, 18, 78);">De lunes a domingo de 7:00 am a 4:00 pm</h4>
            <h3 class="numero">Telefono: 324 688 0922</h3>
            <a href="https://www.google.com/maps?opi=89978449&lqi=CilSZXN0YXVyYW50ZSBMYSBWZXJhY3J1eiBlbiBpeHRsYW4gZGVsIHJpb0ibx-6mpa-AgAhaRRAAEAEQAhgAGAEYAhgEGAYiKXJlc3RhdXJhbnRlIGxhIHZlcmFjcnV6IGVuIGl4dGxhbiBkZWwgcmlvKggIAhAAEAEQApIBCnJlc3RhdXJhbnSqAW8QASobIhdyZXN0YXVyYW50ZSBsYSB2ZXJhY3J1eigOMh8QASIb3a7dXGvTV3in8OkflWdzggoVXuK2c9z9IsD8Mi0QAiIpcmVzdGF1cmFudGUgbGEgdmVyYWNydXogZW4gaXh0bGFuIGRlbCByaW8&phdesc=OLiO8nYNNO0&vet=12ahUKEwjip83qiZqAAxXETTABHZgvAhcQ8UF6BAgFEF0..i&lei=vHm3ZOLZOcSbwbkPmN-IuAE&cs=1&um=1&ie=UTF-8&fb=1&gl=mx&sa=X&geocode=KZEn3S7U8SaEMb5-smU7MtAV&daddr=Miguel+Alem%C3%A1n+Sur+125,+La+Moderna,+63958+Ixtl%C3%A1n+del+R%C3%ADo,+Nay." target="_blank">Ver ubicacion</a>
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
        <img src="img/restaurantes/Ixtlan del Rio/casa grande.jpg" alt="">
        <h2 class="hotel-name">Casa Grande Restaurante & Bar</h2>
        <h3>Restaurante</h3>
        <h3 style="color: rgb(0, 58, 247);">Direccion: Zaragoza Ote. 25, Centro, Ixtlán del Río, Nay.</h3>
        <h4 style="color: rgb(0, 18, 78);">De lunes a domingo de 11:00 am a 11:00 pm</h4>
        <h3 class="numero">Telefono: 324 111 9366</h3>
        <a href="https://www.google.com/maps?opi=89978449&lqi=Ci1DYXNhIEdyYW5kZSBSZXN0YXVyYW50ZSZCYXIgZW4gaXh0bGFuIGRlbCByaW9Iye2xhrKvgIAIWkkQABABEAIYABgBGAIYBBgGIi1jYXNhIGdyYW5kZSByZXN0YXVyYW50ZSZiYXIgZW4gaXh0bGFuIGRlbCByaW8qCAgCEAAQARACkgEKcmVzdGF1cmFudKoBdxABKh8iG2Nhc2EgZ3JhbmRlIHJlc3RhdXJhbnRlJmJhcigOMh8QASIbs_9G5fnZrF7awnLfvATHCHn0IxgvlqA2tiFNMjEQAiItY2FzYSBncmFuZGUgcmVzdGF1cmFudGUmYmFyIGVuIGl4dGxhbiBkZWwgcmlv&phdesc=YykeWoFmx-o&vet=12ahUKEwiV7YnsipqAAxXQRjABHeoSDSEQ8UF6BAgFEBg..i&lei=zHq3ZJXXHNCNwbkP6qW0iAI&cs=1&um=1&ie=UTF-8&fb=1&gl=mx&sa=X&geocode=Kbsqz_7A9yaEMVWgWzQEk1xn&daddr=Zaragoza+Ote.+25,+Centro,+63940+Ixtl%C3%A1n+del+R%C3%ADo,+Nay." target="_blank">Ver ubicacion</a>
    </div>
    <div class="card">
        <img src="img/restaurantes/Ixtlan del Rio/el fogon kora.jpg" alt="">
        <h2 class="hotel-name">El Fogón Kora</h2>
        <h3>Restaurant</h3>
        <h3 style="color: rgb(0, 58, 247);">Direccion: Allende Nte. 31, Centro, Ixtlán del Río, Nay.</h3>
        <h4 style="color: rgb(0, 18, 78);">De lunes a domingo de 11:00 pm a 9:30 pm</h4>
        <h3 class="numero">Telefono: 324 126 8550</h3>
        <a href="https://www.google.com/maps/dir//Allende+Nte.+31,+Centro,+63940+Ixtl%C3%A1n+del+R%C3%ADo,+Nay./@21.0359575,-104.4395275,12z/data=!4m8!4m7!1m0!1m5!1m1!1s0x8426f7c36dd5af55:0x54463199327ba685!2m2!1d-104.3694962!2d21.0359734?entry=ttu" target="_blank">Ver ubicacion</a>
    </div>
    <div class="card">
        <img src="img/restaurantes/Ixtlan del Rio/dcarlos.jpg" alt="">
        <h2 class="hotel-name">D'CALOS</h2>
        <h3>Restaurante</h3>
        <h3 style="color: rgb(0, 58, 247);">Direccion: San Mateo 518, Santo Santiago, Ixtlán del Río, Nay.</h3>
        <h4 style="color: rgb(0, 18, 78);">De lunes a domingo de 7:00 pm a 3:00 pm. Martes cerrado</h4>
        <h3 class="numero">Telefono: 324 105 5158</h3>
        <a href="https://www.google.com/maps/dir//San+Mateo+518,+Santo+Santiago,+63959+Ixtl%C3%A1n+del+R%C3%ADo,+Nay./@21.0379613,-104.4482173,12z/data=!4m8!4m7!1m0!1m5!1m1!1s0x8426f74b71cdd895:0x13f11238828b54e6!2m2!1d-104.3781769!2d21.0379755?entry=ttu" target="_blank">Ver ubicacion</a>
    </div>
</div>
<br><br>
<div class="container">
    <div class="card">
        <img src="img/restaurantes/Ixtlan del Rio/sabor campestre.jpg" alt="">
        <h2 class="hotel-name">Al Sabor Campestre</h2>
        <h3>Restaurante</h3>
        <h3 style="color: rgb(0, 58, 247);">Direccion: Luis Castillo Ledón 160-A, Everardo Peña Navarro, Ixtlán del Río, Nay.</h3>
        <h4 style="color: rgb(0, 18, 78);">De jueves a domingo de 8:00 am a 5:00 pm</h4>
        <h3 class="numero">Telefono: 324 105 8195</h3>
        <a href="https://www.google.com/maps/dir//Luis+Castillo+Led%C3%B3n+160-A,+Everardo+Pe%C3%B1a+Navarro,+63959+Ixtl%C3%A1n+del+R%C3%ADo,+Nay./@21.0400192,-104.4407193,12z/data=!4m8!4m7!1m0!1m5!1m1!1s0x8426f7ff6be926bf:0x48c6cdc88cc755f6!2m2!1d-104.3706789!2d21.0400335?entry=ttu" target="_blank">Ver ubicacion</a>
    </div>
    <div class="card">
        <img src="img/restaurantes/Ixtlan del Rio/ekbuenzason.jpg" alt="">
        <h2 class="hotel-name">El Buen Sazón</h2>
        <h3>Restaurante</h3>
        <h3 style="color: rgb(0, 58, 247);">Direccion: Salvador Díaz Mirón 109, Everardo Peña Navarro, Ixtlán del Río, Nay.</h3>
        <h4 style="color: rgb(0, 18, 78);">De martes a domingo de 8:00 pm a 1:00 pm</h4>
        <h3 class="numero">Telefono: 324 243 3010</h3>
        <a href="https://www.google.com/maps?opi=89978449&lqi=Ch5yZXN0YXVyYW50ZXMgZW4gaXh0bGFuIGRlbCByaW9I4OHLirSugIAIWi4QABgAGAIYBCIecmVzdGF1cmFudGVzIGVuIGl4dGxhbiBkZWwgcmlvKgQIAxAAkgEKcmVzdGF1cmFudKoBWRABKhAiDHJlc3RhdXJhbnRlcygOMh8QASIbvJP03ZRC23pk0XzH-YQvCe--zS5ypGAEsiKmMiIQAiIecmVzdGF1cmFudGVzIGVuIGl4dGxhbiBkZWwgcmlv&phdesc=3nPCyijDuWs&vet=12ahUKEwiCy9HCjZqAAxXjkIQIHSpfDVYQ8UF6BAgDEGs..i&lei=mn23ZIKWNeOhkvQPqr61sAU&cs=1&um=1&ie=UTF-8&fb=1&gl=mx&sa=X&geocode=KVN-TqVR9yaEMdPEX2Y70QRQ&daddr=Salvador+D%C3%ADaz+Mir%C3%B3n+109,+Everardo+Pe%C3%B1a+Navarro,+63959+Ixtl%C3%A1n+del+R%C3%ADo,+Nay." target="_blank">Ver ubicacion</a>
    </div>
    <div class="card">
        <img src="img/restaurantes/Ixtlan del Rio/fondajuanita.jpg" alt="">
        <h2 class="hotel-name">Fonda Juanita</h2>
        <h3>Restaurante</h3>
        <h3 style="color: rgb(0, 58, 247);">Direccion: Allende Nte. 36, Centro, Ixtlán del Río, Nay.</h3>
        <h4 style="color: rgb(0, 18, 78);">De lunes a domingo de 7:00 am a 5:00 pm</h4>
        <h3 class="numero">Telefono: 324 243 4955</h3>
        <a href="https://www.google.com/maps/dir//Allende+Nte.+36,+Centro,+63940+Ixtl%C3%A1n+del+R%C3%ADo,+Nay./@21.0359357,-104.4397424,12z/data=!4m8!4m7!1m0!1m5!1m1!1s0x86e7678af64fb0af:0x87818f7b22e2d0a3!2m2!1d-104.3697105!2d21.0359519?entry=ttu" target="_blank">Ver ubicacion</a>
    </div>
</div>
<br></br>
<div class="container">
    <div class="card">
        <img src="img/restaurantes/Ixtlan del Rio/los arcos.png" alt="">
        <h2 class="hotel-name">Plaza Los Arcos</h2>
        <h3>Restaurante</h3>
        <h3 style="color: rgb(0, 58, 247);">Direccion: Allende Nte. 43, Norte, Ixtlán del Río, Nay.</h3>
        <h4 style="color: rgb(0, 18, 78);">De lunes a sábado de 8:00 am a 4:00 pm</h4>
        <h3 class="numero">Telefono: 324 243 5523</h3>
        <a href="https://www.google.com/maps/dir//Allende+Nte.+43,+Norte,+63940+Ixtl%C3%A1n+del+R%C3%ADo,+Nay./@21.0362299,-104.4395585,12z/data=!4m8!4m7!1m0!1m5!1m1!1s0x8426f70609110a25:0xf173af85bfa8eb56!2m2!1d-104.3695181!2d21.0362442?entry=ttu" target="_blank">Ver ubicacion</a>
    </div>
    <div class="card">
        <img src="img/restaurantes/Ixtlan del Rio/rincon nayarita.jpg" alt="">
        <h2 class="hotel-name">Rincón Nayarita</h2>
        <h3>Restaurante mexicano</h3>
        <h3 style="color: rgb(0, 58, 247);">Direccion: Blvd. Miguel Hidalgo 60, Centro, Ixtlán del Río, Nay.</h3>
        <h4 style="color: rgb(0, 18, 78);">De lunes a domingo de 12:00 pm a 11:00 pm</h4>
        <h3 class="numero">Telefono: 324 105 8729</h3>
        <a href="https://www.google.com/maps?opi=89978449&lqi=Ch5yZXN0YXVyYW50ZXMgZW4gaXh0bGFuIGRlbCByaW9IyuaPu-mAgIAIWi4QABgAGAIYBCIecmVzdGF1cmFudGVzIGVuIGl4dGxhbiBkZWwgcmlvKgQIAxAAkgESbWV4aWNhbl9yZXN0YXVyYW50qgFZEAEqECIMcmVzdGF1cmFudGVzKA4yHxABIhu8k_TdlELbemTRfMf5hC8J777NLnKkYASyIqYyIhACIh5yZXN0YXVyYW50ZXMgZW4gaXh0bGFuIGRlbCByaW8&phdesc=EZ13CaTQGMU&vet=12ahUKEwiCy9HCjZqAAxXjkIQIHSpfDVYQ8UF6BAgDEGs..i&lei=mn23ZIKWNeOhkvQPqr61sAU&cs=1&um=1&ie=UTF-8&fb=1&gl=mx&sa=X&geocode=KQ96iW9F9yaEMX8mVjBPa4We&daddr=Blvd.+Miguel+Hidalgo+60,+Centro,+63940+Ixtl%C3%A1n+del+R%C3%ADo,+Nay." target="_blank">Ver ubicacion</a>
    </div>
    <div class="card">
        <img src="img/restaurantes/Ixtlan del Rio/laneta.jpg" alt="">
        <h2 class="hotel-name">La Neta, te va a Encantar</h2>
        <h3>Restaurante</h3>
        <h3 style="color: rgb(0, 58, 247);">Direccion: esús García 202, Independencia, Ixtlán del Río, Nay.</h3>
        <h4 style="color: rgb(0, 18, 78);">De miercoles a domingo de 12:00 am a 10:00 pm</h4>
        <h3 class="numero">Telefono: 324 243 8052</h3>
        <a href="https://www.google.com/maps?opi=89978449&lqi=Ch5yZXN0YXVyYW50ZXMgZW4gaXh0bGFuIGRlbCByaW9I--6m3bivgIAIWi4QABgAGAIYBCIecmVzdGF1cmFudGVzIGVuIGl4dGxhbiBkZWwgcmlvKgQIAxAAkgEKcmVzdGF1cmFudKoBWRABKhAiDHJlc3RhdXJhbnRlcygOMh8QASIbvJP03ZRC23pk0XzH-YQvCe--zS5ypGAEsiKmMiIQAiIecmVzdGF1cmFudGVzIGVuIGl4dGxhbiBkZWwgcmlv&phdesc=sl-6hlh84PE&vet=12ahUKEwiCy9HCjZqAAxXjkIQIHSpfDVYQ8UF6BAgDEGs..i&lei=mn23ZIKWNeOhkvQPqr61sAU&cs=1&um=1&ie=UTF-8&fb=1&gl=mx&sa=X&geocode=Kd3uSCFb9yaEMVE2TekRIQCD&daddr=Jes%C3%BAs+Garc%C3%ADa+202,+Independencia,+63959+Ixtl%C3%A1n+del+R%C3%ADo,+Nay." target="_blank">Ver ubicacion</a>
    </div>
</div>
<br></br>
<div class="container">
    <div class="card">
        <img src="img/restaurantes/Ixtlan del Rio/lasgueras.jpg" alt="">
        <h2 class="hotel-name">Cenaduría "Las Güeras"</h2>
        <h3>Restaurante mexicano</h3>
        <h3 style="color: rgb(0, 58, 247);">Direccion: Allende Nte. 136, Centro, Ixtlán del Río, Nay.</h3>
        <h4 style="color: rgb(0, 18, 78);">De lunes a domingo de 12:30 am a 9:00 pm</h4>
        <h3 class="numero">Telefono: 324 243 3132</h3>
        <a href="https://www.google.com/maps?opi=89978449&lqi=Ch5yZXN0YXVyYW50ZXMgZW4gaXh0bGFuIGRlbCByaW9In5n9tKyPgIAIWi4QABgAGAIYBCIecmVzdGF1cmFudGVzIGVuIGl4dGxhbiBkZWwgcmlvKgQIAxAAkgESbWV4aWNhbl9yZXN0YXVyYW50mgEkQ2hkRFNVaE5NRzluUzBWSlEwRm5TVVJWYjA1aFRqRm5SUkFCqgFZEAEqECIMcmVzdGF1cmFudGVzKA4yHxABIhu8k_TdlELbemTRfMf5hC8J777NLnKkYASyIqYyIhACIh5yZXN0YXVyYW50ZXMgZW4gaXh0bGFuIGRlbCByaW8&phdesc=FCbQIJ_i7JQ&vet=12ahUKEwiCy9HCjZqAAxXjkIQIHSpfDVYQ8UF6BAgDEGs..i&lei=mn23ZIKWNeOhkvQPqr61sAU&cs=1&um=1&ie=UTF-8&fb=1&gl=mx&sa=X&geocode=KVGw_NhP9yaEMUK0hQota3D4&daddr=Allende+Nte.+136,+Centro,+63940+Ixtl%C3%A1n+del+R%C3%ADo,+Nay." target="_blank">Ver ubicacion</a>
    </div>
    <div class="card">
        <img src="img/restaurantes/Ixtlan del Rio/puntoruba.jpg" alt="">
        <h2 class="hotel-name">PUNTO RUBA</h2>
        <h3>Restaurante</h3>
        <h3 style="color: rgb(0, 58, 247);">Direccion: Jaime Torres Bodet 416, Everardo Peña Navarro.</h3>
        <h4 style="color: rgb(0, 18, 78);">De lunes a domingo de 8:30 pm a 10:30 pm. Miercoles cerrado</h4>
        <h3 class="numero">Telefono: 33 3137 7152</h3>
        <a href="https://www.google.com/maps?opi=89978449&lqi=Ch5yZXN0YXVyYW50ZXMgZW4gaXh0bGFuIGRlbCByaW9Ik_SrtNu2gIAIWi4QABgAGAIYBCIecmVzdGF1cmFudGVzIGVuIGl4dGxhbiBkZWwgcmlvKgQIAxAAkgEKcmVzdGF1cmFudKoBWRABKhAiDHJlc3RhdXJhbnRlcygOMh8QASIbvJP03ZRC23pk0XzH-YQvCe--zS5ypGAEsiKmMiIQAiIecmVzdGF1cmFudGVzIGVuIGl4dGxhbiBkZWwgcmlv&phdesc=CeUFNdVZHno&vet=12ahUKEwiCy9HCjZqAAxXjkIQIHSpfDVYQ8UF6BAgDEGs..i&lei=mn23ZIKWNeOhkvQPqr61sAU&cs=1&um=1&ie=UTF-8&fb=1&gl=mx&sa=X&geocode=KWnvXobC9yaEMatu-1E6BUJL&daddr=Jaime+Torres+Bodet+416,+Everardo+Pe%C3%B1a+Navarro,+63959+Ixtl%C3%A1n+del+R%C3%ADo,+Nay." target="_blank">Ver ubicacion</a>
    </div>
    <div class="card">
        <img src="img/restaurantes/Ixtlan del Rio/allende doce.jpg" alt="">
        <h2 class="hotel-name">Allende Doce</h2>
        <h3>Restaurante</h3>
        <h3 style="color: rgb(0, 58, 247);">Direccion: Allende Nte. 12, Centro, Ixtlán del Río, Nay.</h3>
        <h4 style="color: rgb(0, 18, 78);">De lunes a domingo de 9:00 am a 4:00 pm</h4>
        <h3 class="numero">Telefono: 324 688 1258</h3>
        <a href="https://www.google.com/maps?opi=89978449&lqi=Ch5yZXN0YXVyYW50ZXMgZW4gaXh0bGFuIGRlbCByaW9IpZ7CvtKwgIAIWi4QABgAGAIYBCIecmVzdGF1cmFudGVzIGVuIGl4dGxhbiBkZWwgcmlvKgQIAxAAkgEKcmVzdGF1cmFudKoBWRABKhAiDHJlc3RhdXJhbnRlcygOMh8QASIbvJP03ZRC23pk0XzH-YQvCe--zS5ypGAEsiKmMiIQAiIecmVzdGF1cmFudGVzIGVuIGl4dGxhbiBkZWwgcmlv&phdesc=ITmQ6xX_GHE&vet=12ahUKEwiCy9HCjZqAAxXjkIQIHSpfDVYQ8UF6BAgDEGs..i&lei=mn23ZIKWNeOhkvQPqr61sAU&cs=1&um=1&ie=UTF-8&fb=1&gl=mx&sa=X&geocode=KTsU1sc69yaEMayfVPA96XSm&daddr=Allende+Nte.+12,+Centro,+63940+Ixtl%C3%A1n+del+R%C3%ADo,+Nay." target="_blank">Ver ubicacion</a>
    </div>
</div>
<br><br>
<div class="container">
    <div class="card">
        <img src="img/restaurantes/Ixtlan del Rio/la ramada.jpg" alt="">
        <h2 class="hotel-name">Taqueria la Ramada</h2>
        <h3>Taqueria</h3>
        <h3 style="color: rgb(0, 58, 247);">Direccion: Liceaga Norte, Esteban Baca Calderón.</h3>
        <h4 style="color: rgb(0, 18, 78);">De lunes a domingo de 5:00 pm a 11:00 pm. Miercoles y jueves cerrado</h4>
        <h3 class="numero">Telefono: 324 101 0950</h3>
        <a href="https://www.google.com/maps?opi=89978449&lqi=Ch5yZXN0YXVyYW50ZXMgZW4gaXh0bGFuIGRlbCByaW9IkuWjsp2qgIAIWi4QABgAGAIYBCIecmVzdGF1cmFudGVzIGVuIGl4dGxhbiBkZWwgcmlvKgQIAxAAkgEPdGFjb19yZXN0YXVyYW50qgFZEAEqECIMcmVzdGF1cmFudGVzKA4yHxABIhu8k_TdlELbemTRfMf5hC8J777NLnKkYASyIqYyIhACIh5yZXN0YXVyYW50ZXMgZW4gaXh0bGFuIGRlbCByaW8&phdesc=OMa_-q5dA6Q&vet=12ahUKEwiCy9HCjZqAAxXjkIQIHSpfDVYQ8UF6BAgDEGs..i&lei=mn23ZIKWNeOhkvQPqr61sAU&cs=1&um=1&ie=UTF-8&fb=1&gl=mx&sa=X&geocode=KYOMOWZZ9yaEMaFQGL1O-0dk&daddr=Liceaga+Norte,+Esteban+Baca+Calder%C3%B3n,+Ixtl%C3%A1n+del+R%C3%ADo,+Esteban+Baca+Calderon,+63941+Ixtl%C3%A1n+del+R%C3%ADo,+Nay." target="_blank">Ver ubicacion</a>
    </div>
    <div class="card">
        <img src="img/restaurantes/Ixtlan del Rio/sushi fry.jpg" alt="">
        <h2 class="hotel-name">Sushi Fry</h2>
        <h3>Restaurante de sushi</h3>
        <h3 style="color: rgb(0, 58, 247);">Direccion: Abasolo Nte. 19 Sur, Centro, Ixtlán del Río, Nay.</h3>
        <h4 style="color: rgb(0, 18, 78);">De lunes a domingo de 2:00 pm a 8:00 pm. Lunes cerrado</h4>
        <h3 class="numero">Telefono: 324 243 2077</h3>
        <a href="https://www.google.com/maps/dir//Abasolo+Nte.+19+Sur,+Centro,+63940+Ixtl%C3%A1n+del+R%C3%ADo,+Nay./@21.0352315,-104.4377118,12z/data=!4m8!4m7!1m0!1m5!1m1!1s0x8426f7cebe2a92f9:0x9b19732cd70dc167!2m2!1d-104.3676714!2d21.0352458?entry=ttu" target="_blank">Ver ubicacion</a>
    </div>
    <div class="card">
        <img src="img/restaurantes/Ixtlan del Rio/dgusta.jpg" alt="">
        <h2 class="hotel-name">D'Gusta Pizza</h2>
        <h3>Pizzeria</h3>
        <h3 style="color: rgb(0, 58, 247);">Direccion: Eulogio Parra Maldonado #435, Amado Nervo, Ixtlán del Río, Nay.</h3>
        <h4 style="color: rgb(0, 18, 78);">De lunes a domingo de 9:30 pm a 10:00 pm</h4>
        <h3 class="numero">Telefono: 324 243 7920</h3>
        <a href="https://www.google.com/maps/dir//Eulogio+Parra+Maldonado+%23435,+Amado+Nervo,+63940+Ixtl%C3%A1n+del+R%C3%ADo,+Nay./@21.0341697,-104.4474469,12z/data=!4m8!4m7!1m0!1m5!1m1!1s0x8426f74d111224c5:0xa2bd6cdae85f9673!2m2!1d-104.3774065!2d21.034184?entry=ttu" target="_blank">Ver ubicacion</a>
    </div>
</div>
<br><br>
<div class="container">
    <div class="card">
        <img src="img/restaurantes/Ixtlan del Rio/carrillo burgeer.jpg" alt="">
        <h2 class="hotel-name">Carrillo burger</h2>
        <h3>Hamburguesería</h3>
        <h3 style="color: rgb(0, 58, 247);">Direccion: Fresno 50, Las Arboledas, Ixtlán del Río, Nay.</h3>
        <h4 style="color: rgb(0, 18, 78);">De miercoles a domingo de 7:00 pm a 11:00 pm</h4>
        <h3 class="numero">Telefono: 324 102 6723</h3>
        <a href="https://www.google.com/maps/dir//Fresno+50,+Las+Arboledas,+63940+Ixtl%C3%A1n+del+R%C3%ADo,+Nay./@21.0420003,-104.437646,12z/data=!4m8!4m7!1m0!1m5!1m1!1s0x8426f72914ccdaab:0x299b3220adf03ebe!2m2!1d-104.3676056!2d21.0420146?entry=ttu" target="_blank">Ver ubicacion</a>
    </div>
    <div class="card">
        <img src="img/restaurantes/Ixtlan del Rio/montero.jpg" alt="">
        <h2 class="hotel-name">Montero's</h2>
        <h3>Restaurante de comida rápida</h3>
        <h3 style="color: rgb(0, 58, 247);">Direccion: Luis Castillo Ledón 129, Everardo Peña Navarro.</h3>
        <h4 style="color: rgb(0, 18, 78);">De martes a domingo de 6:00 pm a las 10:30 pm</h4>
        <h3 class="numero">Telefono: 24 170 6731</h3>
        <a href="https://www.google.com/maps/dir//Luis+Castillo+Led%C3%B3n+129,+Everardo+Pe%C3%B1a+Navarro,+63959+Ixtl%C3%A1n+del+R%C3%ADo,+Nay./@21.0379524,-104.4406925,12z/data=!4m8!4m7!1m0!1m5!1m1!1s0x84273797b239e2a1:0xe4fa737f5ba63253!2m2!1d-104.3706521!2d21.0379667?entry=ttu" target="_blank">Ver ubicacion</a>
    </div>
    <div class="card">
        <img src="img/restaurantes/Ixtlan del Rio/suhitogo.png" alt="">
        <h2 class="hotel-name">Sushi To Go</h2>
        <h3>Restaurante de sushi</h3>
        <h3 style="color: rgb(0, 58, 247);">Direccion:  Calixto Rivera 393, Che Guevara, Ixtlán del Río, Nay.</h3>
        <h4 style="color: rgb(0, 18, 78);">De lunes a domingo de 1:00 pm a 10:00 pm. Martes cerrado</h4>
        <h3 class="numero">Telefono: 324 108 8899</h3>
        <a href="https://www.google.com/maps/dir//Calixto+Rivera+393,+Che+Guevara,+63959+Ixtl%C3%A1n+del+R%C3%ADo,+Nay./@21.0441065,-104.4418393,12z/data=!4m8!4m7!1m0!1m5!1m1!1s0x8426f71310f3f203:0xb0843c837a9b7c39!2m2!1d-104.3717989!2d21.0441208?entry=ttu" target="_blank">Ver ubicacion</a>
    </div>
</div>
<br><br>
<div class="container">
    <div class="card">
        <img src="img/restaurantes/Ixtlan del Rio/pizzas dani.jpg" alt="">
        <h2 class="hotel-name">Pizzas Danny</h2>
        <h3>Pizzeria</h3>
        <h3 style="color: rgb(0, 58, 247);">Direccion: 63940 Calle Hidalgo 183 A Ote, 7 Esquinas, Ixtlán del Río, Nay.</h3>
        <h4 style="color: rgb(0, 18, 78);">De lunes a domingo de 12:00 pm a 10:00 pm</h4>
        <h3 class="numero">Telefono: 324 243 3274</h3>
        <a href="https://www.google.com/maps/dir//63940+Calle+Hidalgo+183+A+Ote,+7+Esquinas,+63940+Ixtl%C3%A1n+del+R%C3%ADo,+Nay./@21.0344401,-104.4354651,12z/data=!4m8!4m7!1m0!1m5!1m1!1s0x8426f74573d34a8f:0x105e5ee2f3147685!2m2!1d-104.3654211!2d21.0344742?entry=ttu" target="_blank">Ver ubicacion</a>
    </div>
    <div class="card">
        <img src="img/restaurantes/Ixtlan del Rio/varela.jpeg" alt="">
        <h2 class="hotel-name">Mi Restaurant Varela</h2>
        <h3>Restaurante</h3>
        <h3 style="color: rgb(0, 58, 247);">Direccion: C. Ramón López V, Everardo Peña Navarro, Ixtlán del Río, Nay.</h3>
        <h4 style="color: rgb(0, 18, 78);">De lunes a domingo de 7:00 pm a 6:00 pm</h4>
        <h3 class="numero">Telefono: 324 243 8324</h3>
        <a href="https://www.google.com/maps/dir//C.+Ram%C3%B3n+L%C3%B3pez+V,+Everardo+Pe%C3%B1a+Navarro,+63950+Ixtl%C3%A1n+del+R%C3%ADo,+Nay./@21.0402704,-104.4399782,12z/data=!4m8!4m7!1m0!1m5!1m1!1s0x8426f7fe03064cc3:0xab642ebe32b834a8!2m2!1d-104.3699374!2d21.0402919?entry=ttu" target="_blank">Ver ubicacion</a>
    </div>
    <div class="card">
        <img src="img/restaurantes/Ixtlan del Rio/el30.jpg" alt="">
        <h2 class="hotel-name">Mariscos El 30</h2>
        <h3>Marisqueria</h3>
        <h3 style="color: rgb(0, 58, 247);">Direccion: Zaragoza 165, Mexpan, Ixtlán del Río, Nay.</h3>
        <h4 style="color: rgb(0, 18, 78);">De lunes a domingo de 11:00 am a 6:00 pm</h4>
        <h3 class="numero">Telefono: 324 243 4000</h3>
        <a href="https://www.google.com/maps?opi=89978449&lqi=Ch5yZXN0YXVyYW50ZXMgZW4gaXh0bGFuIGRlbCByaW9InunRwuWAgIAIWi4QABgAGAIYBCIecmVzdGF1cmFudGVzIGVuIGl4dGxhbiBkZWwgcmlvKgQIAxAAkgESc2VhZm9vZF9yZXN0YXVyYW50mgEjQ2haRFNVaE5NRzluUzBWSlEwRm5TVVJMY21VeVRHRkJFQUWqAVkQASoQIgxyZXN0YXVyYW50ZXMoDjIfEAEiG7yT9N2UQtt6ZNF8x_mELwnvvs0ucqRgBLIipjIiEAIiHnJlc3RhdXJhbnRlcyBlbiBpeHRsYW4gZGVsIHJpbw&phdesc=GEEdE1UQqX4&vet=12ahUKEwiCy9HCjZqAAxXjkIQIHSpfDVYQ8UF6BAgDEGs..i&lei=mn23ZIKWNeOhkvQPqr61sAU&cs=1&um=1&ie=UTF-8&fb=1&gl=mx&sa=X&geocode=Kf___3tD9yaEMdlAEB23fx-8&daddr=Zaragoza+165,+Mexpan,+63940+Ixtl%C3%A1n+del+R%C3%ADo,+Nay." target="_blank">Ver ubicacion</a>
    </div>
</div>
</span>
<br>
<br>
<!--boton para mostrar mas-->
<center><button class="read-more-btn">Ver Mas/Menos</button></center>
<!--separacion entre tarjetas-->
<br>
<br>
<br>
   <!----> 
<!--Jala-->
<!--tarjetas restaurantes(las 3 que son visibles)-->
<div data-aos="fade-up" data-aos-duration="1500">
    <h1 class="title">Restaurantes de Jala</h1>
    </div>
    <div data-aos="fade-up" data-aos-duration="1500">
    <div class="container">
        <div class="card">
            <img src="img/restaurantes/Jala/monroy.jpg" alt="">
            <h2 class="hotel-name">Restaurant y Café Los Monroy</h2>
            <h3>Restaurante</h3>
            <h3 style="color: rgb(0, 58, 247);">Direccion: Allende 21, La Natividad, Centro, Jala, Nay.</h3>
            <h4 style="color: rgb(0, 18, 78);">De lunes a domingo de 7:30 am a 4:00 pm</h4>
            <h3 class="numero">Telefono: 324 276 0769</h3>
            <a href="https://www.google.com/maps/dir//Restaurant+y+Caf%C3%A9+Los+Monroy+en+jala/@21.3911838,-105.0305617,10z/data=!4m8!4m7!1m0!1m5!1m1!1s0x8426fb9198a1cbdf:0x9f79c974e79ddbee!2m2!1d-104.4378853!2d21.1054575?entry=ttu" target="_blank">Ver ubicacion</a>
        </div>
        <div class="card">
            <img src="img/restaurantes/Jala/sonia.jpg" alt="">
            <h2 class="hotel-name">Mariscos Sonia</h2>
            <h3>Marisqueria</h3>
            <h3 style="color: rgb(0, 58, 247);">Direccion: Guerrero 58, San Francisco, Centro, Jala, Nay.</h3>
            <h4 style="color: rgb(0, 18, 78);">De lunes a domingo de 10:30 pm a 6:00 pm</h4>
            <h3 class="numero"></h3>
            <a href="https://www.google.com/maps/dir//Mariscos+Sonia+en+jala/@21.3911838,-105.0305617,10z/data=!4m8!4m7!1m0!1m5!1m1!1s0x8426fbfd18dd3c39:0xd2440b72d4dd81c3!2m2!1d-104.4363345!2d21.1031273?entry=ttu" target="_blank">Ver ubicacion</a>
        </div>
        <div class="card">
            <img src="img/restaurantes/Jala/elmarlin.jpg" alt="">
            <h2 class="hotel-name">Mariscos “El Marlin”</h2>
            <h3>Marisqueria</h3>
            <h3 style="color: rgb(0, 58, 247);">Direccion: Morelos 198, San Francisco, Centro, Jala, Nay.</h3>
            <h4 style="color: rgb(0, 18, 78);">De lunes a domingo de 11:00 am a 10:00 pm. Martes y miercoles cerrado</h4>
            <h3 class="numero"></h3>
            <a href="https://www.google.com/maps/dir//Mariscos+%E2%80%9CEl+Marlin%E2%80%9D+en+jala/@21.3911838,-105.0305617,10z/data=!4m8!4m7!1m0!1m5!1m1!1s0x8426fb95e93de28b:0x7c7debd1ea887943!2m2!1d-104.4326303!2d21.1037937?entry=ttu" target="_blank">Ver ubicacion</a>
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
        <img src="img/restaurantes/Jala/alicia.jpg" alt="">
        <h2 class="hotel-name">Cenaduria Alicia</h2>
        <h3>Restaurante</h3>
        <h3 style="color: rgb(0, 58, 247);">Direccion: José María Salazar #106B, La Natividad, Centro, Jala, Nay.</h3>
        <h4 style="color: rgb(0, 18, 78);">De jueves a doomingo de 1:00 pm a 10:00 pm</h4>
        <h3 class="numero">Telefono: 324 103 1753</h3>
        <a href="https://www.google.com/maps/dir//Cenaduria+Alicia+en+jala/@21.1059299,-104.5096679,12z/data=!4m8!4m7!1m0!1m5!1m1!1s0x8426fb4bc3aecea1:0xbcac947e25d98c59!2m2!1d-104.4396275!2d21.1059443?entry=ttu" target="_blank">Ver ubicacion</a>
    </div>
    <div class="card">
        <img src="img/restaurantes/Jala/maribel.jpg" alt="">
        <h2 class="hotel-name">Cenaduría Maribel</h2>
        <h3>Restaurante</h3>
        <h3 style="color: rgb(0, 58, 247);">Direccion: Allende 18, San Francisco, Centro, Jala, Nay.</h3>
        <h4 style="color: rgb(0, 18, 78);">sabado de 1:00 pm a 9:00pm y domingo de 12:00 pm a 8:00 pm</h4>
        <h3 class="numero">Telefono: 324 100 9210</h3>
        <a href="https://www.google.com/maps/dir//Cenadur%C3%ADa+Maribel+en+jala/@21.1038622,-104.5065407,12z/data=!4m8!4m7!1m0!1m5!1m1!1s0x8426fb0e3cd5b64b:0xc565334ddd4f1750!2m2!1d-104.4364965!2d21.1038872?entry=ttu" target="_blank">Ver ubicacion</a>
    </div>
    <div class="card">
        <img src="img/restaurantes/Jala/lasornelas.jpg" alt="">
        <h2 class="hotel-name">Restaurante Campestre Los Ornelas</h2>
        <h3>Restaurantes</h3>
        <h3 style="color: rgb(0, 58, 247);">Direccion: MEX-15D Jala, Mexico, Km 108,500, Jala Nayarit, Nay.</h3>
        <h4 style="color: rgb(0, 18, 78);">Abierto los 24 horas</h4>
        <h3 class="numero">Telefono: 311 269 5347</h3>
        <a href="https://www.google.com/maps/dir//MEX-15D+Jala,+Mexico,+Km+108,500,+63895+Jala+Nayarit,+Nay./@21.0932871,-104.5130117,12z/data=!4m8!4m7!1m0!1m5!1m1!1s0x8426fb1c1eff68e3:0x34d1d349581e50e8!2m2!1d-104.4429713!2d21.0933015?entry=ttu" target="_blank">Ver ubicacion</a>
    </div>
</div>
<br><br>
<div class="container">
    <div class="card">
        <img src="img/restaurantes/Jala/elitacate.jpg" alt="">
        <h2 class="hotel-name">El Itacate</h2>
        <h3>Restaurante mexicano</h3>
        <h3 style="color: rgb(0, 58, 247);">Direccion: Avenida de la Amistad #80 Jomulco, Jala, Nay.</h3>
        <h4 style="color: rgb(0, 18, 78);">De lunes a domingo de 7:30 am a 4:00 pm</h4>
        <h3 class="numero">Telefono: 324 276 0070</h3>
        <a href="https://www.google.com/maps?opi=89978449&lqi=ChxyZXN0YXVyYW50ZXMgZW4gamFsYSBuYXlhcml0SLq1orGIroCACFoqEAAYABgCIhxyZXN0YXVyYW50ZXMgZW4gamFsYSBuYXlhcml0KgQIAxAAkgESbWV4aWNhbl9yZXN0YXVyYW50qgFXEAEqECIMcmVzdGF1cmFudGVzKA4yHxABIhu8lCETG7h8r71z3Sk9VY8ZxprkBsUsAEmZFRoyIBACIhxyZXN0YXVyYW50ZXMgZW4gamFsYSBuYXlhcml0&phdesc=L_1sjqD1zIA&vet=12ahUKEwjxydjMt5uAAxXOHEQIHREdD8oQ8UF6BAgFEGs..i&lei=8S-4ZLGNPM65kPIPkbq80Aw&cs=1&um=1&ie=UTF-8&fb=1&gl=mx&sa=X&geocode=KVPJYyQi-yaEMcBfGvXURn6F&daddr=Avenida+de+la+Amistad+%2380+Jomulco,+63890+Jala,+Nay." target="_blank">Ver ubicacion</a>
    </div>
    <div class="card">
        <img src="img/restaurantes/Jala/bugambilas.jpg" alt="">
        <h2 class="hotel-name">Restaurante Bugambilias</h2>
        <h3>Restaurante mexicano</h3>
        <h3 style="color: rgb(0, 58, 247);">Direccion: Tampico 52, Salida a Carretera Internacional, Jala, Nay.</h3>
        <h4 style="color: rgb(0, 18, 78);">De lunes a domingo de 6:00 am a 8:00 pm</h4>
        <h3 class="numero">Telefono: 324 276 0247</h3>
        <a href="https://www.google.com/maps/dir//Tampico+52,+Salida+a+Carretera+Internacional,+63890+Jala,+Nay./@21.0935475,-104.5071676,12z/data=!4m8!4m7!1m0!1m5!1m1!1s0x8426fb03358b275d:0xe2fb0421b4c5e4fe!2m2!1d-104.4371272!2d21.0935619?entry=ttu" target="_blank">Ver ubicacion</a>
    </div>
    <div class="card">
        <img src="img/restaurantes/Jala/melva.jpg" alt="">
        <h2 class="hotel-name">Fonda Doña Melva</h2>
        <h3>Restaurante mexicano</h3>
        <h3 style="color: rgb(0, 58, 247);">Direccion: José María Morelos 110, San Francisco, Centro, Jala, Nay.</h3>
        <h4 style="color: rgb(0, 18, 78);">De lunes a domingo de 8:00 am a 4:30 pm</h4>
        <h3 class="numero">Telefono: 324 276 1780</h3>
        <a href="https://www.google.com/maps?opi=89978449&lqi=ChxyZXN0YXVyYW50ZXMgZW4gamFsYSBuYXlhcml0SOXC1bPqgICACFoqEAAYABgCIhxyZXN0YXVyYW50ZXMgZW4gamFsYSBuYXlhcml0KgQIAxAAkgESbWV4aWNhbl9yZXN0YXVyYW50qgFXEAEqECIMcmVzdGF1cmFudGVzKA4yHxABIhu8lCETG7h8r71z3Sk9VY8ZxprkBsUsAEmZFRoyIBACIhxyZXN0YXVyYW50ZXMgZW4gamFsYSBuYXlhcml0&phdesc=iuhxTJM0HJ4&vet=12ahUKEwjxydjMt5uAAxXOHEQIHREdD8oQ8UF6BAgFEGs..i&lei=8S-4ZLGNPM65kPIPkbq80Aw&cs=1&um=1&ie=UTF-8&fb=1&gl=mx&sa=X&geocode=Kauq-kcQ-yaEMWEMQSdrSNQ9&daddr=Jos%C3%A9+Mar%C3%ADa+Morelos+110,+San+Francisco,+Centro,+63880+Jala,+Nay." target="_blank">Ver ubicacion</a>
    </div>
</div>
<br><br>
<div class="container">
    <div class="card">
        <img src="img/restaurantes/Jala/pachita.jpg" alt="">
        <h2 class="hotel-name">Fonda Mamá Pachita</h2>
        <h3>Restaurante</h3>
        <h3 style="color: rgb(0, 58, 247);">Direccion: Morelos 77, San Juan, Centro, 63892 Jala, Nay.</h3>
        <h4 style="color: rgb(0, 18, 78);">De viernes a domingo de 1:00 pm a 8:00 pm</h4>
        <h3 class="numero">Telefono: </h3>
        <a href="https://www.google.com/maps/dir//Morelos+77,+San+Juan,+Centro,+63892+Jala,+Nay./@21.1042532,-104.5054633,12z/data=!4m8!4m7!1m0!1m5!1m1!1s0x8426fb0e4ea9dd47:0xf97530ae6415cb10!2m2!1d-104.43542!2d21.1042761?entry=ttu" target="_blank">Ver ubicacion</a>
    </div>
    <div class="card">
        <img src="img/restaurantes/Jala/milagrito.jpg" alt="">
        <h2 class="hotel-name">Cenaduria "El Milagrito"</h2>
        <h3>Restaurante</h3>
        <h3 style="color: rgb(0, 58, 247);">Direccion: Hidalgo 94, San Francisco, San Andrés, Jala, Nay.</h3>
        <h4 style="color: rgb(0, 18, 78);">De sabado y domingo de 1:00 pm a 9:00 pm</h4>
        <h3 class="numero">Telefono: 324 116 5183</h3>
        <a href="https://www.google.com/maps/dir//Hidalgo+94,+San+Francisco,+San+Andr%C3%A9s,+63880+Jala,+Nay./@21.0993349,-104.4964521,12z/data=!4m8!4m7!1m0!1m5!1m1!1s0x8426fb678c525749:0xc1a50af4c963f393!2m2!1d-104.4264461!2d21.0993608?entry=ttu" target="_blank">Ver ubicacion</a>
    </div>
    <div class="card">
        <img src="img/restaurantes/Jala/changlong.jpg" alt="">
        <h2 class="hotel-name">Comida china Chang Long</h2>
        <h3>Restaurante chino</h3>
        <h3 style="color: rgb(0, 58, 247);">Direccion: Tampico 40, Jardines del Llano, Jala, Nay.</h3>
        <h4 style="color: rgb(0, 18, 78);">De lunes a domingo de 10:00 am a 8:00 pm</h4>
        <h3 class="numero"></h3>
        <a href="https://www.google.com/maps/dir//Tampico+40,+Jardines+del+Llano,+63880+Jala,+Nay./@21.0994469,-104.502524,12z/data=!4m8!4m7!1m0!1m5!1m1!1s0x8426fb9e8bb0aa19:0xba29c9a4607938fd!2m2!1d-104.4324967!2d21.0994647?entry=ttu" target="_blank">Ver ubicacion</a>
    </div>
</div>
</span>
<br>
<br>
<!--boton para mostrar mas-->
<center><button class="read-more-btn">Ver Mas/Menos</button></center>
<!--separacion entre tarjetas-->
<br>
<br>
<br>
   <!----> 
<!--La Yesca-->
<!--tarjetas restaurantes(las 3 que son visibles)-->
<div data-aos="fade-up" data-aos-duration="1500">
    <h1 class="title">Restaurante de La Yesca</h1>
    </div>
    <div data-aos="fade-up" data-aos-duration="1500">
    <div class="container">
        <div class="card">
            <img src="img/restaurantes/La Yesca/ayotita.jpg" alt="">
            <h2 class="hotel-name">Ayotita</h2>
            <h3>Restaurante  de comida rápida</h3>
            <h3 style="color: rgb(0, 58, 247);">Direccion: El Rincón de las Flores, La Yesca, Nay.</h3>
            <h4 style="color: rgb(0, 18, 78);">De lunes a domingo de 6:00 am a 8:00 pm</h4>
            <h3 class="numero"></h3>
            <a href="https://www.google.com/maps/dir//El+Rinc%C3%B3n+de+las+Flores,+63580+La+Yesca,+Nay./@21.3181985,-104.0801789,12z/data=!4m8!4m7!1m0!1m5!1m1!1s0x8427b3c9dc2dedaf:0x90f77b66da96e424!2m2!1d-104.0101442!2d21.3182142?entry=ttu" target="_blank">Ver ubicacion</a>
        </div>
    </div>
</div>
<!--separacion entre tarjetas-->
<br>
<br>
<br>
   <!----> 
<!--Rosamorada-->
<!--tarjetas restaurantes(las 3 que son visibles)-->
<div data-aos="fade-up" data-aos-duration="1500">
    <h1 class="title">Restaurantes de Rosamorada</h1>
    </div>
    <div data-aos="fade-up" data-aos-duration="1500">
    <div class="container">
        <div class="card">
            <img src="img/restaurantes/Rosamorada/camaroncito.jpg" alt="">
            <h2 class="hotel-name">Restaurant El Camaroncito</h2>
            <h3>Marisquería</h3>
            <h3 style="color: rgb(0, 58, 247);">Direccion: Insurgentes 209, Insurgentes, Rosamorada, Nay.</h3>
            <h4 style="color: rgb(0, 18, 78);">De martes a domingo de 10:00 am a 8:00 pm</h4>
            <h3 class="numero">Telefono: 323 232 4033</h3>
            <a href="https://www.google.com/maps/dir//Insurgentes+209,+Insurgentes,+63630+Rosamorada,+Nay./@22.1208917,-105.2781348,12z/data=!4m8!4m7!1m0!1m5!1m1!1s0x869e0fe9aeac3117:0xa41efd55f8e987be!2m2!1d-105.208088!2d22.1208832?entry=ttu" target="_blank">Ver ubicacion</a>
        </div>
        <div class="card">
            <img src="img/restaurantes/Rosamorada/selene.jpg" alt="">
            <h2 class="hotel-name">COMEDOR SELENE</h2>
            <h3>Restaurante</h3>
            <h3 style="color: rgb(0, 58, 247);">Direccion: Insurgentes, Caminera, Rosamorada, Nay.</h3>
            <h4 style="color: rgb(0, 18, 78);">De lunes a domingo de 7:00 pm a 4:00 pm</h4>
            <h3 class="numero">Telefono: </h3>
            <a href="https://www.google.com/maps/dir//Insurgentes,+Caminera,+63630+Rosamorada,+Nay./@22.1190637,-105.2852752,12z/data=!4m8!4m7!1m0!1m5!1m1!1s0x869e0fd938f41645:0xa325176eee8c4b2e!2m2!1d-105.2152393!2d22.1190857?entry=ttu" target="_blank">Ver ubicacion</a>
        </div>
        <div class="card">
            <img src="img/restaurantes/Rosamorada/birria.jpg" alt="">
            <h2 class="hotel-name">Birrias ROSAMORADA</h2>
            <h3>Restaurante</h3>
            <h3 style="color: rgb(0, 58, 247);">Direccion: nsurgentes, Rosamorada, Nay.</h3>
            <h4 style="color: rgb(0, 18, 78);">De lunes a domingo de 7:00 am a 4:00 pm</h4>
            <h3 class="numero">Telefono: 323 232 1661</h3>
            <a href="https://www.google.com/maps/dir//Insurgentes,+Rosamorada,+Nay./@22.120534,-105.2783464,12z/data=!4m8!4m7!1m0!1m5!1m1!1s0x869e0fdb372ba1ef:0xd5bd535d9462a340!2m2!1d-105.2083052!2d22.1205434?entry=ttu" target="_blank">Ver ubicacion</a>
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
        <img src="img/restaurantes/Rosamorada/fogon.jpg" alt="">
        <h2 class="hotel-name">RESTAURANTE EL FOGON</h2>
        <h3>Restaurante</h3>
        <h3 style="color: rgb(0, 58, 247);">Direccion: Insurgentes 20, Insurgentes, Rosamorada, Nay.</h3>
        <h4 style="color: rgb(0, 18, 78);">De lunes a domingo de 3:00 pm a 11:00 pm</h4>
        <h3 class="numero">Telefono: 323 174 2865</h3>
        <a href="https://www.google.com/maps/dir//Insurgentes+20,+Insurgentes,+63630+Rosamorada,+Nay./@22.1205919,-105.279125,12z/data=!4m8!4m7!1m0!1m5!1m1!1s0x869e0f13b241615d:0x4e453ce435f6bc5d!2m2!1d-105.2090846!2d22.1206068?entry=ttu" target="_blank">Ver ubicacion</a>
    </div>
    <div class="card">
        <img src="img/restaurantes/Rosamorada/chispita.jpg" alt="">
        <h2 class="hotel-name">Lonchería "La Chispita"</h2>
        <h3>Restaurante de almuerzo en Rosamorada</h3>
        <h3 style="color: rgb(0, 58, 247);">Direccion: Leona Vicario, Insurgentes, Rosamorada, Nay.</h3>
        <h4 style="color: rgb(0, 18, 78);">De lunes a viernes de 7:30 pm a 1:30 pm</h4>
        <h3 class="numero">Telefono: 319 115 0758</h3>
        <a href="https://www.google.com/maps/dir//Leona+Vicario,+Insurgentes,+63630+Rosamorada,+Nay./@22.1198961,-105.2802957,12z/data=!4m8!4m7!1m0!1m5!1m1!1s0x869e0f395ae34365:0x3f8c469e535eab34!2m2!1d-105.2102553!2d22.119911?entry=ttu" target="_blank">Ver ubicacion</a>
    </div>
    <div class="card">
        <img src="img/restaurantes/Rosamorada/que chulada.jpg" alt="">
        <h2 class="hotel-name">Comedor QUE CHULADA</h2>
        <h3>Restaurante</h3>
        <h3 style="color: rgb(0, 58, 247);">Direccion: Insurgentes 52, Insurgentes, Rosamorada, Nay.</h3>
        <h4 style="color: rgb(0, 18, 78);">De lunes a domingo de 7:10 pm a 4:15 pm</h4>
        <h3 class="numero">Telefono: 319 234 0406</h3>
        <a href="https://www.google.com/maps/dir//Insurgentes+52,+Insurgentes,+63630+Rosamorada,+Nay./@22.1190148,-105.2847167,12z/data=!4m8!4m7!1m0!1m5!1m1!1s0x869e0fd94577bdad:0x87941e3451e4695!2m2!1d-105.2146738!2d22.1190197?entry=ttu" target="_blank">Ver ubicacion</a>
    </div>
</div>
</span>
<br>
<br>
<!--boton para mostrar mas-->
<center><button class="read-more-btn">Ver Mas/Menos</button></center>
<!--separacion entre tarjetas-->
<br>
<br>
<br>
   <!----> 
<!--Ruiz-->
<!--tarjetas restaurantes(las 3 que son visibles)-->
<div data-aos="fade-up" data-aos-duration="1500">
    <h1 class="title">Restaurantes de Ruiz</h1>
    </div>
    <div data-aos="fade-up" data-aos-duration="1500">
    <div class="container">
        <div class="card">
            <img src="img/restaurantes/Ruiz/fogonero.jpg" alt="">
            <h2 class="hotel-name">Restaurante El fogonero</h2>
            <h3>Restaurante</h3>
            <h3 style="color: rgb(0, 58, 247);">Direccion: Amado Nervo 602, Centro, Ruiz, Nay.</h3>
            <h4 style="color: rgb(0, 18, 78);">De martes a domingo de 8:30 am a 10:30 pm</h4>
            <h3 class="numero">Telefono: 319 233 0548</h3>
            <a href="https://www.google.com/maps/dir//Amado+Nervo+602,+Centro,+63600+Ruiz,+Nay./@21.9493909,-105.2178141,12z/data=!4m8!4m7!1m0!1m5!1m1!1s0x869e023672989d19:0x916b13c17ffffacd!2m2!1d-105.147772!2d21.949403?entry=ttu" target="_blank">Ver ubicacion</a>
        </div>
        <div class="card">
            <img src="img/restaurantes/Ruiz/merced.jpg" alt="">
            <h2 class="hotel-name">La Merced</h2>
            <h3>Restaurante</h3>
            <h3 style="color: rgb(0, 58, 247);">Direccion: Av. Juárez, Ochota, Ruiz, Nay.</h3>
            <h4 style="color: rgb(0, 18, 78);"></h4>
            <h3 class="numero"></h3>
            <a href="https://www.google.com/maps/dir//Av.+Ju%C3%A1rez,+Ochota,+63600+Ruiz,+Nay./@21.9473102,-105.2195119,12z/data=!4m8!4m7!1m0!1m5!1m1!1s0x869e03c7aa62c1a3:0x1af4910f92e085c0!2m2!1d-105.1494875!2d21.9473496?entry=ttu" target="_blank">Ver ubicacion</a>
        </div>
        <div class="card">
            <img src="img/restaurantes/Ruiz/elton.jpg" alt="">
            <h2 class="hotel-name">El ton</h2>
            <h3>Restaurante</h3>
            <h3 style="color: rgb(0, 58, 247);">Direccion: Tijuana, Tijuanita, Ruiz, Nay.</h3>
            <h4 style="color: rgb(0, 18, 78);"></h4>
            <h3 class="numero"></h3>
            <a href="https://www.google.com/maps/dir//Tijuana,+Tijuanita,+63600+Ruiz,+Nay./@21.9530846,-105.2056188,12z/data=!4m8!4m7!1m0!1m5!1m1!1s0x869e03c7ac3f7c23:0x90dcf9c4f559630a!2m2!1d-105.1355784!2d21.9530994?entry=ttu" target="_blank">Ver ubicacion</a>
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
        <img src="img/restaurantes/Ruiz/2guapos.jpg" alt="">
        <h2 class="hotel-name">Los 2 Guapos Y El Pato</h2>
        <h3>Restaurante</h3>
        <h3 style="color: rgb(0, 58, 247);">Direccion: Miguel Hidalgo 524-525, Centro, Ruiz, Nay.</h3>
        <h4 style="color: rgb(0, 18, 78);"></h4>
        <h3 class="numero"></h3>
        <a href="https://www.google.com/maps/dir//Miguel+Hidalgo+524-525,+Centro,+63600+Ruiz,+Nay./@21.9493074,-105.2173204,12z/data=!4m8!4m7!1m0!1m5!1m1!1s0x869e02366edec25f:0xa3d85cf16b66e8c5!2m2!1d-105.1472869!2d21.9493324?entry=ttu" target="_blank">Ver ubicacion</a>
    </div>
    <div class="card">
        <img src="img/restaurantes/Ruiz/doris.jpg" alt="">
        <h2 class="hotel-name">Restaurant Y Locheria Doris</h2>
        <h3>Restaurante</h3>
        <h3 style="color: rgb(0, 58, 247);">Direccion:  Veracruz, Centro, Ruiz, Nay.</h3>
        <h4 style="color: rgb(0, 18, 78);">De lunes a domingo de 7:00 am a 4:00 pm</h4>
        <h3 class="numero">Telefono: 319 233 0798</h3>
        <a href="https://www.google.com/maps/dir//Veracruz,+Centro,+63626+Ruiz,+Nay./@21.9518898,-105.2135576,12z/data=!4m8!4m7!1m0!1m5!1m1!1s0x869e02340a9450af:0x2d21db43d56ef193!2m2!1d-105.1435779!2d21.9518702?entry=ttu" target="_blank">Ver ubicacion</a>
    </div>
    <div class="card">
        <img src="img/restaurantes/Ruiz/elwango.jpg" alt="">
        <h2 class="hotel-name">Mariscos "El Wango"</h2>
        <h3>Marisquería</h3>
        <h3 style="color: rgb(0, 58, 247);">Direccion: México, El Rastro, Ruiz, Nay.</h3>
        <h4 style="color: rgb(0, 18, 78);">De lunes a domingo de 11:00 am a 6:00 pm. Miercoles cerrado</h4>
        <h3 class="numero">Telefono: 323 116 1392</h3>
        <a href="https://www.google.com/maps/dir//M%C3%A9xico,+El+Rastro,+63626+Ruiz,+Nay./@21.9487217,-105.2114717,12z/data=!4m8!4m7!1m0!1m5!1m1!1s0x869e0397456448e7:0x7966b6b3ab6e1350!2m2!1d-105.1413975!2d21.9487492?entry=ttu" target="_blank">Ver ubicacion</a>
    </div>
</div>
<br><br>
<div class="container">
    <div class="card">
        <img src="img/restaurantes/Ruiz/zapata.jpg" alt="">
        <h2 class="hotel-name">Restaurant El Rosal De Zapata</h2>
        <h3>Restaurante mexicano</h3>
        <h3 style="color: rgb(0, 58, 247);">Direccion: San Antonio, Ruiz, Nay.</h3>
        <h4 style="color: rgb(0, 18, 78);">De lunes a domingo de 7:00 am a 4:00 pm. Miercoles cerrado</h4>
        <h3 class="numero">Telefono: 323 117 2749</h3>
        <a href="https://www.google.com/maps/dir//San+Antonio,+63625+Ruiz,+Nay./@21.9525729,-105.2097429,12z/data=!4m8!4m7!1m0!1m5!1m1!1s0x869e013f4950c261:0x1b02b178c8d15abf!2m2!1d-105.1397037!2d21.9525429?entry=ttu" target="_blank">Ver ubicacion</a>
    </div>
    <div class="card">
        <img src="img/restaurantes/Ruiz/guamuchilito.jpg" alt="">
        <h2 class="hotel-name">EL GUAMUCHILITO</h2>
        <h3>Restaurante</h3>
        <h3 style="color: rgb(0, 58, 247);">Direccion: El Manguito, Ochota, Ruiz, Nay.</h3>
        <h4 style="color: rgb(0, 18, 78);"></h4>
        <h3 class="numero">Telefono: 319 233 2780</h3>
        <a href="https://www.google.com/maps/dir//El+Manguito,+Ochota,+63600+Ruiz,+Nay./@21.9452113,-105.2232465,12z/data=!4m8!4m7!1m0!1m5!1m1!1s0x869e037ecefc14ad:0x5f4e87f1da086496!2m2!1d-105.1532066!2d21.9452272?entry=ttu" target="_blank">Ver ubicacion</a>
    </div>
    <div class="card">
        <img src="img/restaurantes/Ruiz/toldos.jpg" alt="">
        <h2 class="hotel-name">Mariscos los toldos</h2>
        <h3>Marisquería</h3>
        <h3 style="color: rgb(0, 58, 247);">Direccion: Juan Escutia 504, La Redonda, Ruiz, Nay.</h3>
        <h4 style="color: rgb(0, 18, 78);">De lunes a domingo de 12:15 pm a 5:00 pm</h4>
        <h3 class="numero">Telefono: 319 233 0690</h3>
        <a href="https://www.google.com/maps/dir//Juan+Escutia+504,+La+Redonda,+63600+Ruiz,+Nay./@21.9560617,-105.2142196,12z/data=!4m8!4m7!1m0!1m5!1m1!1s0x869e031599053957:0xab61037c0b2dd12c!2m2!1d-105.1441551!2d21.956018?entry=ttu" target="_blank">Ver ubicacion</a>
    </div>
</div>
<br><br>
<div class="container">
    <div class="card">
        <img src="img/restaurantes/Ruiz/campestre.jpg" alt="">
        <h2 class="hotel-name">El Campestre</h2>
        <h3>Restaurante</h3>
        <h3 style="color: rgb(0, 58, 247);">Direccion: a un costado prepa #11, av. juarez, Tijuanita, Ruiz, Nay.</h3>
        <h4 style="color: rgb(0, 18, 78);">De lunes a domingo de 6:30 am a 12:00 am. Viernes cerrado</h4>
        <h3 class="numero">Telefono: 323 117 1596</h3>
        <a href="https://www.google.com/maps/dir//a+un+costado+prepa+%2311,+av.+juarez,+Tijuanita,+63600+Ruiz,+Nay./@21.954826,-105.1988597,12z/data=!4m8!4m7!1m0!1m5!1m1!1s0x869e03a2029547ef:0x98752d85d5efc5c!2m2!1d-105.1288193!2d21.9548408?entry=ttu" target="_blank">Ver ubicacion</a>
    </div>
    <div class="card">
        <img src="img/restaurantes/Ruiz/herman.jpg" alt="">
        <h2 class="hotel-name">Pizza Herman</h2>
        <h3>Pizzería</h3>
        <h3 style="color: rgb(0, 58, 247);">Direccion: Av. Juárez 304, Centro, Ruiz, Nay.</h3>
        <h4 style="color: rgb(0, 18, 78);">De lunes a domingo de 10:00 am a 10:00 pm</h4>
        <h3 class="numero">Telefono: 319 233 1365</h3>
        <a href="https://www.google.com/maps?opi=89978449&lqi=ChxQaXp6YSBIZXJtYW4gZW4gcnVpeiBuYXlhcml0SM_K4LyzrICACFowEAAQARgAGAEYAyIccGl6emEgaGVybWFuIGVuIHJ1aXogbmF5YXJpdCoGCAIQABABkgEQcGl6emFfcmVzdGF1cmFudKoBVxABKhAiDHBpenphIGhlcm1hbigOMh8QASIbAGDfGcZ6q7w85bp1siTlkp6h7vh5rs0-PUF_MiAQAiIccGl6emEgaGVybWFuIGVuIHJ1aXogbmF5YXJpdA&phdesc=n2vAJ7Trif8&vet=12ahUKEwj6iffIy5uAAxVOiO4BHTyZDtoQ8UF6BAgFEBg..i&lei=4kS4ZPqQMc6Qur8PvLK60A0&cs=1&um=1&ie=UTF-8&fb=1&gl=mx&sa=X&geocode=KVWiOKM2Ap6GMXit_fktPNGi&daddr=Av.+Ju%C3%A1rez+304,+Centro,+63620+Ruiz,+Nay." target="_blank">Ver ubicacion</a>
    </div>
    <div class="card">
        <img src="img/restaurantes/Ruiz/la orden del taco.jpg" alt="">
        <h2 class="hotel-name">Harry potter y la orden del Taco</h2>
        <h3>Restaurante</h3>
        <h3 style="color: rgb(0, 58, 247);">Direccion: Miguel Hidalgo 506-460, Centro, Ruiz, Nay.</h3>
        <h4 style="color: rgb(0, 18, 78);">De lunes a domingo de 9:00 am a 5:00 pm</h4>
        <h3 class="numero"></h3>
        <a href="https://www.google.com/maps/dir//Miguel+Hidalgo+506-460,+Centro,+63600+Ruiz,+Nay./@21.9491135,-105.2173488,12z/data=!4m8!4m7!1m0!1m5!1m1!1s0x869e03f02dd08593:0xa03705e9ba9dcc50!2m2!1d-105.1473332!2d21.9491713?entry=ttu" target="_blank">Ver ubicacion</a>
    </div>
</div>
</span>
<br>
<br>
<!--boton para mostrar mas-->
<center><button class="read-more-btn">Ver Mas/Menos</button></center>
<!--separacion entre tarjetas-->
<br>
<br>
<br>
   <!----> 
<!--San Blas-->
<!--tarjetas restaurantes(las 3 que son visibles)-->
<div data-aos="fade-up" data-aos-duration="1500">
    <h1 class="title">Restaurantes de San Blas</h1>
    </div>
    <div data-aos="fade-up" data-aos-duration="1500">
    <div class="container">
        <div class="card">
            <img src="img/restaurantes/San Blas/playa bonita.jpg" alt="">
            <h2 class="hotel-name">Restaurante Playa Bonita</h2>
            <h3>Marisquería</h3>
            <h3 style="color: rgb(0, 58, 247);">Direccion: Turístico Playa del Borrego 19, Playa del Borrego, San Blas, Nay.</h3>
            <h4 style="color: rgb(0, 18, 78);">De lunes a domingo de 9:00 am a 6:00 pm</h4>
            <h3 class="numero">Telefono: 323 122 7458</h3>
            <a href="https://www.google.com/maps/dir//Tur%C3%ADstico+Playa+del+Borrego+19,+Playa+del+Borrego,+63743+San+Blas,+Nay./@21.528055,-105.3526381,12z/data=!4m8!4m7!1m0!1m5!1m1!1s0x8420b89db5bc3de5:0x880d71a654aaa514!2m2!1d-105.2825977!2d21.5280696?entry=ttu" target="_blank">Ver ubicacion</a>
        </div>
        <div class="card">
            <img src="img/restaurantes/San Blas/tunabreak.jpg" alt="">
            <h2 class="hotel-name">Tunabreak Playa del Borrego</h2>
            <h3>Restaurante</h3>
            <h3 style="color: rgb(0, 58, 247);">Direccion: Turístico Playa del Borrego, Teniente Azueta, San Blas, Nay.</h3>
            <h4 style="color: rgb(0, 18, 78);">De lunes a domingo de 10:30 pm a 6:30 pm</h4>
            <h3 class="numero">Telefono:  311 121 9555</h3>
            <a href="https://www.google.com/maps?opi=89978449&lqi=Ci9UdW5hYnJlYWsgUGxheWEgZGVsIEJvcnJlZ28gZW4gc2FuIGJsYXMgbmF5YXJpdEjc6sqZhq2AgAhaURAAEAEQAhADGAAYARgCGAMYBRgGIi90dW5hYnJlYWsgcGxheWEgZGVsIGJvcnJlZ28gZW4gc2FuIGJsYXMgbmF5YXJpdCoKCAIQABABEAIQA5IBCnJlc3RhdXJhbnQ&phdesc=nTUbgqJSvdc&vet=12ahUKEwjD7JqDz5uAAxXmLEQIHZkTDIEQ8UF6BAgFEBg..i&lei=gki4ZMOjFObZkPIPmaewiAg&cs=1&um=1&ie=UTF-8&fb=1&gl=mx&sa=X&geocode=KVMfSPG-uCCEMTT2JVi8Qoip&daddr=Tur%C3%ADstico+Playa+del+Borrego,+Teniente+Azueta,+63743+San+Blas,+Nay." target="_blank">Ver ubicacion</a>
        </div>
        <div class="card">
            <img src="img/restaurantes/San Blas/caballito de mar.jpg" alt="">
            <h2 class="hotel-name">Caballito de Mar</h2>
            <h3>Marisquería</h3>
            <h3 style="color: rgb(0, 58, 247);">Direccion:  Turístico Playa del Borrego 19, Playa del Borrego, San Blas, Nay.</h3>
            <h4 style="color: rgb(0, 18, 78);">De lunes a domingo de 11:00 am a 7:00 pm</h4>
            <h3 class="numero">Telefono: 322 216 9202</h3>
            <a href="https://www.google.com/maps/dir//Tur%C3%ADstico+Playa+del+Borrego+19,+Playa+del+Borrego,+63743+San+Blas,+Nay./@21.5294281,-105.3548644,12z/data=!4m8!4m7!1m0!1m5!1m1!1s0x8420b89ebdc7ee21:0xf021b2cf121f7b47!2m2!1d-105.284824!2d21.5294427?entry=ttu" target="_blank">Ver ubicacion</a>
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
        <img src="img/restaurantes/San Blas/borrego.jpeg" alt="">
        <h2 class="hotel-name">EL BORREGO San Blas</h2>
        <h3>Restaurante</h3>
        <h3 style="color: rgb(0, 58, 247);">Direccion: Turístico Playa del Borrego 19, Playa del Borrego, San Blas, Nay.</h3>
        <h4 style="color: rgb(0, 18, 78);">De lunes a domingo de 9:00 am a 6:00 pm</h4>
        <h3 class="numero">Telefono: 323 106 5726</h3>
        <a href="https://www.google.com/maps/dir//Tur%C3%ADstico+Playa+del+Borrego+19,+Playa+del+Borrego,+63743+San+Blas,+Nay./@21.5299541,-105.355771,12z/data=!4m8!4m7!1m0!1m5!1m1!1s0x8420b94ecfafdbf1:0xfe167018435d5d74!2m2!1d-105.2857306!2d21.5299687?entry=ttu" target="_blank">Ver ubicacion</a>
    </div>
    <div class="card">
        <img src="img/restaurantes/San Blas/cocoloco.jpg" alt="">
        <h2 class="hotel-name">Coco Loco</h2>
        <h3>Bar</h3>
        <h3 style="color: rgb(0, 58, 247);">Direccion: C. Las Palmas 5, Palmar los Cocos, San Blas, Nay.</h3>
        <h4 style="color: rgb(0, 18, 78);">De lunes a domingo de 10:00 am a 2:00 am</h4>
        <h3 class="numero">Telefono: 323 285 0055</h3>
        <a href="https://www.google.com/maps/dir//C.+Las+Palmas+5,+Palmar+los+Cocos,+63743+San+Blas,+Nay./@21.5324854,-105.3533737,12z/data=!4m8!4m7!1m0!1m5!1m1!1s0x8420b89a287bec53:0xe004f456fe3451!2m2!1d-105.2834112!2d21.5325367?entry=ttu" target="_blank">Ver ubicacion</a>
    </div>
    <div class="card">
        <img src="img/restaurantes/San Blas/tacoguapo.jpg" alt="">
        <h2 class="hotel-name">EL TACO GUAPO</h2>
        <h3>Taquería</h3>
        <h3 style="color: rgb(0, 58, 247);">Direccion: San Blas, Nay.</h3>
        <h4 style="color: rgb(0, 18, 78);">Sabado de 7:00 pm a 11:00 pm</h4>
        <h3 class="numero">Telefono: 323 105 2199</h3>
        <a href="https://www.google.com/maps/dir//63743+San+Blas,+Nay./@21.5352965,-105.3481246,12z/data=!4m8!4m7!1m0!1m5!1m1!1s0x8420b9d8f3e27f97:0x292fc8290acdd7f9!2m2!1d-105.2780604!2d21.5353381?entry=ttu" target="_blank">Ver ubicacion</a>
    </div>
</div>
<br><br>
<div class="container">
    <div class="card">
        <img src="img/restaurantes/San Blas/mangle.jpg" alt="">
        <h2 class="hotel-name">Finca Mangle</h2>
        <h3>Lounge</h3>
        <h3 style="color: rgb(0, 58, 247);">Direccion: Emilio M. González, San Blas, Nay.</h3>
        <h4 style="color: rgb(0, 18, 78);"></h4>
        <h3 class="numero">Telefono: 311 184 9775</h3>
        <a href="https://www.google.com/maps?opi=89978449&lqi=CiBGaW5jYSBNYW5nbGUgZW4gc2FuIGJsYXMgbmF5YXJpdEjPlt-JpLCAgAhaNhAAEAEYABgBGAMYBCIgZmluY2EgbWFuZ2xlIGVuIHNhbiBibGFzIG5heWFyaXQqBggCEAAQAZIBBmxvdW5nZaoBWxABKhAiDGZpbmNhIG1hbmdsZSgOMh8QASIbqJPy59ooQIztcG6-tqCBD_jtABzyD-vx1qmMMiQQAiIgZmluY2EgbWFuZ2xlIGVuIHNhbiBibGFzIG5heWFyaXQ&phdesc=RpzXecWSqZY&vet=12ahUKEwiM86PX0ZuAAxVpIkQIHVdgAoQQ8UF6BAgGEBg..i&lei=S0u4ZMyhH-nEkPIP18CJoAg&cs=1&um=1&ie=UTF-8&fb=1&gl=mx&sa=X&geocode=KR9dJcI_uSCEMdJmhm8N0jqW&daddr=Emilio+M.+Gonz%C3%A1lez,+63743+San+Blas,+Nay." target="_blank">Ver ubicacion</a>
    </div>
    <div class="card">
        <img src="img/restaurantes/San Blas/mrcamaronobelisco.jpg" alt="">
        <h2 class="hotel-name">Mr Camarón Obelisco</h2>
        <h3>Restaurante</h3>
        <h3 style="color: rgb(0, 58, 247);">Direccion: C. Canalizó Sur 57, Sin Nombre Loc. San Blas, Progreso.</h3>
        <h4 style="color: rgb(0, 18, 78);">De lunes a domingo de 10:30 pm a 5:20 pm. Martes cerrado</h4>
        <h3 class="numero">Telefono: 323 285 0035</h3>
        <a href="https://www.google.com/maps/dir//C.+Canaliz%C3%B3+Sur+57,+Sin+Nombre+Loc.+San+Blas,+Progreso,+63744+San+Blas,+Nay./@21.5371722,-105.3546825,12z/data=!4m8!4m7!1m0!1m5!1m1!1s0x8420b93f0a27b12f:0x50d45d9a3d9ea656!2m2!1d-105.2846421!2d21.5371868?entry=ttu" target="_blank">Ver ubicacion</a>
    </div>
    <div class="card">
        <img src="img/restaurantes/San Blas/ofros.jpg" alt="">
        <h2 class="hotel-name">Ofros</h2>
        <h3>Restaurante</h3>
        <h3 style="color: rgb(0, 58, 247);">Direccion: Av Benito Juárez 66, Sin Nombre Loc. San Blas, Centro, San Blas, Nay.</h3>
        <h4 style="color: rgb(0, 18, 78);">De lunes a domingo de 6:00 am a 10:00 pm</h4>
        <h3 class="numero">Telefono: 323 285 0750</h3>
        <a href="https://www.google.com/maps/dir//Av+Benito+Ju%C3%A1rez+66,+Sin+Nombre+Loc.+San+Blas,+Centro,+63740+San+Blas,+Nay./@21.5411408,-105.3569631,12z/data=!4m8!4m7!1m0!1m5!1m1!1s0x8420b896625708fd:0x698e67b9db4b13d0!2m2!1d-105.2869227!2d21.5411554?entry=ttu" target="_blank">Ver ubicacion</a>
    </div>
</div>
<br><br>
<div class="container">
    <div class="card">
        <img src="img/restaurantes/San Blas/lachula.JPG" alt="">
        <h2 class="hotel-name">La Chula - Sarandeado</h2>
        <h3>Marisquería</h3>
        <h3 style="color: rgb(0, 58, 247);">Direccion: Retorno 17, El Cerrito, San Blas, Nay.</h3>
        <h4 style="color: rgb(0, 18, 78);">De martes a domingo de 10:00 am a 6:00 pm</h4>
        <h3 class="numero"></h3>
        <a href="https://www.google.com/maps/dir//Retorno+17,+El+Cerrito,+63743+San+Blas,+Nay./@21.5438586,-105.344871,12z/data=!4m8!4m7!1m0!1m5!1m1!1s0x8420b88c2d91aa3b:0x582b0789620dd6e3!2m2!1d-105.2748306!2d21.5438732?entry=ttu" target="_blank">Ver ubicacion</a>
    </div>
    <div class="card">
        <img src="img/restaurantes/San Blas/jejenero.jpg" alt="">
        <h2 class="hotel-name">Restaurant El Jejenero</h2>
        <h3>Restaurante</h3>
        <h3 style="color: rgb(0, 58, 247);">Direccion:  Prolongacion Juarez s/n, El Conchal, San Blas, Nay.</h3>
        <h4 style="color: rgb(0, 18, 78);">De martes a domingo de 10:00 am a 6:00 pm</h4>
        <h3 class="numero"></h3>
        <a href="https://www.google.com/maps?opi=89978449&lqi=CipSZXN0YXVyYW50IEVsIEplamVuZXJvIGVuIHNhbiBibGFzIG5heWFyaXRI1I2eyaaugIAIWkYQABABEAIYABgBGAIYBBgFIipyZXN0YXVyYW50IGVsIGplamVuZXJvIGVuIHNhbiBibGFzIG5heWFyaXQqCAgCEAAQARACkgEKcmVzdGF1cmFudKoBbhABKhoiFnJlc3RhdXJhbnQgZWwgamVqZW5lcm8oDjIeEAEiGlgqNiAE-Wwd-2q_8XS4fSrUzXOhp3eBKEoTMi4QAiIqcmVzdGF1cmFudCBlbCBqZWplbmVybyBlbiBzYW4gYmxhcyBuYXlhcml0&phdesc=y8ott9Qc940&vet=12ahUKEwip7fiU15uAAxVHN0QIHXz-AucQ8UF6BAgFEBg..i&lei=C1G4ZOk7x-6Q8g_8_Iu4Dg&cs=1&um=1&ie=UTF-8&fb=1&gl=mx&sa=X&geocode=Kc35SM6NuCCEMbMeoD5T4Osq&daddr=Prolongacion+Juarez+s/n,+El+Conchal,+63743+San+Blas,+Nay." target="_blank">Ver ubicacion</a>
    </div>
    <div class="card">
        <img src="img/restaurantes/San Blas/carlitos.jpg" alt="">
        <h2 class="hotel-name">Restaurante Carlitos</h2>
        <h3>Restaurante</h3>
        <h3 style="color: rgb(0, 58, 247);">Direccion:  Av Benito Juárez 412, El Conchal, San Blas, Nay.</h3>
        <h4 style="color: rgb(0, 18, 78);"></h4>
        <h3 class="numero"></h3>
        <a href="https://www.google.com/maps?opi=89978449&lqi=CihSZXN0YXVyYW50ZSBDYXJsaXRvcyBlbiBzYW4gYmxhcyBuYXlhcml0SLnN2rOvt4CACFo-EAAQARgAGAEYAxgEIihyZXN0YXVyYW50ZSBjYXJsaXRvcyBlbiBzYW4gYmxhcyBuYXlhcml0KgYIAhAAEAGSAQpyZXN0YXVyYW50qgFrEAEqGCIUcmVzdGF1cmFudGUgY2FybGl0b3MoDjIfEAEiG1gbWNJsGah-DVZg6Rib0GEq1ohFfCZvDYfzPjIsEAIiKHJlc3RhdXJhbnRlIGNhcmxpdG9zIGVuIHNhbiBibGFzIG5heWFyaXQ&phdesc=d5Dhf6n654o&vet=12ahUKEwis5OC22puAAxUXIUQIHYN5AiAQ8UF6BAgFEBg..i&lei=d1S4ZOzMDZfCkPIPg_OJgAI&cs=1&um=1&ie=UTF-8&fb=1&gl=mx&sa=X&geocode=KSN3AwPJuSCEMfF0HF7pEb6g&daddr=Av+Benito+Ju%C3%A1rez+412,+El+Conchal,+63743+San+Blas,+Nay." target="_blank">Ver ubicacion</a>
    </div>
</div>
<br><br>
<div class="container">
    <div class="card">
        <img src="img/restaurantes/San Blas/la isla.jpg" alt="">
        <h2 class="hotel-name">Restaurant "La Isla"</h2>
        <h3>Marisquería</h3>
        <h3 style="color: rgb(0, 58, 247);">Direccion: Paredes 33, Sin Nombre Loc. San Blas, El Guayabal, San Blas, Nay.</h3>
        <h4 style="color: rgb(0, 18, 78);">De martes a domingo de 2:00 pm a 9:00 pm</h4>
        <h3 class="numero">Telefono: 311 232 4525</h3>
        <a href="https://www.google.com/maps?opi=89978449&lqi=CihSZXN0YXVyYW50ICJMYSBJc2xhIiBlbiBzYW4gYmxhcyBuYXlhcml0SNPw4bq-goCACFo4EAAQARACGAAYARgCGAMYBCImcmVzdGF1cmFudCBsYSBpc2xhIGVuIHNhbiBibGFzIG5heWFyaXSSARJzZWFmb29kX3Jlc3RhdXJhbnSqAWcQASoWIhJyZXN0YXVyYW50IGxhIGlzbGEoDjIfEAEiG1gauXPky0K8SwD93C0HymX-wr8-dODiP2wfYjIqEAIiJnJlc3RhdXJhbnQgbGEgaXNsYSBlbiBzYW4gYmxhcyBuYXlhcml0&phdesc=GZFmPPBThoY&vet=12ahUKEwjCg8Dp2puAAxW4J0QIHXZ3AO0Q8UF6BAgFEBg..i&lei=4VS4ZIKPJ7jPkPIP9u6B6A4&cs=1&um=1&ie=UTF-8&fb=1&gl=mx&sa=X&geocode=KbEUv1-WuCCEMaOKmN3WUkLG&daddr=Paredes+33,+Sin+Nombre+Loc.+San+Blas,+El+Guayabal,+63740+San+Blas,+Nay." target="_blank">Ver ubicacion</a>
    </div>
    <div class="card">
        <img src="img/restaurantes/San Blas/alitas.png" alt="">
        <h2 class="hotel-name">Las Pinchis Alitas San Blas</h2>
        <h3>Restaurante</h3>
        <h3 style="color: rgb(0, 58, 247);">Direccion: Av Benito Juárez #183-A, Sin Nombre Loc. San Blas, Centro.</h3>
        <h4 style="color: rgb(0, 18, 78);">De miercoles a domingo de 7:00 pm a 11:00 pm</h4>
        <h3 class="numero">Telefono: 311 235 9869</h3>
        <a href="https://www.google.com/maps/dir//Av+Benito+Ju%C3%A1rez+%23183-A,+Sin+Nombre+Loc.+San+Blas,+Centro,+63740+San+Blas,+Nay./@21.5423996,-105.3528873,12z/data=!4m8!4m7!1m0!1m5!1m1!1s0x8420b98a025742a1:0x7284c7c0c9a61c2e!2m2!1d-105.2828469!2d21.5424142?entry=ttu" target="_blank">Ver ubicacion</a>
    </div>
    <div class="card">
        <img src="img/restaurantes/San Blas/tacobike.jpg" alt="">
        <h2 class="hotel-name">Taco Bike</h2>
        <h3>Taquería</h3>
        <h3 style="color: rgb(0, 58, 247);">Direccion:  José María Mercado 123, Sin Nombre Loc. San Blas, Centro, San Blas, Nay.</h3>
        <h4 style="color: rgb(0, 18, 78);">De lunes a sabdo de 8:30 am a 2:30 pm</h4>
        <h3 class="numero">Telefono: 323 131 9890</h3>
        <a href="https://www.google.com/maps?opi=89978449&lqi=Ch1UYWNvIEJpa2UgZW4gc2FuIGJsYXMgbmF5YXJpdEiZpYPgs6yAgAhaMxAAEAEYABgBGAMYBCIddGFjbyBiaWtlIGVuIHNhbiBibGFzIG5heWFyaXQqBggCEAAQAZIBD3RhY29fcmVzdGF1cmFudKoBVRABKg0iCXRhY28gYmlrZSgOMh8QASIbECqeSxPPGpK3kus7ZqorcLxTXvetVlXJk_hiMiEQAiIddGFjbyBiaWtlIGVuIHNhbiBibGFzIG5heWFyaXQ&phdesc=z9kU9_mZkTU&vet=12ahUKEwjihMfd25uAAxX4NkQIHXZWBOMQ8UF6BAgFEBg..i&lei=1VW4ZKLGAfjtkPIP9qyRmA4&cs=1&um=1&ie=UTF-8&fb=1&gl=mx&sa=X&geocode=KeuhPFCRuCCEMZmr29FHjUw3&daddr=Jos%C3%A9+Mar%C3%ADa+Mercado+123,+Sin+Nombre+Loc.+San+Blas,+Centro,+63740+San+Blas,+Nay." target="_blank">Ver ubicacion</a>
    </div>
</div>
<br><br>
<div class="container">
    <div class="card">
        <img src="img/restaurantes/San Blas/elvelero.jpg" alt="">
        <h2 class="hotel-name">RESTAURANTE EL VELERO</h2>
        <h3>Restaurante</h3>
        <h3 style="color: rgb(0, 58, 247);">Direccion: Sinaloa 47-a, Sin Nombre Loc. San Blas, Centro, San Blas, Nay.</h3>
        <h4 style="color: rgb(0, 18, 78);">De lunes a domingo de 8:00 am a 4:00 pm</h4>
        <h3 class="numero">Telefono: </h3>
        <a href="https://www.google.com/maps/dir//Sinaloa+47-a,+Sin+Nombre+Loc.+San+Blas,+Centro,+63740+San+Blas,+Nay./@21.5424112,-105.3540849,12z/data=!4m8!4m7!1m0!1m5!1m1!1s0x8420b89401caf9db:0xf11359411edc100!2m2!1d-105.2840527!2d21.542489?entry=ttu" target="_blank">Ver ubicacion</a>
    </div>
    <div class="card">
        <img src="img/restaurantes/San Blas/donatella.jpg" alt="">
        <h2 class="hotel-name">Donatella Restaurate Italiano</h2>
        <h3>Restaurante italiano</h3>
        <h3 style="color: rgb(0, 58, 247);">Direccion: Juarez y Paredas, Centro, San Blas, Nay.</h3>
        <h4 style="color: rgb(0, 18, 78);">De miercoles a sabado de 2:00 pm a 9:30 pm</h4>
        <h3 class="numero">Telefono: 323 120 8123</h3>
        <a href="https://www.google.com/maps/dir//Juarez+y+Paredas,+Centro,+63740+San+Blas,+Nay./@21.5409792,-105.357044,12z/data=!4m8!4m7!1m0!1m5!1m1!1s0x8420b9e104b3f9a1:0xa65e79875ad48b03!2m2!1d-105.2870101!2d21.5410107?entry=ttu" target="_blank">Ver ubicacion</a>
    </div>
    <div class="card">
        <img src="img/restaurantes/San Blas/lacharrita.jpg" alt="">
        <h2 class="hotel-name">restaurant la charrita</h2>
        <h3>Marisquería</h3>
        <h3 style="color: rgb(0, 58, 247);">Direccion: Salida a, Guadalupe Victoria, El Conchal, San Blas, Nay.</h3>
        <h4 style="color: rgb(0, 18, 78);">De lunes a domingo de 8:00 am a 5:00 pm</h4>
        <h3 class="numero">Telefono: 323 121 0709</h3>
        <a href="https://www.google.com/maps?opi=89978449&lqi=CipyZXN0YXVyYW50IGxhIGNoYXJyaXRhIGVuIHNhbiBibGFzIG5heWFyaXRI4rbDxLaugIAIWkYQABABEAIYABgBGAIYBBgFIipyZXN0YXVyYW50IGxhIGNoYXJyaXRhIGVuIHNhbiBibGFzIG5heWFyaXQqCAgCEAAQARACkgESc2VhZm9vZF9yZXN0YXVyYW50qgFvEAEqGiIWcmVzdGF1cmFudCBsYSBjaGFycml0YSgOMh8QASIbTVvBC5Xn1sqERaAR0zlSiOpJNSb-6kPfyIqCMi4QAiIqcmVzdGF1cmFudCBsYSBjaGFycml0YSBlbiBzYW4gYmxhcyBuYXlhcml0&phdesc=czkoVHe2S6A&vet=12ahUKEwjljv7R3ZuAAxVFO0QIHXV7D6gQ8UF6BAgFEBg..i&lei=1Ve4ZKXQJsX2kPIP9fa9wAo&cs=1&um=1&ie=UTF-8&fb=1&gl=mx&sa=X&geocode=Kcu5JjKMuCCEMXFYkwMMX013&daddr=Salida+a,+Guadalupe+Victoria,+El+Conchal,+63743+San+Blas,+Nay." target="_blank">Ver ubicacion</a>
    </div>
</div>
<br><br>
<div class="container">
    <div class="card">
        <img src="img/restaurantes/San Blas/elpunto.jpg" alt="">
        <h2 class="hotel-name">El punto</h2>
        <h3>Pizzería</h3>
        <h3 style="color: rgb(0, 58, 247);">Direccion:  H. Batallón de San Blas 57, Sin Nombre Loc. San Blas, Centro.</h3>
        <h4 style="color: rgb(0, 18, 78);">De lunes a domingo de 2:00 pm a 11:00 pm.</h4>
        <h3 class="numero">Telefono: 323 106 4703</h3>
        <a href="https://www.google.com/maps?opi=89978449&lqi=ChxFbCBwdW50byBlbiBzYW4gYmxhcyBuYXlhcml0SLbq392froCACFoqEAAQARgAGAEYAxgEIhxlbCBwdW50byBlbiBzYW4gYmxhcyBuYXlhcml0kgEQcGl6emFfcmVzdGF1cmFudKoBUxABKgwiCGVsIHB1bnRvKA4yHxABIhtUU78eN9Q-3akRiuAGBK7zVOMy29JbHHJPcY0yIBACIhxlbCBwdW50byBlbiBzYW4gYmxhcyBuYXlhcml0&phdesc=BbMq0Jwk3dI&vet=12ahUKEwiS48KN3puAAxU0OkQIHe9UCvYQ8UF6BAgFEBg..i&lei=Uli4ZJLyHbT0kPIP76mpsA8&cs=1&um=1&ie=UTF-8&fb=1&gl=mx&sa=X&geocode=Kes5q-WWuCCEMabfk8ANja07&daddr=H.+Batall%C3%B3n+de+San+Blas+57,+Sin+Nombre+Loc.+San+Blas,+Centro,+63740+San+Blas,+Nay." target="_blank">Ver ubicacion</a>
    </div>
    <div class="card">
        <img src="img/restaurantes/San Blas/creperia.jpg" alt="">
        <h2 class="hotel-name">La Crepería De San Blas</h2>
        <h3>Crepería</h3>
        <h3 style="color: rgb(0, 58, 247);">Direccion: H. Batallón de San Blas 64, Sin Nombre Loc. San Blas, El Guayabal.</h3>
        <h4 style="color: rgb(0, 18, 78);">De lunes a domingo de 6:40 pm a 11:00 pm.</h4>
        <h3 class="numero">Telefono: 322 213 6083</h3>
        <a href="https://www.google.com/maps/dir//H.+Batall%C3%B3n+de+San+Blas+64,+Sin+Nombre+Loc.+San+Blas,+El+Guayabal,+63740+San+Blas,+Nay./@21.53591,-105.3610494,12.25z/data=!4m8!4m7!1m0!1m5!1m1!1s0x8420b93b4b2b8a85:0xb6b4e2b160192bcc!2m2!1d-105.2859817!2d21.5397105?entry=ttu" target="_blank">Ver ubicacion</a>
    </div>
    <div class="card">
        <img src="img/restaurantes/San Blas/sanbolas.jpg" alt="">
        <h2 class="hotel-name">San Bolas Alitas</h2>
        <h3>Bar</h3>
        <h3 style="color: rgb(0, 58, 247);">Direccion: José María Mercado 21, Sin Nombre Loc. San Blas, Centro, San Blas, Nay.</h3>
        <h4 style="color: rgb(0, 18, 78);">De martes a domingo de 6:00 pm a 3:00 am</h4>
        <h3 class="numero">Telefono: 311 145 6409</h3>
        <a href="https://www.google.com/maps/dir//Jos%C3%A9+Mar%C3%ADa+Mercado+21,+Sin+Nombre+Loc.+San+Blas,+Centro,+63740+San+Blas,+Nay./@21.5412734,-105.3551321,12z/data=!4m8!4m7!1m0!1m5!1m1!1s0x8420b896ee4a9b57:0xc09f8f25a4f74c2d!2m2!1d-105.2850886!2d21.5412795?entry=ttu" target="_blank">Ver ubicacion</a>
    </div>
</div>
<br><br>
<div class="container">
    <div class="card">
        <img src="img/restaurantes/San Blas/eldelfin.jpg" alt="">
        <h2 class="hotel-name">RESTAURANTE BAR EL DELFÍN</h2>
        <h3>Restaurante</h3>
        <h3 style="color: rgb(0, 58, 247);">Direccion: Paredes 106 sur, Sin Nombre Loc. San Blas, Centro.</h3>
        <h4 style="color: rgb(0, 18, 78);">De lunes a domingo de 8:00 am a 8:00 pm.</h4>
        <h3 class="numero">Telefono: 323 285 0112</h3>
        <a href="https://www.google.com/maps/dir//Paredes+106+sur,+Sin+Nombre+Loc.+San+Blas,+Centro,+63744+San+Blas,+Nay./@21.5365051,-105.3566215,12z/data=!4m8!4m7!1m0!1m5!1m1!1s0x8420b9b1582939cd:0xa08da12e22284ff3!2m2!1d-105.286583!2d21.5365201?entry=ttu" target="_blank">Ver ubicacion</a>
    </div>
    <div class="card">
        <img src="img/restaurantes/San Blas/crazy burger.jpg" alt="">
        <h2 class="hotel-name">CrazyBurger's</h2>
        <h3>Restaurante de comida rápida</h3>
        <h3 style="color: rgb(0, 58, 247);">Direccion: C. Zacatecas 17, Centro, San Blas, Nay.</h3>
        <h4 style="color: rgb(0, 18, 78);">De lunes a domingo de 7:30 pm a 11:30 pm</h4>
        <h3 class="numero">Telefono: 322 101 5631</h3>
        <a href="https://www.google.com/maps/dir//63740,+C.+Zacatecas+17,+Centro,+63742+San+Blas,+Nay./@21.5462905,-105.3541694,12z/data=!4m8!4m7!1m0!1m5!1m1!1s0x8420b92b2cc57ba7:0xedeb07b00dcfbb7c!2m2!1d-105.284129!2d21.5463052?entry=ttu" target="_blank">Ver ubicacion</a>
    </div>
    <div class="card">
        <img src="img/restaurantes/San Blas/shshinomi.png" alt="">
        <h2 class="hotel-name">Sushii Nomi</h2>
        <h3>Restaurante de sushi</h3>
        <h3 style="color: rgb(0, 58, 247);">Direccion:  Calle canalizo & Av. Juárez 6, San Blas, Nay.</h3>
        <h4 style="color: rgb(0, 18, 78);">De lunes a domingo de 11:00 am a 11:00 pm</h4>
        <h3 class="numero">Telefono: 323 147 2811</h3>
        <a href="https://www.google.com/maps/dir//Calle+canalizo+%26+Av.+Ju%C3%A1rez+6,+63742+San+Blas,+Nay./@21.5413029,-105.3560028,12z/data=!4m8!4m7!1m0!1m5!1m1!1s0x8420b9c2005484ed:0xcc8a93367d7eb47a!2m2!1d-105.2859809!2d21.5413121?entry=ttu" target="_blank">Ver ubicacion</a>
    </div>
</div>
<br><br>
<div class="container">
    <div class="card">
        <img src="img/restaurantes/San Blas/guinas.jpg" alt="">
        <h2 class="hotel-name">Taquería El Güinas</h2>
        <h3>Taquería</h3>
        <h3 style="color: rgb(0, 58, 247);">Direccion: Honorable Batallón de, Nay.</h3>
        <h4 style="color: rgb(0, 18, 78);">De lunes a domingo de 5:00 pm a 12:00 am</h4>
        <h3 class="numero">Telefono: 323 108 2366</h3>
        <a href="https://www.google.com/maps?opi=89978449&lqi=CihUYXF1ZXLDrWEgRWwgR8O8aW5hcyBlbiBzYW4gYmxhcyBuYXlhcml0SKzTzJKIroCACFpEEAAQARACGAAYARgCGAQYBSIodGFxdWVyw61hIGVsIGfDvGluYXMgZW4gc2FuIGJsYXMgbmF5YXJpdCoICAIQABABEAKSAQ90YWNvX3Jlc3RhdXJhbnSqAWsQASoYIhR0YXF1ZXLDrWEgZWwgZ8O8aW5hcygOMh8QASIbC4es35jsnM84H4VPwrk7wJLIOByu32oJKAWVMiwQAiIodGFxdWVyw61hIGVsIGfDvGluYXMgZW4gc2FuIGJsYXMgbmF5YXJpdA&phdesc=nFNt8izKmh0&vet=12ahUKEwihmJHC4ZuAAxW4JkQIHdzIC6YQ8UF6BAgFEBg..i&lei=5lu4ZKGNCLjNkPIP3JGvsAo&cs=1&um=1&ie=UTF-8&fb=1&gl=mx&sa=X&geocode=KUMdlLF_uSCEMfh8k1D6kyRG&daddr=Honorable+Batall%C3%B3n+de,+Nay." target="_blank">Ver ubicacion</a>
    </div>
    <div class="card">
        <img src="img/restaurantes/San Blas/chava.jpg" alt="">
        <h2 class="hotel-name">Carnitas Chava</h2>
        <h3>Restaurante</h3>
        <h3 style="color: rgb(0, 58, 247);">Direccion:  Sinaloa 125, Sin Nombre Loc. San Blas, Chino, San Blas, Nay.</h3>
        <h4 style="color: rgb(0, 18, 78);">De lunes a domingo de 8:00 am a 12:00 pm</h4>
        <h3 class="numero">Telefono: 323 285 1262</h3>
        <a href="https://www.google.com/maps?opi=89978449&lqi=CiJDYXJuaXRhcyBDaGF2YSBlbiBzYW4gYmxhcyBuYXlhcml0SNPX2sehroCACFo4EAAQARgAGAEYAxgEIiJjYXJuaXRhcyBjaGF2YSBlbiBzYW4gYmxhcyBuYXlhcml0KgYIAhAAEAGSAQpyZXN0YXVyYW50qgFfEAEqEiIOY2Fybml0YXMgY2hhdmEoDjIfEAEiGxQMxFcLoeVQGbHqtXgND0k8ueBH-roY2z0Z3zImEAIiImNhcm5pdGFzIGNoYXZhIGVuIHNhbiBibGFzIG5heWFyaXQ&phdesc=cbNIYweLbBs&vet=12ahUKEwjp8sPs4ZuAAxV2MEQIHafNCrUQ8UF6BAgFEFg..i&lei=P1y4ZKnXAvbgkPIPp5urqAs&cs=1&um=1&ie=UTF-8&fb=1&gl=mx&sa=X&geocode=KYn0enqWuCCEMa7PUnaC8AvA&daddr=Sinaloa+125,+Sin+Nombre+Loc.+San+Blas,+Chino,+63740+San+Blas,+Nay." target="_blank">Ver ubicacion</a>
    </div>
    <div class="card">
        <img src="img/restaurantes/San Blas/arthur.jpg" alt="">
        <h2 class="hotel-name">Arthur's Pizza</h2>
        <h3>Pizzería</h3>
        <h3 style="color: rgb(0, 58, 247);">Direccion: H. Batallón de San Blas 49, Sin Nombre Loc. San Blas, Centro, San Blas, Nay.</h3>
        <h4 style="color: rgb(0, 18, 78);">De lunes a domingo de 2:30 pm a 11:30 pm</h4>
        <h3 class="numero">Telefono: 323 285 1119</h3>
        <a href="https://www.google.com/maps?opi=89978449&lqi=CiJBcnRodXIncyBQaXp6YSBlbiBzYW4gYmxhcyBuYXlhcml0SIrquuyOr4CACFo4EAAQARgAGAEYAxgEIiJhcnRodXIncyBwaXp6YSBlbiBzYW4gYmxhcyBuYXlhcml0KgYIAhAAEAGSARBwaXp6YV9yZXN0YXVyYW50qgFfEAEqEiIOYXJ0aHVyJ3MgcGl6emEoDjIfEAEiGyxefdWZdoTdJ48ZOYe_KXMbEbV-HbrVs9EOjTImEAIiImFydGh1cidzIHBpenphIGVuIHNhbiBibGFzIG5heWFyaXQ&phdesc=bO9fLpQcTi8&vet=12ahUKEwjA2vyX4puAAxXsOkQIHf0kAiYQ8UF6BAgFEBg..i&lei=mly4ZMClCez1kPIP_cmIsAI&cs=1&um=1&ie=UTF-8&fb=1&gl=mx&sa=X&geocode=KQnZKd2kuSCEMTKt2EtGa-XD&daddr=H.+Batall%C3%B3n+de+San+Blas+49,+Sin+Nombre+Loc.+San+Blas,+Centro,+63744+San+Blas,+Nay." target="_blank">Ver ubicacion</a>
    </div>
</div>
</span>
<br>
<br>
<!--boton para mostrar mas-->
<center><button class="read-more-btn">Ver Mas/Menos</button></center>
<!--separacion entre tarjetas-->
<br>
<br>
<br>
   <!----> 
<!--San Pedro Langunillas-->
<!--tarjetas restaurantes(las 3 que son visibles)-->
<div data-aos="fade-up" data-aos-duration="1500">
    <h1 class="title">Restaurantes de San Pedro Langunillas</h1>
    </div>
    <div data-aos="fade-up" data-aos-duration="1500">
    <div class="container">
        <div class="card">
            <img src="img/restaurantes/San Pedro Lagunillas/becerra.jpg" alt="">
            <h2 class="hotel-name">TAKORTERÍA-BECERRA</h2>
            <h3>Restaurante familiar</h3>
            <h3 style="color: rgb(0, 58, 247);">Direccion: Lagunillas, Nay.</h3>
            <h4 style="color: rgb(0, 18, 78);">De viernes a domingo de 8:00 am a 4:00 pm</h4>
            <h3 class="numero">Telefono: 311 396 4174</h3>
            <a href="https://www.google.com/maps/dir//63800+Lagunillas,+Nay./@21.209527,-104.8298805,12z/data=!4m8!4m7!1m0!1m5!1m1!1s0x8427278ebee38ad7:0x2f42a4a5156e6044!2m2!1d-104.7598402!2d21.2095414?entry=ttu" target="_blank">Ver ubicacion</a>
        </div>
        <div class="card">
            <img src="img/restaurantes/San Pedro Lagunillas/españa.jpg" alt="">
            <h2 class="hotel-name">Taqueria España</h2>
            <h3>Taquería</h3>
            <h3 style="color: rgb(0, 58, 247);">Direccion: Zaragoza 33, Arriba, San Pedro Lagunillas, Nay.</h3>
            <h4 style="color: rgb(0, 18, 78);"></h4>
            <h3 class="numero"></h3>
            <a href="https://www.google.com/search?q=Taqueria+Espa%C3%B1a+en+san+pedro+lagunillas+nayarit&biw=1366&bih=661&tbm=lcl&ei=wGG4ZIPSMd7vkPIP6ea-oA4&ved=0ahUKEwiDsuGM55uAAxXeN0QIHWmzD-QQ4dUDCAk&uact=5&oq=Taqueria+Espa%C3%B1a+en+san+pedro+lagunillas+nayarit&gs_lp=Eg1nd3Mtd2l6LWxvY2FsIjBUYXF1ZXJpYSBFc3Bhw7FhIGVuIHNhbiBwZWRybyBsYWd1bmlsbGFzIG5heWFyaXQyBRAAGKIEMgUQABiiBDIFEAAYogRIqwlQAFgAcAB4AJABAJgBkgKgAZICqgEDMi0xuAEDyAEA-AEC-AEBiAYB&sclient=gws-wiz-local#rlfi=hd:;si:15994283570934284671,l,CjBUYXF1ZXJpYSBFc3Bhw7FhIGVuIHNhbiBwZWRybyBsYWd1bmlsbGFzIG5heWFyaXRIs5TgifO5gIAIWkgQABABGAAYARgDGAQYBSIwdGFxdWVyaWEgZXNwYcOxYSBlbiBzYW4gcGVkcm8gbGFndW5pbGxhcyBuYXlhcml0KgYIAhAAEAGSAQ90YWNvX3Jlc3RhdXJhbnSqAW8QASoUIhB0YXF1ZXJpYSBlc3Bhw7FhKA4yHxABIhsCDpoYC95b9QfVxzjWOpGvhVeaApViVu5rgy0yNBACIjB0YXF1ZXJpYSBlc3Bhw7FhIGVuIHNhbiBwZWRybyBsYWd1bmlsbGFzIG5heWFyaXQ;mv:[[21.221795677319022,-104.74951033009036],[21.221435722680965,-104.74989646990963]]" target="_blank">Ver ubicacion</a>
        </div>
        <div class="card">
            <img src="img/restaurantes/San Pedro Lagunillas/ranas.jpg" alt="">
            <h2 class="hotel-name">El Rincon de las Ranas</h2>
            <h3>Restaurante</h3>
            <h3 style="color: rgb(0, 58, 247);">Direccion: Leandro Valle 36, Abajo, San Pedro Lagunillas, Nay.</h3>
            <h4 style="color: rgb(0, 18, 78);">Jueves y domingo de 11:45 am a 7:00 pm</h4>
            <h3 class="numero">Telefono: 327 258 5200</h3>
            <a href="https://www.google.com/maps/dir//Leandro+Valle+36,+Abajo,+63800+San+Pedro+Lagunillas,+Nay./@21.2159063,-104.8235375,12z/data=!4m8!4m7!1m0!1m5!1m1!1s0x842727758f489beb:0x5e6bd3119bf643bd!2m2!1d-104.7534971!2d21.2159207?entry=ttu" target="_blank">Ver ubicacion</a>
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
        <img src="img/restaurantes/San Pedro Lagunillas/nahomi.jpg" alt="">
        <h2 class="hotel-name">Papás y Salchitacos “Nahomi”</h2>
        <h3>Restaurante de comida rápida</h3>
        <h3 style="color: rgb(0, 58, 247);">Direccion: Nicolás Bravo 82, Enmedio, San Pedro Lagunillas, Nay.</h3>
        <h4 style="color: rgb(0, 18, 78);"></h4>
        <h3 class="numero">Telefono: 311 145 0758</h3>
        <a href="https://www.google.com/maps?opi=89978449&lqi=CkFQYXDDoXMgeSBTYWxjaGl0YWNvcyDigJxOYWhvbWnigJ0gZW4gc2FuIHBlZHJvIGxhZ3VuaWxsYXMgbmF5YXJpdEjuwviA4LeAgAhaUxAAEAEQAhADGAAYARgCGAMYBRgGGAciO3BhcMOhcyB5IHNhbGNoaXRhY29zIG5haG9taSBlbiBzYW4gcGVkcm8gbGFndW5pbGxhcyBuYXlhcml0kgEUZmFzdF9mb29kX3Jlc3RhdXJhbnSqAYUBEAEqHyIbcGFww6FzIHkgc2FsY2hpdGFjb3MgbmFob21pKA4yHxABIhsxvwNSCva-uwrfTuWNVj0tz5wpunmyKPvPZnoyPxACIjtwYXDDoXMgeSBzYWxjaGl0YWNvcyBuYWhvbWkgZW4gc2FuIHBlZHJvIGxhZ3VuaWxsYXMgbmF5YXJpdA&phdesc=fOOWzk_sp8Y&vet=12ahUKEwiUz9Sz6puAAxWdHkQIHWUnCmYQ8UF6BAgFEBg..i&lei=N2W4ZNTXKp29kPIP5c6osAY&cs=1&um=1&ie=UTF-8&fb=1&gl=mx&sa=X&geocode=KVFbNF98ISeEMZIL47ZE_hR_&daddr=Nicol%C3%A1s+Bravo+82,+Enmedio,+63800+San+Pedro+Lagunillas,+Nay." target="_blank">Ver ubicacion</a>
    </div>
    <div class="card">
        <img src="img/restaurantes/San Pedro Lagunillas/misierra.jpg" alt="">
        <h2 class="hotel-name">Pizzeria "Mi Sierra"</h2>
        <h3>Pizzería</h3>
        <h3 style="color: rgb(0, 58, 247);">Direccion: 9 Barrio, Ramón Corona, Arriba, San Pedro Lagunillas, Nay.</h3>
        <h4 style="color: rgb(0, 18, 78);">De viernes a domingo de 6:00 am a 9:00 pm</h4>
        <h3 class="numero">Telefono: 311 270 3388</h3>
        <a href="https://www.google.com/maps/dir//9+Barrio,+Ram%C3%B3n+Corona,+Arriba,+63800+San+Pedro+Lagunillas,+Nay./@21.2219296,-104.8180771,12z/data=!4m8!4m7!1m0!1m5!1m1!1s0x8427219d77c24279:0xc81b1acd0703a0b3!2m2!1d-104.7480333!2d21.2219512?entry=ttu" target="_blank">Ver ubicacion</a>
    </div>
    <div class="card">
        <img src="img/restaurantes/San Pedro Lagunillas/villacortes.jpg" alt="">
        <h2 class="hotel-name">Restaurante Villa Cortés</h2>
        <h3>Restaurante</h3>
        <h3 style="color: rgb(0, 58, 247);">Direccion: Unnamed Road, Lagunillas, Nay.</h3>
        <h4 style="color: rgb(0, 18, 78);">De lunes a domingo de 10:30 pm a 5:30 pm. Martes y miercoles cerrado</h4>
        <h3 class="numero">Telefono: 33 1670 0250</h3>
        <a href="https://www.google.com/maps/dir//Unnamed+Road,+63800+Lagunillas,+Nay./@21.2129457,-104.7967128,12z/data=!4m8!4m7!1m0!1m5!1m1!1s0x8427210e36d63e0f:0x5e810dff5d3f0243!2m2!1d-104.7267249!2d21.2129861?entry=ttu" target="_blank">Ver ubicacion</a>
    </div>
</div>
</span>
<br>
<br>
<!--boton para mostrar mas-->
<center><button class="read-more-btn">Ver Mas/Menos</button></center>
<!--separacion entre tarjetas-->
<br>
<br>
<br>
   <!----> 
<!--Santa Maria del Oro-->
<!--tarjetas restaurantes(las 3 que son visibles)-->
<div data-aos="fade-up" data-aos-duration="1500">
    <h1 class="title">Restaurantes de Santa Maria del Oro</h1>
    </div>
    <div data-aos="fade-up" data-aos-duration="1500">
    <div class="container">
        <div class="card">
            <img src="img/restaurantes/Santa Maria del Oro/samao.jpg" alt="">
            <h2 class="hotel-name">Pizza Zone SAMAO</h2>
            <h3>Pizzeria</h3>
            <h3 style="color: rgb(0, 58, 247);">Direccion: Morelos 6, Centro, Santa María del Oro, Nay.</h3>
            <h4 style="color: rgb(0, 18, 78);">De lunes a domingo de 12:00 pm a 11:00 pm</h4>
            <h3 class="numero">Telefono: 311 121 1011</h3>
            <a href="https://www.google.com/maps/dir//Morelos+6,+Centro,+63830+Santa+Mar%C3%ADa+del+Oro,+Nay./@21.3342482,-104.6596044,12z/data=!4m8!4m7!1m0!1m5!1m1!1s0x8427192ca4a6f8d5:0x13da15f6a737c906!2m2!1d-104.589564!2d21.3342627?entry=ttu" target="_blank">Ver ubicacion</a>
        </div>
        <div class="card">
            <img src="img/restaurantes/Santa Maria del Oro/mirador.jpg" alt="">
            <h2 class="hotel-name">Restaurant El Mirador</h2>
            <h3>Marisquería</h3>
            <h3 style="color: rgb(0, 58, 247);">Direccion: Unnamed Rd, Santa María del Oro, Nay.</h3>
            <h4 style="color: rgb(0, 18, 78);">De lunes a domingo de 11:00 pm a 6:00 pm</h4>
            <h3 class="numero">Telefono: 311 144 9117</h3>
            <a href="https://www.google.com/maps/dir//Unnamed+Rd,+Santa+Mar%C3%ADa+del+Oro,+Nay./@21.3436153,-104.6443583,12z/data=!4m8!4m7!1m0!1m5!1m1!1s0x84271964df843501:0xacba65fe77394ce2!2m2!1d-104.5743179!2d21.3436298?entry=ttu" target="_blank">Ver ubicacion</a>
        </div>
        <div class="card">
            <img src="img/restaurantes/Santa Maria del Oro/tree.jpg" alt="">
            <h2 class="hotel-name">Tree Café</h2>
            <h3>Cafetería</h3>
            <h3 style="color: rgb(0, 58, 247);">Direccion: Matamoros 28, Centro, Santa María del Oro, Nay.</h3>
            <h4 style="color: rgb(0, 18, 78);">De lunes a domingo de 11:00 am a 9:00 pm</h4>
            <h3 class="numero">Telefono: 327 244 0152</h3>
            <a href="https://www.google.com/maps?opi=89978449&lqi=CilUcmVlIENhZsOpIGVuIHNhbnRhIG1hcmlhIGRlbCBvcm8gbmF5YXJpdEia2LKynaqAgAhaQRAAEAEYABgBGAMYBBgGIil0cmVlIGNhZsOpIGVuIHNhbnRhIG1hcmlhIGRlbCBvcm8gbmF5YXJpdCoGCAIQABABkgEEY2FmZaoBYhABKg4iCnRyZWUgY2Fmw6koDjIfEAEiG4Q2w_MEc2j93uJw40bQjg4R6CzCh356zlbrfTItEAIiKXRyZWUgY2Fmw6kgZW4gc2FudGEgbWFyaWEgZGVsIG9ybyBuYXlhcml0&phdesc=umto5TEQNZY&vet=12ahUKEwjKysy6-JuAAxX9JEQIHYwCDWoQ8UF6BAgFEBg..i&lei=9HO4ZMqAFf3JkPIPjIW00AY&cs=1&um=1&ie=UTF-8&fb=1&gl=mx&sa=X&geocode=KWEWj5VqGSeEMRms2K5aL1kn&daddr=Matamoros+28,+Centro,+63830+Santa+Mar%C3%ADa+del+Oro,+Nay." target="_blank">Ver ubicacion</a>
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
        <img src="img/restaurantes/Santa Maria del Oro/huicho.jpg" alt="">
        <h2 class="hotel-name">Panadería Huicho</h2>
        <h3>Pastelería</h3>
        <h3 style="color: rgb(0, 58, 247);">Direccion: Encino 36, Col del Bosque, Santa María del Oro, Nay.</h3>
        <h4 style="color: rgb(0, 18, 78);">De lunes a sabdo de 7:00 am a 3:00 pm</h4>
        <h3 class="numero">Telefono: 327 244 0294</h3>
        <a href="https://www.google.com/maps/dir//Encino+36,+Col+del+Bosque,+63830+Santa+Mar%C3%ADa+del+Oro,+Nay./@21.3294842,-104.6510151,12z/data=!4m8!4m7!1m0!1m5!1m1!1s0x84271943b19bc69b:0xf70d1963172afdb5!2m2!1d-104.5809786!2d21.3294524?entry=ttu" target="_blank">Ver ubicacion</a>
    </div>
    <div class="card">
        <img src="img/restaurantes/Santa Maria del Oro/sesteo.jpg" alt="">
        <h2 class="hotel-name">Restaurant El Sesteo</h2>
        <h3>Restaurante</h3>
        <h3 style="color: rgb(0, 58, 247);">Direccion: Centro, Santa María del Oro, Nay.</h3>
        <h4 style="color: rgb(0, 18, 78);">De viernes a lunes de 10:00 am a 5:00 pm</h4>
        <h3 class="numero">Telefono: 327 244 0069</h3>
        <a href="https://www.google.com/maps/dir//Centro,+63830+Santa+Mar%C3%ADa+del+Oro,+Nay./@21.3313597,-104.6587664,12z/data=!4m8!4m7!1m0!1m5!1m1!1s0x8427191d1b2fb5fd:0xb544438171319701!2m2!1d-104.5887262!2d21.3313747?entry=ttu" target="_blank">Ver ubicacion</a>
    </div>
    <div class="card">
        <img src="img/restaurantes/Santa Maria del Oro/barba roja.png" alt="">
        <h2 class="hotel-name">Barba Roja</h2>
        <h3>Bar</h3>
        <h3 style="color: rgb(0, 58, 247);">Direccion: Emiliano Zapata, Cándido Salazar, Santa María del Oro, Nay.</h3>
        <h4 style="color: rgb(0, 18, 78);">De jueves a domingo de 6:00 am a 11:00 pm</h4>
        <h3 class="numero">Telefono: 311 255 8031</h3>
        <a href="https://www.google.com/maps?opi=89978449&lqi=CiliYXJiYSByb2phIGVuIHNhbnRhIG1hcmlhIGRlbCBvcm8gbmF5YXJpdEjkv4Wfq7KAgAhaQRAAEAEYABgBGAMYBBgGIiliYXJiYSByb2phIGVuIHNhbnRhIG1hcmlhIGRlbCBvcm8gbmF5YXJpdCoGCAIQABABkgEDYmFyqgFiEAEqDiIKYmFyYmEgcm9qYSgOMh8QASIbcbShXS3QYRQJSDR9-xId6-YCczA9d_QGXaGhMi0QAiIpYmFyYmEgcm9qYSBlbiBzYW50YSBtYXJpYSBkZWwgb3JvIG5heWFyaXQ&phdesc=OPC0t4hfiRA&vet=12ahUKEwjh8-Dv-puAAxUPJ0QIHdmIB7oQ8UF6BAgFEBg..i&lei=fHa4ZOHFKo_OkPIP2ZGe0As&cs=1&um=1&ie=UTF-8&fb=1&gl=mx&sa=X&geocode=Kel3FNjRGSeEMZPQ1-mV11b7&daddr=Emiliano+Zapata,+C%C3%A1ndido+Salazar,+63830+Santa+Mar%C3%ADa+del+Oro,+Nay." target="_blank">Ver ubicacion</a>
    </div>
</div>
<br><br>
<div class="container">
    <div class="card">
        <img src="img/restaurantes/Santa Maria del Oro/korita.jpg" alt="">
        <h2 class="hotel-name">Paleteria La Korita</h2>
        <h3>Heladería</h3>
        <h3 style="color: rgb(0, 58, 247);">Direccion: Nicolás Bravo 06, Centro, Santa María del Oro, Nay.</h3>
        <h4 style="color: rgb(0, 18, 78);">De lunes a domingo de 8:30 am a 9:00 pm</h4>
        <h3 class="numero">Telefono: 311 103 6484</h3>
        <a href="https://www.google.com/maps/dir//Nicol%C3%A1s+Bravo+06,+Centro,+63830+Santa+Mar%C3%ADa+del+Oro,+Nay./@21.3320726,-104.6556721,12z/data=!4m8!4m7!1m0!1m5!1m1!1s0x842719d4d929fe7d:0x1da65c6bf0030bd9!2m2!1d-104.5856188!2d21.332081?entry=ttu" target="_blank">Ver ubicacion</a>
    </div>
    <div class="card">
        <img src="img/restaurantes/Santa Maria del Oro/valmoras.jpg" alt="">
        <h2 class="hotel-name">Restaurante Valmora's</h2>
        <h3>Restaurante</h3>
        <h3 style="color: rgb(0, 58, 247);">Direccion: Dom Conocido, La Laguna, Nay.</h3>
        <h4 style="color: rgb(0, 18, 78);">De lunes a domingo de 8:30 am a 5:00 pm</h4>
        <h3 class="numero">Telefono: 311 257 5390</h3>
        <a href="https://www.google.com/maps?opi=89978449&lqi=CjRSZXN0YXVyYW50ZSBWYWxtb3JhJ3MgZW4gc2FudGEgbWFyaWEgZGVsIG9ybyBuYXlhcml0SN31zbP_rICACFpGEAAQARgAGAEiNHJlc3RhdXJhbnRlIHZhbG1vcmEncyBlbiBzYW50YSBtYXJpYSBkZWwgb3JvIG5heWFyaXQqBggCEAAQAZIBCnJlc3RhdXJhbnQ&phdesc=uarJwtDHdn0&vet=12ahUKEwiMuInF-ZuAAxW2JUQIHYDHDScQ8UF6BAgFEBg..i&lei=FnW4ZIzVLbbLkPIPgI-3uAI&cs=1&um=1&ie=UTF-8&fb=1&gl=mx&sa=X&geocode=KVdVVcSAGSeEMUGNPAySXPMA&daddr=Dom+Conocido,+63830+La+Laguna,+Nay." target="_blank">Ver ubicacion</a>
    </div>
    <div class="card">
        <img src="img/restaurantes/Santa Maria del Oro/samaomieador.jpg" alt="">
        <h2 class="hotel-name">La mojarra de SAMAO</h2>
        <h3>Restaurante</h3>
        <h3 style="color: rgb(0, 58, 247);">Direccion: Cam. a Koala Bungalows #100, La Laguna, Nay.</h3>
        <h4 style="color: rgb(0, 18, 78);">De lunes a domingo de 8:00 am a 5:00 pm</h4>
        <h3 class="numero">Telefono: 311 134 7178</h3>
        <a href="https://www.google.com/maps/dir//Cam.+a+Koala+Bungalows+%23100,+63865+La+Laguna,+Nay./@21.3620349,-104.6439209,12z/data=!4m8!4m7!1m0!1m5!1m1!1s0x8427197cc4a98d85:0xf665a335325aa5a1!2m2!1d-104.5738805!2d21.3620494?entry=ttu" target="_blank">Ver ubicacion</a>
    </div>
</div>
<br><br>
<div class="container">
    <div class="card">
        <img src="img/restaurantes/Santa Maria del Oro/lasierra.jpg" alt="">
        <h2 class="hotel-name">La Sierra Restaurant</h2>
        <h3>Restaurante</h3>
        <h3 style="color: rgb(0, 58, 247);">Direccion: Calle Loma de Santa María del Oro, Tepic, Nay.</h3>
        <h4 style="color: rgb(0, 18, 78);">De lunes a domingo de 7:00 am a 5:30 pm</h4>
        <h3 class="numero">Telefono: 311 119 9049</h3>
        <a href="https://www.google.com/maps/dir//Calle+Loma+de+Santa+Mar%C3%ADa+del+Oro,+63830+Tepic,+Nay./@21.2746754,-104.7191538,12z/data=!4m8!4m7!1m0!1m5!1m1!1s0x84271f65650209d3:0x5b156f557a50e8aa!2m2!1d-104.6491134!2d21.2746899?entry=ttu" target="_blank">Ver ubicacion</a>
    </div>
</div>
</span>
<br>
<br>
<!--boton para mostrar mas-->
<center><button class="read-more-btn">Ver Mas/Menos</button></center>
<!--separacion entre tarjetas-->
<br>
<br>
<br>
   <!----> 
<!--Santiago Ixcuintla-->
<!--tarjetas restaurantes(las 3 que son visibles)-->
<div data-aos="fade-up" data-aos-duration="1500">
    <h1 class="title">Restaurantes de Santigo Ixcuintla</h1>
    </div>
    <div data-aos="fade-up" data-aos-duration="1500">
    <div class="container">
        <div class="card">
            <img src="img/restaurantes/Santigo Ixcuintla/parras.jpg" alt="">
            <h2 class="hotel-name">Parras Bistro</h2>
            <h3>Restaurante</h3>
            <h3 style="color: rgb(0, 58, 247);">Direccion: C. Manuel M. Ponce 54, Sta Fe, Santiago Ixcuintla, Nay.</h3>
            <h4 style="color: rgb(0, 18, 78);">De lunes a domingo de 7:00 am a 10:30 pm</h4>
            <h3 class="numero">Telefono: 311 148 1757</h3>
            <a href="https://www.google.com/maps?opi=89978449&lqi=CitQYXJyYXMgQmlzdHJvIGVuIHNhbnRpYWdvIGl4Y3VpbnRsYSBuYXlhcml0SOza3sX3rICACFpBEAAQARgAGAEYAxgEIitwYXJyYXMgYmlzdHJvIGVuIHNhbnRpYWdvIGl4Y3VpbnRsYSBuYXlhcml0KgYIAhAAEAGSAQpyZXN0YXVyYW50qgFnEAEqESINcGFycmFzIGJpc3RybygOMh8QASIbWWJZdru4V-KJuh9gNR8DvpjULhwONerpzCZNMi8QAiIrcGFycmFzIGJpc3RybyBlbiBzYW50aWFnbyBpeGN1aW50bGEgbmF5YXJpdA&phdesc=7uCbO8JSTsg&vet=12ahUKEwj53-6qgJyAAxUBMUQIHWXVBScQ8UF6BAgFEBg..i&lei=Nny4ZPnsMoHikPIP5aqXuAI&cs=1&um=1&ie=UTF-8&fb=1&gl=mx&sa=X&geocode=Ka-qGiuyqCCEMRmJd0s26_Aq&daddr=C.+Manuel+M.+Ponce+54,+Sta+Fe,+63321+Santiago+Ixcuintla,+Nay." target="_blank">Ver ubicacion</a>
        </div>
        <div class="card">
            <img src="img/restaurantes/Santigo Ixcuintla/chepa.jpg" alt="">
            <h2 class="hotel-name">Restaurant La Tia Chepa Y Zezarez</h2>
            <h3>Restaurante mexicano</h3>
            <h3 style="color: rgb(0, 58, 247);">Direccion: 16 de Septiembre Ote. 90, Cuauhtémoc, Santiago Ixcuintla, Nay.</h3>
            <h4 style="color: rgb(0, 18, 78);">De lunes a domingo de 8:00 pm a 6:00 pm</h4>
            <h3 class="numero">Telefono: 323 133 3191</h3>
            <a href="https://www.google.com/maps/dir//63330,+16+de+Septiembre+Ote.+90,+Cuauht%C3%A9moc,+63300+Santiago+Ixcuintla,+Nay./@21.8124032,-105.2693888,12z/data=!4m8!4m7!1m0!1m5!1m1!1s0x8420a8b4d9f42431:0x8bc1b291ee4dd0d1!2m2!1d-105.1993484!2d21.812418?entry=ttu" target="_blank">Ver ubicacion</a>
        </div>
        <div class="card">
            <img src="img/restaurantes/Santigo Ixcuintla/los vitrales.jpg" alt="">
            <h2 class="hotel-name">Los Vitrales</h2>
            <h3>Restaurante</h3>
            <h3 style="color: rgb(0, 58, 247);">Direccion: Calle Melchor Ocampo s/n, Centro, Santiago Ixcuintla, Nay.</h3>
            <h4 style="color: rgb(0, 18, 78);">De lunes a domingo de 7:00 am a 10:30 pm</h4>
            <h3 class="numero">Telefono: 323 235 4291</h3>
            <a href="https://www.google.com/maps/dir//Calle+Melchor+Ocampo+s%2Fn,+Centro,+63300+Santiago+Ixcuintla,+Nay./@21.8075264,-105.2779583,12z/data=!4m8!4m7!1m0!1m5!1m1!1s0x8420af525c13fdd5:0x21be831bf49d141a!2m2!1d-105.2078825!2d21.8075377?entry=ttu" target="_blank">Ver ubicacion</a>
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
        <img src="img/restaurantes/Santigo Ixcuintla/farallon.jpg" alt="">
        <h2 class="hotel-name">Restaurant Farallon de Ixcuintla</h2>
        <h3>Marisquería</h3>
        <h3 style="color: rgb(0, 58, 247);">Direccion:  Melchor Ocampo 132, Centro, Santiago, Nay.</h3>
        <h4 style="color: rgb(0, 18, 78);">De martes a domingo de 11:00 am a 6:00 pm</h4>
        <h3 class="numero">Telefono: 323 235 1200</h3>
        <a href="https://www.google.com/maps/dir//Melchor+Ocampo+132,+Centro,+63300+Santiago,+Nay./@21.8073665,-105.2795625,12z/data=!4m8!4m7!1m0!1m5!1m1!1s0x8420af525c4cc773:0x9a4057d1088bcd80!2m2!1d-105.209522!2d21.8073766?entry=ttu" target="_blank">Ver ubicacion</a>
    </div>
    <div class="card">
        <img src="img/restaurantes/Santigo Ixcuintla/gutyburger.jpg" alt="">
        <h2 class="hotel-name">GUTY BURGER</h2>
        <h3>Hamburguesería</h3>
        <h3 style="color: rgb(0, 58, 247);">Direccion: Salida a Tepic 12, Cuauhtémoc, Santiago Ixcuintla, Nay.</h3>
        <h4 style="color: rgb(0, 18, 78);">Abierto las 24 horas</h4>
        <h3 class="numero">Telefono: 311 203 8758</h3>
        <a href="https://www.google.com/maps/dir//Salida+a+Tepic+12,+Cuauht%C3%A9moc,+63300+Santiago+Ixcuintla,+Nay./@21.8118602,-105.2709799,12z/data=!4m8!4m7!1m0!1m5!1m1!1s0x8420a98064e8b473:0xed5a796e85f113f4!2m2!1d-105.200946!2d21.8119016?entry=ttu" target="_blank">Ver ubicacion</a>
    </div>
    <div class="card">
        <img src="img/restaurantes/Santigo Ixcuintla/natos.jpg" alt="">
        <h2 class="hotel-name">Mariscos Nato's</h2>
        <h3>Marisquería</h3>
        <h3 style="color: rgb(0, 58, 247);">Direccion: Primera Corregidora Nte. 165, Amado Nervo.</h3>
        <h4 style="color: rgb(0, 18, 78);">De martes a domingo de 12:00 pm a 7:00 pm</h4>
        <h3 class="numero">Telefono: 323 235 4956</h3>
        <a href="https://www.google.com/maps/dir//Primera+Corregidora+Nte.+165,+Amado+Nervo,+63311+Santiago+Ixcuintla,+Nay./@21.8124775,-105.2717081,12z/data=!4m8!4m7!1m0!1m5!1m1!1s0x8420a8b4a689e3fd:0x8f80f9fe904b70dc!2m2!1d-105.2016403!2d21.8124901?entry=ttu" target="_blank">Ver ubicacion</a>
    </div>
</div>
<br></br>
<div class="container">
    <div class="card">
        <img src="img/restaurantes/Santigo Ixcuintla/elmero.jpg" alt="">
        <h2 class="hotel-name">Mariscos El Mero Mero</h2>
        <h3>Marisquería</h3>
        <h3 style="color: rgb(0, 58, 247);">Direccion: Matamoros Nte. 134, Juárez, Santiago Ixcuintla, Nay.</h3>
        <h4 style="color: rgb(0, 18, 78);">De lunes a domingo de 12:00 pm a 6:30 pm. Martes cerrado</h4>
        <h3 class="numero">Telefono: 323 114 1179</h3>
        <a href="https://www.google.com/maps/dir//Matamoros+Nte.+134,+Ju%C3%A1rez,+63350+Santiago+Ixcuintla,+Nay./@21.8123281,-105.2819714,12z/data=!4m8!4m7!1m0!1m5!1m1!1s0x8420a934078af175:0x110559b7135ab65d!2m2!1d-105.2119465!2d21.8123429?entry=ttu" target="_blank">Ver ubicacion</a>
    </div>
    <div class="card">
        <img src="img/restaurantes/Santigo Ixcuintla/pandahouse.jpg" alt="">
        <h2 class="hotel-name">Panda House</h2>
        <h3>Restaurante chino</h3>
        <h3 style="color: rgb(0, 58, 247);">Direccion: Amado Nervo 97, Amado Nervo, Santiago Ixcuintla, Nay</h3>
        <h4 style="color: rgb(0, 18, 78);">De lunes a domingo de 11:00 am a 9:00 pm. Miercoles cerrado</h4>
        <h3 class="numero"></h3>
        <a href="https://www.google.com/maps/dir//Amado+Nervo+97,+Amado+Nervo,+63300+Santiago+Ixcuintla,+Nay./@21.8125139,-105.2798522,12z/data=!4m8!4m7!1m0!1m5!1m1!1s0x8420a8ad10e83043:0xae488ba22f17b141!2m2!1d-105.2098118!2d21.8125606?entry=ttu" target="_blank">Ver ubicacion</a>
    </div>
    <div class="card">
        <img src="img/restaurantes/Santigo Ixcuintla/eltorobravo.jpg" alt="">
        <h2 class="hotel-name">El toro bravo</h2>
        <h3>Parrilla</h3>
        <h3 style="color: rgb(0, 58, 247);">Direccion: 20 de Noviembre Ote 531, Centro, Santiago Ixcuintla, Nay.</h3>
        <h4 style="color: rgb(0, 18, 78);">De viernes a lunes de 8:00 am a 5:00 pm</h4>
        <h3 class="numero"></h3>
        <a href="https://www.google.com/maps/dir//20+de+Noviembre+Ote+531,+Centro,+63352+Santiago+Ixcuintla,+Nay./@21.8088705,-105.2875233,12z/data=!4m8!4m7!1m0!1m5!1m1!1s0x8420afe2daff621b:0x403fa215adccb62c!2m2!1d-105.2174829!2d21.8088853?entry=ttu" target="_blank">Ver ubicacion</a>
    </div>
</div>
<br><br>
<div class="container">
    <div class="card">
        <img src="img/restaurantes/Santigo Ixcuintla/sarandeado.jpg" alt="">
        <h2 class="hotel-name">El sarandeado</h2>
        <h3>Marisquería</h3>
        <h3 style="color: rgb(0, 58, 247);">Direccion: 20 de Noviembre Pte. 1048, Centro, Santiago Ixcuintla, Nay.</h3>
        <h4 style="color: rgb(0, 18, 78);"></h4>
        <h3 class="numero">Telefono: 323 688 0017</h3>
        <a href="https://www.google.com/maps/dir//20+de+Noviembre+Pte.+1048,+Centro,+63352+Santiago+Ixcuintla,+Nay./@21.8087112,-105.2877325,12z/data=!4m8!4m7!1m0!1m5!1m1!1s0x8420afc50009284f:0xa2df6baff9069c5!2m2!1d-105.2177094!2d21.8088394?entry=ttu" target="_blank">Ver ubicacion</a>
    </div>
    <div class="card">
        <img src="img/restaurantes/Santigo Ixcuintla/nikkesushi.jpg" alt="">
        <h2 class="hotel-name">Nikkei Sushi Bar Santiago Ixc</h2>
        <h3>Restaurante japonés</h3>
        <h3 style="color: rgb(0, 58, 247);">Direccion: gnacio Zaragoza 86-altos, Centro, Santiago Ixcuintla, Nay.</h3>
        <h4 style="color: rgb(0, 18, 78);">De lunes a domingo de 12:00 pm a 11:00 pm. Martes cerrado</h4>
        <h3 class="numero">Telefono: 323 114 1020</h3>
        <a href="https://www.google.com/maps/dir//Ignacio+Zaragoza+86-altos,+Centro,+63300+Santiago+Ixcuintla,+Nay./@21.807711,-105.276201,12z/data=!4m8!4m7!1m0!1m5!1m1!1s0x8420afd9d5fb331f:0x690bb9608fdbca2d!2m2!1d-105.2061606!2d21.8077258?entry=ttu" target="_blank">Ver ubicacion</a>
    </div>
    <div class="card">
        <img src="img/restaurantes/Santigo Ixcuintla/shokosushi.jpg" alt="">
        <h2 class="hotel-name">SHOKOSHUSHI</h2>
        <h3>Restaurante japonés</h3>
        <h3 style="color: rgb(0, 58, 247);">Direccion: Hidalgo 69 Esquina con, Bordo, Santiago Ixcuintla, Nay.</h3>
        <h4 style="color: rgb(0, 18, 78);">De lunes a domingo de 11:00 am a 9:00 pm. Miercoles cerrado</h4>
        <h3 class="numero">Telefono: 323 235 1204</h3>
        <a href="https://www.google.com/maps/dir//Hidalgo+69+Esquina+con,+Bordo,+63300+Santiago+Ixcuintla,+Nay./@21.8070144,-105.276149,12z/data=!4m8!4m7!1m0!1m5!1m1!1s0x8420af1645f5626f:0xa063c2497ece02c4!2m2!1d-105.2061086!2d21.8070292?entry=ttu" target="_blank">Ver ubicacion</a>
    </div>
</div>
<br><br>
<div class="container">
    <div class="card">
        <img src="img/restaurantes/Santigo Ixcuintla/umiyumi.png" alt="">
        <h2 class="hotel-name">Umi yumi</h2>
        <h3>Restaurante  japonés</h3>
        <h3 style="color: rgb(0, 58, 247);">Direccion: Ignacio Zaragoza 164, Centro, Santiago Ixcuintla, Nay.</h3>
        <h4 style="color: rgb(0, 18, 78);">De lunes a domingo de 1:00 pm a 9:30 pm</h4>
        <h3 class="numero">Telefono: 323 596 7562</h3>
        <a href="https://www.google.com/maps?opi=89978449&lqi=CiZVbWkgeXVtaSBlbiBzYW50aWFnbyBpeGN1aW50bGEgbmF5YXJpdEjjx7jakbiAgAhaNBAAEAEYABgBGAMYBCImdW1pIHl1bWkgZW4gc2FudGlhZ28gaXhjdWludGxhIG5heWFyaXSSAR1qYXBhbmVzZV9hdXRoZW50aWNfcmVzdGF1cmFudKoBXRABKgwiCHVtaSB5dW1pKA4yHxABIhuXmcRAJMZzN-Lx7diDe6tV9ZPlGa1ibAo5AcAyKhACIiZ1bWkgeXVtaSBlbiBzYW50aWFnbyBpeGN1aW50bGEgbmF5YXJpdA&phdesc=kk7AN5zJbGE&vet=12ahUKEwjEg8fXj5yAAxVLI0QIHa52CRcQ8UF6BAgFEBg..i&lei=T4y4ZISgBcvGkPIPru2luAE&cs=1&um=1&ie=UTF-8&fb=1&gl=mx&sa=X&geocode=KeNDg5K-ryCEMZWA5e5FmKl4&daddr=Ignacio+Zaragoza+164,+Centro,+63300+Santiago+Ixcuintla,+Nay." target="_blank">Ver ubicacion</a>
    </div>
    <div class="card">
        <img src="img/restaurantes/Santigo Ixcuintla/gorypizza.jpg" alt="">
        <h2 class="hotel-name">Gory pizza</h2>
        <h3>Pizzería</h3>
        <h3 style="color: rgb(0, 58, 247);">Direccion: 20 de Noviembre Ote 8, Centro, Santiago Ixcuintla, Nay.</h3>
        <h4 style="color: rgb(0, 18, 78);">De lunes a domingo de 8:00 am a 10:30 pm</h4>
        <h3 class="numero"></h3>
        <a href="https://www.google.com/maps/dir//20+de+Noviembre+Ote+8,+Centro,+63300+Santiago+Ixcuintla,+Nay./@21.8084839,-105.2770819,12z/data=!4m8!4m7!1m0!1m5!1m1!1s0x8420af4d7a098e4d:0x55ff9b122e9eebd1!2m2!1d-105.2070419!2d21.808489?entry=ttu" target="_blank">Ver ubicacion</a>
    </div>
    <div class="card">
        <img src="img/restaurantes/Santigo Ixcuintla/wippiz.jpg" alt="">
        <h2 class="hotel-name">Wipizz</h2>
        <h3>Restaurante</h3>
        <h3 style="color: rgb(0, 58, 247);">Direccion: 20 de Noviembre Pte. 494, Centro, Santiago Ixcuintla, Nay.</h3>
        <h4 style="color: rgb(0, 18, 78);">De lunes a domingo de 2:00 pm a 11:00 pm</h4>
        <h3 class="numero">Telefono: 323 193 9241</h3>
        <a href="https://www.google.com/maps/dir//20+de+Noviembre+Pte.+494,+Centro,+63300+Santiago+Ixcuintla,+Nay./@21.8091612,-105.2854416,12z/data=!4m8!4m7!1m0!1m5!1m1!1s0x8420af69f99ccacd:0x29a722ff180ffb4d!2m2!1d-105.2154012!2d21.809176?entry=ttu" target="_blank">Ver ubicacion</a>
    </div>
</div>
<br><br>
<div class="container">
    <div class="card">
        <img src="img/restaurantes/Santigo Ixcuintla/mrpizzas.jpg" alt="">
        <h2 class="hotel-name">Mr pizza</h2>
        <h3>Pizzería</h3>
        <h3 style="color: rgb(0, 58, 247);">Direccion:  63350, Juárez, Santiago Ixcuintla, Nay.</h3>
        <h4 style="color: rgb(0, 18, 78);">De lunes a domingo de 12:00 pm a 10:00 pm</h4>
        <h3 class="numero">Telefono: 323 129 6387</h3>
        <a href="https://www.google.com/maps/dir//63350,+Ju%C3%A1rez,+63350+Santiago+Ixcuintla,+Nay./@21.8102024,-105.2861569,12z/data=!4m8!4m7!1m0!1m5!1m1!1s0x8420a95ecd63936f:0xbad2f5c073cdb4bc!2m2!1d-105.2161165!2d21.8102172?entry=ttu" target="_blank">Ver ubicacion</a>
    </div>
    <div class="card">
        <img src="img/restaurantes/Santigo Ixcuintla/santo remedio.jpg" alt="">
        <h2 class="hotel-name">Bar Santo Remedio</h2>
        <h3>Bar</h3>
        <h3 style="color: rgb(0, 58, 247);">Direccion: 20 de Noviembre Poniente 452, 20 de Noviembre Ote 437 altos.</h3>
        <h4 style="color: rgb(0, 18, 78);">De miercoles a domingo de 8:00 pm a 4:00 am</h4>
        <h3 class="numero">Telefono: 311 851 2142</h3>
        <a href="https://www.google.com/maps/dir//63300+20+de+Noviembre+Poniente+452,+20+de+Noviembre+Ote+437+altos,+63300+Santiago+Ixcuintla,+Nay./@21.8088139,-105.2854249,12z/data=!4m8!4m7!1m0!1m5!1m1!1s0x8420af54c3e255bb:0x95728a41c39f57d4!2m2!1d-105.2153843!2d21.8088352?entry=ttu" target="_blank">Ver ubicacion</a>
    </div>
    <div class="card">
        <img src="img/restaurantes/Santigo Ixcuintla/malecon wings.jpg" alt="">
        <h2 class="hotel-name">Malecon Wings</h2>
        <h3>Restaurante</h3>
        <h3 style="color: rgb(0, 58, 247);">Direccion: Allende 78, Centro, Santiago Ixcuintla, Nay.</h3>
        <h4 style="color: rgb(0, 18, 78);">De lunes a domingo de 6:30 pm a 2:00 am. Martes cerrado</h4>
        <h3 class="numero">Telefono: 323 100 1582</h3>
        <a href="https://www.google.com/maps/dir//Allende+78,+Centro,+63300+Santiago+Ixcuintla,+Nay./@21.8073074,-105.2753793,12z/data=!4m8!4m7!1m0!1m5!1m1!1s0x8420af4db109290d:0x3a1963fbae2e24fc!2m2!1d-105.2053389!2d21.8073222?entry=ttu" target="_blank">Ver ubicacion</a>
    </div>
</div>
</span>
<br>
<br>
<!--boton para mostrar mas-->
<center><button class="read-more-btn">Ver Mas/Menos</button></center>
<!--separacion entre tarjetas-->
<br>
<br>
<br>
   <!----> 
<!--Tecuala-->
<!--tarjetas restaurantes(las 3 que son visibles)-->
<div data-aos="fade-up" data-aos-duration="1500">
    <h1 class="title">Restaurantes de Tecuala</h1>
    </div>
    <div data-aos="fade-up" data-aos-duration="1500">
    <div class="container">
        <div class="card">
            <img src="img/restaurantes/Tecuala/suhito.jpeg" alt="">
            <h2 class="hotel-name">Sushito Tecuala</h2>
            <h3>Restaurante de sushi</h3>
            <h3 style="color: rgb(0, 58, 247);">Direccion: Escobedo Pte 347, Camichín, Tecuala, Nay.</h3>
            <h4 style="color: rgb(0, 18, 78);">De martes a domingo de 1:30 am a 8:00 pm</h4>
            <h3 class="numero">Telefono: 389 102 6120</h3>
            <a href="https://www.google.com/maps/dir//Escobedo+Pte+347,+Camich%C3%ADn,+63440+Tecuala,+Nay./@22.393022,-105.5323543,12z/data=!4m8!4m7!1m0!1m5!1m1!1s0x869e43d50d2cfa3d:0x525cc27a9d1207c3!2m2!1d-105.4623139!2d22.3930371?entry=ttu" target="_blank">Ver ubicacion</a>
        </div>
        <div class="card">
            <img src="img/restaurantes/Tecuala/sushi.jpg" alt="">
            <h2 class="hotel-name">Sushi La Roja</h2>
            <h3>Restaurante de sushi</h3>
            <h3 style="color: rgb(0, 58, 247);">Direccion: Juárez Ote. 78, Centro, Tecuala, Nay.</h3>
            <h4 style="color: rgb(0, 18, 78);">De lunes a domingo de 11:00 am a 10:00 pm</h4>
            <h3 class="numero"></h3>
            <a href="https://www.google.com/maps?opi=89978449&lqi=CiBTdXNoaSBMYSBSb2phIGVuIHRlY3VhbGEgbmF5YXJpdEi7roHk_6yAgAhaOhAAEAEQAhgAGAEYAhgEIiBzdXNoaSBsYSByb2phIGVuIHRlY3VhbGEgbmF5YXJpdCoICAIQABABEAKSARBzdXNoaV9yZXN0YXVyYW50qgFcEAEqESINc3VzaGkgbGEgcm9qYSgOMh8QASIbk1U4S5zR1DHAp7XcPGbLfEW-B5-eTYz0T2fRMiQQAiIgc3VzaGkgbGEgcm9qYSBlbiB0ZWN1YWxhIG5heWFyaXQ&phdesc=Rbn1Ya-ppm4&vet=12ahUKEwiB9cKImpyAAxXpM0QIHa3iAnUQ8UF6BAgFEBg..i&lei=Mpe4ZIGUCOnnkPIPrcWLqAc&cs=1&um=1&ie=UTF-8&fb=1&gl=mx&sa=X&geocode=KYlzbvEBQ56GMeuIs9BFBPSS&daddr=63440,+Ju%C3%A1rez+Ote.+78,+Centro,+Tecuala,+Nay." target="_blank">Ver ubicacion</a>
        </div>
        <div class="card">
            <img src="img/restaurantes/Tecuala/sazon del chef.jpg" alt="">
            <h2 class="hotel-name">Sazón del Chef</h2>
            <h3>Restaurante</h3>
            <h3 style="color: rgb(0, 58, 247);">Direccion: Luis Donaldo Colosio Murrieta Sur 64, El Tinaco, La Bomba, Tecuala, Nay.</h3>
            <h4 style="color: rgb(0, 18, 78);">De lunes a domingo de 7:00 am a 1:00 pm</h4>
            <h3 class="numero"></h3>
            <a href="https://www.google.com/maps/dir//Luis+Donaldo+Colosio+Murrieta+Sur+64,+El+Tinaco,+La+Bomba,+63440+Tecuala,+Nay./@22.397886,-105.5236435,12z/data=!4m8!4m7!1m0!1m5!1m1!1s0x869e43e4374930d9:0xac281b4f196801a4!2m2!1d-105.4535416!2d22.3979194?entry=ttu" target="_blank">Ver ubicacion</a>
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
        <img src="img/restaurantes/Tecuala/birria.jpg" alt="">
        <h2 class="hotel-name">Birria doña Mary</h2>
        <h3>Restaurante</h3>
        <h3 style="color: rgb(0, 58, 247);">Direccion: Allende Ote. 253, Colosio, Tecuala, Nay.</h3>
        <h4 style="color: rgb(0, 18, 78);"></h4>
        <h3 class="numero"></h3>
        <a href="https://www.google.com/maps/dir//Allende+Ote.+253,+Colosio,+63440+Tecuala,+Nay./@22.4001873,-105.5223309,12z/data=!4m8!4m7!1m0!1m5!1m1!1s0x869e43d55883f093:0xa389956658215dd2!2m2!1d-105.4522557!2d22.4000883?entry=ttu" target="_blank">Ver ubicacion</a>
    </div>
    <div class="card">
        <img src="img/restaurantes/Tecuala/botanero.jpg" alt="">
        <h2 class="hotel-name">Botanero Los Dorados</h2>
        <h3>Marisqueria</h3>
        <h3 style="color: rgb(0, 58, 247);">Direccion: México Sur 415, Mancillas, Tecuala, Nay.</h3>
        <h4 style="color: rgb(0, 18, 78);">De martes a domingo de 12:00 pm a 8:00 pm</h4>
        <h3 class="numero">Telefono: 311 253 8263</h3>
        <a href="https://www.google.com/maps/dir//M%C3%A9xico+Sur+415,+Mancillas,+63440+Tecuala,+Nay./@22.3915622,-105.5252352,12z/data=!4m8!4m7!1m0!1m5!1m1!1s0x869e430073597941:0x6766b087e41ad70e!2m2!1d-105.4551625!2d22.3915863?entry=ttu" target="_blank">Ver ubicacion</a>
    </div>
    <div class="card">
        <img src="img/restaurantes/Tecuala/marisma.jpg" alt="">
        <h2 class="hotel-name">Botanas la marisma</h2>
        <h3>Marisqueria</h3>
        <h3 style="color: rgb(0, 58, 247);">Direccion: Durango Sur, Centro, 63453 Tecuala, Nay.</h3>
        <h4 style="color: rgb(0, 18, 78);">De lunes a domingo de 12:00 pm a 10:00 pm</h4>
        <h3 class="numero">Telefono: 389 105 2872</h3>
        <a href="https://www.google.com/maps/dir//Durango+Sur,+Centro,+63453+Tecuala,+Nay./@22.3977441,-105.5345139,12z/data=!4m8!4m7!1m0!1m5!1m1!1s0x869e43c245aac003:0xafcdfcffbbc645d3!2m2!1d-105.4644735!2d22.3977592?entry=ttu" target="_blank">Ver ubicacion</a>
    </div>
</div>
<br><br>
<div class="container">
    <div class="card">
        <img src="img/restaurantes/Tecuala/lagallera.jpg" alt="">
        <h2 class="hotel-name">La gallera sport bar</h2>
        <h3>Restaurante</h3>
        <h3 style="color: rgb(0, 58, 247);">Direccion: Escobedo Ote. 210, Mancillas, Tecuala, Nay.</h3>
        <h4 style="color: rgb(0, 18, 78);">De martes a domingo de 12:00 pm a 10:45 pm</h4>
        <h3 class="numero">Telefono: 389 253 1710</h3>
        <a href="https://www.google.com/maps?opi=89978449&lqi=CidMYSBnYWxsZXJhIHNwb3J0IGJhciBlbiB0ZWN1YWxhIG5heWFyaXRI2_WFwcqtgIAIWkcQABABEAIQAxgAGAEYAhgDGAUiJ2xhIGdhbGxlcmEgc3BvcnQgYmFyIGVuIHRlY3VhbGEgbmF5YXJpdCoKCAIQABABEAIQA5IBCnJlc3RhdXJhbnSqAWoQASoYIhRsYSBnYWxsZXJhIHNwb3J0IGJhcigOMh8QASIbTvrShq9Mz1T5CFzyCff4SUshsB4IrEM7H8roMisQAiInbGEgZ2FsbGVyYSBzcG9ydCBiYXIgZW4gdGVjdWFsYSBuYXlhcml0&phdesc=lnMYzPjb_Ik&vet=12ahUKEwjivv79opyAAxWaiO4BHZuYD1oQ8UF6BAgFEBg..i&lei=i6C4ZKLNOpqRur8Pm7G-0AU&cs=1&um=1&ie=UTF-8&fb=1&gl=mx&sa=X&geocode=Kb2C9QpPQ56GMU18i1KTlLD-&daddr=Escobedo+Ote.+210,+Mancillas,+63440+Tecuala,+Nay." target="_blank">Ver ubicacion</a>
    </div>
    <div class="card">
        <img src="img/restaurantes/Tecuala/restaurant chino.jpg" alt="">
        <h2 class="hotel-name">Comida China Restaurant Dragon</h2>
        <h3>Restaurante chino</h3>
        <h3 style="color: rgb(0, 58, 247);">Direccion: Zaragoza Pte. 97, Las Brisas, Tecuala, Nay.</h3>
        <h4 style="color: rgb(0, 18, 78);">De lunes a domingo de 12:00 pm a 8:00 pm</h4>
        <h3 class="numero">Telefono: 667 346 8532</h3>
        <a href="https://www.google.com/maps/dir//Zaragoza+Pte.+97,+Las+Brisas,+63450+Tecuala,+Nay./@22.3949058,-105.5279008,12z/data=!4m8!4m7!1m0!1m5!1m1!1s0x869e430116820fff:0x93ad602c5f4b71e5!2m2!1d-105.4578568!2d22.3949094?entry=ttu" target="_blank">Ver ubicacion</a>
    </div>
    <div class="card">
        <img src="img/restaurantes/Tecuala/manglar.jpg" alt="">
        <h2 class="hotel-name">Restaurante Manglar</h2>
        <h3>Marisquería</h3>
        <h3 style="color: rgb(0, 58, 247);">Direccion: Amado Nervo Pte. 140, Juan Escutia, Tecuala, Nay.</h3>
        <h4 style="color: rgb(0, 18, 78);">De lunes a domingo de 8:00 am a 5:00 pm. Martes cerrado</h4>
        <h3 class="numero">Telefono: 389 253 2730</h3>
        <a href="https://www.google.com/maps/dir//Amado+Nervo+Pte.+140,+Juan+Escutia,+63450+Tecuala,+Nay./@22.4000014,-105.5307891,12z/data=!4m8!4m7!1m0!1m5!1m1!1s0x869e43fa013b89e5:0xe3550fc08bbc827a!2m2!1d-105.4607489!2d22.400017?entry=ttu" target="_blank">Ver ubicacion</a>
    </div>
</div>
<br><br>
<div class="container">
    <div class="card">
        <img src="img/restaurantes/Tecuala/hikalu.jpg" alt="">
        <h2 class="hotel-name">Hukilau pizza</h2>
        <h3>Pizzería</h3>
        <h3 style="color: rgb(0, 58, 247);">Direccion: Juárez Ote. 28, Centro, Tecuala, Nay.</h3>
        <h4 style="color: rgb(0, 18, 78);">De viernes a domingo de 10:00 am a 9:00 pm</h4>
        <h3 class="numero">Telefono: 389 253 3545</h3>
        <a href="https://www.google.com/maps/dir//Ju%C3%A1rez+Ote.+28,+Centro,+63440+Tecuala,+Nay./@22.3961574,-105.5259667,12z/data=!4m8!4m7!1m0!1m5!1m1!1s0x869e4320cb9dc89f:0x7a0789ffaf3de608!2m2!1d-105.4559297!2d22.3961844?entry=ttu" target="_blank">Ver ubicacion</a>
    </div>
    <div class="card">
        <img src="img/restaurantes/Tecuala/hijos del sushi.jpeg" alt="">
        <h2 class="hotel-name">Los Hijos de Sushi</h2>
        <h3>Restaurante de suhi</h3>
        <h3 style="color: rgb(0, 58, 247);">Direccion: Ignacio Zaragoza 281, Camichín, Tecuala, Nay.</h3>
        <h4 style="color: rgb(0, 18, 78);">De lunes a domingo de 1:00 pm a 9:00 pm. Martes cerrado</h4>
        <h3 class="numero">Telefono: 311 108 5207</h3>
        <a href="https://www.google.com/maps/dir//Ignacio+Zaragoza+281,+Camich%C3%ADn,+63460+Tecuala,+Nay./@22.3941749,-105.5315614,12z/data=!4m8!4m7!1m0!1m5!1m1!1s0x869e43d301b2c899:0xb988a51cba64ad5d!2m2!1d-105.461521!2d22.39419?entry=ttu" target="_blank">Ver ubicacion</a>
    </div>
    <div class="card">
        <img src="img/restaurantes/Tecuala/bonsai.jpeg" alt="">
        <h2 class="hotel-name">Bonsai sushi</h2>
        <h3>Restaurante de sushi</h3>
        <h3 style="color: rgb(0, 58, 247);">Direccion: Miguel hidalgo 328, camichion, Tecuala, Nay.</h3>
        <h4 style="color: rgb(0, 18, 78);">De lunes a domingo de 12:00 pm a 9:00 pm</h4>
        <h3 class="numero">Telefono: 311 250 4288</h3>
        <a href="https://www.google.com/maps/dir//Miguel+hidalgo+328,+camichion,+63440+Tecuala,+Nay./@22.3965408,-105.5295654,12z/data=!4m8!4m7!1m0!1m5!1m1!1s0x869e43a82258cc23:0x3787c019fc9b630b!2m2!1d-105.4595251!2d22.396556?entry=ttu" target="_blank">Ver ubicacion</a>
    </div>
</div>
<br></br>
<div class="container">
    <div class="card">
        <img src="img/restaurantes/Tecuala/redburger.jpg" alt="">
        <h2 class="hotel-name">Red Evolution Burgers</h2>
        <h3>Hamburguesería</h3>
        <h3 style="color: rgb(0, 58, 247);">Direccion: Guanajuato Sur y, Centro, Tecuala, Nay.</h3>
        <h4 style="color: rgb(0, 18, 78);">De jueves a domingo de 6:00 pm a 11:45 pm</h4>
        <h3 class="numero">Telefono: 389 253 3381</h3>
        <a href="https://www.google.com/maps/dir//%E1%8A%A4%E1%88%B5%E1%8A%AE%E1%89%A4%E1%8B%B6+%E1%8A%A6%E1%88%AA%E1%8A%A4%E1%8A%95%E1%89%B4,+Guanajuato+Sur+y,+Centro,+63457+Tecuala,+Nay./@22.3868691,-105.4786944,13.75z/data=!4m8!4m7!1m0!1m5!1m1!1s0x869e4300e4afdadf:0xb1ad32c5796345e!2m2!1d-105.456923!2d22.3945855?entry=ttu" target="_blank">Ver ubicacion</a>
    </div>
    <div class="card">
        <img src="img/restaurantes/Tecuala/botanero22.jpg" alt="">
        <h2 class="hotel-name">Centro Botanero El Naranjito</h2>
        <h3>Restaurante</h3>
        <h3 style="color: rgb(0, 58, 247);">Direccion: Tecuala, Nay.</h3>
        <h4 style="color: rgb(0, 18, 78);">De martes a domingo de 11:00 am a 8:00 pm</h4>
        <h3 class="numero">Telefono: 389 102 4803</h3>
        <a href="https://www.google.com/maps/dir//63459+Tecuala,+Nay./@22.398918,-105.5485876,12z/data=!4m8!4m7!1m0!1m5!1m1!1s0x869e4373a7526329:0xb5a14ede93954ad!2m2!1d-105.4785472!2d22.3989331?entry=ttu" target="_blank">Ver ubicacion</a>
    </div>
    <div class="card">
        <img src="img/restaurantes/Tecuala/laparrillada.jpg" alt="">
        <h2 class="hotel-name">La Parrillada Express</h2>
        <h3>Parrilla</h3>
        <h3 style="color: rgb(0, 58, 247);">Direccion: Av. Colosio n. 150 col. Centro Entre Mina y Allende, México, Nay.</h3>
        <h4 style="color: rgb(0, 18, 78);">De jueves a domingo de 11:00 am a 5:00 pm</h4>
        <h3 class="numero">Telefono: 389 253 3722</h3>
        <a href="https://www.google.com/maps/dir//Av.+Colosio+n.+150+col.+Centro+63450+Entre+Mina+y+Allende,+63450+M%C3%A9xico,+Nay./@22.3997969,-105.5239653,12z/data=!4m8!4m7!1m0!1m5!1m1!1s0x869e43e853a0823b:0xde6343339fb4a7e2!2m2!1d-105.4539249!2d22.399812?entry=ttu" target="_blank">Ver ubicacion</a>
    </div>
</div>
</span>
<br>
<br>
<!--boton para mostrar mas-->
<center><button class="read-more-btn">Ver Mas/Menos</button></center>
<!--separacion entre tarjetas-->
<br>
<br>
<br>
   <!----> 
<!--Tepic-->
<!--tarjetas restaurantes(las 3 que son visibles)-->
<div data-aos="fade-up" data-aos-duration="1500">
    <h1 class="title">Restaurantes de Tepic</h1>
    </div>
    <div data-aos="fade-up" data-aos-duration="1500">
    <div class="container">
        <div class="card">
            <img src="img/restaurantes/Tepic/dolores.png" alt="">
            <h2 class="hotel-name">Dolores Restaurante</h2>
            <h3>Restaurante</h3>
            <h3 style="color: rgb(0, 58, 247);">Direccion: De Los Insurgentes Pte. 78a, Estadios, Tepic, Nay.</h3>
            <h4 style="color: rgb(0, 18, 78);">De lunes a domingo de 8:00 am a 12:00 am</h4>
            <h3 class="numero">Telefono: 311 456 5168</h3>
            <a href="https://www.google.com/maps/dir//Dolores+Restaurante+en+tepic+nayatit/@22.0024686,-105.7244998,9z/data=!4m8!4m7!1m0!1m5!1m1!1s0x842737aec15d313f:0x677a71478035c6eb!2m2!1d-104.9033123!2d21.5104297?entry=ttu" target="_blank">Ver ubicacion</a>
        </div>
        <div class="card">
            <img src="img/restaurantes/Tepic/laola.jpg" alt="">
            <h2 class="hotel-name">Restaurante La Ola</h2>
            <h3>Marisquería</h3>
            <h3 style="color: rgb(0, 58, 247);">Direccion: Av del Valle 161, Cd del Valle, Tepic, Nay.</h3>
            <h4 style="color: rgb(0, 18, 78);">De lunes a domingo de 11:00 am a 12:00 am</h4>
            <h3 class="numero">Telefono: 311 133 0891</h3>
            <a href="https://www.google.com/maps/dir//Av+del+Valle+161,+Cd+del+Valle,+63157+Tepic,+Nay./@21.4922277,-104.9562431,12z/data=!4m8!4m7!1m0!1m5!1m1!1s0x84273718aa68a1cd:0x7e472234d768cab3!2m2!1d-104.8862248!2d21.4922386?entry=ttu" target="_blank">Ver ubicacion</a>
        </div>
        <div class="card">
            <img src="img/restaurantes/Tepic/elquimcho.jpg" alt="">
            <h2 class="hotel-name">Restaurante Argentino El Quincho</h2>
            <h3>Restaurante argentino</h3>
            <h3 style="color: rgb(0, 58, 247);">Direccion: Calle Av Preparatoria 33, Cd del Valle,Tepic, Nay.</h3>
            <h4 style="color: rgb(0, 18, 78);">De lunes a domingo de 1:00 pm a 11:00 pm</h4>
            <h3 class="numero">Telefono:  311 210 8283</h3>
            <a href="https://www.google.com/maps/dir//Restaurante+Argentino+El+Quincho+en+tepic+nayarit/@21.9957261,-105.7164068,9z/data=!4m8!4m7!1m0!1m5!1m1!1s0x8427371ea49d69e1:0x88b2db2e822eeb3a!2m2!1d-104.8873643!2d21.4968492?entry=ttu" target="_blank">Ver ubicacion</a>
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
        <img src="img/restaurantes/Tepic/condesa.jpg" alt="">
        <h2 class="hotel-name">Condesa Tepic</h2>
        <h3>Restaurante</h3>
        <h3 style="color: rgb(0, 58, 247);">Direccion: Arq. Antonio Rivas Mercado Ote. 68, Centro, Tepic, Nay.</h3>
        <h4 style="color: rgb(0, 18, 78);">De lunes a domingo de 8:00 am a 10:00 pm. Miercoles cerrado</h4>
        <h3 class="numero">Telefono: 311 147 3242</h3>
        <a href="https://www.google.com/maps/dir//Condesa+Tepic+en+tepic+nayarit/@21.9993746,-105.719241,9z/data=!4m8!4m7!1m0!1m5!1m1!1s0x842737673af77e97:0xe668ac3b4c02deb8!2m2!1d-104.8928475!2d21.5050477?entry=ttu" target="_blank">Ver ubicacion</a>
    </div>
    <div class="card">
        <img src="img/restaurantes/Tepic/loma42.jpg" alt="">
        <h2 class="hotel-name">LOMA 42 TEPIC</h2>
        <h3>Restaurante</h3>
        <h3 style="color: rgb(0, 58, 247);">Direccion: Av. Paseo de la Loma 239, Centro, Tepic, Nay.</h3>
        <h4 style="color: rgb(0, 18, 78);">De lunes a domingo de 1:30 pm a 12:00 am</h4>
        <h3 class="numero">Telefono: 311 133 6026</h3>
        <a href="https://www.google.com/maps/dir//LOMA+42+TEPIC+en+tepic+nayarit/@21.9982145,-105.7209755,9z/data=!4m8!4m7!1m0!1m5!1m1!1s0x842736faefca6d13:0x424c43abe837e67!2m2!1d-104.9016855!2d21.504096?entry=ttu" target="_blank">Ver ubicacion</a>
    </div>
    <div class="card">
        <img src="img/restaurantes/Tepic/dutch.jpg" alt="">
        <h2 class="hotel-name">Restaurant Dutch's</h2>
        <h3>Restaurante</h3>
        <h3 style="color: rgb(0, 58, 247);">Direccion: Javier Mina 285, Centro, Tepic, Nay.</h3>
        <h4 style="color: rgb(0, 18, 78);">De lunes a domingo de 8:00 am a 10:00 pm</h4>
        <h3 class="numero">Telefono: 311 213 7272</h3>
        <a href="https://www.google.com/maps/dir//Restaurant+Dutch's+en+tepic+nayarit/@21.9999139,-105.7215187,9z/data=!4m8!4m7!1m0!1m5!1m1!1s0x842736f9575233d9:0xae94c16ec8047d7d!2m2!1d-104.8985774!2d21.5083373?entry=ttu" target="_blank">Ver ubicacion</a>
    </div>
</div>
<br><br>
<div class="container">
    <div class="card">
        <img src="img/restaurantes/Tepic/gloria.jpg" alt="">
        <h2 class="hotel-name">Restaurante La Gloria Bar & Grill</h2>
        <h3>Bar restaurante</h3>
        <h3 style="color: rgb(0, 58, 247);">Direccion: Av. México Nte. 212-altos, Centro,Tepic, Nay.</h3>
        <h4 style="color: rgb(0, 18, 78);">De lunes a domingo de 8:00 am a 12:00 am</h4>
        <h3 class="numero">Telefono: 311 160 5411</h3>
        <a href="https://www.google.com/maps/dir//Restaurante+La+Gloria+Bar+%26+Grill+en+tepic+nayarit/@22.0016088,-105.7185962,9z/data=!4m8!4m7!1m0!1m5!1m1!1s0x84273701d2efed5f:0x2e59e5f1cc8ce6eb!2m2!1d-104.8915118!2d21.5115713?entry=ttu" target="_blank">Ver ubicacion</a>
    </div>
    <div class="card">
        <img src="img/restaurantes/Tepic/pampas.jpg" alt="">
        <h2 class="hotel-name">Las Pampas Grill</h2>
        <h3>Restaurante argentino</h3>
        <h3 style="color: rgb(0, 58, 247);">Direccion: De Los Insurgentes Pte. 734, El Rodeo, Tepic, Nay.</h3>
        <h4 style="color: rgb(0, 18, 78);">De lunes a domingo de 2:00 pm a 11:00 pm</h4>
        <h3 class="numero">Telefono: 311 216 9656</h3>
        <a href="https://www.google.com/maps/dir//Las+Pampas+Grill+en+tepic+nayarit/@22.004551,-105.7278178,9z/data=!4m8!4m7!1m0!1m5!1m1!1s0x8427365f2179082d:0x1d7025ed8c11c2f4!2m2!1d-104.9108502!2d21.5154283?entry=ttu" target="_blank">Ver ubicacion</a>
    </div>
    <div class="card">
        <img src="img/restaurantes/Tepic/marlin.jpg" alt="">
        <h2 class="hotel-name">Marlin de Tepic</h2>
        <h3>Marisquería</h3>
        <h3 style="color: rgb(0, 58, 247);">Direccion: Del Panteón 45, Centro, Tepic, Nay.</h3>
        <h4 style="color: rgb(0, 18, 78);">De lunes a domingo de 12:00 pm a 5:30 pm</h4>
        <h3 class="numero">Telefono: 311 214 6050</h3>
        <a href="https://www.google.com/maps/dir//Marlin+de+Tepic+en+tepic+nayarit/@21.9983319,-105.7148693,9z/data=!4m8!4m7!1m0!1m5!1m1!1s0x842736f905cddf47:0x68762e36946480d6!2m2!1d-104.8869934!2d21.5031223?entry=ttu" target="_blank">Ver ubicacion</a>
    </div>
</div>
<br><br>
<div class="container">
    <div class="card">
        <img src="img/restaurantes/Tepic/robertos.png" alt="">
        <h2 class="hotel-name">Restaurant Roberto's</h2>
        <h3>Restaurante</h3>
        <h3 style="color: rgb(0, 58, 247);">Direccion: Av. Paseo de la Loma 457, Centro, Tepic, Nay.</h3>
        <h4 style="color: rgb(0, 18, 78);">De lunes a sabado de 1:00 pm a 11:30 pm</h4>
        <h3 class="numero">Telefono: 311 213 3005</h3>
        <a href="https://www.google.com/maps/dir//Restaurant+Roberto's+en+tepic+nayarit/@22.0006926,-105.7233231,9z/data=!4m8!4m7!1m0!1m5!1m1!1s0x842736fa330f6555:0x7786c4565525b2f6!2m2!1d-104.9012862!2d21.5068364?entry=ttu" target="_blank">Ver ubicacion</a>
    </div>
    <div class="card">
        <img src="img/restaurantes/Tepic/capisantro.png" alt="">
        <h2 class="hotel-name">Restaurante Capistrano</h2>
        <h3>Restaurante</h3>
        <h3 style="color: rgb(0, 58, 247);">Direccion: Sebastián Lerdo de Tejada Pte. 15a, Centro, Tepic, Nay.</h3>
        <h4 style="color: rgb(0, 18, 78);">De lunes a domingo de 7:00 am a 10:30 pm</h4>
        <h3 class="numero">Telefono: 311 215 4671</h3>
        <a href="https://www.google.com/maps/dir//Restaurante+Capistrano+en+tepic+nayarit/@22.0016088,-105.7187061,9z/data=!4m8!4m7!1m0!1m5!1m1!1s0x842737bffa7503c1:0xc621139c4e6740d6!2m2!1d-104.8918902!2d21.5116449?entry=ttu" target="_blank">Ver ubicacion</a>
    </div>
    <div class="card">
        <img src="img/restaurantes/Tepic/trattoria.jpg" alt="">
        <h2 class="hotel-name">La Trattoria</h2>
        <h3>Restaurante italiano</h3>
        <h3 style="color: rgb(0, 58, 247);">Direccion: Av Jacarandas 322-A, Versalles Sur, Tepic, Nay.</h3>
        <h4 style="color: rgb(0, 18, 78);">De lunes a domingo de 8:00 am a 11:00 pm</h4>
        <h3 class="numero">Telefono: 311 213 3494</h3>
        <a href="https://www.google.com/maps/dir//La+Trattoria+en+tepic+nayarit/@21.9970005,-105.7249637,9z/data=!4m8!4m7!1m0!1m5!1m1!1s0x842736f187ca656d:0x8b9a1073b8858681!2m2!1d-104.9095589!2d21.5035893?entry=ttu" target="_blank">Ver ubicacion</a>
    </div>
</div>
<br><br>
<div class="container">
    <div class="card">
        <img src="img/restaurantes/Tepic/picanteria.jpg" alt="">
        <h2 class="hotel-name">La Picanteria</h2>
        <h3>Marisquería</h3>
        <h3 style="color: rgb(0, 58, 247);">Direccion: Av del Valle 5, Cd del Valle, Tepic, Nay.</h3>
        <h4 style="color: rgb(0, 18, 78);">De lunes a domingo de 11:00 am a 7:30 pm</h4>
        <h3 class="numero"></h3>
        <a href="https://www.google.com/maps/dir//La+Picanteria+en+tepic+nayarit/@21.9881351,-105.7134167,9z/data=!4m8!4m7!1m0!1m5!1m1!1s0x84273722237fcc3f:0x7a83c1b0f335e2a4!2m2!1d-104.8857787!2d21.4899281?entry=ttu" target="_blank">Ver ubicacion</a>
    </div>
    <div class="card">
        <img src="img/restaurantes/Tepic/emiliano.jpg" alt="">
        <h2 class="hotel-name">Emiliano Comida y Vino</h2>
        <h3>Restaurante de desayunos</h3>
        <h3 style="color: rgb(0, 58, 247);">Direccion: Emiliano Zapata Ote. 91, Centro, 63000 Tepic, Nay.</h3>
        <h4 style="color: rgb(0, 18, 78);">De lunes a domingo de 8:00 am a 11:00 pm</h4>
        <h3 class="numero">Telefono: 311 216 2010</h3>
        <a href="https://www.google.com/maps/dir//Emiliano+Comida+y+Vino+en+tepic+nayarit/@22.0016088,-105.7181318,9z/data=!4m8!4m7!1m0!1m5!1m1!1s0x842737381fb3daa3:0x471d19d40fabc82d!2m2!1d-104.8905884!2d21.5095159?entry=ttu" target="_blank">Ver ubicacion</a>
    </div>
    <div class="card">
        <img src="img/restaurantes/Tepic/lola.jpg" alt="">
        <h2 class="hotel-name">Mi Lola Pizza a la leña</h2>
        <h3>Pizzería</h3>
        <h3 style="color: rgb(0, 58, 247);">Direccion: Av. Universidad 121, Cd del Valle, Tepic, Nay.</h3>
        <h4 style="color: rgb(0, 18, 78);">De lunes a domingo de 2:00 pm a 12:00 am</h4>
        <h3 class="numero">Telefono: 311 210 1010</h3>
        <a href="https://www.google.com/maps/dir//Mi+Lola+Pizza+a+la+le%C3%B1a+en+tepic+nayarit/@21.9881351,-105.7159845,9z/data=!4m8!4m7!1m0!1m5!1m1!1s0x842737222003d839:0xf63ee0c56a10395!2m2!1d-104.8863046!2d21.4902765?entry=ttu" target="_blank">Ver ubicacion</a>
    </div>
</div>
<br><br>
<div class="container">
    <div class="card">
        <img src="img/restaurantes/Tepic/huasteaca.jpg" alt="">
        <h2 class="hotel-name">Huasteca Tepic</h2>
        <h3>Restaurante</h3>
        <h3 style="color: rgb(0, 58, 247);">Direccion: De Iturbide 340, Cd del Valle, Tepic, Nay.</h3>
        <h4 style="color: rgb(0, 18, 78);">De lunes a domingo de 1:00 pm a 12:00 am</h4>
        <h3 class="numero">Telefono: 311 124 9229</h3>
        <a href="https://www.google.com/maps/dir//Huasteca+Tepic+en+tepic+nayarit/@21.9940694,-105.7164068,9z/data=!4m8!4m7!1m0!1m5!1m1!1s0x84273798349cd86d:0xf25cd91634ba5b50!2m2!1d-104.8886169!2d21.4935163?entry=ttu" target="_blank">Ver ubicacion</a>
    </div>
    <div class="card">
        <img src="img/restaurantes/Tepic/mayabay.jpg" alt="">
        <h2 class="hotel-name">Maya Bay Restaurant</h2>
        <h3>Restaurante</h3>
        <h3 style="color: rgb(0, 58, 247);">Direccion: Calle mina s/n antes de salir a insurgentes, a un costado de la alameda, Centro, Tepic, Nay.</h3>
        <h4 style="color: rgb(0, 18, 78);">De lunes a domingo de 8:00 am a 11:00 pm</h4>
        <h3 class="numero">Telefono: 311 688 1211</h3>
        <a href="https://www.google.com/maps/dir//Maya+Bay+Restaurant+en+tepic+nayarit/@22.0008464,-105.7228435,9z/data=!4m8!4m7!1m0!1m5!1m1!1s0x842736f99c30bf43:0x7737f78a58a81bd8!2m2!1d-104.901097!2d21.5088287?entry=ttu" target="_blank">Ver ubicacion</a>
    </div>
    <div class="card">
        <img src="img/restaurantes/Tepic/laisla.jpg" alt="">
        <h2 class="hotel-name">La isla</h2>
        <h3>Marisuqeria</h3>
        <h3 style="color: rgb(0, 58, 247);">Direccion: Av Prisciliano Sanchez 266, Centro, Tepic, Nay.</h3>
        <h4 style="color: rgb(0, 18, 78);">De lunes a domingo de 12:00 pm a 6:00 pm. Miercoles cerrados</h4>
        <h3 class="numero"></h3>
        <a href="https://www.google.com/maps/dir//La+isla+restaurante+en+tepic+nayarit/@22.0006743,-105.715953,9z/data=!4m8!4m7!1m0!1m5!1m1!1s0x84273707f09c0985:0x66b288a8c740d99c!2m2!1d-104.8863044!2d21.5104718?entry=ttu" target="_blank">Ver ubicacion</a>
    </div>
</div>
<br><br>
<div class="container">
    <div class="card">
        <img src="img/restaurantes/Tepic/marieta.jpg" alt="">
        <h2 class="hotel-name">Restaurant Marieta</h2>
        <h3>Marisquería</h3>
        <h3 style="color: rgb(0, 58, 247);">Direccion: Av del Valle 146, Cd del Valle, Tepic, Nay.</h3>
        <h4 style="color: rgb(0, 18, 78);">De lunes a domingo de 12:00 pm a 7:00 pm</h4>
        <h3 class="numero">Telefono: 311 213 0033</h3>
        <a href="https://www.google.com/maps/dir//Restaurant+Marieta+en+tepic+nayarit/@21.9881351,-105.7155413,9z/data=!4m8!4m7!1m0!1m5!1m1!1s0x84273723dd441001:0x41ce07fedc73a176!2m2!1d-104.8856227!2d21.4877579?entry=ttu" target="_blank">Ver ubicacion</a>
    </div>
    <div class="card">
        <img src="img/restaurantes/Tepic/brasas.jpg" alt="">
        <h2 class="hotel-name">Las Brasas</h2>
        <h3>Restaurante</h3>
        <h3 style="color: rgb(0, 58, 247);">Direccion: Av Jacarandas 525, Versalles, Tepic, Nay.</h3>
        <h4 style="color: rgb(0, 18, 78);">De lunes a domingo de 1:00 pm a 9:30 pm</h4>
        <h3 class="numero">Telefono: 311 160 5579</h3>
        <a href="https://www.google.com/maps/dir//63130,+Av+Jacarandas+525,+Versalles,+Tepic,+Nay./@21.5075704,-104.9767385,12z/data=!4m8!4m7!1m0!1m5!1m1!1s0x842736f72a6e31ad:0xf87aed3517a3a81d!2m2!1d-104.9066981!2d21.507585?entry=ttu" target="_blank">Ver ubicacion</a>
    </div>
    <div class="card">
        <img src="img/restaurantes/Tepic/lasopa.jpg" alt="">
        <h2 class="hotel-name">Restaurant La Sopa</h2>
        <h3>Restaurante</h3>
        <h3 style="color: rgb(0, 58, 247);">Direccion: Av Insurgentes 165, Centro, Tepic, Nay.</h3>
        <h4 style="color: rgb(0, 18, 78);">De lunes a domingo de 7:30 am a 7:30 pm</h4>
        <h3 class="numero">Telefono: 311 214 7983</h3>
        <a href="https://www.google.com/maps/dir//Restaurant+La+Sopa+en+tepic+nayarit/@21.9988473,-105.7188518,9z/data=!4m8!4m7!1m0!1m5!1m1!1s0x842736ef7d681cd9:0x720d6fd2962e45ac!2m2!1d-104.892023!2d21.5031981?entry=ttu" target="_blank">Ver ubicacion</a>
    </div>
</div>
<br><br>
<div class="container">
    <div class="card">
        <img src="img/restaurantes/Tepic/estero.jpg" alt="">
        <h2 class="hotel-name">Restaurant el estero</h2>
        <h3>Restaurante</h3>
        <h3 style="color: rgb(0, 58, 247);">Direccion: La Peñita, Blvd. Tepic-Xalisco 136, Peñita, Tepic, Nay.</h3>
        <h4 style="color: rgb(0, 18, 78);">De lunes a domingo de 8:00 am a 4:00 pm</h4>
        <h3 class="numero">Telefono: 311 133 6538</h3>
        <a href="https://www.google.com/maps/dir//%F0%9D%91%B9%F0%9D%92%86%F0%9D%92%94%F0%9D%92%95%F0%9D%92%82%F0%9D%92%96%F0%9D%92%93%F0%9D%92%82%F0%9D%92%8F%F0%9D%92%95%F0%9D%92%86+%F0%9D%91%AC%F0%9D%92%8D+%F0%9D%91%AC%F0%9D%92%94%F0%9D%92%95%F0%9D%92%86%F0%9D%92%93%F0%9D%92%90+en+tepic+nayarit/@21.9806452,-105.7136235,9z/data=!4m8!4m7!1m0!1m5!1m1!1s0x8427372b6e8d7d91:0x52d6ba753816f5a7!2m2!1d-104.8872846!2d21.4703048?entry=ttu" target="_blank">Ver ubicacion</a>
    </div>
    <div class="card">
        <img src="img/restaurantes/Tepic/almacen mexico.jpg" alt="">
        <h2 class="hotel-name">Almacén México</h2>
        <h3>Restaurante</h3>
        <h3 style="color: rgb(0, 58, 247);">Direccion: La Peñita, Blvd. Tepic-Xalisco 136, Peñita, Tepic, Nay.</h3>
        <h4 style="color: rgb(0, 18, 78);">De martes a domingo de 4:00 pm a 12:30 am</h4>
        <h3 class="numero">Telefono: 311 133 6538</h3>
        <a href="https://www.google.com/maps/dir//Almac%C3%A9n+M%C3%A9xico+en+tepic+nayarit/@21.9947028,-105.7209471,9z/data=!4m8!4m7!1m0!1m5!1m1!1s0x842736e13f292073:0x37d1e2661bda700b!2m2!1d-104.8967642!2d21.4948021?entry=ttu" target="_blank">Ver ubicacion</a>
    </div>
    <div class="card">
        <img src="img/restaurantes/Tepic/ganadera.jpg" alt="">
        <h2 class="hotel-name">Restaurant La Ganadera</h2>
        <h3>Marisquería</h3>
        <h3 style="color: rgb(0, 58, 247);">Direccion: Blvrd Luis Donaldo Colosio 552, Ageuan los Limones, Tepic, Nay.</h3>
        <h4 style="color: rgb(0, 18, 78);">De lunes a domingo de 12:00 pm a 8:00 pm</h4>
        <h3 class="numero">Telefono: 311 160 3236</h3>
        <a href="https://www.google.com/maps/dir//Restaurant+La+Ganadera+en+tepic+nayarit/@21.9937127,-105.7076656,9z/data=!4m8!4m7!1m0!1m5!1m1!1s0x8427371547873cb9:0x7c31c0696ed1ae53!2m2!1d-104.8697483!2d21.4949856?entry=ttu" target="_blank">Ver ubicacion</a>
    </div>
</div>
<br><br>
<div class="container">
    <div class="card">
        <img src="img/restaurantes/Tepic/cafe del chef.jpg" alt="">
        <h2 class="hotel-name">Café del Chef Restaurante</h2>
        <h3>Restaurante</h3>
        <h3 style="color: rgb(0, 58, 247);">Direccion: Av. Universidad 2-Int. 6, Cd del Valle, Tepic, Nay.</h3>
        <h4 style="color: rgb(0, 18, 78);">De lunes a domingo de 7:00 am a 10:00 pm</h4>
        <h3 class="numero">Telefono: 311 210 8080</h3>
        <a href="https://www.google.com/maps/dir//Caf%C3%A9+del+Chef+Restaurante+en+tepic+nayarit/@21.9930211,-105.7134167,9z/data=!4m8!4m7!1m0!1m5!1m1!1s0x8427372287450d09:0x65ac1951b2c0558b!2m2!1d-104.8833629!2d21.4914208?entry=ttu" target="_blank">Ver ubicacion</a>
    </div>
    <div class="card">
        <img src="img/restaurantes/Tepic/diamante.jpg" alt="">
        <h2 class="hotel-name">Restaurante El Diamante</h2>
        <h3>Marisquería</h3>
        <h3 style="color: rgb(0, 58, 247);">Direccion:  Libramiento km 239 Colonia, Puente de San Cayetano, Tepic, Nay.</h3>
        <h4 style="color: rgb(0, 18, 78);">De lunes a domingo de 10:00 am a 7:00 pm</h4>
        <h3 class="numero">Telefono: 311 211 5242</h3>
        <a href="https://www.google.com/maps/dir//Restaurante+El+Diamante+en+tepic+nayarit/@21.978626,-105.6965754,9z/data=!4m8!4m7!1m0!1m5!1m1!1s0x842730aa44e128ab:0x30c2a4f6e6f76203!2m2!1d-104.8474701!2d21.468138?entry=ttu" target="_blank">Ver ubicacion</a>
    </div>
    <div class="card">
        <img src="img/restaurantes/Tepic/fragatta.jpg" alt="">
        <h2 class="hotel-name">LA FRAGATA</h2>
        <h3>Bar restaurante</h3>
        <h3 style="color: rgb(0, 58, 247);">Direccion: Narciso Mendoza 13, Gardenias, Insurgentes, Tepic, Nay.</h3>
        <h4 style="color: rgb(0, 18, 78);">De lunes a domingo de 12:00 am a 6:30 pm</h4>
        <h3 class="numero">Telefono: 311 214 0156</h3>
        <a href="https://www.google.com/maps/dir//LA+FRAGATA+en+tepic+nayarit/@21.9833568,-105.7183043,9z/data=!4m8!4m7!1m0!1m5!1m1!1s0x8427372a6c45a5c5:0x387ca9ce4522a87a!2m2!1d-104.89187!2d21.4721088?entry=ttu" target="_blank">Ver ubicacion</a>
    </div>
</div>
<br><br>
<div class="container">
    <div class="card">
        <img src="img/restaurantes/Tepic/lau.jpg" alt="">
        <h2 class="hotel-name">Restaurante La U</h2>
        <h3>Restaurante</h3>
        <h3 style="color: rgb(0, 58, 247);">Direccion: Av Jacarandas 286-A, Versalles Sur, Tepic, Nay.</h3>
        <h4 style="color: rgb(0, 18, 78);">De lunes a domingo de 1:00 pm a 8:00 pm</h4>
        <h3 class="numero">Telefono: 311 170 4436</h3>
        <a href="https://www.google.com/maps/dir//Restaurante+La+U+en+tepic+nayarit/@21.999474,-105.7249637,9z/data=!4m8!4m7!1m0!1m5!1m1!1s0x84273785666e8da3:0x3798be4979abf280!2m2!1d-104.9089521!2d21.5043865?entry=ttu" target="_blank">Ver ubicacion</a>
    </div>
    <div class="card">
        <img src="img/restaurantes/Tepic/reyna.jpg" alt="">
        <h2 class="hotel-name">Restaurante REYNA</h2>
        <h3>Restaurante</h3>
        <h3 style="color: rgb(0, 58, 247);">Direccion: Turín 9, Cd del Valle, Tepic, Nay.</h3>
        <h4 style="color: rgb(0, 18, 78);">De lunes a domingo de 8:00 am a 10:00 pm</h4>
        <h3 class="numero">Telefono: 311 263 0439</h3>
        <a href="https://www.google.com/maps/dir//Restaurante+REYNA+en+tepic+nayarit/@21.9933819,-105.7147637,9z/data=!4m8!4m7!1m0!1m5!1m1!1s0x8427371fda1ffca9:0x1534a712317164e4!2m2!1d-104.8841014!2d21.4922209?entry=ttu" target="_blank">Ver ubicacion</a>
    </div>
    <div class="card">
        <img src="img/restaurantes/Tepic/taquito.jpg" alt="">
        <h2 class="hotel-name">El Taquito</h2>
        <h3>Restaurante</h3>
        <h3 style="color: rgb(0, 58, 247);">Direccion: Av. Paseo de la Loma 214, Centro, Tepic, Nay.</h3>
        <h4 style="color: rgb(0, 18, 78);">De lunes a domingo de 4:00 pm a 11:00 pm</h4>
        <h3 class="numero">Telefono: 311 230 7291</h3>
        <a href="https://www.google.com/maps/dir//Av.+Paseo+de+la+Loma+214,+Centro,+63000+Tepic,+Nay./@21.5034357,-104.9720775,12z/data=!4m8!4m7!1m0!1m5!1m1!1s0x842737bd82d3e163:0xbe5360e493c8b85e!2m2!1d-104.9020371!2d21.5034503?entry=ttu" target="_blank">Ver ubicacion</a>
    </div>
</div>
<br><br>
<div class="container">
    <div class="card">
        <img src="img/restaurantes/Tepic/navegante.jpg" alt="">
        <h2 class="hotel-name">EL NAVEGANTE</h2>
        <h3>Marisquería</h3>
        <h3 style="color: rgb(0, 58, 247);">Direccion: C. 5 79, El Rodeo, Tepic, Nay.</h3>
        <h4 style="color: rgb(0, 18, 78);">De lunes a domingo de 12:00 pm a 6:00 pm</h4>
        <h3 class="numero">Telefono: 311 688 3881</h3>
        <a href="https://www.google.com/maps/dir//EL+NAVEGANTE+en+tepic+nayarit/@22.0080214,-105.7315986,9z/data=!4m8!4m7!1m0!1m5!1m1!1s0x84273667cf92a2b3:0x5299bdd225b9f5d1!2m2!1d-104.9179033!2d21.5228389?entry=ttu" target="_blank">Ver ubicacion</a>
    </div>
    <div class="card">
        <img src="img/restaurantes/Tepic/golovanes.jpg" alt="">
        <h2 class="hotel-name">Los Golovanes</h2>
        <h3>Restaurante</h3>
        <h3 style="color: rgb(0, 58, 247);">Direccion: Vicente Suárez 44, Caminera, Tepic, Nay.</h3>
        <h4 style="color: rgb(0, 18, 78);">De lunes a domingo de 7:30 am a 1:00 pm</h4>
        <h3 class="numero">Telefono: 311 177 1201</h3>
        <a href="https://www.google.com/maps/dir//Los+Golovanes+en+tepic+nayarit/@21.9806452,-105.7136235,9z/data=!4m8!4m7!1m0!1m5!1m1!1s0x8427372bffc7ae61:0xc493b2e3f804db1d!2m2!1d-104.8863657!2d21.4741941?entry=ttu" target="_blank">Ver ubicacion</a>
    </div>
    <div class="card">
        <img src="img/restaurantes/Tepic/maruka.jpg" alt="">
        <h2 class="hotel-name">La Maruka Restaurante Bar</h2>
        <h3>Restaurante</h3>
        <h3 style="color: rgb(0, 58, 247);">Direccion: San Blas-Tepic km 1, Guadalupe, Tepic, Nay.</h3>
        <h4 style="color: rgb(0, 18, 78);">De lunes a domingo de 7:30 am a 7:00 pm. Miercoles cerrado</h4>
        <h3 class="numero">Telefono: 311 119 9798</h3>
        <a href="https://www.google.com/maps/dir//La+Maruka+Restaurante+Bar+en+tepic+nayarit/@22.0114218,-105.7381191,9z/data=!4m8!4m7!1m0!1m5!1m1!1s0x84273714793ccd3f:0xb53d9bd514eca961!2m2!1d-104.9305576!2d21.5282236?entry=ttu" target="_blank">Ver ubicacion</a>
    </div>
</div>
<br><br>
<div class="container">
    <div class="card">
        <img src="img/restaurantes/Tepic/chapalilla.jpg" alt="">
        <h2 class="hotel-name">El Chapalilla </h2>
        <h3>Restaurante mexicano</h3>
        <h3 style="color: rgb(0, 58, 247);">Direccion: Portugal 59, Cd del Valle, Tepic, Nay.</h3>
        <h4 style="color: rgb(0, 18, 78);">De lunes a domingo de 7:00 am a 5:00 pm</h4>
        <h3 class="numero">Telefono: 311 456 2900</h3>
        <a href="https://www.google.com/maps/dir//El+Chapalilla++tepic+nayarit/@21.9881351,-105.7164327,9z/data=!4m8!4m7!1m0!1m5!1m1!1s0x8427372168cdb685:0x8ab67363d8f58126!2m2!1d-104.8871847!2d21.4876506?entry=ttu" target="_blank">Ver ubicacion</a>
    </div>
    <div class="card">
        <img src="img/restaurantes/Tepic/muleta.jpg" alt="">
        <h2 class="hotel-name">MULETA RESTAURANT</h2>
        <h3>Restaurante</h3>
        <h3 style="color: rgb(0, 58, 247);">Direccion: Av. Paseo de la Loma 216, Centro, Tepic, Nay.</h3>
        <h4 style="color: rgb(0, 18, 78);">De martes a domingo de 1:00 pm a 12:00 am</h4>
        <h3 class="numero">Telefono: 311 218 5485</h3>
        <a href="https://www.google.com/maps/dir//MULETA+RESTAURANT+tepic+nayarit/@21.9982145,-105.7209755,9z/data=!4m8!4m7!1m0!1m5!1m1!1s0x84273723b07ba707:0x9b0ec7cf8d6743b3!2m2!1d-104.9019612!2d21.5035857?entry=ttu" target="_blank">Ver ubicacion</a>
    </div>
    <div class="card">
        <img src="img/restaurantes/Tepic/yuriiku.jpg" alt="">
        <h2 class="hotel-name">Yuri’ikú</h2>
        <h3>Restaurante</h3>
        <h3 style="color: rgb(0, 58, 247);">Direccion: C. Zapata Pte. 66, Centro, Tepic, Nay.</h3>
        <h4 style="color: rgb(0, 18, 78);">De lunes a domingo de 8:30 am a 4:30 pm</h4>
        <h3 class="numero">Telefono: 311 220 8903</h3>
        <a href="https://www.google.com/maps/dir//Yuri%E2%80%99ik%C3%BA+en+tepic+nayarit/@22.0019622,-105.7194909,9z/data=!4m8!4m7!1m0!1m5!1m1!1s0x8427370dda8754e3:0x91142b4630a447ac!2m2!1d-104.8933012!2d21.5104959?entry=ttu" target="_blank">Ver ubicacion</a>
    </div>
</div>
<br><br>
<div class="container">
    <div class="card">
        <img src="img/restaurantes/Tepic/matriarca.jpg" alt="">
        <h2 class="hotel-name">Matriarca</h2>
        <h3>Restaurante</h3>
        <h3 style="color: rgb(0, 58, 247);">Direccion: Av Jacarandas 343, El Tecolote, Tepic, Nay.</h3>
        <h4 style="color: rgb(0, 18, 78);">De lunes a domingo de 3:00 pm a 11:00 pm</h4>
        <h3 class="numero">Telefono: 311 285 1178</h3>
        <a href="https://www.google.com/maps/dir//Matriarca+en+tepic+nayarit/@21.9970005,-105.7277376,9z/data=!4m8!4m7!1m0!1m5!1m1!1s0x842737857d317e21:0x2bae7ce4f5ca8c4e!2m2!1d-104.9097945!2d21.5027616?entry=ttu" target="_blank">Ver ubicacion</a>
    </div>
    <div class="card">
        <img src="img/restaurantes/Tepic/quetzacoatl.jpg" alt="">
        <h2 class="hotel-name">QUETZALCOATL </h2>
        <h3>Restaurante vegetariano</h3>
        <h3 style="color: rgb(0, 58, 247);">Direccion:León Nte. 224, Centro Tepic, Nay.</h3>
        <h4 style="color: rgb(0, 18, 78);">De martes a domingo de 8:15 am a 5:00 pm</h4>
        <h3 class="numero">Telefono: 311 212 9966</h3>
        <a href="https://www.google.com/maps/dir//Le%C3%B3n+Nte.+224,+Centro,+63000+Tepic,+Nay./@21.5135277,-104.9658574,12z/data=!4m8!4m7!1m0!1m5!1m1!1s0x842736ff65234e63:0xea6f22be97d90377!2m2!1d-104.8958114!2d21.5135399?entry=ttu" target="_blank">Ver ubicacion</a>
    </div>
    <div class="card">
        <img src="img/restaurantes/Tepic/mamalupita.jpg" alt="">
        <h2 class="hotel-name">Mamá Lupita</h2>
        <h3>Restaurante</h3>
        <h3 style="color: rgb(0, 58, 247);">Direccion: Río Ingenio 98, Electricistas Tepic, Nay.</h3>
        <h4 style="color: rgb(0, 18, 78);">De lunes a domingo de 8:00 am a 4:00 pm</h4>
        <h3 class="numero"></h3>
        <a href="https://www.google.com/maps/dir//Mam%C3%A1+Lupita+en+tepic+nayarit/@22.0179146,-105.8005557,9.25z/data=!4m8!4m7!1m0!1m5!1m1!1s0x84273795dd92a767:0xa95cecc5465fe03!2m2!1d-104.9029518!2d21.5000001?entry=ttu" target="_blank">Ver ubicacion</a>
    </div>
</div>
<br><br>
<div class="container">
    <div class="card">
        <img src="img/restaurantes/Tepic/cielitorico.jpg" alt="">
        <h2 class="hotel-name">Cielito Rico</h2>
        <h3>Restaurante mexicano</h3>
        <h3 style="color: rgb(0, 58, 247);">Direccion: Revolución Soc. 197, El Tecolote, Tepic, Nay.</h3>
        <h4 style="color: rgb(0, 18, 78);">De lunes a domingo de 8:00 am a 5:00 pm</h4>
        <h3 class="numero">Telefono: 311 181 5584</h3>
        <a href="https://www.google.com/maps/dir//Cielito+Rico+en+tepic+nayarit/@21.9958458,-105.7269441,9z/data=!4m8!4m7!1m0!1m5!1m1!1s0x84273718498a923b:0xa448a56134ebbef0!2m2!1d-104.9094688!2d21.5020456?entry=ttu" target="_blank">Ver ubicacion</a>
    </div>
    <div class="card">
        <img src="img/restaurantes/Tepic/brule.jpeg" alt="">
        <h2 class="hotel-name">Petit BRULE</h2>
        <h3>Restaurante</h3>
        <h3 style="color: rgb(0, 58, 247);">Direccion: Calle, San Juan #76, Centro, Tepic, Nay.</h3>
        <h4 style="color: rgb(0, 18, 78);">De lunes a domingo de 8:30 am a 9:30 pm</h4>
        <h3 class="numero">Telefono: 311 161 5899</h3>
        <a href="https://www.google.com/maps/dir//Petit+BRULE+en+tepic+nayarit/@22.0005824,-105.7233231,9z/data=!4m8!4m7!1m0!1m5!1m1!1s0x842736f1125903db:0xb494fb3291aeaabe!2m2!1d-104.9019046!2d21.5069923?entry=ttu" target="_blank">Ver ubicacion</a>
    </div>
    <div class="card">
        <img src="img/restaurantes/Tepic/magdalena.jpg" alt="">
        <h2 class="hotel-name">La Madalena LM</h2>
        <h3>Restaurante</h3>
        <h3 style="color: rgb(0, 58, 247);">Direccion: Av Jacarandas 63, San Juan, Tepic, Nay.</h3>
        <h4 style="color: rgb(0, 18, 78);">De lunes a domingo de 8:00 am a 12:00 pm y de 8:00pm a 12:00 pm</h4>
        <h3 class="numero">Telefono: 311 133 3232</h3>
        <a href="https://www.google.com/maps/dir//La+Madalena+LM+en+tepic+nayarit/@22.0028326,-105.7252793,9z/data=!4m8!4m7!1m0!1m5!1m1!1s0x842736f7979d14cf:0xc1bd4ab2d4ff4124!2m2!1d-104.9050537!2d21.5110862?entry=ttu" target="_blank">Ver ubicacion</a>
    </div>
</div>
<br><br>
<div class="container">
    <div class="card">
        <img src="img/restaurantes/Tepic/wlarguende.jpg" alt="">
        <h2 class="hotel-name">EL ARGUENDE</h2>
        <h3>Restaurante</h3>
        <h3 style="color: rgb(0, 58, 247);">Direccion: Av. Lagos del Country 35, Lagos del Country, Tepic, Nay.</h3>
        <h4 style="color: rgb(0, 18, 78);">De lunes a domingo de 7:30 am a 4:30 pm</h4>
        <h3 class="numero">Telefono: 311 162 5710</h3>
        <a href="https://www.google.com/maps/dir//EL+ARGUENDE+en+tepic+nayarit/@21.978626,-105.700176,9z/data=!4m8!4m7!1m0!1m5!1m1!1s0x8427374c1d654c99:0xc80f8984467e8c34!2m2!1d-104.8621329!2d21.4764333?entry=ttu" target="_blank">Ver ubicacion</a>
    </div>
    <div class="card">
        <img src="img/restaurantes/Tepic/tentenpe.jpg" alt="">
        <h2 class="hotel-name">El Tentempié</h2>
        <h3>Restaurante</h3>
        <h3 style="color: rgb(0, 58, 247);">Direccion: A. Juan Escutia 200 esq. con, Sebastián Lerdo de Tejada Pte., Centro, Tepic, Nay.</h3>
        <h4 style="color: rgb(0, 18, 78);">De lunes a domingo de 8:30 am a 11:00 pm</h4>
        <h3 class="numero">Telefono: 311 281 2760</h3>
        <a href="https://www.google.com/maps/dir//El+Tentempi%C3%A9+en+tepic+nayarit/@22.002694,-105.7221011,9z/data=!4m8!4m7!1m0!1m5!1m1!1s0x842736558738ccd3:0x41e456b17f8d6bab!2m2!1d-104.8985591!2d21.5139424?entry=ttu" target="_blank">Ver ubicacion</a>
    </div>
    <div class="card">
        <img src="img/restaurantes/Tepic/puerto nuevo.jpg" alt="">
        <h2 class="hotel-name">Restaurant Puerto Nuevo... A veces Armando</h2>
        <h3>Restaurante</h3>
        <h3 style="color: rgb(0, 58, 247);">Direccion: Calle Revolución Soc 218, Menchaca, Tepic, Nay.</h3>
        <h4 style="color: rgb(0, 18, 78);">De lunes a domingo de 10:00 am a 6:00 pm</h4>
        <h3 class="numero">Telefono:  311 133 2050</h3>
        <a href="https://www.google.com/maps/dir//Restaurant+Puerto+Nuevo...+A+veces+Armando+en+tepic+nayarit/@21.9958972,-105.7167484,9z/data=!4m8!4m7!1m0!1m5!1m1!1s0x8427371e79713ae1:0x2bc1f5b249f6fc8!2m2!1d-104.8898533!2d21.4971602?entry=ttu" target="_blank">Ver ubicacion</a>
    </div>
</div>
<br><br>
<div class="container">
    <div class="card">
        <img src="img/restaurantes/Tepic/tulipanes.jpg" alt="">
        <h2 class="hotel-name">Restaurante Jardín Los Tulipanes</h2>
        <h3>Restaurante de brunch</h3>
        <h3 style="color: rgb(0, 58, 247);">Direccion: República de Chile #44, Menchaca, Tepic, Nay.</h3>
        <h4 style="color: rgb(0, 18, 78);">De lunes a domingo de 7:00 am a 5:00 pm</h4>
        <h3 class="numero">Telefono: 311 260 0489</h3>
        <a href="https://www.google.com/maps/dir//Restaurante+Jard%C3%ADn+Los+Tulipanes%0D%0A4estrells%0D%0A+en+tepic+nayarit/@21.996558,-105.7164068,9z/data=!4m8!4m7!1m0!1m5!1m1!1s0x8427371c3eeb2f85:0xca132b07fbf5250f!2m2!1d-104.8881247!2d21.498574?entry=ttu" target="_blank">Ver ubicacion</a>
    </div>
    <div class="card">
        <img src="img/restaurantes/Tepic/pacostillas.jpg" alt="">
        <h2 class="hotel-name">Paco'stillas</h2>
        <h3>Bar</h3>
        <h3 style="color: rgb(0, 58, 247);">Direccion: C. P.º de Viena, Cd del Valle, Tepic, Nay.</h3>
        <h4 style="color: rgb(0, 18, 78);">De lunes a domingo de 5:00 pm a 12:00 am</h4>
        <h3 class="numero">Telefono: 311 133 6443</h3>
        <a href="https://www.google.com/maps/dir//Pacostillas+en+tepic+nayarit/@21.9926683,-105.7134167,9z/data=!4m8!4m7!1m0!1m5!1m1!1s0x842737229253b171:0x47d0b2b44a1a71b7!2m2!1d-104.8825776!2d21.4907153?entry=ttu" target="_blank">Ver ubicacion</a>
    </div>
    <div class="card">
        <img src="img/restaurantes/Tepic/girasol.jpg" alt="">
        <h2 class="hotel-name">Restaurante Vegetariano Girasol</h2>
        <h3>Buffet libre</h3>
        <h3 style="color: rgb(0, 58, 247);">Direccion: Av Jacarandas 172, San Juan, Tepic, Nay.</h3>
        <h4 style="color: rgb(0, 18, 78);">De lunes a domingo de 8:30 pm a 5:00 pm</h4>
        <h3 class="numero">Telefono: 311 214 3959</h3>
        <a href="https://www.google.com/maps/dir//Restaurante+Vegetariano+Girasol+en+tepic+nayarit/@22.0008623,-105.7249637,9z/data=!4m8!4m7!1m0!1m5!1m1!1s0x842736f173abc71d:0xdf64c7e69d7acc55!2m2!1d-104.9069765!2d21.5071517?entry=ttu" target="_blank">Ver ubicacion</a>
    </div>
</div>
<br><br>
<div class="container">
    <div class="card">
        <img src="img/restaurantes/Tepic/juan terraza.png" alt="">
        <h2 class="hotel-name">San Juan Terraza</h2>
        <h3>Restaurante mexicano</h3>
        <h3 style="color: rgb(0, 58, 247);">Direccion: Av Jacarandas 205, San Juan, Tepic, Nay.</h3>
        <h4 style="color: rgb(0, 18, 78);">De lunes a domingo de 7:00 am a 3:00 pm</h4>
        <h3 class="numero">Telefono: 311 218 6408</h3>
        <a href="https://www.google.com/maps/dir//San+Juan+Terraza+en+tepic+nayarit/@21.9970005,-105.7265022,9z/data=!4m8!4m7!1m0!1m5!1m1!1s0x84273751ad9b4761:0xbd44b37e6731e089!2m2!1d-104.9073623!2d21.506071?entry=ttu" target="_blank">Ver ubicacion</a>
    </div>
    <div class="card">
        <img src="img/restaurantes/Tepic/chilaquil.jpg" alt="">
        <h2 class="hotel-name">Chilaquil & Grill</h2>
        <h3>Restaurante</h3>
        <h3 style="color: rgb(0, 58, 247);">Direccion: Av. Ignacio Allende No. 202, Centro, Tepic, Nay.</h3>
        <h4 style="color: rgb(0, 18, 78);">De lunes a domingo de 7:30 am a 1:00 pm</h4>
        <h3 class="numero">Telefono: 311 217 6683</h3>
        <a href="https://www.google.com/maps/dir//Av.+Ignacio+Allende+No.+202,+Centro,+63000+Tepic,+Nay./@21.5100575,-104.966497,12z/data=!4m8!4m7!1m0!1m5!1m1!1s0x842736fee98750cb:0xaa62dbb4e2872d5b!2m2!1d-104.8964516!2d21.510083?entry=ttu" target="_blank">Ver ubicacion</a>
    </div>
    <div class="card">
        <img src="img/restaurantes/Tepic/barandales.jpg" alt="">
        <h2 class="hotel-name">Los Barandales</h2>
        <h3>Restaurante</h3>
        <h3 style="color: rgb(0, 58, 247);">Direccion: De Los Insurgentes Pte. 100, Centro, Tepic, Nay.</h3>
        <h4 style="color: rgb(0, 18, 78);">De lunes a domingo de 7:00 am a 10:30 pm</h4>
        <h3 class="numero">Telefono: 311 213 1800</h3>
        <a href="https://www.google.com/maps/dir//Los+Barandales+en+tepic+nayarit/@22.0005759,-105.7230594,9z/data=!4m8!4m7!1m0!1m5!1m1!1s0x842736fbcbf8fb97:0x6afbe38f02233837!2m2!1d-104.9004381!2d21.5066024?entry=ttu" target="_blank">Ver ubicacion</a>
    </div>
</div>
<br><br>
<div class="container">
    <div class="card">
        <img src="img/restaurantes/Tepic/rub bbq.jpg" alt="">
        <h2 class="hotel-name">RUB BBQ TEPIC</h2>
        <h3>Restaurante</h3>
        <h3 style="color: rgb(0, 58, 247);">Direccion: Av. Universidad 120, Cd del Valle, Tepic, Nay.</h3>
        <h4 style="color: rgb(0, 18, 78);">De lunes a domingo de 12:00 pm a 11:00 pm</h4>
        <h3 class="numero">Telefono: 311 103 6742</h3>
        <a href="https://www.google.com/maps/dir//RUB+BBQ+TEPIC+en+tepic+nayarit/@21.9881351,-105.7134167,9z/data=!4m8!4m7!1m0!1m5!1m1!1s0x842737acdad7582b:0x5231e9ccf26cdae5!2m2!1d-104.8861157!2d21.4906157?entry=ttu" target="_blank">Ver ubicacion</a>
    </div>
    <div class="card">
        <img src="img/restaurantes/Tepic/casa del valle.jpg" alt="">
        <h2 class="hotel-name">La Casa Del Valle</h2>
        <h3>Restaurante</h3>
        <h3 style="color: rgb(0, 58, 247);">Direccion: Atenas 31, Cd del Valle, Tepic, Nay.</h3>
        <h4 style="color: rgb(0, 18, 78);">De lunes a domingo de 7:30 am a 10:00 pm</h4>
        <h3 class="numero">Telefono: 311 378 0399</h3>
        <a href="https://www.google.com/maps/dir//La+Casa+Del+Valle+en+tepic+nayarit/@21.9881351,-105.7164068,9z/data=!4m8!4m7!1m0!1m5!1m1!1s0x842737ebe9ede30f:0x651253ced1032b8b!2m2!1d-104.8883578!2d21.4891735?entry=ttu" target="_blank">Ver ubicacion</a>
    </div>
    <div class="card">
        <img src="img/restaurantes/Tepic/campo real.jpg" alt="">
        <h2 class="hotel-name">Campo Real</h2>
        <h3>Marisquería</h3>
        <h3 style="color: rgb(0, 58, 247);">Direccion: Av Insurgentes 1171-B Oriente, Los Llanitos, Tepic, Nay.</h3>
        <h4 style="color: rgb(0, 18, 78);">De lunes a domingo de 8:00 am a 8:00 pm. Miercoles cerrado</h4>
        <h3 class="numero">Telefono: 311 141 4440</h3>
        <a href="https://www.google.com/maps/dir//Campo+Real+en+tepic+nayarit/@21.9937127,-105.7133225,9z/data=!4m8!4m7!1m0!1m5!1m1!1s0x8427371967afa1d5:0xfb3c85eb7e32318c!2m2!1d-104.8818709!2d21.494586?entry=ttu" target="_blank">Ver ubicacion</a>
    </div>
</div>
<br><br>
<div class="container">
    <div class="card">
        <img src="img/restaurantes/Tepic/arentos.jpg" alt="">
        <h2 class="hotel-name">Arento’s Restaurant Bar</h2>
        <h3>Restaurante</h3>
        <h3 style="color: rgb(0, 58, 247);">Direccion: Av. Guadalupe Victoria 688, entre Av. Flores Magon y P. Guerrero, Santa Teresita, Tepic, Nay.</h3>
        <h4 style="color: rgb(0, 18, 78);">De lunes a domingo de 1:00 pm a 7:00 pm</h4>
        <h3 class="numero">Telefono: 311 218 5836</h3>
        <a href="https://www.google.com/maps/dir//Arento%E2%80%99s+Restaurant+Bar+en+tepic+nayarit/@22.004551,-105.7254675,9z/data=!4m8!4m7!1m0!1m5!1m1!1s0x842737bd56d8945b:0xc2b1a4dda379d9ab!2m2!1d-104.9052543!2d21.5209541?entry=ttu" target="_blank">Ver ubicacion</a>
    </div>
    <div class="card">
        <img src="img/restaurantes/Tepic/mar.jpg" alt="">
        <h2 class="hotel-name">LA33 ANTOJERÍA DE MAR</h2>
        <h3>Marisquería</h3>
        <h3 style="color: rgb(0, 58, 247);">Direccion: Ave Preparatoria 45 A Fraccionamiento, Cd del Valle, Tepic, Nay.</h3>
        <h4 style="color: rgb(0, 18, 78);">De lunes a domingo de 12:00 pm a 10:00 pm</h4>
        <h3 class="numero">Telefono: 311 391 2347</h3>
        <a href="https://www.google.com/maps/dir//LA33+ANTOJER%C3%8DA+DE+MAR+en+tepic+nayarit/@21.9957273,-105.7163561,9z/data=!4m8!4m7!1m0!1m5!1m1!1s0x8427371ea8c4f347:0x464983934009b81e!2m2!1d-104.8870387!2d21.4971681?entry=ttu" target="_blank">Ver ubicacion</a>
    </div>
    <div class="card">
        <img src="img/restaurantes/Tepic/olivos.jpg" alt="">
        <h2 class="hotel-name">Olivos Fusión Restaurant</h2>
        <h3>Restaurante de desayunos</h3>
        <h3 style="color: rgb(0, 58, 247);">Direccion: San Luis Sur 76, Centro, Tepic, Nay.</h3>
        <h4 style="color: rgb(0, 18, 78);">De lunes a domingo de 12:00 pm a 10:00 pm</h4>
        <h3 class="numero">Telefono: </h3>
        <a href="https://www.google.com/maps/dir//Olivos+Fusi%C3%B3n+Restaurant+en+tepic+nayarit/@21.9993746,-105.7184701,9z/data=!4m8!4m7!1m0!1m5!1m1!1s0x8427370276ca25c1:0xe257be3e94e03366!2m2!1d-104.8918696!2d21.506789?entry=ttu" target="_blank">Ver ubicacion</a>
    </div>
</div>
<br><br>
<div class="container">
    <div class="card">
        <img src="img/restaurantes/Tepic/arrecife.jpg" alt="">
        <h2 class="hotel-name">EL ARRECIFE TEPIC</h2>
        <h3>Restaurante</h3>
        <h3 style="color: rgb(0, 58, 247);">Direccion: Calle prepa 13, Universidad #75, entre medicina humana y, Spauan, Tepic, Nay.</h3>
        <h4 style="color: rgb(0, 18, 78);">De lunes a domingo de 12:00 pm a 6:00 pm</h4>
        <h3 class="numero">Telefono: </h3>
        <a href="https://www.google.com/maps/dir//EL+ARRECIFE+TEPIC+en+tepic+nayarit/@22.0040229,-105.7284837,9z/data=!4m8!4m7!1m0!1m5!1m1!1s0x8427365fdf802e1b:0x80a8c95df100e20e!2m2!1d-104.9132204!2d21.5136784?entry=ttu" target="_blank">Ver ubicacion</a>
    </div>
    <div class="card">
        <img src="img/restaurantes/Tepic/insurgente.jpg" alt="">
        <h2 class="hotel-name">Restaurante INsurgente</h2>
        <h3>Restaurante</h3>
        <h3 style="color: rgb(0, 58, 247);">Direccion: De Los Insurgentes Pte. 278 Altos, Estadios, Tepic, Nay.</h3>
        <h4 style="color: rgb(0, 18, 78);">De lunes a domingo de 2:00 pm a 12:00 am</h4>
        <h3 class="numero">Telefono: 311 141 4509</h3>
        <a href="https://www.google.com/maps/dir//Restaurante+INsurgente+en+tepic+nayarit/@22.0018015,-105.7238393,9z/data=!4m8!4m7!1m0!1m5!1m1!1s0x8427370ca0d59cef:0x236b5244832531d4!2m2!1d-104.9020249!2d21.5090378?entry=ttu" target="_blank">Ver ubicacion</a>
    </div>
</div>
</span>
<br>
<br>
<!--boton para mostrar mas-->
<center><button class="read-more-btn">Ver Mas/Menos</button></center>
<!--separacion entre tarjetas-->
<br>
<br>
<br>
   <!----> 
<!--Tuxpan-->
<!--tarjetas restaurantes(las 3 que son visibles)-->
<div data-aos="fade-up" data-aos-duration="1500">
    <h1 class="title">Restaurantes de Tuxpan</h1>
    </div>
    <div data-aos="fade-up" data-aos-duration="1500">
    <div class="container">
        <div class="card">
            <img src="img/restaurantes/Tuxpan/la vitamina.jpg" alt="">
            <h2 class="hotel-name">La Vitamina</h2>
            <h3>Marisquería</h3>
            <h3 style="color: rgb(0, 58, 247);">Direccion: Bordo de Protección 115, Centro, Tuxpan, Nay.</h3>
            <h4 style="color: rgb(0, 18, 78);">De lunes a domingo de 12:00 pm a 9:00 pm</h4>
            <h3 class="numero">Telefono: 319 232 2966</h3>
            <a href="https://www.google.com/maps/dir//Bordo+de+Protecci%C3%B3n+115,+Centro,+63200+Tuxpan,+Nay./@21.9461284,-105.3690186,12z/data=!4m8!4m7!1m0!1m5!1m1!1s0x869e1c3237b381ad:0xb6ae98d08db51814!2m2!1d-105.2989757!2d21.9461518?entry=ttu" target="_blank">Ver ubicacion</a>
        </div>
        <div class="card">
            <img src="img/restaurantes/Tuxpan/lacapital.jpeg" alt="">
            <h2 class="hotel-name">La capital tuxpan</h2>
            <h3>Restaurante</h3>
            <h3 style="color: rgb(0, 58, 247);">Direccion: Querétaro Nte. 10-PA, Centro, Tuxpan, Nay.</h3>
            <h4 style="color: rgb(0, 18, 78);">De jueves a domingo de 6:30 pm a 12:00 am</h4>
            <h3 class="numero">Telefono: 323 143 3022</h3>
            <a href="https://www.google.com/maps/dir//Quer%C3%A9taro+Nte.+10-PA,+Centro,+63233+Tuxpan,+Nay./@21.9433514,-105.3658288,12z/data=!4m8!4m7!1m0!1m5!1m1!1s0x869e1de84da6394b:0x2987611897680d4e!2m2!1d-105.2957884!2d21.9433662?entry=ttu" target="_blank">Ver ubicacion</a>
        </div>
        <div class="card">
            <img src="img/restaurantes/Tuxpan/galaviz.jpg" alt="">
            <h2 class="hotel-name">Hamburguesas Galaviz</h2>
            <h3>Hamburguesería</h3>
            <h3 style="color: rgb(0, 58, 247);">Direccion: Centenario 111, Beis, Tuxpan, Nay.</h3>
            <h4 style="color: rgb(0, 18, 78);">De lunes a domingo de 5:00 pm a 11:00 pm. Martes y miercoles</h4>
            <h3 class="numero">Telefono: 319 232 0286</h3>
            <a href="https://www.google.com/maps/dir//Centenario+111,+Beis,+63233+Tuxpan,+Nay./@21.9419122,-105.3620679,12z/data=!4m8!4m7!1m0!1m5!1m1!1s0x869e1dcad1703a8b:0xd70087e4657388d9!2m2!1d-105.2920658!2d21.9419337?entry=ttu" target="_blank">Ver ubicacion</a>
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
        <img src="img/restaurantes/Tuxpan/pizzaburger.jpg" alt="">
        <h2 class="hotel-name">PizzaBurguer</h2>
        <h3>Hamburguesería</h3>
        <h3 style="color: rgb(0, 58, 247);">Direccion: Progreso Sur 927, Antonio R. Laureles, Tuxpan, Nay.</h3>
        <h4 style="color: rgb(0, 18, 78);"></h4>
        <h3 class="numero"></h3>
        <a href="https://www.google.com/maps?opi=89978449&lqi=CjNQaXp6YUJ1cmd1ZXIgZW4gdHV4cGFuIG5hdGFyaXQNCiBlbiB0ZWN1YWxhIG5heWFyaXRIxvzo18K5gIAIWj8QABABEAIQAxgAGAIiMXBpenphYnVyZ3VlciBlbiB0dXhwYW4gbmF0YXJpdCBlbiB0ZWN1YWxhIG5heWFyaXSSARRoYW1idXJnZXJfcmVzdGF1cmFudKoBfRABKiIiHnBpenphYnVyZ3VlciBlbiB0dXhwYW4gbmF0YXJpdCgOMh4QASIaEzhSaiPCD-ozenDysS0m7MvMLT6td8A6guYyNRACIjFwaXp6YWJ1cmd1ZXIgZW4gdHV4cGFuIG5hdGFyaXQgZW4gdGVjdWFsYSBuYXlhcml0&phdesc=aZd5W2kSm2k&vet=12ahUKEwjI5KuDwZyAAxUGRzABHYUmBvMQ8UF6BAgFEGs..i&lei=DMC4ZMiuD4aOwbkPhc2YmA8&cs=1&um=1&ie=UTF-8&fb=1&gl=mx&sa=X&geocode=KaGL8i6hHZ6GMQ0q2m-jz2e5&daddr=Progreso+Sur+927,+Antonio+R.+Laureles,+63202+Tuxpan,+Nay." target="_blank">Ver ubicacion</a>
    </div>
    <div class="card">
        <img src="img/restaurantes/Tuxpan/dirtypizza.jpg" alt="">
        <h2 class="hotel-name">Dirty's Pizza</h2>
        <h3>Pizzería</h3>
        <h3 style="color: rgb(0, 58, 247);">Direccion: Francisco I. Madero Sur 134, Centro, Tuxpan, Nay.</h3>
        <h4 style="color: rgb(0, 18, 78);"></h4>
        <h3 class="numero"></h3>
        <a href="https://www.google.com/maps/dir//Francisco+I.+Madero+Sur+134,+Centro,+63200+Tuxpan,+Nay./@21.9428908,-105.3695104,12z/data=!4m8!4m7!1m0!1m5!1m1!1s0x869e1db486483c67:0x721e0b0a9d86599e!2m2!1d-105.2994322!2d21.9428997?entry=ttu" target="_blank">Ver ubicacion</a>
    </div>
    <div class="card">
        <img src="img/restaurantes/Tuxpan/nagano.jpg" alt="">
        <h2 class="hotel-name">Nagano Sushi Roll Tuxpan</h2>
        <h3>Restaurante de sushi</h3>
        <h3 style="color: rgb(0, 58, 247);">Direccion: Hidalgo Ote. 453, Beis, Tuxpan, Nay.</h3>
        <h4 style="color: rgb(0, 18, 78);">De martes a domingo de 1:00 pm a 9:00 pm</h4>
        <h3 class="numero">Telefono: 323 134 8929</h3>
        <a href="https://www.google.com/maps/dir//Hidalgo+Ote.+453,+Beis,+63233+Tuxpan,+Nay./@21.9431078,-105.3642435,12z/data=!4m8!4m7!1m0!1m5!1m1!1s0x869e1c34b8dc46ed:0x505903ecac805fb9!2m2!1d-105.2941999!2d21.9431357?entry=ttu" target="_blank">Ver ubicacion</a>
    </div>
</div>
<br><br>
<div class="container">
    <div class="card">
        <img src="img/restaurantes/Tuxpan/creps.jpg" alt="">
        <h2 class="hotel-name">CREPS Flavor Factory</h2>
        <h3>Crepería</h3>
        <h3 style="color: rgb(0, 58, 247);">Direccion: Independencia Ote. 803, Centro, Tuxpan, Nay.</h3>
        <h4 style="color: rgb(0, 18, 78);">De viernes a domingo de 5:30 pm a 10:00 pm</h4>
        <h3 class="numero">Telefono: 311 159 8206</h3>
        <a href="https://www.google.com/maps/dir//Independencia+Ote.+803,+Centro,+63233+Tuxpan,+Nay./@21.9432965,-105.3656898,12z/data=!4m8!4m7!1m0!1m5!1m1!1s0x869e1d26e6afbc57:0x41ea289340c37806!2m2!1d-105.2956697!2d21.9432525?entry=ttu" target="_blank">Ver ubicacion</a>
    </div>
    <div class="card">
        <img src="img/restaurantes/Tuxpan/cocoroloco.jpg" alt="">
        <h2 class="hotel-name">Cocoroloco</h2>
        <h3>Restaurante</h3>
        <h3 style="color: rgb(0, 58, 247);">Direccion: Hidalgo Ote. 260, Colosio, Tuxpan, Nay.</h3>
        <h4 style="color: rgb(0, 18, 78);">De miercoles a domingo de 5:00 pm a 12:00 am</h4>
        <h3 class="numero">Telefono: 319 232 7286</h3>
        <a href="https://www.google.com/maps/dir//Hidalgo+Ote.+260,+Colosio,+63200+Tuxpan,+Nay./@21.9446497,-105.3663742,12z/data=!4m8!4m7!1m0!1m5!1m1!1s0x869e1db66a49d4bf:0xfc28939bd66333d9!2m2!1d-105.2963352!2d21.9446595?entry=ttu" target="_blank">Ver ubicacion</a>
    </div>
    <div class="card">
        <img src="img/restaurantes/Tuxpan/pizzasg.jpg" alt="">
        <h2 class="hotel-name">PIZZAS 'G'</h2>
        <h3>Pizzería</h3>
        <h3 style="color: rgb(0, 58, 247);">Direccion: Guadalajara Entre e hidalgo y, Guerrero Ote., Tecuala, Nay.</h3>
        <h4 style="color: rgb(0, 18, 78);">De lunes a domingo de 9:00 am a 10:00 pm</h4>
        <h3 class="numero">Telefono: 389 109 9433</h3>
        <a href="https://www.google.com/maps/dir//Guadalajara+Entre+e+hidalgo+y,+Guerrero+Ote.,+63440+Tecuala,+Nay./@22.3966324,-105.5287678,12z/data=!4m8!4m7!1m0!1m5!1m1!1s0x869e433f0d5092dd:0xcee32fbe26ef3884!2m2!1d-105.4587274!2d22.3966475?entry=ttu" target="_blank">Ver ubicacion</a>
    </div>
</div>
</span>
<br>
<br>
<!--boton para mostrar mas-->
<center><button class="read-more-btn">Ver Mas/Menos</button></center>
<!--separacion entre tarjetas-->
<br>
<br>
<br>
   <!----> 
    <!--tarjetas restaurantes(las 3 que son visibles)-->
    <div data-aos="fade-up" data-aos-duration="1500">
    <h1 class="title">Restaurantes de Xalisco</h1>
    </div>
    <div data-aos="fade-up" data-aos-duration="1500">
    <div class="container">
        <div class="card">
            <img src="img/restaurantes/Xalisco/cafe-ocampo.jpg" alt="">
            <h2 class="hotel-name">Cafe Ocampo</h2>
            <h3>Restaurante</h3>
            <h3 style="color: rgb(0, 58, 247);">Direccion: Av. Hidalgo Sur #60-A-sur, Centro.</h3>
            <h4 style="color: rgb(0, 18, 78);">De lunes a sábado de 8:00 am a 4:00 pm</h4>
            <h3 class="numero">Telefono: 311 211 3658</h3>
            <a href="#" target="_blank">Ver ubicacion</a>
        </div>
        <div class="card">
            <img src="img/restaurantes/Xalisco/hashi-maki.jpg" alt="">
            <h2 class="hotel-name">Hashi & Maki Xalisco</h2>
            <h3>Restaurante de sushi</h3>
            <h3 style="color: rgb(0, 58, 247);">Direccion: Mercurio #76 esquina con, Blvd. Tepic-Xalisco.</h3>
            <h4 style="color: rgb(0, 18, 78);">De lunes a domingo de 12:40 pm a las 8:00 pm</h4>
            <h3 class="numero">Telefono: 311 372 8709</h3>
            <a href="#" target="_blank">Ver ubicacion</a>
        </div>
        <div class="card">
            <img src="img/restaurantes/Xalisco/natsumi.jpg" alt="">
            <h2 class="hotel-name">Sushi Natsumi Xalisco</h2>
            <h3>Restaurantes japones</h3>
            <h3 style="color: rgb(0, 58, 247);">Direccion: Plaza Blvd. 47 L, Blvd. Tepic-Xalisco, Huertas de Matatipac.</h3>
            <h4 style="color: rgb(0, 18, 78);">De lunes a domingo de 12:00 pm a 10:00 pm</h4>
            <h3 class="numero">Telefono: 311 169 1083</h3>
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
        <img src="img/restaurantes/Xalisco/pastorcito.jpg" alt="">
        <h2 class="hotel-name">tacos el pastorcito</h2>
        <h3>Taqueria</h3>
        <h3 style="color: rgb(0, 58, 247);">Direccion: Xalisco-Tepic 32, Huertas de Matatipac, Xalisco, Nay.</h3>
        <h4 style="color: rgb(0, 18, 78);"></h4>
        <h3 class="numero"></h3>
        <a href="https://www.google.com/maps/dir//Xalisco-Tepic+32,+Huertas+de+Matatipac,+63783+Xalisco,+Nay./@21.4583184,-104.9637734,12z/data=!4m8!4m7!1m0!1m5!1m1!1s0x8427312847dc24eb:0x9dec523714a2c7f2!2m2!1d-104.8937288!2d21.4583306?entry=ttu" target="_blank">Ver ubicacion</a>
    </div>
    <div class="card">
        <img src="img/restaurantes/Xalisco/chileverde.jpg" alt="">
        <h2 class="hotel-name">Restaurante Chile Verde</h2>
        <h3>Restaurante de brunch</h3>
        <h3 style="color: rgb(0, 58, 247);">Direccion: Blvd. Tepic-Xalisco, Xalisco, Nay.</h3>
        <h4 style="color: rgb(0, 18, 78);">De lunes a domingo de 7:30 pm a 9:00 pm</h4>
        <h3 class="numero">Telefono: 311 740 8941</h3>
        <a href="https://www.google.com/maps/dir//Blvd.+Tepic-Xalisco,+63782+Xalisco,+Nay./@21.4674792,-104.9583915,12z/data=!4m8!4m7!1m0!1m5!1m1!1s0x842731438ac0d5d1:0xbcf790a7c05c7c81!2m2!1d-104.8883511!2d21.4674938?entry=ttu" target="_blank">Ver ubicacion</a>
    </div>
    <div class="card">
        <img src="img/restaurantes/Xalisco/campestre.jpg" alt="">
        <h2 class="hotel-name">Restaurant Campestre "Doña Carmen"
            </h2>
        <h3>Restaurantes de cocina toscana</h3>
        <h3 style="color: rgb(0, 58, 247);">Direccion: Xalisco, Nay.</h3>
        <h4 style="color: rgb(0, 18, 78);">De lunes a domingo de 8:00 am a 1:00 pm</h4>
        <h3 class="numero">Telefono: 311 265 1696</h3>
        <a href="https://www.google.com/maps/dir//63786+Xalisco,+Nay./@21.434376,-104.9685677,12z/data=!4m8!4m7!1m0!1m5!1m1!1s0x842731d5dc6f3aaf:0xa23c5ac443003e5!2m2!1d-104.8985213!2d21.4344274?entry=ttu" target="_blank">Ver ubicacion</a>
    </div>
</div>
</span>
<br>
<br>
<!--boton para mostrar mas-->
<center><button class="read-more-btn">Ver Mas/Menos</button></center>

</section>
<!--script para el boton-->
<script src="js/ocultar.js"></script>
<!--tarjetas restaurantes-->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
    AOS.init();
</script>
</body>
</html>