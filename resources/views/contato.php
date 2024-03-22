<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página de Contato</title>
</head>
<body>
    <h1><?php echo $titulo ?></h1>
    <a href="mailto:sandroaf@unidavi.edu.br">sandroaf@unidavi.edu.br</a>
    <br>
    <?php 
        echo $_SERVER['SCRIPT_FILENAME']; 
    ?>
    <hr>
    <p>Obrigado por visitar: <?php echo $titulo ?></p>
</body>
</html>