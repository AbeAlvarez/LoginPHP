<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=se, initial-scale=1.0">
    <title>R3.Programación del lado del cliente: capturando datos del usuario</title>
    <link rel="stylesheet" href="card.css">
</head>
<body>
    <section class="reg-field">
        <h3>Datos enviados</h3>
        <img class="img" src="./img/mr_bean.webp" alt="photo">
    <?php
        echo 'Nombre: ' . $_POST ["nombre"] . '<br>';
        echo 'Apellido: ' . $_POST ["apellido"] . '<br>';
        echo 'Edad: ' . $_POST ["edad"] . '<br>';
        echo 'Em@il: ' . $_POST ["email"];
        ?>
    </section>
</body>
</html>