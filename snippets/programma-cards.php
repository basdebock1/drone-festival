<?php

// $programmas = [
//     $lo = new Card(
//         "Lights Out",
//         "Zaterdag",
//         "22u00",
//         "lazer",
//         "drone\ lazer.jpg",
//     ),
//     $tlb = new Card(
//         "Team Lazer BEAM",
//         "Vrijdag",
//         "23u00",
//         "lazer",
//         "team\ lazer\ beam.jpg"
//     ),
//     $cesar = new Card(
//         "Cesar",
//         "Vrijdag",
//         "20u00",
//         "band",
//         "cesar.jpg"
//     ),
//     $erik = new Card(
//         "Erik Hartman",
//         "Zaterdag",
//         "20u00",
//         "band",
//         "erik\ hartman.jpg"
//     ),
//     $frankie = new Card(
//         "Frankie Loosveld",
//         "Vrijdag",
//         "22u00",
//         "band",
//         "frankie\ loosveld.jpg"
//     ),
//     $vj = new Card(
//         "VJ Tony",
//         "Zaterdag",
//         "23u00",
//         "dj",
//         "drone\ dj.jpg"
//     ),
// ];

?>

<section id="programma">
    <div class="row g-3">
        <?php foreach ($programmas as $show) : 
            if ($show[$day] == "Zaterdag") : ?>
                <?php include('./components/programma-card.php'); ?>
            <?php endif;
        endforeach; ?>
    </div>
</section>