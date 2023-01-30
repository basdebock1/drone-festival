
<?php include('./layout/header.php')?>

    <!-- MAIN -->
    <main>
        <div id="countdown">
            <div class="countdown row g-3">
                <div class="countdown-container col-md-3">
                    <div class="countdown-card">
                        <p id="days" class="countdown-number">09</p>
                        <p class="countdown-text">Dagen</p>
                    </div>
                </div>
                <div class="countdown-container col-md-3">
                    <div class="countdown-card">
                        <p id="hrs" class="countdown-number">04</p>
                        <p class="countdown-text">Uren</p>
                    </div>
                </div>
                <div class="countdown-container col-md-3">
                    <div class="countdown-card">
                        <p id="mins" class="countdown-number">16</p>
                        <p class="countdown-text">Minuten</p>
                    </div>
                </div>
                <div class="countdown-container col-md-3">
                    <div class="countdown-card">
                        <p id="secs" class="countdown-number">33</p>
                        <p class="countdown-text">Seconden</p>
                    </div>
                </div>
            </div>
        </div>

        <div id="call-to-action">
            <div class="action button">
                <a href="tickets.html">Tickets nu verkrijgbaar!</a>
            </div>
        </div>

        <section id="festival-info">
            <h2>Wat te verwachten?</h2>
            <div class="row g-3">
                <div class="col-lg-4">
                    <div class="info-kaart">
                        <div class="info-text">
                            <h4 class="info-title">Laser Shows</h4>
                            <p>'s Werelds beste special FX teams werken samen aan gigantische drone shows met laser
                                en licht effecten.</p>
                        </div>
                        <div class="info-image">
                            <img src="assets/images/team lazer beam.jpg" alt="Team Lazer Beam">
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="info-kaart">
                        <div class="info-image">
                            <img src="assets/images/food.jpg" alt="Food & Drinks">
                        </div>
                        <div class="info-text">
                            <h4 class="info-title">Food & Drinks</h4>
                            <p>Heerlijk smullen op de festivalweide? Dat kan! Meer dan 20 foodtrucks bereiden de
                                lekkerste gerechtjes voor.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="info-kaart">
                        <div class="info-text">
                            <h4 class="info-title">Awesome Line Up</h4>
                            <p>Een bomvol programma met de beste artiesten aller tijden. Ze staan vol spanning te
                                trappelen om voor
                                jullie op te treden!</p>
                        </div>
                        <div class="info-image">
                            <img src="assets/images/line up.jpg" alt="Festival Crowd">
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="artist-carousel">
            <h2>Artiesten in de kijker</h2>
            <div id="carousel" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="assets/images/cesar.jpg" alt="Artist Cesar">
                        <div class="carousel-text">
                            <h5 class="carousel-artist-name">Cesar</h5>
                            <p class="carousel-artist-date">Vrijdag 20u00</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="assets/images/erik hartman.jpg" class="d-block w-100" alt="Artist Erik Hartman">
                        <div class="carousel-text">
                            <h5 class="carousel-artist-name">Erik Hartman</h5>
                            <p class="carousel-artist-date">Zaterdag 20u00</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="assets/images/frankie loosveld.jpg" class="d-block w-100"
                            alt="Artist Frankie Loosveld">
                        <div class="carousel-text">
                            <h5 class="carousel-artist-name">Frankie Loosveld</h5>
                            <p class="carousel-artist-date">Vrijdag 22u00</p>
                        </div>
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carousel" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carousel" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </section>
    </main>

<?php include('./layout/footer.php');