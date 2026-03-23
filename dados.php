<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dados</title>
    <meta name="description" content="">
    <meta name="keywords" content="">
    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>

<body>
    <h1>Dados de reqiusições GET e POST</h1>
    <?php
        if (isset($_GET["var1"]) && isset($_GET["var2"])) {
            $var1 = $_GET['var1'];
            $var2 = $_GET['var2'];
            
            echo "<p>O valor informado: {$_GET["var1"]}</p>\n";
            echo "<p>O valor informado: {$_GET["var2"]}</p>\n";
        }
    ?>
</body>

</html>