<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="css/lugares.css">
</head>
<body>
    <style>
        #s1 {
            background-size: cover;
            background-attachment: fixed;
            background-position: center center;
            display: flex;
            justify-content: center;
            align-items: flex-start; /* Alinea el contenido al inicio (arriba) */
            height: 100vh;
        }

        .form-container {
            background-color: white;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1);
            max-width: 600px;
            width: 100%;
            margin-top: 100px; /* Desplaza el formulario hacia abajo */
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

        /* Estilos para el diseño en dos columnas */
        .form-row {
            display: flex;
            justify-content: space-between;
            gap: 20px; /* Espacio entre columnas */
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
                <h1>Crear ruta</h1>
                <br>
            </center>
            <!-- Agrupar inputs en pares para dos columnas -->
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
                    <label for="longitud-final"> <i class="fa-solid fa-route"></i> Longitud punto final</label>
                    <input type="text" id="longitud-final" placeholder="Ingrese longitud del punto final">
                </div>
            </div>

            <div class="form-row">
                <div class="form-group">
                    <label for="latitud-final"><i class="fa-regular fa-clock"></i> Disponibilidad (minutos)</label>
                    <input type="text" id="latitud-final" placeholder="Ingrese la disponibilidad">
                </div>
                <div class="form-group">
                    <label for="longitud-final"><i class="fa-solid fa-circle-notch"></i> Radio de alcance (kilometros)</label>
                    <input type="text" id="longitud-final" placeholder="Ingrese el radio de alcance">
                </div>
            </div>
            

            <button type="submit">Crear ruta</button>
        </div>
    </section>

</body>
</html>
