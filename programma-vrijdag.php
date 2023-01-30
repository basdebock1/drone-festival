<?php include('./layout/header.php') ?>

    <!-- MAIN -->
    <main>
        <div class="programma-navigation">
            <div class="programma-links">
                <ul class="programma-list">
                    <li class="programma-item"><a href="programma.html" class="nav-link">Overzicht</a></li>
                    <li class="programma-item active"><a href="programma-vrijdag.html" class="nav-link">Vrijdag</a></li>
                    <li class="programma-item"><a href="programma-zaterdag.html" class="nav-link">Zaterdag</a></li>
                    <li class="programma-item"><a href="programma-droneshows.html" class="nav-link">Drone Shows</a></li>
                </ul>
            </div>
        </div>

        <section id="programma">
            <div class="row g-3">
                <div class="col-lg-4">
                    <div class="kaart" style="background-image: url('assets/images/cesar.jpg');">
                        <div class="programma-title">
                            <h4>Cesar</h4>
                        </div>
                        <div class="programma-text">
                            <p>Vrijdag 20u00</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="kaart" style="background-image: url('assets/images/frankie\ loosveld.jpg');">
                        <div class="programma-title">
                            <h4>Frankie Loosveld</h4>
                        </div>
                        <div class="programma-text">
                            <p>Vrijdag 22u00</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="kaart" style="background-image: url('assets/images/team\ lazer\ beam.jpg');">
                        <div class="programma-title">
                            <h4>Team Lazer BEAM</h4>
                        </div>
                        <div class="programma-text">
                            <p>Vrijdag 23u00</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <?php include('./layout/footer.php'); ?>