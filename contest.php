<?php include('./layout/header.php') ?>

    <!-- MAIN -->
    <main>
        <section class="contest-info">
            <h2>Hoe werkt het?</h2>
            <div class="row g-5">
                <div class="col-md-6">
                    <h4>De Contest</h4>
                    <p>
                        De wedstrijd is simpel. Stuur ons een zo cool mogelijke video of foto door, gemaakt door jouw
                        drone! Hoe unieker jouw beelden zijn, hoe groter de kans op winst. De grote winnaar ontvangt
                        vier all-access VIP tickets. Maar er zijn natuurlijk meer prijzen te winnen, dus waag zeker je
                        kans!
                    </p>
                    <h4 class="mt-5">Hoe indienen?</h4>
                    <p>
                        Stuur je materiaal door via het onderstaande formulier. Onze jury kiest de 25 beste beelden,
                        waarna een openbare stemmingsronde op sociale media gehouden wordt.
                    </p>
                </div>
                <div class="col-md-6">
                    <div class="drone-image">
                        <img src="assets/images/drone camera.jpg" alt="">
                    </div>
                </div>
            </div>
        </section>

        <section id="drone-voorbeeld">
            <h2>Voorbeeld Contest</h2>
            <div id="drone-footage">
                <iframe width="100%" height="540px" src="https://www.youtube.com/embed/VF_p5_CgY-M"
                    title="YouTube video player" frameborder="0"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                    allowfullscreen></iframe>
            </div>
        </section>

        <section class="info contest">
            <div class="form-wrapper">
                <h2>Formulier Contest</h2>
                <p>
                    Hieronder vind je het formulier om je beelden door te sturen. Na het verzenden zal je een
                    bevestigingsmail ontvangen. De mail niet gekregen? Contacteer ons dan opnieuw en wij controleren of
                    de inzending correct verstuurd is. Vergeet niet je footage in een zip bestand te zetten voor je het
                    doorstuurt. Bedankt voor je inzending en veel succes!
                </p>
                <form action="" class="formulier col-12 col-md-6" id="contact-formulier">
                    <label for="fname">Naam en voornaam</label><br>
                    <input type="text" id="name" name="name" class="w-100" required><br>
                    <label for="lname">Email adres</label><br>
                    <input type="email" id="email" name="email" class="w-100" required><br>
                    <label for="message">Jouw video/foto</label><br>
                    <input type="file" class="w-100 p-0 pb-2" style="border-radius: 0; cursor: pointer;">
                    <input type="submit" class="button-alt">
                </form>
            </div>
        </section>
    </main>

<?php include('./layout/footer.php'); ?>