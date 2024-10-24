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
                                         
                                                echo "CHIMI99";
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
                            <li><a class="menu" href="perfil.php">Perfil</a></li>
                            <li><a class="menu" href="validacion.php">Validacion usuario</a></li>
                            <li><a class="menu" href="php/cerrar_sesion.php">Cerrar sesion</a></li>
                        </ul>

                    </li>

                </ul>

            </nav>
        </center>
    </header>
    <!---->