<!DOCTYPE html>
<html>
    <head>
        <meta charset='utf-8'>
        <meta http-equiv='X-UA-Compatible' content='IE=edge'>
        <title>Reserva Salas</title>
        <meta name='viewport' content='width=device-width, initial-scale=1'>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
        <link href="/css/main.css" rel="stylesheet">
    </head>
    <?php 
        require_once(__DIR__ . "/vendor/autoload.php");
        ini_set('display_errors', 1);
        ini_set('display_startup_errors', 1);
        error_reporting(E_ALL);
    ?>
    <body>
        <?php include 'src/header.php'; ?>
        <?php include 'src/navbar.php'; ?>
        <br>
        <div class="h-100 d-flex align-items-center justify-content-center flex-column">
            <p class="h2 mb-4">Autentique-se via GIAE</p>
            <p class="mb-4">Utilize as credenciais do GIAE para continuar para Reserva Salas</p>
            <form action="login.php" method="POST" class="w-100" style="max-width: 300px;">
                <div class="mb-3">
                    <label for="user" class="form-label">Nome de utilizador <b class="required">*</b>:</label>
                    <input type="text" class="form-control" id="user" name="user" required autofocus placeholder="f1964">
                </div>
                <div class="mb-3">
                    <label for="pass" class="form-label">Palavra-passe <b class="required">*</b>:</label>
                    <input type="password" class="form-control" id="pass" name="pass" required placeholder="********">
                </div>
                <button type="submit" class="btn btn-primary w-100">Iniciar sessão</button>
            </form>
            <hr>
            <p class="font-weight-light"><small>(C) <?php echo date("Y"); ?> 2ºEF Agrupamento de Escolas Joaquim Inácio da Cruz Sobral</small></p>
        </div>
    </body>
</html>