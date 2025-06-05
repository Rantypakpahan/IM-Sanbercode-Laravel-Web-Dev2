<?php
require_once('Ape.php');

class Ape extends Animal {
    public $legs = 2;
    public function yell() {
        return "Auooo";
    }
}

?>