<?php  ?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Count Down</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU"
        crossorigin="anonymous">
    <!-- Links necessarios para os layout funcionarem!!(Nao exclua se for usar os layout) -->
    <link rel="stylesheet" type="text/css" media="screen" href="css/util.css" />
    <!-- <link rel="stylesheet" type="text/css" media="screen" href="css/basic.css" /> -->
    <!-- Link do layout coloque sempre depois dos links necessarios -->
    <link rel="stylesheet" type="text/css" media="screen" href="css/layout/commun.css">

    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script src="js/moment.js"></script>
    <script src="js/moment-with-locales.js"></script>
    <script src="js/moment-timezone-with-data.min.js"></script>
    <script src="js/jquery-countdown.min.js"></script>
    <script src="js/start.js"></script>
</head>

<body>
    <div class="container">
        <div class="header">
            <div class="title">
                CoutDown to
            </div>
            <div class="date"></div>
        </div>
        <div class="clock"></div>
    </div>
    <div class="change">
        <h4 class="titulo">Opções do CountDown</h4>
        <input type="date" id="data" placeholder="Data" value="">
        <input type="time" id="hora" placeholder="Horario" value="">
        <!-- <input type="text" id="zona" placeholder="Zona" value=""> -->
        <select id="zona" placeholder="Zona">
        </select>
    </div>
</body>

</html>