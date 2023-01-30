    <!-- FOOTER -->
    <footer>
        <div class="footer-logo">
            <img src="assets/images/Drone Festival.png" alt="">
        </div>
        <div class="footer-social">
            <ul class="footer-socials">
                <li class="nav-social"><a href="https://www.facebook.com/kareldegrotehogeschool" target="_blank"
                        class="nav-link"><i class="fab fa-facebook"></i></a></li>
                <li class="nav-social"><a href="https://www.instagram.com/kdghogeschool/" target="_blank"
                        class="nav-link"><i class="fab fa-instagram"></i></a></li>
                <li class="nav-social"><a href="https://open.spotify.com/show/0QsLLj6ecmP6ofFeQRidlG" target="_blank"
                        class="nav-link"><i class="fab fa-spotify"></i></a></li>
            </ul>
        </div>
    </footer>


    <!-- JS Scripts -->

    <!-- Countdown Script -->
    <script>
        // Datum van het festival
        var countDownDate = new Date("Aug 2, 2022 19:35:00").getTime();

        // Elke seconde updaten
        var x = setInterval(function () {

            // Datum en tijd van vandaag
            var now = new Date().getTime();

            // Tijd tussen datum vandaag en datum festival
            var distance = countDownDate - now;

            // Tijdberekening van dagen, uren, minuten, seconden
            var days = Math.floor(distance / (1000 * 60 * 60 * 24));
            var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
            var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
            var seconds = Math.floor((distance % (1000 * 60)) / 1000);

            // Resultaten op de pagina weergeven
            document.getElementById("days").innerHTML = days;
            document.getElementById("hrs").innerHTML = ('0' + hours).slice(-2);
            document.getElementById("mins").innerHTML = ('0' + minutes).slice(-2);
            document.getElementById("secs").innerHTML = ('0' + seconds).slice(-2);
            // Als de tijd verstreken is, alles op nul houden 
            if (distance < 0) {
                clearInterval(x);
                document.getElementById("days").innerHTML = 0;
                document.getElementById("hrs").innerHTML = 0;
                document.getElementById("mins").innerHTML = 0;
                document.getElementById("secs").innerHTML = 0;
            }
        }, 1000);
    </script>
    <!-- Link to main JS -->
    <script src="js/main.js"></script>
    <!-- Link to Bootstrap JS (for Carousel) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
        crossorigin="anonymous"></script>

</body>

</html>