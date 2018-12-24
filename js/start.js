var data = '2019-01-01';
var zona = "Etc/Greenwich";
var hora = "00:00:00";

$(document).ready(async function() {

    await $('#ticket-r').load("../php/tickets-right.php");
    await $('#ticket-l').load("../php/tickets-left.php");

    data = '2019-01-01';
    zona = $('#zona').val();
    hora = "00:00:00";

    clocker();
    fundo();

});

function clocker() {
    $('div.date').text(data);

    var nextYear = moment.tz(data + " " + hora, zona);

    $('div.clock').countdown(nextYear.toDate(), function(event) {
        var week = event.strftime('%w');
        var day = event.strftime('%d');
        var hour = event.strftime('%H');
        var minute = event.strftime('%M');
        var second = event.strftime('%S');
        $(this).html(
            '<div class="display week"><h4>' + week + ' </h4>semanas</div>' +
            '<div class="display day"><h4>' + day + ' </h4>dias</div>' +
            '<div class="display hour"><h4>' + hour + ' </h4>horas</div>' +
            '<div class="display minute"><h4>' + minute + ' </h4>minutos</div>' +
            '<div class="display second"><h4>' + second + ' </h4>segundos</div>');
    });
}


function sleep(time) {
    return new Promise((resolve) => setTimeout(resolve, time));
}

async function fundo() {
    while (true) {
        await sleep(5000);
        $('body').attr("style", "background-image: url('https://www.lukas-petereit.com/wp-content/uploads/2017/10/Madeira-Santa-Cruz-Sunrise-Red-Sky-Waves-Long-Exposure-Travel-Rocks-Landscape-Photography-Lukas-Petereit.jpg')");
        await sleep(5000);
        $('body').attr("style", "background-image: url('https://static.independent.co.uk/s3fs-public/thumbnails/image/2018/10/15/10/lpoty2018-classicviewwinner-john-finney.jpg')");
        await sleep(5000);
        $('body').attr("style", "background-image: url('https://i2.wp.com/www.brianmerry.ca/wp-content/uploads/2015/02/The-Rundle-Diamond-for-FB.jpg?fit=1500%2C1000')");
        await sleep(5000);
        $('body').attr("style", "background-image: url('https://davidbalyeat.com/wp-content/uploads/chicago-river-skyline-dawn-reflections-high-defintion-hd-professional-landscape-photography.jpg')");
    }
}