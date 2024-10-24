<?php

session_start();
include 'php/conexion_be.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="css/reservacion.css">
</head>
<body>

    <style>
        body{
             background: linear-gradient(to top,transparent,rgba(28, 112, 239, 0.5)), url(img/fondo-reservas.jpg);
             background-size: cover;
             background-attachment: fixed;
             background-position: center center;
         }
     </style>

<?php

if(isset($_SESSION['usuario'])){
?>

<header>
    <img src="img/logo_wanderlust.png" alt="" class="logo">

    <nav>
        <ul class="menu-horizontal">
<center>
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
        </ul>
    </nav>
</header>

<?php
$user = $_SESSION['usuario'];

$sql = "SELECT * FROM usuario WHERE nombre_usuario='".$user."'";
    $resultado = $conexion-> query($sql);

    if(mysqli_num_rows($resultado)>0){
        while($data=$resultado->fetch_assoc()){

            $nombre = $data['nombre_completo'];
            $email = $data['email'];

            ?>
            <center>
                <br><br><br><br><br>
                <h2 class="datos">Nombre: <?php echo $nombre?></h3>
                <h2 class="datos">Email: <?php echo $email?></h3>
            </center>
            <br>
        <?php
        }
    }



$sql = "SELECT * FROM reservas WHERE nombre_usuario='".$user."'";
    $resultado = $conexion-> query($sql);

if(mysqli_num_rows($resultado)>0){

    while($data=$resultado->fetch_assoc()){

        $municipio = $data['municipio'];
        $hotel = $data['hotel'];
        $entrada = $data['entrada'];
        $salida = $data['salida'];
        $noches = $data['noches'];
        $habitaciones = $data['habitaciones'];
        $adultos = $data['adultos'];
        $ninos = $data['ninos'];
        $fecha_reg = $data['fecha_reg'];
    
            ?>
            
        <center>
            <br>
            <div class="reserva">
    <h3>Hotel: <?php echo $hotel ?></h3>
    <h3>Municipio: <?php echo $municipio ?></h3>
    <h3>Entrada: <?php echo $entrada ?></h3>
    <h3>Salida: <?php echo $salida ?></h3>
    <h3>Noches: <?php echo $noches ?></h3>
    <h3>Habitaciones: <?php echo $habitaciones ?></h3>
    <h3>Adultos: <?php echo $adultos ?></h3>
    <h3>Niños: <?php echo $ninos ?></h3>
    <h3 class="fecha"> Fecha en que se realizo la reservacion: <?php echo $fecha_reg?></h3>
            </div>
        </center>

    <br>
    <?php
} 

}       else{
    ?>
    <center>

    <h2 class="datos">No tienes ninguna reservacion</h2>

    </center>
        <?php
}

}           else{
                echo '
                <script>
                    alert("Inicia sesion para poder visualizar tus reservaciones");
                    window.location = "index.php";
                </script>
                ';
}
?>
   
   
</body>
</html>