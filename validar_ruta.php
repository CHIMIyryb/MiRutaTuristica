<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menú Lateral con Dropdowns</title>
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="css/lugares.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    
    <style>
        /* Estilos del cuerpo */
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }

        /* Estilos para el menú vertical */
        .vertical-menu {
            position: fixed;
            top: 100px;
            left: 0;
            width: 250px;
            height: calc(100% - 100px);
            background-color: rgb(110, 182, 245);
            padding-top: 20px;
            z-index: 1000;
        }

        .vertical-menu a, .dropdown-btn {
            padding: 15px;
            text-decoration: none;
            font-size: 18px;
            color: white;
            display: block;
            text-align: left;
            transition: background-color 0.3s;
            border: none;
            background: none;
            width: 100%;
            cursor: pointer;
            outline: none;
        }

        .vertical-menu a:hover, .dropdown-btn:hover {
            background-color: #1cbece;
        }

        /* Estilos del contenido del dropdown */
        .dropdown-container {
            display: none;
            background-color: #0d9dc3;
            padding-left: 20px;
        }

        .dropdown-container a {
            font-size: 16px;
        }

        /* Estilos para el contenido principal */
        .content {
            margin-left: 260px;
            padding: 20px;
        }

        /* Estilos para las tablas */
        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
        }

        table, th, td {
            border: 1px solid #ccc;
        }

        th, td {
            padding: 10px;
            text-align: left;
        }

        th {
            background-color: #f2f2f2;
        }

        /* Estilos para el botón de validar ruta */
        .validate-btn {
            background-color: #1cbece;
            color: white;
            padding: 10px 20px;
            border: none;
            cursor: pointer;
            font-size: 16px;
            transition: background-color 0.3s;
        }

        .consulte-btn{
            background-color: green;
            color: white;
            padding: 10px 20px;
            border: none;
            cursor: pointer;
            font-size: 16px;
            transition: background-color 0.3s;
        }

        .validate-btn:hover {
            background-color: #0d9dc3;
        }

        /* Estilos para el botón de desvalidar */
        .unvalidate-btn {
            background-color: #ff4d4d;
            color: white;
            padding: 10px 20px;
            border: none;
            cursor: pointer;
            font-size: 16px;
            transition: background-color 0.3s;
        }

        .unvalidate-btn:hover {
            background-color: #e60000;
        }

                /* Estilos del contenedor del slider */
                .gallery {
            position: relative;
            max-width: 600px; /* Ajusta el ancho del slider */
            margin: auto;
            overflow: hidden;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        }

        /* Estilo de las imágenes dentro del slider */
        .gallery img {
            width: 100%;
            height: auto;
            display: none; /* Ocultamos todas las imágenes por defecto */
        }

        /* Estilo para hacer visibles las imágenes activas */
        .gallery img.active {
            display: block;
        }

        /* Estilos de los botones de control */
        .prev, .next {
            cursor: pointer;
            position: absolute;
            top: 50%;
            width: auto;
            padding: 10px;
            margin-top: -22px;
            color: white;
            font-weight: bold;
            font-size: 18px;
            border-radius: 0 3px 3px 0;
            user-select: none;
            transition: 0.3s;
            background-color: rgba(0, 0, 0, 0.5);
        }

        .next {
            right: 0;
            border-radius: 3px 0 0 3px;
        }

        .prev:hover, .next:hover {
            background-color: rgba(0, 0, 0, 0.8);
        }

        /* Indicadores de las imágenes */
        .dots {
            text-align: center;
            padding: 10px;
            background: #f1f1f1;
        }

        .dots span {
            cursor: pointer;
            height: 15px;
            width: 15px;
            margin: 0 2px;
            background-color: #bbb;
            border-radius: 50%;
            display: inline-block;
            transition: background-color 0.6s ease;
        }

        .dots span.active {
            background-color: #717171;
        }

        /* Estilos para el banner */
.banner {
    background-image: url('ruta-a-tu-imagen.jpg'); /* Cambia la URL por la imagen que quieras */
    background-size: cover;
    background-position: center;
    color: white;
    font-size: 2em;
    font-weight: bold;
    text-align: center;
    padding: 50px 0;
    margin-bottom: 20px;
    border-radius: 10px;
}

/* Contenedor de las cajas informativas */
.info-boxes {
    display: flex;
    justify-content: space-around;
    flex-wrap: wrap;
    margin: 20px 0;
}

/* Estilos para las cajas informativas */
.info-box {
    background-color: #f0f0f0;
    border-radius: 10px;
    box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1);
    text-align: center;
    padding: 20px;
    margin: 10px;
    flex: 1 1 30%;
    max-width: 300px;
    transition: transform 0.3s ease;
}

.info-box:hover {
    transform: translateY(-10px);
}

.info-box i {
    font-size: 3em;
    color: #4CAF50;
    margin-bottom: 10px;
}

.info-box h3 {
    font-size: 1.5em;
    margin: 10px 0;
}

.info-box p {
    font-size: 1em;
    color: #333;
}

/* Para pantallas pequeñas (responsive design) */
@media (max-width: 768px) {
    .info-boxes {
        flex-direction: column;
        align-items: center;
    }

    .info-box {
        width: 80%;
        margin-bottom: 20px;
    }
}


    </style>
</head>
<body>

    <?php require_once "menu.php"; ?> <!-- El menú principal ya incluido -->
    <!-- Menú lateral con dropdowns -->
    <div class="vertical-menu">
        <button class="dropdown-btn"><i class="fa-solid fa-globe"></i> Nayarit 
            <i class="fa fa-caret-down"></i>
        </button>
        <div class="dropdown-container">
            <a href="#" id="sanBlasLink">San Blas</a>
            <a href="#">Santigo Ixcuintla</a>
            <a href="#">Tepic</a>
            <a href="#">Tecuala</a>
            <a href="#">Xalisco</a>
            <a href="#">Ruiz</a>
        </div>

    </div>

<!-- Contenido principal -->
<!-- Contenido principal mejorado -->
<div class="content" id="mainContent">
<!-- Banner con imagen de fondo -->
    <div class="banner">
        ¡Bienvenido a Nayarit!
    </div>

    <!-- Cajas informativas con íconos -->
    <div class="info-boxes">
        <div class="info-box">
            <i class="fas fa-route"></i>
            <h3>Rutas Validadas</h3>
            <p>Actualmente tienes <strong>15 rutas validadas</strong> en todo el estado.</p>
        </div>
        <div class="info-box">
            <i class="fas fa-users"></i>
            <h3>Vendedores Activos</h3>
            <p>Más de <strong>50 vendedores</strong> están trabajando activamente en las rutas.</p>
        </div>
        <div class="info-box">
            <i class="fas fa-award"></i>
            <h3>Comisiones Entregadas</h3>
            <p>Se han otorgado <strong>250,000 MXN</strong> en comisiones este mes.</p>
        </div>
    </div>

    <!-- Galería de imágenes (slider) -->
    <h2>Explora las bellezas de Nayarit</h2>
    <div class="gallery">
        <img src="img/slider/mantanchen.jpg" alt="Playa en Nayarit" class="active">
        <img src="img/slider/laguna.jpg" alt="Montañas de Nayarit">
        <img src="img/slider/gobierno.jpg" alt="Bosque en Nayarit">
        <img src="img/slider/mexcaltitlan.jpg" alt="Ciudad de Tepic">
        <img src="img/slider/santiago.jpg" alt="Cultura en Nayarit">

        <!-- Botones de control -->
        <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
        <a class="next" onclick="plusSlides(1)">&#10095;</a>
    </div>

    <!-- Indicadores de las imágenes -->
    <div class="dots">
        <span onclick="currentSlide(1)"></span>
        <span onclick="currentSlide(2)"></span>
        <span onclick="currentSlide(3)"></span>
        <span onclick="currentSlide(4)"></span>
        <span onclick="currentSlide(5)"></span>
    </div>
</div>

<script>

var slideIndex = 1;
        showSlides(slideIndex);

        // Función para controlar el cambio de imagen
        function plusSlides(n) {
            showSlides(slideIndex += n);
        }

        // Función para mostrar una imagen específica
        function currentSlide(n) {
            showSlides(slideIndex = n);
        }

        // Función principal para mostrar las imágenes
        function showSlides(n) {
            var i;
            var slides = document.getElementsByClassName("gallery")[0].getElementsByTagName("img");
            var dots = document.getElementsByClassName("dots")[0].getElementsByTagName("span");
            if (n > slides.length) {slideIndex = 1}
            if (n < 1) {slideIndex = slides.length}
            for (i = 0; i < slides.length; i++) {
                slides[i].style.display = "none";  
            }
            for (i = 0; i < dots.length; i++) {
                dots[i].className = dots[i].className.replace(" active", "");
            }
            slides[slideIndex-1].style.display = "block";  
            dots[slideIndex-1].className += " active";
        }

    // Lógica para desplegar el contenido de los dropdowns
    var dropdowns = document.getElementsByClassName("dropdown-btn");
    for (var i = 0; i < dropdowns.length; i++) {
        dropdowns[i].addEventListener("click", function() {
            this.classList.toggle("active");
            var dropdownContent = this.nextElementSibling;
            if (dropdownContent.style.display === "block") {
                dropdownContent.style.display = "none";
            } else {
                dropdownContent.style.display = "block";
            }
        });
    }

    // Lógica para cambiar el contenido al hacer clic en "San Blas"
    document.getElementById("sanBlasLink").addEventListener("click", function() {
        var content = `
            <br><br><br><br>    
            <h1>San Blas</h1>
            <div class="row">
                <div class="column">
                    <h2>Rutas por validar</h2>
                    <table id="rutasPorValidarTable">
                        <thead>
                            <tr>
                                <th>Ruta</th>
                                <th>Zona</th>
                                <th>Acciones</th>
                                <th>Consulta</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Ruta 1</td>
                                <td>Zona Norte</td>
                                <td><button class="validate-btn">Validar</button></td>
                                <td><button class="consulte-btn">Consultar ruta</button></td>
                            </tr>
                            <tr>
                                <td>Ruta 2</td>
                                <td>Zona Centro</td>
                                <td><button class="validate-btn">Validar</button></td>
                                <td><button class="consulte-btn">Consultar ruta</button></td>
                            </tr>
                            <tr>
                                <td>Ruta 3</td>
                                <td>Zona Sur</td>
                                <td><button class="validate-btn">Validar</button></td>
                                <td><button class="consulte-btn">Consultar ruta</button></td>
                            </tr>
                            <tr>
                                <td>Ruta 4</td>
                                <td>Zona Este</td>
                                <td><button class="validate-btn">Validar</button></td>
                                <td><button class="consulte-btn">Consultar ruta</button></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="column">
                    <h2>Rutas validadas</h2>
                    <table id="rutasValidadasTable">
                        <thead>
                            <tr>
                                <th>Ruta</th>
                                <th>Zona</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Ruta 5</td>
                                <td>Zona Oeste</td>
                            </tr>
                            <tr>
                                <td>Ruta 6</td>
                                <td>Zona Centro-Norte</td>
                            </tr>
                            <tr>
                                <td>Ruta 7</td>
                                <td>Zona Sur-Este</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>`;
        document.getElementById("mainContent").innerHTML = content;

        // Agregar funcionalidad a los botones "Validar"
        var validateButtons = document.querySelectorAll(".validate-btn");
        validateButtons.forEach(function(button) {
            button.addEventListener("click", function() {
    var row = this.closest("tr");
    var ruta = row.cells[0].textContent;
    var zona = row.cells[1].textContent;

    var validatedTable = document.getElementById("rutasValidadasTable").getElementsByTagName("tbody")[0];
    var newRow = validatedTable.insertRow();
    newRow.innerHTML = `<td>${ruta}</td><td>${zona}</td><td><button class="unvalidate-btn">Desvalidar</button></td>`;
    
    row.remove();

    // Primera alerta de validación exitosa
    Swal.fire({
        title: 'Ruta validada!',
        text: 'La ruta ha sido validada con éxito.',
        icon: 'success',
        confirmButtonText: 'OK'
    }).then(() => {
        // Segunda alerta indicando la cantidad de tokens otorgados
        Swal.fire({
            title: 'Tokens recibidos!',
            text: 'Has recibido 5 tokens por validar esta ruta.', // Cambia la cantidad de tokens según sea necesario
            icon: 'info',
            confirmButtonText: 'OK'
        });
    });

    addUnvalidateEvent(newRow.querySelector(".unvalidate-btn"));
});

        });

        // Agregar funcionalidad a los botones "Desvalidar"
        var unvalidateButtons = document.querySelectorAll(".unvalidate-btn");
        unvalidateButtons.forEach(function(button) {
            addUnvalidateEvent(button);
        });

        // Función para desvalidar rutas
        function addUnvalidateEvent(button) {
            button.addEventListener("click", function() {
                var row = this.closest("tr");
                var ruta = row.cells[0].textContent;
                var zona = row.cells[1].textContent;

                var unvalidatedTable = document.getElementById("rutasPorValidarTable").getElementsByTagName("tbody")[0];
                var newRow = unvalidatedTable.insertRow();
                newRow.innerHTML = `<td>${ruta}</td><td>${zona}</td><td><button class="validate-btn">Validar</button></td>`;
                
                row.remove();

                Swal.fire({
                    title: 'Ruta desvalidada!',
                    text: 'La ruta ha sido desvalidada.',
                    icon: 'info',
                    confirmButtonText: 'OK'
                });

                // Agregar funcionalidad de validar al nuevo botón
                addValidateEvent(newRow.querySelector(".validate-btn"));
            });
        }

        // Función para validar rutas (dentro de desvalidar)
        function addValidateEvent(button) {
            button.addEventListener("click", function() {
                var row = this.closest("tr");
                var ruta = row.cells[0].textContent;
                var zona = row.cells[1].textContent;

                var validatedTable = document.getElementById("rutasValidadasTable").getElementsByTagName("tbody")[0];
                var newRow = validatedTable.insertRow();
                newRow.innerHTML = `<td>${ruta}</td><td>${zona}</td><td><button class="unvalidate-btn">Desvalidar</button></td>`;
                
                row.remove();

                Swal.fire({
                    title: 'Ruta validada!',
                    text: 'La ruta ha sido validada con éxito.',
                    icon: 'success',
                    confirmButtonText: 'OK'
                });

                addUnvalidateEvent(newRow.querySelector(".unvalidate-btn"));
            });
        }
    });

</script>

</body>
</html>
