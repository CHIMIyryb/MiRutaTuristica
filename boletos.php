<?php

session_start();
include 'php/conexion_be.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Document</title>
    <link rel="stylesheet" href="css/reservacion.css">

</head>
<body>
<style>
        body{
             background: linear-gradient(to top,transparent,rgba(28, 112, 239, 0.5)), url(img/central.jpg);
             background-size: cover;
             background-attachment: fixed;
             background-position: center center;
         }
     </style>

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
if(isset($_SESSION['usuario'])){

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



$sql = "SELECT * FROM transporte WHERE nombre_usuario='".$user."'";
    $resultado = $conexion-> query($sql);

if(mysqli_num_rows($resultado)>0){

    while($data=$resultado->fetch_assoc()){

        $origen = $data['origen'];
        $destino = $data['destino'];
        $fecha = $data['fecha'];
        $hora = $data['hora_salida'];
        $asiento = $data['asiento'];
        $fecha_reg = $data['fecha_reg'];
    
            ?>
            
        <center>
            <br>
            <div class="reserva">
    <h3>Origen: <?php echo $origen ?></h3>
    <h3>Destino: <?php echo $destino ?></h3>
    <h3>Fecha: <?php echo $fecha ?></h3>
    <h3>Hora de salida: <?php echo $hora ?></h3>
    <h3>Asiento: <?php echo $asiento ?></h3>
    <h3 class="fecha"> Fecha en que se reservo el boleto: <?php echo $fecha_reg?></h3>
            </div>
        </center>

    <br>
    <?php
} 

}       else{
    ?>
    <center>

    <h2 class="datos">No tienes ningun boleto reservado</h2>

    </center>
        <?php
}

}           else{
                echo '
                <script>
                    alert("Inicia sesion para poder visualizar tus boletos");
                    window.location = "index.php";
                </script>
                ';
}
?>
</body>
</html>