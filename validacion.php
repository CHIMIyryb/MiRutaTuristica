<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Verificación de Identidad</title>
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
        max-width: 800px;
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

    .form-container input, .form-container select, .form-container button {
        width: 100%;
        padding: 10px;
        margin-bottom: 15px;
        border-radius: 5px;
        border: 1px solid #ccc;
        font-size: 14px;
        box-sizing: border-box;
    }

    .form-container button {
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

    .form-container .validar {
        background-color: red;
    }

    .form-container .validar:hover {
        background-color: #d30000;
    }
</style>

<?php require_once "menu.php"; ?>
<br>
<section id="s1">
    <div class="form-container">
        <center><h3>Verificación de identidad</h3></center>
        <br>
        
        <!-- Formulario dividido en dos columnas -->
        <div class="form-row">
            <!-- Primera columna -->
            <div class="form-group">
                <label for="ine-upload"><i class="fa-solid fa-id-card"></i> Subir INE (PDF o Imagen)</label>
                <input type="file" id="ine-upload" accept="image/*,.pdf">
            </div>
            <div class="form-group">
                <label for="face-photo"><i class="fa-solid fa-camera"></i> Validación con rostro (Subir foto)</label>
                <input type="file" id="face-photo" accept="image/*">
            </div>
        </div>

        <div class="form-row">
            <!-- Segunda columna -->
            <div class="form-group">
                <label for="curp"><i class="fa-solid fa-id-badge"></i> CURP</label>
                <input type="text" id="curp" placeholder="Ingrese su CURP" maxlength="18">
            </div>
            <div class="form-group">
                <label for="telefono"><i class="fa-solid fa-phone"></i> Teléfono móvil</label>
                <input type="tel" id="telefono" placeholder="Ingrese su número de teléfono" maxlength="10">
            </div>
        </div>

        <div class="form-row">
            <div class="form-group">
                <label for="email"><i class="fa-solid fa-envelope"></i> Correo electrónico</label>
                <input type="email" id="email" placeholder="Ingrese su correo electrónico">
            </div>
            <div class="form-group">
                <label for="verification-code"><i class="fa-solid fa-key"></i> Código de verificación</label>
                <input type="text" id="verification-code" placeholder="Ingrese el código enviado a su correo/teléfono">
            </div>
        </div>

        <button type="submit" id="validate-btn">Validar identidad</button>
    </div>
</section>

<script>
    document.getElementById('validate-btn').addEventListener('click', function() {
    // Mostrar alerta de carga
    Swal.fire({
        title: 'Cargando...',
        text: 'Estamos verificando su identidad, por favor espere.',
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
            title: 'Identidad validada',
            text: 'Su identidad ha sido verificada exitosamente.',
            icon: 'success'
        }).then(() => {
            // Redirigir a otra página después de hacer clic en "OK"
            window.location.href = "perfil.php"; // Cambia 'pagina_destino.php' por la URL de tu destino
        });
    }, 3000); // Simulación de 3 segundos de verificación
});

</script>

</body>
</html>
