<?php include('./layout/header.php') ?>
    
    <!-- MAIN -->
    <main>
        <section class="info festival">
            <div class="row g-3">
                <div class="col-md-6">
                    <h2>Festival Weide</h2>
                    <div class="info-block">
                        <h4>Praktische info</h4>
                        <p>
                            Het adres is Verzonnenstraat 22, 9999 Verzonnenstad. De festivalwei opent op vrijdag om 12.00u en sluit zondagnacht om 01.00u. Het terrein is makkelijk te bereiken met het openbaar vervoer. Er is ook parking voerzien. Een parkeerplaats moet je aanvragen bij je ticket.
                        </p>
                    </div>
                    <div class="info-block">
                        <h4>Voorzieningen</h4>
                        <p>
                            Naast sanitair en wasplaatsen, zijn er ook kookeilanden voorzien. Het festivalterrein is makkelijk toegankelijk voor mensen met een handicap. Extra assistentie kan je aanvragen via het contactformulier.
                        </p>
                    </div>
                </div>
                <div class="col-md-6">
                    <iframe id="festival-locatie"
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2502.7320195498232!2d3.8741465512482613!3d51.15029267947784!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47c3828674a3acd3%3A0x51a6bd39d765e83d!2sProvinciaal%20Domein%20Puyenbroeck!5e0!3m2!1snl!2sbe!4v1641917392322!5m2!1snl!2sbe"
                        width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                </div>
            </div>
        </section>

        <section class="info contact">
            <h2>Contacteer ons!</h2>
            <p>
                Voor vragen en meer info kan je een bericht naar onze helpdesk sturen. Zij sturen jou binnen de 2 dagen
                een antwoord. Bedankt voor je berichtje!
            </p>
            <div class="form-wrapper col-12 col-md-6 mx-auto">
                <form action="" class="formulier w-100" id="contact-formulier">
                    <label for="fname">Naam en voornaam</label><br>
                    <input type="text" id="name" name="name" class="w-100" required><br>
                    <label for="lname">Email adres</label><br>
                    <input type="email" id="email" name="email" class="w-100" required><br>
                    <label for="message">Jouw bericht</label><br>
                    <textarea name="message" id="message" cols="20" rows="4" class="w-100" required></textarea>
                    <input type="submit" class="button-alt">
                </form>
            </div>
        </section>
    </main>

    <?php include('./layout/footer.php'); ?>