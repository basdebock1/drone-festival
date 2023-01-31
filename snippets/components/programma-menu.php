<?php

include('./config/app.php');

?>

<div class="programma-navigation">
    <div class="programma-links">
        <ul class="programma-list">
            <li class="programma-item <?= $activeTab == 'programma' ? 'active' : '' ?>"><a href="programma.php" class="nav-link">Overzicht</a></li>
            <li class="programma-item <?= $activeTab == 'programma-vrijdag' ? 'active' : '' ?>"><a href="programma-vrijdag.php" class="nav-link">Vrijdag</a></li>
            <li class="programma-item <?= $activeTab == 'programma-zaterdag' ? 'active' : '' ?>"><a href="programma-zaterdag.php" class="nav-link">Zaterdag</a></li>
            <li class="programma-item <?= $activeTab == 'programma-droneshows' ? 'active' : '' ?>"><a href="programma-droneshows.php" class="nav-link">Drone Shows</a></li>
        </ul>
    </div>
</div>