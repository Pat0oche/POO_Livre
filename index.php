<?php
function chargerClasse($classe){
    require $classe . '.php';
    }
spl_autoload_register('chargerClasse');

$stephenKing = new Auteur("Stephen", "KING");

$ca = new Livre("Ca", 1138, 1986, 20, $stephenKing);
$simetierre = new Livre("Simetierre", 374, 1983, 15, $stephenKing);
$fleau = new Livre("Le Fléau", 823, 1978, 14, $stephenKing);
$shining = new Livre("Shining", 447, 1977, 16, $stephenKing);

$stephenKing->afficherBibliographie();