<?php

include('./config/app.php');

class Card {
    // Properties
    public $artist;
    public $day;
    public $hour;
    public $type;
    public $img;
  
    function __construct($artist, $day, $hour, $type, $img)
    {
        $this->artist = $artist;
        $this->day = $day;
        $this->hour = $hour;
        $this->type = $type;
        $this->img = $img;
    }

    // Methods
    function set_artist($artist) {
      $this->artist = $artist;
    }
    function get_artist() {
      return $this->artist;
    }
  }

?>

<div class="col-lg-4">
    <div class="kaart" style="background-image: url('assets/images/<?= $img ?>');">
        <div class="programma-title">
            <h4><?= $artist ?></h4>
        </div>
        <div class="programma-text">
            <p><?= $day . ' ' . $hour ?></p>
        </div>
    </div>
</div>