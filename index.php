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

    <!-- Importando CSS dos ticket do site -->
    <link rel="stylesheet" type="text/css" media="screen" href="css/ticket.css">

    <!-- Importando JQuery no html -->
    <script src="https://code.jquery.com/jquery-3.3.1.min.js">
    </script>

    <!-- Plugin de mascaras -->
    <script src="js/jquery.mask.min.js">
    </script>

    <!-- Plugins necessario para funcionamento com fuso horario do Countdown -->
    <script src="js/moment.js">
    </script>
    <script src="js/moment-with-locales.js">
    </script>
    <script src="js/moment-timezone-with-data.min.js">
    </script>

    <!-- Plugin do Countdown -->
    <script src="js/jquery-countdown.min.js">
    </script>

    <!-- JS no qual esta a programação do Countdown no site -->
    <script src="js/start.js">
    </script>
</head>

<body>
    <div class="list-tickets left-ticket" id="ticket-l">
    </div>
    <div class="list-tickets right-ticket" id="ticket-r">
    </div>
    <div class="container">
        <div class="header">
            <div class="title">
                CountDown to
            </div>
            <div class="date"></div>
        </div>
        <div class="clock"></div>
    </div>
</body>

</html>