$(document).ready(function() {
    $('#zona').load("../zonas.php");
    var dateinfo = '2019-01-01';
    var zona = $('#zona').val();
    var hora = "00:00:00";

    function clocker() {
        $('div.date').text(dateinfo);

        var nextYear = moment.tz(dateinfo + " " + hora, zona);

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
    $('#data').val(dateinfo);
    $('#hora').val(hora);
    clocker();
    $('#data').change(function() {
        dateinfo = $('#data').val();
        clocker();
    });
    $('#zona').change(function() {
        zona = $('#zona').val();
        clocker();
    });
    $('#hora').change(function() {
        hora = $('#hora').val();
        clocker();
    });

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
    fundo();
    $('#data').mask('0000-00-00');
    $('#hora').mask('00:00:00');
    $('div.conf').click(function() {
        $('div#options').toggleClass("ativated-change");
        if($('div#options').hasClass("ativated-change")){
            $('#icon').removeClass("fa-cog");
            $('#icon').addClass("fa-times");
        }else{
            $('#icon').removeClass("fa-times");
            $('#icon').addClass("fa-cog");
        }
    });
    $('div.icon-git').click(function() {
        $('div#git').toggleClass("ativated-git");
        if($('div#git').hasClass("ativated-git")){
            $('#icon-git').removeClass("fa-github");
            $('#icon-git').removeClass("fab");
            $('#icon-git').addClass("fa-times");
            $('#icon-git').addClass("fa");
        }else{
            $('#icon-git').removeClass("fa-times");
            $('#icon-git').removeClass("fa");
            $('#icon-git').addClass("fab");
            $('#icon-git').addClass("fa-github");
        }
    });
});