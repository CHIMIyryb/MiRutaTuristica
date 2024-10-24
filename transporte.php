<?php

session_start();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
        integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
        <script type="text/javascript" src="js/transporte.js"></script>
    <script type="text/javascript" src="js/jquery-3.7.0.js"></script>
    <link rel="stylesheet" href="css/trasnporte.css">
    <link rel="stylesheet" href="css/boletos.css">
    <title>Document</title>
</head>
<body>

    <style>
        #s1{
            background: linear-gradient(to top, transparent, rgba(28, 77, 239, 0.5)), url(img/c.jpg);
            background-size: cover;
            background-attachment: fixed;
            background-position: center center;
        }
    </style>

<?php
    require_once "menu.php";
?>
 
    <section id="s1">

    <div class="reserva">
        <br>
        <center>
            <h2>TRANSPORTES</h2>
        </center>
        <br>
        <center>
            <form action="php/transporte_be.php" method="post" id="f1" name="f1">


                Origen:
                <select name="origen" id="municipio" required onchange="cambia_departamento()" required style="width: 170px;">
                    <option value="0"></option>
                    <option value="Rincon de Guayabitos">Rincon de Guayabitos</option>
                    <option value="Tepic">Tepic</option>
                    <option value="Mezcales">Mezcales</option>
                    <option value="Tuxpan">Tuxpan</option>
                    <option value="Bucerias">Bucerias</option>
                    <option value="Acaponeta">Acaponeta</option>
                    <option value="Santiago Ixcuintla">Santiago Ixcuintla</option>
                    <option value="Tecuala">Tecuala</option>
                    <option value="San Blas">San Blas</option>
                </select>
<br><br>
                Destino:
                <select name="destino" id="hotel" required style="width: 170px;">
                    <option value="0"></option>
                </select>
                <br><br>
                Fecha:
                <input type="date" id="fecha" name="fecha" required="true" style="width: 160px;">
                <br><br>
                Hora:
                <input type="time" id="hora" name="hora" required="true">

                <br>
                <br>
                <br>
                <a href="boletos.php">
                <input class="button" type="submit" value="RESERVAR">
            </a>

              </div>

<div class="boletos">
  <center>
    <h1>Selecciona el Asiento del Autobús</h1>
</center>
                <div class="grid-container">
        <!-- Repite el siguiente bloque 40 veces -->
        <div class="grid-item">
          <input type="checkbox" id="checkbox1" name="input_check[]" value="1" >
          <label for="checkbox1">1</label>
        </div>
        <!-- Fin del bloque repetido -->
        <div class="grid-item">
            <input type="checkbox" id="checkbox2" name="input_check[]" value="2">
            <label for="checkbox2">2</label>
          </div>
      
          <div class="grid-item">
            <input type="checkbox" id="checkbox3" name="input_check[]" value="3">
            <label for="checkbox3">3</label>
          </div>
      
          <div class="grid-item">
            <input type="checkbox" id="checkbox4" name="input_check[]" value="4">
            <label for="checkbox4">4</label>
          </div>
      
          <div class="grid-item">
            <input type="checkbox" id="checkbox5" name="input_check[]" value="5">
            <label for="checkbox5">5</label>
          </div>
      
          <div class="grid-item">
            <input type="checkbox" id="checkbox6" name="input_check[]" value="6">
            <label for="checkbox6">6</label>
          </div>
      
          <div class="grid-item">
            <input type="checkbox" id="checkbox7" name="input_check[]" value="7">
            <label for="checkbox7">7</label>
          </div>
      
          <div class="grid-item">
            <input type="checkbox" id="checkbox8" name="input_check[]" value="8">
            <label for="checkbox8">8</label>
          </div>
      
          <div class="grid-item"> 
            <input type="checkbox" id="checkbox9" name="input_check[]" value="9">
            <label for="checkbox9">9</label>
          </div>
      
          <div class="grid-item">
            <input type="checkbox" id="checkbox10" name="input_check[]" value="10">
            <label for="checkbox10">10</label>
          </div>
      
          <div class="grid-item">
            <input type="checkbox" id="checkbox11" name="input_check[]" value="11">
            <label for="checkbox11">11</label>
          </div>
      
          <div class="grid-item">
            <input type="checkbox" id="checkbox12" name="input_check[]" value="12">
            <label for="checkbox12">12</label>
          </div>
      
          <div class="grid-item">
            <input type="checkbox" id="checkbox13" name="input_check[]" value="13">
            <label for="checkbox13">13</label>
          </div>
      
          <div class="grid-item">
            <input type="checkbox" id="checkbox14" name="input_check[]" value="14">
            <label for="checkbox14">14</label>
          </div>
      
          <div class="grid-item">
            <input type="checkbox" id="checkbox15" name="input_check[]" value="15">
            <label for="checkbox15">15</label>
          </div>
      
          <div class="grid-item">
            <input type="checkbox" id="checkbox16" name="input_check[]" value="16">
            <label for="checkbox16">16</label>
          </div>
      
          <div class="grid-item">
            <input type="checkbox" id="checkbox17" name="input_check[]" value="17">
            <label for="checkbox17">17</label>
          </div>
      
          <div class="grid-item">
            <input type="checkbox" id="checkbox18" name="input_check[]" value="18">
            <label for="checkbox18">18</label>
          </div>
      
          <div class="grid-item">
            <input type="checkbox" id="checkbox19" name="input_check[]" value="19">
            <label for="checkbox19">19</label>
          </div>
      
          <div class="grid-item">
            <input type="checkbox" id="checkbox20" name="input_check[]" value="20">
            <label for="checkbox20">20</label>
          </div>
      
      </div>
      
      
      <div class="grid-container">
      
      
      <div class="grid-item">
        <input type="checkbox" id="checkbox21" name="input_check[]" value="21">
        <label for="checkbox21">21</label>
      </div>
      
      <div class="grid-item">
        <input type="checkbox" id="checkbox22" name="input_check[]2" value="22">
        <label for="checkbox22">22</label>
      </div>
      
      <div class="grid-item">
        <input type="checkbox" id="checkbox23" name="input_check[]" value="23">
        <label for="checkbox23">23</label>
      </div>
      
      <div class="grid-item">
        <input type="checkbox" id="checkbox24" name="input_check[]" value="24">
        <label for="checkbox24">24</label>
      </div>
      
      <div class="grid-item">
        <input type="checkbox" id="checkbox25" name="input_check[]" value="25">
        <label for="checkbox25">25</label>
      </div>
      
      <div class="grid-item">
        <input type="checkbox" id="checkbox26" name="input_check[]" value="26">
        <label for="checkbox26">26</label>
      </div>
      
      <div class="grid-item">
        <input type="checkbox" id="checkbox27" name="input_check[]" value="27">
        <label for="checkbox27">27</label>
      </div>
      
      <div class="grid-item">
        <input type="checkbox" id="checkbox28" name="input_check[]" value="28">
        <label for="checkbox28">28</label>
      </div>
      
      <div class="grid-item">
        <input type="checkbox" id="checkbox29" name="input_check[]" value="29">
        <label for="checkbox29">29</label>
      </div>
      
      <div class="grid-item">
        <input type="checkbox" id="checkbox30" name="input_check[]" value="3'">
        <label for="checkbox30">30</label>
      </div>
      
      <div class="grid-item">
        <input type="checkbox" id="checkbox31" name="input_check[]" value="31">
        <label for="checkbox31">31</label>
      </div>
      
      <div class="grid-item">
        <input type="checkbox" id="checkbox32" name="input_check[]" value="32">
        <label for="checkbox32">32</label>
      </div>
      
      <div class="grid-item">
        <input type="checkbox" id="checkbox33" name="input_check[]" value="33">
        <label for="checkbox33">33</label>
      </div>
      
      <div class="grid-item">
        <input type="checkbox" id="checkbox34" name="input_check[]" value="34">
        <label for="checkbox34">34</label>
      </div>
      
      <div class="grid-item">
        <input type="checkbox" id="checkbox35" name="input_check[]" value="35">
        <label for="checkbox35">35</label>
      </div>
      
      <div class="grid-item">
        <input type="checkbox" id="checkbox36" name="input_check[]" value="36">
        <label for="checkbox36">36</label>
      </div>
      
      <div class="grid-item">
        <input type="checkbox" id="checkbox37" name="input_check[]" value="37">
        <label for="checkbox37">37</label>
      </div>
      
      <div class="grid-item">
        <input type="checkbox" id="checkbox38" name="input_check[]" value="38">
        <label for="checkbox38">38</label>
      </div>
      
      <div class="grid-item">
        <input type="checkbox" id="checkbox39" name="input_check[]" value="39">
        <label for="checkbox39">39</label>
      </div>
      
      <div class="grid-item">
        <input type="checkbox" id="checkbox40" name="input_check[]" value="40">
        <label for="checkbox40">40</label>
      </div>
      </div>


            </form>

            <div class="image-container">
              <img src="img/ocu.png" alt="ocupado">
            
              
              <img src="img/dispo.png" alt="disponible">

        </center>
      </div>  


</section>

    <Center>
        <div data-aos="fade-up" data-aos-duration="1500">
            <h1 class="title">LOS + SOLICITADOS</h1>
        </div>
        <br>

    </Center>
    <div data-aos="fade-up" data-aos-duration="1500"></div>
    <div class="container">
        <div class="card">
            <img src="img/cetepic.jpg" alt="">
            <h3 class="Terminal">Central de autobuses Tepic</h3>
            <h3>Tepic-Guayabitos</h3>
            <p>Linea de autobuses: Pacifico</p>
            <p>Precio: MXN $187 </p>
            <br>
            <a href="#">Comprar</a>
        </div>
        <div class="card">
            <img src="img/csan.jpg" alt="">
            <h3 class="Terminal">Central de autobuses Santiago Ixcuintla</h3>
            <h3>Santiago Ixcuintla-Tepic</h3>
            <p>linea de autobuses: Nayar</p>
            <p>Precio: MXN $109</p>
            <br>
            <a href="#">Comprar</a>
        </div>
        <div class="card">
            <img src="img/cetepic.jpg" alt="">
            <h3 class="Terminal">Central de autobuses Tepic</h3>
            <h3>Tepic-Sayulita</h3>
            <p>Linea de autobuses: Pacifico</p>
            <p>Precio: MXN $248</p>
            <br>
            <a href="#">Comprar</a>
        </div>
    </div>
    </div>

    <br>
    <div data-aos="fade-up" data-aos-duration="1500">
        <div class="container">
            <br>
            <div class="card">
                <img src="img/cetepic.jpg" alt="">
                <h3 class="Terminal">Central de Autobuses Tepic</h3>
                <br>
                <h3>Tepic-Santa Maria del Oro</h3>
                <p>Linea de Autobuses: Nayar</p>
                <p>Precio: MXN $38</p>
                <br>
                <a href="#">Comprar</a>
            </div>
            <div class="card">
                <img src="img/rincon.jpg" alt="">
                <h3 class="Terminal">Central de Autobuses Ricon de Guayabitos</h3>
                <h3>Ricon de Guaybitos-San Blas</h3>
                <p>Linea de autobuses: Nayar</p>
                <p>Precio: MXN $200</p>
                <br>
                <a href="#">Comprar</a>
            </div>
            <div class="card">
                <img src="img/cetepic.jpg" alt="">
                <h3 class="Terminal">Central de Autobuses Tepic </h3>
                <h3>Tepic-Bucerias</h3>
                <p>Linea de autobuses: Nayar</p>
                <p>Precio: MXN $282</p>
                <br>
                <a href="#">Comprar</a>
            </div>
        </div>
    </div>

</body>
</html>