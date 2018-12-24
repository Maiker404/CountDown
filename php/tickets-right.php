<div class="ticket git" id="git-ticket">
    <h4 class="titulo">GitHub do site!</h4>
    <a href="https://github.com/Maiker404/CountDown"><i class="fab fa-github"></i>Ir para GitHub</a>
    <div class="toggle-button" id="git-button">
        <i class="fab fa-github" id="icon-git"></i>
    </div>
    <script>
        $(document).ready(function() {
            $('#git-button').click(function() {
                $('#git-ticket').toggleClass("ativated-git");
                if ($('#git-ticket').hasClass("ativated-git")) {
                    $('#icon-git').removeClass("fa-github");
                    $('#icon-git').removeClass("fab");
                    $('#icon-git').addClass("fa-times");
                    $('#icon-git').addClass("fa");
                } else {
                    $('#icon-git').removeClass("fa-times");
                    $('#icon-git').removeClass("fa");
                    $('#icon-git').addClass("fab");
                    $('#icon-git').addClass("fa-github");
                }
            });
        });
    </script>
</div>
<div class="ticket facebook" id="facebook-ticket">
    <h4 class="titulo">Facebook do desenvolvedor!</h4>
    <a href="https://www.facebook.com/maiker.helmet"><i class="fab fa-facebook-square"></i>Ir para Facebook</a>
    <div class="toggle-button" id="facebook-button">
        <i class="fab fa-facebook-square" id="icon-facebook"></i>
    </div>
    <script>
        $(document).ready(function() {
            $('#facebook-button').click(function() {
                $('#facebook-ticket').toggleClass("ativated-facebook");
                if ($('#facebook-ticket').hasClass("ativated-facebook")) {
                    $('#icon-facebook').removeClass("fa-facebook-square");
                    $('#icon-facebook').removeClass("fab");
                    $('#icon-facebook').addClass("fa-times");
                    $('#icon-facebook').addClass("fa");
                } else {
                    $('#icon-facebook').removeClass("fa-times");
                    $('#icon-facebook').removeClass("fa");
                    $('#icon-facebook').addClass("fab");
                    $('#icon-facebook').addClass("fa-facebook-square");
                }
            });
        });
    </script>
</div>