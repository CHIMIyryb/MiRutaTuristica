<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aplicación NEAR</title>
    
</head>
<body>
    <h1>Aplicación Web con NEAR Protocol</h1>
    
    <!-- Botón para iniciar/cerrar sesión -->
    <button id="login-button">Iniciar Sesión con NEAR</button>
    <button id="logout-button" style="display:none;">Cerrar Sesión</button>

    <!-- Información de la cuenta -->
    <div id="account-info" style="display:none;">
        <p>Bienvenido, <span id="account-id"></span></p>
        <button id="call-contract-button">Llamar al Contrato Inteligente</button>
    </div>

    <div id="contract-result"></div>

    <!-- Enlaces de ayuda -->
    <footer>
        <p>Powered by NEAR Protocol</p>
    </footer>

    <script src="main.js" defer></script>
</body>
</html>
