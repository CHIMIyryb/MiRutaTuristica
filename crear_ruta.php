<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="css/lugares.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>
<body>
    <style>
        #s1 {
            background-size: cover;
            background-attachment: fixed;
            background-position: center center;
            display: flex;
            justify-content: center;
            align-items: flex-start;
            height: 100vh;
        }

        .form-container {
            background-color: white;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1);
            max-width: 600px;
            width: 100%;
            margin-top: 100px;
        }

        .form-container label {
            font-size: 14px;
            font-weight: bold;
            color: #333;
            margin-bottom: 5px;
            display: inline-block;
        }

        .form-container input {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border-radius: 5px;
            border: 1px solid #ccc;
            font-size: 14px;
            box-sizing: border-box;
        }

        .form-container button {
            width: 100%;
            padding: 10px;
            background-color: #007bff;
            border: none;
            color: white;
            font-size: 16px;
            border-radius: 5px;
            cursor: pointer;
        }

        .form-container button:hover {
            background-color: #0056b3;
        }

        .form-row {
            display: flex;
            justify-content: space-between;
            gap: 20px;
        }

        .form-row .form-group {
            flex: 1;
        }
    </style>

    <?php require_once "menu.php"; ?>
    <br>
    <section id="s1">
        <div class="form-container">
            <center>
                <h1>Cargar datos</h1>
                <br>
            </center>
            <div class="form-row">
                <div class="form-group">
                    <label for="latitud-inicial"><i class="fa-solid fa-route"></i> Latitud punto inicial</label>
                    <input type="text" id="latitud-inicial" placeholder="Ingrese latitud del punto inicial">
                </div>
                <div class="form-group">
                    <label for="longitud-inicial"><i class="fa-solid fa-route"></i> Longitud punto inicial</label>
                    <input type="text" id="longitud-inicial" placeholder="Ingrese longitud del punto inicial">
                </div>
            </div>
            
            <div class="form-row">
                <div class="form-group">
                    <label for="latitud-final"><i class="fa-solid fa-route"></i> Latitud punto final</label>
                    <input type="text" id="latitud-final" placeholder="Ingrese latitud del punto final">
                </div>
                <div class="form-group">
                    <label for="longitud-final"><i class="fa-solid fa-route"></i> Longitud punto final</label>
                    <input type="text" id="longitud-final" placeholder="Ingrese longitud del punto final">
                </div>
            </div>
            
            <button id="validate-btn" type="button">Cargar datos</button>
        </div>
    </section>

    <script>
        document.getElementById('validate-btn').addEventListener('click', function() {
            // Mostrar alerta de carga
            Swal.fire({
                title: 'Cargando...',
                text: 'Estamos verificando los datos de la ruta, por favor espere.',
                allowOutsideClick: false,
                didOpen: () => {
                    Swal.showLoading();
                }
            });

            // Simular el proceso de verificación (puedes reemplazar este setTimeout con tu lógica real)
            setTimeout(function() {
                // Ocultar la alerta de carga
                Swal.close();

                // Mostrar alerta de éxito
                Swal.fire({
                    title: 'Ruta creada',
                    text: 'La ruta ha sido creada exitosamente.',
                    icon: 'success'
                }).then(() => {
                    // Redirigir a otra página después de hacer clic en "OK"
                    window.location.href = "crear_ruta.php"; // Cambia 'perfil.php' por la URL de tu destino
                });
            }, 3000); // Simulación de 3 segundos de procesamiento
        });
    </script>
</body>
</html>
