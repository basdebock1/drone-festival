<?php include('./layout/header.php') ?>

    <!-- MAIN -->
    <main>
        <div class="programma-navigation">
            <div class="programma-links">
                <ul class="programma-list">
                    <li class="programma-item"><a href="programma.html" class="nav-link">Overzicht</a></li>
                    <li class="programma-item"><a href="programma-vrijdag.html" class="nav-link">Vrijdag</a></li>
                    <li class="programma-item active"><a href="programma-zaterdag.html" class="nav-link">Zaterdag</a></li>
                    <li class="programma-item"><a href="programma-droneshows.html" class="nav-link">Drone Shows</a></li>
                </ul>
            </div>
        </div>

        <section id="programma">
            <div class="row g-3">
                <div class="col-lg-4">
                    <div class="kaart" style="background-image: url('assets/images/erik\ hartman.jpg');">
                        <div class="programma-title">
                            <h4>Erik Hartman</h4>
                        </div>
                        <div class="programma-text">
                            <p>Zaterdag 20u00</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="kaart" style="background-image: url('assets/images/drone\ lazer.jpg');">
                        <div class="programma-title">
                            <h4>Lights Out</h4>
                        </div>
                        <div class="programma-text">
                            <p>zaterdag 22u00</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="kaart" style="background-image: url('assets/images/drone\ dj.jpg');">
                        <div class="programma-title">
                            <h4>VJ Tony</h4>
                        </div>
                        <div class="programma-text">
                            <p>zaterdag 23u00</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <?php include('./layout/footer.php'); ?>