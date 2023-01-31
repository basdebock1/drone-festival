<?php include('./layout/header.php') ?>

<!-- MAIN -->
<main>

    <?php include('./snippets/components/programma-menu.php') ?>

    <section id="programma">
        <div class="row g-3">
            <?php foreach ($programmas as $show) : ?>
                <?php if ($show[$day] == "Zaterdag") : ?>
                    <div class="col-lg-4">
                        <div class="kaart" style="background-image: url('assets/images/<?= $show[$img] ?>');">
                            <div class="programma-title">
                                <h4><?= $show[$artist] ?></h4>
                            </div>
                            <div class="programma-text">
                                <p><?= $show[$day] . ' ' . $show[$hour] ?></p>
                            </div>
                        </div>
                    </div>
                <?php endif; ?>
            <?php endforeach; ?>
        </div>
    </section>
</main>

<?php include('./layout/footer.php'); ?>